<?php

session_start();

if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
    header('Location: miCuenta.php');
}else{
    header('Location: login.php');
}