<?php

require_once '../Productos/productos.dao/ProductoDao.php';
require_once '../Productos/productos.dto/ProductoDto.php';
require_once '../Controladores/ControladorProducto.php';
require_once '../Utilidades/Conexion.php';
require_once '../fachada/Facade.php';

if (isset($_POST['codigoProducto'])) {
    $fachada = new Facade();

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

    header("Location: ../../paginas/formularios/producto.html?mensaje=".$mensaje);

}