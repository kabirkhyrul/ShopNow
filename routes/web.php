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

Route::view('/', 'welcome')->name('web');
Route::view('shop', 'web.shop')->name('shop');
Route::view('product/{slug}', 'web.product_details')->name('shop.product');
Route::view('category/{slug}', 'web.category_details')->name('shop.category');
Route::view('cart', 'web.cart')->name('shop.cart');
Route::get('add-to-cart/{id}', 'CartController@addToCart')->name('add.cart');
Route::get('remove-from-cart/{id}', 'CartController@remove')->name('remove.cart');
Route::get('update-cart', 'CartController@update')->name('update.cart');
Route::get('search', 'ShopController@search')->name('shop.search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::view('checkout', 'web.checkout')->name('shop.checkout');
        Route::post('/shop/place-order', 'ShopController@place_order')->name('place.order');
        Route::resource('categories', CategoryController::class);
        Route::resource('reviews', ReviewController::class);
        Route::resource('users', UserController::class);
        Route::resource('orders', OrderController::class);
        Route::resource('banners', BannerController::class);
        Route::resource('products', ProductController::class);
        Route::resource('general-settings', GeneralSettingController::class);
        Route::resource('coupons', CouponController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
    });
