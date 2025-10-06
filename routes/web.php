<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/demo', function () {
    return view('demo');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('home', [
            'breadcrumbs' => [
                ['title' => 'Sub Page', 'url' => route('home')],
                ['title' => 'Current Page', 'url' => ''],
            ],
        ]);
    })->name('home');

    Route::get('/profile', function () {
        return view('profile.show');
    })->name('profile.show');

    Route::resource('users', UserController::class);
});

Route::get('/tabler', function () {
    return view('samples.accordion');
});
