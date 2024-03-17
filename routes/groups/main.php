<?php

use App\Http\Controllers\Api\ApplicationController;
use Illuminate\Support\Facades\Route;


Route::controller(ApplicationController::class)->group(function () {
    Route::get('/application', 'index')->name('index.application');
});