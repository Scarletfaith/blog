<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke() {
        $posts = DB::table('posts')->get();
        return view('admin.post.index', compact('posts'));
    }
}
