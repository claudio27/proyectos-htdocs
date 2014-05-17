create table usuario(
    Id_usuario int(11) not null auto_increment,
    Login varchar(10) not null,
    Pass varchar(10) not null,
    Nombre varchar(20) not null,
    Tipo int,
    Rut varchar(10),
    Direccion varchar(15),
    primary key (Id_usuario)
);

create table vuelo(
    Id_vuelo int(11) not null auto_increment,
    Fecha date,
    Hora  time,
    Destino varchar(15),
    Origen varchar(15),
    Valor int,
    Capacidad int,
    primary key (Id_vuelo)

);

create table usuario_vuelo(

    Id_viaje int,
    Id_usuario int,
    Asiento int
);

alter table usuario_vuelo add constraint fk_vuelo
foreign key(Id_viaje) references vuelo(Id_vuelo);

alter table usuario_vuelo add constraint fk_usuario
foreign key(Id_usuario) references usuario(Id_usuario);


insert into vuelo(Fecha, Hora, Destino, Origen, Valor, Capacidad)
              value ('2013/01/13','20:00:00',"Pto Mont","Santiago", 20000, 50),
                    ('2013/06/12','20:00:00',"Valdivia","Santiago", 20000, 50),
                    ('2013/05/07','20:00:00',"San Pedro","Santiago", 84000, 50),
                    ('2013/03/10','20:00:00',"Punta Arenas","Santiago", 70000, 50);




select * from vuelo;

drop vuelo
