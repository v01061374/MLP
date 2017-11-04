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

Route::resource('addresses', 'AddressesController');
Route::resource('posts', 'PostsController');
Route::resource('customers', 'CustomersController');
Route::resource('addresses', 'AddressesController');
Route::resource('stores', 'StoresController');
Route::resource('stores', 'StoresController');
Route::resource('categories', 'CategoriesController');
Route::resource('products', 'ProductsController');
Route::resource('photos', 'PhotosController');