<?php

namespace Tumichnix\Maintenance\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tumichnix\Maintenance\MaintenanceTrait;
use Tumichnix\Maintenance\Exceptions\MaintenanceException;

class MaintenanceMiddleware
{
    use MaintenanceTrait;

    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (file_exists($this->getMaintenanceFilePath())) {
            throw new MaintenanceException();
        }

        return $next($request);
    }
}
