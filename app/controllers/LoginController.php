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
        if (isset($_SESSION['user'])) {
            header('Location: /home');
            return;
        }
        include('../views/login.php');
    }
    public function acceder()
    {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $user=User::findByEmail($email);
        
        if ($user && $user->passwordVerify($password)) {
            $_SESSION['user']=$user;
            header('Location: /home');
        } else {
            $_SESSION['error']='Credenciales incorrectas';
            header('Location: /login');
        }
    }
    public function cerrar()
    {
        session_destroy();
        header('Location: /login');
    }
}
