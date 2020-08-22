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

Route::get('/', 'ProductController@index')->name("product");
Route::get('/produk', 'ProductController@create')->name('tambahProduk');
Route::post('/produk', 'ProductController@store')->name('produkBaru');
Route::get('produk/{id}', 'ProductController@edit')->name("edit-produk");
Route::put('produk/{id}', 'ProductController@update')->name("update-produk");
Route::delete('produk/{id}', 'ProductController@destroy')->name('destroy');
