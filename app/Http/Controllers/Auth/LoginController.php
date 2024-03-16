<?php

namespace App\Http\Controllers\Auth;

use App\Facades\Authentication;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function signIn(LoginRequest $loginRequest)
    {
        Authentication::signIn($loginRequest->input('email'), $loginRequest->input('password'));
    }
}
