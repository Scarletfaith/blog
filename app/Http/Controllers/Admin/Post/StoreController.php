<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;

use App\Services\Post\PostCreator;

class StoreController extends Controller
{
    private $postCreator;

    public function __construct(PostCreator $postCreator)
    {
        $this->postCreator = $postCreator;
    }

    public function __invoke(StoreRequest $request)
    {
        $this->postCreator->create($request);

        return redirect()->route('admin.post.index');
    }
}
