<?php
namespace App\Controllers;

use App\Helpers\View;
use App\Models\Category;

class CategoryController extends Controller{

public function  index(){
$categories=Category::all();
View::render('category/index',compact('categories'));
}




public function create()
{
    View::render('category/create');
}


public function store()
{
    $name=$_POST['name'];
    $description=$_POST['description'];
    $category=new Category();
    $category->name=$name;
    $category->description=$description;
    $category->save();
    return  self::redirect('/categories');
}

public function edit()
{
    $id=$_GET['id'];
    $category=Category::find($id);
    View::render('category/edit',compact('category'));
}



 public function update(){
    $id=$_POST['id']; 
    $name=$_POST['name'];
    $description=$_POST['description'];
    
    $category=Category::find($id);
    $category->name=$name;
    $category->description=$description;
    $category->save();
    return  self::redirect('/categories');

 }

 public function delete(){
    $id=$_GET['id'];
    $category=Category::find($id);
    View::render('category/delete',compact('category'));
}

public function deleteCategory(){

    
    $id=$_POST['id']; 
    $category=Category::find($id);
    $category->deleteCategory();
    return  self::redirect('/categories');
}
}