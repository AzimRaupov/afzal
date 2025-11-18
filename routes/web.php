<?php

use App\Http\Controllers\ApplicationController;
use App\Livewire\Course\CourseShowManager;
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\UserController::class,'welcome'])->name('home');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::prefix('course')->group(function () {
   Route::get('/',\App\Livewire\Course\CourseFilterManager::class)->name('course');


    Route::get('/show/{id}', CourseShowManager::class)
        ->name('course.show');

});

Route::get('/teacher/{id}',\App\Livewire\TeacherShowManager::class )->name('teacher.show');


Route::get('/test', function () {
    return view('course.show');
});

Route::post('application/add',[ApplicationController::class,'add'])->name('application.add');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
