<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Services\Post\PostServices;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Category;

class PostController extends Controller
{
    private $PostServices;

    public function __construct(PostServices $PostServices)
    {
        $this->PostServices = $PostServices;
    }

    public function index() {
        $posts = $this->PostServices->getAll();

        return view('admin.post.index')->with('posts', $posts);
    }

    public function show(Request $request) {
        $post = $this->PostServices->show($request->id);

        return view('admin.post.show')->with('post', $post);
    }

    public function createPage() {
        $categories = Category::all();
        return view('admin.post.create')->with('categories', $categories);
    }

    public function store(StoreRequest $request) {
        $this->PostServices->create($request);

        return redirect()->route('admin.post.index');
    }

    public function edit(Request $request) {
        $post = $this->PostServices->show($request->id);
        $categories = Category::all();

        return view('admin.post.edit')->with('post', $post)->with('categories', $categories);
    }

    public function update(UpdateRequest $request)
    {
        $this->PostServices->update($request);        

        return redirect()->route('admin.post.index');
    }

    public function delete(Request $request) {
        $this->PostServices->delete($request->id);
        /*PostCategory::where('post_id', $post->id)->delete();
        $post->delete();*/

        return redirect()->route('admin.post.index');
    }
}