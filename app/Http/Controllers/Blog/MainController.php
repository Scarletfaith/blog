<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogService;

class MainController extends Controller
{
    private $blogService;

    public function __construct(BlogService $BlogService)
    {
        $this->blogService = $BlogService;
    }

    public function index()
    {
        $posts = $this->blogService->getAll();
        $categories = $this->blogService->getCategories();

        return view(
            'blog.index',
            [
            'posts'         => $posts,
            'categories'    => $categories
            ]
        );
    }
}
