<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TiketController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('tiket', TiketController::class);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/tes', function () {
    return "OK";
});
});