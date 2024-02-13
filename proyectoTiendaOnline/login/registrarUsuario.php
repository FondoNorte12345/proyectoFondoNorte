<?php

$user = $_POST['email'];
$pass = $_POST['password'];
$nom = $_POST['nombre'];
$ap1 = $_POST['apellido1'];
$ap2 = $_POST['apellido2'];
$tel = $_POST['telefono'];
$fnac = $_POST['fnaci'];



require_once '../config/db.php';

$insert = "CALL VALIDACION_USUARIO($user, $pass, $nom, $ap1, $ap2, $tel, $fnac)";

mysqli_query($con, $insert);

$query = "SELECT * FROM USUARIOS WHERE CORREO = '$user' AND PASS = '$pass'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row) {
    session_start();
    $_SESSION['user'] = $user;
    header('Location: ../index.php');
}


mysqli_free_result($result);
mysqli_close($con);
