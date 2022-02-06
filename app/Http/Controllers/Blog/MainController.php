<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogServices;

use Illuminate\Http\Request;

class MainController extends Controller
{
    private $BlogServices;

    public function __construct(BlogServices $BlogServices) {
        $this->BlogServices = $BlogServices;
    }

    public function index() {
        $posts = $this->BlogServices->getAll();
        $categories = $this->BlogServices->getCategories();

        return view('blog.index')->with('data', [
            'posts'         => $posts,
            'categories'    => $categories
        ]);
    }
}
