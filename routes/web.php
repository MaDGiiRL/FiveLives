<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/rules', [PublicController::class, 'rules'])->name('rules');
Route::get('/how-to-connect', [PublicController::class, 'connect'])->name('connect');
Route::get('/contact-us', [PublicController::class, 'contact'])->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
});
Route::middleware(['auth'])->get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');