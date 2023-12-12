create database localizate;
use localizate;

create table RegistroUsuario (
    ID int primary key auto_increment,
    Nombre varchar(100),
    ApellidoPaterno varchar(50),
    ApellidoMaterno varchar(50),
    Email varchar(100) unique,
    Password varchar(200)
);

create table reg_usu(
	ID int,
    Nombre varchar(100),
    Registro datetime
);

create trigger RegistroUsuario_AI 
after insert on RegistroUsuario
for each row
insert into reg_usu (ID, Nombre, Registro)
values (new.ID, new.Nombre, now());

create table RegistroNegocio (
    ID int primary key auto_increment,
    Nombre varchar(100),
    Direccion varchar(100),
    Telefono varchar(15),
    Email varchar(100) unique,
    Password varchar(200),
    Categoria varchar(50)
);
        
create table reg_neg(
	ID int,
    Nombre varchar(100),
    Registro datetime
);

create trigger RegistroNegocio_AI 
after insert on RegistroNegocio
for each row
insert into reg_neg (ID, Nombre, Registro)
values (new.ID, new.Nombre, now());

create table platillos (
    id int primary key auto_increment,
    nombre varchar(100) not null,
    descripcion text,
    precio decimal(10, 2) not null
);
        
create table reg_plat(
	id int,
    nombre varchar(100),
    registro datetime
);

create trigger platillos_AI 
after insert on platillos
for each row
insert into reg_plat (id, nombre, registro)
values (new.id, new.nombre, now());