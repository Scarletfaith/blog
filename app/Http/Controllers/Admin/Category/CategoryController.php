<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\Category\CategoryRepository;
use App\Services\Admin\Category\CategoryService;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryService;
    private $categoryRepository;

    public function __construct(CategoryService $CategoryService, CategoryRepository $CategoryRepository)
    {
        $this->categoryService = $CategoryService;
        $this->categoryRepository = $CategoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll();

        return view('admin.category.index')->with('categories', $categories);
    }

    public function show(Request $request)
    {
        $category = $this->categoryRepository->find($request->id);

        return view(
            'admin.category.show',
            [
            'category' => $category
            ]
        );
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(StoreRequest $request)
    {
        $this->categoryService->create($request);

        return redirect()->route('admin.category.index');
    }

    public function edit(Request $request)
    {
        $category = $this->categoryRepository->find($request->id);

        return view(
            'admin.category.edit',
            [
            'category' => $category
            ]
        );
    }

    public function update(UpdateRequest $request)
    {
        $this->categoryService->update($request);

        return redirect()->route('admin.category.index');
    }

    public function delete(Request $request)
    {
        $this->categoryService->delete($request->id);

        return redirect()->route('admin.category.index');
    }
}
