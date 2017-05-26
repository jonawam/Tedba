create database tedba;
use tedba;

create table sucursal 
(
id_sucursal int primary key auto_increment,
direccion varchar (50),
telefono varchar(15)
);
insert into sucursal(direccion,telefono) values ('La moderna #23-B Col. Centro','1234567890');	
insert into sucursal(direccion,telefono) values ('Plaza del comercio Local 15 Zona Centro','6457546856');
insert into sucursal(direccion,telefono) values ('Diaz Ordas #83 Zona Centro','0978544232');

create table provedor
(
id_provedor int primary key auto_increment,
nombre varchar (50),
apellidos varchar (50),
telefono varchar (15),
categoria_povedor varchar(50)
);
insert into provedor(nombre,apellidos,telefono,categoria_povedor) values('Antonio','Camacho Jimenez','31524524','Micas');
insert into provedor(nombre,apellidos,telefono,categoria_povedor) values('Eduardo','Baeza Castillo','31524524','Protector');
insert into provedor(nombre,apellidos,telefono,categoria_povedor) values('Raul','Aldaco Palafox','31524524','Micas');

create table categoria 
(
id_categoria int primary key auto_increment,
nombre varchar(50),
descripcion varchar(100)
);
insert into categoria (nombre, descripcion) values('Almacenamiento','Memorias USB y demas.');
insert into categoria (nombre, descripcion) values('Protector','Protectores para celulares y tablets.');
insert into categoria (nombre, descripcion) values('Micas','Micas para celulares/tablets.');
insert into categoria (nombre, descripcion) values('Cable','Cables de todo tipo.');

create table cliente
(
id_cliente int primary key auto_increment,
nombre varchar (50),
apellido varchar(50),
numero_cliente int,
sexo varchar (10),
telefono varchar (15)
);

create table empleado 
(
id_empleado int primary key auto_increment,
nombre_empleado varchar (50),
apellido_empleado varchar(50),
sexo_empleado varchar (10),
codigo_empleado int,
telefono varchar(15),
direccion varchar(50),
id_sucursal int,
foreign key(id_sucursal) references sucursal(id_sucursal)
);

create table venta 
(
id_venta int primary key auto_increment,
folio int,
fecha datetime,
forma_pago varchar (20),
id_empleado int,
id_cliente int,
foreign key(id_empleado)references empleado(id_empleado),
foreign key(id_cliente)references cliente(id_cliente)
);

create table producto
(
id_producto int primary key auto_increment,
sku int,
codigo_barras int,
nombre varchar (50),
descripcion varchar (100),
costo float,
presio_may float,
presio_men float,
cantidad int,
id_categoria int,
id_provedor int,
id_almacen int,
foreign key (id_categoria) references categoria(id_categoria),
foreign key (id_provedor) references provedor(id_provedor),
foreign key (id_almacen) references almacen(id_almacen)
);
alter table producto add fecha date;

create table almacen
(
id_almacen int primary key auto_increment,
id_provedor int,
foreign key (id_provedor) references provedor(id_provedor)
);
alter table almacen add descripcion varchar(100);
insert into almacen(id_provedor, descripcion) values (1,'Almacen del local');
insert into almacen(id_provedor, descripcion) values (2,'Almacen de bodega');
insert into almacen(id_provedor, descripcion) values (1,'Almacen respaldo');

create table venta_detalle 
(
id_venta_detalle int primary key auto_increment,
id_venta int,
id_producto int,
cantidad int,
foreign key (id_venta) references venta(id_venta),
foreign key (id_producto) references producto(id_producto)
);

#alter table producto add id_provedor int, add foreign key (id_provedor) references provedor(id_provedor);

#alter table producto add id_almacen int, add foreign key (id_almacen) references almacen(id_almacen);



