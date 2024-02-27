CREATE TABLE USUARIOS(
    COD_USUARIO INT PRIMARY KEY AUTO_INCREMENT,
    CORREO VARCHAR(250) NOT NULL,
    PASS VARCHAR(100) NOT NULL,
    NOMBRE VARCHAR(100) NOT NULL,
    APELLIDO1 VARCHAR(100) NOT NULL,
    APELLIDO2 VARCHAR(100),
    TELEFONO VARCHAR(100) NOT NULL,
    FNACI DATE NOT NULL,
    ROL ENUM('CLIENTE','ADMIN')
);


CALL REGISTRAR_CLIENTE('usuario1@example.com', 'password1', 'Nombre1', 'Apellido1_1', 'Apellido1_2', '123456789', '1990-01-01');


SELECT * FROM USUARIOS;


INSERT INTO USUARIOS(CORREO,PASS,NOMBRE,APELLIDO1,APELLIDO2,TELEFONO,ROL) VALUES ('usuario1@example.com', 'password1', 'Nombre1', 'Apellido1_1', 'Apellido1_2', '123456789', '1990-01-01','CLIENTE');


SELECT VALIDAR_USUARIO('usuario1@example.com', 'password1');


CREATE TABLE CATEGORIAS(
    COD_CATEGORIA INT PRIMARY KEY AUTO_INCREMENT,
    NOM_CATEGORIA VARCHAR(100),
    TIPOIVA DOUBLE
);

