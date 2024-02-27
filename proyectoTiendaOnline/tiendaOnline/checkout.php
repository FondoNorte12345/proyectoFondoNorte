<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fondo Norte Componetes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <style>
    body {
      margin: 0;
      background-color: #f8f9fa;
    }

    main {
      height: 200vh;
    }
  </style>
</head>

<body>
  <div>

  </div>
  <div class="container mt-5">
    <h2>Procesar dirección de envío</h2>
    <form action="checkControl.php" method="post">

      <div class="form-group">
        <label for="inputDireccion">Dirección</label>
        <input type="text" class="form-control w-50" id="inputDireccion" placeholder="Calle, número, Piso, etc." name="direccion" />
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCiudad">Ciudad</label>
          <input type="text" class="form-control" id="inputCiudad" placeholder="Ciudad" name="ciudad" />
        </div>
        <div class="form-group col-md-6">
          <label for="inputProvincia">Provincia</label>
          <input type="text" class="form-control" id="inputProvincia" placeholder="Provincia" name="provincia" />
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCodigoPostal">Código Postal</label>
          <input type="text" class="form-control" id="inputCodigoPostal" placeholder="Código Postal" name="cp" />
        </div>
        <div class="form-group col-md-6">
          <label for="inputPais">País</label>
          <input type="text" class="form-control" id="inputPais" placeholder="País" name="pais" />
        </div>
      </div>

      <div class="col-12">
        <br>
        <button type="submit" class="btn btn-primary">Registrase</button>
      </div>
    </form>
  </div>
</body>

</html>