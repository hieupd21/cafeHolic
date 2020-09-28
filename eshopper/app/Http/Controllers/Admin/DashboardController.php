<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $product = Product::count('prod_id');
        $category = Category::count('cate_id');
        $user = User::count('id');
        return view('backend.index', compact('product', 'category', 'user'));
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
