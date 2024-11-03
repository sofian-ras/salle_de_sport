<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\CoursController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/abonnements', [AbonnementController::class, 'index'])->name('index');
Route::get('/cours', [CoursController::class, 'index'])->name('cours.index');
