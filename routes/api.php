<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', '\App\Http\Middleware\CheckSchoolAccess'])->group( function () {
    // ** Students
    Route::resource('school/{school}/students', \App\Http\Controllers\Api\StudentController::class);
    Route::resource('school/{school}/students.card_entries', \App\Http\Controllers\Api\StudentCardEntryController::class);

    // ** Points
    Route::resource('school/{school}/points', \App\Http\Controllers\Api\PointController::class);

    // ** Card entries
    Route::get('school/{school}/card_entries/date/{date}', [\App\Http\Controllers\Api\CardEntryController::class, 'byDate']);
    Route::resource('school/{school}/card_entries', \App\Http\Controllers\Api\CardEntryController::class);
});
