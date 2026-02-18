<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products', function () {
    return view('products.index');
})->name('products.index');

Route::get('/cart', function () {
    return view('cart');
})->name('cart.index');

Route::get('/about', function () {
    return view('welcome'); // Simplify for now
});

Route::get('/categories', function () {
    return view('products.index'); // Simplify for now
});

// Authentication placeholders
Route::get('/login', function () {
    return "Login Page (Placeholder)";
})->name('login');

Route::get('/register', function () {
    return "Register Page (Placeholder)";
})->name('register');

Route::get('/dashboard', function () {
    return "Dashboard (Placeholder)";
})->middleware('auth')->name('dashboard');
