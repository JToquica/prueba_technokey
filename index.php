<?php 
require_once "controllers/plantilla.controlador.php";

require_once "controllers/usuarios.controlador.php";
require_once "models/usuarios.modelo.php";

require_once "controllers/vuelos.controlador.php";
require_once "models/vuelos.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
?>