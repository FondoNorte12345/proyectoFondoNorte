 <?php

$user = $_POST['user'];
$pass = $_POST['pass'];



include '../config/db.php';

$query = "SELECT * FROM USUARIOS WHERE NOM_USUARIO = '$user' AND PASS = '$pass'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row) {
    session_start();
    $_SESSION['user'] = $user;
    header('Location: ../index.php');
} else {
    ?>
    <?php
    include('../index.php');
    ?>
    <h1>Usuario o contraseña incorrectos</h1>
    <?php
}

mysqli_free_result($result);
mysqli_close($conection);