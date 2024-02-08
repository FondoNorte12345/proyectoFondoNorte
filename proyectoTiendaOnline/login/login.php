<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <title>login</title>
    <style>
        #formulario {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div>
        <?php include('../nav/nav.php') ?>
    </div>
    <div id="formulario">
        <form action="validar.php" method="post">
            <fieldset>
                <legend>Mi cuenta</legend>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" name="user" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small><br>
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1"
                        placeholder="Password" autocomplete="off">
                </div>
                <br>
                <button type="submit" class="btn btn-dark">Ingresar</button>
                <button type="button" class="btn btn-outline-primary"
                    onclick="location.href='registracion.php'">Registrarse</button>
            </fieldset>
        </form>
    </div>
</body>

</html>