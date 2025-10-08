<?php

use App\Livewire\CreateCategory;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-category',CreateCategory::class);