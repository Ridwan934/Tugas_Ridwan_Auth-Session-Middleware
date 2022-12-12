<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


Route::get('/', [productController::class, 'index'])->name('data');
Route::get('/Create', [productController::class, 'create'])->middleware(["withAuth"]);
Route::get('/edit/{{id}}', [productController::class, 'edit']);
Route::put('/update/{{id}}', [productController::class, 'update']);
Route::post('/store', [productController::class, 'Store'])->middleware(["noAuth"]);
Route::get('/delete/{id}', [productController::class, 'destroy'])->name('delete');
route::any("/login", [AuthController::class, "login"])->name('login') ->middleware(["noAuth"]);
route::any("/logout", [AuthController::class, "logout"])->name('logout') ->middleware(["withAuth"]);