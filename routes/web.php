<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Marketing\SubscribeController;

// Home -> redirect to subscribe form
Route::get('/', fn () => redirect()->route('marketing.subscribe.form'));

// Show form
Route::get('/subscribe', fn () => view('marketing.subscribe'))
    ->name('marketing.subscribe.form');

// Handle submit
Route::post('/subscribe', [SubscribeController::class, 'store'])
    ->name('marketing.subscribe');
