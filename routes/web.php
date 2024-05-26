<?php

use App\Http\Controllers\Transportadora;
use App\Http\Controllers\Carregamento;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::redirect('/', 'login');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::resource('/transportadoras', Transportadora::class)->middleware('auth');
Route::resource('/carregamentos', Carregamento::class)->middleware('auth');

Volt::route('register', 'pages.auth.register')
        ->name('register');
