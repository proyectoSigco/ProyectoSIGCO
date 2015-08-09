<?php


class Gestion {

    private $idGestion;
    private $idUsuario;
    private $idCliente;
    private $estado;
    private $temaProducto;
    private $asistentes;
    private $observaciones;
    private $lugar;
    private $fechaVisita;
    private $idEmpresa;


    public function getIdGestion()
    {
        return $this->idGestion;
    }

    public function setIdGestion($idGestion)
    {
        $this->idGestion = $idGestion;
    }


    public function getIdUsuario()
    {
        return $this->idUsuario;
    }


    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }


    public function getIdCliente()
    {
        return $this->idCliente;
    }


    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function getEstado()
    {
        return $this->estado;
    }


    public function setEstado($estado)
    {
        $this->estado = $estado;
    }


    public function getTemaProducto()
    {
        return $this->temaProducto;
    }


    public function setTemaProducto($temaProducto)
    {
        $this->temaProducto = $temaProducto;
    }


    public function getAsistentes()
    {
        return $this->asistentes;
    }


    public function setAsistentes($asistentes)
    {
        $this->asistentes = $asistentes;
    }


    public function getObservaciones()
    {
        return $this->observaciones;
    }


    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }


    public function getLugar()
    {
        return $this->lugar;
    }


    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }


    public function getFechaVisita()
    {
        return $this->fechaVisita;
    }


    public function setFechaVisita($fechaVisita)
    {
        $this->fechaVisita = $fechaVisita;
    }


    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }


    public function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;
    }


    public function getIdTipoEmpresa()
    {
        return $this->idTipoEmpresa;
    }


    public function setIdTipoEmpresa($idTipoEmpresa)
    {
        $this->idTipoEmpresa = $idTipoEmpresa;
    }


    public function getIdActividadEmpresa()
    {
        return $this->idActividadEmpresa;
    }


}