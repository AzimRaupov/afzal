<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/application/add',[\App\Http\Controllers\ApplicationController::class,'add'])->name('application.add');
