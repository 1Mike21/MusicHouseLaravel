<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/auth', function () {
    return view('authorization');
})->name('auth');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');
