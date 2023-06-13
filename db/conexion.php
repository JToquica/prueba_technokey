<?php 

class Conexion {
    static public function conectar() {
        $dsn = 'pgsql:host=localhost;dbname=prueba';
        $username = 'postgres';
        $password = '1234';

        try {
            $conexion = new PDO($dsn, $username, $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo 'Error al conectarse a la base de datos: '.$e->getMessage();
        }

    }
}

?>