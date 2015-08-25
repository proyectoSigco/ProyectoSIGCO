<?php

require_once '../models/ProductoDao.php';
require_once '../models/ProductoDto.php';
require_once '../controllers/ControladorProducto.php';
require_once '../utilities/Conexion.php';
require_once '../facades/FacadeProducto.php';

$fachada = new Facade();

if (isset($_POST['guardar'])) {
    $file = $_FILES['ImagenProducto'];
    $name = uniqid().$file['name'];
    $path = "../images/" . basename($name);
    if (move_uploaded_file($file['tmp_name'], $path)) {
        echo "move succeed";

    } else {
        echo 'fail to upload image';
    }
    $producto = new ProductosDto();
    $producto->setIdProducto($_POST['codigoProducto']);
    $producto->setNombreProducto($_POST['nombreProducto']);
    $producto->setDescripcion($_POST['descriptionProducto']);
    $producto->setUnidadMedida($_POST['unidadProducto']);
    $producto->setIva($_POST['ivaProducto']);
    $producto->setValorUnitario($_POST['valorProducto']);
    $producto->setPresentacion($_POST['presentacionProducto']);
    $producto->setCategoria($_POST['categoriaProducto']);
    $producto->setImagenProducto('../images/'.$name);
    $mensaje = $fachada->registrarProducto($producto);
     header("Location: ../views/productoListar.php?".$mensaje);

}
if(isset($_POST['modificar'])){

    $file = $_FILES['ImagenProducto'];
    $name = uniqid().$file['name'];
    $path = "../images/" . basename($name);
    if (move_uploaded_file($file['tmp_name'], $path)) {
        echo "move succeed";

    } else {
        echo 'fail to upload image';
    }
    $idviejo=$_GET['idv'];
    $producto = new ProductosDto();
    //$producto->setIdProducto($_POST['codigoProducto']);
    $producto->setNombreProducto($_POST['nombreProducto']);
    $producto->setDescripcion($_POST['descriptionProducto']);
    $producto->setUnidadMedida($_POST['unidadProducto']);
    $producto->setIva($_POST['ivaProducto']);
    $producto->setValorUnitario($_POST['valorProducto']);
    $producto->setPresentacion($_POST['presentacionProducto']);
    $producto->setCategoria($_POST['categoriaProducto']);
    $producto->setImagenProducto('../images/'.$name);
    $mensaje = $fachada->actualizarProducto($producto,$idviejo);
    header("Location: ../views/productoListar.php?".$mensaje);

}

if (isset ($_GET['idproducto'])){
    $fachada = new Facade();
    $fachada->cancelarProducto($_GET['idproducto']);
    echo 'borre';
}