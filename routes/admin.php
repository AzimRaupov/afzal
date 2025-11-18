<?php


use App\Livewire\Admin\AchievementsManager;
use Illuminate\Support\Facades\Route;





Route::get('/course',\App\Livewire\Admin\CoursesManager::class )->name('course');

Route::get('/achievement',AchievementsManager::class )->name('achievement');
Route::get('/teacher',\App\Livewire\Admin\TeacherManager::class)->name('teacher');
