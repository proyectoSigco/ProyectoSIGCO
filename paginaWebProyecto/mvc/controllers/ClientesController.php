<?php

require_once '../models/ClientesDao.php';
require_once '../models/ClientesDto.php';
require_once '../utilities/Conexion.php';

$accion = $_GET['controlar'];

switch ($accion){
    case 'crear':

        $clienteDto = new ClientesDto();
        $clienteDto->setIdCliente($_POST['IdCliente']);
        $clienteDto->setRazonSocial($_POST['RazonSocial']);
        $clienteDto->setDireccionCliente($_POST['Direccion']);
        $clienteDto->setTelefonoCliente($_POST['TelFijo']);
        $clienteDto->setEmailCliente($_POST['Email']);
        $clienteDto->setCiudadCliente($_POST['Lugar']);
        $clienteDto->setTipoCliente($_POST['TipoCliente']);
        $clienteDto->setActividadCliente($_POST['ActividadCliente']);
        $clienteDto->setClasificacionCliente($_POST['Clasificacion']);
        $clienteDto->setNombreContacto($_POST['NombresContacto']);
        $clienteDto->setApellidoContacto($_POST['ApellidosContacto']);
        $clienteDto->setTelefonoContacto($_POST['CelularContacto']);
        $clienteDto->setEmailContacto($_POST['EmailContacto']);

        $clienteDao = new ClientesDao();

        $mensaje = $clienteDao->registrarCliente($clienteDto);

        header("Location: ../views/buscarClientes.php?mensaje=".$mensaje);

        break;
    case 'eliminar':

        $clienteDao = new ClientesDao();

        $mensaje = $clienteDao->eliminarCliente($_GET['id']);

        header("Location: ../views/buscarClientes.php?mensaje=".$mensaje);

        break;
    case 'modificar':

        $clienteDao = new ClientesDao();

        $clienteDto = new ClientesDto();
        $clienteDto->setIdClienteNew($_POST['IdCliente']);
        $clienteDto->setIdCliente($_GET['id']);
        $clienteDto->setRazonSocial($_POST['RazonSocial']);
        $clienteDto->setDireccionCliente($_POST['Direccion']);
        $clienteDto->setTelefonoCliente($_POST['TelFijo']);
        $clienteDto->setEmailCliente($_POST['Email']);
        $clienteDto->setCiudadCliente($_POST['Lugar']);
        $clienteDto->setTipoCliente($_POST['TipoCliente']);
        $clienteDto->setActividadCliente($_POST['ActividadCliente']);
        $clienteDto->setClasificacionCliente($_POST['Clasificacion']);
        $clienteDto->setNombreContacto($_POST['NombresContacto']);
        $clienteDto->setApellidoContacto($_POST['ApellidosContacto']);
        $clienteDto->setTelefonoContacto($_POST['CelularContacto']);
        $clienteDto->setEmailContacto($_POST['EmailContacto']);

        $mensaje = $clienteDao->modificarCliente($clienteDto);

        header("Location: ../views/buscarClientes.php?mensaje=".$mensaje);

        break;

    case 'buscar':

        $clienteDao = new ClientesDao();

        $criterio= $_POST['criterio'];
        $busqueda= $_POST['busqueda'];
        $comobuscar= $_POST['comobuscar'];

        $mensaje=$clienteDao->buscarCliente($criterio, $busqueda, $comobuscar);

        session_start();
        $_SESSION['consulta'] = $mensaje;


        if($mensaje==null){
            header("Location: ../views/buscarClientes.php?encontrados=0&criterio=".$criterio."&busqueda=".$busqueda."");
        }else{
            header("Location: ../views/buscarClientes.php?encontrados=1");
        }


        break;


    default:
        echo 'Valor incorrecto enviado por el método get a la variable controlar';

}

/**

if (isset($_POST['guardar'])){

}
elseif ($_GET['id']!=null&&$_POST['modificar']=null){

}
elseif ($_POST['modificar']!=null&&$_GET['id']!=null){

}

 **/
