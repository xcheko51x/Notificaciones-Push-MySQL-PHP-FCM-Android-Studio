CREATE DATABASE notificaciones;

USE notificaciones;

CREATE TABLE users(
	id int primary key auto_increment,
	Token varchar(200) not null
);