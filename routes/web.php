<?php

use App\Livewire\User\Dashboard;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'user.register')->name('home');
Route::livewire('/register', 'user.register');
Route::livewire('/login', 'user.login');

Route::get('/dashboard', Dashboard::class);
