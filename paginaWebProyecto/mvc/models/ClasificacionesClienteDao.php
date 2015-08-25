<?php

class ClasificacionesClienteDao
{

    public function listarTodas(){
        $cnn = Conexion::getConexion();

        try{
            $listarClasificaciones = 'Select * from clasificaciones';
            $query = $cnn->prepare($listarClasificaciones);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error :'.$ex->getMessage();
        }
        $cnn=null;
    }

}