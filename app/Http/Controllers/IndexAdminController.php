<?php

namespace App\Http\Controllers;

use App\Transaksi;
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
        return view('admin.transaksi.index', compact('transaksi'));
    }

    public function detailOrder($id)
    {
        $transaksi = Transaksi::find($id);
        return view('admin.transaksi.detail', compact('transaksi'));
    }
}
