<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/products', ProductController::class . '@index');
//Route::get('/products/{product}', ProductController::class . '@show')->name('products.show');

Route::resource('products', ProductController::class);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate']);




