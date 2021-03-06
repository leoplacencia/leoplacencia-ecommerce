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
// Slug uniq
Route::bind('product', function($slug){
    return App\Product::where('slug',$slug)->first();
});
// Category dependency injection
Route::bind('category', function($category){
    return App\Category::find($category);
});

Route::get('/',[
    'as' => 'home',
    'uses' => 'StoreController@index'
]);
Route::get('product/{product}',[
    'as' => 'product-detail',
    'uses' => 'StoreController@show'
]);

// Carrito
Route::get('cart/show', [
    'as' => 'cart-show',
    'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
    'as' => 'cart-add',
    'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}', [
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity}', [
    'as' => 'cart-update',
    'uses' => 'CartController@update'
]);

Route::get('order-detail', [
    'middleware' => 'auth',
    'as' => 'order-detail',
    'uses' => 'CartController@orderDetail'
]);
Route::get('pay', [
    'middleware' => 'auth',
    'as' => 'pay',
    'uses' => 'PayController@pago'
]);
Auth::routes();

//admin
Route::get('admin/home', function(){
    return view('admin.home');
});
Route::resource('admin/category', 'Admin\CategoryController');
Route::resource('admin/product', 'Admin\ProductController');