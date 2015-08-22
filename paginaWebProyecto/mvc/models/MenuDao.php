<?php

/**
 * Created by PhpStorm.
 * User: iStam
 * Date: 19/08/15
 * Time: 9:21 PM
 */
class MenuDao
{
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