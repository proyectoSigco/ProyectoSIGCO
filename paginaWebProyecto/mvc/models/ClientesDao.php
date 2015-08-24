<?php

class ClientesDao
{

    public function registrarCliente(ClientesDto $clienteDto){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try{
            $query = $cnn->prepare("INSERT INTO clientes VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $query->bindParam(1, $clienteDto->getIdCliente());
            $query->bindParam(2, $clienteDto->getRazonSocial());
            $query->bindParam(3, $clienteDto->getDireccionCliente());
            $query->bindParam(4, $clienteDto->getTelefonoCliente());
            $query->bindParam(5, $clienteDto->getEmailCliente());
            $query->bindParam(6, $clienteDto->getNombreContacto());
            $query->bindParam(7, $clienteDto->getApellidoContacto());
            $query->bindParam(8, $clienteDto->getTelefonoContacto());
            $query->bindParam(9, $clienteDto->getEmailContacto());
            $query->bindParam(10, $clienteDto->getTipoCliente());
            $query->bindParam(11, $clienteDto->getActividadCliente());
            $query->bindParam(12, $clienteDto->getClasificacionCliente());
            $query->bindParam(13, $clienteDto->getCiudadCliente());

            $query->execute();
            $mensaje="Cliente registrado con éxito en la base de datos.&error=0";

        } catch (Exception $ex){
            $mensaje = '&detalleerror='.$ex->getMessage().'&error=1&mensaje=El cliente NO ha sido registrado en la base de datos.';
        }

        $cnn = null;
        return $mensaje;
    }

    public function eliminarCliente($idCliente){
        $cnn = Conexion::getConexion();
        $mensaje = "";

        try{
            $query = $cnn->prepare("DELETE FROM Clientes WHERE IdCliente = ?");
            $query->bindParam(1, $idCliente);
            $query->execute();
            $mensaje = "Cliente completamente eliminado de la base de datos.&error=0";
        } catch (Exception $ex){
            $mensaje = '&detalleerror='.$ex->getMessage().'&error=1';
        }
        return $mensaje;
    }

    public function listarTodos(){
        $cnn = Conexion::getConexion();

        try{
            $listarClientes = 'Select clientes.*, ciudades.nombre from Clientes join ciudades where clientes.idciudad = ciudades.idciudad';
            $query = $cnn->prepare($listarClientes);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo '&detalleerror='.$ex->getMessage();
        }
        $cnn=null;
    }

    public function obtenerCliente($idCliente){
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare('SELECT * FROM Clientes WHERE IdCliente = ?');
            $query->bindParam(1, $idCliente);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo '&detalleerror='.$ex->getMessage();
        }
        $cnn=null;
    }

    public function buscarCliente($criterio, $busqueda, $comobuscar){
        $cnn = Conexion::getConexion();
        switch ($comobuscar) {
            case 1:

                if($criterio=='Lugar'){
                    try{
                        $query = $cnn->prepare('SELECT clientes.*, ciudades.Nombre FROM clientes JOIN ciudades ON clientes.IdCiudad = ciudades.IdCiudad and ciudades.Nombre = ?');

                        $query->bindParam(1, $busqueda);
                        $query->execute();
                        return $query->fetchAll();
                    } catch (Exception $ex){
                        echo '&detalleerror='.$ex->getMessage().'&encontrados=0';
                    }
                }else{
                    try{
                        $query = $cnn->prepare('SELECT Clientes.*, ciudades.Nombre FROM clientes JOIN ciudades ON clientes.'.$criterio.' = ? AND ciudades.IdCiudad = clientes.idciudad');

                        $query->bindParam(1, $busqueda);
                        $query->execute();
                        return $query->fetchAll();
                    } catch (Exception $ex){
                        echo '&detalleerror='.$ex->getMessage().'&encontrados=0';
                    }
                }

                break;
            case 2;

                if($criterio=='Lugar'){
                    try{
                        $query = $cnn->prepare('SELECT clientes.*, ciudades.Nombre FROM clientes JOIN ciudades ON clientes.IdCiudad = ciudades.IdCiudad and ciudades.Nombre like "%'.$busqueda.'%"');

                        $query->bindParam(1, $busqueda);
                        $query->execute();
                        return $query->fetchAll();
                    } catch (Exception $ex){
                        echo '&detalleerror='.$ex->getMessage().'&encontrados=0';
                    }
                }else{
                    try{
                        $query = $cnn->prepare('SELECT Clientes.*, ciudades.Nombre FROM clientes JOIN ciudades ON clientes.'.$criterio.' like "%'.$busqueda.'%" AND ciudades.IdCiudad = clientes.idciudad');

                        $query->bindParam(1, $busqueda);
                        $query->execute();
                        return $query->fetchAll();
                    } catch (Exception $ex){
                        echo '&detalleerror='.$ex->getMessage().'&encontrados=0';
                    }
                }

                break;
            default:
                echo 'Opción inválida para Cómo búscar';
        }
        $cnn=null;
    }

    public function modificarCliente(ClientesDto $clienteDto){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try{
            $query = $cnn->prepare("UPDATE Clientes SET IdCliente=?, RazonSocial=?, Direccion=?, TelFijo=?, Email=?, NombresContacto=?, ApellidosContacto=?, CelularContacto=?, EmailContacto=?, IdTipo=?, IdActividad=?, IdClasificacion=?, IdCiudad=? WHERE IdCliente=?");

            $query->bindParam(1, $clienteDto->getIdClienteNew());
            $query->bindParam(2, $clienteDto->getRazonSocial());
            $query->bindParam(3, $clienteDto->getDireccionCliente());
            $query->bindParam(4, $clienteDto->getTelefonoCliente());
            $query->bindParam(5, $clienteDto->getEmailCliente());
            $query->bindParam(6, $clienteDto->getNombreContacto());
            $query->bindParam(7, $clienteDto->getApellidoContacto());
            $query->bindParam(8, $clienteDto->getTelefonoContacto());
            $query->bindParam(9, $clienteDto->getEmailContacto());
            $query->bindParam(10, $clienteDto->getTipoCliente());
            $query->bindParam(11, $clienteDto->getActividadCliente());
            $query->bindParam(12, $clienteDto->getClasificacionCliente());
            $query->bindParam(13, $clienteDto->getCiudadCliente());
            $query->bindParam(14, $clienteDto->getIdCliente());

            $query->execute();
            $mensaje="Cliente actualizado con éxito.&error=0";

        } catch (Exception $ex){
            $mensaje = '&detalleerror='.$ex->getMessage().'&error=1&mensaje=El cliente NO ha sido actualizado en la base de datos.';
        }

        $cnn = null;
        return $mensaje;
    }





}