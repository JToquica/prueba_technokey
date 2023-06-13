<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Vuelos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <script src="https://kit.fontawesome.com/151e805c48.js"></script>
    <link rel="stylesheet" href="./views/css/app.css">
</head>
<body>
    <!--Logotipo  -->
    <div class="container-fluid">
        <h3 class="text-center py-3">Sistema de Vuelos</h3>
    </div>

    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">

                <?php 
                    if (isset($_GET["pagina"])) {
                        $pagina = $_GET["pagina"];

                        if (!isset($_SESSION["Logueado"]) || !$_SESSION["Logueado"]) {
                            if ($pagina == "registro") {
                                echo "<li class='nav-item'>
                                    <a href='index.php?pagina=registro' class='nav-link active'>Registro</a>
                                </li>";
                            } else {
                                echo "<li class='nav-item'>
                                    <a href='index.php?pagina=registro' class='nav-link'>Registro</a>
                                </li>";
                            }
    
                            if ($pagina == "ingreso") {
                                echo "<li class='nav-item'>
                                    <a href='index.php?pagina=ingreso' class='nav-link active'>Ingreso</a>
                                </li>";
                            } else {
                                echo "<li class='nav-item'>
                                    <a href='index.php?pagina=ingreso' class='nav-link'>Ingreso</a>
                                </li>";
                            }
                        }
                        
                        if (isset($_SESSION["Logueado"]) && $_SESSION["Logueado"]) {
                            if ($pagina == "inicio") {
                                echo "<li class='nav-item'>
                                    <a href='index.php?pagina=inicio' class='nav-link active'>Vuelos</a>
                                </li>";
                            } else {
                                echo "<li class='nav-item'>
                                    <a href='index.php?pagina=inicio' class='nav-link'>Vuelos</a>
                                </li>";
                            }
    
                            if ($pagina == "salir") {
                                echo "<li class='nav-item'>
                                    <a href='index.php?pagina=salir' class='nav-link active'>Salir</a>
                                </li>";
                            } else {
                                echo "<li class='nav-item'>
                                    <a href='index.php?pagina=salir' class='nav-link'>Salir</a>
                                </li>";
                            }
                        }
                    } else {
                        if (!isset($_SESSION["Logueado"]) || !$_SESSION["Logueado"]) {
                            echo "<li class='nav-item'>
                            <a href='index.php?pagina=registro' class='nav-link active'>Registro</a>
                            </li>";
                            echo "<li class='nav-item'>
                                <a href='index.php?pagina=ingreso' class='nav-link'>Ingreso</a>
                            </li>";
                        }
                        
                        if (isset($_SESSION["Logueado"]) && $_SESSION["Logueado"]) {
                            echo "<li class='nav-item'>
                            <a href='index.php?pagina=inicio' class='nav-link'>Inicio</a>
                            </li>";
                            echo "<li class='nav-item'>
                                <a href='index.php?pagina=salir' class='nav-link'>Salir</a>
                            </li>";
                        }
                    }
                ?>

            </ul>
        </div>
    </div>

    <div class="container py-5">
        <?php
            if(isset($_GET["pagina"])){
                $pagina = $_GET["pagina"];

                if ($pagina == "registro" ||
                    $pagina == "registro_vuelo" ||
                    $pagina == "ingreso" ||
                    $pagina == "inicio" || 
                    $pagina == "salir" ||
                    $pagina == "editar") {

                    include "pages/".$pagina.".php";
                } else {
                    include "pages/error404.php";
                }
            } else {
                include "pages/registro.php";
            }
        ?>
    </div>

    <div class="footer">
        <p class="copyrigth">Desarrollado por José Toquica</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#table-registros').DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
            });
        });
    </script>
</body>