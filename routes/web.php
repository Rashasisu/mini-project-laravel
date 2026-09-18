<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/produk', [HomeController::class, 'produk'])
    ->name('produk');

Route::get('/tentang', [HomeController::class, 'tentang'])
    ->name('tentang');

Route::get('/kontak', [HomeController::class, 'kontak'])
    ->name('kontak');