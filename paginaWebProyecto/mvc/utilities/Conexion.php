<?php

class Conexion
{

    public static function getConexion(){
        $conn = null;

        try {
<<<<<<< HEAD
            $conn = new PDO("mysql:host=localhost;unix_socket=/var/lib/mysqld/mysqld.sock;dbname=SIGCO", "root", "luisCA91*");
=======
            $conn = new PDO("mysql:host=localhost;dbname=sigco", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
>>>>>>> origin/master
            $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex  ){
            echo 'ERROR: '.$ex->getMessage();
        }
        return $conn;
    }

}