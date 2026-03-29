<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;





Route::get('/', [HomeController::class, 'index'])->name('home');





Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');






Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');



Route::get('/search', [ProductController::class, 'search'])->name('products.search');


use App\Http\Controllers\CheckoutController;

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');



Route::get('/shop', [ProductController::class, 'index'])->name('shop');


Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
