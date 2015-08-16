<?php

class OrdenDeCompraDAO {

    public function ConvertirCotizacionAOrdenDeCompra(){

    }

    public function ModificarOrdenDeCompra(OrdenesDeCompraDTO $ordenDeCompraDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("UPDATE OrdenDeCompra SET Estado=?, Fecha=?, Total=?, Descuento=?, GranTotal=?, Observaciones=? WHERE IdOrden=?");
            $query->bindParam(1, $ordenDeCompraDTO->getEstado() );
            $query->bindParam(2, $ordenDeCompraDTO->getFecha());
            $query->bindParam(3, $ordenDeCompraDTO->getTotal());
            $query->bindParam(4, $ordenDeCompraDTO->getDescuento());
            $query->bindParam(5, $ordenDeCompraDTO->getGranTotal());
            $query->bindParam(6, $ordenDeCompraDTO->getObservaciones());
            $query->bindParam(7, $ordenDeCompraDTO->getIdOrden());
            $query->execute();
            $mensaje = "OK ModificarOrdenDeCompra";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function CancelarOrdenDeCompra(OrdenesDeCompraDTO $ordenDeCompraDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("UPDATE OrdenDeCompra SET Estado=? WHERE IdOrden=?)");
            $query->bindParam(1, $Estado());
            $query->bindParam(2, $IdOrden());
            $query->execute();
            $mensaje = "OK CancelarOrdenDeCompra";
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }


    public function ListarOrdenDeCompra(OrdenesDeCompraDTO $ordenDeCompraDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("SELECT * FROM OrdenDeCompra SET IdOrden=?");
            $query->bindParam(1, $IdOrden());
            $query->execute();
            $mensaje = "OK ListarOrdenDeCompra";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

    public function BuscarOrdenDeCompra(OrdenesDeCompraDTO $ordenDeCompraDTO, PDO $cnn){
        try {
            $query = $cnn->prepare("SELECT IdOrden From OrdenDeCompra SET IdOrden=?");
            $query->bindParam(1, $IdOrden());
            $query->execute();
            $mensaje = "OK BuscarOrdenDeCompra";
        }catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }

        $cnn = null;
        return $mensaje;
    }

}