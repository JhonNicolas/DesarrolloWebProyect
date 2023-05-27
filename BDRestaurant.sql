create database Restaurant;
use Restaurant;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 12:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `COD_admin` varchar(10) NOT NULL,
  `nombre_admin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`COD_admin`, `nombre_admin`) VALUES
('AD001', 'Rey Perseo'),
('AD002', 'Efren Antonio'),
('AD003', 'Jhon ');

--
-- Triggers `administrador`
--
DELIMITER $$
CREATE TRIGGER `generar_codigo` BEFORE INSERT ON `administrador` FOR EACH ROW begin
	declare siguiente_codigo int;
    set siguiente_codigo = (select ifnull(max(convert(substring(COD_admin,3), signed integer)),0)from administrador) + 1;
    set new.COD_admin = concat('AD', LPAD(siguiente_codigo, 3,'0'));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `articulo`
--

CREATE TABLE `articulo` (
  `ID_Articulo` varchar(10) NOT NULL,
  `COD_admin` varchar(11) DEFAULT NULL,
  `nom_articulo` varchar(225) DEFAULT NULL,
  `cantidad` varchar(20) DEFAULT NULL,
  `Encargado` varchar(225) DEFAULT NULL,
  `precioA` varchar(10) DEFAULT NULL,
  `Proveedor` varchar(200) DEFAULT NULL,
  `Cproducto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articulo`
--

INSERT INTO `articulo` (`ID_Articulo`, `COD_admin`, `nom_articulo`, `cantidad`, `Encargado`, `precioA`, `Proveedor`, `Cproducto`) VALUES
('AR001', NULL, 'Chicha', '5 kg', 'Rey Perseo', '10', 'Mercado Yarinacocha', 'Ingrediente'),
('AR002', NULL, 'maracuya', '5 kg', 'Rey Perseo', '10', 'Mercado Yarinacocha', 'Ingrediente'),
('AR003', NULL, 'gaseosa', '5 kg', 'Rey Perseo', '10', 'Tottus', 'Ingrediente');

--
-- Triggers `articulo`
--
DELIMITER $$
CREATE TRIGGER `generar_codigo_a` BEFORE INSERT ON `articulo` FOR EACH ROW begin
	declare siguiente_codigo_a int;
    set siguiente_codigo_a = (select ifnull(max(convert(substring(ID_Articulo,3), signed integer)),0)from Articulo) + 1;
    set new.ID_Articulo= concat('AR', LPAD(siguiente_codigo_a, 3,'0'));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE `cargo` (
  `ID_cargo` varchar(10) NOT NULL,
  `nombre_cargo` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`ID_cargo`, `nombre_cargo`) VALUES
('TR001', 'Administrador'),
('TR002', 'Chef'),
('TR003', 'Mesero'),
('TR004', 'Limpieza');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `ID_cli` varchar(10) NOT NULL,
  `COD_admin` varchar(11) DEFAULT NULL,
  `nom_cli` varchar(225) DEFAULT NULL,
  `ape_cli` varchar(225) DEFAULT NULL,
  `correo` varchar(225) DEFAULT NULL,
  `contra` varchar(225) DEFAULT NULL,
  `DNI_cli` int(11) DEFAULT NULL,
  `cell_cli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`ID_cli`, `COD_admin`, `nom_cli`, `ape_cli`, `correo`, `contra`, `DNI_cli`, `cell_cli`) VALUES
('CL001', NULL, 'Andrea Lucero', 'Rojas Sebastian', 'Andr98@gmail.com', 'Andr98', 79762935, 987688987),
('CL002', NULL, 'Renzo', 'Renzo2', 'renzo@gmail.com', '123', 7456475, 987987978),
('CL003', NULL, 'Tania', 'Tania2', 'tania@gmail.com', '123', 87457878, 2147483647);

--
-- Triggers `clientes`
--
DELIMITER $$
CREATE TRIGGER `generar_codigo_cli` BEFORE INSERT ON `clientes` FOR EACH ROW begin
	declare siguiente_codigo_cli int;
    set siguiente_codigo_cli = (select ifnull(max(convert(substring(ID_cli,3), signed integer)),0)from clientes) + 1;
    set new.ID_cli= concat('CL', LPAD(siguiente_codigo_cli, 3,'0'));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `compra`
