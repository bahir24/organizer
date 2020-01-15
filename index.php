<?php
  define('ROOT', __DIR__);
  require_once ROOT.'/app/core/router.php';
  require_once ROOT.'/app/core/store.php';
  require_once ROOT.'/app/core/controller.php';
  require_once ROOT.'/app/core/view.php';
  require_once ROOT.'/app/entities/expenseEntity.php';
  require_once ROOT.'/app/models/expense.php';


// echo '<br>'.'запрос:'.($_SERVER['REQUEST_URI']);
  Route::start();
// phpinfo();
?>