CREATE TABLE SUBCATEGORIAS(
    COD_SUBCATEGORIA INT PRIMARY KEY AUTO_INCREMENT,
    COD_CATEGORIA INT NOT NULL,
    NOM_SUBCATEGORIA VARCHAR(100),
    FOREIGN KEY (COD_CATEGORIA) REFERENCES CATEGORIAS(COD_CATEGORIA)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE PRODUCTOS(
    COD_PRODUCTO INT PRIMARY KEY AUTO_INCREMENT,
    NOM_PRODUCTO VARCHAR(200) NOT NULL,
    MARCA VARCHAR(250) NOT NULL,
    MODELO VARCHAR(200) NOT NULL,
    DESC_PRODUCTO LONGTEXT,
    PRECIO DOUBLE NOT NULL,
    COD_SUBCATEGORIA INT NOT NULL,
    FOREIGN KEY (COD_SUBCATEGORIA) REFERENCES SUBCATEGORIAS(COD_SUBCATEGORIA)
    ON DELETE CASCADE ON UPDATE CASCADE
);

drop table productos;
-- Categorías
INSERT INTO CATEGORIAS (NOM_CATEGORIA, TIPOIVA) VALUES 
('Electrónica', 0.16),
('Electrodomésticos', 0.16),
('Accesorios', 0.16);

-- Subcategorías
INSERT INTO SUBCATEGORIAS (COD_CATEGORIA, NOM_SUBCATEGORIA) VALUES 
-- Categoría de Electrónica
(1, 'Teléfonos'),
(1, 'Computadoras'),
(1, 'Televisores'),
(1, 'Cámaras'),
-- Categoría de Electrodomésticos
(2, 'Refrigeradores'),
(2, 'Lavadoras'),
(2, 'Licuadoras'),
(2, 'Microondas'),
-- Categoría de Accesorios
(3, 'Fundas'),
(3, 'Cables'),
(3, 'Auriculares'),
(3, 'Baterías');


select productos.nom_producto, subcategorias.nom_subcategoria from productos inner join subcategorias on productos.COD_SUBCATEGORIA = SUBCATEGORIAs.COD_SUBCATEGORIA;

-- Productos
INSERT INTO PRODUCTOS (NOM_PRODUCTO, MARCA, MODELO, DESC_PRODUCTO, PRECIO, COD_SUBCATEGORIA) VALUES
-- Categoría de Electrónica
('iPhone 13', 'Apple', 'iPhone 13', 'Teléfono móvil de última generación', 1200.00, 1),
('MacBook Pro', 'Apple', 'MacBook Pro', 'Laptop de alta gama para profesionales', 2000.00, 1),
('Samsung QLED 4K', 'Samsung', 'Q80T', 'Televisor con tecnología QLED de alta definición', 1500.00, 1),
('Canon EOS R5', 'Canon', 'EOS R5', 'Cámara DSLR profesional con capacidad de grabación 8K', 3500.00, 1),
-- Categoría de Electrodomésticos
('Samsung Side-by-Side', 'Samsung', 'RS65R5401M9', 'Refrigerador de doble puerta con dispensador de agua y hielo', 1800.00, 2),
('LG Lavadora Frontal', 'LG', 'F4J6VY2W', 'Lavadora automática de carga frontal con tecnología AI DD', 800.00, 2),
('Oster Blender Pro', 'Oster', 'BLSTMB-CBG-000', 'Licuadora de alto rendimiento con jarra de vidrio', 120.00, 2),
('Whirlpool Microondas', 'Whirlpool', 'WMR5350DD', 'Microondas con función de cocción rápida y grill', 150.00, 2),
-- Categoría de Accesorios
('Spigen Funda iPhone 13', 'Spigen', 'Liquid Air Armor', 'Funda delgada y resistente para iPhone 13', 20.00, 3),
('AmazonBasics Cable USB-C', 'AmazonBasics', 'AMZ-USBC-03', 'Cable USB-C de 3 pies, 2 unidades', 10.00, 3),
('Sony WH-1000XM4', 'Sony', 'WH-1000XM4', 'Auriculares inalámbricos con cancelación de ruido y sonido de alta resolución', 300.00, 3),
('Anker PowerCore 20000', 'Anker', 'A1271H11', 'Batería externa de gran capacidad para carga rápida', 50.00, 3);


CREATE TABLE PRODUCTOSFOTOS(
    COD_PRODUCTO INT NOT NULL,
    URL_FOTO VARCHAR(250) NOT NULL,
    DESC_FOTO VARCHAR(250),
    FOREIGN KEY (COD_PRODUCTO) REFERENCES PRODUCTOS(COD_PRODUCTO) 
    ON DELETE CASCADE ON UPDATE CASCADE
);


insert into productosfotos(cod_producto, url_foto, desc_foto) values
(2,'https://thumb.pccomponentes.com/w-300-300/articles/1066/10661415/1946-apple-macbook-pro-apple-m2-pro-12-nucleos-16gb-1tb-ssd-162-gris-espacial.jpg', 'princ'),
(1, 'https://img.pccomponentes.com/articles/57/578962/128-apple-iphone-13-128gb-blanco-estrella-libre.jpg', 'princ'),
(3,'https://img.pccomponentes.com/articles/1081/10815212/1671-cecotec-v3-series-vqu30085-85-qled-ultrahd-4k-hdr10-smart-tv.jpg',"princ"),
(4,'https://img.pccomponentes.com/articles/1079/10799491/1985-canon-eos-r5-full-frame-45mp-wifi-cuerpo.jpg',"princ"),
(5,'https://img.pccomponentes.com/articles/1074/10749626/1566-samsung-hw-q600c-zf-barra-de-sonido-con-subwoofer-inalambrico-bluetooth-312-canales-34w-negra.jpg',"princ"),
(6,'https://img.pccomponentes.com/articles/1080/10803297/1480-lg-f2dr5s09a1w-lavasecadora-de-carga-frontal-9kg-5kg-e-blanca.jpg',"princ");



select categorias.nom_categoria , subcategorias.nom_subcategoria from categorias inner join subcategorias on categorias.cod_categoria = subcategorias.cod_categoria; 

SELECT subcategorias.nom_subcategoria, subcategorias.cod_categoria, subcategorias.cod_subcategoria FROM subcategorias;

SELECT PRODUCTOS.NOM_PRODUCTO , PRODUCTOS.PRECIO, productos.cod_producto  FROM PRODUCTOS;


/*CREATE DEFINER=`root`@`localhost` PROCEDURE `LISTAPRODUCTOSPRINCIPAL`()
BEGIN
	SELECT PRODUCTOS.NOM_PRODUCTO,PRODUCTOS.COD_PRODUCTO , PRODUCTOS.PRECIO , SUBCATEGORIAS.COD_SUBCATEGORIA , PRODUCTOSFOTOS.URL_FOTO , PRODUCTOSFOTOS.DESC_FOTO  FROM PRODUCTOS INNER JOIN PRODUCTOSFOTOS ON PRODUCTOS.COD_PRODUCTO = PRODUCTOSFOTOS.COD_PRODUCTO INNER JOIN SUBCATEGORIAS ON SUBCATEGORIAS.COD_SUBCATEGORIA = PRODUCTOS.COD_SUBCATEGORIA; 
END*/

/*CREATE DEFINER=`root`@`localhost` PROCEDURE `REGISTRAR_CLIENTE`(COR VARCHAR(250),
    PAS VARCHAR(100),
    NOM VARCHAR(100),
    AP1 VARCHAR(100),
    AP2 VARCHAR(100),
    TEL VARCHAR(100),
    FCI DATE)
BEGIN
	DECLARE VALIDACION BOOLEAN;
	
    SET VALIDACION = (SELECT VALIDAR_USUARIO(COR,PAS));
    
    IF VALIDACION = 0 THEN
		INSERT INTO USUARIOS(CORREO,PASS,NOMBRE,APELLIDO1,APELLIDO2,TELEFONO,FNACI,ROL) VALUES (COR,PAS,NOM,AP1,AP2,TEL,FCI,'CLIENTE');
	END IF;
    
END*/