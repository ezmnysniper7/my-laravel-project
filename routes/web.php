<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SentenceController;

Route::get('/', [SentenceController::class, 'index'])->name('home');
Route::get('/manage', [SentenceController::class, 'manage'])->name('manage');
Route::post('/update', [SentenceController::class, 'update'])->name('update');
