<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $prod_feat = Product::where('prod_featured', 'yes')->orderByDesc('prod_id')->take(3)->get();
        $prod_new = Product::orderByDesc('prod_id')->paginate(6);
        $categories = Category::all();
        $product = Product::count('prod_id');

        return view('frontend.index', compact('prod_feat', 'prod_new', 'categories', 'product'));
    }

    public function about() {
        return view('frontend.about');
    }

    public function detail($id) {
        $product = Product::find($id);
        $comments = Comment::where('cmt_prod', $id)->get();
        $prod_rela = Product::where('prod_cate','=',$product->prod_cate)->take(3)->get();

        return view('frontend.detail', compact('product', 'prod_rela', 'comments'));
    }

    public function category($id) {
        $categories = Category::all();
        $product = Product::count('prod_id');
        $cate_name = Category::find($id);
        $prod_cate = Product::where('prod_cate', $id)->paginate(6);

        return view('frontend.category', compact('categories', 'product', 'cate_name', 'prod_cate'));
    }

    public function comment(Request $request, $id) {
        $comment = new Comment;
        $comment->cmt_email = $request->email;
        $comment->cmt_name = $request->name;
        $comment->cmt_content = $request->content;
        $comment->cmt_prod = $id;
        $comment->save();

        return back();
    }

    public function search(Request $request) {
        $categories = Category::all();
        $result = $request->result;
        $keyword = $result;
        $result = str_replace('', '%', $result);
        $products = Product::where('prod_name','like','%'.$result.'%')->get();
        $count = Product::where('prod_name','like','%'.$result.'%')->count();

        return view('frontend.search', compact('products', 'categories', 'keyword', 'count'));
    }

    public function checkout() {
        return view('frontend.checkout');
    }
}
