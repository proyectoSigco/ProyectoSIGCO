<?php

class DetallesCotizacionDTO
{
    private $IdCotizacion;
    private $IdProducto;
    private $Cantidad;
    private $Iva;
    private $Total;

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
    public function getIdProducto()
    {
        return $this->IdProducto;
    }

    /**
     * @param mixed $IdProducto
     */
    public function setIdProducto($IdProducto)
    {
        $this->IdProducto = $IdProducto;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->Cantidad;
    }

    /**
     * @param mixed $Cantidad
     */
    public function setCantidad($Cantidad)
    {
        $this->Cantidad = $Cantidad;
    }

    /**
     * @return mixed
     */
    public function getIva()
    {
        return $this->Iva;
    }

    /**
     * @param mixed $Iva
     */
    public function setIva($Iva)
    {
        $this->Iva = $Iva;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * @param mixed $Total
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
    }

}
