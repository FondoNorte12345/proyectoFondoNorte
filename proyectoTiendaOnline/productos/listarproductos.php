<?php

require_once("productolist.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="list"></div>
    <script>
        // datos de la consulta trasformarlo en JSON

    let filas = <?= json_encode($filas); ?>;
    filas = filas[0];
    console.log(filas);

    let list = document.getElementById("list");

    for (let i = 0; i < filas.length; i++) {
        list.innerHTML += `
        <div>
            <h1>${filas[i].NOM_PRODUCTO}</h1>
            <p>${filas[i].DESC_PRODUCTO}</p>
            <p>${filas[i].PRECIO}</p>
            <p>${filas[i].NOM_CATEGORIA}</p>
        </div>
        `
    }
    </script>
</body>
</html>


