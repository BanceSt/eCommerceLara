<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, "index"])->name("home");
Route::get('/product/{id}', [ProductController::class, "show"])->name("product");
Route::post('/product/add', [ProductController::class, "create"])->name("add_product");

Route::get('/new_product', function() {
    return view("new_product");
})->name("new_product");
