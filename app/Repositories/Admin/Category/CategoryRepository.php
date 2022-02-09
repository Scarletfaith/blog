<?php

namespace App\Repositories\Admin\Category;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository
{
    public function getAll(): Collection
    {
        return Category::query()->get();
    }

    public function find(int $id): Category
    {
        return Category::query()->findOrFail($id);
    }
}
