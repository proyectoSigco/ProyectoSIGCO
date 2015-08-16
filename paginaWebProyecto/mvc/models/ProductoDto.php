<?php


class ProductosDto {

    private  $idProducto;
    private  $nombreProducto;
    private  $descripcion;
    private  $unidadMedida;
    private  $iva;
    private  $valorUnitario;
    private  $imagenProducto;

    /**
     * @return mixed
     */
    public function getImagenProducto()
    {
        return $this->imagenProducto;
    }

    /**
     * @param mixed $imagenProducto
     */
    public function setImagenProducto($imagenProducto)
    {
        $this->imagenProducto = $imagenProducto;
    }

    private  $presentacion;
    private  $categoriaProducto;

    public function getPresentacion()
    {
       return $this->presentacion;
    }
    public function setPresentacion($presentacion){
        $this->presentacion=$presentacion;
    }

    public function getCategoriaProducto()
    {
        return $this->categoriaProducto;
    }
    public function setCategoria($categoria){
        $this->categoriaProducto=$categoria;
    }

    public function getIdProducto()
    {
        return $this->idProducto;
    }


    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;
    }


    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }


    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getUnidadMedida()
    {
        return $this->unidadMedida;
    }


    public function setUnidadMedida($unidadMedida)
    {
        $this->unidadMedida = $unidadMedida;
    }


    public function getIva()
    {
        return $this->iva;
    }

    public function setIva($iva)
    {
        $this->iva = $iva;
    }


    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;
    }

}