<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Product;
use App\Review;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
            $title = 'Semua Produk';
            $produk = Product::paginate(9);
        } elseif ($category == 'Pria') {
            $title = 'Pria';
            $produk = Product::where('kategori_id', '=', 1)->paginate(9);
        } elseif ($category == 'Wanita') {
            $title = 'Wanita';
            $produk = Product::where('kategori_id', '=', 2)->paginate(9);
        } else {
            $title = 'Lain - lain';
            $produk = Product::where('kategori_id', '=', 3)->paginate(9);
        }
        return view('store-front.product', compact('produk', 'user', 'title'));
    }

    public function indexStore($url_toko)
    {
        $mystore = Store::where('url_toko', '=', $url_toko)->first();
        $produk = $mystore->product()->paginate(9);
        return view('store-front.mystore', compact('mystore', 'produk'));
    }

    public function singleProduct($id)
    {
        $buy = false;
        if (\Auth::check()) {
            $buy = \Auth::user()->whereHas('transaksi.products', function ($query) use ($id) {
                $query->where('products.id', '=', $id);
            })->where('users.id', '=', \Auth::id())->exists();
        }
        $owner = \App\Product::find($id)->stores->user()->where('id', '=', \Auth::id())->exists();
        $reviews = Review::where('product_id', '=', $id)->get();
        //dd($reviews);
        $product = Product::find($id);
        $product->addPageView();
        return view('store-front.single-product', compact('product', 'buy', 'owner', 'reviews'));
    }

    public function search()
    {
        $title = 'Hasil Pencarian';
        $query = Input::get('q');
        $produk = Product::search($query)->paginate(10);
        return view('store-front.product', compact('produk', 'title', 'query'));
    }
}
