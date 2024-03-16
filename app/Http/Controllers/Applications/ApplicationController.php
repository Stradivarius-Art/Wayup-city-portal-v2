<?php

namespace App\Http\Controllers\Applications;

use App\Facades\Application;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::index();
        return view('pages.main')->with('applications', $applications);
    }

    public function show()
    {
        return view('pages.my-tickets');
    }
}
