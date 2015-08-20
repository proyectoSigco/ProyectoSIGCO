<?php

require_once '../models/ProductoDao.php';
require_once '../models/ProductoDto.php';
require_once '../controllers/ControladorProducto.php';
require_once '../utilities/Conexion.php';
require_once '../facades/FacadeProducto.php';

$fachada = new Facade();

if (isset($_POST['guardar'])) {

    $producto = new ProductosDto();
    $producto->setIdProducto($_POST['codigoProducto']);
    $producto->setNombreProducto($_POST['nombreProducto']);
    $producto->setDescripcion($_POST['descriptionProducto']);
    $producto->setUnidadMedida($_POST['unidadProducto']);
    $producto->setIva($_POST['ivaProducto']);
    $producto->setValorUnitario($_POST['valorProducto']);
    $producto->setPresentacion($_POST['presentacionProducto']);
    $producto->setCategoria($_POST['categoriaProducto']);
    $producto->setImagenProducto($_POST['ImagenProducto']);
    $mensaje = $fachada->registrarProducto($producto);

    header("Location: ../views/registrarProducto.php?mensaje=".$mensaje);

}
if(isset($_POST['codigoProducto2'])){

    $producto = new ProductosDto();
    $producto->setIdProducto($_POST['codigoProducto2']);
    $producto->setNombreProducto($_POST['nombreProducto']);
    $producto->setDescripcion($_POST['descriptionProducto']);
    $producto->setUnidadMedida($_POST['unidadProducto']);
    $producto->setIva($_POST['ivaProducto']);
    $producto->setValorUnitario($_POST['valorProducto']);
    $producto->setPresentacion($_POST['presentacionProducto']);
    $producto->setCategoria($_POST['categoriaProducto']);
    $mensaje = $fachada->actualizarProducto($producto);
echo $mensaje;

}

if (isset ($_GET['idproducto'])){
    $fachada = new Facade();
    $fachada->cancelarProducto($_GET['idproducto']);
    echo 'borre';
}