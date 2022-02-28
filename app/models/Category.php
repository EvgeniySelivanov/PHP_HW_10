<?php
namespace App\Models;

use App\Helpers\Db;
use ReflectionClass;

class Category extends Model{
public $id;
public $name;
public $description;

public static function getTable()
   {
return 'categories';
   } 


}
