<?php
class Route {
  static function start() {
    $ctrlName = 'Main';
    $actName = 'index';
    $arrRoutes = explode('/', $_SERVER['REQUEST_URI']);
    echo "<pre>";
    print_r($arrRoutes);
    echo "</pre>";
  }
}
