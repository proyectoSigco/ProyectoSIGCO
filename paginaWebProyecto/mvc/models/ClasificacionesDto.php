<?php


class ClasificacionesDto
{

    private $idClasificacion = 0;

    /**
     * @return int
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * @param int $idClasificacion
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;
    }

    /**
     * @return string
     */
    public function getNombreClasificacion()
    {
        return $this->nombreClasificacion;
    }

    /**
     * @param string $nombreClasificacion
     */
    public function setNombreClasificacion($nombreClasificacion)
    {
        $this->nombreClasificacion = $nombreClasificacion;
    }
    private $nombreClasificacion = "";



}