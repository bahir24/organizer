<?php
  define('ROOT', __DIR__);
  require_once ROOT.'/app/models/router.php';

// echo '<br>'.'запрос:'.($_SERVER['REQUEST_URI']);
  Route::start();

?>