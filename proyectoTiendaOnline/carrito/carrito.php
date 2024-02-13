<?php
require_once 'config/db.php';


if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}

$queryCarrito = "SELECT PRODUCTOS.NOM_PRODUCTO , SUM(CARRITOS.CANTPRODUCTO) AS CANTPRODUCTO, SUM(CARRITOS.CANTPRODUCTO * PRODUCTOS.PRECIO) AS TOTAL FROM CARRITOS INNER JOIN PRODUCTOS ON CARRITOS.COD_PRODUCTO = PRODUCTOS.COD_PRODUCTO INNER JOIN USUARIOS ON CARRITOS.COD_USUARIO = USUARIOS.COD_USUARIO WHERE CORREO = '" . $_SESSION['user'] . "'" . " GROUP BY PRODUCTOS.COD_PRODUCTO;";

$consultaCarro = $con->query($queryCarrito);

/* convertir el resultado a un JSON */
$productosCarrito = array();

while ($row = $consultaCarro->fetch_assoc()) {
    $productosCarrito[] = $row;
}

?>

<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
    <div class="card-header">Carrito</div>
    <div class="card-body">
        <ul id="carrito-ul"></ul>
    </div>
</div>





<script>

    let productosCarrito = <?= json_encode($productosCarrito); ?>

    let ul = document.getElementById('carrito-ul');
    let total = 0;

    console.log(productosCarrito);

    if (productosCarrito.length == 0) {
        ul.innerHTML = `<li class="nav-item">No hay productos en el carrito</li>`
    } else {
        for (let i = 0; i < productosCarrito.length; i++) {
            ul.innerHTML += `<li class="nav-item">${productosCarrito[i].NOM_PRODUCTO} cantidad: ${productosCarrito[i].CANTPRODUCTO}</li>`
            total +=parseInt(productosCarrito[i].TOTAL);
        }

        ul.innerHTML += `<li class="nav-item">Total: ${total}</li>`
        
    }

</script>