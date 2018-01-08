<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', ['uses' => 'HomeController@index', 'as' => 'storefront.index']);
Route::get('about', ['uses' => 'HomeController@about', 'as' => 'storefront.about']);
Route::get('contact', ['uses' => 'HomeController@contact', 'as' => 'storefront.contact']);
Route::get('products/{category}', ['uses' => 'HomeController@indexProduct', 'as' => 'storefront.product']);
Route::get('search', ['uses' => 'HomeController@search', 'as' => 'storefront.search']);
Route::get('product/{slug}', ['uses' => 'HomeController@singleProduct', 'as' => 'storefront.product-single']);
Route::get('store/{url_toko}', ['uses' => 'HomeController@indexStore', 'as' => 'storefront.mystore']);
Route::resource('order', 'TransaksiController');
Route::group(['prefix' => 'cart'], function () {
    Route::post('add', ['uses' => 'CartController@addToCart', 'as' => 'add-cart']);
    Route::get('content', ['uses' => 'CartController@content', 'as' => 'cart-content']);
    Route::post('delete', ['uses' => 'CartController@removeItem', 'as' => 'remove-item']);
});
Route::group(['middleware' => ['role:User', 'web']], function () {
    Route::resource('act-product', 'ProductController');
    Route::resource('mystore', 'StoreController');
    Route::resource('review', 'ReviewController');
    Route::get('invoice/{id}', ['uses' => 'JualBeliController@invoice', 'as' => 'invoice']);
    Route::group(['prefix' => 'penjualan'], function () {
        Route::get('', ['uses' => 'JualBeliController@indexJual', 'as' => 'jual.index']);
        Route::get('detail/{id}', ['uses' => 'JualBeliController@detailJual', 'as' => 'jual.detail']);
        Route::post('kirim', ['uses' => 'JualBeliController@kirim', 'as' => 'jual.kirim']);
    });
    Route::group(['prefix' => 'pembelian'], function () {
        Route::get('', ['uses' => 'JualBeliController@indexBeli', 'as' => 'beli.index']);
        Route::get('detail/{id}', ['uses' => 'JualBeliController@detailBeli', 'as' => 'beli.detail']);
        Route::post('upload', ['uses' => 'BuktiTransferController@upload', 'as' => 'upload-bukti']);
        Route::post('kirim', ['uses' => 'JualBeliController@terima', 'as' => 'beli.terima']);
    });
});
Route::group(['prefix' => 'admin', 'middleware' => ['role:Admin']], function () {
    Route::get('', ['uses' => 'IndexAdminController@index', 'as' => 'admin.index']);
    Route::get('order', ['uses' => 'IndexAdminController@order', 'as' => 'admin.order']);
    Route::get('user', ['uses' => 'IndexAdminController@registeredUser', 'as' => 'admin.user']);
    Route::get('stores', ['uses' => 'IndexAdminController@allStore', 'as' => 'admin.store']);
    Route::get('products', ['uses' => 'IndexAdminController@allProduct', 'as' => 'admin.product']);
    Route::post('confirm', ['uses' => 'IndexAdminController@confirm', 'as' => 'admin.confirm']);
    Route::get('detail/{id}', ['uses' => 'IndexAdminController@detailOrder', 'as' => 'detail.order']);
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('debugging', function (Request $request) {
    dd(\App\Transaksi::first()->alamat->gambar);
});
