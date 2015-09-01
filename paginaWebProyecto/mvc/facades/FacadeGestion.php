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
    public function modificarGestion(GestionDto $usuarioDto,$idGestion){
        return $this->objDao->modificarGestion($usuarioDto,$this->con,$idGestion);
    }
    public function  cancelarGestion($idUser){
        return $this->objDao->cancelarGestion($idUser,$this->con);
    }
    public function  presentacionId($idUser){
        return $this->objDao->presentacionId($idUser,$this->con);
    }
    public function  obtenerEmpresasById($criteria){
        return $this->objDao->obtenerEmpresaById($criteria,$this->con);

    }
    public function  obtenerEmpresas(){
        return $this->objDao->obtenerEmpresas($this->con);
    }
    public function  datosEmpresa($id){
        return $this->objDao->obtenerGestion($id,$this->con);
    }
    public function  completeGestion($id){
        return $this->objDao->completeGestion($id,$this->con);
    }
}