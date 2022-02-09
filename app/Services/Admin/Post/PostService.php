<?php

declare(strict_types=1);

namespace App\Services\Admin\Post;

use App\Contracts\Post\CreatePostModelInterface;
use App\Contracts\Post\EditPostModelInterface;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class PostService
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
        $post = new Post();
        $post->title = $model->getTitle();
        $post->slug = $this->slugGenerate($model->getTitle());
        $post->content = $model->getPostContent();

        if ($model->getPostPreviewImage()) {
            $post->preview_image = $this->saveImage($model->getPostPreviewImage());
        }

        $post->user()->associate($model->user());
        $post->save();
        $post->categories()->attach($model->getCategoryIds());

        return $post;
    }

    public function update(EditPostModelInterface $model): Post
    {
        $post = Post::find($model->id);
        $post->title = $model->getTitle();
        $post->content = $model->getPostContent();
        $post->slug = $this->slugGenerate($model->getTitle());

        if ($model->getPostPreviewImage()) {
            $post->preview_image = $this->saveImage($model->getPostPreviewImage());
        }

        $post->user()->associate($model->user());
        $post->save();
        $post->categories()->sync($model->getCategoryIds());

        return $post;
    }

    public function delete(int $id)
    {
        $post = Post::find($id);
        PostCategory::where('post_id', $id)->delete();

        return $post->delete();
    }

    private function slugGenerate(string $title): string
    {
        $slug = Str::slug($title, '-');
        $count = Post::query()->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }

    private function saveImage(UploadedFile $image): string
    {
        $disk = $this->factory->disk('public');

        return $disk->put('/images', $image);
    }
}
