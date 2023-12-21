<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CartController;
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

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
	Route::resource('/categories', AdminCategoryController::class);
	Route::resource('/products', AdminProductController::class);
	Route::resource('/orders', AdminOrderController::class);
	Route::get('/', function () {
		return view('layouts.admin');
	})->name('admin');
});

Route::resource('/products', ProductController::class);

Route::post('/products/filter', [ProductController::class, 'filter'])->name('products.filter');

Route::get('/', [CarouselController::class, 'index'])->name('carousel');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::middleware('guest')->group(function () {
	Route::get('/registration', [AuthController::class, 'regForm'])->name('regForm');
	Route::post('/reg', [AuthController::class, 'register'])->name('register');
	Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');
	Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
	Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
	Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
	Route::get('cart/add/{product_id}', [CartController::class, 'store'])->name('cart.store');
	Route::post('/cart/change/{product_id}', [CartController::class, 'change'])->name('cart.change');
	Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
	Route::resource('/orders', OrderController::class);
});
