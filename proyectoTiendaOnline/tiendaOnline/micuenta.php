<?php
session_start();
$user = $_SESSION['user'];

if (!isset($user)) {
    header('Location: login.php');
}

require('db.php');

$query = 'CALL DATOSUSUARIOS("' . $user . '");';

$consulta = $con->query($query);

$datosUsuario = array();



while ($row = $consulta->fetch_assoc()) {
    $datosUsuario[] = $row;
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo Norte Componetes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            background-color: #f8f9fa;
        }

        main {
            height: 200vh;
        }
    </style>
</head>

<body>
    <header>
        <?php require('navbar.php'); ?>
    </header>
    <main>
        <div class="container">
            <h1>Mi cuenta</h1>
            <div class="row">
                <div class="col-2" id="nombre_datos">
                </div>
                <div class="col-8" id="datos_usuarios">
                    <h3>Datos del usuario</h3>
                    <table class="table">
                        <tbody id="tabla_datos">
                            <!-- Aquí se mostrarán los datos del usuario -->
                        </tbody>
                    </table>
                    <button id="boton_modificar" class="btn btn-primary">Modificar datos</button>
                </div>
                <div class="col-2">
                </div>
            </div>
        </div>
    </main>


</body>
<script>

    let user = <?= json_encode($datosUsuario) ?>;


    let tablaDatos = document.getElementById("tabla_datos");
    let botonModificar = document.getElementById("boton_modificar");

    user.forEach(function (item) {
        Object.keys(item).forEach(function (key) {
            let fila = document.createElement("tr");
            let celdaNombre = document.createElement("td");
            let celdaValor = document.createElement("td");
            if (key == "PASS") {
                let pass =document.createElement("input");
                pass.type = "password";
                celdaValor.appendChild(pass).value = item[key];
            }
            let modificar = document.createElement("input");
            modificar.type = "button";
            modificar.value = "modificar";
            modificar.className = "btn btn-primary";

            celdaNombre.textContent = key;
            celdaValor.textContent = item[key];

            fila.appendChild(celdaNombre);
            fila.appendChild(celdaValor);
            if (key == "TELEFONO" || key == "PASS") {
                fila.appendChild(modificar);  
            }
            tablaDatos.appendChild(fila);
        });
    });

    // Agregar evento click al botón Modificar para redirigir a la página de modificación de datos
</script>


</script>

</html>