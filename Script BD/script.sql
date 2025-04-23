create database if not exists parqueadero;

use parqueadero;

create table espacio_parqueadero
(
    idEspacio int auto_increment
        primary key,
    Gancho    varchar(3)  not null,
    Estado    varchar(10) not null
);

create table propietarios
(
    idPropietarios int auto_increment
        primary key,
    Nombre         varchar(30) not null,
    Apellido       varchar(30) not null,
    Cedula         varchar(12) not null,
    Telefono       varchar(12) not null,
    Email          varchar(50) null,
    Torre          varchar(2)  not null,
    Apartamento    varchar(3)  not null,
    constraint Cedula
        unique (Cedula)
);

create table bicicletas
(
    idBicicleta    int auto_increment
        primary key,
    idPropietarios int         not null,
    Marca          varchar(20) not null,
    Modelo         varchar(20) not null,
    Color          varchar(20) not null,
    N_serie        varchar(20) not null,
    idEspacio      int         not null,
    constraint bicicletas_ibfk_1
        foreign key (idPropietarios) references propietarios (idPropietarios),
    constraint bicicletas_ibfk_2
        foreign key (idEspacio) references espacio_parqueadero (idEspacio)
);

create index idEspacio
    on bicicletas (idEspacio);

create index idPropietarios
    on bicicletas (idPropietarios);


