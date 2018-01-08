<?php

namespace App\Http\Controllers;

use App\Product;
use App\Store;
use App\Transaksi;
use App\User;
use Illuminate\Http\Request;

class IndexAdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function order()
    {
        $transaksi = Transaksi::paginate(10);
        //dd($transaksi);
        return view('admin.transaksi.index', compact('transaksi'));
    }

    public function detailOrder($id)
    {
        $transaksi = Transaksi::find($id);
        return view('admin.transaksi.detail', compact('transaksi'));
    }

    public function confirm(Request $request)
    {
        $transaksi = Transaksi::find($request->id);
        $transaksi->status = 1;
        $transaksi->save();
        return redirect()->back();
    }

    public function registeredUser()
    {
        $registered_user = User::role('User')->paginate(20);
        //dd($user);
        return view('admin.user.index', compact('registered_user'));
    }

    public function allStore()
    {
        $all_store = Store::paginate(20);
        //dd($user);
        return view('admin.store.index', compact('all_store'));
    }

    public function allProduct()
    {
        $all_products = Product::paginate(20);
        //dd($user);
        return view('admin.product.index', compact('all_products'));
    }
}
