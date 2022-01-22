<?php

declare(strict_types=1);

namespace App\Services\Post;

use App\Models\Post;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostIndex
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        return $posts;
    }
}