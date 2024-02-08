<?php

$user = $_POST['user'];
$pass = $_POST['pass'];



include 'db.php';

$insert = "INSERT INTO users (nombre, pass) VALUES ('$user', '$pass')";

if (mysqli_query($conection, $insert)) {
    echo "usuario creado";
    sleep(3);
}

$query = "SELECT * FROM users WHERE nombre = '$user' AND pass = '$pass'";
$result = mysqli_query($conection, $query);
$row = mysqli_fetch_array($result);
if ($row) {
    session_start();
    $_SESSION['user'] = $user;
    header('Location: home.php');
}


mysqli_free_result($result);
mysqli_close($conection);

