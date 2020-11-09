<?php
namespace App\Controllers;

require_once('../app/models/ProductType.php');
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
}
