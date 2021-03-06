<?php
require_once '../models/GestionDao.php';
require_once '../models/GestionDto.php';
require_once '../utilities/Conexion.php';
require_once '../facades/FacadeGestion.php';

$fachada = new FacadeGestion();

if (isset($_POST['registrar'])) {

    $gestion = new GestionDto();
    $gestion->setIdCliente ($_POST['idCliente']);
    $gestion->setTipoVisita($_POST['tipoVisita']);
    $gestion->setTemaProducto($_POST['temaproducto']);
    $gestion->setAsistentes($_POST['asistentes']);
    $gestion->setObservaciones($_POST['observaciones']);
    $gestion->setAsunto($_POST['temaproducto']);
    $gestion->setLugar($_POST['lugar']);
    $gestion->setFechaVisita($_POST['fechaVisita']);
    $mensaje = $fachada->registrarGestion($gestion);
    header("Location: ../views/listarGestion.php?mensaje=".$mensaje);

}

if (isset ($_GET['idproducto'])){

    $fachada->cancelarProducto($_GET['idproducto']);
    echo 'borre';
}

if(isset($_POST['reload'])){
    foreach ($fachada->obtenerEmpresasById($_POST['reload']) as $iterator){
           print $iterator['RazonSocial'];
    }
}
if(isset($_POST['detail'])){
     $rows=$fachada->completeGestion($_POST['detail']);
        echo json_encode($rows);

}
if (isset($_POST['modificar'])) {

    $gestion = new GestionDto();
    $idviejo=$_GET['idv'];
    $gestion->setIdCliente ($_POST['idCliente']);
    $gestion->setTipoVisita($_POST['tipoVisita']);
    if($_POST['tipoVisita']=='CAPACITACION'){
        $gestion->setTemaProducto($_POST['temaproducto']);
    }else{
        $gestion->setTemaProducto($_POST['tema']);
    }

    $gestion->setAsistentes($_POST['asistentes']);
    $gestion->setObservaciones($_POST['observaciones']);
    $gestion->setAsunto($_POST['temaproducto']);
    $gestion->setLugar($_POST['lugar']);
    $gestion->setFechaVisita($_POST['fechaVisita']);
    $gestion->setEstado($_POST['estado']);
    $mensaje = $fachada->modificarGestion($gestion,$idviejo);

    header("Location: ../views/listarGestion.php?mensaje=".$mensaje);

}

