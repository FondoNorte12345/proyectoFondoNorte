<?php

require('db.php');

if (!isset($_GET['codigo'])) {
    echo "Error: Parámetros incorrectos";
    exit;
}
function obtenerDetallesProducto($codigoProducto) {
   

    require('db.php');
    
    $query = 'CALL DETPRODUCTO(' . $codigoProducto . ');';

    $result = $con->query($query);

    $filasproducto = array();

    while ($row = $result->fetch_assoc()) {
        $filasproducto[] = $row;

    }

    return $filasproducto;
}

$detalles = obtenerDetallesProducto($_GET['codigo']);

echo json_encode($detalles);
