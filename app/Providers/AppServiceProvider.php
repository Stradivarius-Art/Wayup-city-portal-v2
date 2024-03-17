<?php

namespace App\Providers;

use App\Http\Resources\GetApplication;
use App\Services\ApplicationService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('application', ApplicationService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        GetApplication::withoutWrapping();
    }
}
