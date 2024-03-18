<?php

use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get('/register', Register::class)->name('register.index');
Route::post('/register', Register::class)->name('register.store');
