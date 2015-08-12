<?php

require_once '../Productos/productos.dao/ProductoDao.php';
require_once '../Productos/productos.dto/ProductoDto.php';
require_once '../Controladores/ControladorProducto.php';
require_once '../Utilidades/Conexion.php';
require_once '../fachada/FacadeProducto.php';
if (isset ($_GET['idproducto'])){
    $fachada = new Facade();
    $fachada->cancelarProducto($_GET['idproducto']);
    echo 'borre';
}
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