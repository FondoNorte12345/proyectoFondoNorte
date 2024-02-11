<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require('../nav/nav.php') ?>
    <h1>Mi cuenta</h1>
    <h2>hola <?php session_start(); echo $_SESSION['user'] ?></h2>
    
</body>
</html>