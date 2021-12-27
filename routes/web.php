<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Order;
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

/**
 * Frontend Route
 */

    // Route::get('/homepage', function () {
    //     return view('frontend.homepage');
    // });
    Route::get('/category', function () {
        return view('frontend.category');
    })->name('vanhoc');
    
    Route::get('/homepage', [ProductController::class, 'homepage'])->name('homepage');
    Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');
    Route::get('/information', function () {
        return view('frontend.information');
    });
    Route::get('/category/{name}', [ProductController::class, 'category'])->name('category');
    Route::post('/addtocart/{id}', [ProductController::class, 'addtocart'])->name('addtocart');
    Route::get('/showcart', [ProductController::class, 'showcart'])->name('showcart');
    Route::get('/deletecart/{id}', [ProductController::class, 'deletecart'])->name('deletecart');
    Route::get('/payment', [ProductController::class, 'payment'])->name('payment');
    Route::post('/confirm', [ProductController::class, 'confirm'])->name('confirm');
    Route::post('/search', [ProductController::class, 'search'])->name('search');
   








/**
 * Backend Route
 */
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('backend.login');
    })->name('admin.login');
    
    Route::post('/', [AdminController::class, 'sign_in'])->name('admin.login');

    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('admin.dashboard');

    Route::get('/product', [ProductController::class, 'admin_show'])->name('admin.listproduct');
    Route::post('/product', [ProductController::class, 'store'])->name('admin.store_product');

    Route::get('/product/add', [ProductController::class, 'get_addproduct'])->name('admin.addproduct');
    Route::post('/product/add', [ProductController::class, 'store'])->name('admin.store_product');

    Route::post('/product', [ProductController::class, 'search_product'])->name('admin.product_search');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete_product'])->name('admin.delete_product');
    Route::post('/product/edit/{id}', [ProductController::class, 'edit_product'])->name('admin.edit_product');

    Route::get('/order/pending', [OrderController::class, 'get_orders'])->name('admin.orderpending');
    Route::get('/order/shipping', [OrderController::class, 'get_orders_shipping'])->name('admin.ordershipping');

    Route::get('/order/detail/{customerId}/{orderId}', 
    [OrderController::class, 'get_orders_details'])->name('admin.orderdetails');

    Route::get('/order/details/confirm/{orderId}', [OrderController::class, 'confirm_order'])->name('order.confirm');

    Route::get('/order/delete/{orderId}', [OrderController::class, 'delete_order'])->name('order.delete');
    Route::post('/order/search/pending', [OrderController::class, 'search_orderpending'])->name('orderpending.search');
    Route::post('/order/search/shipping', [OrderController::class, 'search_ordershipping'])->name('ordershipping.search');
});