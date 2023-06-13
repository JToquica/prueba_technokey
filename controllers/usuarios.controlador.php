<?php 

class ControladorUsuarios {

    /* Registro */
    static public function ctrRegistro() {

        if(isset($_POST["name"])) {
            $tabla = "usuarios";
            $datos = array("name" => $_POST["name"],
                            "username" => $_POST["username"],
                            "password" => $_POST["password"]);

            $respuesta = ModeloUsuarios::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }

    /* Obtener usuarios */
    static public function ctrObtenerUsuarios($item, $valor) {
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlObtenerUsuarios($tabla, $item, $valor);

        return $respuesta;
    }


    public function ctrIngreso() {
        if(isset($_POST["username"])) {

            $tabla = "usuarios";
            $item = "username";
            $valor = $_POST["username"];

            $respuesta = ModeloUsuarios::mdlObtenerUsuarios($tabla, $item, $valor);

            if($respuesta["username"] == $_POST["username"] && $respuesta["password"] == $_POST["password"]) {
                
                $_SESSION["Logueado"] = true;

                echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState( null, null, window.location.href );
                    }

                    window.location = 'index.php?pagina=inicio';
                </script>";

            } else {
                echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>";

                echo "<div class='alert alert-danger'>
                    <strong>Error al ingresar, revise sus credenciales</strong>
                </div>";
            }
        }
    }

}

?>