<?php

// Arahkan storage & cache Laravel ke folder temporary Vercel (/tmp)
$appfile = __DIR__ . '/../bootstrap/app.php';

if (!file_exists($appfile)) {
    require __DIR__ . '/../vendor/autoload.php';
    exit('Bootstrap file not found.');
}

// Set penampung sementara agar tidak read-only di Vercel
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

// Buat struktur folder di /tmp jika belum ada
$directories = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

require __DIR__ . '/../public/index.php';