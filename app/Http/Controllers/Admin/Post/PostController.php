<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\Post\PostRepository;
use App\Services\Admin\Post\PostService;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postServices;
    private $postRepository;

    public function __construct(PostService $PostServices, PostRepository $PostRepository)
    {
        $this->postServices = $PostServices;
        $this->postRepository = $PostRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->getAll();

        return view(
            'admin.post.index',
            [
            'posts' => $posts
            ]
        );
    }

    public function show(Request $request)
    {
        $post = $this->postRepository->find($request->id);

        return view(
            'admin.post.show',
            [
            'post'  => $post
            ]
        );
    }

    public function create()
    {
        $categories = $this->postRepository->getCategories();

        return view(
            'admin.post.create',
            [
            'categories' => $categories
            ]
        );
    }

    public function store(StoreRequest $request)
    {
        $this->postServices->create($request);

        return redirect()->route('admin.post.index');
    }

    public function edit(Request $request)
    {
        $post = $this->postRepository->find($request->id);
        $categories = $this->postRepository->getCategories();

        return view(
            'admin.post.edit',
            [
            'post'          => $post,
            'categories'    => $categories
            ]
        );
    }

    public function update(UpdateRequest $request)
    {
        $this->postServices->update($request);

        return redirect()->route('admin.post.index');
    }

    public function delete(Request $request)
    {
        $this->postServices->delete($request->id);

        return redirect()->route('admin.post.index');
    }
}
