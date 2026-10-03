<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Direct storage & cache ke /tmp Vercel
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

$directories = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/app/public',
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

// Maintenance mode check
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register Autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel 12 & Handle Request
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());