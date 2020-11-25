<?php
namespace App\Controllers;

use \App\Models\User;

class LoginController  
{
    public function __construct()
    {
        
    }
    public function index()
    {
        include('../views/login.php');
    }
    public function acceder()
    {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $user=User::findByEmail($email);
        echo"<pre>";
        var_dump($user);
    }
}
