<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group( function () {
    // ** Students
    Route::resource('students', \App\Http\Controllers\Api\StudentController::class);

    // Student
    Route::resource('students', \App\Http\Controllers\Api\StudentController::class);
    Route::resource('students.card_entries', \App\Http\Controllers\Api\StudentCardEntryController::class);

    // ** Points
    Route::resource('points', \App\Http\Controllers\Api\PointController::class);

    // ** Card entries
    Route::get('card_entries/date/{date}', [\App\Http\Controllers\Api\CardEntryController::class, 'byDate']);
    Route::resource('card_entries', \App\Http\Controllers\Api\CardEntryController::class);
});
