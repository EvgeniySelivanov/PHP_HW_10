<?php
namespace App\Models;



class Auto extends Model{

    public $id;
    public $marka;
    public $year;
    public $color;
    
    
    public static function getTable()
       {
    return 'auto';
       } 
    
    }