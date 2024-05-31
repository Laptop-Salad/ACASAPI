<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', \App\Livewire\Login::class)->name('login');
Route::get('/sign-up', \App\Livewire\SignUp::class)->name('sign-up');

Route::prefix('api-docs')->group(function () {
    Route::get('/', \App\Livewire\ApiDocs\Intro::class)->name('api-docs');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');

    Route::prefix('schools/{school}/')->group(function () {
        Route::get('', \App\Livewire\School\Overview::class)->name('school');
        Route::get('manage', \App\Livewire\School\Manage::class)->name('school.manage');
        Route::get('student/{student}/points', \App\Livewire\School\Student\Points::class)->name('school.student.points');
        Route::get('card-entries', \App\Livewire\School\CardEntries::class)->name('school.card-entries');
        Route::get('reports', \App\Livewire\School\Reports::class)->name('school.reports');
        Route::get('reports/{report}', \App\Livewire\School\ShowReport::class)->name('school.report');
    });

    Route::get('/logout', [\App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');
});
