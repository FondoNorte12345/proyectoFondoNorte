<?php

require_once '../config/db.php';

session_start();

$user = $_SESSION['user'];


/*consultar la base de dato para sacar todos los datos del usuario*/

$query = "SELECT CORREO, NOMBRE, APELLIDO1, APELLIDO2, TELEFONO , FNACI FROM USUARIOS WHERE CORREO = '" . $user . "'";

$result = mysqli_query($con, $query);

$usuario = mysqli_fetch_array($result);



?>
<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <?php require('../nav/nav.php') ?>
    <h1>Mi cuenta</h1>
    <h2 id="saludo"></h2>
    <button>Mis Datos</button>
    <button>Mis pedidos</button>

    <table class="table table-hover">

        <tbody id="datos-tabla">
            
        </tbody>
    </table>

    <script>

        let user = <?= json_encode($user) ?>


        document.getElementById('saludo').innerHTML = 'Hola ' + user

        let datos = <?= json_encode($usuario) ?>


        document.getElementById('datos-tabla').innerHTML += ` <tr><th scope="col">Correo</th>
                <th scope="col">${datos.CORREO}</th></tr>
                <tr><th scope="col">Nombre
                <th scope="col">${datos.NOMBRE}</th></th>
                <tr><th scope="col">Apellido</th>
                <th scope="col">${datos.APELLIDO1}</th></th>
                <tr><th scope="col">Segund Apellido</th>
                <th scope="col">${datos.APELLIDO2}</th></th>
                <tr><th scope="col">Telefono</th>
                <th scope="col">${datos.TELEFONO}</th></th>
                <tr><th scope="col">Fecha nacimiento</th>
                <th scope="col">${datos.FNACI}</th></th>`
    </script>
</body>

</html>