<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Services\Category\CategoryServices;

use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller {
    private $CategoryServices;

    public function __construct(CategoryServices $CategoryServices) {
        $this->CategoryServices = $CategoryServices;
    }

    public function index() {
        $categories = $this->CategoryServices->getAll();
        foreach ($categories as $category) {
            $data[] = array(
                'id'    => $category->id,
                'title' => $category->title
            );
        }
        return view('admin.category.index')->with('categories', $data);
    }

    public function show(Request $request) {
        $category = $this->CategoryServices->show($request->id);

        return view('admin.category.show')->with('category', [
            'id'            => $category->id,
            'title'         => $category->title,
            'created_at'    => $category->created_at,
            'updated_at'    => $category->updated_at
        ]);
    }

    public function create() {
        return view('admin.category.create');
    }
    
    public function store(StoreRequest $request) {
        $this->CategoryServices->create($request);

        return redirect()->route('admin.category.index');
    }

    public function edit(Request $request) {
        $category = $this->CategoryServices->show($request->id);

        return view('admin.category.edit')->with('category', $category);
    }

    public function update(UpdateRequest $request) {
        $this->CategoryServices->update($request);

        return redirect()->route('admin.category.index');
    }

    public function delete(Request $request) {
        $this->CategoryServices->delete($request->id);

        return redirect()->route('admin.category.index');
    }
}
