<?php

declare(strict_types=1);

namespace App\Services\Category;

use App\Contracts\Category\CreateCategoryModelInterface;
use App\Contracts\Category\EditCategoryModelInterface;
use App\Models\Category;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryCreator
{
    public function create(CreateCategoryModelInterface $model): Category
    {
        $slug  = Str::slug($model->getTitle(), '-');
        $count = DB::table('posts')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $slug  = $count ? "{$slug}-{$count}" : $slug;

        return Category::create([
            'title' => $model->getTitle(),
            'slug'  => $slug,
        ]);
    }

    public function edit(EditCategoryModelInterface $model): Category
    {
        $slug  = Str::slug($model->getTitle(), '-');
        $count = DB::table('posts')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $slug  = $count ? "{$slug}-{$count}" : $slug;

        return Category::updateOrCreate([
            'title' => $model->getTitle(),
            'slug'  => $slug,
        ]);
    }
}