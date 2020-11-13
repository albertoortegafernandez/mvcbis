<?php
namespace App\Models;

require_once '../core/Model.php';

use PDO;
use PDOException;
Use Core\Model;

class ProductType extends Model{

    public function __construct(){

    }
    public static function all()
    {
        $db=ProductType::db();
        $statement = $db->query('SELECT * FROM product_types');
        $products = $statement->fetchAll(PDO::FETCH_CLASS, ProductType::class);
        
        return $products;
    }
    public static function find($id)
    {
        $db = ProductType::db();

        $statement = $db->prepare('SELECT * FROM product_types WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, ProductType::class);
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
    public function insert(){
        $db = ProductType::db();

        $statement = $db->prepare('INSERT INTO product_types(`id`,
        `name`) VALUES(:id, :name)');
        $data=[
            ':id' => $this->id,
            ':name' => $this->name];        
        return $statement->execute($data);
    }
    public function save()
    {
        $db = ProductType::db();

        $statement = $db->prepare('UPDATE product_types SET `id`= :id,
        `name`=:name WHERE id=:id');
        $data=[
            ':id'=> $this->id,
            ':name' => $this->name,];        
        return $statement->execute($data);
    }
    public function delete(){
        $db=ProductType::db();
        $statement=$db->prepare('DELETE FROM product_types WHERE `id`= :id');
        return $statement->execute([':id'=>$this->id]);
    }
}
