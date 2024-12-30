<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;

use App\Models\Product;

Route::get('/', [ProductsController::class, 'products']);
Route::get('/register', [ProductsController::class, 'register']);
Route::post('/register', [ProductsController::class, 'create']);