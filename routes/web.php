<?php

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

Route::get('/', [ProductController::class, 'showCarousel'])->name('index');

Route::get('/catalog', [ProductController::class, 'showProducts'])->name('catalog');

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
