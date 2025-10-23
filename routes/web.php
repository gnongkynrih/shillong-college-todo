<?php

use App\Livewire\CreateCategory;
use App\Livewire\DepositForm;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

Route::get('/login',\App\Livewire\Login::class)->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    
    Route::get('/deposit-form',DepositForm::class)->name('deposit-form');
    Route::get('/my-expenditure',\App\Livewire\Expenditure::class)->name('expenditure');
    Route::middleware('can:admin')->group(function () {
      Route::get('/create-category',CreateCategory::class)->name('category');
    });

    Route::post('/logout', function () {
      Auth::logout();
      request()->session()->invalidate();
      request()->session()->regenerateToken();
      return redirect()->route('login');
  })->name('logout');
});