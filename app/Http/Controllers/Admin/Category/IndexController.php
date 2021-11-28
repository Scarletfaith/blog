<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke() {
        $categories = DB::table('categories')->get();
        return view('admin.category.index', compact('categories'));
    }
}
