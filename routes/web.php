<?php

use App\Http\Controllers\ApplicationController;
use App\Livewire\Course\CourseShowManager;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::prefix('course')->group(function () {
   Route::get('/',\App\Livewire\CourseLivewire::class)->name('course');


    Route::get('/show/{id}', CourseShowManager::class)
        ->name('course.show');

});


Route::post('application/add',[ApplicationController::class,'add'])->name('application.add');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
