<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __invoke() {
    }

    public function show($category) {
        $categories = Category::all();
        $category_id = DB::table('categories')->where('slug', $category)->first();
        $posts = Post::all()->where('category_id', $category_id->id);

        // dd($category_id->id);

        return view('category.index', compact('posts', 'categories'));
    }
}
