<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Direct Storage & Cache ke /tmp
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['LOG_CHANNEL'] = 'stderr';
$_ENV['SESSION_DRIVER'] = $_ENV['SESSION_DRIVER'] ?? 'cookie';
$_ENV['CACHE_STORE'] = $_ENV['CACHE_STORE'] ?? 'array';
$_ENV['DB_CONNECTION'] = $_ENV['DB_CONNECTION'] ?? 'sqlite';
$_ENV['DB_DATABASE'] = $_ENV['DB_DATABASE'] ?? '/tmp/database.sqlite';

// Buat direktori sementara
$directories = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/app/public',
    '/tmp/bootstrap/cache',
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

// Buat file SQLite kosong jika belum ada
if (!file_exists('/tmp/database.sqlite')) {
    touch('/tmp/database.sqlite');
}

// 2. Override path cache
putenv('APP_SERVICES_CACHE=/tmp/bootstrap/cache/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/bootstrap/cache/packages.php');
putenv('APP_CONFIG_CACHE=/tmp/bootstrap/cache/config.php');
putenv('APP_ROUTES_CACHE=/tmp/bootstrap/cache/routes.php');
putenv('APP_EVENTS_CACHE=/tmp/bootstrap/cache/events.php');

// Autoload
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Aplikasi
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath('/tmp/storage');

try {
    $app->handleRequest(Request::capture());
} catch (\Throwable $e) {
    echo "<h1>Laravel Runtime Error:</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " line " . $e->getLine() . "</p>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}