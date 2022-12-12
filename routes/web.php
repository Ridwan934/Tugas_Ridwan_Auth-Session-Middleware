<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('data');
});
Route::get('/data', [productController::class, 'index'])->name('data');
Route::get('/Create', [productController::class, 'create']);
Route::post('/store', [productController::class, 'Store']);