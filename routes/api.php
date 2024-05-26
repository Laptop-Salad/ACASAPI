<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', '\App\Http\Middleware\CheckSchoolAccess'])->prefix("schools/{school}")->group( function () {
    // ** Students
    Route::resource('students', \App\Http\Controllers\Api\StudentController::class);
    Route::resource('students.card-entries', \App\Http\Controllers\Api\StudentCardEntryController::class);

    // ** Points
    Route::resource('points', \App\Http\Controllers\Api\PointController::class);

    // ** Card entries
    Route::resource('card-entries', \App\Http\Controllers\Api\CardEntryController::class);
    Route::get('card-entries/date/{date}', [\App\Http\Controllers\Api\CardEntryController::class, 'byDate']);
});
