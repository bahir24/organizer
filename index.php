<?php

use app\core\Router;

error_reporting(E_ALL);
ini_set('display_errors', 1);
define('ROOT', __DIR__);

require_once 'vendor/autoload.php';

spl_autoload_register(function (string $className) {
    require_once ROOT . '/' . str_replace('\\', '/', $className) . '.php';
});

Router::start();