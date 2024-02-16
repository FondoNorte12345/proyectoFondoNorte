<?php

$user = $_POST['email'];
$pass = $_POST['password'];
$nom = $_POST['nombre'];
$ap1 = $_POST['apellido1'];
$ap2 = $_POST['apellido2'];
$tel = $_POST['telefono'];
$fnac = $_POST['fnachi'];

require 'db.php';

// Evitar inyección SQL utilizando Prepared Statements
$insert = $con->prepare("CALL REGISTRAR_CLIENTE(?, ?, ?, ?, ?, ?, ?)");
$insert->bind_param("sssssss", $user, $pass, $nom, $ap1, $ap2, $tel, $fnac);
$insert->execute();

// Verificar si el registro del cliente fue exitoso
if ($insert) {
    // Consulta para validar al usuario recién registrado
    $query = "SELECT VALIDAR_USUARIO('$user', '$pass') AS VALIDO";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row['VALIDO'] == 1) {
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            header('Location: index.php');
            exit(); // Asegúrate de terminar la ejecución del script después de redireccionar
        } else {
            echo "Error: Usuario no válido.";
        }
        mysqli_free_result($result);
    } else {
        echo "Error en la consulta: " . mysqli_error($con);
    }
} else {
    echo "Error al registrar el cliente: " . $con->error;
}
