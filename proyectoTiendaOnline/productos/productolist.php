<?php

/*
use tiendaonline;


CREATE TABLE CATEGORIA(
COD_CATEGORIA INT PRIMARY KEY AUTO_INCREMENT,
NOM_CATEGORIA VARCHAR(100),
TIPOIVA DOUBLE
);

CREATE TABLE PRODUCTOS(
COD_PRODUCTO INT PRIMARY KEY AUTO_INCREMENT,
NOM_PRODUCTO VARCHAR(100) NOT NULL,
DESC_PRODUCTO longtext,
PRECIO DOUBLE NOT NULL,
COD_CATEGORIA INT NOT NULL,

FOREIGN KEY (COD_CATEGORIA) REFERENCES CATEGORIA(COD_CATEGORIA)
);*/

/*tengo que sacar los datos da esta tabla*/


require_once("..\config\db.php");

$query = "SELECT * FROM PRODUCTOS";
$consulta = $con->query($query);

/* convertir el resultado a un array asociativo */
$filas = $consulta->fetch_all(MYSQLI_ASSOC);



