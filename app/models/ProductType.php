<?php
namespace App\Models;

use PDO;
use PDOException;

class productType
{
    public function __construct(){

    }
    public static function all()
    {
        $db=productType::db();
        $statement = $db->query('SELECT * FROM product_types');
        $products = $statement->fetchAll(PDO::FETCH_CLASS, productType::class);
        
        return $products;
    }
    public static function find($id)
    {
        $db = productType::db();

        $statement = $db->prepare('SELECT * FROM product_types WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, productType::class);
        $product = $statement->fetch(PDO::FETCH_CLASS);
        return $product;
    }
    protected static function db()
    {
        $dsn = 'mysql:dbname=mvc;host=db';
        $usuario = 'root';
        $contraseña = 'password';
        try {
            $db = new PDO($dsn, $usuario, $contraseña);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }
}
