<?php

$user = $_POST['email'];
$pass = $_POST['password'];
$nom = $_POST['nombre'];
$ap1 = $_POST['apellido1'];
$ap2 = $_POST['apellido2'];
$tel = $_POST['telefono'];
$cp = $_POST['cp'];
$fnac = $_POST['fnaci'];



require_once '../config/db.php';

$insert = "INSERT INTO USUARIOS (NOM_USUARIO, PASS, NOMBRE, APELLIDO1, APELLIDO2, TELEFONO,CP, FNACI) VALUES ('$user', '$pass' , '$nom', '$ap1', '$ap2', '$tel', '$cp', '$fnac')";

if (mysqli_query($con, $insert)) {
    echo "usuario creado";
    sleep(3);
}

$query = "SELECT * FROM USUARIOS WHERE NOM_USUARIO = '$user' AND PASS = '$pass'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row) {
    session_start();
    $_SESSION['user'] = $user;
    header('Location: ../index.php');
}


mysqli_free_result($result);
mysqli_close($con);

