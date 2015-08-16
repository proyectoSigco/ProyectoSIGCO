<?php

class CotizacionDAO {
    public function CrearCotizacion(CotizacionDTO $cotizacionDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("INSERT INTO Cotizacion  VALUES(?,?,?,?,?,?)");
            $query->bindParam(1, $cotizacionDTO->getIdCotizacion());
            $query->bindParam(2, $cotizacionDTO->getEstado());
            $query->bindParam(3, $cotizacionDTO->getFecha());
            $query->bindParam(4, $cotizacionDTO->getTotal());
            $query->bindParam(5, $cotizacionDTO->getObservaciones());
            $query->bindParam(6, $cotizacionDTO->getDescuentoIva());
            $query->execute();
            $mensaje = "OK CrearCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function ModificarCotizacion(CotizacionDTO $cotizacionDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("UPDATE Cotizacion SET Estado=?, Fecha=?, Total=?, Observaciones=?, DescuentoIva=? WHERE IdCotizacion=?");
            $query->bindParam(1, $cotizacionDTO->getEstado());
            $query->bindParam(2, $cotizacionDTO->getFecha());
            $query->bindParam(3, $cotizacionDTO->getTotal());
            $query->bindParam(4, $cotizacionDTO->getObservaciones());
            $query->bindParam(5, $cotizacionDTO->getDescuentoIva());
            $query->bindParam(6, $cotizacionDTO->getIdCotizacion());
            $query->execute();
            $mensaje = "OK ModificarCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;

    }

    public function CancelarCotizacion($IdCotizacion, $Estado, PDO $cnn){
        try {
            $query = $cnn->prepare("UPDATE Cotizacion SET Estado=? WHERE IdCotizacion=?)");
            $query->bindParam(1, $Estado());
            $query->bindParam(2, $IdCotizacion());
            $query->execute();
            $mensaje = "OK CancelarCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function CambiarEstadoOrdenCompra(){

    }
}