<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Database\Eloquent\Collection;

class Application extends Facade
{
    /**
     * @method Collection index()
     * 
     * @see \App\Services\ApplicationService
     */
    protected static function getFacadeAccessor()
    {
        return 'application';
    }
}
