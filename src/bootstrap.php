<?php

declare(strict_types=1);

spl_autoload_register(static function (string $class): void {
    $prefix = 'DrupalPckg\\';
    if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
        return;
    }
    $relative = str_replace('\\', '/', substr($class, strlen($prefix)));
    $path = __DIR__ . '/' . $relative . '.php';
    if (is_file($path)) {
        require $path;
    }
});
