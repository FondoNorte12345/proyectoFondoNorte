<?php
session_start();

require('db.php');

// Verificar si se reciben los parámetros esperados
if(isset($_POST['cod_producto']) && isset($_SESSION['user'])) {
    // Preparar la consulta SQL con un marcador de posición
    $query = 'CALL INSERTAR_PRODUCTO_CARRO(?, ?)';
    

    // Preparar la sentencia
    $stmt = $con->prepare($query);

    // Vincular parámetros y ejecutar la consulta
    $stmt->bind_param('is', $_POST['cod_producto'], $_SESSION['user']);
    $stmt->execute();

    // Cerrar la sentencia
    $stmt->close();

    header('Location: carrito.php');
} else {
    // Manejar el caso cuando no se reciben los parámetros esperados
    echo "Error: Parámetros incorrectos";
}


