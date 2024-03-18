<?php

use App\Http\Controllers\Api\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthenticationController::class)->group(function () {
    Route::post('/user/create', 'store')->name('user.create');
});
