<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo Norte Componetes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    </style>
</head>



<body>
    <main class="container">
        <div class="row">
            <div class="col-md-9">
                <form class="row g-3" action="registrarUsuario.php" method="post">
                    <div class="col-md-3">
                        <label class="form-label" for="imputName">Nombre</label>
                        <input type="text" class="form-control w-100" id="imputName" placeholder="" name="nombre">
                    </div>
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="imputAp1">Primer apellido</label>
                        <input type="text" class="form-control w-100" id="imputAp1" placeholder="" name="apellido1">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="imputAp2">Segundo apellido</label>
                        <input type="text" class="form-control w-100" id="imputAp2" placeholder="" name="apellido2">
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-3">
                        <label for="inputPhone" class="form-inputPhone">Telefono</label>
                        <input type="text" class="form-control w-100" id="inputPhone" name="telefono">
                    </div>
                    <div class="col-md-3">
                        <label for="fecha" class="form-label">Fecha nacimiento</label>
                        <input type="date" class="form-control w-100" id="fecha" name="fnachi">
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control w-100" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control w-100" id="inputPassword4" name="password">
                    </div>
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3">
                        <label for="inputPassword5" class="form-label">Repetir Password</label>
                        <input type="password" class="form-control w-100" id="inputPassword5">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Registrase</button>
                    </div>
                </form>


            </div>
            <div class="col-md-3">
                Registrase
            </div>

        </div>
    </main>
</body>