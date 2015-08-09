<?php

class Conexion {
    public static function getConexion() {
        $conn = null;

        try {
            $conn = new PDO("mysql:host=localhost;unix_socket=/var/lib/mysqld/mysqld.sock;dbname=SIGCO", "root", "luisCA91*");
            $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo 'ERROR: ' . $ex->getMessage();
        }
        return $conn;
    }

}