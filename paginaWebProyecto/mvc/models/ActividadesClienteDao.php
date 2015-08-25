<?php

class ActividadesClienteDao
{

    public function listarTodas(){
        $cnn = Conexion::getConexion();

        try{
            $listarActividades = 'Select * from actividadesempresas';
            $query = $cnn->prepare($listarActividades);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error :'.$ex->getMessage();
        }
        $cnn=null;
    }

}