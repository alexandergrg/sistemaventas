CREATE DATABASE bd_ventas;
USE bd_ventas;


-- Creación de Tablas 

CREATE TABLE producto (
	id int auto_increment ,
    nombre varchar (100) not null,
    precio double not null default 0,
    primary key (id)
);


CREATE TABLE ventas (
	id int auto_increment,
    cliente varchar(100) not null,
    fecha datetime not null default current_timestamp,
    primary key(id)
);

CREATE TABLE ventasdetalle(
	id int auto_increment,
    producto_id int not null references productos(id),
    ventas_id int not null references ventas(id),
    cantidad int not null,
    descuento int not null,
    primary key(id)
);

CREATE TABLE users(
	id int auto_increment,
    email varchar(100) not null,
    usuario varchar(50) not null,
    pass varchar(256) not null,
    estado int default 0,
    privilegio varchar(50) not null,
    primary key(id)
);

