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
        #categorias {
            width: 100%;
        }

        #bienvienido {
            width: 60%;
            text-align: center;
            font-size: 50px;
            margin-top: 30px;
        }

        #carrito {
            position: fixed;
            right: 0;
            top: 100px;
        }
    </style>
</head>

<body>
    <div>
        <?php require('nav/nav.php') ?>
    </div>
    <div id="bienvienido">
        <h1>login bienvenido
            <?php session_start();
            echo $_SESSION['user'] ?>
        </h1>
        <div id="carrito">
            <?php require('carrito/carrito.php') ?>
        </div>
    </div>

    <div class="container-fluid" id="containedor-principal">
        <div class="row">
            <div class="col-2">
                <div id="categorias">
                    <?php require('categorias/categorias.php') ?>
                </div>
            </div>

            <div class="col-8">
                <?php require('productos/listarproductos.php') ?>
            </div>
            <div class="col-2">

            </div>
        </div>

    </div>
    <div>
        <?php require('footer/footer.php') ?>
    </div>
</body>
<script>

</script>

</html>