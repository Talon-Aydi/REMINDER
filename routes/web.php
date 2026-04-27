<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Component\Activity\Feed;

Route::view('/', 'welcome')->name('home');
Route::get('/activity', Feed::class);
Route::livewire('/register', 'component.user.register');
