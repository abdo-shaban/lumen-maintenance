<?php

namespace Tumichnix\Maintenance\Exceptions;

use Illuminate\Http\Response;

class MaintenanceException extends \Exception
{
    protected $code = Response::HTTP_SERVICE_UNAVAILABLE;
    protected $message = 'Unfortunately the service is down for a bit of maintenance right now.';
}
