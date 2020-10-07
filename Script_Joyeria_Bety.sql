CREATE DATABASE IF NOT EXISTS joyeria_Bety;
USE joyeria_Bety;

CREATE TABLE Grupo(
 numGrupo INT AUTO_INCREMENT NOT NULL,
 descripcion VARCHAR(50) NOT NULL,
 PRIMARY KEY (numGrupo)
)
ENGINE=INNODB;

CREATE TABLE Proveedor(
ID_proveedor INT AUTO_INCREMENT  NOT NULL,
RFC_proveedor CHAR(13),
nombreProveedor VARCHAR(50) NOT NULL,
telefono CHAR(10) NOT NULL,
correo VARCHAR(50) NOT NULL,
PRIMARY KEY (ID_proveedor)
)
ENGINE=INNODB;

CREATE TABLE Productos(
codigoProducto INT AUTO_INCREMENT NOT NULL,
ID_proveedor INT NOT NULL,
descripcion VARCHAR(50) NOT NULL,
imagen VARCHAR(100) NOT NULL,
existencia INT UNSIGNED NOT NULL,
precioVenta REAL UNSIGNED NOT NULL,
numGrupo INT NOT NULL,
PRIMARY KEY (codigoProducto),
CONSTRAINT FK_proveedores FOREIGN KEY (ID_proveedor) REFERENCES Proveedor (ID_proveedor),
CONSTRAINT FK_grupo FOREIGN KEY (numGrupo) REFERENCES grupo (numGrupo)
)
ENGINE=INNODB;

CREATE TABLE Vendedor(
ID_vendedor INT AUTO_INCREMENT NOT NULL,
nombreVendedor VARCHAR(50) NOT NULL,
telefono CHAR(10) NOT NULL,
correo VARCHAR(50) NOT NULL,
direccion TINYTEXT NOT NULL,
PRIMARY KEY (ID_vendedor)
)
ENGINE=INNODB;

INSERT INTO Grupo (descripcion) VALUES
('Precios de $100 a $199'),
('Precios de $200 a $299'),
('Precios de $300 a $399'),
('Precios de $400 a $499'),
('Precios de $500 a $599'),
('Precios de $600 a $699'),
('Precios de $700 a $799'),
('Precios de $800 a $899'),
('Precios de $900 a $999'),
('Precios de $1000 a $1099'),
('Precios de $1100 a $1199'),
('Precios de $1200 a $1299'),
('Precios de $1300 a $1399'),
('Precios de $1400 a $1500');