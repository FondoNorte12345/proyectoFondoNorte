<?php

require('config\db.php');



$query = 'SELECT PRODUCTOS.NOM_PRODUCTO ,PRODUCTOS.DESC_PRODUCTO, PRODUCTOS.MARCA, PRODUCTOS.MODELO, PRODUCTOS.PRECIO, CATEGORIAS.NOM_CATEGORIA, CATEGORIAS.COD_CATEGORIA FROM PRODUCTOS INNER JOIN CATEGORIAS ON CATEGORIAS.COD_CATEGORIA = PRODUCTOS.COD_CATEGORIA;';


$consulta = $con->query($query);

/* convertir el resultado a un JSON */
$filas = array();

while ($row = $consulta->fetch_assoc()) {
    $filas[] = $row;
}


$con->close();
?>
<style>
    #list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 300px;
        margin: 20px;
    }
</style>

<body onload="cargarListado()">
    <h1>Listado de productos</h1>
    <div id="list">


    </div>

    <script>
        let filas = <?php json_encode($filas); ?>;
        console.log(filas);
        let list = document.getElementById("list");

        function cargarListado() {
            for (let i = 0; i < filas.length; i++) {
                list.innerHTML += `
        <div class="card mb-3" id="card">
        <h3 class="card-header">${filas[i].NOM_PRODUCTO}</h3>
        <div class="card-body">
        <h5 class="card-title">${filas[i].NOM_CATEGORIA}</h5>
        <h6 class="card-subtitle text-muted">${filas[i].COD_CATEGORIA}</h6>
        </div>
<svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
<rect width="100%" height="100%" fill="#868e96"></rect>
<text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
</svg>
<div class="card-body">
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>
<ul class="list-group list-group-flush" >
<li class="list-group-item">${filas[i].PRECIO} €</li>
<li class="list-group-item">${filas[i].MARCA}</li>
<li class="list-group-item">${filas[i].MODELO}</li>
</ul>
<div class="card-body">
<a href="#" class="card-link">añadir al carrito</a>
<a href="#" class="card-link">ver detalles</a>
</div>
<div class="card-footer text-muted">
</div>
</div>
    `
            }

        }




        function cargarCategorias(id) {
            console.log(id);

            list.innerHTML = '';

            for (let i = 0; i < filas.length; i++) {
                console.log(JSON.stringify(filas[i].COD_CATEGORIA));
                if (filas[i].COD_CATEGORIA == id) {

                    list.innerHTML += `
                    <div class="card mb-3" id="card">
        <h3 class="card-header">${filas[i].NOM_PRODUCTO}</h3>
<div class="card-body">
<h5 class="card-title">${filas[i].NOM_CATEGORIA}</h5>
<h6 class="card-subtitle text-muted">Support card subtitle</h6>
</div>
<svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
<rect width="100%" height="100%" fill="#868e96"></rect>
<text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
</svg>
<div class="card-body">
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>
<ul class="list-group list-group-flush" >
<li class="list-group-item">${filas[i].PRECIO} €</li>
<li class="list-group-item">${filas[i].MARCA}</li>
<li class="list-group-item">${filas[i].MODELO}</li>
</ul>
<div class="card-body">
<a href="#" class="card-link">añadir al carrito</a>
<a href="#" class="card-link">ver detalles</a>
</div>
<div class="card-footer text-muted">
</div>
</div>
    `
                }
            }
        }
    </script>
</body>

</html>