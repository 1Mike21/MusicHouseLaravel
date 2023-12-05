<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/products', ProductController::class);

Route::post('/products/filter', [ProductController::class, 'filter'])->name('products.filter');

Route::resource('/categories', CategoryController::class);

Route::get('/', [CarouselController::class, 'index'])->name('carousel');

Route::resource('/orders', OrderController::class);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/registration', [AuthController::class, 'regForm'])->name('regForm');
Route::post('reg', [AuthController::class, 'register'])->name('register');
Route::get('login', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/admin', function () {
	return view('admin');
})->name('admin');

