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

    $category = \App\Category::with('subcategories');
//    var_dump($category);

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
Route::resource('carts', 'CartsController');
Route::resource('cart-items', 'CartItemsController');
Route::resource('shipping-method', 'ShippingMethodController');
Route::resource('shipping-method', 'ShippingMethodController');
Route::resource('shipping-method', 'ShippingMethodController');
Route::resource('orders', 'OrdersController');
Route::resource('shipping-methods', 'ShippingMethodsController');

Route::get('/')->uses('StoresController@indexLandingPage')->name('landing.index');

Route::get('/stores')->uses('StoresController@index')->name('stores.index');
Route::get('/store/{id}')->uses('StoresController@show')->name('stores.single');

Route::get('/products/{id}')->uses('ProductsController@show')->name('products.single');

Route::get('/user/login', function (){
    return view('frontend.Auth.login');
})->name('front.login.get');
Route::post('/user/login')->uses('Auth\LoginController@postLogin')->name('front.login.post');





Route::prefix('api')->group(function(){
    Route::get('/cart/add','CartsController@addCartItem')->name('api.cart.add');
});
