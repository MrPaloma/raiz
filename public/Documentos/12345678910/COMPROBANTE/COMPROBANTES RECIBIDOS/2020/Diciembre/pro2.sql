-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2020 at 03:47 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro2`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id_admi_user` int(11) NOT NULL AUTO_INCREMENT,
  `RUC` char(11) NOT NULL,
  `DNI` char(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ape_paterno` varchar(50) NOT NULL,
  `ape_materno` varchar(50) NOT NULL,
  `celular` char(9) DEFAULT NULL,
  `genero` char(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_admi_user`,`RUC`,`DNI`),
  UNIQUE KEY `id_admi_user` (`id_admi_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`id_admi_user`, `RUC`, `DNI`, `nombre`, `ape_paterno`, `ape_materno`, `celular`, `genero`, `correo`, `pass`) VALUES
(1, '22222222222', '22222222', 'Ino Jhosman', 'Faustino', 'Ortega', '222222222', 'Masculino', 'onijhosman1234@hotmail.com', '$2y$10$luXOa1h98ohyyi0TMGlWquAHtXnccEXe/jcUO.mu67dTsdYQ5peA6');

-- --------------------------------------------------------

--
-- Table structure for table `adm_not`
--

DROP TABLE IF EXISTS `adm_not`;
CREATE TABLE IF NOT EXISTS `adm_not` (
  `id_admi_user` int(11) NOT NULL,
  `id_notificacion` int(11) NOT NULL,
  `leido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_admi_user`,`id_notificacion`),
  KEY `adm_not_ibfk_3` (`id_notificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_not`
--

INSERT INTO `adm_not` (`id_admi_user`, `id_notificacion`, `leido`) VALUES
(1, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `archivo`
--

DROP TABLE IF EXISTS `archivo`;
CREATE TABLE IF NOT EXISTS `archivo` (
  `codigoSubdocumento` char(10) NOT NULL,
  `idArchivo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreArchivo` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idArchivo`),
  KEY `codigoSubdocumento` (`codigoSubdocumento`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archivo`
--

INSERT INTO `archivo` (`codigoSubdocumento`, `idArchivo`, `nombreArchivo`, `fecha`) VALUES
('SD01', 1, 'Nuevo Archivo', '2010-01-15'),
('SD01', 3, '1 SYN.txt', '2010-01-15'),
('SD01', 4, 'Input1', '2010-01-15'),
('SD04', 7, 'Nuevo Archivo', '2010-02-15'),
('SD04', 8, 'Nuevo Archivo', '2010-01-15'),
('SD04', 9, 'Nuevo Archivo', '2010-02-15'),
('SD06', 10, 'Nuevo Archivo', '2010-05-15'),
('SD08', 11, 'Nuevo Archivo', '2010-09-15'),
('SD03', 12, 'Nuevo Archivo', '2019-01-15'),
('SD03', 13, '1 SYN sim.dft', '2019-01-15'),
('SD03', 14, '1 SYN.txt', '2019-01-15'),
('SD03', 15, 'Input1', '2019-01-15'),
('SD03', 16, 'LOGNORM.OUT', '2019-01-15'),
('SD03', 17, 'SUMMARY.OUT', '2019-01-15'),
('SD11', 18, 'Nuevo Archivo', '2019-07-15'),
('SD11', 24, '1 SYN sim.dft', '2019-07-15'),
('SD11', 25, '1 SYN.txt', '2019-07-15'),
('SD11', 26, 'Input1', '2019-07-15'),
('SD11', 27, 'LOGNORM.OUT', '2019-07-15'),
('SD11', 28, 'SUMMARY.OUT', '2019-07-15'),
('SD13', 29, 'Nuevo Archivo', '2019-07-15'),
('SD08', 30, 'Nuevo Archivo', '2010-01-15'),
('SD04', 31, 'Nuevo Archivo', '2012-02-15'),
('SD01', 32, 'Nuevo Archivo', '2011-01-15'),
('SD01', 33, 'color change.txt', '2010-01-15'),
('SD01', 34, 'licencias.txt', '2010-01-15'),
('SD07', 35, 'Nuevo Archivo', '2019-11-15'),
('SD07', 36, 'SDM 1.8.pl', '2019-11-15'),
('SD01', 37, 'Nuevo Archivo', '2019-11-15'),
('SD01', 38, 'paises.pl', '2019-11-15'),
('SD01', 39, 'SDM 1.8.pl', '2019-11-15'),
('SD01', 40, 'Nuevo Archivo', '2019-12-15'),
('SD01', 41, 'SE diagnostico de pc.pl', '2019-12-15'),
('SD03', 42, 'Nuevo Archivo', '2018-11-15'),
('SD03', 43, 'pexels-shadestreets-4940300.jpg', '2018-11-15'),
('SD03', 44, 'Anotación 2020-06-01 185306.png', '2018-11-15'),
('SD03', 45, 'imagen.jpg', '2018-11-15'),
('SD03', 46, 'imagen2.jpg', '2018-11-15'),
('SD03', 47, 'imagen3.jpg', '2018-11-15'),
('SD09', 48, 'Nuevo Archivo', '2019-11-15'),
('SD09', 49, 'plan.png', '2019-11-15'),
('SD09', 50, 'Anotación 2020-06-01 185306.png', '2019-11-15'),
('SD09', 51, 'imagen.jpg', '2019-11-15'),
('SD09', 52, 'imagen2.jpg', '2019-11-15'),
('SD09', 53, 'imagen3.jpg', '2019-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_clie_user` int(11) NOT NULL AUTO_INCREMENT,
  `RUC` char(11) NOT NULL,
  `DNI` char(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ape_paterno` varchar(50) NOT NULL,
  `ape_materno` varchar(50) NOT NULL,
  `celular` char(9) DEFAULT NULL,
  `genero` char(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`RUC`,`DNI`,`pass`),
  UNIQUE KEY `id_clie_user` (`id_clie_user`),
  UNIQUE KEY `DNI` (`DNI`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_clie_user`, `RUC`, `DNI`, `nombre`, `ape_paterno`, `ape_materno`, `celular`, `genero`, `direccion`, `correo`, `pass`) VALUES
(3, '09999999999', '09999999', 'dsasdsd', 'sdasda', 'sdasdasd', '888888888', 'Masculino', 'sdadasd09', 'dsad@hotmail.com', '$2y$10$NZVx/cr6IXjw7ZEz5bP.beiJnoIw5EH9y/W4W6YPVg2b22m5lkqXC'),
(1, '44444444444', '44444444', 'Juan', 'Palacios', 'asdasd', '222222222', 'Masculino', 'orea', 'jean848@hotmail.com', '$2y$10$YpTqMR4l2sLElBUEluh48uJuqwVRfSoa1.PFqrZuo51w/OGihA3p6'),
(2, '66666666666', '66666666', 'Juanita', 'De Las Rocas', 'Carmen', '666666666', 'Femenino', '65 de los moras', '65@gmail.com', '$2y$10$0pLyaoRYPcTn5gJ.EflsvujL5/BPZ5iD76OT5izgu0mp3XeJcQdaK');

-- --------------------------------------------------------

--
-- Table structure for table `cliente_distrito`
--

DROP TABLE IF EXISTS `cliente_distrito`;
CREATE TABLE IF NOT EXISTS `cliente_distrito` (
  `codigoDistrito` char(5) NOT NULL,
  `RUC` char(11) NOT NULL,
  PRIMARY KEY (`RUC`,`codigoDistrito`),
  KEY `RUC` (`RUC`),
  KEY `fk_dis_cli` (`codigoDistrito`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cliente_tema`
--

DROP TABLE IF EXISTS `cliente_tema`;
CREATE TABLE IF NOT EXISTS `cliente_tema` (
  `codigoTema` varchar(10) NOT NULL,
  `RUC` char(11) NOT NULL,
  PRIMARY KEY (`codigoTema`,`RUC`),
  KEY `RUC` (`RUC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cli_not`
--

DROP TABLE IF EXISTS `cli_not`;
CREATE TABLE IF NOT EXISTS `cli_not` (
  `RUC` char(11) NOT NULL,
  `id_notificacion` int(11) NOT NULL,
  `leido` int(11) DEFAULT NULL,
  PRIMARY KEY (`RUC`,`id_notificacion`),
  KEY `cli_not_ibfk_3` (`id_notificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cli_not`
--

INSERT INTO `cli_not` (`RUC`, `id_notificacion`, `leido`) VALUES
('44444444444', 7, 0),
('44444444444', 8, 0),
('44444444444', 9, 0),
('44444444444', 10, 0),
('44444444444', 11, 0),
('44444444444', 12, 0),
('44444444444', 13, 0),
('44444444444', 14, 0),
('44444444444', 15, 0),
('44444444444', 16, 0),
('44444444444', 17, 0),
('66666666666', 1, 0),
('66666666666', 2, 0),
('66666666666', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `codigoDepartamento` char(5) NOT NULL,
  `nombreDepartamento` varchar(250) NOT NULL,
  `codigoPostal` varchar(10) NOT NULL,
  `codigoPais` char(5) NOT NULL,
  PRIMARY KEY (`idDepartamento`),
  UNIQUE KEY `codigoDepartamento` (`codigoDepartamento`),
  KEY `Pais` (`codigoPais`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distrito`
--

DROP TABLE IF EXISTS `distrito`;
CREATE TABLE IF NOT EXISTS `distrito` (
  `idDistrito` int(11) NOT NULL AUTO_INCREMENT,
  `codigoDistrito` char(5) NOT NULL,
  `nombreDistrito` varchar(250) NOT NULL,
  `codigoProvincia` char(5) NOT NULL,
  PRIMARY KEY (`idDistrito`),
  UNIQUE KEY `codigoDistrito` (`codigoDistrito`),
  KEY `codigoProvincia` (`codigoProvincia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
CREATE TABLE IF NOT EXISTS `documento` (
  `idDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `codigoDocumento` char(10) NOT NULL,
  `nombreDocumento` varchar(250) NOT NULL,
  PRIMARY KEY (`idDocumento`),
  UNIQUE KEY `codigoDocumento` (`codigoDocumento`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documento`
--

INSERT INTO `documento` (`idDocumento`, `codigoDocumento`, `nombreDocumento`) VALUES
(1, 'D01', 'COMPROBANTES'),
(2, 'D02', 'PDT'),
(3, 'D03', 'DECLARACIONES JURADAS'),
(4, 'D04', 'ESTADOS DE CUENTA'),
(5, 'D05', 'FACTURAS'),
(6, 'D06', 'REGISTROS Y LIBROS, EXCEL, PDF Y PLE');

-- --------------------------------------------------------

--
-- Table structure for table `notificacion`
--

DROP TABLE IF EXISTS `notificacion`;
CREATE TABLE IF NOT EXISTS `notificacion` (
  `id_notificacion` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(250) DEFAULT NULL,
  `fecha_notificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_notificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notificacion`
--

INSERT INTO `notificacion` (`id_notificacion`, `tipo`, `fecha_notificacion`) VALUES
(1, 'cliente', '2019-11-27 00:01:56'),
(2, 'cliente', '2019-11-27 13:48:12'),
(3, 'cliente', '2019-11-27 13:48:12'),
(4, 'Al cliente 44444444444 le faltan 3 dias para vencer', '2019-12-15 13:54:40'),
(5, 'Al cliente 66666666666 le faltan 4 dias para vencer', '2019-12-15 13:54:40'),
(6, 'Al cliente 09999999999 le faltan 5 dias para vencer', '2019-12-15 13:54:40'),
(7, 'cliente', '2019-11-27 13:56:42'),
(8, 'cliente', '2020-08-19 16:24:09'),
(9, 'cliente', '2020-08-19 16:24:22'),
(10, 'cliente', '2020-08-19 16:24:22'),
(11, 'cliente', '2020-08-19 16:24:22'),
(12, 'cliente', '2020-08-19 16:24:22'),
(13, 'cliente', '2020-08-20 03:08:50'),
(14, 'cliente', '2020-08-20 03:09:09'),
(15, 'cliente', '2020-08-20 03:09:09'),
(16, 'cliente', '2020-08-20 03:09:09'),
(17, 'cliente', '2020-08-20 03:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `idPais` int(11) NOT NULL AUTO_INCREMENT,
  `codigoPais` char(5) NOT NULL,
  `nombrePais` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idPais`),
  UNIQUE KEY `codigoPais` (`codigoPais`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programadores`
--

DROP TABLE IF EXISTS `programadores`;
CREATE TABLE IF NOT EXISTS `programadores` (
  `DNI` char(8) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `ape_paterno` varchar(150) DEFAULT NULL,
  `ape_materno` varchar(150) DEFAULT NULL,
  `celular` varchar(150) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programadores`
--

INSERT INTO `programadores` (`DNI`, `nombre`, `ape_paterno`, `ape_materno`, `celular`, `correo`) VALUES
('12345678', 'Orlando Nicolas', 'Niño', 'Callupe', '987654321', 'sjdhaksjd@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE IF NOT EXISTS `provincia` (
  `idProvincia` int(11) NOT NULL AUTO_INCREMENT,
  `codigoProvincia` char(5) NOT NULL,
  `nombreProvincia` varchar(250) NOT NULL,
  `codigoDepartamento` char(5) NOT NULL,
  PRIMARY KEY (`idProvincia`),
  UNIQUE KEY `codigoProvincia` (`codigoProvincia`),
  KEY `Departamento` (`codigoDepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `repositorio`
--

DROP TABLE IF EXISTS `repositorio`;
CREATE TABLE IF NOT EXISTS `repositorio` (
  `idArchivo` int(11) NOT NULL,
  `RUC` char(11) NOT NULL,
  PRIMARY KEY (`RUC`,`idArchivo`),
  KEY `idArchivo` (`idArchivo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repositorio`
--

INSERT INTO `repositorio` (`idArchivo`, `RUC`) VALUES
(1, '44444444444'),
(3, '44444444444'),
(4, '44444444444'),
(8, '44444444444'),
(9, '44444444444'),
(10, '44444444444'),
(11, '44444444444'),
(12, '44444444444'),
(13, '44444444444'),
(14, '44444444444'),
(15, '44444444444'),
(16, '44444444444'),
(17, '44444444444'),
(18, '44444444444'),
(24, '44444444444'),
(25, '44444444444'),
(26, '44444444444'),
(27, '44444444444'),
(28, '44444444444'),
(29, '44444444444'),
(30, '44444444444'),
(31, '44444444444'),
(32, '44444444444'),
(33, '44444444444'),
(34, '44444444444'),
(35, '66666666666'),
(36, '66666666666'),
(37, '66666666666'),
(38, '66666666666'),
(39, '66666666666'),
(40, '44444444444'),
(41, '44444444444'),
(42, '44444444444'),
(43, '44444444444'),
(44, '44444444444'),
(45, '44444444444'),
(46, '44444444444'),
(47, '44444444444'),
(48, '44444444444'),
(49, '44444444444'),
(50, '44444444444'),
(51, '44444444444'),
(52, '44444444444'),
(53, '44444444444');

-- --------------------------------------------------------

--
-- Table structure for table `subdocumento`
--

DROP TABLE IF EXISTS `subdocumento`;
CREATE TABLE IF NOT EXISTS `subdocumento` (
  `codigoDocumento` char(10) NOT NULL,
  `idSubdocumento` int(11) NOT NULL AUTO_INCREMENT,
  `codigoSubdocumento` char(10) NOT NULL,
  `nombreSubdocumento` varchar(250) NOT NULL,
  PRIMARY KEY (`idSubdocumento`),
  UNIQUE KEY `codigoSubdocumento` (`codigoSubdocumento`),
  KEY `codigoDocumento` (`codigoDocumento`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdocumento`
--

INSERT INTO `subdocumento` (`codigoDocumento`, `idSubdocumento`, `codigoSubdocumento`, `nombreSubdocumento`) VALUES
('D01', 1, 'SD01', 'COMPROBANTES RECIBIDOS'),
('D01', 2, 'SD02', 'COMPROBANTES GUARDADOS'),
('D01', 3, 'SD03', 'COMPROBANTES REGISTRADOS'),
('D02', 4, 'SD04', 'PDT621 1662'),
('D02', 5, 'SD05', 'PDT621'),
('D03', 6, 'SD06', 'DJ'),
('D03', 7, 'SD07', 'DJA'),
('D04', 8, 'SD08', 'ESTADO DE CUENTA BCP'),
('D04', 9, 'SD09', 'ESTADO DE CUENTA DE DETRACCIONES'),
('D05', 10, 'SD10', 'FACTURAS EMITIDAS'),
('D06', 11, 'SD11', 'TXT'),
('D06', 12, 'SD12', 'REPORTE DE INFORMACION CONSISTENTE'),
('D06', 13, 'SD13', 'CONSTANCIA DE RECEPCION'),
('D06', 14, 'SD14', 'XPLE'),
('D06', 15, 'SD15', 'REGISTROS LIBROS Y EXCEL');

-- --------------------------------------------------------

--
-- Table structure for table `sunat`
--

DROP TABLE IF EXISTS `sunat`;
CREATE TABLE IF NOT EXISTS `sunat` (
  `id_sunat` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` date DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `digito` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_sunat`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sunat`
--

INSERT INTO `sunat` (`id_sunat`, `periodo`, `fecha_vencimiento`, `digito`) VALUES
(1, '2019-10-19', '2019-11-15', '0'),
(2, '2019-10-19', '2019-11-18', '1'),
(3, '2019-10-19', '2019-11-19', '2'),
(4, '2019-10-19', '2019-11-19', '3'),
(5, '2019-10-19', '2019-11-20', '4'),
(6, '2019-10-19', '2019-11-20', '5'),
(7, '2019-10-19', '2019-11-21', '6'),
(8, '2019-10-19', '2019-11-21', '7'),
(9, '2019-10-19', '2019-11-22', '8'),
(10, '2019-10-19', '2019-11-22', '9'),
(11, '2019-11-19', '2019-12-13', '0'),
(12, '2019-11-19', '2019-12-16', '1'),
(13, '2019-11-19', '2019-12-17', '2'),
(14, '2019-11-19', '2019-12-17', '3'),
(15, '2019-11-19', '2019-12-18', '4'),
(16, '2019-11-19', '2019-12-18', '5'),
(17, '2019-11-19', '2019-12-19', '6'),
(18, '2019-11-19', '2019-12-19', '7'),
(19, '2019-11-19', '2019-12-20', '8'),
(20, '2019-11-19', '2019-12-20', '9'),
(21, '2019-12-19', '2020-01-15', '0'),
(22, '2019-12-19', '2020-01-16', '1'),
(23, '2019-12-19', '2020-01-17', '2'),
(24, '2019-12-19', '2020-01-17', '3'),
(25, '2019-12-19', '2020-01-20', '4'),
(26, '2019-12-19', '2020-01-20', '5'),
(27, '2019-12-19', '2020-01-21', '6'),
(28, '2019-12-19', '2020-01-21', '7'),
(29, '2019-12-19', '2020-01-22', '8'),
(30, '2019-12-19', '2020-01-22', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

DROP TABLE IF EXISTS `tema`;
CREATE TABLE IF NOT EXISTS `tema` (
  `idTema` int(11) NOT NULL AUTO_INCREMENT,
  `codigoTema` varchar(10) NOT NULL,
  `Tema` varchar(250) NOT NULL,
  PRIMARY KEY (`codigoTema`),
  UNIQUE KEY `idTema` (`idTema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adm_not`
--
ALTER TABLE `adm_not`
  ADD CONSTRAINT `adm_not_ibfk_2` FOREIGN KEY (`id_admi_user`) REFERENCES `administrador` (`id_admi_user`),
  ADD CONSTRAINT `adm_not_ibfk_3` FOREIGN KEY (`id_notificacion`) REFERENCES `notificacion` (`id_notificacion`);

--
-- Constraints for table `archivo`
--
ALTER TABLE `archivo`
  ADD CONSTRAINT `archivo_ibfk_1` FOREIGN KEY (`codigoSubdocumento`) REFERENCES `subdocumento` (`codigoSubdocumento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cliente_distrito`
--
ALTER TABLE `cliente_distrito`
  ADD CONSTRAINT `fk_cli_dis` FOREIGN KEY (`RUC`) REFERENCES `cliente` (`RUC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dis_cli` FOREIGN KEY (`codigoDistrito`) REFERENCES `distrito` (`codigoDistrito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cliente_tema`
--
ALTER TABLE `cliente_tema`
  ADD CONSTRAINT `cliente_tema_ibfk_1` FOREIGN KEY (`codigoTema`) REFERENCES `tema` (`codigoTema`),
  ADD CONSTRAINT `cliente_tema_ibfk_2` FOREIGN KEY (`RUC`) REFERENCES `cliente` (`RUC`);

--
-- Constraints for table `cli_not`
--
ALTER TABLE `cli_not`
  ADD CONSTRAINT `cli_not_ibfk_2` FOREIGN KEY (`RUC`) REFERENCES `cliente` (`RUC`),
  ADD CONSTRAINT `cli_not_ibfk_3` FOREIGN KEY (`id_notificacion`) REFERENCES `notificacion` (`id_notificacion`);

--
-- Constraints for table `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `fk_pais_dpto` FOREIGN KEY (`codigoPais`) REFERENCES `pais` (`codigoPais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `distrito`
--
ALTER TABLE `distrito`
  ADD CONSTRAINT `fk_provincia_distrito` FOREIGN KEY (`codigoProvincia`) REFERENCES `provincia` (`codigoProvincia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `fk_dpto_prov` FOREIGN KEY (`codigoDepartamento`) REFERENCES `departamento` (`codigoDepartamento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `repositorio`
--
ALTER TABLE `repositorio`
  ADD CONSTRAINT `repositorio_ibfk_1` FOREIGN KEY (`idArchivo`) REFERENCES `archivo` (`idArchivo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `repositorio_ibfk_2` FOREIGN KEY (`RUC`) REFERENCES `cliente` (`RUC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subdocumento`
--
ALTER TABLE `subdocumento`
  ADD CONSTRAINT `fk_doc_sub` FOREIGN KEY (`codigoDocumento`) REFERENCES `documento` (`codigoDocumento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
