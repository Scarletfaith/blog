<?php

declare(strict_types=1);

namespace App\Services\Post;

use App\Contracts\Post\CreatePostModelInterface;
use App\Contracts\Post\EditPostModelInterface;
use App\Models\Post;

use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostCreator
{
    /**
     * @var \Illuminate\Contracts\Filesystem\Factory
     */
    private $factory;

    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    public function create(CreatePostModelInterface $model): Post
    {
        $category_ids = $model->getCategoryIds();

        // Проверка и формирование Slug
        $slug = Str::slug($model->getTitle(), '-');
        $count = DB::table('posts')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $slug = $count ? "{$slug}-{$count}" : $slug;

        $disk = $this->factory->disk('public');
        $preview_image = $disk->put('/images', $model->getPostPreviewImage());

        $user_id = auth()->id();
        
        $post = Post::create([
            'title'         => $model->getTitle(),
            'slug'          => $slug,
            'content'       => $model->getPostContent(),
            'preview_image' => $preview_image,
            'user_id'       => $user_id
        ]);

        $post->categories()->attach($category_ids);

        return $post;
    }

    public function edit(EditPostModelInterface $model): Post
    {
        $data['title'] = $model->getTitle();
        $preview_image = $model->getPostPreviewImage();
        $data['content'] = $model->getPostContent();

        $category_ids = $model->getCategoryIds();

        $slug = Str::slug($data['title'], '-');
        $count = DB::table('posts')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $data['slug'] = $count ? "{$slug}-{$count}" : $slug;

        $disk = $this->factory->disk('public');

        if (isset($preview_image)) {
            $data['preview_image'] = $disk->put('/images', $preview_image);
        }

        $data['user_id'] = auth()->id();
        
        $post = Post::updateOrCreate($data);
        $post->categories()->sync($category_ids);

        return $post;
    }
}