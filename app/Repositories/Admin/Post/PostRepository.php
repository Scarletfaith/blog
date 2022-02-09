<?php

namespace App\Repositories\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository
{
    public function getAll(): Collection
    {
        return Post::query()->get();
    }

    public function getCategories(): Collection
    {
        return Category::query()->get();
    }

    public function find(int $id): Post
    {
        return Post::query()->findOrFail($id);
    }
}
