<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke() {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }
}