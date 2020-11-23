<?php
namespace App\Controllers;

//require_once('../app/models/ProductType.php');
use App\Models\ProductType;

class ProducttypeController  
{
    public function __construct()
    {
       
    }
    public function index()
    {
        //echo "En método index<br>";
        $producTypes=ProductType::all();
        //echo '<pre>';
        //print_r($producTypes);
        include('../views/producttype/index.php');
    }
    public function show($arguments)
    {
        $id = $arguments[0];
        //echo "Mostrar el profucto $id"; 
        $product= ProductType::find($id);  
        //generar vista
        include('../views/producttype/show.php');     
    }
    public function create(){
        include ('../views/producttype/create.php');
    }
    public function store(){
        $product=new ProductType;
        $product->id=$_POST['id'];
        $product->name=$_POST['name'];
        $product->insert();

        header('Location: /producttype/index');
    }
    public function edit($arguments){
        $id=$arguments[0];
        $product=ProductType::find($id);
        include('../views/producttype/edit.php');
    }
    public function update($arguments){
        $id=$arguments[0];
        $product=ProductType::find($id);
        $product->id=$_POST['id'];
        $product->name=$_POST['name'];
        $product->save();

        header('Location: /producttype/index');
    }
    public function delete($arguments){
        $id=$arguments[0];
        $product=ProductType::find($id);
        $product->delete();

        header('Location: /producttype');

    }
}
