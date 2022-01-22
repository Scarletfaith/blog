<?php

declare(strict_types=1);

namespace App\Services\Category;

use App\Models\Category;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryIndex
{
    public function index()
    {
        $categories = DB::table('categories')->get();

        return $categories;
    }
}