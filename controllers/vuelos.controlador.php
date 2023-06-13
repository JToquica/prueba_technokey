<?php 

class ControladorVuelos {

    /* Registro */
    static public function ctrRegistro() {

        if(isset($_POST["fecha_vuelo"])) {
            $tabla = "vuelos";

            $horaSalida = strtotime($_POST["hora_salida"]);
            $horaLlegada = strtotime($_POST["hora_llegada"]);

            // Calcular la duración del trayecto en segundos
            $duracionSegundos = $horaLlegada - $horaSalida;

            // Convertir la duración a formato de horas, minutos y segundos
            $duracionTrayecto = gmdate('H:i:s', $duracionSegundos);

            $datos = array("fecha_vuelo" => $_POST["fecha_vuelo"],
                            "hora_salida" => $_POST["hora_salida"],
                            "hora_llegada" => $_POST["hora_llegada"],
                            "duracion_trayecto" => $duracionTrayecto,
                            "tipo_trayecto" => $_POST["tipo_trayecto"],
                            "costo" => $_POST["costo"]
                        );

            $respuesta = ModeloVuelos::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }

    /* Obtener Registros */
    static public function ctrObtenerRegistros($item, $valor) {
        $tabla = "vuelos";
        $respuesta = ModeloVuelos::mdlObtenerRegistros($tabla, $item, $valor);

        return $respuesta;
    }


    static public function ctrActualizarRegistro() {

        if(isset($_POST["fecha_vuelo"])) {
            $tabla = "vuelos";

            $horaSalida = strtotime($_POST["hora_salida"]);
            $horaLlegada = strtotime($_POST["hora_llegada"]);

            // Calcular la duración del trayecto en segundos
            $duracionSegundos = $horaLlegada - $horaSalida;

            // Convertir la duración a formato de horas, minutos y segundos
            $duracionTrayecto = gmdate('H:i:s', $duracionSegundos);

            $datos = array("id" => $_POST["id"],
                            "fecha_vuelo" => $_POST["fecha_vuelo"],
                            "hora_salida" => $_POST["hora_salida"],
                            "hora_llegada" => $_POST["hora_llegada"],
                            "duracion_trayecto" => $duracionTrayecto,
                            "tipo_trayecto" => $_POST["tipo_trayecto"],
                            "costo" => $_POST["costo"]
                        );

            return $respuesta = ModeloVuelos::mdlActualizar($tabla, $datos);
        }
    }

    public function ctrEliminar() {
        if(isset($_POST["id"])) {
            
            $tabla = "vuelos";
            $id = $_POST["id"];

            $respuesta = ModeloVuelos::mdlEliminar($tabla, $id);

            if ($respuesta) {
                echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState( null, null, window.location.href );
                    }

                    window.location = 'index.php?pagina=inicio';
                </script>";
            }
        }
    }

}

?>