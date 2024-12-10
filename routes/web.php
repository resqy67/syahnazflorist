<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductsController::class, 'index']);
Route::get('/contact', [ProductsController::class, 'contact'])->name('contact');
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/product/{slug}', [ProductsController::class, 'show'])->name('products.show');
