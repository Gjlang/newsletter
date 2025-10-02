<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Marketing\SubscribeController;
use App\Mail\KlNewsletter;

Route::get('/', fn() => view('marketing.subscribe'))->name('home');

Route::prefix('subscribe')->name('subscribe.')->group(function () {
    Route::get('/', [SubscribeController::class, 'create'])->name('create');
    Route::post('/', [SubscribeController::class, 'store'])->name('store');
});

// test route to preview KL promo email in browser (optional)
Route::get('/preview/kl', function () {
    return (new KlNewsletter([
        'hero' => request('hero'),
        'cta_url' => request('cta', '#'),
        'cta_text' => 'Discover KL The Guide',
        'blog_url' => '#',
        'facebook' => '#',
        'instagram' => '#',
        'tiktok' => '#',
        'site' => '#',
        'contact_url' => '#',
        'footer_banner' => request('banner'),
    ]))->render();
});
