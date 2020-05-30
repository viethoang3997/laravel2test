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
Route::get('/test','test@hello');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', 'Product\IndexController@main')->name('product.index');
Route::get('/product/create', 'Product\CreateController@main')->name('product.create');
Route::get('/product/{id}','Product\ShowController@main')->name('product.detail');
Route::post('/product', 'Product\StoreController@main')->name('product.store');