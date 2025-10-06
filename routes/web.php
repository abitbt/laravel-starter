<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/profile', function () {
        return view('profile.show');
    })->name('profile.show');
});

Route::get('/tabler', function () {
    return view('samples.accordion');
});

Route::get('/components', function () {
    return view('components-demo');
});