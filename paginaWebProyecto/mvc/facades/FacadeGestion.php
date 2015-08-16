<?php
/**
 * Created by PhpStorm.
 * User: probook
 * Date: 12/08/15
 * Time: 01:42 AM
 */

Class FacadeGestion {
    private $con;
    private $objDao;

    public function __Construct(){

        $this->con=Conexion::getConexion();
        $this->objDao=new GestionDao();
    }

    public function registrarGestion(GestionDto $productoDto){
        return $this->objDao->registrarGestion($productoDto,$this->con);

    }
    public  function getGestiones(){
        return $this->objDao->listarGestion($this->con);
    }
    public  function  obtenerGestion($userId){
        return $this->objDao->buscarGestion($userId,$this->con);
    }
    public function modificarGestion(GestionDto $usuarioDto){
        return $this->objDao->modificarGestion($usuarioDto,$this->con);
    }
    public function  cancelarGestion($idUser){
        return $this->objDao->cancelarGestion($idUser,$this->con);
    }
    public function  presentacionId($idUser){
        return $this->objDao->presentacionId($idUser,$this->con);
    }
    public function  obtenerEmpresas(){
        return $this->objDao->obtenerEmpresas($this->con);
    }
    public function  obtenerCategoriaProducto(){
        return $this->objDao->obtenerPresentacionProducto($this->con);
    }
}