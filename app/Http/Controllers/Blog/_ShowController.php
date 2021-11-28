<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke() {
    }

    public function show($slug) {
        $categories = Category::all();
        $post = Post::all()->where('slug', $slug)->first();
        return view('blog.show', compact('post', 'categories'));
    }
}
