<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\checkuser;

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
    // Trang Login

    // Route::get('/login', [LoginController::class, 'index']);
    // Route::post('/frontend/login', [LoginController::class, 'login']);


    // Login with Auth
    Route::get('/login', [ProductController::class, 'index'])->name('login')->middleware('checklogin');
    Route::post('/frontend/login', [ProductController::class, 'login']);

    // Trang Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('form_register');

    
    Route::get('/homepage', [ProductController::class, 'homepage'])->name('homepage');
    Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');
    Route::get('/information', function () {
        return view('frontend.information');
    });
    Route::get('/category/{name}', [ProductController::class, 'category'])->name('category');
    Route::post('/addtocart/{id}', [ProductController::class, 'addtocart'])->name('addtocart')->middleware('checkuser');
    Route::get('/showcart', [ProductController::class, 'showcart'])->name('showcart')->middleware('checkuser');
    Route::get('/deletecart/{id}', [ProductController::class, 'deletecart'])->name('deletecart')->middleware('checkuser');
    Route::get('/payment', [ProductController::class, 'payment'])->name('payment')->middleware('checkuser');
    Route::post('/confirm', [ProductController::class, 'confirm'])->name('confirm')->middleware('checkuser');
    Route::post('/search', [ProductController::class, 'search'])->name('search');
    Route::get('/account', [ProductController::class, 'account'])->name('account')->middleware('checkuser');
    Route::get('/logout', [ProductController::class, 'logout'])->name('logout');
    Route::get('/pricedown/{name}', [ProductController::class, 'pricedown'])->name('pricedown');
    Route::get('/priceup/{name}', [ProductController::class, 'priceup'])->name('priceup');
   








/**
 * Backend Route
 */
Route::get('/admin', function () {
    return view('backend.login');
})->name('admin.login');

Route::post('/admin', [AdminController::class, 'sign_in'])->name('admin.login');
Route::prefix('admin')->group(function () {


    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('admin.dashboard')->middleware('checkadminlogin');

    Route::get('/product', [ProductController::class, 'admin_show'])->name('admin.listproduct')->middleware('checkadminlogin');
    Route::post('/product', [ProductController::class, 'store'])->name('admin.store_product')->middleware('checkadminlogin');

    Route::get('/product/add', [ProductController::class, 'get_addproduct'])->name('admin.addproduct')->middleware('checkadminlogin');
    Route::post('/product/add', [ProductController::class, 'store'])->name('admin.store_product')->middleware('checkadminlogin');

    Route::post('/product', [ProductController::class, 'search_product'])->name('admin.product_search')->middleware('checkadminlogin');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete_product'])->name('admin.delete_product')->middleware('checkadminlogin');
    Route::post('/product/edit/{id}', [ProductController::class, 'edit_product'])->name('admin.edit_product')->middleware('checkadminlogin');

    Route::get('/order/pending', [OrderController::class, 'get_orders'])->name('admin.orderpending')->middleware('checkadminlogin');
    Route::get('/order/shipping', [OrderController::class, 'get_orders_shipping'])->name('admin.ordershipping')->middleware('checkadminlogin');

    Route::get('/order/detail/{customerId}/{orderId}', 
    [OrderController::class, 'get_orders_details'])->name('admin.orderdetails')->middleware('checkadminlogin');

    Route::get('/order/details/confirm/{orderId}', [OrderController::class, 'confirm_order'])->name('order.confirm')->middleware('checkadminlogin');

    Route::get('/order/delete/{orderId}', [OrderController::class, 'delete_order'])->name('order.delete')->middleware('checkadminlogin');
    Route::post('/order/search/pending', [OrderController::class, 'search_orderpending'])->name('orderpending.search');
    Route::post('/order/search/shipping', [OrderController::class, 'search_ordershipping'])->name('ordershipping.search');
});


Route::get('/thanh-toan-thanh-cong/', function(){
    return view('frontend.momopayment');
});