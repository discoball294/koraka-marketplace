<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        \Cart::add($request->id, $request->name, $request->qty, $request->price, ['image' => $request->image]);
        return \Cart::content();
    }

    public function clearCart()
    {
        \Cart::destroy();
    }

    public function content()
    {
        return view('store-front.shopping-cart');
    }
}
