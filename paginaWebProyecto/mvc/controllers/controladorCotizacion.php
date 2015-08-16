<?php
require_once '../models/CotizacionesDAO.php';
require_once '../models/CotizacionesDTO.php';
require_once '../facades/facadeCotizacion.php';
require_once '../Utilities/';

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