<?php

use App\Http\Controllers\LiteratureController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LiteratureController::class, 'home'])->name('home');
Route::get('/iliad', [LiteratureController::class, 'iliad'])->name('iliad');
Route::get('/color_purple', [LiteratureController::class, 'colorPurple'])->name('color_purple');
Route::get('/oedipus', [LiteratureController::class, 'oedipus'])->name('oedipus');
Route::get('/robert', [LiteratureController::class, 'robert'])->name('robert');
