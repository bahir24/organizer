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
		
		if (in_array('kitchen', $exclusions)) {
			return;
		}

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
	

	public static function start_old()
	{
		$ctrlName = 'main';
		$actName = 'index';
		$modName = 'expenses';
		$arrRoutes = explode('/', $_SERVER['REQUEST_URI']);
		if (!empty($arrRoutes[1])) {
			$ctrlName = $arrRoutes[1];
		}
		if (!empty($arrRoutes[2])) {
			$actName = $arrRoutes[2];
		}
		
		$modName = $modName.'Store';
		$ctrlName = $ctrlName.'Controller';
		$actName = $actName.'Action';
		$modFile = $modName.'.php';
		$modPath = "app/stores/".$modFile;
		if (file_exists($modPath)) {
			include "app/stores/".$modFile;
		}
		$ctrlFile = $ctrlName.'.php';
		$ctrlPath = "app/controllers/".$ctrlFile;
		if (file_exists($ctrlPath)) {
			include "app/controllers/".$ctrlFile;
		} else {
			Router::ErrorPage404();
		}
		if (class_exists($ctrlName)) {
			$ctrl = new $ctrlName($_POST);
			$act = $actName;
			if (method_exists($ctrl, $act)) {
				$ctrl->$act($_POST);
			} else {
				Router::ErrorPage404();
			}
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
