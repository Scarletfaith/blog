<?php

declare(strict_types=1);

namespace App\Services\Admin\Category;

use App\Contracts\Category\CreateCategoryModelInterface;
use App\Contracts\Category\EditCategoryModelInterface;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryService
{
    public function create(CreateCategoryModelInterface $model): Category
    {
        $category = new Category();
        $category->title = $model->getTitle();
        $category->slug = $this->slugGenerate($model->getTitle());
        $category->save();

        return $category;
    }

    public function update(EditCategoryModelInterface $model): Category
    {
        $category = Category::find($model->id);
        $category->title = $model->getTitle();
        $category->slug = $this->slugGenerate($model->getTitle());
        $category->save();

        return $category;
    }

    public function delete(int $id)
    {
        return Category::find($id)->delete();
    }

    private function slugGenerate(string $title): string
    {
        $slug = Str::slug($title, '-');
        $count = Category::query()->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
}
