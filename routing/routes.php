<?php

$url = parse_url($_SERVER['REQUEST_URI']);
$path = str_replace('/', '', $url['path']);

$route = [
    'login' => '../app/login.php',
    'register' => '../app/login.php',
];

if (! $path) {
    require_once '../app/login.php';
    exit;
}

if (array_key_exists($path, $route)) {
    require_once $route[$path];
} else {
    http_response_code(404);
    echo "NOT FOUND";
    exit;
}