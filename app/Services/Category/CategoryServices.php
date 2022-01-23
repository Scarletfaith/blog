<?php

declare(strict_types=1);

namespace App\Services\Category;

use App\Contracts\Category\CreateCategoryModelInterface;
use App\Contracts\Category\EditCategoryModelInterface;
use App\Models\Category;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryServices
{
    public function getAll() {
        $categories = DB::table('categories')->get();

        return $categories;
    }

    public function show($category_id) {
        $category = DB::table('categories')->find($category_id);

        return $category;
    }    

    public function create(CreateCategoryModelInterface $model): Category {
        $slug  = Str::slug($model->getTitle(), '-');
        $count = DB::table('categories')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $slug  = $count ? "{$slug}-{$count}" : $slug;

        return Category::create([
            'title' => $model->getTitle(),
            'slug'  => $slug,
        ]);
    }

    public function update(EditCategoryModelInterface $model): Category {
        $category = Category::find($model->id);
        
        $slug  = Str::slug($model->getTitle(), '-');
        $count = DB::table('categories')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $slug  = $count ? "{$slug}-{$count}" : $slug;

        $category->title = $model->getTitle();
        $category->slug = $slug;
        $category->save();

        return $category;
    }

    public function delete($category_id) {
        return DB::table('categories')->where('id', $category_id)->delete();
    }
}