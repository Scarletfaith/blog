<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Services\Post\PostIndex;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    private $postsIndex;

    public function __construct(PostIndex $postsIndex)
    {
        $this->postsIndex = $postsIndex;
    }

    public function __invoke() {
        $posts = $this->postsIndex->index();
        return view('admin.post.index', compact('posts'));
    }
}
