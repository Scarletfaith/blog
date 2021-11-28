<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class MainController extends Controller
{
    public function __invoke() {
        $categories = Category::all();
        $posts = Post::paginate(6);
        return view('blog.index', compact('posts', 'categories'));
    }
}
