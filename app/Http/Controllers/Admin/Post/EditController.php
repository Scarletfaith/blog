<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(Post $post) {
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }
}
