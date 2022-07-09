create database registro;
create table usuarios(idUs int not null primary key auto_increment, nombre varchar(50),apellido varchar(50)
,correo varchar(50), contra varchar(30)
);
insert into usuarios(nombre,apellido,correo,contra)values
("alvaro","ku","alvaroku123@gmail.com","12345");