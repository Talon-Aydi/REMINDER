<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Filter;
use App\Livewire\Component\ActivityFeed;

Route::view('/', 'welcome')->name('home');
Route::get('/filter', Filter::class);
Route::get('/activity', ActivityFeed::class);

