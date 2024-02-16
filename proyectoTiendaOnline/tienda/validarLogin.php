<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

require 'db.php';

$query = "SELECT VALIDAR_USUARIO('$user', '$pass') AS VALIDO";
$result = mysqli_query($con, $query);

$row = mysqli_fetch_array($result);

if ($row['VALIDO'] == 1) {
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['pass'] = $pass;
    header('Location: index.php');
}else {
    ?>
    <?php
    echo '<h1>Usuario o contraseña incorrectos</h1>';
    require('login.php');
    ?>
    <?php
}

?>