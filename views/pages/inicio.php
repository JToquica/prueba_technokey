<?php

if (!isset($_SESSION["Logueado"])) {
    echo "<script>window.location = 'index.php?pagina=ingreso';</script>";
    return;
} else {
    if(!$_SESSION["Logueado"]) {
        echo "<script>window.location = 'index.php?pagina=ingreso';</script>";
        return;
    }
}

$vuelos = ControladorVuelos::ctrObtenerRegistros(null, null);

?>

<a class="btn btn-primary mb-3" href="index.php?pagina=registro_vuelo">
    Agregar Nuevo
</a>

<div class="table-responsive">
    <table id='table-registros' class='table table-striped display responsive nowrap' style='width:100%'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha Vuelo</th>
                <th>Hora Salida</th>
                <th>Hora LLegada</th>
                <th>Tipo Trayecto</th>
                <th>Costo</th>
                <th>Duracion Trayecto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vuelos as $key => $value): ?>
                <tr>
                    <td><?php echo $value["id"] ?></td>
                    <td><?php echo $value["fecha_vuelo"]; ?></td>
                    <td><?php echo $value["hora_salida"]; ?></td>
                    <td><?php echo $value["hora_llegada"]; ?></td>
                    <td><?php echo $value["tipo_trayecto"]; ?></td> 
                    <td><?php echo $value["costo"]; ?></td>
                    <td><?php echo $value["duracion_trayecto"]; ?></td>
                    <td>
                        <div>
                            <div class="p-1">
                            <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning text-white">Editar</a>
                            </div>
                            
                            <form method=post>
                                <input type="hidden" name="id" value="<?php echo $value["id"]; ?>">
                                <?php 
                                    $eliminar = new ControladorVuelos();
                                    $eliminar->ctrEliminar();
                                ?>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>