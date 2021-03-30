<?php
/**
 */


class Teste{
    function __construct(){
        include PATH."/model/TesteModel.php";
    }
    public function index(){
       $testeModel=new TesteModel();

       $resultado=$testeModel->listar();

       var_dump($resultado);
        
    }

    public function listar($id=null){
        
        $testeModel=new TesteModel();

        $resultado=$testeModel->listar($id);

       var_dump($resultado);
    }

    public function delete($id){
        $testeModel=new TesteModel();

        if($testeModel->delete($id))
            echo ":-)";
        else
            echo ":-(";
    }
}