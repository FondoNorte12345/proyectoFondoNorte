<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo Norte Componetes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        html,
        body {
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        .form-signin {
            max-width: 330px;
            padding: 30px;
            border: 1px solid #ced4da;
            border-radius: 8px; 
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        
    </style>
</head>

<body>
    <main class="form-signin w-100 m-auto">
        <form class="row g-3" action="validarLogin.php" method="post">
            <div class="col-md-12">
                <h2>Sign in</h2>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="user">
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="pass">
            </div>
            <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-primary w-75 py-2 m-1" type="submit">Login</button>
            <button class="btn btn-primary w-75 py-2 m-1" type="button" onclick="location.href='./registrarse.php'">Register</button>
            </div>
        </form>
    </main>
</body>

</html>