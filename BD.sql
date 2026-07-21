CREATE DATABASE IF NOT EXISTS estudiantes;
USE estudiantes;

CREATE TABLE estudiantes(
cui int auto_increment primary key,
nombre varchar(255) not null,
edad int (8) not null,
Fecha_nacimiento date not null,
residencia varchar(255) not null,
telefono int (25) not null,
telefono_encargado1 int(25) not null, 
telefono_encargado2 int(25) not null
);

