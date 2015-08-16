<?php


class CotizacionDTO {

    private $IdCotizacion = 0;
    private $Estado = "";
    private $fecha = "";
    private $Total = 0;
    private $Observaciones = "";
    private $DescuentoIva = "";


    public function getIdCotizacion()
    {
        return $this->IdCotizacion;
    }

    public function setIdCotizacion($IdCotizacion)
    {
        $this->IdCotizacion = $IdCotizacion;
    }

    public function getEstado()
    {
        return $this->Estado;
    }

    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getTotal()
    {
        return $this->Total;
    }

    public function setTotal($Total)
    {
        $this->Total = $Total;
    }

    public function getObservaciones()
    {
        return $this->Observaciones;
    }

    public function setObservaciones($Observaciones)
    {
        $this->Observaciones = $Observaciones;
    }

    public function getDescuentoIva()
    {
        return $this->DescuentoIva;
    }

    public function setDescuentoIva($DescuentoIva)
    {
        $this->DescuentoIva = $DescuentoIva;
    }

}