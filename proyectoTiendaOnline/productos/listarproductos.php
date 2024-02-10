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
        let filas = <?php echo json_encode($filas); ?>

        filas.forEach(element => {
            for (const key in element) {
                document.getElementById("list").innerHTML += key + " : " + element[key] + "<br>";
            }
        })
    </script>
</body>
</html>


