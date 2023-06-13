<div class="container col-4 p-5 bg-light">
    <h1 class="text-center">Registro</h1>
    <form method="POST">
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Nombre:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre" name="name">
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="username" class="form-label">Nombre de usuario:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="username" placeholder="Ingrese su correo" name="username">
            </div>
        </div>
        <div class="mb-3">  
            <label for="password" class="form-label">Contraseña:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" name="password">
            </div>
        </div>

        <?php
            $registro = ControladorUsuarios::ctrRegistro();

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