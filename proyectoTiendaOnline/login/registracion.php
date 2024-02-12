<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>login</title>
    <style>
        #formulario {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 80%;
            margin: 0 auto;
        }

        form {
            width: 100%;
        }

        input {
            width: 400px;
        }
    </style>
</head>

<body>
    <div>
        <?php require('../nav/nav.php') ?>
    </div>
    <div id="formulario">
        <form action="registrarUsuario.php" method="post">
            <fieldset>
                <legend>Registrar mi cuenta</legend>
                <!-- Email -->
                <div class="contenidor-input">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <!-- Password -->
                <div class="contenidor-input">
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off" name="password">
                </div>
                <!-- Nombre -->
                <label class="form-label mt-4" for="inputNombre">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" id="inputNombre" name="nombre">
                <!-- Primer Apellido -->
                <label class="form-label mt-4" for="inputApellido1">Primer apellido</label>
                <input type="text" class="form-control" placeholder="Primer apellido" id="inputApellido1" name="apellido1">
                <!-- Segundo Apellido -->
                <label class="form-label mt-4" for="inputApellido2">Segundo apellido</label>
                <input type="text" class="form-control" placeholder="Segundo apellido" id="inputApellido2" name="apellido2">
                <!-- Fecha de Nacimiento -->
                <label class="form-label mt-4" for="inputFechaNacimiento">Fecha de nacimiento</label>
                <input type="text" class="form-control" id="inputFechaNacimiento" name="fnaci" pattern="^(?:1[9]|[2][0])\d{2}\-(?:0[1-9]|1?[012])\-(?:3[01]|[12][0-9]|0?[1-9])" placeholder="YYYY-MM-DD">
                <!-- Teléfono -->
                <label class="form-label mt-4" for="inputTelefono">Teléfono</label>
                <input type="text" class="form-control" placeholder="Teléfono" id="inputTelefono" name="telefono">
                <!-- C.P. -->
                <label class="form-label mt-4" for="inputCP">C.P.</label>
                <input type="text" class="form-control" placeholder="C.P." id="inputCP" name="cp">
                <br>
            </fieldset>
            <button type="submit" class="btn btn-outline-primary">Registrarse</button>
        </form>
    </div>
</body>

</html>