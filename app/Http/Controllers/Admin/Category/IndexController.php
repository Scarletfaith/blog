<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Services\Category\CategoryIndex;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    private $categoryIndex;

    public function __construct(CategoryIndex $categoryIndex)
    {
        $this->categoryIndex = $categoryIndex;
    }

    public function __invoke() {
        $categories = $this->categoryIndex->index();
        return view('admin.category.index', compact('categories'));
    }
}
