create database BD_120;

use BD_120;

CREATE TABLE Roles
(
  id_rol int(11) auto_increment primary key,	
  nombre varchar(20) not null,
  Descripcion varchar(30)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into Roles (id_rol, nombre, Descripcion) 
values(1,'Admin','Administrador'),
(2,'Perso','Persona'),
(3,'Super','Supervisor');


CREATE TABLE persona
 (
  Num_Doc_P varchar(30) primary key,
  Tipo_Documento enum('Registro Civil','Tarjeta de Identidad', 'Cedula Ciudadania','Cedula Extranjeria'),
  Nombre varchar(50) NOT NULL,
  Apellidos_P varchar(20) NOT NULL,
  Fecha_Nac date not null,
  Sexo enum('M','F') not null,
  Correo varchar(50) not null,
  Telefono varchar(12) NOT NULL,
  Direccion_Res varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into persona (Num_Doc_P, Tipo_Documento, Nombre, Apellidos_P,Fecha_Nac,Sexo,Correo,Telefono,Direccion_Res) 
values('1007146273','Cedula Ciudadania','Alex','Fuentes','1990/08/02','M','Alex@gmail.com','31010802546','Avenida 5 # 12-27'),
('1070999956','Tarjeta de Identidad','Johana','Jimenez','2000/04/10','F','Johana@gmail.com','31028222546','Carrera 4 # 10-21'),
('1003726227','Cedula Extranjeria','Lucas','Dias','1995/04/01','M','Lucas@gmail.com','3101038256','Calle 5 # 11-45');


insert into persona (Num_Doc_P, Tipo_Documento, Nombre, Apellidos_P,Fecha_Nac,Sexo,Correo,Telefono,Direccion_Res) 
values('1000133631','Cedula Ciudadania','Victor','Fuentes','1992/01/15','M','Vic@gmail.com','3123234521','Avenida 2 # 21-22');

CREATE TABLE usuario (
  Doc_usu varchar(30) NOT NULL primary key,
  Nom_usuario varchar(20) NOT NULL,
  contrasena varchar(20) not null,
  Rol int(11) not null,
  Estado bit not null default 1,
  Foto varchar(255),
  Constraint usu_per foreign key (Doc_usu) references persona(Num_Doc_P) on delete cascade on update cascade
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

alter table usuario add Constraint usu_rol foreign key (Rol) references roles(id_rol) on delete cascade on update cascade;

insert into usuario (Doc_usu, Nom_usuario,contrasena,Rol,Estado, Foto) 
values('1007146273','Alex1','0000',1,1,''),
('1070999956','Johana1','1111',2,1,''),
('1003726227','Lucas1','2222',3,1,'');

create procedure Insertar_Usuario(doc varchar(30), nom varchar(20), con varchar(20), rol int(11), est bit, img varchar(200))
insert into usuario values(doc,nom,con,rol,est,img);

call Insertar_usuario('1000133631','Victor','oooo',2,1,'');

create procedure Insertar_Rol(rol int(11), nom varchar(20), des varchar(30))
insert into roles values(rol,nom,des);

call Insertar_Rol(4,'Usuar','Usuario');

create procedure Modificar_Usuario(nomb varchar(20), cont varchar(20), rol int(11), esta bit, imag varchar(200),docu varchar(30))
UPDATE usuario SET Nom_usuario=nomb ,contrasena=cont ,Rol=rol ,Estado=esta, Foto=imag WHERE Doc_usu=docu;

call Modificar_usuario('Vic','oooo',2,1,'','1000133631');

create procedure Modificar_Rol(idr int(11), nom varchar(20), des varchar(30))
UPDATE roles SET nombre=nom ,Descripcion=des where id_rol=idr;

call Modificar_Rol(4,'Usua','Usuario');


create procedure Datos(nom varchar(20), con varchar(20))
select Nom_usuario,contrasena,persona.Nombre as n,Apellidos_P,Descripcion,Num_Doc_P,Rol from usuario 
inner join persona on Doc_usu=Num_Doc_P
inner join roles on Rol=id_rol
where Nom_usuario=nom and contrasena=con; 

call Datos('Vic','oooo');

-- drop procedure Datos;