<?php

namespace App\Services;

use App\Enum\ApplicationStatus;
use App\Models\Application;
use App\Models\ApplicationImage;
use Illuminate\Database\Eloquent\Collection;

class ApplicationService
{
    public function index(): Collection
    {
        return Application::query()
            ->limit(4)
            ->get();
    }
}
