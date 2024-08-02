<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredPlayerController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredPlayerController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredPlayerController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

    Route::prefix('dashboard')->group(function () {

       Route::get('', function () {
           return view('auth.dashboard');
       });

       Route::get('profile/edit/{id}', [PlayerController::class,'edit'])->name('profile.edit');
       Route::put('profile/edit/{id}', [PlayerController::class,'update']);
       Route::put('profile/game/{game}', [PlayerController::class,'updateProfileGame'])->name('profile.updateGame');
    });
});


