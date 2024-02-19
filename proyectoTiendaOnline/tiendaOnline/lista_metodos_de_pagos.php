<?php


    require_once 'db.php';

    $query = "CALL LISTAR_METODO_PAGOS('usuario1@example.com');";

    $result = $con->query($query);

    

        $direcciones = array();
        
        while ($row = $result->fetch_assoc()) {
            $direcciones[] = $row;
        }

        echo json_encode($direcciones);