<?php


require 'db.php';

$CORREO = 'victor@gmail.com';
$DIRECCION_AUX  = $_POST['direccion'];
$CIUDAD_AUX  = $_POST['ciudad'];
$PROVINCIA_AUX  = $_POST['provincia'];
$PAIS_AUX  = $_POST['pais'];
$CP_AUX  = $_POST['cp'];

$query = "CALL INSERTAR_DIRECCION('$CORREO','$DIRECCION_AUX','$CIUDAD_AUX','$PROVINCIA_AUX ','$PAIS_AUX','$CP_AUX')";

$result = mysqli_query($con, $query);

header('Location: checkout.php');
