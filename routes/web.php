<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/rules', [PublicController::class, 'rules'])->name('rules');
Route::get('/how-to-connect', [PublicController::class, 'connect'])->name('connect');
Route::get('/contact-us', [PublicController::class, 'contact'])->name('contact');

