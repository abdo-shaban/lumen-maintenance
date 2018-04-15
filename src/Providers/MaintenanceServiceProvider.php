<?php

namespace Tumichnix\Maintenance\Providers;

use Illuminate\Support\ServiceProvider;
use Tumichnix\Maintenance\Console\Commands\Up;
use Tumichnix\Maintenance\Console\Commands\Down;
use Tumichnix\Maintenance\Http\Middleware\MaintenanceMiddleware;

class MaintenanceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->middleware([MaintenanceMiddleware::class]);
        $this->commands([Down::class, Up::class]);
    }
}
