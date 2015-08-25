<?php
class CiudadesDto
{

    private $idCiudad = 0;

    /**
     * @return int
     */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }

    /**
     * @param int $idCiudad
     */
    public function setIdCiudad($idCiudad)
    {
        $this->idCiudad = $idCiudad;
    }

    /**
     * @return string
     */
    public function getNombreCiudad()
    {
        return $this->nombreCiudad;
    }

    /**
     * @param string $nombreCiudad
     */
    public function setNombreCiudad($nombreCiudad)
    {
        $this->nombreCiudad = $nombreCiudad;
    }
    private $nombreCiudad ="";




}