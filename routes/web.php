<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LotController;
use App\Http\Controllers\AuthController;

// Создание лотов
Route::get('/', [LotController::class, 'showLots'])->name('showLots');
Route::post('/', [LotController::class, 'createLots'])->name('createLots');

// Регистрация и Авторизация
Route::get('/register', [AuthController::class, 'showregisterForm'])->name('showRegisterForm');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showLoginForm');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');