<?php

declare(strict_types=1);

namespace App\Services\Blog;

use App\Contracts\Category\CreateCategoryModelInterface;
use App\Contracts\Category\EditCategoryModelInterface;

use App\Models\Post;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogServices
{
    public function getAll() {
        $posts = Post::paginate(6);

        return $posts;
    }

    public function getCategories() {
        $categories = DB::table('categories')->get();

        return $categories;
    }
}