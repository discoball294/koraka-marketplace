<?php

namespace App\Http\Controllers;

use App\Alamat;
use App\Transaksi;
use App\User;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('store-front.shopping-checkout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::findOrNew(\Auth::id());
        if (!\Auth::check()) {
            $user->name = $request->nama;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
        }

        $alamat = $user->alamat ?: new Alamat();
        //dd($alamat);
        $alamat->alamat = $request->alamat;
        $alamat->provinsi = $request->provinsi;
        $alamat->kota = $request->kota;
        $alamat->no_telp = $request->no_telp;
        $alamat->kode_pos = $request->kode_pos;
        $user->alamat()->save($alamat);

        $cart_item = [];
        $subtotal = 0;
        foreach ($cart_content = \Cart::content()->groupBy('options.store_id') as $content_store) {
            foreach ($content_store as $content) {
                $cart_item[$content->id] = ['price' => $content->price, 'qty' => $content->qty, 'total' => $content->price * $content->qty];
                $subtotal += $content->price * $content->qty;
            }
            $transaksi = new Transaksi();
            $transaksi->total = $subtotal;
            $tr = $user->transaksi()->save($transaksi);
            $trp = $transaksi->products()->sync($cart_item);
            $cart_item = array();
        }
        \Cart::destroy();
        dd($tr, $trp);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Transaksi $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
