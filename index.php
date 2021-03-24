<?php

include "config.php";

/**Função para realizar o corregamento automático das classes. */
spl_autoload_register(function($controller){
    include PATH."//controller/".$controller.".php";
});


if(isset($_GET['path'])){
    $path=rtrim($_GET['path'],"/");

    $path=explode("/", $path);
   
    $controller=ucfirst($path[0]);
    
    $controller=new $controller();
    if(isset($path[1])){

    }else{
        $controller->index();
    }

}else{
    $controller=new Inicio();
    $controller->index();
}
