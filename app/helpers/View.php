<?php
namespace App\Helpers;
class View{

    public static function render(string $view,array $data=[])
{   
extract($data);
unset($data);
require_once 'app/views/header.php';
require_once 'app/views/'.$view.'.php';
require_once 'app/views/footer.php';
    }
}