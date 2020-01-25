<?php

use app\core\Router;

error_reporting(E_ALL);
ini_set('display_errors', 1);
define('ROOT', __DIR__);

spl_autoload_register(function (string $className) {
  require_once ROOT . '/' . str_replace( '\\', '/', $className ) . '.php';
});

// require_once ROOT . '/app/core/router.php';
// require_once ROOT . '/app/core/store.php';
// require_once ROOT . '/app/core/controller.php';
// require_once ROOT . '/app/core/view.php';
// require_once ROOT . '/app/entities/expenseEntity.php';
// require_once ROOT . '/app/entities/categoryEntity.php';
// require_once ROOT . '/app/entities/subcategoryEntity.php';
// require_once ROOT . '/app/models/expense.php';
// require_once ROOT . '/app/models/queryParams.php';
// require_once ROOT . '/app/stores/categoryStore.php';
// require_once ROOT . '/app/stores/subcategoryStore.php';

Router::start();
