<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StasiunController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return redirect('/login');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::middleware('auth')->group(function () {
    
    Route::get('/stasiun', [StasiunController::class, 'index']);
});
