<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'showLogin'])->name('login');
Route::post('/login', [PageController::class, 'loginhalaman'])->name('login.tekan');
Route::get('/dashboard', [PageController::class, 'showDashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'showProfil'])->name('profil');
Route::post('/logout', [PageController::class, 'logout'])->name('logout');
Route::get('/pengelolaan', [PageController::class, 'showPengelolaan'])->name('pengelolaan');

