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
    <div class="list-group" id="categoria">
    </div>
</div>
<script>
    let categorias = <?= json_encode($filasCategoria) ?>;
    let subcategorias = <?= json_encode($filasSubCategoria) ?>;

    let divCategorias = document.getElementById("categoria");





    for (let i = 0; i < categorias.length; i++) {
        let categoria = categorias[i];
        let cod_categoria = categorias[i].cod_categoria;

        divCategorias.innerHTML += `<div class="card card-body gap-1">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample_${cod_categoria}" role="button" aria-expanded="false" aria-controls="collapseExample_${cod_categoria}">
  ${categoria.nom_categoria}
  </a>
    </div>`;
        for (let j = 0; j < subcategorias.length; j++) {
            if (subcategorias[j].cod_categoria == cod_categoria) {
                let subcategoria = subcategorias[j];
                divCategorias.innerHTML += `<div class="collapse" id="collapseExample_${cod_categoria}">
                <div class="card card-body"><input class="form-check-input flex-shrink-0" type="checkbox" value="
                                ${subcategoria.nom_subcategoria}" checked>
                    <span>
                        ${subcategoria.nom_subcategoria}
                    </span>
                </div>
                </div>`;
            }

        }
        divCategorias.innerHTML += `<br>`;
    }
</script>