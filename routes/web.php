<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('pricing', 'pricing')
    ->middleware(['auth', 'verified'])
    ->name('pricing');

Route::get('checkout/{plan?}', CheckoutController::class)
    ->middleware(['auth', 'verified'])
    ->name('checkout');

Route::view('success', 'success')
    ->middleware(['auth', 'verified'])
    ->name('success');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
