<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/profile', function () {
        return view('profile.show');
    })->name('profile.show');

    Route::resource('users', UserController::class);
});

Route::get('/demo', function () {
    return view('demo');
});

// Login as Admin
if (config('app.env') == 'local' && config('app.debug')) {
    Route::get('/loginas/admin', function () {
        auth()->loginUsingId(1);
        return redirect()->route('home');
    });
}
