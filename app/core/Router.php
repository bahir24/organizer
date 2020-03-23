<?php

namespace app\core;

class Router
{
    public static function start()
    {
        $controllersNamespace = 'app\\controllers\\';

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
        $actionName .= 'Action';

        $controllerName = $controllersNamespace . $controllerName;

        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                $errorMessage = "method" . $actionName . " of controller" . $controllerName . "is not exists";
                Router::ErrorPage404($errorMessage);
            }
        } else {
            $errorMessage = "controller " . $controllerName . " is not exists";
            Router::ErrorPage404($errorMessage);
        }
    }

    public static function ErrorPage404($errorMessage)
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
        require_once '404.php';
    }
}
