<?php
include PATH."/model/DataBase.php";

class TesteModel extends DataBase{
   
    public function listar($id=null){
        if($id)
            $where=['id'=>$id];
        else
            $where=null; 

        return $this->select("usuario", null, $where);
    }

    public function delete($id){
        if($id){
          $val =[$id];
          $col =['id'];  
          return $this->delete("usuario",$col,$val); 
        }

        return false;
    }
}