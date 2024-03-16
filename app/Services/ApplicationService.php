<?php

namespace App\Services;

use App\Models\Application;
use Illuminate\Database\Eloquent\Collection;

class ApplicationService
{
    public function index(): Collection
    {
        return Application::get();
    }
}
