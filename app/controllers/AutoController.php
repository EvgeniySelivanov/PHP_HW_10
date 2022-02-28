<?php
namespace App\Controllers;

use App\Helpers\View;
use App\Models\Auto;
class AutoController extends Controller{

    public function  index(){
        $auto=Auto::all();
        View::render('auto/index',compact('auto'));
        }
    }