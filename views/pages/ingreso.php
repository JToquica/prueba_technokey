<div class="container col-4 p-5 bg-light">
    <h1 class="text-center">Ingreso</h1>
    <form method="POST">
    <div class="mb-3 mt-3">
            <label for="username" class="form-label">Nombre de usuario:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
                <input type="username" class="form-control" id="email" placeholder="Ingrese su correo" name="username">
            </div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" name="password">
            </div>

        <?php 
            $ingreso = new ControladorUsuarios();
            $ingreso->ctrIngreso();
        ?>

        </div>
            <button type="submit" class="btn btn-primary d-inline w-100">Ingresar</button>
        </div>
    </form>
</div>
