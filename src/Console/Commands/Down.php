<?php

namespace Tumichnix\Maintenance\Console\Commands;

use Illuminate\Console\Command;
use Tumichnix\Maintenance\MaintenanceTrait;

class Down extends Command
{
    use MaintenanceTrait;

    protected $signature = 'down';
    protected $description = 'Put the application into maintenance mode';

    public function handle()
    {
        $down = $this->getMaintenanceFilePath();
        if (!file_exists($down)) {
            touch($down);
        }
        $this->info('Application is now in maintenance mode.');
    }
}
