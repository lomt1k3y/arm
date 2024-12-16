<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/steam/auth', [SteamAuthController::class, 'redirectToSteam']);
//    Route::get('/steam/auth/callback', [SteamAuthController::class, 'handleSteamCallback']);
Route::get('/steam/auth', [App\Http\Controllers\SteamAuthController::class, '__invoke'])->name('steamAuth');
// Route::get('/home', [App\Http\Controllers\SteamAuthController::class, '__invoke'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

