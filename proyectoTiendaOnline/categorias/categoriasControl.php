<?php

/* tengo que sacar las categorias da esta tabla*/

require('config/db.php');


$query = 'SELECT * FROM CATEGORIAS;';
$consulta = $con->query($query);

/* convertir el resultado a un JSON */
$filasCategoria = array();

while ($row = $consulta->fetch_assoc()) {
    $filasCategoria[] = $row;
}


