<?php
// Incluir archivo de conexión a la base de datos
require('db.php');

// Consulta SQL para obtener categorías y subcategorías
$queryCategoria = 'SELECT categorias.nom_categoria, categorias.cod_categoria FROM categorias;';
$querySubCategoria = 'SELECT subcategorias.nom_subcategoria, subcategorias.cod_categoria, subcategorias.cod_subcategoria FROM subcategorias;';

// Ejecutar consulta
$resultadoCategoria = $con->query($queryCategoria);
$resultadoSubcategoria = $con->query($querySubCategoria);

// Verificar si la consulta fue exitosa
if ($resultadoCategoria && $resultadoSubcategoria) {
    // Inicializar arrays para almacenar las filas de resultados
    $filasCategoria = array();
    $filasSubCategoria = array();

    // Recorrer los resultados y almacenarlos en los arrays
    while ($row = $resultadoCategoria->fetch_assoc()) {
        $filasCategoria[] = $row;
    }

    while ($row = $resultadoSubcategoria->fetch_assoc()) {
        $filasSubCategoria[] = $row;
    }


} else {
    // Si la consulta falla, devolver un JSON con un mensaje de error
    echo json_encode(array('error' => 'Error al ejecutar la consulta: ' . $con->error));
}


?>
<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <div id="categoria">
    </div>
</div>
<script>
    let categorias = <?= json_encode($filasCategoria) ?>;
    let subcategorias = <?= json_encode($filasSubCategoria) ?>;

    let divCategorias = document.getElementById("categoria");



    for (let i = 0; i < categorias.length; i++) {
        let categoria = categorias[i];
        divCategorias.innerHTML += `<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                aria-controls="v-pills-home" aria-selected="true" value="${categoria.cod_categoria}">${categoria.nom_categoria}</a></div>`
        for (let j = 0; j < subcategorias.length; j++) {
            let subcategoria = subcategorias[j];
            divCategorias.innerHTML += `<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                aria-controls="v-pills-home" aria-selected="true" value="${subcategoria.cod_subcategoria}">${subcategoria.nom_subcategoria}</a></div>`;
        }
       
    }
</script>