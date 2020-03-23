<?php

use app\core\Router;
use app\Config;

require_once __DIR__ . '/vendor/autoload.php';

foreach(Config::$php as $setting => $value)
ini_set($setting, $value);

Router::start();