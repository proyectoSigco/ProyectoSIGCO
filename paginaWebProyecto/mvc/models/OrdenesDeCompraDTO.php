<?php

class OrdenesDeCompraDTO {

    private $IdOrden;
    private $IdCotizacion;
    private $Estado;
    private $Fecha;
    private $TotalCotizacion;
    private $DescuentoTotal;
    private $GranTotal;
    private $Observaciones;

    /**
     * @return mixed
     */
    public function getIdOrden()
    {
        return $this->IdOrden;
    }

    /**
     * @param mixed $IdOrden
     */
    public function setIdOrden($IdOrden)
    {
        $this->IdOrden = $IdOrden;
    }

    /**
     * @return mixed
     */
    public function getIdCotizacion()
    {
        return $this->IdCotizacion;
    }

    /**
     * @param mixed $IdCotizacion
     */
    public function setIdCotizacion($IdCotizacion)
    {
        $this->IdCotizacion = $IdCotizacion;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param mixed $Fecha
     */
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
    }

    /**
     * @return mixed
     */
    public function getTotalCotizacion()
    {
        return $this->TotalCotizacion;
    }

    /**
     * @param mixed $TotalCotizacion
     */
    public function setTotalCotizacion($TotalCotizacion)
    {
        $this->TotalCotizacion = $TotalCotizacion;
    }

    /**
     * @return mixed
     */
    public function getDescuentoTotal()
    {
        return $this->DescuentoTotal;
    }

    /**
     * @param mixed $DescuentoTotal
     */
    public function setDescuentoTotal($DescuentoTotal)
    {
        $this->DescuentoTotal = $DescuentoTotal;
    }

    /**
     * @return mixed
     */
    public function getGranTotal()
    {
        return $this->GranTotal;
    }

    /**
     * @param mixed $GranTotal
     */
    public function setGranTotal($GranTotal)
    {
        $this->GranTotal = $GranTotal;
    }

    /**
     * @return mixed
     */
    public function getObservaciones()
    {
        return $this->Observaciones;
    }

    /**
     * @param mixed $Observaciones
     */
    public function setObservaciones($Observaciones)
    {
        $this->Observaciones = $Observaciones;
    }




}