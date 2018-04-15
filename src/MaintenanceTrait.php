<?php

namespace Tumichnix\Maintenance;

trait MaintenanceTrait
{
    protected function getMaintenanceFilePath(): string
    {
        return storage_path('framework').DIRECTORY_SEPARATOR.'maintenance';
    }
}
