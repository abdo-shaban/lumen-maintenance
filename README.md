# Lumen-Maintenance

[![GitHub release](https://img.shields.io/github/release/tumichnix/lumen-maintenance.svg?style=flat-square)](https://github.com/tumichnix/lumen-maintenance/releases)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/tumichnix/lumen-maintenance/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/tumichnix/lumen-maintenance.svg?style=flat-square)](https://github.com/tumichnix/lumen-maintenance/issues)

[![Build Status](https://travis-ci.org/tumichnix/lumen-maintenance.svg?branch=master)](https://travis-ci.org/tumichnix/lumen-maintenance)
[![StyleCI](https://styleci.io/repos/129595130/shield)](https://styleci.io/repos/129595130)

-----

## Install via composer

Run the following command to pull in the latest version:

`composer require tumichnix/lumen-maintennce`

## Bootstrap

Add the following line to the `bootstrap/app.php` file under the providers section:

```php
$app->register(Tumichnix\Maintenance\Providers\MaintenanceServiceProvider::class);

```
