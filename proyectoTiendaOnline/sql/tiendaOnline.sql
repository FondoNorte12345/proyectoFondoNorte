CREATE DATABASE TIENDAONLINE;
USE TIENDAONLINE;

CREATE TABLE USUARIOS(
COD_USUARIO INT PRIMARY KEY AUTO_INCREMENT,
NOM_USUARIO VARCHAR(100) NOT NULL,
PASS VARCHAR(100) NOT NULL,
NOMBRE VARCHAR(100) NOT NULL,
APELLIDO1 VARCHAR(100) NOT NULL,
APELLIDO2 VARCHAR(100),
TELEFONO VARCHAR(100) NOT NULL,
DIRECCION VARCHAR(100) NOT NULL,
CP VARCHAR(100) NOT NULL,
FNACI DATE NOT NULL,
CORREO VARCHAR(250) NOT NULL
);

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
);

CREATE TABLE COMPRA(
COD_COMPRA VARCHAR(100) NOT NULL,
COD_PRODUCTO INT NOT NULL,
COD_USUARIO INT NOT NULL,
CANTPRODUCTO INT NOT NULL,
FCOMPRA DATE  NOT NULL,

FOREIGN KEY (COD_USUARIO) REFERENCES USUARIOS(COD_USUARIO),
FOREIGN KEY (COD_PRODUCTO) REFERENCES PRODUCTOS(COD_PRODUCTO)
);

CREATE TABLE FACTURA(
COD_FACTURA INT PRIMARY KEY AUTO_INCREMENT,
COD_COMPRA VARCHAR(80) NOT NULL,
IMPORTE DOUBLE NOT NULL,
FFACTURA DATE NOT NULL,
NOMBRE VARCHAR(100) NOT NULL,
APELLIDO1 VARCHAR(100) NOT NULL,
APELLIDO2 VARCHAR(100),
EMISOR VARCHAR(100) NOT NULL,

FOREIGN KEY (COD_COMPRA) REFERENCES COMPRA(COD_COMPRA)
);

CREATE TABLE ENVIOS(
COD_ENVIOS INT PRIMARY KEY AUTO_INCREMENT,
COD_USUARIO INT NOT NULL,
COD_CONPRA INT NOT NULL,
FENVIOS DATE NOT NULL,
FENTREGA DATE,

FOREIGN KEY (COD_USUARIO) REFERENCES USUARIOS(COD_USUARIO),
FOREIGN KEY (COD_COMPRA) REFERENCES COMPRA(COD_COMPRA)
);

CREATE TABLE CARRITO(
COD_USUARIO INT NOT NULL,
COD_PRODUCTO INT NOT NULL,
CANTPRODUCTO INT NOT NULL,

FOREIGN KEY (COD_USUARIO) REFERENCES USUARIOS(COD_USUARIO),
FOREIGN KEY (COD_PRODUCTO) REFERENCES PRODUCTOS(COD_PRODUCTO)
);
