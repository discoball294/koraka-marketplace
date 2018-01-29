<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Product;
use App\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store-front.add-product', compact('category_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'stok' => 'required|numeric',
        ]);
        if ($validator->passes()) {
            $path = $request->gambar->store('images', 'public');
            $product = new Product();
            $product->nama_barang = $request->nama;
            $product->harga = $request->harga;
            $product->deskripsi = $request->deskripsi;
            $product->stok = $request->stok;
            $product->gambar = $path;
            $product->kategori_id = $request->kategori;
            $product->store_id = $request->store_id;
            $product->save();
            return redirect()->route('storefront.mystore', \Auth::user()->myStore->url_toko);
        } else
            return redirect()->back()->withErrors($validator)->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $product = $product::find($id);
        //dd($product);
        return view('store-front.edit-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'stok' => 'required|numeric',
        ]);
        if ($validator->passes()) {
            $product = $product->find($id);
            $product->nama_barang = $request->nama;
            $product->harga = $request->harga;
            $product->deskripsi = $request->deskripsi;
            $product->stok = $request->stok;
            if ($request->hasFile('gambar')) {
                $path = $request->gambar->store('images', 'public');
                $product->gambar = $path;
            }

            $product->kategori_id = $request->kategori;
            $product->store_id = $request->store_id;
            $product->save();
            return redirect()->route('storefront.mystore', \Auth::user()->myStore->url_toko);
        } else {
            return redirect()->back()->withErrors($validator)->withInput();
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
