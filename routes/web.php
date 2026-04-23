<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Filter;
use App\Livewire\Component\ActivityFeed;
use App\Http\Controllers\ActivityController; 

Route::view('/', 'welcome')->name('home');
Route::get('/filter', Filter::class);
Route::get('/activity', ActivityFeed::class);
Route::resource('activity', ActivityController::class);

