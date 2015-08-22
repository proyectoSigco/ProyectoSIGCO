<?php
/**
 * Created by PhpStorm.
 * User: iStam
 * Date: 16/08/15
 * Time: 2:17 AM
 */
require'../models/UsuarioDao.php';
require'../utilities/Conexion.php';
Class FacadeUsuario{
private $con;
private $objDao;

public function __Construct(){

    $this->con=Conexion::getConexion();
    $this->objDao=new UsuarioDao();
}


public function registrarUsuario(UsuarioDto $objeto){
    return $this->objDao->registrarUsuario($objeto,$this->con);
}

public function obtenerUsuario($user){
    return $this->objDao->buscarUsuario($user,$this->con);
}

public function listarUsuarios(){
    return $this->objDao->listarUsuarios($this->con);
}

public function borrarUsuario($user){
    return $this->objDao->cancelarUsuario($user,$this->con);
}

public  function modificarUsuario(UsuarioDto $obj,$user){
    return $this->objDao->modificarUsuario($obj,$user,$this->con);
}

public function comprobarUsuario($user,$pass){
 $validar=$this->objDao->login($user,$pass,$this->con);
    if ($validar['existe']==0){
        return false;
    }else{
        $_SESSION['rol']=$this->objDao->rol($user,$this->con);
        return $this->objDao->datosLogin($user,$this->con);
    }
}

public function obtenerMenu($rol){
return $this->objDao->Menu($rol,$this->con);

}


}