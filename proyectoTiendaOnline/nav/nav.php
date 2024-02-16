<header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
</header>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Aqui hay que añadir al log</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="http://localhost/proyectoFondoNorte/proyectoTiendaOnline/index.php">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/proyectoFondoNorte/proyectoTiendaOnline/login/miCuentaControl.php">Mi cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="mostrarCarrito()">Mi carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/proyectoFondoNorte/proyectoTiendaOnline/login/logout.php">Logout</a>
                </li>
            </ul>
            <p>Usuario: <?php session_start(); echo $_SESSION['user'] ?></p>
        </div>
    </div>
</nav>



<script>
    let carrito = false;

    function mostrarCarrito() {
        carrito = !carrito;
        if (carrito == false) {
            document.getElementById("carrito").style.display = "block";
        }else{
            document.getElementById("carrito").style.display = "none";
        }
      
    }
</script>