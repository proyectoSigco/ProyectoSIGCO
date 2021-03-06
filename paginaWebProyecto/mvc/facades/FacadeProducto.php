<?php

class Facade {

    private $con;
    private $objDao;

    public function __Construct(){

        $this->con=Conexion::getConexion();
        $this->objDao=new ProductoDao();
    }

    public function registrarProducto(ProductosDto $productoDto){

          return $this->objDao->registrarProducto($productoDto,$this->con);
    }
    public  function getProductos(){
        return $this->objDao->listarProductos($this->con);
    }
    public  function  obtenerProducto($userId){
        return $this->objDao->obtenerProducto($userId,$this->con);
    }
    public function actualizarProducto(ProductosDto $usuarioDto,$idProducto){
        return $this->objDao->modificarProducto($usuarioDto,$this->con,$idProducto);
    }
    public function  cancelarProducto($idUser){
        return $this->objDao->cancelarProducto($idUser,$this->con);
    }
    public function  presentacionId($idUser){
        return $this->objDao->presentacionId($idUser,$this->con);
    }
    public function  obtenerPresentacionProducto(){
        return $this->objDao->obtenerPresentacionProducto($this->con);
    }
    public function  obtenerCategoriaProducto(){
        return $this->objDao->obtenerCategoriaProducto($this->con);
    }
    public function  obtenerImpuestosProducto(){
        return $this->objDao->obtenerIvaProducto($this->con);
    }

}