<?php

use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\ShowSupport;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('privacy', 'privacy')->name('privacy');
Route::view('terms', 'terms')->name('terms');
Route::get('support', ShowSupport::class)->name('support');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
});

require __DIR__ . '/auth.php';
