

<?php


require_once 'db.php';

require_once 'listar_metodo_pagos.php';

require_once 'listar_direccion.php';



?>





<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo Norte Componetes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</head>

<body>


    <h1>Mi cesta </h1>
    <!-- producto en la cesta -->
    <div class="listado-productos-cesta">
        <a href="#"
            class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
            <svg class="bi pe-none me-2" width="30" height="24">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-5 fw-semibold">${nombreProducto} <i class="bi bi-${cantidad}-circle"></i></span><button
                type="button" class="btn" aria-label="Close" onclick="borrar(${codigo})">Borrar
                <i class="bi bi-trash3-fill"></i></button><button type="button" class="btn" aria-label="Close"
                onclick="borrar(${codigo})">
                <i class="bi bi-plus-lg"></i></button><button type="button" class="btn" aria-label="Close"
                onclick="borrar(${codigo})">
                <i class="bi bi-dash-lg"></i></button></span>
        </a><br>

    </div>



    <!--- direccion de invio -->
    <div>Lista direccion de invio del usuario </div>


    <!--- formulario de envio -->
    <div>Añadir direccion</div>
    <div>
        <h2>Agregar Dirección</h2>
        <form action="add_direccion.php" method="POST">
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>

            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad" required>

            <label for="provincia">Provincia:</label>
            <input type="text" id="provincia" name="provincia" required>

            <label for="pais">País:</label>
            <input type="text" id="pais" name="pais" required>

            <label for="cp">Código Postal:</label>
            <input type="text" id="cp" name="cp" required>

            <input type="submit" value="Agregar Dirección">
        </form>

        <!--- metodo de pago -->
        <div>Inserte metodo de pago </div>
        <div>Datos tarjectas bancarias</div>
        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Numero carta</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="XWQp7@example.com">
                <label for="exampleFormControlInput1" class="form-label">Fecha caducidad</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="XWQp7@example.com">
                <label for="exampleFormControlInput1" class="form-label">CVV</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="XWQp7@example.com">
                <label for="exampleFormControlInput1" class="form-label">Propietario</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" </div>
        </form>

        <!--- confirmacion de compra -->

        <div>
            <button type="button" class="btn btn-primary">Confirmar Compra</button>
        </div>

</body>

</html>