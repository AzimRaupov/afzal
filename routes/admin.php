<?php


use Illuminate\Support\Facades\Route;





Route::get('/course',\App\Livewire\Admin\CoursesManager::class )->name('course');


Route::get('/teacher',\App\Livewire\Admin\TeacherManager::class)->name('teacher');
