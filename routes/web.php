<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 


Route::get('/selamatdatang', [PageController::class, 'selamatdatang']);
Route::get('/sesi', [PageController::class, 'index']);
Route::get('/home', [PageController::class, 'home']);
Route::post('/sesi/loginkaryawan', [PageController::class, 'home']);



