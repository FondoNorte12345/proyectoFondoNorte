<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Seleccionar Método de Pago</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://bootswatch.com/4/lux/bootstrap.min.css"
    />

    <style>
      body{
        margin-bottom: 5%;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <h2>Selecciona el Método de Pago</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tarjeta de Crédito/Débito</h5>
              <p class="card-text">
                Seleccione esta opción para pagar con tarjeta de crédito o
                débito.
              </p>
              <button
                class="btn btn-primary"
                onclick="mostrarFormulario('tarjeta')"
              >
                Seleccionar
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">PayPal</h5>
              <p class="card-text">
                Seleccione esta opción para pagar con PayPal.
              </p>
              <button
                class="btn btn-primary"
                onclick="mostrarFormulario('paypal')"
              >
                Seleccionar
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-4" id="formContainer" style="display: none">
        <h2>Procesar Pago</h2>
        <div id="tarjetaForm" style="display: none">
            <form>
                
                <div class="form-group">
                  <label for="inputNumeroTarjeta">Número de Tarjeta</label>
                  <input type="text" class="form-control" id="inputNumeroTarjeta" placeholder="xxxx-xxxx-xxxx-xxxx">
                </div>

                <div class="form-group">
                    <label for="inputNombreTarjeta">Nombre</label>
                    <input type="text" class="form-control" id="inputNombreTarjeta" placeholder="Nombre del titular de la tarjeta">
                  </div>
          
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputFechaVencimiento">Fecha de Vencimiento</label>
                    <input type="text" class="form-control" id="inputFechaVencimiento" placeholder="MM/AA">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputCodigoSeguridad">Código de Seguridad (CVV)</label>
                    <input type="text" class="form-control" id="inputCodigoSeguridad" placeholder="CVV">
                  </div>
                </div>
          
                <button type="submit" class="btn btn-primary">Procesar Pago con Tarjeta de Crédito</button>
              </form>
        </div>
        <div id="paypalForm" style="display: none">
            <form>
                
                <div class="form-group">
                  <label for="inputCorreoPaypal">Correo Electrónico de PayPal</label>
                  <input type="email" class="form-control" id="inputCorreoPaypal" placeholder="correo@ejemplo.com">
                </div>
            
                
                <div class="form-group">
                  <label for="inputContrasenaPaypal">Contraseña de PayPal</label>
                  <input type="password" class="form-control" id="inputContrasenaPaypal" placeholder="Contraseña">
                </div>
            
                
                <button type="submit" class="btn btn-primary">Procesar Pago con PayPal</button>

                
              </form>
            </div>
        </div>
      </div>
    </div>

    <script>
     
      function mostrarFormulario(metodoPago) {
        
        document.getElementById("formContainer").style.display = "none";

        
        document.getElementById("formContainer").style.display = "block";

        
        document.getElementById("tarjetaForm").style.display = "none";
        document.getElementById("paypalForm").style.display = "none";

        
        if (metodoPago === "tarjeta") {
          document.getElementById("tarjetaForm").style.display = "block";
        } else if (metodoPago === "paypal") {
          document.getElementById("paypalForm").style.display = "block";
        }
      }
    </script>
  </body>
</html>
