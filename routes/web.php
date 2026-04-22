<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Filter;

Route::view('/', 'welcome')->name('home');
Route::get('/filter', Filter::class);


