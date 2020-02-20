<?php

use app\core\Router;

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('ROOT', __DIR__);

require_once ROOT . '/vendor/autoload.php';

Router::start();
