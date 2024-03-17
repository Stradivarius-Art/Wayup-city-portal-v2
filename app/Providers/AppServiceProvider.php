<?php

namespace App\Providers;


use App\Services\ApplicationService;
use App\Services\Auth\AuthenticationService;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('application_service', ApplicationService::class);
        $this->app->bind('register_service', AuthenticationService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
