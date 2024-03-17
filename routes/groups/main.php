<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Applications\ApplicationController;

Route::controller(ApplicationController::class)->group(function () {
    Route::get('/', 'index')->name('index.application');
    Route::get('/my-tickets', 'show')->name('show.application');
});