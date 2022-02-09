<?php

declare(strict_types=1);

namespace App\Services\Blog;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class BlogService
{
    public function getAll(int $perPage = 6): LengthAwarePaginator
    {
        return Post::query()->paginate($perPage);
    }

    public function getCategories(): Collection
    {
        return Category::query()->get();
    }
}
