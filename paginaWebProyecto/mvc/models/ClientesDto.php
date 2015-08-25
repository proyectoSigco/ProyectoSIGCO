<?php

class ClientesDto
{

        private $idCliente = 0;
        private $idClienteNew = 0;
        private $telefonoCliente = 0;
        private $idContacto = 0;
        private $telefonoContacto = 0;
        private $razonSocial = "";
        private $direccionCliente = "";
        private $emailCliente = "";
        private $ciudadCliente = "";
        private $tipoCliente = "";
        private $actividadCliente = "";
        private $clasificacionCliente = "";
        private $nombreContacto = "";
        private $apellidoContacto = "";
        private $emailContacto = "";

    /**
     * @return int
     */
    public function getIdClienteNew()
    {
        return $this->idClienteNew;
    }

    /**
     * @param int $idClienteNew
     */
    public function setIdClienteNew($idClienteNew)
    {
        $this->idClienteNew = $idClienteNew;
    }

    /**
     * @return int
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param int $idCliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * @return int
     */
    public function getTelefonoCliente()
    {
        return $this->telefonoCliente;
    }

    /**
     * @param int $telefonoCliente
     */
    public function setTelefonoCliente($telefonoCliente)
    {
        $this->telefonoCliente = $telefonoCliente;
    }

    /**
     * @return int
     */
    public function getIdContacto()
    {
        return $this->idContacto;
    }

    /**
     * @param int $idContacto
     */
    public function setIdContacto($idContacto)
    {
        $this->idContacto = $idContacto;
    }

    /**
     * @return int
     */
    public function getTelefonoContacto()
    {
        return $this->telefonoContacto;
    }

    /**
     * @param int $telefonoContacto
     */
    public function setTelefonoContacto($telefonoContacto)
    {
        $this->telefonoContacto = $telefonoContacto;
    }

    /**
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * @param string $razonSocial
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    }

    /**
     * @return string
     */
    public function getDireccionCliente()
    {
        return $this->direccionCliente;
    }

    /**
     * @param string $direccionCliente
     */
    public function setDireccionCliente($direccionCliente)
    {
        $this->direccionCliente = $direccionCliente;
    }

    /**
     * @return string
     */
    public function getEmailCliente()
    {
        return $this->emailCliente;
    }

    /**
     * @param string $emailCliente
     */
    public function setEmailCliente($emailCliente)
    {
        $this->emailCliente = $emailCliente;
    }

    /**
     * @return string
     */
    public function getCiudadCliente()
    {
        return $this->ciudadCliente;
    }

    /**
     * @param string $ciudadCliente
     */
    public function setCiudadCliente($ciudadCliente)
    {
        $this->ciudadCliente = $ciudadCliente;
    }

    /**
     * @return string
     */
    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }

    /**
     * @param string $tipoCliente
     */
    public function setTipoCliente($tipoCliente)
    {
        $this->tipoCliente = $tipoCliente;
    }

    /**
     * @return string
     */
    public function getActividadCliente()
    {
        return $this->actividadCliente;
    }

    /**
     * @param string $actividadCliente
     */
    public function setActividadCliente($actividadCliente)
    {
        $this->actividadCliente = $actividadCliente;
    }

    /**
     * @return string
     */
    public function getClasificacionCliente()
    {
        return $this->clasificacionCliente;
    }

    /**
     * @param string $clasificacionCliente
     */
    public function setClasificacionCliente($clasificacionCliente)
    {
        $this->clasificacionCliente = $clasificacionCliente;
    }

    /**
     * @return string
     */
    public function getNombreContacto()
    {
        return $this->nombreContacto;
    }

    /**
     * @param string $nombreContacto
     */
    public function setNombreContacto($nombreContacto)
    {
        $this->nombreContacto = $nombreContacto;
    }

    /**
     * @return string
     */
    public function getApellidoContacto()
    {
        return $this->apellidoContacto;
    }

    /**
     * @param string $apellidoContacto
     */
    public function setApellidoContacto($apellidoContacto)
    {
        $this->apellidoContacto = $apellidoContacto;
    }

    /**
     * @return string
     */
    public function getEmailContacto()
    {
        return $this->emailContacto;
    }

    /**
     * @param string $emailContacto
     */
    public function setEmailContacto($emailContacto)
    {
        $this->emailContacto = $emailContacto;
    }





}