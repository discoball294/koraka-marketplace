<?php

namespace App\Providers;

use App\Kategori;
use App\Product;
use App\Transaksi;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Guard $auth)
    {

        view()->composer('*', function ($view) use ($auth) {
            if ($auth->check()) {
                $view->with('user', User::find($auth->user()->id));
                if (\Auth::user()->myStore()->exists()) {
                    $store_id = \Auth::user()->myStore->id;
                    $mengunggu_kirim_count = Transaksi::whereHas('products.stores', function ($query) use ($store_id) {
                        $query->where('id', '=', $store_id);
                    })->where('status', '=', 1)->count('id');
                    $menunggu_bayar_count = Transaksi::where('user_id', '=', \Auth::id())->where('status', '=', 0)->count('id');
                    $view->with(['menunggu_kirim' => $mengunggu_kirim_count, 'menunggu_bayar' => $menunggu_bayar_count]);
                }
                if (\Auth::user()->hasRole('Admin')) {
                    $nilai_transaksi = Transaksi::all()->sum('total');
                    if ($nilai_transaksi < 1000000) {
                        $n_format = number_format($nilai_transaksi);
                        $prefix = 'Ribu';
                    } else if ($nilai_transaksi < 1000000000) {
                        $n_format = number_format($nilai_transaksi / 1000000, 0);
                        $prefix = 'Juta';
                    } else {
                        $n_format = number_format($nilai_transaksi / 1000000000, 0) . 'Miliar';
                        $prefix = 'Miliar';
                    }
                    $transaksi_count = Transaksi::count('id');
                    $user_count = User::role('User')->count('id');
                    $product_count = Product::count('id');
                    $view->with(compact('n_format', 'transaksi_count', 'user_count', 'product_count', 'prefix'));
                }

            }
            $products = Product::all();
            $sorted_product = $products->sortByDesc(function ($product) {
                return $product->getPageViews();
            });
            $cart_content = \Cart::content()->groupBy('options.store_id');
            $cart_total = \Cart::subtotal();
            $cart_count = \Cart::count();

            $view->with('cart_total', $cart_total);
            $view->with('cart_content', $cart_content);
            $view->with('cart_count', $cart_count);
            $view->with('category_list', Kategori::all());
            $view->with('sorted_product', $sorted_product);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
