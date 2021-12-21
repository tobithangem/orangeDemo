<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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

    Route::get('/homepage', function () {
        return view('frontend.homepage');
    });
    Route::get('/category', function () {
        return view('frontend.category');
    })->name('vanhoc');







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

    Route::get('/product-list', [ProductController::class, 'admin_show'])->name('admin.listproduct');
    Route::post('/product-list', [ProductController::class, 'store'])->name('admin.store_product');

    Route::get('/product-add', [ProductController::class, 'get_addproduct'])->name('admin.addproduct');
    Route::post('/product-add', [ProductController::class, 'store'])->name('admin.store_product');
});