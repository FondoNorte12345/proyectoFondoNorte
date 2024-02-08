<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form action="validar.php" method="post">
        <h1>Sistema login</h1>
        <p>Usuario: <input type="text" name="user" placeholder="Ingresa tu usuario"></p>
        <p>Contraseña: <input type="password" name="pass" placeholder="Ingresa tu contraseña"></p>
        <input type="submit" value="Ingresar">
    </form>

    <input type="button" onclick="location.href='registracion.php'" value="Registrarse">
</body>

</html>