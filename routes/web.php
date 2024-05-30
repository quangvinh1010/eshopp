<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

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

Route::prefix('admin')->group(function() {
    Route::get('posts/{post}/comments/{comment}', function($postId, $commentId) {
        return "postId : $postId - commentId : $commentId";
    });

    Route::get('user/{name?}', function ($name = 'john') {
        return $name;
    });
});

Route::get('users', [UserController::class, 'index'])->name('users.index');

Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('orderitems', OrderItemController::class);
Route::resource('home', HomeController::class);

Route::get('/child', function() {
    return view('child');
});

route::group(['prefix' => 'admin'], function(){
    route::resource('home', App\Http\Controllers\Admin\HomeController::class, ['names' =>'Admin.home']);
    route::resource('users', App\Http\Controllers\Admin\UserController::class, ['names' =>'Admin.users']);
    route::resource('products', App\Http\Controllers\Admin\ProductController::class,['names'=>'Admin.products']);
    route::resource('orders', App\Http\Controllers\Admin\OrderController::class,['names'=>'Admin.orders']);
    route::resource('orderItems', App\Http\Controllers\Admin\OrderItemController::class,['names'=>'Admin.orderItems']);
    // Route::resource('categories', App\Http\Controllers\admin\CategoryController::class, ['names' => 'Admin.categories']);
});

// Cart routes
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::get('/page-cart', [CartController::class, 'showCart'])->name('page-cart');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
Route::put('/update-cart/{id}', [CartController::class, 'updateCart'])->name('update-cart');

// Checkout routes
Route::get('/checkout-page', [CartController::class, 'showCartCheckout'])->name('checkout-page');
Route::post('/checkout', [CheckoutController::class, 'handleCheckout'])->name('checkout');
// route::resource('products', App\Http\Controllers\Admin\ProductController::class,['names'=>'Admin.products']);