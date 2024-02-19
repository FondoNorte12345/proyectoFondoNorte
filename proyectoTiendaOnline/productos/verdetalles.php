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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <style>
    #contenedor {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #producto {

      display: flex;
      width: 1500px;
      height: 500px;
      margin: 20px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: rgb(255, 245, 240);



    }

    #imagen {
      background-color: green;
      width: 400px;
      margin-right: 20px;
      border-radius: 4px;
    }

    #infoproducto {
      text-align: left;
      flex-grow: 1;
      font-size: 2em;
      padding: 4%;
    }
  </style>
</head>

<body>
  <?php require('../nav/nav.php') ?>
  <div id="contenedor">
    <div id="producto">
      <div id="imagen"></div>

      <div id="infoproducto">
        <p>Nombre:</p>
        <p>Descripción:</p>
        <p>Categoría:</p>
        <p>Precio:</p>
        <br>
        <button class="btn btn-lg btn-primary" type="button" style="width: 800px;">Añadir al carrito</button>
      </div>
    </div>
  </div>



</body>

</html>