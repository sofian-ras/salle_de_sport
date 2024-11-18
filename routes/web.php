<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarifsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tarifs', [TarifsController::class, 'index'])->name('tarifs');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/cours', [CoursController::class, 'index'])->name('cours');


Route::get('/mentions-legales', function () {
    return view('MentionsLegales');
})->name('mentions-legales');

