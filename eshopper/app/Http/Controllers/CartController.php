<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart($id) {
        $product = Product::find($id);
        Cart::add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price, 'options' => ['image' => $product->prod_image]]);

        return redirect()->route('cart.show');
    }

    public function showCart() {
        $total = Cart::total();
        $cart = Cart::content();

        return view('frontend.cart', compact('cart', 'total'));
    }

    public function deleteCart($id) {
        Cart::remove($id);

        return back();
    }
}
