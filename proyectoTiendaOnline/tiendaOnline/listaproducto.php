<?php

require('db.php');

$query = 'CALL LISTAPRODUCTOSPRINCIPAL();';
$consulta = $con->query($query);

/* convertir el resultado a un JSON */
$filasproducto = array();

while ($row = $consulta->fetch_assoc()) {
    $filasproducto[] = $row;
}

?>

<style>



</style>

<div id="modal" class="modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="cerrar" onclick="cerrarModal()">&times;</span>
                </button>
            </div>
            <!-- arma un carusel -->
            <div class="container d-flex justify-content-center">
                <div id="carouselExampleIndicators" class="carousel slide w-50" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="..." id="urlImagen">
                        </div>
                        <div id="carousel-inner"></div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal" id="nombre"></h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title" id="precio"> <small class="text-muted">Є</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li id="marca"></li>
                        <li id="modelo"></li>
                    </ul>
                    <div id="boton-cesta"></div>
                    <p id="descripcion"></p>
                </div>
            </div>
            <div class="modal-body">
                <div class="modal-contenido">
                    <div class="detalles-producto">
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="listado" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let divListado = document.getElementById("listado");

    let filasproducto = <?= json_encode($filasproducto) ?>;

    for (let i = 0; i < filasproducto.length; i++) {
        let nombreProducto = filasproducto[i].NOM_PRODUCTO;
        let urlImagen = filasproducto[i].URL_FOTO;
        let precio = filasproducto[i].PRECIO;
        let cod_producto = filasproducto[i].COD_PRODUCTO;
        divListado.innerHTML += `<div class="col-md-4">
                                <div class="card shadow-sm">
                                    <img src="${urlImagen}" class="bd-placeholder-img card-img-top" width="100%" 
                                    </img>
                                    <div class="card-body">
                                        <p class="card-text">${nombreProducto}</p>
                                        <p class="card-text">${precio}<span> €</span></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button"
                                                     class="btn btn-sm btn-outline-secondary" onClick="verDetalles(${cod_producto})">Ver detalles</button>
                                                   
                                                <button type="button" class="btn btn-sm btn-outline-secondary" onClick="agregarAlCarrito(${cod_producto})">Añadir al
                                                    carrito</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                </div>`;
    }
    divListado.innerHTML += `</div>`;

    function agregarAlCarrito(i) {
        alert("Añadido al carrito");
        jQuery.post("agregarAlCarrito.php", { cod_producto: i });
        location.reload();
    }

    let datos = '';

    function cargarDetallesProducto(codigoProducto) {
        // Usa AJAX para cargar los detalles del producto desde un script PHP
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Coloca los detalles del producto en el contenido del modal
                let capura = xhr.responseText;
                console.log(capura);
                datos = JSON.parse(capura);
                armarModal(datos);
            }
        };
        xhr.open('GET', 'detProducto.php?codigo=' + codigoProducto, true);
        xhr.send();
    }


    function verDetalles(codigoProducto) {
        // Abre el modal
        document.getElementById('modal').style.display = 'block';

        // Carga los detalles del producto usando AJAX
        cargarDetallesProducto(codigoProducto);
    }

    function cerrarModal() {
        // Cierra el modal
        document.getElementById('modal').style.display = 'none';
    }

    function armarModal(datosProducto) {
        console.log(datosProducto);
        document.getElementById('carousel-inner').innerHTML = ``;

        for (let i = 0; i < datosProducto.length; i++) {
            document.getElementById('nombre').innerHTML = datosProducto[i].NOM_PRODUCTO;
            document.getElementById('descripcion').innerHTML = datosProducto[i].DESC_PRODUCTO;
            document.getElementById('marca').innerHTML = datosProducto[i].MARCA;
            document.getElementById('modelo').innerHTML = "Modelo: " +datosProducto[i].MODELO;
            document.getElementById('precio').innerHTML = datosProducto[i].PRECIO;
            document.getElementById('urlImagen').src = datosProducto[i].URL_FOTO;
            document.getElementById('boton-cesta').innerHTML = `<button type="button" class="btn btn-primary" onClick="agregarAlCarrito(${datosProducto[i].COD_PRODUCTO})">Añadir al carrito</button>`;
            if (i == 0) {
                document.getElementById('urlImagen').src = datosProducto[i].URL_FOTO;
            } else {
                document.getElementById('carousel-inner').innerHTML += `<div class="carousel-item">
                        <img src="${datosProducto[i].URL_FOTO}" class="d-block w-100" alt="..." id="urlImagen${i}">
                    </div>`;
            }

        }
    }



</script>