<?php

class CotizacionesDAO {

    public function CrearCotizacion(CotizacionesDTO $cotizacionesDTO, DetallesCotizacionDTO $detallesCotizacionDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("INSERT INTO Cotizaciones  VALUES (?,?,?,?,?,?,?,?)");
            $query->bindParam(1, $cotizacionesDTO->getIdCotizacion());
            $query->bindParam(2, $cotizacionesDTO->getEstado());
            $query->bindParam(3, $cotizacionesDTO->getFechaCreacion());
            $query->bindParam(4, $cotizacionesDTO->getValorTotal());
            $query->bindParam(5, $cotizacionesDTO->getObservaciones());
            $query->bindParam(6, $cotizacionesDTO->getDescuentoIvaXcliente());
            $query->bindParam(7, $cotizacionesDTO->getIdUsuario());
            $query->bindParam(8, $cotizacionesDTO->getIdCliente());
            $query->execute();
            $this->CrearDetallesCotizacion($detallesCotizacionDTO,$cnn);
            $mensaje = "OK CrearCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }


    public function CrearDetallesCotizacion(DetallesCotizacionDTO $detallesCotizacionDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("INSERT INTO DetallesCotizacion VALUES (?,?,?,?,?)");
            $query->bindParam(1, $detallesCotizacionDTO->getIdCotizacion());
            $query->bindParam(2, $detallesCotizacionDTO->getIdProducto());
            $query->bindParam(3, $detallesCotizacionDTO->getCantidad());
            $query->bindParam(4, $detallesCotizacionDTO->getIva());
            $query->bindParam(5, $detallesCotizacionDTO->getTotal());
            $query->execute();
            $mensaje = "OK CrearDetallesCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function ModificarCotizacion(CotizacionesDTO $cotizacionesDTO, DetallesCotizacionDTO $detallesCotizacionDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("UPDATE Cotizaciones SET  Estado=?, FechaCreacion=?, ValorTotal=?, Observaciones=?, DescuentoIvaXcliente=?, IdUsuario=?, IdCliente=? WHERE IdCotizacion=?");
            $query->bindParam(1, $cotizacionesDTO->getEstado());
            $query->bindParam(2, $cotizacionesDTO->getFechaCreacion());
            $query->bindParam(3, $cotizacionesDTO->getValorTotal());
            $query->bindParam(4, $cotizacionesDTO->getObservaciones());
            $query->bindParam(5, $cotizacionesDTO->getDescuentoIvaXcliente());
            $query->bindParam(6, $cotizacionesDTO->getIdUsuario());
            $query->bindParam(7, $cotizacionesDTO->getIdCliente());
            $query->bindParam(8, $cotizacionesDTO->getIdCotizacion());
            $query->execute();
            $this->ModificarDetallesCotizacion($detallesCotizacionDTO, $cnn);
            $mensaje = "OK ModificarCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;

    }

    public function ModificarDetallesCotizacion(DetallesCotizacionDTO $detallesCotizacionDTO, PDO $cnn){
        try{
            $query = $cnn->prepare("UPDATE DetallesCotizacion SET IdProducto=?, Cantidad=?, Iva=?, Total=? WHERE IdCotizacion=?");
            $query->bindParam(1, $detallesCotizacionDTO->getIdProducto());
            $query->bindParam(2, $detallesCotizacionDTO->getCantidad());
            $query->bindParam(3, $detallesCotizacionDTO->getIva());
            $query->bindParam(4, $detallesCotizacionDTO->getTotal());
            $query->bindParam(5, $detallesCotizacionDTO->getIdCotizacion());
            $query->execute();
            $mensaje = "OK ModificarDetallesCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function CancelarCotizacion(CotizacionesDTO $cotizacionesDTO, DetallesCotizacionDTO $detallesCotizacionDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("UPDATE Cotizaciones SET Estado=?, FechaCreacion=?, ValorTotal=?, Observaciones=?, DescuentoIvaXCliente=?, IdUsuario=?, IdCliente=? WHERE IdCotizacion=?)");
            $query->bindParam(1, $cotizacionesDTO->getEstado());
            $query->bindParam(2, $cotizacionesDTO->getFechaCreacion());
            $query->bindParam(3, $cotizacionesDTO->getValorTotal());
            $query->bindParam(4, $cotizacionesDTO->getObservaciones());
            $query->bindParam(5, $cotizacionesDTO->getDescuentoIvaXcliente());
            $query->bindParam(6, $cotizacionesDTO->getIdUsuario());
            $query->bindParam(7, $cotizacionesDTO->getIdCliente());
            $query->bindParam(8, $cotizacionesDTO->getIdCotizacion());
            $query->execute();
            $this->CancelarDetallesCotizacion($detallesCotizacionDTO, $cnn);
            $mensaje = "OK CancelarCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function CancelarDetallesCotizacion(DetallesCotizacionDTO $detallesCotizacionDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("UPDATE Detallescotizacion SET IdProducto=?, Cantidad=?, Iva=?, Total=? WHERE IdCotizacion=?");
            $query->bindParam(1, $detallesCotizacionDTO->getIdProducto());
            $query->bindParam(2, $detallesCotizacionDTO->getCantidad());
            $query->bindParam(3, $detallesCotizacionDTO->getIva());
            $query->bindParam(4, $detallesCotizacionDTO->getTotal());
            $query->bindParam(5, $detallesCotizacionDTO->getIdCotizacion());
            $query->execute();
            $mensaje = "OK CancelarDetallesCotizacion";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function ConvertirCotizacionAOrdenCompra(CotizacionesDTO $cotizacionesDTO, DetallesCotizacionDTO $detallesCotizacionDTO, OrdenesDeCompraDTO $ordenesDeCompraDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("UPDATE Cotizaciones SET Estado=?, FechaCreacion=?, ValorTotal=?, Observaciones=?, DescuentoIvaXCliente=?, IdUsuario=?, IdCliente=? WHERE IdCotizacion=?)");
            $query->bindParam(1, $cotizacionesDTO->getEstado());
            $query->bindParam(2, $cotizacionesDTO->getFechaCreacion());
            $query->bindParam(3, $cotizacionesDTO->getValorTotal());
            $query->bindParam(4, $cotizacionesDTO->getObservaciones());
            $query->bindParam(5, $cotizacionesDTO->getDescuentoIvaXcliente());
            $query->bindParam(6, $cotizacionesDTO->getIdUsuario());
            $query->bindParam(7, $cotizacionesDTO->getIdCliente());
            $query->bindParam(8, $cotizacionesDTO->getIdCotizacion());
            $query->execute();
            $this->ConvertirAOrden($detallesCotizacionDTO, $cnn);
            $mensaje = "OK ConvertirCotizacionAOrdenCompra";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function ConvertirAOrden(OrdenesDeCompraDTO $ordenesDeCompraDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("INSERT INTO OrdenesDeCompra VALUES (?,?,?,?,?,?) WHERE IdCotizacion=?");
            $query->bindParam(1, $ordenesDeCompraDTO->getEstado());
            $query->bindParam(2, $ordenesDeCompraDTO->getFecha());
            $query->bindParam(3, $ordenesDeCompraDTO->getTotalCotizacion());
            $query->bindParam(4, $ordenesDeCompraDTO->getDescuentoTotal());
            $query->bindParam(5, $ordenesDeCompraDTO->getGranTotal());
            $query->bindParam(6, $ordenesDeCompraDTO->getObservaciones());
            $query->bindParam(7, $ordenesDeCompraDTO->getIdCotizacion());
            $query->execute();
            $mensaje = "OK ConvertirOrdenCompra";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

}