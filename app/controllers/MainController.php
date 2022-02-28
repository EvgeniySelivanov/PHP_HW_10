<?php
namespace App\Controllers;
use App\Helpers\View;
use App\Models\Auto;

class MainController extends Controller{
    public function index()
    {
      
        $title='Home Page';
        $products=['p1','p2','p3'];
        View::render('home',compact('title','products'));   
    }




    public function contacts()
    {
        $auto=Auto::all();
        $table='<table>';
        $table.='<tbody>';
       
        foreach($auto as $car){
       $table.=
        '<tr>
        <td>'.$car->id.'</td>
        <td>'.$car->marka.'</td>
        <td>'.$car->year.'</td>
        <td>'.$car->color.'</td>
    </tr>';}
    
        
        $table.='<tbody>';
        $table.='</table>';

        
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($table);
        $mpdf->Output();


        View::render('main/contacts'); 
    }
}