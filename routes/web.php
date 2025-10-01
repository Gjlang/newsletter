<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Marketing\SubscribeController;

// Tampilkan halaman form (GET)
Route::get('/subscribe', function () {
    return view('marketing.subscribe');
})->name('marketing.subscribe.form');

// Proses submit form (POST)
Route::post('/subscribe', [SubscribeController::class, 'store'])
    ->name('marketing.subscribe');