--

CREATE TABLE `compra` (
  `ID_compra` varchar(10) NOT NULL,
  `COD_admin` varchar(10) DEFAULT NULL,
  `ID_prod` varchar(10) DEFAULT NULL,
  `precio_prod` varchar(10) DEFAULT NULL,
  `idProv` varchar(220) DEFAULT NULL,
  `ID_trab` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `compra`
--
DELIMITER $$
CREATE TRIGGER `generar_codigo_co` BEFORE INSERT ON `compra` FOR EACH ROW begin
	declare siguiente_codigo_co int;
    set siguiente_codigo_co = (select ifnull(max(convert(substring(ID_compra,3), signed integer)),0)from compra) + 1;
    set new.ID_compra= concat('CO', LPAD(siguiente_codigo_co, 3,'0'));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cproducto`
--

CREATE TABLE `cproducto` (
  `ID_cat` varchar(10) NOT NULL,
  `nombre_cat` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cproducto`
--

INSERT INTO `cproducto` (`ID_cat`, `nombre_cat`) VALUES
('CP001', 'Material de Cocina'),
('CP002', 'Ingredientes'),
('CP003', 'Material de Limpieza');

-- --------------------------------------------------------

--
-- Table structure for table `plato`
--

CREATE TABLE `plato` (
  `ID_plato` varchar(10) NOT NULL,
  `COD_admin` varchar(11) DEFAULT NULL,
  `nom_plato` varchar(225) DEFAULT NULL,
  `descrip_plato` varchar(225) DEFAULT NULL,
  `precioP` varchar(10) DEFAULT NULL,
  `imagen` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `plato`
--
DELIMITER $$
CREATE TRIGGER `generar_codigo_pl` BEFORE INSERT ON `plato` FOR EACH ROW begin
	declare siguiente_codigo_pl int;
    set siguiente_codigo_pl = (select ifnull(max(convert(substring(ID_plato,3), signed integer)),0)from plato) + 1;
    set new.ID_plato= concat('PL', LPAD(siguiente_codigo_pl, 3,'0'));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `idProv` varchar(10) NOT NULL,
  `nombreProv` varchar(50) NOT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `RUC` varchar(11) NOT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `COD_admin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`idProv`, `nombreProv`, `correo`, `RUC`, `telefono`, `direccion`, `COD_admin`) VALUES
('PR001', 'Tiendita Luz', 'luz@gmail.com', '787894', '994497979', 'Jr.Luz del luz', NULL),
('PR002', 'Bazar Pepe', 'pepin@gmail.com', '48489498', '997798787', 'Jr.Pepe de los pepes', NULL),
('PR003', 'Bazar Pepe', 'pepin@gmail.com', '48489498', '997798787', 'Jr.Pepe de los pepes', NULL),
('PR004', 'Bazar Pepe', 'luchito@gmail.com', '77878878787', '787', '78', NULL),
('PR005', 'Bazar Pepe', 'amber@gmail.com', '78888888888', '788888888', 'Av.Mar de los mares', NULL);

--
-- Triggers `proveedores`
--
DELIMITER $$
CREATE TRIGGER `generar_codigop` BEFORE INSERT ON `proveedores` FOR EACH ROW begin
	declare siguiente_codigop int;
    set siguiente_codigop = (select ifnull(max(convert(substring(idProv,3), signed integer)),0)from proveedores) + 1;
    set new.idProv = concat('PR', LPAD(siguiente_codigop, 3,'0'));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `trabajadores`
--

CREATE TABLE `trabajadores` (
  `ID_trab` varchar(10) NOT NULL,
  `COD_admin` varchar(10) DEFAULT NULL,
  `nom_trab` varchar(225) DEFAULT NULL,
  `ape_trab` varchar(225) DEFAULT NULL,
  `correo` varchar(225) DEFAULT NULL,
  `contra` varchar(225) DEFAULT NULL,
  `dni_trab` int(11) DEFAULT NULL,
  `numero_trab` int(11) DEFAULT NULL,
  `cargo_trab` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trabajadores`
--

INSERT INTO `trabajadores` (`ID_trab`, `COD_admin`, `nom_trab`, `ape_trab`, `correo`, `contra`, `dni_trab`, `numero_trab`, `cargo_trab`) VALUES
('TR001', NULL, 'Rey Perseo', 'Cardenas Sanchez', 'PerseoRey125@gmail.com', 'perseo213', 71356842, 959878813, 'administrador'),
('TR002', NULL, 'Alberto', 'Perez Sanchez', 'Alberto325@gmail.com', 'Albert12', 68593562, 959321654, 'mesero'),
('TR003', NULL, 'Juan', 'Perez', 'luchito@gmail.com', '123', 70542365, 2147483647, 'Mesero'),
('TR005', NULL, 'Luis', 'Luis2', 'luchito@gmail.com', '123', 787877, 8787878, 'TR002'),
('TR006', NULL, 'Amber', 'Amber2', 'amber@gmail.com', '1234', 8745612, 963963963, 'TR003'),
('TR007', NULL, 'Juanito', 'Juanez', 'juancito@gmail.com', '123', 7042516, 2147483647, 'TR002'),
('TR008', NULL, 'Oscarin', 'oscarin', 'oscarin@gmail.com', '123', 789945646, 979787988, 'TR003');

--
-- Triggers `trabajadores`
--
DELIMITER $$
CREATE TRIGGER `generar_codigo_t` BEFORE INSERT ON `trabajadores` FOR EACH ROW begin
	declare siguiente_codigo_t int;
    set siguiente_codigo_t = (select ifnull(max(convert(substring(ID_trab,3), signed integer)),0)from trabajadores) + 1;
    set new.ID_trab= concat('TR', LPAD(siguiente_codigo_t, 3,'0'));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

CREATE TABLE `venta` (
  `ID_venta` varchar(10) NOT NULL,
  `COD_admin` varchar(11) DEFAULT NULL,
  `ID_plato` varchar(225) DEFAULT NULL,
  `precio` varchar(10) DEFAULT NULL,
  `cliente` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `venta`
--
DELIMITER $$
CREATE TRIGGER `generar_codigo_v` BEFORE INSERT ON `venta` FOR EACH ROW begin
	declare siguiente_codigo_v int;
    set siguiente_codigo_v = (select ifnull(max(convert(substring(ID_venta,3), signed integer)),0)from venta) + 1;
    set new.ID_venta= concat('VE', LPAD(siguiente_codigo_v, 3,'0'));
end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`COD_admin`);

--
-- Indexes for table `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`ID_Articulo`),
  ADD KEY `COD_admin` (`COD_admin`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`ID_cargo`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_cli`),
  ADD KEY `COD_admin` (`COD_admin`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`ID_compra`),
  ADD KEY `idProv` (`idProv`);

--
-- Indexes for table `cproducto`
--
ALTER TABLE `cproducto`
  ADD PRIMARY KEY (`ID_cat`);

--
-- Indexes for table `plato`
--
ALTER TABLE `plato`
  ADD PRIMARY KEY (`ID_plato`),
  ADD KEY `COD_admin` (`COD_admin`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProv`),
  ADD KEY `COD_admin` (`COD_admin`);

--
-- Indexes for table `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`ID_trab`),
  ADD KEY `COD_admin` (`COD_admin`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`ID_venta`),
  ADD KEY `COD_admin` (`COD_admin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`COD_admin`) REFERENCES `administrador` (`COD_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`COD_admin`) REFERENCES `administrador` (`COD_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idProv`) REFERENCES `proveedores` (`idProv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plato`
--
ALTER TABLE `plato`
  ADD CONSTRAINT `plato_ibfk_1` FOREIGN KEY (`COD_admin`) REFERENCES `administrador` (`COD_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`COD_admin`) REFERENCES `administrador` (`COD_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD CONSTRAINT `trabajadores_ibfk_1` FOREIGN KEY (`COD_admin`) REFERENCES `administrador` (`COD_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`COD_admin`) REFERENCES `administrador` (`COD_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

