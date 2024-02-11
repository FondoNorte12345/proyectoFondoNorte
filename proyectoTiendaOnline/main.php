<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css\bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <style>
        
    </style>
</head>

<body>
    <div>
        <?php include('nav/nav.php') ?>
    </div>
    <div id="containedor-principal">
        <div id="categorias">
            <?php require('categorias/categorias.php') ?>
        </div>
        <H1>login bien venido
            <?php session_start();
            echo $_SESSION['user'] ?>
        </H1>
        <div>
            <?php require('productos/listarproductos.php') ?>
        </div>
        <div>
            <?php require('footer/footer.php') ?>
        </div>
    </div>
</body>

</html>