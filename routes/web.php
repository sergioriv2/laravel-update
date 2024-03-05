<?php

use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);

Route::controller(CoursesController::class)->group(function () {
    Route::get('courses', 'index')->name('courses.index');
    Route::get('courses/create', 'create')->name('courses.create');
    Route::get('courses/{course}/view', 'view')->name('courses.view');
    Route::get('courses/{course}/edit', 'edit')->name('courses.edit');

    /* Form Routes */
    Route::post('courses', 'store')->name('courses.store');
    Route::put('courses/{course}', 'update')->name('courses.update');
});
