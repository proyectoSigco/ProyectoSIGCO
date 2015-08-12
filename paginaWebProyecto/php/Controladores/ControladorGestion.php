<?php
require_once '../Gestion/gestion.dao/GestionDao.php';
require_once '../Gestion/gestion.dto/GestionDto.php';
require_once '../Controladores/ControladorGestion.php';
require_once '../Utilidades/Conexion.php';
require_once '../fachada/FacadeProducto.php';

$fachada = new Facade();

if (isset($_POST['codigoProducto'])) {

    $producto = new ProductosDto();
    $producto->setIdProducto($_POST['codigoProducto']);
    $producto->setNombreProducto($_POST['nombreProducto']);
    $producto->setDescripcion($_POST['descriptionProducto']);
    $producto->setUnidadMedida($_POST['unidadProducto']);
    $producto->setIva($_POST['ivaProducto']);
    $producto->setValorUnitario($_POST['valorProducto']);
    //$producto->setImagenProducto($_POST['ImagenProducto']);
    $producto->setPresentacion($_POST['presentacionProducto']);
    $producto->setCategoria($_POST['categoriaProducto']);
    $mensaje = $fachada->registrarProducto($producto);

    header("Location: ../../paginas/formularios/producto.php?mensaje=".$mensaje);

}

if (isset ($_GET['idproducto'])){

    $fachada->cancelarProducto($_GET['idproducto']);
    echo 'borre';
}