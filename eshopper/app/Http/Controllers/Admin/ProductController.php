<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProduct() {
        $products = DB::table('products')->join('categories', 'products.prod_cate','=','categories.cate_id')->orderByDesc('prod_id')->get();
        return view('backend.product', compact('products'));
    }

    public function createProduct() {
        $categories = Category::all();
        return view('backend.product-create', compact('categories'));
    }

    public function storeProduct(AddProductRequest $request) {
        $filename = $request->image->getClientOriginalName();

        $product = new Product;
        $product->prod_name = $request->name;
        $product->prod_price = $request->price;
        $product->prod_image = $filename;
        $product->prod_discount = $request->discount;
        $product->prod_status = $request->status;
        $product->prod_description = $request->description;
        $product->prod_featured = $request->featured;
        $product->prod_cate = $request->categories;
        $product->save();
        $request->image->storeAs('avatar', $filename);

        return redirect()->route('product');
    }

    public function showProduct($id) {
        $prod_cate = DB::table('products')->join('categories', 'products.prod_cate','=','categories.cate_id')->where('prod_id',$id)->first();
        return view('backend.product-show', compact('prod_cate'));
    }

    public function editProduct($id) {
        $product = Product::find($id);
        $categories = Category::all();
        return view('backend.product-edit', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, $id) {
        $product = new Product;
        $arr['prod_name'] = $product->prod_name = $request->name;
        $arr['prod_price'] = $product->prod_price = $request->price;
        if ($request->hasFile('image')) {
            $image = $request->image->getClientOriginalName();
            $arr['prod_image'] = $image;
        }
        $arr['prod_status'] = $product->prod_status = $request->status;
        $arr['prod_description'] = $product->prod_description = $request->description;
        $arr['prod_featured'] = $product->prod_featured = $request->featured;
        $arr['prod_discount'] = $product->prod_discount = $request->discount;
        $arr['prod_cate'] = $product->prod_cate = $request->categories;

        $product::where('prod_id', $id)->update($arr);

        return redirect()->route('product');
    }

    public function deleteProduct($id) {
        Product::destroy($id);
        
        return redirect()->route('product');
    }
}
