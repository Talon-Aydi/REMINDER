<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Component\Filter\Filter;
use App\Livewire\Component\Activity\Feed;

Route::view('/', 'welcome')->name('home');
Route::get('/filter', Filter::class);
Route::get('/activity', Feed::class);

