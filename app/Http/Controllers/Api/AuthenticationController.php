<?php

namespace App\Http\Controllers\Api;

use App\Facades\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegisterRequest;

class AuthenticationController extends Controller
{
    public function store(RegisterRequest $request)
    {
        User::store($request->data());
        return response()->json(['message' => 'successful'], 201);
    }
}
