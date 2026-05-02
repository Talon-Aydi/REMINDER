<?php

use App\Livewire\User\Dashboard;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'component.user.register')->name('home');
Route::livewire('/register', 'component.user.register');
Route::livewire('/login', 'component.user.login');

Route::get('/dashboard', Dashboard::class);
