<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;

use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SlugServices
{
    /**
     * @var \Illuminate\Contracts\Filesystem\Factory
     */
    private $factory;

    public function __construct(Factory $factory) {
        $this->factory = $factory;
    }
    
    public function getPost($posts) {
        return Post::where('id', $posts->id)->first();
    }

    public function getPostsInCategory($category_id) {
        $data = Post::whereHas('categories', function(Builder $query) use ($category_id) {
            $query->where('categories.id', $category_id);
        })->paginate(6);

        return $data;
    }

    public function getPostSlug($slug) {
        $data = Post::where('slug', $slug)->first();

        return $data;
    }

    public function getCategorySlug($slug) {
        $data = Category::where('slug', $slug)->first();

        return $data;
    }

    public function getCategories() {
        return Category::get();
    }
}