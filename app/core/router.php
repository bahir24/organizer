<?php
class Route {
  static function start() {
    $ctrlName = 'main';
    $actName = 'index';
    $arrRoutes = explode('/', $_SERVER['REQUEST_URI']);
    if (!empty($arrRoutes[1])) {	
			$ctrlName = $arrRoutes[1];
    }    
    if (!empty($arrRoutes[2])) {
			$actName = $arrRoutes[2];
    }
    $modName = $ctrlName.'Store';
		$ctrlName = $ctrlName.'Controller';
    $actName = $actName.'Action';
    $modFile = $modName.'.php';
		$modPath = "app/stores/".$modFile;
		if(file_exists($modPath))	{
			include "app/stores/".$modFile;			
		}		   
    $ctrlFile = $ctrlName.'.php';
		$ctrlPath = "app/controllers/".$ctrlFile;
		if(file_exists($ctrlPath)) {
			include "app/controllers/".$ctrlFile;
		} else {
			Route::ErrorPage404();
    }    
		$ctrl = new $ctrlName;
		$act = $actName;
		if(method_exists($ctrl, $act)) {
			$ctrl->$act();
		} else {
			Route::ErrorPage404();
    }	
  }
  function ErrorPage404()	{
    $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
    header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
		echo "ERROR";
  }    
}