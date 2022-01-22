<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;

use App\Services\Category\CategoryCreator;

class StoreController extends Controller
{
    private $categoryCreator;

    public function __construct(CategoryCreator $categoryCreator)
    {
        $this->categoryCreator = $categoryCreator;
    }
        
    public function __invoke(StoreRequest $request)
    {
        $this->categoryCreator->create($request);

        return redirect()->route('admin.category.index');
    }
}
