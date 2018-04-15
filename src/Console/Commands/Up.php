<?php

namespace Tumichnix\Maintenance\Console\Commands;

use Illuminate\Console\Command;
use Tumichnix\Maintenance\MaintenanceTrait;

class Up extends Command
{
    use MaintenanceTrait;

    protected $signature = 'up';
    protected $description = 'Bring the application out of maintenance mode';

    public function handle()
    {
        $down = $this->getMaintenanceFilePath();
        if (file_exists($down)) {
            unlink($down);
        }
        $this->info('Application is now live.');
    }
}
