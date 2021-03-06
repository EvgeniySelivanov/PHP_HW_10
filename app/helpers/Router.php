<?php

namespace App\Helpers;

class Router
{
    public static function start()
    {
        $url = $_GET['url'] ?? '/';
        $routes = require_once "app/web.php";
        if (!isset($routes[$url])) 
        {
            
            die('Page not found');
        }
        list($nameMethod,$nameController)=$routes[$url];
        if(!file_exists('app/controllers/' .$nameController. '.php' ))
        {
            die('Controller not found');
        }
        $controller= '\\App\\Controllers\\' .$nameController;

        $objController=new $controller();
        if(!method_exists($objController,$nameMethod)){
            die('Method not found');
        }
        $objController->$nameMethod();
    }
}
