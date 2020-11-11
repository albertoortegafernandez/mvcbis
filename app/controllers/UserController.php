<?php
namespace App\Controllers;

require_once('../app/models/User.php');
use \App\Models\User;

class UserController  
{
    public function __construct()
    {
       //echo "en UserController<br>";
    }

    public function index()
    {
        //echo "En método index<br>";

        //buscar la lista de usuarios
        //$users=\App\Models\User::all();
        $users=User::all();//arriba pongo use..
        //echo'<pre>';
        //print_r($users); muestra el array de usuarios
        //generar vista
        include('../views/user/index.php');
    }
    
    public function show($arguments)
    {
        $id = $arguments[0];
        //echo "Mostrar el usuario $id"; 
        $user= User::find($id);  
        //generar vista
        include('../views/user/show.php');     
    }
    public function delete($arguments)
    {
        $id = $arguments[0];
        echo "Borrar el usuario $id";        
    }
    public function create(){
        include('../views/user/create.php');
        //echo"EN CREATE";
    }
    public function store()
    {   
        //crea objeto
        $user=new User;
        $user->name=$_POST['name'];
        $user->surname=$_POST['surname'];
        $user->email=$_POST['email'];
        $user->birthdate=$_POST['birthdate'];
        $user->insert();

        //redirigir lista
        header('Location: /user/index');
    }
}
