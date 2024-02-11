<?php

/*
Columns:
COD_PRODUCTO int(11) AI PK 
NOM_PRODUCTO varchar(200) 
MARCA varchar(250) 
MODELO varchar(200) 
DESC_PRODUCTO longtext 
PRECIO double 
COD_CATEGORIA int(11);*/

/*tengo que sacar los datos da esta tabla*/


require('../config/db.php');

$query = 'SELECT PRODUCTOS.NOM_PRODUCTO ,PRODUCTOS.DESC_PRODUCTO, PRODUCTOS.MARCA, PRODUCTOS.MODELO, PRODUCTOS.PRECIO, CATEGORIAS.NOM_CATEGORIA, CATEGORIAS.COD_CATEGORIA FROM PRODUCTOS INNER JOIN CATEGORIA ON CATEGORIAS.COD_CATEGORIA = PRODUCTOS.COD_CATEGORIA;';
$consulta = $con->query($query);

/* convertir el resultado a un JSON */
$filas = array();

while ($row = $consulta->fetch_assoc()) {
    $filas[] = $row;
}






