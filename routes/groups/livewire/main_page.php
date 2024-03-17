<?php

use App\Livewire\Main;
use App\Livewire\MyTickets;
use Illuminate\Support\Facades\Route;

Route::get('/', Main::class)->name('main');
Route::get('/my-tickets', MyTickets::class)->name('my-tickets');
