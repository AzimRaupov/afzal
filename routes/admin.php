<?php


use App\Http\Controllers\Admin\AuthController;
use App\Livewire\Admin\AchievementsManager;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/course', \App\Livewire\Admin\CoursesManager::class)->name('course');
    Route::get('/achievement', AchievementsManager::class)->name('achievement');
    Route::get('/teacher', \App\Livewire\Admin\TeacherManager::class)->name('teacher');
});
