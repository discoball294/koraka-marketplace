<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Product;
use App\Store;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('store-front.home', compact('user'));
    }

    public function indexProduct($category)
    {
        if ($category == 'all') {
            $produk = Product::paginate(9);
            return view('store-front.product', compact('produk', 'user'));
        } elseif ($category == 'Pria') {
            $produk = Product::where('kategori_id', '=', 1)->paginate(9);
            return view('store-front.product', compact('produk', 'user'));
        } elseif ($category == 'Wanita') {
            $produk = Product::where('kategori_id', '=', 2)->paginate(9);
            return view('store-front.product', compact('produk', 'user'));
        } else {
            $produk = Product::where('kategori_id', '=', 3)->paginate(9);
            return view('store-front.product', compact('produk', 'user'));
        }
    }

    public function indexStore($url_toko)
    {
        $mystore = Store::where('url_toko', '=', $url_toko)->first();
        $produk = $mystore->product()->paginate(9);
        return view('store-front.mystore', compact('mystore', 'produk'));
    }

    public function singleProduct($id)
    {
        $product = Product::find($id);
        $product->addPageView();
        return view('store-front.single-product', compact('product'));
    }
}
