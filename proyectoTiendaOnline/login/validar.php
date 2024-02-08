 <?php

$user = $_POST['user'];
$pass = $_POST['pass'];



include 'db.php';

$query = "SELECT * FROM users WHERE nombre = '$user' AND pass = '$pass'";
$result = mysqli_query($conection, $query);
$row = mysqli_fetch_array($result);
if ($row) {
    session_start();
    $_SESSION['user'] = $user;
    header('Location: home.php');
} else {
    ?>
    <?php
    include('index.php');
    ?>
    <h1>Usuario o contraseña incorrectos</h1>
    <?php
}

mysqli_free_result($result);
mysqli_close($conection);