<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'CartController@shop')->name('shop');
Route::post('/add', 'CartController@add')->name('add');
Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');
Route::get('/checkout', 'CartController@checkout')->name('checkout');
//ROUTES FOR PRODUCTS
Route::get('/product/details', 'ProductController@productDetails')->name('product.details');

