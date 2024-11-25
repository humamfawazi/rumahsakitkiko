<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/sesi', [PageController::class, 'index']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/login', [PageController::class, 'login']);

