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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// debugging
Route::get('/detail', 'ProductController@show')->name('detail');
Route::get('/cart', 'ProductController@cart')->name('cart');
Route::get('/testing', 'ProductController@testing')->name('testing');
Route::get('/buynow', 'ProductController@buynow')->name('buynow');
Route::get('/buynowbyatm', 'ProductController@buynowbyatm')->name('buynowbyatm');
Route::get('/buynowbybarcode', 'ProductController@buynowbybarcode')->name('buynowbybarcode');
Route::get('/totalpay', 'ProductController@totalpay')->name('totalpay');
// end debugging
