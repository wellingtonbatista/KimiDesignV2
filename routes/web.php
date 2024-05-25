<?php

use App\Http\Controllers\Transportadora;
use App\Http\Controllers\Carregamento;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::resource('/transportadoras', Transportadora::class)->middleware('auth');
Route::resource('/carregamentos', Carregamento::class)->middleware('auth');
