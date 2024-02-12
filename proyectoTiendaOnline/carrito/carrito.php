<?php
require_once '../config/db.php';
session_start();

$query = "SELECT PRODUCTOS.NOM_PRODUCTO , SUM(CARRITOS.CANTPRODUCTO) AS CANTPRODUCTO FROM CARRITOS INNER JOIN PRODUCTOS ON CARRITOS.COD_PRODUCTO = PRODUCTOS.COD_PRODUCTO
INNER JOIN USUARIOS ON CARRITOS.COD_USUARIO = USUARIOS.COD_USUARIO WHERE CORREO = '" . $_SESSION['user'] . "'" . " GROUP BY PRODUCTOS.COD_PRODUCTO;";

$consulta = $con->query($query);

/* convertir el resultado a un JSON */
$filas = array();

while ($row = $consulta->fetch_assoc()) {
    $filas[] = $row;
}


?>

<div>
    <ul id="ul">
    </ul>
</div>

<script>

    let filas = <?= json_encode($filas); ?>

    let ul = document.getElementById('ul');

    console.log(filas);

    for (let i = 0; i < filas.length; i++) {
            ul.innerHTML += `<li>${filas[i].NOM_PRODUCTO} cantidad: ${filas[i].CANTPRODUCTO}</li>`
        
    }



</script>