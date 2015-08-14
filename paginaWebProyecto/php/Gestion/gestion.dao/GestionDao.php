<?php


class GestionDao {

    private $mensaje =" ";
    public function registrarGestion(GestionDto $gestionDto,PDO $cnn) {


        try {
            $query = $cnn->prepare("INSERT INTO gestion (Estado,Tipo,TemaProducto,Asistentes,Observaciones,Lugar,Fecha,Empresas_IdEmpresa,Usuarios_IdUsuario)VALUES ('Activo',?,?,?,?,?,?,90056432,1)");
            $query->bindParam(1, $gestionDto->getTipoVisita());
            $query->bindParam(2, $gestionDto->getTemaProducto());
            $query->bindParam(3, $gestionDto->getAsistentes());
            $query->bindParam(4, $gestionDto->getObservaciones());
            $query->bindParam(5, $gestionDto->getLugar());
            $query->bindParam(6, $gestionDto->getFechaVisita());
            $query->execute();
            $this->mensaje="Visita Registrada";
        } catch (Exception $ex) {
            $this->mensaje = $ex->getMessage();
        }
            $cnn =null;
            return $this->mensaje;
    }
    public function modificarGestion(GestionDto $gestionDto,PDO $cnn) {

        $mensaje = "";
        try {
            $query = $cnn->prepare("UPDATE  gestion SET IdUsuario=?,IdCliente=?,TemaProducto=?,Asistentes=?,Observaciones=?,Lugar=?,Fecha=? where IdGestion=?");

            $query->bindParam(1, $gestionDto->getIdUsuario());
            $query->bindParam(2, $gestionDto->getIdCliente());
            $query->bindParam(3, $gestionDto->getEstado());
            $query->bindParam(4, $gestionDto->getTemaProducto());
            $query->bindParam(5, $gestionDto->getAsistentes());
            $query->bindParam(6, $gestionDto->getObservaciones());
            $query->bindParam(7, $gestionDto->getLugar());
            $query->bindParam(8, $gestionDto->getFechaVisita());
            $query->bindParam(9, $gestionDto->getIdGestion());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn=null;
        return $mensaje;
    }
    public function buscarGestion($idGestion,PDO $cnn) {

        try {
            $query = $cnn->prepare('SELECT * FROM Gestion WHERE IdGestion=?');
            $query->bindParam(1, $idGestion);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn=null;
    }
    public function cancelarGestion($idGestion,PDO $cnn) {

        $mensaje = "";
        $cancelar='Cancelado';
        try {
            $query = $cnn->prepare("UPDATE Gestion SET estado=?  WHERE IdGestion= ?");
            $query->bindParam(1,$cancelar);
            $query->bindParam(2, $idGestion);

            $query->execute();
            $mensaje = "Registro Eliminado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        return $mensaje;
    }
    public function listarGestion(PDO $cnn) {

    try {
            $listarGesion = 'Select * from gestion';
            $query = $cnn->prepare($listarGesion);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
    }

}