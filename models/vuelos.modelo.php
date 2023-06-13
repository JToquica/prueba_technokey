<?php 
require_once "./db/conexion.php";

class ModeloVuelos {
    /* Registro */
    static public function mdlRegistro($tabla, $datos) {
        $query = "INSERT INTO $tabla(fecha_vuelo, hora_salida, hora_llegada, duracion_trayecto, tipo_trayecto, costo) VALUES (:fecha_vuelo, :hora_salida, :hora_llegada, :duracion_trayecto, :tipo_trayecto, :costo)";

        $stmt = Conexion::conectar()->prepare($query);
        $stmt->bindParam(":fecha_vuelo", $datos["fecha_vuelo"], PDO::PARAM_STR);
        $stmt->bindParam(":hora_salida", $datos["hora_salida"], PDO::PARAM_STR);
        $stmt->bindParam(":hora_llegada", $datos["hora_llegada"], PDO::PARAM_STR);
        $stmt->bindParam(":duracion_trayecto", $datos["duracion_trayecto"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_trayecto", $datos["tipo_trayecto"], PDO::PARAM_STR);
        $stmt->bindParam(":costo", $datos["costo"], PDO::PARAM_INT);
        
        if ($stmt->execute()) { 
            return true;
        } else {
            print_r(Conexion::conectar()->errorInfo());
        };

        $stmt->close();
        $stmt = null;
    }

    static public function mdlObtenerRegistros($tabla, $item, $valor) {

        if ($item == null && $valor == null){
            $query = "SELECT * FROM $tabla ORDER BY id DESC";
            $stmt = Conexion::conectar()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $query = "SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC";
            $stmt = Conexion::conectar()->prepare($query);
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }

        $stmt->close();
        $stmt = null;
    }

    static public function mdlActualizar($tabla, $datos) {
        $query = "UPDATE $tabla SET fecha_vuelo = :fecha_vuelo, hora_salida = :hora_salida, hora_llegada = :hora_llegada, tipo_trayecto = :tipo_trayecto, costo = :costo, duracion_trayecto = :duracion_trayecto WHERE id = :id";
        
        $stmt = Conexion::conectar()->prepare($query);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        $stmt->bindParam(":fecha_vuelo", $datos["fecha_vuelo"], PDO::PARAM_STR);
        $stmt->bindParam(":hora_salida", $datos["hora_salida"], PDO::PARAM_STR);
        $stmt->bindParam(":hora_llegada", $datos["hora_llegada"], PDO::PARAM_STR);
        $stmt->bindParam(":duracion_trayecto", $datos["duracion_trayecto"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_trayecto", $datos["tipo_trayecto"], PDO::PARAM_STR);
        $stmt->bindParam(":costo", $datos["costo"], PDO::PARAM_INT); 
        
        if ($stmt->execute()) { 
            return true;
        } else {
            print_r(Conexion::conectar()->errorInfo());
        };

        $stmt->close();
        $stmt = null;
    }

    static public function mdlEliminar($tabla, $id) {

        $query = "DELETE FROM $tabla WHERE id = :id";
        
        $stmt = Conexion::conectar()->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        
        if ($stmt->execute()) { 
            return true;
        } else {
            print_r(Conexion::conectar()->errorInfo());
        };

        $stmt->close();
        $stmt = null;
    }

}


?>