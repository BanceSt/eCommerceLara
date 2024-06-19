<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, "index"])->name("home");
Route::get('/product/{id}', [ProductController::class, "show"])->name("product");
