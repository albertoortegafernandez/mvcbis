<?php
namespace App\Controllers;

require_once('../models/ProductType.php');
use App\Models\ProductType;

class ProducttypeController  
{
    public function __construct()
    {
       
    }
    public function index()
    {
        echo "En método index<br>";

        $producType=ProductType::all();
        echo '<pre>';
        include('../views/producttype/index.php');
    }
}
