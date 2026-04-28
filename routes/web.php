<?php

use App\Livewire\Component\Activity\Feed;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::get('/activity', Feed::class);
Route::livewire('/register', 'component.user.register');
Route::livewire('/login', 'component.user.login');
