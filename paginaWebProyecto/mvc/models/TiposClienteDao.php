<?php

class TiposClienteDao
{

    public function listarTodos(){
        $cnn = Conexion::getConexion();

        try{
            $listarTipos = 'Select * from tiposempresas';
            $query = $cnn->prepare($listarTipos);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error :'.$ex->getMessage();
        }
        $cnn=null;
    }

}