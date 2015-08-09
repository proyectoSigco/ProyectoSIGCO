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
    public  function getUsers(){
        return $this->objDao->listarProductos($this->con);
    }
    public  function  getUser($userId){
        return $this->objDao->buscarProducto($userId, $this->con);
    }
    public function updateUser(ProductosDto $usuarioDto){

        return $this->objDao->modificarProducto($usuarioDto,$this->con);
    }
    public function  deleteUser($idUser){
        return $this->objDao->cancelarProducto($idUser,$this->con);
    }
}