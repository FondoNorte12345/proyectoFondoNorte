CREATE DEFINER=`root`@`localhost` PROCEDURE `VALIDACION_USUARIO`(CORREO1 VARCHAR(250), PASS1 VARCHAR(250), NOMBRE1 VARCHAR(250), APELLIDO11 VARCHAR(250), APELLIDO21 VARCHAR(250), TELEFONO1 VARCHAR(250), FNACI1 VARCHAR(250))
BEGIN
    DECLARE CORREO2 VARCHAR(250);
	DECLARE VALIDACION BOOLEAN;
	DECLARE CONTADOR INT;
    DECLARE REGISTROS INT;

    SET REGISTROS = (SELECT MAX(COD_USUARIO) FROM USUARIOS);
    SET CONTADOR = 1;
    SET VALIDACION = 0;
    
    WHILE CONTADOR <= REGISTROS AND VALIDACION = 0 DO
        SET CORREO2 = (SELECT CORREO FROM USUARIOS WHERE COD_USUARIO = CONTADOR);
		SET VALIDACION = (SELECT VALIDACION_CORREO(CORREO1, CORREO2));
		SET CONTADOR = CONTADOR + 1;
    END WHILE;
	
    IF VALIDACION = 0 THEN
		INSERT INTO USUARIOS(CORREO, PASS, NOMBRE, APELLIDO1, APELLIDO2, TELEFONO, FNACI) VALUES (CORREO1, PASS1, NOMBRE1, APELLIDO11, APELLIDO21, TELEFONO1, FNACI1);
    END IF;
END