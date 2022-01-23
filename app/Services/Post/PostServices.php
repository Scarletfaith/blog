<?php

declare(strict_types=1);

namespace App\Services\Post;

use App\Contracts\Post\CreatePostModelInterface;
use App\Contracts\Post\EditPostModelInterface;
use App\Models\Post;
use App\Models\PostCategory;

use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostServices
{
    /**
     * @var \Illuminate\Contracts\Filesystem\Factory
     */
    private $factory;

    public function __construct(Factory $factory) {
        $this->factory = $factory;
    }

    public function getAll() {
        $posts = DB::table('posts')->get();

        return $posts;
    }

    public function show($post_id) {
        $post = Post::where('id', $post_id)->first();

        return $post;
    }

    public function create(CreatePostModelInterface $model): Post {
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

    public function update(EditPostModelInterface $model): Post {
        $post = Post::find($model->id);

        $preview_image = $model->getPostPreviewImage();
        $category_ids = $model->getCategoryIds();

        $slug = Str::slug($model->getTitle(), '-');
        $count = DB::table('posts')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $slug = $count ? "{$slug}-{$count}" : $slug;

        $disk = $this->factory->disk('public');

        $post->title = $model->getTitle();
        $post->content = $model->getPostContent();
        $post->slug = $slug;

        if (isset($preview_image)) {
            $post->preview_image = $disk->put('/images', $preview_image);
        }

        $post->user_id = $model->user()->id;
        
        $post->save();
        $post->categories()->sync($category_ids);

        return $post;
    }

    public function delete($post_id) {
        $post = Post::find($post_id);
        PostCategory::where('post_id', $post_id)->delete();
        
        return $post->delete();
    }
}