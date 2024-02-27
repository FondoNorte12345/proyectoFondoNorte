<?php


    require_once 'db.php';

    $query = "CALL LISTAR_DIRECCIONES('usuario1@example.com');";

    $result = $con->query($query);

    

        $direcciones = array();
        
        while ($row = $result->fetch_assoc()) {
            $direcciones[] = $row;
        }

        echo json_encode($direcciones);
  

