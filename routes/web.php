<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', \App\Livewire\Login::class)->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');
    Route::get('/logout', [\App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');
});
