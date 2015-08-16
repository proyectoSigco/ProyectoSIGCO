<?php

class CotizacionDetallesDAO {

    public function ListarCotizacionDetalles($IdCotizacionDetalles, PDO $cnn){
        try {
            $query = $cnn->prepare("SELECT * FROM CotizacionDetallles SET IdCotizacionDetalles=?");
            $query->bindParam(1, $IdCotizacionDetalles());
            $query->execute();
            $mensaje = "OK ListarCotizacionDetalles";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function BuscarCotizacionDetalles($IdCotizacionDetalles, PDO $cnn){
        try {
            $query = $cnn->prepare("SELECT IdCorizacionDetalles From CotizacioneDetalles SET IdCotizacionDetalles=?");
            $query->bindParam(1, $IdCotizacionDetalles());
            $query->execute();
            $mensaje = "OK BuscarCotizacionDetalles";
        }catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }
}