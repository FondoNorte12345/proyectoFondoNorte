 <?php

$user = $_POST['user'];
$pass = $_POST['pass'];



require '../config/db.php';

$query = "SELECT * FROM USUARIOS WHERE CORREO = '$user' AND PASS = '$pass'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row) {
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['pass'] = $pass;
    header('Location: ../main.php');
} else {
    ?>
    <?php
    include('../login.php');
    ?>
    <h1>Usuario o contraseña incorrectos</h1>
    <?php
}






