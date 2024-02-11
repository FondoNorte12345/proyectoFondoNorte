<?php
require('categorias/categoriasControl.php');
?>

<div id="cuerpoCategorias">

</div>

<script>

    let filasCategoria = <?= json_encode($filasCategoria); ?>;

    let cuerpoCategorias = document.getElementById("cuerpoCategorias");

    for (let i = 0; i < filasCategoria.length; i++) {
        cuerpoCategorias.innerHTML += `<button type="button" class="btn btn-primary" value="${filasCategoria[i].COD_CATEGORIA}" 
        onclick="cargarCategorias(${filasCategoria[i].COD_CATEGORIA})">${filasCategoria[i].NOM_CATEGORIA}
        </button>`
    }
    
</script>