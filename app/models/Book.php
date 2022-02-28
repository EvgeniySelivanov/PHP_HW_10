<?php
namespace App\Models;

use App\Helpers\Db;

class Book extends Model{

public $id;
public $price;
public $name;
public $izd;


public static function getTable()
   {
return 'books';
   } 

}
