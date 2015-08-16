<?php

class CotizacionDetallesDTO {

    private $IdCotizacionDetalles = 0;
    private $Cantidad = 0;
    private $Iva = 0;
    private $Total = 0;


    public function getIdCotizacionDetalles()
    {
        return $this->IdCotizacionDetalles;
    }

    public function setIdCotizacionDetalles($IdCotizacionDetalles)
    {
        $this->IdCotizacionDetalles = $IdCotizacionDetalles;
    }

    public function getCantidad()
    {
        return $this->Cantidad;
    }

    public function setCantidad($Cantidad)
    {
        $this->Cantidad = $Cantidad;
    }

    public function getIva()
    {
        return $this->Iva;
    }

    public function setIva($Iva)
    {
        $this->Iva = $Iva;
    }

    public function getTotal()
    {
        return $this->Total;
    }

    public function setTotal($Total)
    {
        $this->Total = $Total;
    }

}