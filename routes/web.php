<?php

use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PersonalController::class, 'welcome'])->name('home');
Route::get('/about', [PersonalController::class,'about'])->name('about');
Route::get('/skills', [PersonalController::class,'skills'])->name('skills');
Route::get('/projects', [PersonalController::class, 'projects'])->name('projects');
