<?php

namespace App\Providers;

use App\Kategori;
use App\Product;
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
            }
            $products = Product::all();
            $sorted_product = $products->sortByDesc(function ($product) {
                return $product->getPageViews();
            });
            $cart_content = \Cart::content();
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
