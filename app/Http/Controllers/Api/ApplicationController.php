<?php

namespace App\Http\Controllers\Api;

use App\Facades\Application;
use App\Http\Controllers\Controller;
use App\Http\Resources\GetApplication;

class ApplicationController extends Controller
{
    public function index()
    {
        return GetApplication::collection(Application::index());
    }
}
