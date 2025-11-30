<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// Projects
Route::get('/iliad', function () {
    return view('iliad');
})->name('iliad');

Route::get('/color_purple', function () {
    return view('color_purple');
})->name('color_purple');

Route::get('/oedipus', function () {
    return view('oedipus');
})->name('oedipus');

Route::get('/robert', function () {
    return view('robert');
})->name('robert');
