<?php

use App\Http\Controllers\Applications\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::controller(ApplicationController::class)->group(function () {
    Route::get('/', 'index')->name('index.application');
});