<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\PostCategory;

class DeleteController extends Controller
{
    public function __invoke(Post $post) {
        PostCategory::where('post_id', $post->id)->delete();
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}
