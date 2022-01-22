<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;

use App\Services\Post\PostCreator;

class UpdateController extends Controller
{
    private $postCreator;

    public function __construct(PostCreator $postCreator)
    {
        $this->postCreator = $postCreator;
    }

    public function __invoke(UpdateRequest $request)
    {
        $this->postCreator->edit($request);        

        return redirect()->route('admin.post.index');
    }
}