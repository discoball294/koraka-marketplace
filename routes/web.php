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
Route::get('products/{category}', ['uses' => 'HomeController@indexProduct', 'as' => 'storefront.product']);
Route::get('product/{id}', ['uses' => 'HomeController@singleProduct', 'as' => 'storefront.product-single']);
Route::group(['prefix' => 'cart'], function () {
    Route::post('add', ['uses' => 'CartController@addToCart', 'as' => 'add-cart']);
    Route::get('content', ['uses' => 'CartController@content', 'as' => 'cart-content']);
});

Route::group(['middleware' => ['role:User']], function () {
    Route::resource('act-product', 'ProductController');
    Route::resource('mystore', 'StoreController');
    Route::get('store/{url_toko}', ['uses' => 'HomeController@indexStore', 'as' => 'storefront.mystore']);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
