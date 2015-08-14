<?php
require_once '../Gestion/gestion.dao/GestionDao.php';
require_once '../Gestion/gestion.dto/GestionDto.php';
require_once '../Controladores/ControladorGestion.php';
require_once '../Utilidades/Conexion.php';
require_once '../fachada/FacadeGestion.php';

$fachada = new FacadeGestion();

if (isset($_POST['idcliente'])) {

    $gestion = new GestionDto();
    $gestion->setIdCliente ($_POST['idcliente']);
    $gestion->setTipoVisita($_POST['tipoVisita']);
    $gestion->setTemaProducto($_POST['tema']);
    $gestion->setAsistentes($_POST['asistentes']);
    $gestion->setObservaciones($_POST['observaciones']);
    $gestion->setLugar($_POST['lugar']);
    $gestion->setFechaVisita($_POST['fechaVisita']);
    $mensaje = $fachada->registrarGestion($gestion);

    header("Location: ../../paginas/formularios/gestion.php?mensaje=".$mensaje);

}

if (isset ($_GET['idproducto'])){

    $fachada->cancelarProducto($_GET['idproducto']);
    echo 'borre';
}