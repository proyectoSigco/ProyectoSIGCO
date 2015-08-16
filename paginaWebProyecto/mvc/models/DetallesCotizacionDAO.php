<?php

class DetallesCotizacionDAO
{


    public function CrearDetallesCotizacion(DetallesCotizacionDTO $detallesCotizacionDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("INSERT INTO DetallesCotizacion  VALUES(?,?,?) WHERE IdCotizacion=?");
            $query->bindParam(1, $detallesCotizacionDTO->getCantidad());
            $query->bindParam(2, $detallesCotizacionDTO->getIva());
            $query->bindParam(3, $detallesCotizacionDTO->getTotal());
            $query->execute();
            $mensaje = "OK CrearDetallesCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function ModificarDetallesCotizacion(DetallesCotizacionDTO $detallesCotizacionDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("UPDATE DetallesCotizacion SET Cantidad=?, Iva=?, Total=? WHERE IdCotizacion=?");
            $query->bindParam(1, $detallesCotizacionDTO->getCantidad());
            $query->bindParam(2, $detallesCotizacionDTO->getIva());
            $query->bindParam(3, $detallesCotizacionDTO->getTotal());
            $query->bindParam(4, $detallesCotizacionDTO->getTotal());//traer IdCotizacion de la clase CotizacionesDAO
            $query->execute();
            $mensaje = "OK ModificarDetallesCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function CancelarDetallesCotizacion($IdCotizacion, $Estado, PDO $cnn){
        try {
            $query = $cnn->prepare("UPDATE Cotizaciones SET Estado=? WHERE IdCotizacion=?)");
            $query->bindParam(1, $Estado());
            $query->bindParam(2, $IdCotizacion());
            $query->execute();
            $mensaje = "OK CancelarDetallesCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function ListarDetallesCotizacion($IdCotizacion, PDO $cnn){
        try {
            $query = $cnn->prepare("SELECT * FROM DetalllesCotizacion SET IdCotizacion=?");
            $query->bindParam(1, $IdCotizacion ());//
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