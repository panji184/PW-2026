<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TiketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/* =======================
   LOGIN
======================= */
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


/* =======================
   SEMUA YANG WAJIB LOGIN
======================= */
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // TIKET
    Route::get('/tiket', [TiketController::class, 'index'])->name('tiket');
    Route::post('/tiket', [TiketController::class, 'store'])->name('tiket.store');
    Route::delete('/tiket/{id}', [TiketController::class, 'destroy'])->name('tiket.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});