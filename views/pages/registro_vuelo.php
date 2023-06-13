<div class="container col-4 p-5 bg-light">
    <h1 class="text-center">Registro Vuelo</h1>
    <form method="POST">
        <div class="mb-3 mt-3">
            <label for="fecha_vuelo" class="form-label">Fecha Vuelo:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                <input type="date" class="form-control" id="fecha_vuelo" placeholder="Seleccionar Fecha" name="fecha_vuelo">
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="hora_salida" class="form-label">Hora Salida:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-clock"></i></span>
                <input type="time" class="form-control" id="hora_salida" placeholder="Seleccionar Hora de Salida" name="hora_salida">
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="hora_llegada" class="form-label">Hora LLegada:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-clock"></i></span>
                <input type="time" class="form-control" id="hora_llegada" placeholder="Seleccionar Hora de LLegada" name="hora_llegada">
            </div>
        </div>
        <div class="mb-3">  
            <label for="tipo_trayecto" class="form-label">Tipo Trayecto:</label>
            <select class="form-select" id="tipo_trayecto" name="tipo_trayecto">
                <option selected value="directo">Directo</option>
                <option value="escalas">Escalas</option>
            </select>
        </div>

        <div class="mb-3 mt-3">
            <label for="costo" class="form-label">Costo:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-clock"></i></span>
                <input type="number" min="0" class="form-control" id="costo" placeholder="Ingrese el costo" name="costo">
            </div>
        </div>

        <?php
            $registro = ControladorVuelos::ctrRegistro();

            if ($registro) {
                echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>";

                echo "<div class='alert alert-success'>
                    <strong>Registro Exitoso!</strong>
                </div>";
            }
        ?>

        <div>
            <button type="submit" class="btn btn-primary d-inline w-100">Registrarse</button>
        </div>
    </form>
</div>