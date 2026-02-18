<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [\App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{id}', [\App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/about', function () {
    return view('welcome'); // Simplify for now
});

Route::post('/checkout', [\App\Http\Controllers\OrderController::class, 'checkout'])->name('checkout');
Route::get('/checkout/success', [\App\Http\Controllers\OrderController::class, 'success'])->name('checkout.success');
Route::get('/checkout/cancel', [\App\Http\Controllers\OrderController::class, 'cancel'])->name('checkout.cancel');

Route::get('/categories', function () {
    return view('products.index'); // Simplify for now
});

// Authentication Routes
Route::get('login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
Route::get('register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register.post');
Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Authenticated User Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin Routes
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
        
        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
        Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    });
});
