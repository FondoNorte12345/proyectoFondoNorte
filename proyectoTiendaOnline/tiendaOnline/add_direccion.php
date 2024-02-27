<?php


require_once 'db.php';

if (!isset($_SESSION)) {
    session_start();
    $user = $_SESSION['user'];

    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $provincia = $_POST['provincia'];
    $pais = $_POST['pais'];
    $cp = $_POST['cp'];

    $query = "CALL INSERTAR_DIRECCION`( " . $user . ", '" . $direccion . "', '" . $ciudad . "', '" . $provincia . "', '" . $pais . "', '" . $cp . "')";

    $result = $con->query($query);

    if ($result) {
        header("Location: confirmacioncompra.php");
    }


   
} else {
    echo "no hay sesion";
}



