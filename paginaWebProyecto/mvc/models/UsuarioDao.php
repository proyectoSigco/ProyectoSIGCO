<?php


class UsuarioDao {
    public function registrarUsuario(UsuarioDto $dto,PDO $cnn) {

        $mensaje = "";
        try {
            $query = $cnn->prepare("INSERT INTO Usuarios  VALUES(?,?,?,?,?,?,?,?)");
            $query->bindParam(1,$dto->getIdUsuario());
            $query->bindParam(2,$dto->getNombres());
            $query->bindParam(3,$dto->getApellidos());
            $query->bindParam(4,$dto->getEmpleo());
            $query->bindParam(5,$dto->getEmail());
            $query->bindParam(6,md5($dto->getContrasenia()));
            $query->bindParam(7,$dto->getEstado());
            $query->bindParam(8,$dto->getRutaimagen());
            $query->execute();
            $mensaje="se ingreso exitosamente";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn =null;
        return $mensaje;
    }
    public function modificarUsuario(UsuarioDto $obj,$user,PDO $cnn) {

        $mensaje = "";
        try {
            $query = $cnn->prepare("UPDATE  Usuarios SET IdUsuario=?,Nombres=?,Apellidos=?,Empleo=?,Email=?,Contrasenia=?,Estado=?,rutaImagen=? where Idusuario=?");
            $query->bindParam(1, $obj->getIdUsuario());
            $query->bindParam(2, $obj->getNombres());
            $query->bindParam(3, $obj->getApellidos());
            $query->bindParam(4, $obj->getEmpleo());
            $query->bindParam(5, $obj->getEmail());
            $query->bindParam(6, md5($obj->getContrasenia()));
            $query->bindParam(7, $obj->getEstado());
            $query->bindParam(8, $obj->getRutaimagen());
            $query->bindParam(9, $user);
            $query->execute();
            $mensaje = true;
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn=null;
        return $mensaje;
    }
    public function buscarUsuario($id,PDO $cnn) {

        try {
            $query = $cnn->prepare('SELECT * FROM Usuarios WHERE IdUsuario=?');
            $query->bindParam(1, $id);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn=null;
    }
    public function cancelarUsuario($id,PDO $cnn) {

        $mensaje = "";
        try {
            $query = $cnn->prepare("Update Usuarios set Estado=0 WHERE IdUsuario=?");
            $query->bindParam(1,$id);
            $query->execute();
            $mensaje = true;
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        return $mensaje;
    }
    public function listarUsuarios(PDO $cnn) {

        try {
            $listarGesion = 'Select * from Usuarios';
            $query = $cnn->prepare($listarGesion);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
    }

    public function login($user,$pass,PDO $cnn){
        try {
            $query = $cnn->prepare('SELECT count(*) as "existe" FROM Usuarios WHERE IdUsuario=? AND Contrasenia=?');
            $query->bindParam(1, $user);
            $query->bindParam(2, md5($pass));
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn=null;
    }

    public function rol($user,PDO $cnn){
        try {
            $query = $cnn->prepare('select Roles_IdRolUsuario as "rol" from RolesUsuarios where Usuarios_IdUsuario=?');
            $query->bindParam(1, $user);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn=null;
    }

    public function datosLogin($user,PDO $cnn){
        try {
            $query = $cnn->prepare('SELECT IdUsuario,Estado FROM Usuarios WHERE IdUsuario=?');
            $query->bindParam(1, $user);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn=null;
    }

    public function Menu($rol,PDO $cnn){
        try {
            $query = $cnn->prepare('select Url as "url",NombrePagina as "web",Clasificacion as "padre" from permisos join RolesPermisos on IdPermisos=Permisos_IdPermisos join Roles on IdRolUsuario=Roles_IdRolUsuario where Roles.IdRolUsuario=? and Clasificacion="Clientes"');
            $query->bindParam(1, $rol);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn=null;
    }




}