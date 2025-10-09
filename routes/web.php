<?php

use App\Livewire\CreateCategory;
use App\Livewire\DepositForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-category',CreateCategory::class)->name('category');
Route::get('/deposit-form',DepositForm::class)->name('deposit-form');