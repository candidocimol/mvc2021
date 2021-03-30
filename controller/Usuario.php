<?php

class Usuario
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['perfil']=='admin') {
                $this->listar();
            } else {
                heder("location:".HOME_URI);
            }
        } else {
            header("location:".HOME_URI."usuario/login");
        }
    }


    public function listar()
    {
    }


    public function login()
    {
        include PATH."/view/paginas/usuarios/login.php";
    }
    
    public function autenticar()
    {
        
    }
}
