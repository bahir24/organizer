<?php

namespace app\core;

use app\controllers\MainController;

class Router
{


	public static function start()
	{
		$controllersNamespace = 'app\\controllers\\';
		
		$exclusions = array("css", "js");

		$controllerName = 'Main';
		$actionName = 'index';
		
		$arrRoutes = explode('/', $_SERVER['REQUEST_URI']);
		if (!empty($arrRoutes[1])) {
			$controllerName = $arrRoutes[1];
		}

		if (!empty($arrRoutes[2])) {
			$actionName = $arrRoutes[2];
		}
				
		$controllerName .= 'Controller';
		$controllerName = $controllersNamespace . $controllerName;
		$actionName .= 'Action';

		if (class_exists($controllerName)) {
			$controller = new $controllerName();
			
			if (method_exists($controller, $actionName)) 
				$controller->$actionName();
			else 
				Router::ErrorPage404();
			
		}
	}

	public static function ErrorPage404()
	{
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
		header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
		require_once '404.html';
	}
}
