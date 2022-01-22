<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;

use App\Services\Category\CategoryCreator;

class UpdateController extends Controller
{
    private $categoryCreator;

    public function __construct(CategoryCreator $categoryCreator)
    {
        $this->categoryCreator = $categoryCreator;
    }

    public function __invoke(UpdateRequest $request)
    {
        $this->categoryCreator->edit($request);

        return redirect()->route('admin.category.index');
    }
}
