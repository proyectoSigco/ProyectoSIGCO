<?php

class OrdenDeCompraDTO {

    private $IdOrden = 0;
    private $Estado = "";
    private $Fecha = "";
    private $Total = 0;
    private $Descuento = 0;
    private $GranTotal = 0;
    private $Observaciones = "";

    public function getIdOrden()
    {
        return $this->IdOrden;
    }

    public function setIdOrden($IdOrden)
    {
        $this->IdOrden = $IdOrden;
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
        return $this->Fecha;
    }

    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
    }

    public function getTotal()
    {
        return $this->Total;
    }

    public function setTotal($Total)
    {
        $this->Total = $Total;
    }

    public function getDescuento()
    {
        return $this->Descuento;
    }

    public function setDescuento($Descuento)
    {
        $this->Descuento = $Descuento;
    }

    public function getGranTotal()
    {
        return $this->GranTotal;
    }

    public function setGranTotal($GranTotal)
    {
        $this->GranTotal = $GranTotal;
    }

    public function getObservaciones()
    {
        return $this->Observaciones;
    }

    public function setObservaciones($Observciones)
    {
        $this->Observaciones = $Observaciones;
    }

}