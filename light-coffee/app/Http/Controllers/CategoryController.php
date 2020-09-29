<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\UpdateCateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create(AddCateRequest $request) {
        $category = new Category;
        $category->cate_name = $request->name;
        $category->save();
        
        return redirect()->route('category.index');
    }

    public function edit($id) {
        $category = Category::find($id);      
        return view('admin.category.edit', compact('category'));
    }

    public function update(UpdateCateRequest $request, $id) {
        $category = Category::find($id);
        $category->cate_name = $request->name;
        $category->save();
        
        return redirect()->route('category.index');
    }

    public function delete($id) {
        Category::destroy($id);

        return redirect()->route('category.index');
    }
}
