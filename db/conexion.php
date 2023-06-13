<?php 

class Conexion {
    static public function conectar() {
        $dsn = 'pgsql:host=localhost;dbname=prueba';
        $username = 'postgres';
        $password = '1234';

        $conexion = new PDO($dsn, $username, $password);
        $conexion -> exec("set names utf8");
        return $conexion;
    }
}

?>