<?php

use App\Controllers\HomeController;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";

$router = new Router;

Router::get('/', function () {
    echo "Hello world";
});
Router::get('/about', function () {
    echo "About page";
});

Router::get('/home', [HomeController::class, 'index']);
Router::get('/contact', [HomeController::class, 'contact']);

$router->resolve();
