<?php
session_start();

require('db.php');

if(isset($_POST['cod_producto']) && isset($_SESSION['user'])) {
    // Verificar si los parámetros son válidos
    $cod_producto = $_POST['cod_producto'];
    $user = $_SESSION['user'];

    // Preparar la consulta SQL con un marcador de posición
    $query = 'CALL BORRAR_PRODUCTO_CARRITO(?, ?)';
    
    // Preparar la sentencia
    $stmt = $con->prepare($query);

    // Vincular parámetros y ejecutar la consulta
    $stmt->bind_param('is', $cod_producto, $user);
    $stmt->execute();
    header('Location: index.php');
} else {
    // Manejar el caso cuando no se reciben los parámetros esperados
    echo "Error: Parámetros incorrectos";
}
