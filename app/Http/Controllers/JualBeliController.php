<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class JualBeliController extends Controller
{
    public function indexJual()
    {
        if ($store_exist = \App\User::find(\Auth::id())->myStore()->exists()) {
            $store_id = \Auth::user()->myStore->id;
            $list_penjualan = \App\Transaksi::whereHas('products.stores', function ($query) use ($store_id) {
                $query->where('id', '=', $store_id);
            })->paginate();
        } else {
            return abort(404, 'Belum Buka Toko');
        }
        return view('store-front.penjualan', compact('list_penjualan'));

    }

    public function detailJual($id)
    {
        $transaksi = Transaksi::find($id);
        return view('store-front.detail-penjualan', compact('transaksi'));
    }

    public function indexBeli()
    {
        $list_pembelian = \App\Transaksi::where('user_id', '=', \Auth::id())->paginate(10);
        return view('store-front.pembelian', compact('list_pembelian'));

    }

    public function detailBeli($id)
    {
        $transaksi = Transaksi::find($id);
        return view('store-front.detail-pembelian', compact('transaksi'));
    }

    public function kirim(Request $request)
    {
        $transaksi = Transaksi::find($request->id);
        $transaksi->resi = $request->resi;
        $transaksi->status = 2;
        $transaksi->save();
        return redirect()->back();
    }

    public function terima(Request $request)
    {
        $transaksi = Transaksi::find($request->id);
        $transaksi->status = 3;
        $transaksi->save();
        return redirect()->back();
    }

    public function invoice($id)
    {
        return view('store-front.invoice', ['transaksi' => Transaksi::find($id)]);
    }
}
