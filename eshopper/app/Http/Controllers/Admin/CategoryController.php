<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\UpdateCateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCate() {
        $categories = Category::all();
        return view('backend.category', compact('categories'));
    }

    public function createCate(AddCateRequest $request) {
        $category = new Category;
        $category->cate_name = $request->name;
        $category->save();
        
        return redirect()->route('category');
    }

    public function editCate($id) {
        $category = Category::find($id);      
        return view('backend.edit-category', compact('category'));
    }

    public function updateCate(UpdateCateRequest $request, $id) {
        $category = Category::find($id);
        $category->cate_name = $request->name;
        $category->save();
        
        return redirect()->route('category');
    }

    public function deleteCate($id) {
        Category::destroy($id);

        return redirect()->route('category');
    }
}
