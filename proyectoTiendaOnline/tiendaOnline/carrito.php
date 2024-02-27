<?php
require('db.php');

if (!isset($_SESSION['user'])) {

} else {

    $query = 'CALL LISTACARRITO("' . $_SESSION['user'] . '");';

    $consulta = $con->query($query);

    $filas = array();

    while ($row = $consulta->fetch_assoc()) {
        $filas[] = $row;
    }
}



?>
<style>
    .sidebar {
        height: 100%;
        position: fixed;
        z-index: 1;
        top: 200px;
        right: 0;
        background-color: #f8f9fa;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }
</style>


<div id="sidebar" class="sidebar">
    <div>
        <h3>Mi cesta</h3>
        <button class="btn" onclick="closeNav()" width="30px"><i class="bi bi-x-square-fill"></i></button>
        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary" id="carrito"
            style="width: 380px;">

        </div>
    </div>
</div>

<script>
    let carrito = <?= json_encode($filas) ?>;

    let divCarrito = document.getElementById("carrito");

    let cantidadproductos = 0;

    let total = 0;
    generarCarrito();

    function generarCarrito() {
        if (carrito.length == 0) {
            divCarrito.innerHTML = "<p>No hay productos en el carrito</p>";
        }else{
            
        
        for (let i = 0; i < carrito.length; i++) {
            let nombreProducto = carrito[i].NOM_PRODUCTO;
            cantidadproductos += parseInt(carrito[i].CANTPRODUCTO);
            let cantidad = parseInt(carrito[i].CANTPRODUCTO);
            let codigo = carrito[i].COD_PRODUCTO;

            total += parseInt(carrito[i].TOTAL);


            divCarrito.innerHTML += `<a href="#" class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
   <span class="fs-5 fw-semibold">${nombreProducto} <i class="bi bi-${cantidad}-circle"></i></span><button type="button" class="btn" aria-label="Close" onclick="borrar(${codigo})">Borrar
   <i class="bi bi-trash3-fill"></i></button></span>
    </a><br>`;

        }
        divCarrito.innerHTML += `<hr>`;
        divCarrito.innerHTML += `<a href="#" class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
    <span class="fs-5 fw-semibold">Total: ${total} € </span></span>
     </a><br>`;


        divCarrito.innerHTML += `<button type="button" class="btn btn-primary">Ver tu cesta</button>`
        }
    };


    function closeNav() {
        document.getElementById("sidebar").style.width = "0";
    }

    function borrar(cod) {
        alert("borrando " + cod + " del carrito");
        jQuery.post("borrarProductoCarro.php", { cod_producto: cod });
        window.location.reload();
    }


</script>