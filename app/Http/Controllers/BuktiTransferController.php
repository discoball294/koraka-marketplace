<?php

namespace App\Http\Controllers;

use App\BuktiTransfer;
use App\Transaksi;
use Illuminate\Http\Request;

class BuktiTransferController extends Controller
{
    public function upload(Request $request)
    {
        $transaksi = Transaksi::find($request->transaksi_id);
        $path = $request->gambar->store('bukti', 'public');
        $bukti = $transaksi->bukti ?: new BuktiTransfer();
        $bukti->gambar = $path;
        $transaksi->bukti()->save($bukti);
        return redirect()->back();
    }
}
