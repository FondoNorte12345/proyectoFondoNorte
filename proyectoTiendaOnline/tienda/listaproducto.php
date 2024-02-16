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
    <div id="listado" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"></div>
<script>
    let divListado = document.getElementById("listado");

    let filasproducto = <?= json_encode($filasproducto) ?>;

    
 

    for (let i = 0; i < filasproducto.length; i++) {
    let nombreProducto = filasproducto[i].NOM_PRODUCTO;
    let urlImagen = filasproducto[i].URL_FOTO;
    console.log(nombreProducto);
    divListado.innerHTML += `<div class="col-md-4">
                                <div class="card shadow-sm">
                                    <img src="${urlImagen}" class="bd-placeholder-img card-img-top" width="100%" 
                                    </img>
                                    <div class="card-body">
                                        <p class="card-text">${nombreProducto}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">Comprar</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Añadir al
                                                    carrito</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                </div>`;
    }
    divListado.innerHTML += `</div>`;
</script>