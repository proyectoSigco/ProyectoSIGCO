<?php


class CotizacionesDTO {

    private $IdCotizacion;
    private $IdUsuario;
    private $IdCliente;
    private $Estado;
    private $FechaCreacion;
    private $ValorTotal;
    private $Observaciones;
    private $DescuentoIvaXcliente;


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
    public function getIdUsuario()
    {
        return $this->IdUsuario;
    }

    /**
     * @param mixed $IdUsuario
     */
    public function setIdUsuario($IdUsuario)
    {
        $this->IdUsuario = $IdUsuario;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->IdCliente;
    }

    /**
     * @param mixed $IdCliente
     */
    public function setIdCliente($IdCliente)
    {
        $this->IdCliente = $IdCliente;
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
    public function getFechaCreacion()
    {
        return $this->FechaCreacion;
    }

    /**
     * @param mixed $FechaCreacion
     */
    public function setFechaCreacion($FechaCreacion)
    {
        $this->FechaCreacion = $FechaCreacion;
    }

    /**
     * @return mixed
     */
    public function getValorTotal()
    {
        return $this->ValorTotal;
    }

    /**
     * @param mixed $ValorTotal
     */
    public function setValorTotal($ValorTotal)
    {
        $this->ValorTotal = $ValorTotal;
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

    /**
     * @return mixed
     */
    public function getDescuentoIvaXcliente()
    {
        return $this->DescuentoIvaXcliente;
    }

    /**
     * @param mixed $DescuentoIvaXcliente
     */
    public function setDescuentoIvaXcliente($DescuentoIvaXcliente)
    {
        $this->DescuentoIvaXcliente = $DescuentoIvaXcliente;
    }


}