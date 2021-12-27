<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/frontend/login', [LoginController::class, 'login']);

    // Trang Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('form_register');

    Route::get('/category', function () {
        return view('frontend.category');
    })->name('vanhoc');
    Route::get('/homepage', [ProductController::class, 'homepage'])->name('homepage');
    Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');
    Route::get('/information', function () {
        return view('frontend.information');
    });
    Route::get('/category/{name}', [ProductController::class, 'category'])->name('category');
    
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

    Route::get('/product-list', [ProductController::class, 'admin_show'])->name('admin.listproduct');
    Route::post('/product-list', [ProductController::class, 'store'])->name('admin.store_product');

    Route::get('/product-add', [ProductController::class, 'get_addproduct'])->name('admin.addproduct');
    Route::post('/product-add', [ProductController::class, 'store'])->name('admin.store_product');
});