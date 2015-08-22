<?php

require_once '../models/UsuarioDto.php';
require_once '../facades/FacadeUsuario.php';

$fachada = new FacadeUsuario();
$dto= new UsuarioDto();

if (isset($_GET['id'])){
    $fachada->borrarUsuario($_GET['id']);
    echo 'eliminado satisfactoiamente';

}
if (isset($_POST['documento'])) {
    $dto->setIdUsuario($_POST['documento']);
    $dto->setNombres($_POST['nombres']);
    $dto->setApellidos($_POST['apellidos']);
    $dto->setEmpleo($_POST['cargo']);
    $dto->setEmail($_POST['email']);
    $dto->setContrasenia($_POST['pass1']);
    $dto->setEstado(true);
    $dto->setRutaimagen($_POST['imagen']);
    echo $fachada->registrarUsuario($dto);
}

if (isset($_POST['documento2'])) {
    $idviejo=$_GET['idv'];
    $dto->setIdUsuario($_POST['documento2']);
    $dto->setNombres($_POST['nombres']);
    $dto->setApellidos($_POST['apellidos']);
    $dto->setEmpleo($_POST['cargo']);
    $dto->setEmail($_POST['email']);
    $dto->setContrasenia($_POST['pass1']);
    $dto->setEstado($_POST['estado']);
    echo $dto->getEstado();
    $dto->setRutaimagen($_POST['imagen']);
    echo $fachada->modificarUsuario($dto,$idviejo);
}
