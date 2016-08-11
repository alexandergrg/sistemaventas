-- Procedimientos almacenados
	-- Usuarios(users)
CREATE PROCEDURE registrar(
	-- Values o Valores pasados desde el front-end
	-- _id int ,
	_email varchar(100) ,
	_usuario varchar(50) ,
	_pass varchar(256) ,
	-- estado int default 0, este parametro no se ingresa por que el usuario
	-- por defecto se crea estado inactivo
	_privilegio varchar(50)
	)
	INSERT INTO users(email,usuario,pass,privilegio)
	VALUES (_email,_usuario,_pass,_privilegio);

-- LLamada de un procedimiento almacenado
-- CALL registrar('alexandergrg@hotmail.com','admin','123','administrador');

SELECT * FROM users;
-- DESCRIBE ventas;


CREATE PROCEDURE newVenta(_cliente varchar (100))
INSERT INTO ventas (cliente,fecha) values(_cliente, now());
SELECT * FROM ventas;


SELECT * FROM ventas;

DESCRIBE users;

CREATE PROCEDURE login(
		_email  varchar(100),
		_pass varchar(256)
		)
SELECT * FROM users WHERE email = _email AND pass = _pass;

CALL login('alexandergrg@hotmail.com','123');