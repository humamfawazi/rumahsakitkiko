<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PerawatController;

// Route untuk Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Route untuk Perawat
Route::middleware(['auth', 'role:perawat'])->group(function () {
    Route::get('/perawat/dashboard', [PerawatController::class, 'index'])->name('perawat.dashboard');
});

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);