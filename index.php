<?php
require_once 'vendor/autoload.php';

spl_autoload_register(function($class){
    require_once "$class.php";
});

\App\Helpers\Router::start();