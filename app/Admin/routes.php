<?php
use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('customers', CustomerController::class);
    $router->resource('addresses', AddressController::class);
    $router->resource('stores', StoreController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('products', ProductController::class);
    $router->resource('photos', PhotoController::class);
    $router->resource('carts', CartController::class);



});
