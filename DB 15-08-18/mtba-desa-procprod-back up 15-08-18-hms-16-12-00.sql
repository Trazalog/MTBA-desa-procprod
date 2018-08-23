-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2018 a las 16:11:49
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mtba-desa-procprod`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abmdeposito`
--

CREATE TABLE `abmdeposito` (
  `depositoId` int(11) NOT NULL,
  `depositodescrip` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `id_provincial` int(11) DEFAULT NULL,
  `id_localidad` int(11) DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL,
  `GPS` varchar(255) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `abmdeposito`
--

INSERT INTO `abmdeposito` (`depositoId`, `depositodescrip`, `direccion`, `id_provincial`, `id_localidad`, `id_pais`, `GPS`, `id_empresa`) VALUES
(1, 'Deposito Macromin', '0', 1, 1, 1, 'ddd', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abmproveedores`
--

CREATE TABLE `abmproveedores` (
  `provid` int(10) NOT NULL,
  `provnombre` varchar(255) DEFAULT NULL,
  `provcuit` varchar(50) DEFAULT NULL,
  `provdomicilio` varchar(255) DEFAULT NULL,
  `provtelefono` varchar(50) DEFAULT NULL,
  `provmail` varchar(100) DEFAULT NULL,
  `provestado` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `abmproveedores`
--

INSERT INTO `abmproveedores` (`provid`, `provnombre`, `provcuit`, `provdomicilio`, `provtelefono`, `provmail`, `provestado`) VALUES
(3, 'mauricio Perez', '2333698', 'dddd', 'permauricio@gmail.com', 'permauricio@gmail.com', '1'),
(4, 'Juan perez', '233333', '4444', '4444', '444', '1'),
(10, 'Proveedor test', '12346', 'calle 1', '456456', 'hugo@gmail.com', '8'),
(12, 'Trackmar', '54545', 'zvsjvss', '2644032457', 'hggffh@hdbhsd', '8'),
(13, 'Macromin S.A', '11111111111', 'jhvugcgv', '4311250', 'macromin@macromin.com', '8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admcredits`
--

CREATE TABLE `admcredits` (
  `crdId` int(11) NOT NULL,
  `crdDescription` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `crdDate` datetime DEFAULT NULL,
  `crdDebe` decimal(10,2) DEFAULT NULL,
  `crdHaber` decimal(10,2) DEFAULT NULL,
  `crdNote` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cliId` int(11) NOT NULL,
  `usrId` int(11) NOT NULL,
  `saleId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admcredits`
--

INSERT INTO `admcredits` (`crdId`, `crdDescription`, `crdDate`, `crdDebe`, `crdHaber`, `crdNote`, `cliId`, `usrId`, `saleId`) VALUES
(96, 'Importe venta 21', '2016-05-17 18:15:03', '1540.00', '0.00', '', 15, 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admcustomerpreferences`
--

CREATE TABLE `admcustomerpreferences` (
  `cstprefId` int(11) NOT NULL,
  `sfamId` int(11) NOT NULL,
  `cliId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admcustomers`
--

CREATE TABLE `admcustomers` (
  `cliId` int(11) NOT NULL,
  `cliName` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cliLastName` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cliDni` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cliDateOfBirth` date DEFAULT NULL,
  `cliNroCustomer` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cliAddress` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cliPhone` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cliMovil` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cliEmail` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cliImagePath` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `zonaId` int(11) DEFAULT NULL,
  `cliDay` int(11) DEFAULT '30',
  `cliColor` varchar(7) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admcustomers`
--

INSERT INTO `admcustomers` (`cliId`, `cliName`, `cliLastName`, `cliDni`, `cliDateOfBirth`, `cliNroCustomer`, `cliAddress`, `cliPhone`, `cliMovil`, `cliEmail`, `cliImagePath`, `zonaId`, `cliDay`, `cliColor`, `estado`) VALUES
(20, 'CERRO VANGUARDIA SA', 'CERRO SA', '61872532', '2000-01-01', NULL, 'ZAPIOLA 331 - RIO GALLEGOS SANTA CRUZ', '', '', '', NULL, 16, 29, NULL, 'C'),
(21, 'Hugo', 'GALLARDO', '13216546', '0000-00-00', NULL, 'calle 13', '15555555', '422222', '', NULL, 12, 1, NULL, 'AN'),
(22, 'Hugo', 'Gallardo', '123113', '0000-00-00', NULL, 'calle del cliente', '42222222', '15555555', '15555555', NULL, 12, 1, NULL, 'AN'),
(23, 'Hugo', 'Gallardo', '123546', '2017-08-07', NULL, 'calle 1', '422222', '1555555', '1555555', NULL, 12, 1, NULL, 'AN'),
(24, 'dd', 'dd', '3333', '2018-03-09', NULL, 'sadas', '', '', '', NULL, 10, 1, NULL, 'AN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admproducts`
--

CREATE TABLE `admproducts` (
  `prodId` int(11) NOT NULL,
  `prodCode` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `prodDescription` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `prodPrice` decimal(10,2) NOT NULL,
  `prodMargin` int(11) NOT NULL,
  `prodImg1` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prodImg2` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prodImg3` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prodImg4` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prodImg5` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prodStatus` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `sfamId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admproducts`
--

INSERT INTO `admproducts` (`prodId`, `prodCode`, `prodDescription`, `prodPrice`, `prodMargin`, `prodImg1`, `prodImg2`, `prodImg3`, `prodImg4`, `prodImg5`, `prodStatus`, `sfamId`) VALUES
(8, '1', 'Taladro percutor 10mm', '500.00', 20, '8_1.png', '8_2.png', '8_3.png', '8_4.png', NULL, 'AC', 14),
(9, '2', 'Microondas Philips', '700.00', 10, '9_1.png', '9_2.png', '9_3.png', '9_4.png', NULL, 'AC', 10),
(10, '3', 'Sillas Plásticas x 6', '800.00', 20, '10_1.png', '10_2.png', '10_3.png', '10_4.png', NULL, 'AC', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admsales`
--

CREATE TABLE `admsales` (
  `saleId` int(11) NOT NULL,
  `cliId` int(11) DEFAULT NULL,
  `saleDate` datetime DEFAULT NULL,
  `saleEstado` varchar(2) COLLATE utf8_spanish_ci DEFAULT '',
  `usrId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admsales`
--

INSERT INTO `admsales` (`saleId`, `cliId`, `saleDate`, `saleEstado`, `usrId`) VALUES
(21, 15, '2016-05-17 18:15:03', 'AC', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admsalesdetail`
--

CREATE TABLE `admsalesdetail` (
  `saleDetId` int(11) NOT NULL,
  `saleId` int(11) NOT NULL,
  `prodId` int(11) NOT NULL,
  `prodPrice` decimal(14,2) NOT NULL,
  `prodDescription` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `prodCant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admsalesdetail`
--

INSERT INTO `admsalesdetail` (`saleDetId`, `saleId`, `prodId`, `prodPrice`, `prodDescription`, `prodCant`) VALUES
(21, 21, 9, '770.00', '2 - Microondas Philips', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admstock`
--

CREATE TABLE `admstock` (
  `stkId` int(11) NOT NULL,
  `prodId` int(11) NOT NULL,
  `stkCant` int(11) NOT NULL,
  `usrId` int(11) NOT NULL,
  `stkDate` datetime NOT NULL,
  `stkMotive` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admstock`
--

INSERT INTO `admstock` (`stkId`, `prodId`, `stkCant`, `usrId`, `stkDate`, `stkMotive`) VALUES
(27, 8, 10, 1, '2016-05-13 15:59:17', 'Ajuste inicial'),
(28, 9, 5, 1, '2016-05-13 15:59:39', 'Ajuste inicial'),
(29, 10, 20, 1, '2016-05-13 15:59:57', 'Ajuste inicial'),
(30, 9, -2, 1, '2016-05-17 18:15:03', 'Venta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `artId` int(11) NOT NULL,
  `artBarCode` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `artDescription` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `artCoste` decimal(14,2) NOT NULL DEFAULT '0.00',
  `artMargin` decimal(10,2) NOT NULL DEFAULT '0.00',
  `artIsByBox` bit(1) NOT NULL DEFAULT b'0',
  `artCantBox` int(11) DEFAULT NULL,
  `artMarginIsPorcent` bit(1) NOT NULL DEFAULT b'0',
  `artEstado` varchar(2) NOT NULL DEFAULT 'AC',
  `famId` int(11) DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`artId`, `artBarCode`, `artDescription`, `artCoste`, `artMargin`, `artIsByBox`, `artCantBox`, `artMarginIsPorcent`, `artEstado`, `famId`) VALUES
(2, '00000111', 'articulo test', '0.00', '0.00', b'0', 0, b'0', 'AC', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conffamily`
--

CREATE TABLE `conffamily` (
  `famId` int(11) NOT NULL,
  `famName` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conffamily`
--

INSERT INTO `conffamily` (`famId`, `famName`) VALUES
(5, 'MANDO FINAL'),
(6, 'DIFERENCIAL'),
(7, 'CONVERTIDOR'),
(8, 'REP. CILINDRO'),
(9, 'REP. BOMBA HIDRAULICA'),
(10, 'Varios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confsubfamily`
--

CREATE TABLE `confsubfamily` (
  `sfamId` int(11) NOT NULL,
  `sfamName` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `famId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `confsubfamily`
--

INSERT INTO `confsubfamily` (`sfamId`, `sfamName`, `famId`) VALUES
(8, 'Cocina', 5),
(9, 'Heladera', 5),
(10, 'Microondas', 5),
(11, 'Futón', 6),
(12, 'Alacena', 6),
(13, 'Sillas', 6),
(14, 'Taladro', 7),
(15, 'Amoladora', 7),
(16, 'LLaves', 7),
(17, 'Afeitadora', 8),
(18, 'Secador de Cabello', 8),
(19, 'Masajeador', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confzone`
--

CREATE TABLE `confzone` (
  `zonaId` int(11) NOT NULL,
  `zonaName` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `confzone`
--

INSERT INTO `confzone` (`zonaId`, `zonaName`) VALUES
(10, 'Caucete'),
(11, 'Zonda'),
(12, 'Rivadavia'),
(13, 'Sarmiento'),
(14, 'Los Berros'),
(15, 'El Encón'),
(16, 'SANTA CRUZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deta-remito`
--

CREATE TABLE `deta-remito` (
  `detaremitoid` int(11) NOT NULL,
  `id_remito` int(10) NOT NULL,
  `loteid` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `deta-remito`
--

INSERT INTO `deta-remito` (`detaremitoid`, `id_remito`, `loteid`, `cantidad`, `precio`) VALUES
(1, 33, 10, 30, 0),
(2, 34, 10, 30, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deta_ordeninsumos`
--

CREATE TABLE `deta_ordeninsumos` (
  `id_detaordeninsumo` int(11) NOT NULL,
  `id_ordeninsumo` int(11) DEFAULT NULL,
  `loteid` int(10) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `deta_ordeninsumos`
--

INSERT INTO `deta_ordeninsumos` (`id_detaordeninsumo`, `id_ordeninsumo`, `loteid`, `cantidad`, `precio`) VALUES
(1, 1, 10, 20, 0),
(2, 2, 10, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frm_categorias`
--

CREATE TABLE `frm_categorias` (
  `CATE_ID` int(11) NOT NULL,
  `NOMBRE` varchar(1000) NOT NULL,
  `PISTA` varchar(2000) DEFAULT NULL,
  `FEC_CREACION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FORM_ID` int(11) NOT NULL,
  `ORDEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frm_categorias`
--

INSERT INTO `frm_categorias` (`CATE_ID`, `NOMBRE`, `PISTA`, `FEC_CREACION`, `FORM_ID`, `ORDEN`) VALUES
(1, 'A-Tapas', 'categoria tapas', '2018-07-05 14:24:31', 1, 1),
(2, 'B-Piezas en Revolucion', 'piezas', '2018-07-05 18:15:30', 1, 2),
(3, 'C-Lubricacion', 'lubricacion', '2018-07-05 18:16:30', 1, 3),
(4, 'D-Refrigeracion', 'refrigeracion', '2018-07-05 18:16:30', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frm_formularios`
--

CREATE TABLE `frm_formularios` (
  `form_id` int(11) NOT NULL,
  `nombre` varchar(1000) NOT NULL,
  `descripcion` varchar(3000) DEFAULT NULL,
  `habilitado` tinyint(1) NOT NULL DEFAULT '1',
  `fec_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_deprecado` timestamp NULL DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frm_formularios`
--

INSERT INTO `frm_formularios` (`form_id`, `nombre`, `descripcion`, `habilitado`, `fec_creacion`, `fec_deprecado`, `usuario`) VALUES
(1, 'Registro de Diagnostico de piezas no mecanizadas', 'diagnostico piezas', 1, '2018-07-05 14:21:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frm_formularios_completados`
--

CREATE TABLE `frm_formularios_completados` (
  `FOCO_ID` int(11) NOT NULL,
  `FORM_NOMBRE` varchar(1000) NOT NULL,
  `CATE_NOMBRE` varchar(1000) NOT NULL,
  `GRUP_NOMBRE` varchar(1000) NOT NULL,
  `VALO_NOMBRE` varchar(2000) NOT NULL,
  `TIDA_NOMBRE` varchar(100) NOT NULL,
  `TIDA_ID` int(11) DEFAULT NULL,
  `VALOR` longtext NOT NULL,
  `FORM_ID` int(11) NOT NULL,
  `REFERENCIA` text,
  `FEC_CREACION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `USUARIO` varchar(100) NOT NULL,
  `ORDEN` int(11) DEFAULT NULL,
  `LITA_ID` int(11) NOT NULL,
  `VALO_ID` int(11) NOT NULL DEFAULT '0',
  `VALIDADO` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frm_formularios_completados`
--

INSERT INTO `frm_formularios_completados` (`FOCO_ID`, `FORM_NOMBRE`, `CATE_NOMBRE`, `GRUP_NOMBRE`, `VALO_NOMBRE`, `TIDA_NOMBRE`, `TIDA_ID`, `VALOR`, `FORM_ID`, `REFERENCIA`, `FEC_CREACION`, `USUARIO`, `ORDEN`, `LITA_ID`, `VALO_ID`, `VALIDADO`) VALUES
(1, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '1-Tapa Valvulas', 'Chapa', 'select', 2, '-1', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 3, 0),
(2, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '1-Tapa Valvulas', 'Aluminio', 'select', 2, '-1', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 4, 0),
(3, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '1-Tapa Valvulas', 'Otro', 'select', 2, '-1', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 5, 0),
(4, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '1-Tapa Valvulas', 'Aprobado', 'input_texto', 1, 'ssss', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 6, 1),
(5, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '1-Tapa Valvulas', 'Rechazado', 'input_texto', 1, 'asd', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 7, 1),
(6, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '1-Tapa Valvulas', 'Reparar:(*)', 'input_texto', 1, 'rep', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 8, 1),
(7, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '1-Tapa Valvulas', 'Cambiar', 'input_texto', 1, 'cam', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 9, 1),
(8, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '2-Tapa distribución', 'Chapa', 'select', 2, '-1', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 10, 0),
(9, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '2-Tapa distribución', 'Aluminio', 'select', 2, '-1', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 11, 0),
(10, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '2-Tapa distribución', 'Otro', 'select', 2, '-1', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 12, 0),
(11, 'Registro de Diagnostico de piezas no mecanizadas', 'A-Tapas', '2-Tapa distribución', 'Aprobado:', 'input_texto', 1, 'aprovalidado', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 13, 1),
(12, 'Registro de Diagnostico de piezas no mecanizadas', 'B-Piezas en Revolucion', '1-Volante', 'Cambiar', 'input_texto', 1, '', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 16, 0),
(13, 'Registro de Diagnostico de piezas no mecanizadas', 'B-Piezas en Revolucion', '1-Volante', 'Ckeck test 1', 'checkbox', 3, 'tilde', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 18, 1),
(14, 'Registro de Diagnostico de piezas no mecanizadas', 'B-Piezas en Revolucion', '1-Volante', 'Ckeck test 2', 'checkbox', 3, 'tilde', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 19, 1),
(15, 'Registro de Diagnostico de piezas no mecanizadas', 'B-Piezas en Revolucion', '1-Volante', 'textarea test', 'textarea', 4, '', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 20, 0),
(16, 'Registro de Diagnostico de piezas no mecanizadas', 'B-Piezas en Revolucion', '1-Volante', 'SUBIR IMAGEN 1', 'input_archivo', 7, 'assets/imgformularios/17200986_1307488952679155_5807732853179821043_n2.jpg', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 21, 1),
(17, 'Registro de Diagnostico de piezas no mecanizadas', 'B-Piezas en Revolucion', '2-Corona Arranque', 'Reparar:(*)', 'input_archivo', 7, '', 1, NULL, '2018-07-05 14:21:45', '', NULL, 255, 15, 0),
(18, 'Registro de Diagnostico de piezas no mecanizadas', 'B-Piezas en Revolucion', '3-Polea cigûeñal', 'Rechazado', 'input_archivo', 7, 'assets/imgformularios/20292672_1625706127441992_1957579478471037547_n1.jpg', 1, NULL, '2018-07-05 14:21:45', '1', NULL, 255, 14, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frm_grupos`
--

CREATE TABLE `frm_grupos` (
  `GRUP_ID` int(11) NOT NULL,
  `NOMBRE` varchar(1000) NOT NULL,
  `PISTA` varchar(1000) DEFAULT NULL,
  `FEC_CREACION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CATE_ID` int(11) DEFAULT NULL,
  `ORDEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frm_grupos`
--

INSERT INTO `frm_grupos` (`GRUP_ID`, `NOMBRE`, `PISTA`, `FEC_CREACION`, `CATE_ID`, `ORDEN`) VALUES
(1, '1-Tapa Valvulas', NULL, '2018-07-05 14:36:39', 1, 1),
(2, '2-Tapa distribución', NULL, '2018-07-05 18:32:19', 1, 2),
(3, '3-Carter', NULL, '2018-07-05 18:32:19', 1, 3),
(4, '1-Volante', NULL, '2018-07-05 18:47:07', 2, 4),
(5, '2-Corona Arranque', NULL, '2018-07-05 18:47:36', 2, 5),
(6, '3-Polea cigûeñal', NULL, '2018-07-05 18:48:10', 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frm_tipos_dato`
--

CREATE TABLE `frm_tipos_dato` (
  `TIDA_ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `FEC_CREACION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frm_tipos_dato`
--

INSERT INTO `frm_tipos_dato` (`TIDA_ID`, `NOMBRE`, `FEC_CREACION`) VALUES
(1, 'input_texto', '2018-07-05 14:41:04'),
(2, 'select', '2018-07-05 15:06:02'),
(3, 'checkbox', '2018-07-08 22:45:17'),
(4, 'textarea', '2018-07-13 12:48:37'),
(5, 'input_numerico', '2018-08-10 20:37:50'),
(6, 'input_fecha', '2018-08-10 20:38:00'),
(7, 'input_archivo', '2018-08-10 20:38:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frm_valores`
--

CREATE TABLE `frm_valores` (
  `VALO_ID` int(11) NOT NULL,
  `NOMBRE` varchar(2000) NOT NULL,
  `PISTA` varchar(2000) DEFAULT NULL,
  `LONGITUD` int(11) DEFAULT NULL,
  `VALOR_DEFECTO` varchar(1000) DEFAULT NULL,
  `OBLIGATORIO` tinyint(1) NOT NULL DEFAULT '0',
  `FEC_CREACION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TIDA_ID` int(11) NOT NULL,
  `GRUP_ID` int(11) NOT NULL,
  `ORDEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frm_valores`
--

INSERT INTO `frm_valores` (`VALO_ID`, `NOMBRE`, `PISTA`, `LONGITUD`, `VALOR_DEFECTO`, `OBLIGATORIO`, `FEC_CREACION`, `TIDA_ID`, `GRUP_ID`, `ORDEN`) VALUES
(3, 'Chapa', NULL, NULL, NULL, 1, '2018-07-05 15:00:29', 2, 1, 1),
(4, 'Aluminio', NULL, NULL, NULL, 0, '2018-07-05 15:03:28', 2, 1, 2),
(5, 'Otro', NULL, NULL, NULL, 0, '2018-07-05 15:04:48', 2, 1, 3),
(6, 'Aprobado', NULL, NULL, NULL, 0, '2018-07-05 18:35:10', 1, 1, 4),
(7, 'Rechazado', NULL, NULL, NULL, 0, '2018-07-05 18:35:10', 1, 1, 5),
(8, 'Reparar:(*)', NULL, NULL, NULL, 0, '2018-07-05 18:36:44', 1, 1, 6),
(9, 'Cambiar', NULL, NULL, NULL, 0, '2018-07-05 18:36:44', 1, 1, 7),
(10, 'Chapa', NULL, NULL, NULL, 0, '2018-07-05 18:38:52', 2, 2, 8),
(11, 'Aluminio', NULL, NULL, NULL, 0, '2018-07-05 18:38:52', 2, 2, 9),
(12, 'Otro', NULL, NULL, NULL, 0, '2018-07-05 18:40:11', 2, 2, 10),
(13, 'Aprobado:', NULL, NULL, NULL, 1, '2018-07-05 18:40:11', 1, 2, 11),
(14, 'Rechazado', NULL, NULL, NULL, 0, '2018-07-05 18:40:39', 7, 6, 12),
(15, 'Reparar:(*)', NULL, NULL, NULL, 0, '2018-07-05 18:44:58', 7, 5, 13),
(16, 'Cambiar', NULL, NULL, NULL, 0, '2018-07-05 18:45:39', 1, 4, 14),
(18, 'Ckeck test 1', NULL, NULL, NULL, 0, '2018-07-08 22:46:00', 3, 4, 15),
(19, 'Ckeck test 2', NULL, NULL, NULL, 0, '2018-07-08 22:50:35', 3, 4, 16),
(20, 'textarea test', NULL, NULL, NULL, 0, '2018-07-08 22:51:07', 4, 4, 17),
(21, 'SUBIR IMAGEN 1', NULL, NULL, NULL, 1, '2018-08-10 21:14:35', 7, 4, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frm_valores_validos`
--

CREATE TABLE `frm_valores_validos` (
  `VAPO_ID` int(11) NOT NULL,
  `VALOR` varchar(100) NOT NULL,
  `FEC_CREACION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VALO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frm_valores_validos`
--

INSERT INTO `frm_valores_validos` (`VAPO_ID`, `VALOR`, `FEC_CREACION`, `VALO_ID`) VALUES
(1, 'si', '2018-07-05 15:19:37', 3),
(2, 'no', '2018-07-05 15:19:37', 3),
(3, 'si', '2018-07-05 15:19:56', 4),
(4, 'no', '2018-07-05 15:19:56', 4),
(5, 'si', '2018-07-05 15:20:20', 5),
(6, 'no', '2018-07-05 15:20:20', 5),
(7, 'si', '2018-07-05 18:52:11', 6),
(8, 'no', '2018-07-05 18:52:57', 6),
(9, 'si', '2018-07-05 18:53:18', 7),
(10, 'no', '2018-07-05 18:53:35', 7),
(11, 'si', '2018-07-05 18:53:45', 8),
(12, 'no', '2018-07-05 18:54:01', 8),
(13, 'si', '2018-07-05 18:54:22', 9),
(14, 'no', '2018-07-05 18:54:38', 9),
(15, 'yes', '2018-07-05 18:54:46', 10),
(16, 'not', '2018-07-05 18:54:57', 10),
(17, 'si', '2018-07-05 18:55:20', 11),
(18, 'no', '2018-07-05 18:55:36', 11),
(19, 'si', '2018-07-05 18:55:58', 12),
(20, 'no', '2018-07-05 18:56:11', 12),
(21, 'check1', '2018-07-08 22:51:50', 18),
(22, 'chek2', '2018-07-08 22:52:31', 19),
(23, 'check3', '2018-07-08 22:52:54', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_sistema`
--

CREATE TABLE `info_sistema` (
  `id_infosistema` int(11) NOT NULL,
  `nom_fantasia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `razon_social` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `mail` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `info_sistema`
--

INSERT INTO `info_sistema` (`id_infosistema`, `nom_fantasia`, `razon_social`, `telefono`, `celular`, `mail`, `direccion`, `logo`) VALUES
(1, 'Trazalog', 'Trazalog S.A.', 0, 54, 'ventas@trazalog.com', 'Av. Libertador Gral. San Martin 1890 (O)', 'logo.png'),
(2, 'dasdad', 'sdada', 333, 333, 'permauricio@gmail.com', 'sdadsadsad', 'Local-TB-Bluw_png_pagespeed_ce_AkWw5pu0_F.png'),
(3, 'asdasd', 'adasd', 0, 0, 'adasd@gmai.com', 'asda', '17200986_1307488952679155_5807732853179821043_n1.j'),
(4, 'asdasdasdas', 'asdfsfdgafgas', 1234123451, 45625, 'aaf@gmail.com', 'qwetert', '17200986_1307488952679155_5807732853179821043_n2.j'),
(5, 'asdadsf', 'fdjhjdgf', 13254123, 6789869, 'aaf@gmail.com', 'erteytr', '23722295_1005649316239485_2251431615481845955_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mtb_num_interno`
--

CREATE TABLE `mtb_num_interno` (
  `año` int(11) NOT NULL,
  `num_correlativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mtb_num_interno`
--

INSERT INTO `mtb_num_interno` (`año`, `num_correlativo`) VALUES
(2018, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_insumos`
--

CREATE TABLE `orden_insumos` (
  `id_orden` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `solicitante` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `destino` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `comprobante` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `orden_insumos`
--

INSERT INTO `orden_insumos` (`id_orden`, `fecha`, `solicitante`, `destino`, `comprobante`) VALUES
(1, '2017-08-07', 'Roque', '', 1123),
(2, '2017-10-05', 'geemmag', '', 778);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_pedido`
--

CREATE TABLE `orden_pedido` (
  `id_orden` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `nro_trabajo` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` datetime NOT NULL,
  `fecha_entrega` datetime NOT NULL,
  `fecha_entregada` datetime NOT NULL,
  `estado` varchar(2) NOT NULL,
  `id_trabajo` int(11) NOT NULL,
  `observacion` text NOT NULL,
  `numero_remito` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden_pedido`
--

INSERT INTO `orden_pedido` (`id_orden`, `id_proveedor`, `nro_trabajo`, `descripcion`, `fecha`, `fecha_entrega`, `fecha_entregada`, `estado`, `id_trabajo`, `observacion`, `numero_remito`) VALUES
(1, 1, 4545, 'tanques de aceite', '2017-07-23 00:00:00', '2017-07-30 00:00:00', '0000-00-00 00:00:00', 'P', 10, '', 0),
(2, -1, 0, 'N°PIEZA	DESCRIPCION	CANT\n19H2554	TORNILLO	6\nR43696	ARANDELA	6\nT68891	PLACA	1\n24H1685	ARANDELA	6\n19M7139	TORNILLO	6\nL2646N	TAPON ROSCADO	1\nT68890	CASQUILLO 	1\nT106361	CASQUILLO 	1\nAT196800	CONVERTIDOR DE PAR	1\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'P', 15, '', 0),
(3, 10, 0, 'N°PIEZA	DESCRIPCION	CANT\n19H2554	TORNILLO	6\nR43696	ARANDELA	6\nT68891	PLACA	1\n24H1685	ARANDELA	6\n19M7139	TORNILLO	6\nL2646N	TAPON ROSCADO	1\nT68890	CASQUILLO 	1\nT106361	CASQUILLO 	1\nAT196800	CONVERTIDOR DE PAR	1\n', '2017-08-03 00:00:00', '2017-08-23 00:00:00', '0000-00-00 00:00:00', 'P', 15, '', 0),
(4, 10, 123, 'este es un pedido de test ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'P', 22, '', 0),
(5, 10, 10, 'ORDE N DE PRUEBA DE PEDIDO 10', '2017-08-09 00:00:00', '2017-08-30 00:00:00', '0000-00-00 00:00:00', 'P', 31, '', 0),
(6, 3, 123123, 'pedido test1 detalle ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-09-04 08:31:13', 'E', 71, '', 4646546),
(7, 4, 456465, 'pedidotest2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-09-04 08:30:49', 'E', 71, '', 7899),
(8, 12, 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'P', 60, '', NULL),
(9, 3, 0, 'hdhjd 5454545', '0000-00-00 00:00:00', '2017-09-19 00:00:00', '0000-00-00 00:00:00', 'P', 73, '', NULL),
(10, 3, 0, 'ujhjjjj', '0000-00-00 00:00:00', '2017-09-30 00:00:00', '2017-09-12 09:58:58', 'E', 73, '', 6666),
(11, 10, 0, 'dfgdgd', '0000-00-00 00:00:00', '2017-09-30 00:00:00', '2017-09-12 16:40:10', 'E', 73, '', 0),
(12, 10, 1, 'opop', '2017-09-19 04:14:03', '2017-09-19 00:00:00', '0000-00-00 00:00:00', 'P', 18, '', NULL),
(13, 13, 4, 'ddydhdhf', '2018-05-24 04:49:08', '2018-05-31 00:00:00', '2018-05-24 04:58:47', 'E', 18, '', 567576),
(14, 3, 23, 'equipo 0102', '2018-06-22 15:08:44', '2018-06-28 00:00:00', '0000-00-00 00:00:00', 'P', 19, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_trabajo`
--

CREATE TABLE `orden_trabajo` (
  `id_orden` int(11) NOT NULL,
  `nro` varchar(100) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_entrega` datetime NOT NULL,
  `fecha_terminada` datetime NOT NULL,
  `fecha_aviso` datetime NOT NULL,
  `fecha_entregada` datetime NOT NULL,
  `descripcion` text NOT NULL,
  `cliId` int(11) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT '1',
  `id_usuario_a` int(11) NOT NULL,
  `id_usuario_e` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden_trabajo`
--

INSERT INTO `orden_trabajo` (`id_orden`, `nro`, `fecha_inicio`, `fecha_entrega`, `fecha_terminada`, `fecha_aviso`, `fecha_entregada`, `descripcion`, `cliId`, `estado`, `id_usuario`, `id_usuario_a`, `id_usuario_e`, `id_sucursal`, `id_proveedor`) VALUES
(11, '45', '0000-00-00 00:00:00', '2018-03-14 00:00:00', '2017-07-28 12:41:23', '2017-07-28 12:41:23', '2017-07-28 12:41:23', 'dsffdsf', 16, 'As', 1, 4, 1, 2, NULL),
(13, '46', '0000-00-00 00:00:00', '2018-03-09 03:00:00', '2017-07-28 12:57:38', '2017-07-28 12:57:38', '2017-07-28 12:57:38', 'otra orden test', 20, 'As', 1, -1, 1, 1, NULL),
(14, 'MM 299', '0000-00-00 00:00:00', '2018-03-15 00:00:00', '2018-03-22 09:24:44', '2017-07-28 13:58:08', '2018-05-21 00:00:00', '', 20, 'E', 4, 4, 4, 1, NULL),
(15, 'MM 300', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-08-14 14:50:44', '2017-07-28 13:58:56', '2017-08-14 00:00:00', '', 20, 'E', 4, 4, 4, 1, NULL),
(17, 'MM 302', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-07-28 14:00:09', '2017-07-28 14:00:09', '2017-07-28 14:00:09', 'orden trabajo 17', 20, 'As', 4, 4, 4, 1, NULL),
(18, 'MM 303', '0000-00-00 00:00:00', '2017-07-28 14:01:18', '2017-07-28 14:01:18', '2017-07-28 14:01:18', '2017-07-28 14:01:18', '', 20, 'P', 4, 4, 4, 1, NULL),
(19, 'MM 229', '0000-00-00 00:00:00', '2017-08-02 11:21:44', '2017-08-02 11:21:44', '2017-08-02 11:21:44', '2017-08-02 11:21:44', 'TRANSMISIÓN 773 D', 20, 'C', 1, 1, 1, 1, NULL),
(20, 'MM 252 ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-08-02 11:24:26', '2017-08-02 11:24:26', '2017-08-02 11:24:26', 'CONVERTIDOR 777D', 20, 'As', 1, 1, 1, 1, NULL),
(34, ' MM 305', '2017-08-22 07:39:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Ballato Construcciones.', -1, 'C', 1, 1, 1, 1, NULL),
(35, 'MM 305', '2017-08-22 07:41:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Ballato Construcciones.', -1, 'C', 1, 1, 1, -1, NULL),
(36, 'MM 305', '2017-08-23 06:01:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'BALLATO Construcciones', -1, 'C', 1, 1, 1, 1, NULL),
(38, 'MM 305', '2017-08-23 10:30:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 20, 'C', 1, 1, 1, -1, NULL),
(39, 'MM 305', '2017-08-23 10:30:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'BALLATO Construcciones', 20, 'C', 1, 1, 1, 1, NULL),
(40, 'MM 306', '2017-08-24 09:34:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CILINDRO', 1, 'C', 1, 1, 1, 1, NULL),
(41, 'MM 306', '2017-08-24 09:34:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CILINDRO', 20, 'C', 1, 1, 1, 1, NULL),
(42, 'MM 251', '2017-08-25 06:06:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final arribo el día 23/05/2016 ', 20, 'As', 1, 1, 1, 1, NULL),
(43, 'MM 253', '2017-08-25 06:09:39', '0000-00-00 00:00:00', '2018-04-16 10:19:15', '0000-00-00 00:00:00', '2018-05-24 00:00:00', 'Transmision arribo el 20/10/2016', 20, 'E', 1, 1, 1, 1, NULL),
(44, 'MM 254', '2017-08-25 06:11:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Transmision arrribo el 20/10/2016', 20, 'C', 1, 1, 1, 1, NULL),
(45, 'MM 255', '2017-08-25 06:16:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Transmisiones arribo 01/11/2016', 20, 'C', 1, 1, 1, 1, NULL),
(46, 'MM 256', '2017-08-25 06:17:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Transmision arribo el dia 01/11/2016', 20, 'C', 1, 1, 1, 1, NULL),
(47, 'MM 267', '2017-08-25 06:20:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Convertidor arribo el día 15/02/2017 ', 20, 'C', 1, 1, 1, 1, NULL),
(48, 'MM 271', '2017-08-25 06:21:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Convertidor arribo el día  14/04/2017', 20, 'C', 1, 1, 1, 1, NULL),
(49, 'MM 272', '2017-08-25 06:23:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final Sandvick arribo el día 17/04/2017 ', 20, 'C', 1, 1, 1, 1, NULL),
(50, 'MM 273', '2017-08-25 06:39:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Transmisión arribo el día 17/04/2017  ', 20, 'C', 1, 1, 1, 1, NULL),
(51, 'MM 276', '2017-08-25 06:43:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Convertidor arribo el día 17/04/2017 ', 20, 'C', 1, 1, 1, 1, NULL),
(52, 'MM 277', '2017-08-25 06:44:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final arribo el 09/05/2017', 20, 'C', 1, 1, 1, 1, NULL),
(53, 'MM 278', '2017-08-25 06:47:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final Sandvick arribo el dia 19/05/2017', 20, 'C', 1, 1, 1, 1, NULL),
(54, 'MM 279', '2017-08-25 06:49:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final Sandvick arribo el día 19/05/2017 ', 20, 'C', 1, 1, 1, 1, NULL),
(55, 'MM 282', '2017-08-25 06:51:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final arribo el día  08/06/2017', 20, 'C', 1, 1, 1, 1, NULL),
(56, 'MM 283', '2017-08-25 06:55:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Convertidor arribo el día 15/06/2017 ', 20, 'C', 1, 1, 1, 1, NULL),
(57, 'MM 284 ', '2017-08-25 06:57:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final arribo el dia 15/06/2017', 20, 'C', 1, 1, 1, 1, NULL),
(58, 'MM 285', '2017-08-25 06:58:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final arribo el día 15/06/2017 ', 20, 'C', 1, 1, 1, 1, NULL),
(59, 'MM 286', '2017-08-25 07:21:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Convertidor arribo el día 15/06/2017 ', 20, 'C', 1, 1, 1, 1, NULL),
(60, 'MM 287', '2017-08-25 07:25:53', '0000-00-00 00:00:00', '2017-09-06 08:45:08', '0000-00-00 00:00:00', '2017-09-07 00:00:00', 'Mando Final arribo el 26/06/02017 ', 20, 'E', 1, 1, 1, 1, NULL),
(61, 'MM 288', '2017-08-25 07:27:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final arribo el 26/06/2017', 20, 'C', 1, 1, 1, 1, NULL),
(62, 'MM 289', '2017-08-25 07:28:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final arribo el día 26/06/2017', 20, 'C', 1, 1, 1, 1, NULL),
(63, 'MM 290', '2017-08-25 07:29:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final arribo el día 26/06/2017 ', 20, 'C', 1, 1, 1, 1, NULL),
(64, 'MM 291', '2017-08-25 07:31:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final  arribo el día 26/06/2017', 20, 'C', 1, 1, 1, 1, NULL),
(65, 'MM 292', '2017-08-25 07:34:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Transmisión arribo el día 13/07/2017  ', 20, 'C', 1, 1, 1, 1, NULL),
(66, 'MM 293', '2017-08-25 07:36:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Transmisión arribo el día 13/07/2017 ', 20, 'C', 1, 1, 1, 1, NULL),
(67, 'MM 299', '2017-08-25 07:39:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final arribo el día 31/07/2017', 20, 'C', 1, 1, 1, 1, NULL),
(68, 'MM 300', '2017-08-25 07:42:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mando Final arribo el día 31/07/2017 ', 20, 'C', 1, 1, 1, 1, NULL),
(69, 'MM 307', '2017-09-01 07:31:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'HIDRO GRUA GRUBERTI', -1, 'C', 1, 1, 1, 1, NULL),
(70, 'MM 307', '2017-09-01 07:35:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'HIDRO GRUA GRUBERTI', 20, 'C', 1, 1, 1, 1, NULL),
(71, '000', '2017-09-04 08:12:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'orden test 1', 20, 'P', 1, 1, 1, 1, 3),
(72, 'MM 308', '2017-09-05 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'MANDO FINAL ', 20, 'As', 4, 6, 0, 1, 10),
(73, 'mmmmm', '2017-09-12 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'vbnvnv h', 20, 'P', 4, 4, 0, 1, 3),
(74, 'MM 309', '2017-09-12 10:58:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 20, 'C', 4, 1, 0, 1, -1),
(76, 'MM 3010', '2017-09-13 11:56:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CILINDRO ', -1, 'C', 1, 1, 1, 1, 13),
(77, 'MM 311', '2017-09-14 09:18:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'LLEGO EL DIA 13/09/2017\nTRANSMISION', 20, 'C', 4, 1, 0, 1, 13),
(78, 'MM 310', '2017-09-14 12:27:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CILINDRO ELECTROMETALURGICA ANDINA ', 20, 'C', 4, 1, 0, 1, 13),
(79, 'MM 312', '2017-09-19 04:54:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CILINDRO ', 20, 'C', 4, 1, 0, 1, 13),
(80, 'MM 313', '2017-10-02 05:43:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DIFERENCIAL DF 34009', 20, 'C', 4, 1, 0, 1, 13),
(81, 'MM 314', '2017-10-02 05:45:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'MANDO FINAL DERECHO MF 34021', 20, 'C', 4, 1, 0, 1, 13),
(82, 'MM 315', '2017-10-02 05:46:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'MANDO FINAL MF 34013', 20, 'C', 4, 1, 0, 1, 13),
(83, 'MM 316', '2017-10-02 05:54:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'MANDO FINAL DERECHO MF03017', 20, 'C', 4, 1, 0, 1, 13),
(84, 'MM 317', '2017-10-02 05:56:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'MANDO FINAL IZQUIERDO MF 03027', 20, 'C', 4, 1, 0, 1, 13),
(85, 'MM  318', '2017-10-10 02:54:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'MANDO FINAL ', 20, 'C', 4, 1, 0, 1, 13),
(86, 'MM 319', '2017-10-10 02:55:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DIFERENCIAL ', 20, 'C', 4, 1, 0, 1, 13),
(320, 'MM 320', '2017-10-10 02:56:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'MANDO FINAL ', 20, 'C', 4, 1, 0, 1, 13),
(321, '321', '2017-10-20 00:00:00', '2017-10-28 00:00:00', '2017-10-30 00:00:00', '2017-10-31 00:00:00', '2017-10-01 00:00:00', 'test', 20, 'C', 1, 1, 1, 1, 1),
(322, 'MM 323', '2017-11-02 09:55:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CILINDRO TELESCOPICO \nMAPAL', 20, 'C', 4, 1, 0, 1, 13),
(323, 'MM 322', '2017-11-02 09:57:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CILINDRO', 20, 'C', 4, 1, 0, 1, 13),
(324, 'MM 324', '2017-11-08 11:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 20, 'C', 4, 1, 0, -1, -1),
(325, 'MM 325', '2017-11-08 11:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CILINDRO ', 20, 'C', 4, 1, 0, 1, 13),
(326, 'MM 326', '2017-11-23 03:48:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CAMION DE ORICA ARGENTINA', 20, 'C', 4, 1, 0, 1, 13),
(327, 'MM327', '2018-01-22 10:03:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'EMPRESA DISEI ', 20, 'C', 4, 1, 0, 1, 13),
(328, 'MM 328', '2018-01-22 10:05:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'PANAGA ', 20, 'C', 4, 1, 0, 1, 13),
(329, 'MM 329', '2018-01-22 10:10:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DISEI ', 20, 'C', 4, 1, 0, 1, 13),
(330, 'MM 330 ', '2018-01-22 10:11:00', '0000-00-00 00:00:00', '2018-03-22 09:30:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'TRACKTOR HERRAMIENTAS SAN MARTIN', 20, 'T', 4, 1, 0, 1, 13),
(331, '234', '2018-03-22 11:31:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'servicio toyota  2011', 20, 'C', 4, 1, 0, 1, 4),
(332, 'MM 31', '2018-04-16 04:32:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Revisar de filtros', 20, 'C', 1, 1, 0, 1, 13),
(333, 'HHH 4444', '2018-04-16 04:33:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'orden de trabajo test hugo', 20, 'C', 1, 1, 0, 1, 13),
(334, 'MM 10', '2018-04-16 04:34:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cambio correa ', 20, 'C', 1, 1, 0, 1, 13),
(335, 'MM 15', '2018-04-16 04:35:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Ajuste correa embalaje', 20, 'C', 1, 1, 0, 1, 13),
(337, '77777', '2018-05-09 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Hola', 20, 'As', 1, -1, 0, 1, 10),
(339, '34', '2018-06-28 10:12:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'reparación motor komatsu', 20, 'C', 1, 1, 0, 1, 13),
(340, '', '2018-08-13 18:35:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'oerden bababba', 20, 'C', 1, 1, 0, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `id_plantilla` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`id_plantilla`, `descripcion`, `fecha`) VALUES
(26, 'plantilla 1', '2018-07-02 12:54:03'),
(27, 'plantilla 2', '2018-07-12 12:54:07'),
(28, 'plantila 3', '2018-07-16 12:54:12'),
(29, 'plantilla 4', '2018-07-30 10:44:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remitos`
--

CREATE TABLE `remitos` (
  `remitoId` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `provid` int(11) NOT NULL,
  `comprobante` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `remitos`
--

INSERT INTO `remitos` (`remitoId`, `fecha`, `provid`, `comprobante`) VALUES
(33, '2017-08-07 00:00:00', 10, '123'),
(34, '0000-00-00 00:00:00', 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sisactions`
--

CREATE TABLE `sisactions` (
  `actId` int(11) NOT NULL,
  `actDescription` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `actDescriptionSpanish` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sisactions`
--

INSERT INTO `sisactions` (`actId`, `actDescription`, `actDescriptionSpanish`) VALUES
(1, 'Add', 'Agregar'),
(2, 'Edit', 'Editar'),
(3, 'Del', 'Eliminar'),
(4, 'View', 'Consultar'),
(5, 'Imprimir', 'Imprimir'),
(6, 'Saldo', 'Consultar Saldo'),
(7, 'Asignar', 'Asignar'),
(8, 'Finalizar', 'Finalizar'),
(9, 'OP', 'OP'),
(10, 'Pedidos', 'Pedidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sisgroups`
--

CREATE TABLE `sisgroups` (
  `grpId` int(11) NOT NULL,
  `grpName` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `grpDash` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sisgroups`
--

INSERT INTO `sisgroups` (`grpId`, `grpName`, `grpDash`) VALUES
(1, 'Administrador', 'Otrabajo'),
(2, 'Vendedor', 'Otrabajo'),
(3, 'Depósito', 'Otrabajo'),
(4, 'Taller', 'Otrabajo'),
(5, 'Supervisor Taller', 'Otrabajo'),
(6, 'Compras', 'Otrabajo'),
(7, 'coordinador', 'Otrabajo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sisgroupsactions`
--

CREATE TABLE `sisgroupsactions` (
  `grpactId` int(11) NOT NULL,
  `grpId` int(11) NOT NULL,
  `menuAccId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sisgroupsactions`
--

INSERT INTO `sisgroupsactions` (`grpactId`, `grpId`, `menuAccId`) VALUES
(125, 2, 1),
(126, 2, 4),
(127, 2, 8),
(128, 2, 13),
(129, 2, 25),
(130, 2, 28),
(951, 4, 54),
(952, 4, 55),
(953, 4, 56),
(954, 4, 57),
(1103, 5, 1),
(1104, 5, 2),
(1105, 5, 4),
(1106, 5, 5),
(1107, 5, 6),
(1108, 5, 8),
(1109, 5, 25),
(1110, 5, 26),
(1111, 5, 27),
(1112, 5, 28),
(1113, 5, 29),
(1114, 5, 30),
(1115, 5, 31),
(1116, 5, 32),
(1117, 5, 33),
(1118, 5, 34),
(1119, 5, 35),
(1120, 5, 36),
(1121, 5, 41),
(1122, 5, 42),
(1123, 5, 43),
(1124, 5, 53),
(1125, 5, 54),
(1126, 5, 55),
(1127, 5, 56),
(1128, 5, 57),
(1129, 5, 61),
(1130, 5, 62),
(1131, 5, 63),
(1132, 5, 70),
(1133, 5, 71),
(1134, 5, 72),
(1135, 5, 73),
(1136, 5, 74),
(1137, 5, 75),
(1138, 5, 76),
(1139, 5, 77),
(1140, 5, 78),
(1141, 5, 79),
(1142, 5, 80),
(1143, 5, 81),
(1144, 5, 82),
(1145, 5, 83),
(1146, 5, 84),
(1147, 5, 85),
(1148, 5, 86),
(1149, 5, 87),
(1150, 5, 88),
(1151, 5, 89),
(1228, 6, 70),
(1229, 6, 71),
(1230, 6, 72),
(1231, 6, 73),
(1232, 6, 74),
(1233, 6, 75),
(1234, 6, 76),
(1235, 6, 77),
(1236, 6, 78),
(1237, 6, 79),
(1238, 6, 80),
(1239, 6, 81),
(1240, 6, 94),
(1241, 6, 95),
(1242, 6, 96),
(1243, 6, 97),
(1848, 1, 1),
(1849, 1, 2),
(1850, 1, 4),
(1851, 1, 5),
(1852, 1, 6),
(1853, 1, 8),
(1854, 1, 17),
(1855, 1, 18),
(1856, 1, 19),
(1857, 1, 20),
(1858, 1, 21),
(1859, 1, 22),
(1860, 1, 23),
(1861, 1, 24),
(1862, 1, 25),
(1863, 1, 26),
(1864, 1, 27),
(1865, 1, 28),
(1866, 1, 29),
(1867, 1, 30),
(1868, 1, 31),
(1869, 1, 32),
(1870, 1, 33),
(1871, 1, 34),
(1872, 1, 35),
(1873, 1, 36),
(1874, 1, 36),
(1875, 1, 39),
(1876, 1, 41),
(1877, 1, 42),
(1878, 1, 43),
(1879, 1, 53),
(1880, 1, 54),
(1881, 1, 55),
(1882, 1, 56),
(1883, 1, 57),
(1884, 1, 44),
(1885, 1, 45),
(1886, 1, 46),
(1887, 1, 47),
(1888, 1, 48),
(1889, 1, 49),
(1890, 1, 61),
(1891, 1, 62),
(1892, 1, 63),
(1893, 1, 64),
(1894, 1, 65),
(1895, 1, 66),
(1896, 1, 67),
(1897, 1, 90),
(1898, 1, 91),
(1899, 1, 92),
(1900, 1, 93),
(1901, 1, 70),
(1902, 1, 71),
(1903, 1, 72),
(1904, 1, 73),
(1905, 1, 74),
(1906, 1, 75),
(1907, 1, 76),
(1908, 1, 77),
(1909, 1, 78),
(1910, 1, 79),
(1911, 1, 80),
(1912, 1, 81),
(1913, 1, 82),
(1914, 1, 83),
(1915, 1, 84),
(1916, 1, 85),
(1917, 1, 86),
(1918, 1, 87),
(1919, 1, 88),
(1920, 1, 89),
(1921, 1, 94),
(1922, 1, 95),
(1923, 1, 96),
(1924, 1, 97),
(1925, 1, 98),
(1926, 1, 99),
(1927, 1, 100),
(1928, 1, 101),
(1929, 1, 102),
(1930, 1, 103),
(1931, 1, 104),
(1932, 1, 105),
(1933, 1, 106),
(1934, 1, 107),
(1935, 1, 108),
(1936, 1, 109),
(1937, 1, 110),
(1938, 1, 111),
(1939, 1, 112),
(1940, 1, 113),
(1941, 1, 114),
(1942, 1, 115),
(1943, 1, 116),
(1944, 1, 117),
(1945, 1, 118),
(1946, 1, 119),
(1947, 1, 120),
(1948, 1, 121),
(1950, 7, 53),
(1951, 7, 57),
(1952, 1, 122),
(1953, 1, 123),
(1954, 1, 124),
(1955, 1, 125),
(1957, 1, 126),
(1958, 1, 127),
(1959, 1, 128),
(1960, 1, 129),
(1961, 1, 130),
(1962, 1, 131),
(1963, 1, 132),
(1964, 1, 133);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sismenu`
--

CREATE TABLE `sismenu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sismenu`
--

INSERT INTO `sismenu` (`id`, `name`, `slug`, `icon`, `parent`, `number`) VALUES
(1, 'Clientes', 'Cliente', 'fa fa-users', NULL, 1),
(2, 'Calendario', 'Calendario/indexot', 'fa fa-leanpub', NULL, 2),
(9, 'Seguridad', '', 'fa fa-key', NULL, 3),
(10, 'Usuarios', 'user', '', 9, 1),
(11, 'Grupos', 'group', '', 9, 2),
(12, 'Administración', '', 'fa fa-fw fa-cogs', NULL, 4),
(13, 'Zonas', 'zone', '', 12, 1),
(14, 'Familias', 'family', '', 12, 2),
(15, 'Sub-Familias', 'family/indexSF', '', 12, 3),
(16, 'BackUp', 'backup', 'fa fa-check-square-o', NULL, 5),
(17, 'Ordenes_de_trabajo', '', 'fa fa-check-square-o', NULL, 6),
(18, 'Alta_Ordenes', 'Otrabajo/listOrden', 'fa fa-plus', 17, 1),
(19, 'Administra_Ordenes', 'Envio', 'fa fa-thumbs-up', 17, 2),
(20, 'Reporte Ordenes', '', 'fa fa-file-picture-o', 17, 3),
(21, 'Ordenes_Pedido', '', 'fa  fa-tags', NULL, 7),
(22, 'Proveedores', 'proveedor', 'fa fa-truck', 21, 1),
(23, 'Enviar Pedido', '', 'fa fa-paper-plane ', 21, 2),
(24, 'Reporte O. Pedido', '', 'fa fa-file-picture-o', 21, 3),
(25, 'Gestion_Stock', '', 'fa fa-truck', NULL, 8),
(26, 'Articulos', 'Article', 'fa fa-cubes', 25, 1),
(27, 'Stock', 'Lote', 'fa fa-truck', 25, 2),
(28, 'Remitos', 'Remito', 'fa fa-paperclip ', 25, 3),
(29, 'Ordenes_insumos', 'Ordeninsumo', 'fa fa-check', 25, 4),
(30, 'Proveedores_', 'proveedor', 'fa fa-truck', 25, 5),
(31, 'Nota_Pedido', 'Notapedido', 'fa fa-cart-plus', 21, 4),
(32, 'Administra_Pedidos', 'Administracion', 'fa fa-truck', NULL, 9),
(33, 'Importar_Excel', 'Import', 'fa fa-upload', NULL, 10),
(34, 'Taller', 'Taller', 'fa fa-check', NULL, 11),
(35, 'ABM_Empresa', 'Sistema', 'fa fa-tasks', NULL, 12),
(36, 'Plantilla', 'Plantilla', 'fa fa-calendar', NULL, 13),
(37, 'Bonita', 'Bonita/conexion', '', NULL, 14),
(38, 'Tareas', 'Tarea', '', NULL, 15),
(39, 'Formulario', 'Form', '', NULL, 16),
(40, 'ABM Equipos', 'Equipo', 'fa fa-fw fa-cogs', NULL, 17),
(41, 'ABM Subsectores', 'Subsector', 'fa fa-tasks', NULL, 18),
(42, 'ABM Tareas Estandar', 'Tareaest', 'fa fa-tasks', NULL, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sismenuactions`
--

CREATE TABLE `sismenuactions` (
  `menuAccId` int(11) NOT NULL,
  `menuId` int(11) NOT NULL,
  `actId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sismenuactions`
--

INSERT INTO `sismenuactions` (`menuAccId`, `menuId`, `actId`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 4),
(5, 2, 1),
(6, 2, 2),
(8, 2, 4),
(13, 4, 1),
(14, 6, 5),
(15, 7, 5),
(16, 8, 5),
(17, 10, 1),
(18, 10, 2),
(19, 10, 3),
(20, 10, 4),
(21, 11, 1),
(22, 11, 2),
(23, 11, 3),
(24, 11, 4),
(25, 13, 1),
(26, 13, 2),
(27, 13, 3),
(28, 13, 4),
(29, 14, 1),
(30, 14, 2),
(31, 14, 3),
(32, 14, 4),
(33, 15, 1),
(34, 15, 2),
(35, 15, 3),
(36, 15, 4),
(37, 4, 4),
(38, 4, 6),
(39, 16, 1),
(40, 4, 3),
(41, 18, 1),
(42, 18, 2),
(43, 18, 3),
(44, 19, 1),
(45, 19, 1),
(46, 19, 2),
(47, 20, 1),
(48, 20, 2),
(49, 20, 3),
(50, 17, 1),
(51, 17, 2),
(52, 17, 3),
(53, 18, 7),
(54, 18, 8),
(55, 18, 9),
(56, 18, 10),
(57, 18, 4),
(61, 22, 1),
(62, 22, 3),
(63, 22, 4),
(64, 23, 1),
(65, 23, 2),
(66, 23, 3),
(67, 24, 1),
(68, 24, 1),
(69, 24, 1),
(70, 26, 1),
(71, 26, 2),
(72, 26, 3),
(73, 26, 4),
(74, 27, 1),
(75, 27, 2),
(76, 27, 3),
(77, 27, 4),
(78, 28, 1),
(79, 28, 2),
(80, 28, 3),
(81, 28, 4),
(82, 29, 1),
(83, 29, 2),
(84, 29, 3),
(85, 29, 4),
(86, 30, 1),
(87, 30, 2),
(88, 30, 3),
(89, 30, 4),
(90, 31, 1),
(91, 31, 2),
(92, 31, 3),
(93, 31, 4),
(94, 32, 1),
(95, 32, 2),
(96, 32, 3),
(97, 32, 4),
(98, 33, 1),
(99, 33, 2),
(100, 34, 1),
(101, 34, 2),
(102, 34, 3),
(103, 34, 4),
(104, 35, 1),
(105, 35, 2),
(106, 35, 3),
(107, 35, 4),
(108, 36, 1),
(109, 36, 2),
(110, 36, 3),
(111, 36, 4),
(112, 37, 1),
(113, 37, 2),
(114, 38, 1),
(115, 38, 2),
(116, 38, 3),
(117, 38, 4),
(118, 39, 1),
(119, 39, 2),
(120, 39, 3),
(121, 39, 4),
(122, 40, 1),
(123, 40, 2),
(124, 40, 3),
(125, 40, 4),
(126, 41, 1),
(127, 41, 2),
(128, 41, 3),
(129, 41, 4),
(130, 42, 1),
(131, 42, 2),
(132, 42, 3),
(133, 42, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sisusers`
--

CREATE TABLE `sisusers` (
  `usrId` int(11) NOT NULL,
  `usrNick` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `usrName` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usrLastName` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usrComision` int(11) NOT NULL,
  `usrPassword` varchar(5000) COLLATE utf8_spanish_ci NOT NULL,
  `grpId` int(11) NOT NULL,
  `usrimag` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sisusers`
--

INSERT INTO `sisusers` (`usrId`, `usrNick`, `usrName`, `usrLastName`, `usrComision`, `usrPassword`, `grpId`, `usrimag`) VALUES
(1, 'admin', 'Administrador', ' ', 0, '21232f297a57a5a743894a0e4a801fc3', 1, ''),
(4, 'Taller', 'taller', 'taller', 0, '59edbc14c05f7854d6ccfdc150beba80', 1, ''),
(5, 'hg', 'hugo', 'gallardo', 0, '81dc9bdb52d04dc20036dbd8313ed055', 7, ''),
(6, 'rvictoria', 'Victoria', 'Riveros', 0, 'e00cf25ad42683b3df678c61f42c6bda', 5, ''),
(8, 'compras', 'compras', 'compras', 0, 'a82a2df07e8039ee4d5a1f46b3f03416', 6, ''),
(9, 'mtatiana', 'Tatiana', 'Montaña', 0, '1dfd385c858365b0a5c5342053b8d230', 6, ''),
(10, 'supervisor', 'supervisor', 'taller', 0, '09348c20a019be0318387c08df7a783d', 5, ''),
(11, 'coord', 'Juan', 'Perez', 0, '332de775a36bbfcb140e1caa06299a8a', 7, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `dire` varchar(3000) NOT NULL,
  `telefono` varchar(3000) NOT NULL,
  `zonas` varchar(3000) NOT NULL,
  `id_localidad` int(11) NOT NULL,
  `descripc` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_sucursal`, `dire`, `telefono`, `zonas`, `id_localidad`, `descripc`) VALUES
(1, 'ee', 'ee', 'eee', 1, 'Macromin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id_tarea` int(11) NOT NULL,
  `descripcion` varchar(255) CHARACTER SET latin1 NOT NULL,
  `duracion_std` int(11) NOT NULL,
  `form_asoc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id_tarea`, `descripcion`, `duracion_std`, `form_asoc`) VALUES
(4, 'LIMPIE EL CUERPO DEL RADIADOR. UTILICE AIRE COMPRIMIDO.', 120, 1),
(5, 'REVISE LA BOMBA DE AGUA', 60, 1),
(6, 'LIMPIE EL FILTRO DE ADMISIÓN DE AIRE. SE PUEDE LIMPIAR COMO MÁXIMO 6 VECES, LUEGO CAMBIAR.', 60, 1),
(7, 'CAMBIE EL FILTRO DE ADMISIÓN DE AIRE', 60, 1),
(8, 'CAMBIE EL ACEITE DE MOTOR. ACEITE 15W40', 60, 1),
(9, 'CAMBIE LOS FILTROS DE ACEITE.', 60, 1),
(10, 'CAMBIE EL FILTRO DE COMBUSTIBLE DE MOTOR.', 60, 1),
(12, 'LIMPIE EL DEPÓSITO DE COMBUSTIBLE.', 60, 1),
(13, 'COMPRUEBE EL MOTOR DE ARRANQUE', 60, 1),
(14, 'REVISE EL SENSOR DE TEMPERATURA.', 60, 1),
(15, 'TOMAR MUESTRA DE ACEITE PARA ANÁLISIS DE LABORATORIO. USAR PROCEDIMIENTO PR0004EM', 60, 1),
(16, 'REALIZAR ANÁLISIS DE TEMPERATURA. UTIIZAR CÁMARA TERMOMÉTRICA O PIRÓMETRO', 60, 1),
(17, 'tarea de rectificacion subsector 2', 120, 1),
(18, 'tarea 1  plantilla  4', 80, 1),
(19, 'tarea 2 pantilla 4', 70, 1),
(20, 'tarea 3 plantilla 4', 150, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detanotapedido`
--

CREATE TABLE `tbl_detanotapedido` (
  `id_detaNota` int(11) NOT NULL,
  `id_notaPedido` int(11) DEFAULT NULL,
  `artId` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `provid` int(11) DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `fechaEntregado` date DEFAULT NULL,
  `remito` int(11) DEFAULT NULL,
  `estado` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `medida` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_detanotapedido`
--

INSERT INTO `tbl_detanotapedido` (`id_detaNota`, `id_notaPedido`, `artId`, `cantidad`, `provid`, `fechaEntrega`, `fechaEntregado`, `remito`, `estado`, `medida`) VALUES
(49, 50, 11, 11, 4, '2017-08-04', '2017-08-04', 1, 'C', '10'),
(50, 50, 17, 22, 11, '2017-08-11', '2017-08-11', 1, 'C', '10'),
(51, 51, 2, 12, 3, '2017-08-03', '2017-08-03', 1, 'C', '10'),
(52, 52, 2, 10, 4, '2017-08-07', '2017-08-07', 1, 'C', '10'),
(53, 53, 2, 15, 3, '2017-08-16', '2017-08-16', 1, 'C', '10'),
(54, 54, 2, 30, 4, '2017-08-14', '2017-08-14', 1, 'C', '10'),
(55, 55, 2, 2222, 12, '2017-09-06', '2017-09-06', 1545, 'E', '10'),
(56, 55, 3, 3333, 4, '2017-09-28', '2017-09-28', 7894, 'E', '10'),
(57, 56, 0, 5, 11, '2017-09-06', '2017-09-06', 1, 'P', '10'),
(58, 57, 2, 10, 3, '2017-09-12', '2017-09-12', 1, 'P', '10'),
(59, 58, 2, 23, 13, '2018-04-28', '2018-04-28', 1, 'P', '10'),
(60, 59, 2, 12, 3, '2018-07-23', '2018-07-23', 1, 'P', '10'),
(61, 60, 2, 23, 10, '2018-07-11', '2018-07-11', 1, 'P', NULL),
(62, 61, 2, 123, 10, '2018-07-24', '2018-07-24', 1, 'P', ' '),
(63, 62, 2, 123, 10, '2018-07-24', '2018-07-24', 1, 'P', ' '),
(64, 63, 2, 345, 10, '2018-07-24', '2018-07-24', 1, 'P', ' '),
(65, 64, 2, 345, 10, '2018-07-24', '2018-07-24', 1, 'P', ' 678 '),
(66, 65, 2, 5678, 12, '2018-07-24', '2018-07-24', 1, 'P', ' 123 '),
(67, 65, 2, 44, 10, '2018-07-24', '2018-07-24', 1, 'P', ' 123 '),
(68, 66, 2, 12, 0, '2018-07-27', '2018-07-27', 1, 'P', ' 15 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_equipos`
--

CREATE TABLE `tbl_equipos` (
  `id_equipo` int(11) NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 NOT NULL,
  `capacidad` int(11) DEFAULT NULL,
  `id_subsector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_equipos`
--

INSERT INTO `tbl_equipos` (`id_equipo`, `descripcion`, `capacidad`, `id_subsector`) VALUES
(2, 'fresadora', 60, 1),
(3, 'rectificadora', 20, 1),
(6, 'Test', 55, 2),
(7, 'Test Test', 77, 6),
(8, 'Test Fernando', 1000, 6),
(9, 'Equipo test 1', 180, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado`
--

CREATE TABLE `tbl_estado` (
  `estadoid` int(11) NOT NULL,
  `descripcion` varchar(3000) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_estado`
--

INSERT INTO `tbl_estado` (`estadoid`, `descripcion`, `estado`) VALUES
(1, 'ACTIVO', 'AC'),
(2, 'TRANSITO', 'TR'),
(3, 'REPARACION', 'RE'),
(4, 'COMODATO', 'CO'),
(5, 'CURSO', 'C'),
(6, 'INACTIVO', 'IN'),
(7, 'SOLICITADO', 'S'),
(8, 'TAREA REALIZADA', 'RE'),
(9, 'TERMINADO PARCIAL', 'TE'),
(10, 'TERMINADO', 'T'),
(11, 'ENTREGADO', 'E'),
(12, 'ASIGNADO', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_listarea`
--

CREATE TABLE `tbl_listarea` (
  `id_listarea` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `tareadescrip` varchar(5000) COLLATE utf8_spanish_ci NOT NULL,
  `id_tarea` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `tarea_realizada` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_equipo` int(11) NOT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `estado` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `duracion_prog` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_listarea`
--

INSERT INTO `tbl_listarea` (`id_listarea`, `id_orden`, `tareadescrip`, `id_tarea`, `id_usuario`, `fecha`, `tarea_realizada`, `id_equipo`, `fecha_inicio`, `fecha_fin`, `estado`, `duracion_prog`) VALUES
(0, 17, 'tarea 1  plantilla  4', 18, NULL, NULL, NULL, 0, NULL, NULL, 'IN', NULL),
(255, 17, 'LIMPIE EL CUERPO DEL RADIADOR. UTILICE AIRE COMPRIMIDO.', 4, 5, '2018-07-24 11:06:53', NULL, 4, NULL, NULL, 'AS', 120),
(256, 17, 'REVISE LA BOMBA DE AGUA', 5, 10, '2018-07-30 11:08:45', NULL, 3, NULL, NULL, 'AS', 60),
(257, 17, 'LIMPIE EL FILTRO DE ADMISIÓN DE AIRE. SE PUEDE LIMPIAR COMO MÁXIMO 6 VECES, LUEGO CAMBIAR.', 6, NULL, NULL, NULL, 0, NULL, NULL, 'IN', 60),
(259, 17, 'tarea 2 pantilla 4', 19, NULL, '2018-07-30 11:52:36', NULL, 3, NULL, NULL, 'IN', 70),
(260, 17, 'tarea 3 plantilla 4', 20, NULL, NULL, NULL, 0, NULL, NULL, 'IN', NULL),
(261, 17, 'TOMAR MUESTRA DE ACEITE PARA ANÁLISIS DE LABORATORIO. USAR PROCEDIMIENTO PR0004EM', 15, NULL, NULL, NULL, 0, NULL, NULL, 'IN', 60),
(262, 17, 'tarea de rectificacion subsector 2', 17, NULL, NULL, NULL, 0, NULL, NULL, 'IN', 120),
(263, 17, 'tarea 1  plantilla  4', 18, NULL, NULL, NULL, 0, NULL, NULL, 'IN', 80),
(264, 17, 'CAMBIE EL FILTRO DE COMBUSTIBLE DE MOTOR.', 10, NULL, NULL, NULL, 0, NULL, NULL, 'IN', 60),
(265, 17, 'CAMBIE EL FILTRO DE ADMISIÓN DE AIRE', 7, NULL, NULL, NULL, 0, NULL, NULL, 'IN', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_listplantilla`
--

CREATE TABLE `tbl_listplantilla` (
  `id_detaplantilla` int(11) NOT NULL,
  `id_plantilla` int(11) NOT NULL,
  `descripcion_deta` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_tarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_listplantilla`
--

INSERT INTO `tbl_listplantilla` (`id_detaplantilla`, `id_plantilla`, `descripcion_deta`, `id_tarea`) VALUES
(1, 26, 'tarea1', 4),
(3, 26, 'tarea 2', 5),
(4, 27, 'tarea 3', 6),
(5, 27, 'tarea 4', 7),
(7, 29, 'tarea 1 platila 4', 18),
(9, 29, 'tarea 2 plantilla 4', 19),
(10, 29, 'taraea 3 plantilla 4', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_lote`
--

CREATE TABLE `tbl_lote` (
  `loteid` int(11) NOT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cantidad` varchar(255) DEFAULT NULL,
  `artId` int(11) DEFAULT NULL,
  `lotestado` char(4) DEFAULT NULL,
  `depositoid` int(11) DEFAULT NULL,
  `usrId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_lote`
--

INSERT INTO `tbl_lote` (`loteid`, `codigo`, `fecha`, `cantidad`, `artId`, `lotestado`, `depositoid`, `usrId`) VALUES
(10, NULL, '2017-08-07', '31', 2, 'AC', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notapedido`
--

CREATE TABLE `tbl_notapedido` (
  `id_notaPedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_ordTrabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_notapedido`
--

INSERT INTO `tbl_notapedido` (`id_notaPedido`, `fecha`, `id_ordTrabajo`) VALUES
(50, '2017-08-04', 28),
(51, '2017-08-07', 29),
(52, '2017-08-07', 26),
(53, '2017-08-09', 25),
(54, '2017-08-14', 15),
(55, '2017-09-04', 71),
(56, '2017-09-06', 18),
(57, '2017-09-12', 72),
(58, '2018-04-16', 19),
(59, '2018-07-23', 35),
(60, '2018-07-23', 17),
(61, '2018-07-23', 17),
(62, '2018-07-23', 17),
(63, '2018-07-23', 17),
(64, '2018-07-23', 17),
(65, '2018-07-23', 17),
(66, '2018-07-27', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_subsector`
--

CREATE TABLE `tbl_subsector` (
  `id_subsector` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_subsector`
--

INSERT INTO `tbl_subsector` (`id_subsector`, `descripcion`) VALUES
(1, 'Diagnostico'),
(2, 'Rectificacion'),
(6, 'Test 1'),
(7, 'Test 2'),
(8, 'Subsector test 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trj_nomenclador_motores`
--

CREATE TABLE `trj_nomenclador_motores` (
  `indice_id` int(11) NOT NULL,
  `codigo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `motor` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mano_obra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trj_nomenclador_motores`
--

INSERT INTO `trj_nomenclador_motores` (`indice_id`, `codigo`, `motor`, `mano_obra`) VALUES
(1, 'BED200', 'BEDFORD 200 DIESEL *4CIL* 98.4mm', 4),
(2, 'BED300', 'BEDFORD 300 DIESEL *4CIL* 98.4mm', 4),
(3, 'BED350', 'BEDFORD 350 DIESEL *4CIL* 106.3mm', 4),
(4, 'BORGVM', 'BORGWARD VM HR492 *4CIL* 92mm', 4),
(5, 'CAT.924', 'CATERPILAR 3056 (PERKINS ) DIESEL *6CIL* 100mm', 6),
(6, 'CAT.3024', 'CATERPILLAR 3024 MINICARGADOR (PERKINS)', 4),
(7, 'CAT.3064', 'CATERPILLAR 3064 DIESEL*4CIL*102mm', 7),
(8, 'CAT.3066', 'CATERPILLAR 3066 *6CIL* 102mm', 7),
(9, 'CAT.3066', 'CATERPILLAR 3066 DIESEL (MITSUBISHI)*6CIL', 8),
(10, 'CAT.3114', 'CATERPILLAR 3114 *4CIL* 105mm', 8),
(11, 'CAT.3116', 'CATERPILLAR 3116 *6CIL* 105mm', 8),
(12, 'CAT.3126', 'CATERPILLAR 3126 DIESEL( 962G)*6CIL*110mm', 8),
(13, 'CAT.3204', 'CATERPILLAR 3204 (910)*4CIL* 114.3mm', 8),
(14, 'CAT.3208', 'CATERPILLAR 3208 *8CIL-V* 114.3mm', 8),
(15, 'CAT.3304 ASP', 'CATERPILLAR 3304 ASP.NOR.INY.IND.P38*4CIL*120.6mm', 10),
(16, 'CAT.3304 TBO', 'CATERPILLAR 3304 TURBO INY.DIR.P43*4CIL*120.6mm', 10),
(17, 'CAT.3306 ASP', 'CATERPILLAR 3306 ASP.NOR.INY.IND.P38*6CIL*120.6mm', 10),
(18, 'CAT.3306 TBO', 'CATERPILLAR 3306 TURBO INY.DIR.P43*6CIL*120.6mm', 10),
(19, 'CAT.333', 'CATERPILLAR 333 *6CIL* 114.3mm', 8),
(20, 'CAT.3404', 'CATERPILLAR 3404 *4CIL* 137.2mm', 11),
(21, 'CAT.3406', 'CATERPILLAR 3406 TURBO DIESEL*6CIL*137.2 mm', 11),
(22, 'CAT.3408', 'CATERPILLAR 3408 DIESEL*8CIL-V*137.2 mm', 12),
(23, 'CAT.3412', 'CATERPILLAR 3412 *12CIL-V* 137.2mm', 12),
(24, 'CAT.399', 'CATERPILLAR 399 *12CIL-V* 158.76mm', 13),
(25, 'CAT.416C', 'CATERPILLAR 416 C (PERKINS 3054)*4CIL* 100mm', 6),
(26, 'CAT.3056', 'CATERPILLAR 924 (PERKINS 3056E) DIESEL*6CIL*100mm', 6),
(27, 'CAT.C-11', 'CATERPILLAR C-11 DIESEL (1332)*6CIL*130.30mm', 10),
(28, 'CAT.C-13', 'CATERPILLAR C-13 DIESEL *6CIL*130.30mm', 10),
(29, 'CAT.C-15', 'CATERPILLAR C-15 DIESEL (65B-1693)*6CIL*145mm', 12),
(30, 'CAT.C-18', 'CATERPILLAR C-18 DIESEL *6CIL*145mm', 12),
(31, 'CAT.C-6.4', 'CATERPILLAR C-6.4 DIESEL 6400cc*6CIL*102mm', 7),
(32, 'CAT.C-7', 'CATERPILLAR C-7 DIESEL( 3126B)*6CIL*110mm', 8),
(33, 'CAT.C-9', 'CATERPILLAR C-9 DIESEL*6CIL*112mm', 8),
(34, 'CAT.D343', 'CATERPILLAR D343 *6CIL* 137.2mm', 12),
(35, 'CAT.D353', 'CATERPILLAR D353  *6CIL* 158.76mm', 13),
(36, 'CAT.D399', 'CATERPILLAR D399 DIESEL*12CIL-V*158.76mm', 13),
(37, 'CAT.D7', 'CATERPILLAR D7 17A *4CIL* 146.06mm', 13),
(38, 'CAT.D8 (342)', 'CATERPILLAR D8 (342) *6CIL* 146.06mm', 13),
(39, 'CHEROKEE VM', 'CHEROKEE VM TURBO DIESEL *4CIL*92MM', 4),
(40, 'CHEVETTE 1.6', 'CHEVETTE 1.6 NAF. 8 VAL*4CIL* 82mm.', 2),
(41, 'CHEV.6C', 'CHEVROLET 230-250 NAF.*6CIL* 98.4mm', 2),
(42, 'ASTRA 2.0 TD i', 'CHEVROLET ASTRA - VECTRA 2.0 TURBO DIESEL INY.16 VAL.*4CIL* 84mm', 3),
(43, 'ASTRA 2.0 8V', 'CHEVROLET ASTRA - ZAFIRA 2. MPI NAF 8V', 3),
(44, 'AVEO 1.4 16V', 'CHEVROLET AVEO F14/D*F14/N 1.4 16 VAL*4CIL*77.9mm', 3),
(45, 'AVEO 1.6 16V', 'CHEVROLET AVEO-DAEWO F16D 1.6', 3),
(46, 'CHEV C10', 'CHEVROLET C10 TURBO DIESEL (XD3) *4CIL* 94mm', 3),
(47, 'CHEV. CAPTIVA', 'CHEVROLET CAPTIVA (HYUNDAI D4EA) TDIESEL 16VAL', 3),
(48, 'CORSA 1.0 8V', 'CHEVROLET CORSA 1.0 -SUZUKI FUN  EFI  NAF.*4CIL* 71.08mm', 2),
(49, 'CORSA 1.4 8V', 'CHEVROLET CORSA 1.4 AGILE-ASTRA  NAF.8 V *4CIL* 77.6mm', 2),
(50, 'CORSA 1.6 8V', 'CHEVROLET CORSA 1.6 NAF. 8 VAL.*4CIL* 79mm', 2),
(51, 'CORSA 1.6 16V', 'CHEVROLET CORSA 1.6 NAF.16 VAL.*4CIL* 79mm', 3),
(52, 'MERIVA 1.7 TD', 'CHEVROLET MERIVA 1.7 TD *16VAL*4CIL*79mm', 3),
(53, 'MERIVA 1.8 16V', 'CHEVROLET MERIVA 1.8 16V -CORS F/2  NAF.INY', 3),
(54, 'MERIVA 1.8 8V', 'CHEVROLET MERIVA 1.8 8V -SIENA  NAF. INY.*4CIL* 80.50mm', 2),
(55, 'MONZA 2.0', 'CHEVROLET MONZA 2.0 *NAF*8VAL*4CIL*86mm', 3),
(56, 'MONZA 2.0i', 'CHEVROLET MONZA 2.0i *NAF*8VAL*4CIL*86mm', 3),
(57, 'VECTRA 1.8', 'CHEVROLET VECTRA 1.8 NAF.8 VAL.*4CIL* 84.8mm', 2),
(58, 'VECTRA 2.0', 'CHEVROLET VECTRA 2.0 -ASTRA ZAFIRA', 3),
(59, 'VECTRA 2.4 16V', 'CHEVROLET VECTRA- X24SE 2.4', 4),
(60, 'VECTRA 1.7 TD', 'CHEVROLET VECTRA-ASTRA 1.7 TURBO DIESEL*4CIL* 82.mm', 3),
(61, 'VECTRA 2.2 16V', 'CHEVROLET VECTRA-BLAZER 2.2 NAF.INY 16 VAL*4CIL*86mm', 3),
(62, 'VECTRA 2.2 8V', 'CHEVROLET VECTRA-BLAZER 2.2 NAF.INY 8 VAL*4CIL*86mm', 3),
(63, 'CHEV.VERANEIO', 'CHEVROLET VERANEIO NAF.*6CIL* 98.46mm', 2),
(64, 'CHRYSLER NEON', 'CHRYSLER NEON 2.0 NAF.16VAL. INY.*4CIL*87.5mm', 2),
(65, 'CIM 4C', 'CIMARRON 3800cc *4CIL* 106.3mm', 4),
(66, 'BERLINGO 1.6 8V', 'CITROEN BERLINGO 1.6 HDi TD 8VAL*4CIL*75mm', 3),
(67, 'CITROEN C3 - C4', 'CITROEN C3 - C4 1.6 NAF (TU5JP4) 16V*4CIL', 3),
(68, 'CITROEN C3 1.4', 'CITROEN C3 NAF. (TU3) 1.4 *4CIL*75mm', 2),
(69, 'CITROEN C3 1.4D', 'CITROEN C3 TDCI 1.4 TURBO DIESEL 8VAL.*4CIL* 73', 7),
(70, 'CITROEN C3 1.6', 'CITROEN C3 XU5JP4 1.6 NAF.16 VAL.*4CIL* 78.5mm', 3),
(71, 'CITROEN C4 - C5', 'CITROEN C4 - C5 HDI 2.0 DW10 TURBO DIESEL*4CIL* 85mm', 3),
(72, 'CITROEN C4 2.0i', 'CITROEN C4 EW10J4 2.0i NAF.16VAL.*4CIL*85mm', 3),
(73, 'CUMM.4B', 'CUMMINS 4B DIESEL ASP.NOR.*4CIL* 102mm', 7),
(74, 'CUMM.4BT', 'CUMMINS 4BT DIESEL TURBO *4CIL* 102mm', 7),
(75, 'CUMM.4BTA', 'CUMMINS 4BTA DIESEL TURBO *4CIL* 102mm', 7),
(76, 'CUMM.4BTE', 'CUMMINS 4BTE ISB ELECTRONICO DIESEL*4CIL*102mm', 8),
(77, 'CUMM.4QSB', 'CUMMINS 4QSB DIESEL 4.5 ELECTRONICO *4CIL*107mm', 8),
(78, 'CUMM.6B', 'CUMMINS 6B DIESEL ASP.NOR *6CIL* 102mm', 7),
(79, 'CUMM.6BT', 'CUMMINS 6BT DIESEL TURBO *6CIL* 102mm', 7),
(80, 'CUMM.6BTE', 'CUMMINS 6BTE ISB ELECTRONICO DIESEL*6CIL*102mm', 8),
(81, 'CUMM.6CT', 'CUMMINS 6CT DIESEL TURBO 8.3 *6CIL* 114mm', 10),
(82, 'CUMM.6CTAA', 'CUMMINS 6CTAA DIESEL TURBO 8.3 *6CIL* 114mm', 10),
(83, 'CUMM.6CTE', 'CUMMINS 6CTE ISC ELECTRONICO DIESEL*6CIL*114mm', 10),
(84, 'CUMM.6QSB 102', 'CUMMINS 6QSB DIESEL 5.9 ELECTRONICO*6CIL*102mm', 8),
(85, 'CUMM.6QSB 107', 'CUMMINS 6QSB DIESEL 6.7 ELECTRONICO *6CIL*107mm', 8),
(86, 'CUMM.C155', 'CUMMINS C155 DIESEL *6CIL.-V* 117.48mm', 10),
(87, 'CUMM.KT1150', 'CUMMINS KT1150 DIESEL *6CIL* 158.75mm', 13),
(88, 'CUMM.KT6', 'CUMMINS KT6 DIESEL *6CIL* 158.75mm', 13),
(89, 'CUMM.NH220', 'CUMMINS NH220 DIESEL *6CIL* 130.17mm', 12),
(90, 'CUMM.NT855', 'CUMMINS NT855 DIESEL *6CIL* 139.70mm', 12),
(91, 'CUMM.V-785', 'CUMMINS V-785 DIESEL *8CIL-V* 139.70mm', 12),
(92, 'CUMM.V-903', 'CUMMINS V-903 DIESEL *8CIL-V* 139.70mm', 12),
(93, 'DAKOTA V-6 3.9', 'DAKOTA V-6 3.9 NAF *V-6CIL*99', 31),
(94, 'D1114 2C', 'DEUTZ 1114 DIESEL *2CIL* 115mm', 8),
(95, 'D1114 3C', 'DEUTZ 1114 DIESEL *3CIL* 115mm', 8),
(96, 'D1114 4C', 'DEUTZ 1114 DIESEL *4CIL* 115mm', 8),
(97, 'D1114 6C', 'DEUTZ 1114 DIESEL *6CIL* 115mm', 8),
(98, 'D2114 2C', 'DEUTZ 2114 DIESEL *2CIL* 120mm', 8),
(99, 'D2114 3C', 'DEUTZ 2114 DIESEL *3CIL* 120mm', 8),
(100, 'D2114 4C', 'DEUTZ 2114 DIESEL *4CIL* 120mm', 8),
(101, 'D2114 6C', 'DEUTZ 2114 DIESEL *6CIL* 120mm', 8),
(102, 'D413 BF8L', 'DEUTZ 413 BF8L DIESEL *8CIL-V* 125mm', 10),
(103, 'D413 F8L', 'DEUTZ 413 F8L DIESEL *8CIL-V* 120mm', 9),
(104, 'D514 2C', 'DEUTZ 514 DIESEL *2CIL* 110mm', 7),
(105, 'D514 3C', 'DEUTZ 514 DIESEL *3CIL* 110mm', 7),
(106, 'D514 4C', 'DEUTZ 514 DIESEL *4CIL* 110mm', 7),
(107, 'D514 6C', 'DEUTZ 514 DIESEL *6CIL* 110mm', 7),
(108, 'D912 AN2', 'DEUTZ 912 DIESEL ASP.NOR *2CIL* 100mm', 8),
(109, 'D912 AN3', 'DEUTZ 912 DIESEL ASP.NOR *3CIL* 100mm', 8),
(110, 'D912 AN4', 'DEUTZ 912 DIESEL ASP.NOR *4CIL* 100mm', 8),
(111, 'D912 AN5', 'DEUTZ 912 DIESEL ASP.NOR *5CIL* 100mm', 8),
(112, 'D912 AN6', 'DEUTZ 912 DIESEL ASP.NOR *6CIL* 100mm', 8),
(113, 'D913 AN2', 'DEUTZ 913 DIESEL ASP.NOR *2CIL* 102mm', 8),
(114, 'D913 AN3', 'DEUTZ 913 DIESEL ASP.NOR *3CIL* 102mm', 8),
(115, 'D913 AN4', 'DEUTZ 913 DIESEL ASP.NOR *4CIL* 102mm', 8),
(116, 'D913 AN5', 'DEUTZ 913 DIESEL ASP.NOR *5CIL* 102mm', 8),
(117, 'D913 AN6', 'DEUTZ 913 DIESEL ASP.NOR *6CIL* 102mm', 8),
(118, 'D913 T4C', 'DEUTZ 913 DIESEL TURBO *4CIL* 102mm', 8),
(119, 'D913 T6C', 'DEUTZ 913 DIESEL TURBO *6CIL* 102mm', 8),
(120, 'D2011 BF2M', 'DEUTZ BF2M 2011 DIESEL REFRIG.ACEITE *2CIL*94mm', 7),
(121, 'D2011 BF3M', 'DEUTZ BF3M 2011 DIESEL REFRIG.ACEITE *3CIL*94mm', 7),
(122, 'D1011F 4C', 'DEUTZ BF4M 1011F DIESEL *4CIL* 91mm', 7),
(123, 'D2011 BF4M', 'DEUTZ BF4M 2011 DIESEL REFRIG.ACEITE *4CIL*94mm', 7),
(124, 'DI TELLA', 'DI TELLA 1500-MAGNETTE NAF.*4CIL*73/76mm', 1),
(125, 'DOG.1.5', 'DODGE 1500 NAF.*4CIL* 86.1mm', 1),
(126, 'DOG.1.8', 'DODGE 1800 NAF *4CIL* 86.1mm', 1),
(127, 'DODGE GTX V8', 'DODGE GTX NAF.*8CIL-V* 3.91" 99.31mm', 5),
(128, 'F.1100 4C', 'FIAT 1100 NAF*4CIL* 68mm', 1),
(129, 'F.115.80', 'FIAT 115.80-115.90 IMPORTADO DIESEL*6CIL*104mm', 8),
(130, 'F.1180/103', 'FIAT 1180 IMPORTADO DIESEL*6CIL* 103mm', 8),
(131, 'F.125 4C', 'FIAT 125 NAF.*4CIL* 80mm', 1),
(132, 'F.128 1.3', 'FIAT 128 1300 NAF.*4CIL* 86mm', 1),
(133, 'F.128 1.5', 'FIAT 128 1500-REGATA 85-S/EUROPA NAF.*4CIL* 86.4mm', 1),
(134, 'F.128 1.1', 'FIAT 128-147 1100 NAF.*4CIL* 80mm', 1),
(135, 'F.1.3.D', 'FIAT 1300 DIESEL 147-DUNA *4CIL* 76mm', 2),
(136, 'F.133 4C', 'FIAT 133 NAF.*4CIL* 65mm', 1),
(137, 'F.1380 T', 'FIAT 1380 IMPORTADO TURBO DIESEL*6CIL*103mm', 8),
(138, 'F.147 1050cc', 'FIAT 147 1050cc NAF.*4CIL* 76mm BRASIL', 1),
(139, 'F.150 E20 T', 'FIAT 150 E-20 IMPORTADO EUROCARGO TURBO DIESEL*6CIL*104mm', 8),
(140, 'F.150 T', 'FIAT 150 IMPORTADO TURBO DIESEL(8060 IVECO)*6CIL*104mm', 8),
(141, 'F.1500 4C', 'FIAT 1500 NAF.*4CIL* 77mm', 1),
(142, 'F.1580', 'FIAT 1580 IMPORTADO DIESEL*6CIL*115mm', 8),
(143, 'F.1580 T', 'FIAT 1580-1880 IMPORTADO TURBO DIESEL*6CIL*115mm', 8),
(144, 'F.160 E23 T', 'FIAT 160 E-23 IMPORTADO EUROCARGO TURBO DIESEL*6CIL*104mm', 8),
(145, 'F.1600 4C', 'FIAT 1600 NAF.*4CIL* 78mm', 1),
(146, 'F.1.7.D', 'FIAT 1700 DIESEL DUNA-DUCATO*4CIL* 82.6mm', 3),
(147, 'F.170 E-22', 'FIAT 170E22 TECTOR (CUMMINS 6BTE) ELECTRONICO', 7),
(148, 'F.1.9.D', 'FIAT 1900 DIESEL DUCATO*4CIL* 82.6mm', 3),
(149, 'F.400/500', 'FIAT 400-500 DIESEL*3CIL* 110mm', 7),
(150, 'F.411-R', 'FIAT 411-R DIESEL*4CIL* 85mm', 4),
(151, 'F.450', 'FIAT 450 SOMECA DA50 DIESEL *4CIL*100mm', 6),
(152, 'F.540/640', 'FIAT 540-640 IMPORTADO DIESEL*4CIL* 100mm', 8),
(153, 'F.55.90', 'FIAT 55.90-60.90 IMPORTADO DIESEL*3CIL* 100mm', 8),
(154, 'F.619 N', 'FIAT 619 N DIESEL*6CIL* 135mm', 10),
(155, 'F.619 N1', 'FIAT 619 N1-697 DIESEL*6CIL* 137mm', 10),
(156, 'F.650/700S', 'FIAT 650-700S DIESEL*4CIL* 108mm', 6),
(157, 'F.682 2N', 'FIAT 682 N2 DIESEL*6CIL* 125mm', 8),
(158, 'F.682 N3', 'FIAT 682 N3 DIESEL*6CIL* 130mm', 8),
(159, 'F.700E', 'FIAT 700E DIESEL*4CIL* 115mm', 7),
(160, 'F.750 4C', 'FIAT 750 NAF.*4CIL* 62mm', 1),
(161, 'F.780', 'FIAT 780 DIESEL*4CIL* 125mm', 8),
(162, 'F.780/103', 'FIAT 780 IMPORTADO DIESEL*4CIL* 103mm', 8),
(163, 'F.800', 'FIAT 800 DIESEL C/BALANCEADOR *4CIL* 115mm', 7),
(164, 'F.880/103', 'FIAT 880 IMPORTADO DIESEL*5CIL* 103mm', 8),
(165, 'F.980/100', 'FIAT 980 IMPORTADO DIESEL*6CIL* 100mm', 8),
(166, 'F.980/103', 'FIAT 980 IMPORTADO DIESEL*6CIL* 103mm', 8),
(167, 'F.CP3/TR', 'FIAT CP3 900-1100 TRACTOR DIESEL*6CIL* 110mm', 7),
(168, 'F.CP3/VE', 'FIAT CP3 900-1100 VEHICULAR DIESEL*6CIL* 110mm', 7),
(169, 'F.DUCATO 2.5', 'FIAT DUCATO 2.5 RENAULT MASTER DIESEL*4CIL*93mm', 5),
(170, 'F.DUCATO 2.8', 'FIAT DUCATO 2.8 RENAULT MASTER DIESEL*4CIL*94.4mm', 5),
(171, 'F.DUCATO 2', '8 T', 0),
(172, 'F.FIRE 1.0 16V', 'FIAT FIRE 1000 NAF.16 VAL.*4CIL* 70mm', 2),
(173, 'F.FIRE 1.0 8V', 'FIAT FIRE 1000 NAF.8 VAL.*4CIL* 70mm', 2),
(174, 'F.FIRE 1.3 16V', 'FIAT FIRE 1300 NAF.16 VAL *4CIL* 70.8mm', 2),
(175, 'F.FIRE 1.3 8V', 'FIAT FIRE 1300 NAF.8 VAL *4CIL* 70.8mm', 2),
(176, 'F.FIRE 1.4i 8V', 'FIAT FIRE 1400 INY NAF.8V *4CIL* 72mm', 2),
(177, 'F.I/DAI', 'FIAT IVECO DAILY 40.8 DIESEL*4CIL* 93mm', 5),
(178, 'F.I/DAI T', 'FIAT IVECO DAILY 49.10 TURBO DIESEL*4CIL* 93mm', 5),
(179, 'F.EUROTECH', 'FIAT IVECO EUROTECH 380 DIESEL*6CIL*137mm', 10),
(180, 'F.EUROTRAKER', 'FIAT IVECO EUROTRAKER 420 DIESEL*6CIL*137mm', 10),
(181, 'F.MAREA JTD', 'FIAT MAREA JTD STILO-BRAVA 1.9 TURBO DIESEL*4CIL* 82mm', 2),
(182, 'F.PAL/SIENA TD', 'FIAT PALIO-SIENA TURBO DIESEL*4CIL* 82.6mm', 3),
(183, 'F.PALIO 1.6', 'FIAT PALIO-SIENA-MAREA-1.6 MPI. NAF.16V*4CIL*86.4mm', 2),
(184, 'F.PALIO 1.8', 'FIAT PALIO-SIENA-MAREA-STRADA 1.8 NAF.16V*4CIL*82mm', 2),
(185, 'F.R-60', 'FIAT R-60 DIESEL*4CIL* 122mm', 8),
(186, 'F.RTA 100', 'FIAT REGATA 100 NAF.8 VAL*4CIL* 84mm', 2),
(187, 'F.RTA 2000', 'FIAT REGATA 2000 NAF.8 VAL*4CIL* 84mm', 2),
(188, 'F.SOMECA', 'FIAT SOMECA DIESEL M-45  M-50 M-55*4CIL* 105mm', 6),
(189, 'F.TEMPRA 16V', 'FIAT TEMPRA 2000 NAF.16VAL*4CIL* 84mm', 2),
(190, 'F.TEMPRA 8V', 'FIAT TEMPRA 2000 NAF.8VAL*4CIL* 84mm', 2),
(191, 'F.TIP 1.4', 'FIAT TIPO 1400 DUNA-UNO NAF.*4CIL* 80.5mm', 2),
(192, 'F.TIP 1.6', 'FIAT TIPO 1600 DUNA-UNO NAF.*4CIL* 86.4mm', 2),
(193, 'F.TIP MPI', 'FIAT TIPO 1600 PALIO MPI NAF.8 VAL*4CIL* 86.4mm', 2),
(194, 'F.U-25', 'FIAT U-25 DIESEL*2CIL* 85mm', 4),
(195, 'F.1300 MPI 16V', 'FIAT UNO-PALIO-FIRE 1300 NAF.MPI. 16VAL*4CIL*76mm', 2),
(196, 'F.1300 MPI 8V', 'FIAT UNO-PALIO-FIRE 1300 NAF.MPI. 8VAL*4CIL*76mm', 2),
(197, 'FOR.170', 'FORD 170-187NAF(FUTURA)4 BANCADAS *6CIL* 90.4mm', 2),
(198, 'FOR.221', 'FORD 188-221 NAF(FALCON-F-100)7BANCADAS*6CIL*93.4mm', 2),
(199, 'FOR.ECO', 'FORD ECONO MAX NAF*6CIL* 93.4mm', 2),
(200, 'FOR.ECOSPORT 1.4', 'FORD ECOSPORT 1.4(TDCi) TURBO DIESEL INY 8VAL*4CIL* 73.7mm', 3),
(201, 'FOR.AU 1.6', 'FORD ESCORT NAF1600(AUDI)*4CIL* 81mm', 2),
(202, 'FOR.ES1.6', 'FORD ESCORT NAF1600(RENAULT)*4CIL*77mmCHT', 1),
(203, 'FOR.AU 1.8', 'FORD ESCORT NAF1800(AUDI)*4CIL* 81mm', 2),
(204, 'FOR.ES.DI', 'FORD ESCORT-FIESTA-ORION DIESEL*4CIL* 80mm', 3),
(205, 'FOR.EXPLORER', 'FORD EXPLORER 4000  NAF*6CIL-V* 100.33mm', 4),
(206, 'FOR.4.9i', 'FORD F/100 4900 INY NAF*6CIL* 101.60mm', 4),
(207, 'FOR.V-8', 'FORD F/100-F/350-F/600 NAF*8CIL-V* 95.2mm', 2),
(208, 'FOR.FI.D', 'FORD FIESTA-ESCORT-ORION DIESEL 1.8 *4CIL* 82.5mm', 3),
(209, 'FOR-FI1.4', 'FORD FIESTA-ESCORT-ORION NAF 1400*4CIL* 77.24mm', 2),
(210, 'FOR.FI 1.3', 'FORD FIESTA-KA 1300 NAF.8VAL*4CIL*74mm', 2),
(211, 'FOR.FOCUS TD', 'FORD FOCUS-FIESTA-MONDEO 1.8 TURBO DIESEL *4CIL* 82.5mm', 3),
(212, 'FOR.FOCUS TDI', 'FORD FOCUS-FIESTA-MONDEO 1.8 TURBO DIESEL INY *4CIL* 82.5mm', 3),
(213, 'FOR.AU2.0', 'FORD GALAXI NAF.2000(AUDI)*4CIL*82.5mm', 2),
(214, 'FOR.ROCAM 1.0', 'FORD KA - FIESTA ROCAM NAF*8VAL*4CIL', 2),
(215, 'FOR. RANGER 2.3', 'FORD RANGER 2.3 EFI NAF. *4CIL*96MM', 3),
(216, 'FOR.RANGER 2.5', 'FORD RANGER 2.5 EFI NAF.*8VAL*4CIL*96mm', 3),
(217, 'FOR. RANGER 3.0', 'FORD RANGER 3.0 MOTOR INTERNACIONAL NGD *4CIL*96MM', 5),
(218, 'FOR. RANGER 2.3', 'FORD RANGER CDSA 2.3 NAF. 16VALV *4CIL*87.5MM', 3),
(219, 'FOR.ROCAM 1.0', 'FORD ROCAM 1000 FIESTA-KA NAF.8 VAL*4CIL* 68.68mm', 3),
(220, 'FOR.ROCAM 1.6', 'FORD ROCAM 1600 ECOSPORT NAF 8VAL*4CIL*82mm', 3),
(221, 'FOR.SI1.6', 'FORD SIERRA NAF 1600*4CIL* 81.3mm', 2),
(222, 'FOR.TA2.0', 'FORD TAUNUS 2000 NAF*4CIL* 89mm', 2),
(223, 'FOR.TA2.3', 'FORD TAUNUS-SIERRA 2300 NAF*4CIL* 96mm', 2),
(224, 'FOR.TRANSIT 2.4', 'FORD TRANSIT 2.4TDI *16VALV*89', 90),
(225, 'FOR.TRANSIT', 'FORD TRANSIT 2.5 DIESEL*4CIL* 93.67mm', 5),
(226, 'FOR.ZET. 1.4', 'FORD ZETEC 1400cc NAF *16VAL*4CIL*76mm', 3),
(227, 'FOR.ZET 1.6', 'FORD ZETEC 1600 FOCUS 16VAL NAF*4CIL*76mm', 3),
(228, 'FOR.ZET 1.8', 'FORD ZETEC 1800 FOCUS 16VAL NAF*4CIL*80.6mm', 3),
(229, 'FOR.ZET2.0', 'FORD ZETEC 2000 MONDEO-ESCAPE 16 VAL NAF*4CIL*84.8mm', 3),
(230, 'G.M 12-71 AV', 'G.M 12-71AV*12CIL-V*(4VAL X CIL) PISTON ARTICULADO 4 1/4 108mm', 10),
(231, 'G.M 16-71 AV', 'G.M 16-71AV*16CIL-V*(4VAL X CIL) PISTON ARTICULADO 4 1/4 108mm', 10),
(232, 'G.M 2-53', 'G.M 2-53 *2CIL* 3 7/8 98.4mm', 5),
(233, 'G.M 2-71', 'G.M 2-71*2CIL* (2VAL X CIL) 4 1/4 108mm', 8),
(234, 'G.M 2-71 A', 'G.M 2-71A*2CIL*(4VAL X CIL) PISTON ARTICULADO 4 1/4 108mm', 8),
(235, 'G.M 2-71 N', 'G.M 2-71N*2CIL* (4VAL X CIL) PISTON NORMAL 4 1/4 108mm', 8),
(236, 'G.M 3-53', 'G.M 3-53 *3CIL* 3 7/8 98.4mm', 5),
(237, 'G.M 3-71', 'G.M 3-71*3CIL* (2VAL X CIL) 4 1/4 108mm', 8),
(238, 'G.M 3-71 A', 'G.M 3-71A*3CIL*(4VAL X CIL) PISTON ARTICULADO 4 1/4 108mm', 8),
(239, 'G.M 3-71 N', 'G.M 3-71N*3CIL* (4VAL X CIL) PISTON NORMAL 4 1/4 108mm', 8),
(240, 'G.M 4-53', 'G.M 4-53 *4CIL* 3 7/8 98.4mm', 5),
(241, 'G.M 4-71', 'G.M 4-71*4CIL* (2VAL X CIL) 4 1/4 108mm', 8),
(242, 'G.M 4-71 A', 'G.M 4-71A*4CIL*(4VAL X CIL) PISTON ARTICULADO 4 1/4 108mm', 8),
(243, 'G.M 4-71 N', 'G.M 4-71N*4CIL* (4VAL X CIL) PISTON NORMAL 4 1/4 108mm', 8),
(244, 'G.M 6-53 V', 'G.M 6-53 *6CIL-V* 3 7/8 98.4mm', 5),
(245, 'G.M 6-71', 'G.M 6-71*6CIL* (2VAL X CIL) 4 1/4 108mm', 8),
(246, 'G.M 6-71 V', 'G.M 6-71*6CIL-V* (2VAL X CIL) 4 1/4 108mm', 8),
(247, 'G.M 6-71 A', 'G.M 6-71A*6CIL*(4VAL X CIL) PISTON ARTICULADO 4 1/4 108mm', 8),
(248, 'G.M 6-71 AV', 'G.M 6-71AV*6CIL-V*(4VAL X CIL) PISTON ARTICULADO 4 1/4 108mm', 8),
(249, 'G.M 6-71 N', 'G.M 6-71N*6CIL* (4VAL X CIL) PISTON NORMAL 4 1/4 108mm', 8),
(250, 'G.M 6-71 NV', 'G.M 6-71NV*6CIL-V*(4VAL X CIL) PISTON NORMAL 4 1/4 108mm', 8),
(251, 'G.M 8-71 AV', 'G.M 8-71AV*8CIL-V*(4VAL X CIL) PISTON ARTICULADO 4 1/4 108mm', 8),
(252, 'G.M 8-71 NV', 'G.M 8-71NV*8CIL-V*(4VAL X CIL) PISTON NORMAL 4 1/4 108mm', 8),
(253, 'HANG R35', 'HANOMAG R/35-R/40-R/57 DIESEL*4CIL* 90mm', 5),
(254, 'HANG R60', 'HANOMAG R/45-R/60-R/75 DIESEL*4CIL* 110mm', 8),
(255, 'IKA 4 CI', 'IKA NAF.*4CIL* 84mm', 1),
(256, 'IKA 6 CI', 'IKA NAF.*6CIL* 84mm', 1),
(257, 'IKA TOR 4', 'IKA TORNADO-TORINO 4 BANCADAS NAF. *6CIL* 85mm', 1),
(258, 'IKA TOR 7', 'IKA TORNADO-TORINO 7 BANCADAS NAF.*6CIL* 85mm', 1),
(259, 'XD 4-88', 'INDENOR XD 4-88 DIESEL*4CIL* 88mm', 3),
(260, 'XD 6-90', 'INDENOR XD 6-90 DIESEL*6CIL* 88mm', 3),
(261, 'XD-2 P28', 'INDENOR XD-2 PERNO 28mmDIESEL*4CIL* 94mm', 3),
(262, 'XD-3 P32', 'INDENOR XD-2 PERNO 32mm TURBO DIESEL*4CIL* 94mm', 3),
(263, 'XD-2 P30', 'INDENOR XD-2/XD-3 PERNO 30mmDIESEL*4CIL* 94mm', 3),
(264, 'JD 1420', 'JOHN DEERE 1420 DIESEL*3CIL* 102mm', 8),
(265, 'JD 2140', 'JOHN DEERE 2140 DIESEL ASP/NOR*4CIL* 106.5mm', 8),
(266, 'JD 2140 T', 'JOHN DEERE 2140 TURBO DIESEL*4CIL* 106.5mm', 8),
(267, 'JD 2330', 'JOHN DEERE 2330 DIESEL*3CIL* 102mm', 8),
(268, 'JD 2420', 'JOHN DEERE 2420 DIESEL*4CIL* 102mm', 8),
(269, 'JD 2530', 'JOHN DEERE 2530 DIESEL*4CIL* 102mm', 8),
(270, 'JD 2730', 'JOHN DEERE 2730 DIESEL ASP/NOR*4CIL* 106.5mm', 8),
(271, 'JD 3140', 'JOHN DEERE 3140 DIESEL ASP/NOR*6CIL* 106.5mm', 8),
(272, 'JD 3140 T', 'JOHN DEERE 3140 TURBO DIESEL*6CIL* 106.5mm', 8),
(273, 'JD 3420', 'JOHN DEERE 3420 DIESEL*6CIL.* 98mm', 8),
(274, 'JD 3530', 'JOHN DEERE 3530 DIESEL*6CIL* 102mm', 8),
(275, 'JD 3540', 'JOHN DEERE 3540 DIESEL ASP/NOR*6CIL* 106.5mm', 8),
(276, 'JD 3540 T', 'JOHN DEERE 3540 TURBO DIESEL*6CIL* 106.5mm', 8),
(277, 'JD 4420', 'JOHN DEERE 4420 DIESEL*6CIL* 102mm', 8),
(278, 'JD 445', 'JOHN DEERE 445 (GM) DIESEL*2CIL* 3 7/8 98.4mm', 5),
(279, 'JD 4530', 'JOHN DEERE 4530 DIESEL ASP/NOR*6CIL* 106.5mm', 8),
(280, 'JD 730', 'JOHN DEERE 730 DIESEL*2CIL* 155mm', 9),
(281, 'KUBOTA V1702B', 'KUBOTA V1702-B DIESEL *4CIL*82 mm', 4),
(282, 'KUBOTA V1902B', 'KUBOTA V1902-B DIESEL BOBCAT*4CIL*85 mm', 4),
(283, 'KUBOTA V2203DI', 'KUBOTA V2203 DIESEL INY *4CIL*87 mm', 4),
(284, 'KUBOTA V2203B', 'KUBOTA V2203-B DIESEL BOBCAT*4CIL*87 mm', 4),
(285, 'KUBOTA V2403', 'KUBOTA V2403 DIESEL *4CIL*87 mm', 4),
(286, 'LADA/ALEKO 1.6', 'LADA-ALEKO 1600 NAF.*4CIL* 79mm', 1),
(287, 'MB 170', 'M.BENZ 170 DIESEL*4CIL* 75mm', 2),
(288, 'MB 312', 'M.BENZ 312 DIESEL (L-3500)*6CIL* 90mm', 4),
(289, 'MB 314', 'M.BENZ 314 DIESEL (608)*4CIL* 97mm', 5),
(290, 'MB 321', 'M.BENZ 321 DIESEL (1112)*6CIL* 95mm', 4),
(291, 'MB 352', 'M.BENZ 352 DIESEL (1114)*6CIL* 97mm', 5),
(292, 'MB 352 A', 'M.BENZ 352A TURBO DIESEL(1517-1518)*6CIL* 97mm', 5),
(293, 'MB 355/6', 'M.BENZ 355 DIESEL (1521)(COLECTIVO)*6CIL* 128mm', 10),
(294, 'MB 355/5', 'M.BENZ 355 DIESEL (1521)*5CIL* 128mm', 10),
(295, 'MB 355/6 A', 'M.BENZ 355A TURBO DIESEL (1526)(COLECTIVO)*6CIL* 128mm', 10),
(296, 'MB 355/5 A', 'M.BENZ 355A TURBO DIESEL (1526)*5CIL* 128mm', 10),
(297, 'MB 364', 'M.BENZ 364 DIESEL (710)*4CIL* 97.5mm', 5),
(298, 'MB 364 A', 'M.BENZ 364A TURBO DIESEL (813-913)*4CIL* 97.5mm', 5),
(299, 'MB 366', 'M.BENZ 366 DIESEL (1215-1615)*6CIL* 97.5mm', 5),
(300, 'MB 366 A', 'M.BENZ 366A TURBO DIESEL (1619-20-20)*6CIL* 97.5mm', 5),
(301, 'MB 366 LA', 'M.BENZ 366LA EURO TURBO DIESEL(1620-1720-23)*6CIL* 97.5mm', 5),
(302, 'MB 447 A', 'M.BENZ 447A TURBO DIESEL(1935-41)*6CIL* 128mm', 10),
(303, 'MB 449 A', 'M.BENZ 449A TURBO DIESEL(162-30-339)*5CIL* 128mm', 10),
(304, 'MB 457 LA', 'M.BENZ 457LA TURBO DIESEL(1956-2638)ELECTRONICO*6CIL*128mm', 10),
(305, 'MB 611', 'M.BENZ 611 DIESEL SPRINTER-VIANO 2.2 INY*4CIL*88mm', 4),
(306, 'MB 615', 'M.BENZ 615 DIESEL UNIMOG*4CIL* 87mm', 4),
(307, 'MB 616', 'M.BENZ 616 DIESEL (180)*4CIL* 90.9mm', 4),
(308, 'MB 904 L', 'M.BENZ 904L DIESEL PERNO 40(712) ELECTRONICO*4CIL* 102mm', 7),
(309, 'MB 904 LA', 'M.BENZ 904LA DIESEL EURO 3 PERNO 42(712)ELECTRONICO*4CIL*102m', 7),
(310, 'MB 906 L', 'M.BENZ 906L DIESEL PERNO 40(1721)ELECTRONICO*6CIL* 102mm', 7),
(311, 'MB.906 LA', 'M.BENZ 906LA DIESEL EURO 3 PERNO 42(1721)ELECTRONICO*4CIL*102m', 7),
(312, 'MB 924 LA', 'M.BENZ 924 LA DIESEL ELECTRONICO*4CIL', 8),
(313, 'MB 925 LA', 'M.BENZ 925 LA DIESEL ELECTRONICO*5CIL', 8),
(314, 'MB 926 LA', 'M.BENZ 926 LA DIESEL ELECTRONICO*6CIL', 8),
(315, 'MB 601 MUSSO', 'M.BENZ MUSSO SSANGYOUNG DIESEL 2299cc * 4CIL', 4),
(316, 'MB 602 MUSSO', 'M.BENZ MUSSO SSANGYOUNG DIESEL 2879cc * 4CIL', 4),
(317, 'M.W.M 229-3', 'M.W.M 229 DIESEL ASP/NOR*3CIL* 102mm', 8),
(318, 'M.W.M 229-4', 'M.W.M 229 DIESEL ASP/NOR*4CIL* 102mm', 8),
(319, 'M.W.M 229-6', 'M.W.M 229 DIESEL ASP/NOR*6CIL* 102mm', 8),
(320, 'M.W.M 229-3T', 'M.W.M 229 TURBO DIESEL*3CIL* 102mm', 8),
(321, 'M.W.M 229-4T', 'M.W.M 229 TURBO DIESEL*4CIL* 102mm', 8),
(322, 'M.W.M 229-6T', 'M.W.M 229 TURBO DIESEL*6CIL* 102mm', 8),
(323, 'M.W.M 4.07', 'M.W.M 4.07 TURBO DIESEL*4CIL* 93mm', 6),
(324, 'M.W.M 4.10', 'M.W.M 4.10 TURBO DIESEL*4CIL* 103mm', 8),
(325, 'M.W.M 4.12', 'M.W.M 4.12 DIESEL ELECTRONICO*4CIL*105 MM', 8),
(326, 'M.W.M 6.07', 'M.W.M 6.07 TURBO DIESEL*6CIL* SPRINT 93mm', 6),
(327, 'M.W.M 6.10', 'M.W.M 6.10 TURBO DIESEL*6CIL* 103mm', 8),
(328, 'M.W.M 6.12', 'M.W.M 6.12 DIESEL ELECTRONICO *6CIL*105 MM', 8),
(329, 'M.W.M 4.07TE', 'M.W.M. 4.07 ELECTRONICO*DIESEL*4CIL', 6),
(330, 'MAXION HST', 'MAXION HST TURBO DIESEL 2500*4CIL* 90.73mm', 4),
(331, 'MAXION HST2.8', 'MAXION HST TURBO DIESEL 2800 POWER STROKE*4CIL* 93mm', 4),
(332, 'MAXION 3.0', 'MAXION INTERNACIONAL TURBO DIESEL 3000 16 VAL*4CIL* 96mm', 5),
(333, 'MAXION S4', 'MAXION S4 DIESEL ASP/NOR *4CIL* 100mm', 5),
(334, 'MAXION S4 EU1', 'MAXION S4 EURO 1 ASP. NOR*4CIL*101mm', 5),
(335, 'MAXION S4 T', 'MAXION S4 TURBO DIESEL *4CIL* 100mm', 5),
(336, 'MAXION S4T PLUS', 'MAXION S4 TURBO DIESEL*4CIL*101mm', 5),
(337, 'MAXION/SPRINTER', 'MAXION-SPRINTER EURO 2 TURBO DIESEL 2500*4CIL* 90.48mm', 4),
(338, 'OPEL K-180', 'OPEL K-180 NAF.*4CIL* 90mm', 2),
(339, '3-152', 'PERKINS 3-152 DIESEL*3CIL* 91.44mm', 4),
(340, '3-152 serie 90', 'PERKINS 3-152 SERIE 90 DIESEL*3CIL*95mm', 5),
(341, '4-203 P', 'PERKINS 4-203 DIESEL POTENCIADO*4CIL* 91.44mm', 4),
(342, '4-203', 'PERKINS 4-203 DIESEL*4CIL* 91.44mm', 4),
(343, '4-236', 'PERKINS 4-236 DIESEL*4CIL* 98.42mm', 5),
(344, '4-248', 'PERKINS 4-248 DIESEL*4CIL* 101.06mm', 5),
(345, '4-248 T', 'PERKINS 4-248 TURBO DIESEL*4CIL* 101.06mm', 5),
(346, '6-305 CAD', 'PERKINS 6-305 DIESEL CADENERO*6CIL* 91.44m', 4),
(347, '6-305 PF', 'PERKINS 6-305 DIESEL PF(a/engr.)*6CIL* 91.44m', 4),
(348, '6-354 F1', 'PERKINS 6-354 DIESEL F1-2 *6CIL* 98.42mm', 5),
(349, '6-354 F2', 'PERKINS 6-354 DIESEL F2 APA *6CIL* 98.42mm', 5),
(350, '6-354 F4', 'PERKINS 6-354 DIESEL F4 APA *6CIL* 98.42mm', 5),
(351, '6-354 F2 T', 'PERKINS 6-354 TURBO DIESEL F2 *6CIL* 98.42mm', 5),
(352, '6-354 F4 T', 'PERKINS 6-354 TURBO DIESEL F4 *6CIL* 98.42mm', 5),
(353, 'PHASER 1104 C', 'PERKINS PHASER 1104 C TURBO DIESEL*4CIL', 5),
(354, 'PHASER 1104', 'PERKINS PHASER 1104 DIESEL ASPIRADO*4CIL', 5),
(355, 'PHASER', 'PERKINS PHASER DIESEL 1004*4CIL*100mm', 5),
(356, 'PHASER TD', 'PERKINS PHASER TURBO DIESEL *4CIL*100mm', 5),
(357, 'PRIMA', 'PERKINS PRIMA DIESEL ASP/NOR*4CIL* 84.4mm', 4),
(358, 'PRIMA T', 'PERKINS PRIMA TURBO DIESEL*4CIL* 84.4mm', 4),
(359, '4-33 T', 'PERKINS T4-33 TURBO DIESEL*4CIL* 91.49mm', 4),
(360, '106 TUD3', 'PEUGEOT 106 DIESEL 1400cc*4CIL* 75mm', 3),
(361, '106 TU3', 'PEUGEOT 106 NAF.1400cc*4CIL* 75mm', 2),
(362, '205 XU5J', 'PEUGEOT 205 NAF.1600cc*4CIL* 83mm', 2),
(363, '406 2.0 HDi', 'PEUGEOT 206-307-406- TURBO DIESEL 2.0 HDi DW10  *4CIL* 85m', 3),
(364, '206/307 TU5JP4', 'PEUGEOT 206/307 1.6 *NAF*16Valv* 4CIL', 3),
(365, '206/307 XU5JP4', 'PEUGEOT 206/307 1600cc NAF.16 VAL*4CIL* 78.5mm', 2),
(366, '307 EW10J4', 'PEUGEOT 307 2.0 *NAF*16Valv* EW10J4', 3),
(367, '404', 'PEUGEOT 404 NAF.*4CIL* 84mm', 2),
(368, '405 XUD9', 'PEUGEOT 405 DIESEL 1900cc*4CIL* 83mm', 3),
(369, '405 XU7', 'PEUGEOT 405 NAF. 1795cc 8 VALV. *4CIL*83mm', 3),
(370, '405 XU7JP4', 'PEUGEOT 405 NAF.1760cc 16VAL*4CIL* 83mm', 3),
(371, '405XU92C', 'PEUGEOT 405 NAF.1900cc *4CIL* 83mm', 2),
(372, '405 XU10JP4', 'PEUGEOT 405 NAF.MI16 2000cc16 VAL*4CIL* 86mm', 3),
(373, '405 XU10J2', 'PEUGEOT 405 NAF.SRI 2000*4CIL* 86mm', 3),
(374, '405 XUD7T', 'PEUGEOT 405 TURBO DIESEL 1700cc*4CIL* 80mm', 3),
(375, '405 XUD9TE', 'PEUGEOT 405 TURBO DIESEL 1900cc*4CIL* 83mm', 3),
(376, '504 1.6/8', 'PEUGEOT 504 NAF.1600-1800*4CIL* 85mm', 2),
(377, '504 2.0', 'PEUGEOT 504 NAF.2000*4CIL* 88mm', 2),
(378, '505 2.0', 'PEUGEOT 505 NAF.2000*4CIL* 88mm', 2),
(379, '505 TD', 'PEUGEOT 505 TURBO DIESEL*4CIL* 94mm', 3),
(380, 'BOXER 2.5', 'PEUGEOT BOXER 2500 DIESEL 12 VAL*4CIL* 92mm', 5),
(381, 'BOXER 2.8', 'PEUGEOT BOXER 2800 DIESEL 12 VAL*4CIL* 94.4mm', 5),
(382, 'PARTNER DW8', 'PEUGEOT PARTNER DW8 DIESEL 1900cc*4CIL* 82.2mm', 3),
(383, 'RD 42 HP', 'RASTROJERO 42 HP DIESEL *4CIL* 78mm', 2),
(384, 'RD 52 HP', 'RASTROJERO 52 HP DIESEL *4CIL* 78mm', 2),
(385, 'R-12 1.4', 'RENAULT 12 1400cc NAF.*4CIL* 76mm(847)', 1),
(386, 'R-4L', 'RENAULT 4L-GORDINI 850cc NAF.*4CIL* 58mm', 1),
(387, 'R-4S', 'RENAULT 4S 1065cc NAF.*4CIL* 65mm(688.01)', 1),
(388, 'R-CLIO 1.2', 'RENAULT CLIO 1.2 NAF. 16 VAL *4CIL', 3),
(389, 'R-CLIO 1.4', 'RENAULT CLIO 1390cc NAF.*4CIL* 75.8mm(E6J)', 2),
(390, 'R-CLIO 1.8 16V', 'RENAULT CLIO 1763cc NAF.16 VAL*4CIL* 82mm(F7P)', 3),
(391, 'R-CLIO 1.8', 'RENAULT CLIO 1794cc NAF.*4CIL* 82.7mm(F3P)', 3),
(392, 'R-CLIO 1.5 D', 'RENAULT CLIO 2 DIESEL 1.5 Cdi *4CIL* 76mm(K9K)', 3),
(393, 'R-12 JRS', 'RENAULT JUNIORS R-12 R-18 1400cc NAF.*4CIL* 76mm(847.81)', 1),
(394, 'R-KANGOO', 'RENAULT KANGOO DIESEL *4CIL* 80mm(F8Q)', 3),
(395, 'R-KOLEOS', 'RENAULT KOLEOS (NISSAN Q25) 2.5 16 VALV NAF *4CIL*89mm', 3),
(396, 'R-LAGUNA D', 'RENAULT LAGUNA 2188cc DIESEL 12VAL*4CIL*87mm(GT8)', 3),
(397, 'R-LAGUNA 2.0', 'RENAULT LAGUNA NAF.2.0 VOLVO 16VAL*4CIL* 83mm(NQ7)', 3),
(398, 'R-MASTER G9U', 'RENAULT MASTER G9U 2.5 TDi 16 VALV *4CIL*89mm', 5),
(399, 'R-MEGANE TD', 'RENAULT MEGANE - SCENIC TDI *PER28*4CIL', 3),
(400, 'R-MEGANE 1.6', 'RENAULT MEGANE 1.6 NAF.16VAL*4CIL* 79.5mm(K4M)', 3),
(401, 'R-MEGANE 2.0 16v', 'RENAULT MEGANE 2.0 16V (F4R)', 3),
(402, 'R-MEGANE 2.0', 'RENAULT MEGANE NAF.2000cc 8VAL*4CIL* 82.7mm(F3R)', 3),
(403, 'R-CLIO 1.6 8V', 'RENAULT MEGANE-CLIO 1.6 NAF.8VAL*4CIL* 79.5mm(K7M)', 3),
(404, 'R-MEGANE TD', 'RENAULT MEGANE-SCENIC 1870cc TURBO DIESEL*4CIL* 80mm(F9Q)', 3),
(405, 'R-PREMIUN 250', 'RENAULT PREMIUN 250 DIESEL*6CIL* 102mm', 7),
(406, 'R-18 2.0', 'RENAULT R-18-FUEGO 2000cc NAF.*4CIL* 88mm(J6R)', 2),
(407, 'R-18 2.2', 'RENAULT R-18-FUEGO 2200cc NAF.*4CIL* 88mm(J7RT)', 2),
(408, 'R-18 2.2i', 'RENAULT R-18-FUEGO 2200cc NAF.INY*4CIL* 88mm(J7RT)', 2),
(409, 'R-18 D', 'RENAULT R-18-TRAFIC 2068cc DIESEL*4CIL* 86mm(J8S)', 3),
(410, 'R-19 EXPRES', 'RENAULT R-19-EXPRES-CLIO DIESEL*4CIL* 80mm(F8Q)', 3),
(411, 'R-12 1.3', 'RENAULT R12 1300cc NAF.*4CIL* 73mm(810.02)', 1),
(412, 'R-12 1.6', 'RENAULT R12-R18 1600cc NAF.*4CIL* 77mm(C2L)', 1),
(413, 'R-19 1.7', 'RENAULT R19 1700cc NAF.*4CIL* 81mm(F2N)', 2),
(414, 'R-6 1.1', 'RENAULT R6 1100cc NAF.*4CIL* 68mm', 1),
(415, 'R-TWINGO 1.2', 'RENAULT TWINGO 1149cc NAF.8 VAL*4CIL* 69mm(D7F)', 2),
(416, 'R-TWINGO 1.3', 'RENAULT TWINGO-CLIO1300cc NAF.*4CIL* 74mm(C3G)', 2),
(417, 'SCA K124', 'SCANIA K124-12L SERIE 4 *6CIL* 127mm(DSC12)', 9),
(418, 'SCA K124 ART', 'SCANIA K124-12L SERIE 4 ARTICULADO *6CIL* 127mm(DSC12)', 9),
(419, 'SCA 111', 'SCANIA L110-111 ASP/NOR *6CIL* 127mm(D11-DS11)', 9),
(420, 'SCA 111 T', 'SCANIA L111-112 TURBO *6CIL* 127mm(D11-DS11)', 9),
(421, 'SCA 113 T', 'SCANIA L113 TURBO *6CIL* 127mm(DSC11)', 9),
(422, 'SCA P93', 'SCANIA P-93 SERIE 4-9L*6CIL* 115mm(DCS9)', 8),
(423, 'VALIANT', 'VALIANT I-II-III-IV NAF.*6CIL* 87mm', 2),
(424, 'VOLVO NL10 280', 'VOLVO NL10 280 DIESEL *6CIL* 120.65mm', 9),
(425, 'VOLVO NL10 310', 'VOLVO NL10 310 DIESEL *6CIL* 120.65mm', 9),
(426, 'VOLVO NL10 340', 'VOLVO NL10 340 DIESEL ARTICULADO *6CIL* 120.65mm', 9),
(427, 'VW 2.0', 'VW 2.0 CARAT-GOL GTI(AUDI)2000ccNAF.*4CIL* 82.5mm', 2),
(428, 'VW 2.0 i', 'VW 2.0 GOL(AUDI)2000ccNAF.INY*4CIL* 82.5mm', 2),
(429, 'VW AMAROK', 'VW AMAROK TDI 2.0 *16Valv* 81mm', 5),
(430, 'VW BORA 1.8T', 'VW BORA 1.8T*20Valv*4CIL*81mm * ARX', 4),
(431, 'VW 1.6-V', 'VW GACEL(AUDI)1600ccNAF.MOD.VIE*4CIL* 79.5mm', 2),
(432, 'VW 1.6', 'VW GACEL-GOL(AUDI)1600ccNAF.*4CIL* 81mm', 2),
(433, 'VW 1.6 MI', 'VW GACEL-GOL(AUDI)1600ccNAF.INY*4CIL* 81mm', 2),
(434, 'VW 1.8 MI', 'VW GACEL-GOL(AUDI)1800ccNAF.INY*4CIL* 81mm', 2),
(435, 'VW 1.8', 'VW GACEL-SENDA(AUDI)1800ccNAF.*4CIL* 81mm', 2),
(436, 'VW GOL 1.0', 'VW GOL 1000 NAF.MI 8VAL *4CIL* 67.10mm', 2),
(437, 'VW GOLF 1.8 TD', 'VW GOLF 1.8 TD P.20 - 20 VALV. *4CIL*81mm', 4),
(438, 'VW GOLF TD', 'VW GOLF-TRANSPORTER TURBO DIESEL 1900cc*4CIL* 79.5mm', 3),
(439, 'VW GOLF 1.9SDI', 'VW GOLF/VENTO 1.9 SDI P.26 *4CIL*79', 5),
(440, 'VW KOMB', 'VW KOMBI 1600ccNAF.*4CIL* 85.5mm', 3),
(441, 'VW POLO D', 'VW POLO DIESEL 1900cc *4CIL* 79.5mm', 3),
(442, 'VW D', 'VW SAVEIRO-SENDA DIESEL 1600cc*4CIL* 76.5mm', 3),
(443, 'VW SURAN/FOX', 'VW SURAN/FOX/GOLF 1.6 NAF. 8 VALV * 4CIL *76', 5),
(444, 'VW TRANSP. 2.4', 'VW TRANSPORTER 2.4 TDI *20 Valv* 5 CIL* 79', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trj_pedido_trabajo`
--

CREATE TABLE `trj_pedido_trabajo` (
  `petr_id` int(11) NOT NULL,
  `parte_vehiculo` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `patente` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `indice` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `motor` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `num_motor` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `num_chasis` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `condicion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fec_entrega` date DEFAULT NULL,
  `observacion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `familia_producto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `subfamilia` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cod_interno` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `clie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trj_pedido_trabajo`
--

INSERT INTO `trj_pedido_trabajo` (`petr_id`, `parte_vehiculo`, `patente`, `indice`, `motor`, `num_motor`, `num_chasis`, `condicion`, `fec_entrega`, `observacion`, `familia_producto`, `subfamilia`, `cod_interno`, `clie_id`) VALUES
(12, NULL, 'BBBBBB', 'BORGVM', 'BORGWARD VM HR492 *4CIL* 92mm', 'CCCCCC', 'DDDDDDDD', 'Normal', '2018-08-22', 'EEEEEEE', 'Componente Industrial', 'Motor Mediano', NULL, 20),
(13, 'aaaaaaa', 'aaaaaaaaaa', 'BORGVM', 'BORGWARD VM HR492 *4CIL* 92mm', 'aaaaaaaaaa', 'aaaaaaaa', 'Normal', '2018-08-09', 'aaaaaaaa', 'Componente Liviano', 'Partes Sueltas', ' CA - cardan ', 25),
(16, '', '', '', '', '', '', NULL, '0000-00-00', '', 'Seleccionar...', 'Seleccionar...', ' BIE - Biela ', 25),
(17, '', '', '', '', '', '', NULL, '0000-00-00', '', 'Seleccionar...', 'Seleccionar...', 'BI', 25),
(18, '', '', '', '', '', '', NULL, '0000-00-00', '', 'Seleccionar...', 'Seleccionar...', '0', 25),
(19, '', '', '', '', '', '', NULL, '0000-00-00', '', 'Seleccionar...', 'Seleccionar...', 'BIE-11-18', 25);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abmdeposito`
--
ALTER TABLE `abmdeposito`
  ADD PRIMARY KEY (`depositoId`);

--
-- Indices de la tabla `abmproveedores`
--
ALTER TABLE `abmproveedores`
  ADD PRIMARY KEY (`provid`);

--
-- Indices de la tabla `admcredits`
--
ALTER TABLE `admcredits`
  ADD PRIMARY KEY (`crdId`),
  ADD KEY `cliId` (`cliId`),
  ADD KEY `usrId` (`usrId`),
  ADD KEY `saleId` (`saleId`);

--
-- Indices de la tabla `admcustomerpreferences`
--
ALTER TABLE `admcustomerpreferences`
  ADD PRIMARY KEY (`cstprefId`),
  ADD KEY `sfamId` (`sfamId`),
  ADD KEY `cliId` (`cliId`);

--
-- Indices de la tabla `admcustomers`
--
ALTER TABLE `admcustomers`
  ADD PRIMARY KEY (`cliId`);

--
-- Indices de la tabla `admproducts`
--
ALTER TABLE `admproducts`
  ADD PRIMARY KEY (`prodId`),
  ADD KEY `sfamId` (`sfamId`);

--
-- Indices de la tabla `admsales`
--
ALTER TABLE `admsales`
  ADD PRIMARY KEY (`saleId`),
  ADD KEY `cliId` (`cliId`),
  ADD KEY `usrId` (`usrId`);

--
-- Indices de la tabla `admsalesdetail`
--
ALTER TABLE `admsalesdetail`
  ADD PRIMARY KEY (`saleDetId`),
  ADD KEY `saleId` (`saleId`),
  ADD KEY `prodId` (`prodId`);

--
-- Indices de la tabla `admstock`
--
ALTER TABLE `admstock`
  ADD PRIMARY KEY (`stkId`),
  ADD KEY `prodId` (`prodId`),
  ADD KEY `usrId` (`usrId`);

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`artId`),
  ADD UNIQUE KEY `artBarCode` (`artBarCode`) USING BTREE,
  ADD UNIQUE KEY `artDescription` (`artDescription`) USING BTREE,
  ADD KEY `famId` (`famId`) USING BTREE;

--
-- Indices de la tabla `conffamily`
--
ALTER TABLE `conffamily`
  ADD PRIMARY KEY (`famId`);

--
-- Indices de la tabla `confsubfamily`
--
ALTER TABLE `confsubfamily`
  ADD PRIMARY KEY (`sfamId`),
  ADD KEY `famId` (`famId`);

--
-- Indices de la tabla `confzone`
--
ALTER TABLE `confzone`
  ADD PRIMARY KEY (`zonaId`);

--
-- Indices de la tabla `deta-remito`
--
ALTER TABLE `deta-remito`
  ADD PRIMARY KEY (`detaremitoid`),
  ADD KEY `id_remito` (`id_remito`) USING BTREE,
  ADD KEY `loteid` (`loteid`) USING BTREE;

--
-- Indices de la tabla `deta_ordeninsumos`
--
ALTER TABLE `deta_ordeninsumos`
  ADD PRIMARY KEY (`id_detaordeninsumo`),
  ADD KEY `loteid` (`loteid`) USING BTREE,
  ADD KEY `id_ordeninsumo` (`id_ordeninsumo`) USING BTREE;

--
-- Indices de la tabla `frm_categorias`
--
ALTER TABLE `frm_categorias`
  ADD PRIMARY KEY (`CATE_ID`),
  ADD KEY `fk_FRM_CATEGORIAS_FRM_FORMULARIOS_1` (`FORM_ID`);

--
-- Indices de la tabla `frm_formularios`
--
ALTER TABLE `frm_formularios`
  ADD PRIMARY KEY (`form_id`);

--
-- Indices de la tabla `frm_formularios_completados`
--
ALTER TABLE `frm_formularios_completados`
  ADD PRIMARY KEY (`FOCO_ID`),
  ADD KEY `fk_FRM_FORMULARIOS_COMPLETADOS_FRM_FORMULARIOS_1` (`FORM_ID`);

--
-- Indices de la tabla `frm_grupos`
--
ALTER TABLE `frm_grupos`
  ADD PRIMARY KEY (`GRUP_ID`),
  ADD KEY `fk_FRM_GRUPO_FRM_CATEGORIAS_1` (`CATE_ID`);

--
-- Indices de la tabla `frm_tipos_dato`
--
ALTER TABLE `frm_tipos_dato`
  ADD PRIMARY KEY (`TIDA_ID`);

--
-- Indices de la tabla `frm_valores`
--
ALTER TABLE `frm_valores`
  ADD PRIMARY KEY (`VALO_ID`),
  ADD KEY `fk_FRM_VALORES_FRM_TIPO_DATO_1` (`TIDA_ID`),
  ADD KEY `fk_FRM_VALORES_FRM_GRUPO_1` (`GRUP_ID`);

--
-- Indices de la tabla `frm_valores_validos`
--
ALTER TABLE `frm_valores_validos`
  ADD PRIMARY KEY (`VAPO_ID`),
  ADD KEY `fk_FRM_VALORES_VALIDOS_FRM_VALORES_1` (`VALO_ID`);

--
-- Indices de la tabla `info_sistema`
--
ALTER TABLE `info_sistema`
  ADD PRIMARY KEY (`id_infosistema`);

--
-- Indices de la tabla `mtb_num_interno`
--
ALTER TABLE `mtb_num_interno`
  ADD PRIMARY KEY (`año`);

--
-- Indices de la tabla `orden_insumos`
--
ALTER TABLE `orden_insumos`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `orden_pedido`
--
ALTER TABLE `orden_pedido`
  ADD PRIMARY KEY (`id_orden`),
  ADD KEY `id_trabajo` (`id_trabajo`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `orden_trabajo`
--
ALTER TABLE `orden_trabajo`
  ADD PRIMARY KEY (`id_orden`),
  ADD KEY `orden_trabajo_ibfk_1` (`cliId`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_usuariosolicitante` (`id_usuario_a`),
  ADD KEY `usuario_entrega` (`id_usuario_e`),
  ADD KEY `id_sucursal` (`id_sucursal`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id_plantilla`);

--
-- Indices de la tabla `remitos`
--
ALTER TABLE `remitos`
  ADD PRIMARY KEY (`remitoId`),
  ADD KEY `provid` (`provid`) USING BTREE;

--
-- Indices de la tabla `sisactions`
--
ALTER TABLE `sisactions`
  ADD PRIMARY KEY (`actId`);

--
-- Indices de la tabla `sisgroups`
--
ALTER TABLE `sisgroups`
  ADD PRIMARY KEY (`grpId`);

--
-- Indices de la tabla `sisgroupsactions`
--
ALTER TABLE `sisgroupsactions`
  ADD PRIMARY KEY (`grpactId`),
  ADD KEY `grpId` (`grpId`),
  ADD KEY `menuAccId` (`menuAccId`);

--
-- Indices de la tabla `sismenu`
--
ALTER TABLE `sismenu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sismenuactions`
--
ALTER TABLE `sismenuactions`
  ADD PRIMARY KEY (`menuAccId`);

--
-- Indices de la tabla `sisusers`
--
ALTER TABLE `sisusers`
  ADD PRIMARY KEY (`usrId`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tarea`);

--
-- Indices de la tabla `tbl_detanotapedido`
--
ALTER TABLE `tbl_detanotapedido`
  ADD PRIMARY KEY (`id_detaNota`),
  ADD KEY `id_notaPedido` (`id_notaPedido`);

--
-- Indices de la tabla `tbl_equipos`
--
ALTER TABLE `tbl_equipos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD KEY `id_subsector` (`id_subsector`);

--
-- Indices de la tabla `tbl_estado`
--
ALTER TABLE `tbl_estado`
  ADD PRIMARY KEY (`estadoid`);

--
-- Indices de la tabla `tbl_listarea`
--
ALTER TABLE `tbl_listarea`
  ADD PRIMARY KEY (`id_listarea`);

--
-- Indices de la tabla `tbl_listplantilla`
--
ALTER TABLE `tbl_listplantilla`
  ADD PRIMARY KEY (`id_detaplantilla`),
  ADD KEY `id_plantilla` (`id_plantilla`),
  ADD KEY `id_tarea` (`id_tarea`);

--
-- Indices de la tabla `tbl_lote`
--
ALTER TABLE `tbl_lote`
  ADD PRIMARY KEY (`loteid`),
  ADD KEY `depositoid` (`depositoid`) USING BTREE,
  ADD KEY `artId` (`artId`) USING BTREE;

--
-- Indices de la tabla `tbl_notapedido`
--
ALTER TABLE `tbl_notapedido`
  ADD PRIMARY KEY (`id_notaPedido`);

--
-- Indices de la tabla `tbl_subsector`
--
ALTER TABLE `tbl_subsector`
  ADD PRIMARY KEY (`id_subsector`);

--
-- Indices de la tabla `trj_nomenclador_motores`
--
ALTER TABLE `trj_nomenclador_motores`
  ADD PRIMARY KEY (`indice_id`);

--
-- Indices de la tabla `trj_pedido_trabajo`
--
ALTER TABLE `trj_pedido_trabajo`
  ADD PRIMARY KEY (`petr_id`),
  ADD UNIQUE KEY `cod_interno_UNIQUE` (`cod_interno`),
  ADD KEY `cliente_fk_idx` (`clie_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abmdeposito`
--
ALTER TABLE `abmdeposito`
  MODIFY `depositoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `abmproveedores`
--
ALTER TABLE `abmproveedores`
  MODIFY `provid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `admcredits`
--
ALTER TABLE `admcredits`
  MODIFY `crdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT de la tabla `admcustomerpreferences`
--
ALTER TABLE `admcustomerpreferences`
  MODIFY `cstprefId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `admcustomers`
--
ALTER TABLE `admcustomers`
  MODIFY `cliId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `admproducts`
--
ALTER TABLE `admproducts`
  MODIFY `prodId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `admsales`
--
ALTER TABLE `admsales`
  MODIFY `saleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `admsalesdetail`
--
ALTER TABLE `admsalesdetail`
  MODIFY `saleDetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `admstock`
--
ALTER TABLE `admstock`
  MODIFY `stkId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `artId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `conffamily`
--
ALTER TABLE `conffamily`
  MODIFY `famId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `confsubfamily`
--
ALTER TABLE `confsubfamily`
  MODIFY `sfamId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `confzone`
--
ALTER TABLE `confzone`
  MODIFY `zonaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `deta-remito`
--
ALTER TABLE `deta-remito`
  MODIFY `detaremitoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `deta_ordeninsumos`
--
ALTER TABLE `deta_ordeninsumos`
  MODIFY `id_detaordeninsumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `frm_categorias`
--
ALTER TABLE `frm_categorias`
  MODIFY `CATE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `frm_formularios`
--
ALTER TABLE `frm_formularios`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `frm_formularios_completados`
--
ALTER TABLE `frm_formularios_completados`
  MODIFY `FOCO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `frm_grupos`
--
ALTER TABLE `frm_grupos`
  MODIFY `GRUP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `frm_tipos_dato`
--
ALTER TABLE `frm_tipos_dato`
  MODIFY `TIDA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `frm_valores`
--
ALTER TABLE `frm_valores`
  MODIFY `VALO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `frm_valores_validos`
--
ALTER TABLE `frm_valores_validos`
  MODIFY `VAPO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `info_sistema`
--
ALTER TABLE `info_sistema`
  MODIFY `id_infosistema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `orden_insumos`
--
ALTER TABLE `orden_insumos`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `orden_pedido`
--
ALTER TABLE `orden_pedido`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `orden_trabajo`
--
ALTER TABLE `orden_trabajo`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;
--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id_plantilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `remitos`
--
ALTER TABLE `remitos`
  MODIFY `remitoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `sisactions`
--
ALTER TABLE `sisactions`
  MODIFY `actId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `sisgroups`
--
ALTER TABLE `sisgroups`
  MODIFY `grpId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `sisgroupsactions`
--
ALTER TABLE `sisgroupsactions`
  MODIFY `grpactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1965;
--
-- AUTO_INCREMENT de la tabla `sismenu`
--
ALTER TABLE `sismenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `sismenuactions`
--
ALTER TABLE `sismenuactions`
  MODIFY `menuAccId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT de la tabla `sisusers`
--
ALTER TABLE `sisusers`
  MODIFY `usrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `tbl_detanotapedido`
--
ALTER TABLE `tbl_detanotapedido`
  MODIFY `id_detaNota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT de la tabla `tbl_equipos`
--
ALTER TABLE `tbl_equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tbl_estado`
--
ALTER TABLE `tbl_estado`
  MODIFY `estadoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tbl_listarea`
--
ALTER TABLE `tbl_listarea`
  MODIFY `id_listarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;
--
-- AUTO_INCREMENT de la tabla `tbl_listplantilla`
--
ALTER TABLE `tbl_listplantilla`
  MODIFY `id_detaplantilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tbl_lote`
--
ALTER TABLE `tbl_lote`
  MODIFY `loteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_notapedido`
--
ALTER TABLE `tbl_notapedido`
  MODIFY `id_notaPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de la tabla `tbl_subsector`
--
ALTER TABLE `tbl_subsector`
  MODIFY `id_subsector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `trj_nomenclador_motores`
--
ALTER TABLE `trj_nomenclador_motores`
  MODIFY `indice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;
--
-- AUTO_INCREMENT de la tabla `trj_pedido_trabajo`
--
ALTER TABLE `trj_pedido_trabajo`
  MODIFY `petr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admcredits`
--
ALTER TABLE `admcredits`
  ADD CONSTRAINT `admcredits_ibfk_2` FOREIGN KEY (`usrId`) REFERENCES `sisusers` (`usrId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `admcredits_ibfk_3` FOREIGN KEY (`saleId`) REFERENCES `admsales` (`saleId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `admcustomerpreferences`
--
ALTER TABLE `admcustomerpreferences`
  ADD CONSTRAINT `cliId` FOREIGN KEY (`cliId`) REFERENCES `admcustomers` (`cliId`),
  ADD CONSTRAINT `sfamId` FOREIGN KEY (`sfamId`) REFERENCES `confsubfamily` (`sfamId`);

--
-- Filtros para la tabla `admproducts`
--
ALTER TABLE `admproducts`
  ADD CONSTRAINT `admproducts_ibfk_1` FOREIGN KEY (`sfamId`) REFERENCES `confsubfamily` (`sfamId`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `admsales`
--
ALTER TABLE `admsales`
  ADD CONSTRAINT `admsales_ibfk_2` FOREIGN KEY (`usrId`) REFERENCES `sisusers` (`usrId`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `admsalesdetail`
--
ALTER TABLE `admsalesdetail`
  ADD CONSTRAINT `admsalesdetail_ibfk_1` FOREIGN KEY (`saleId`) REFERENCES `admsales` (`saleId`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `admsalesdetail_ibfk_2` FOREIGN KEY (`prodId`) REFERENCES `admproducts` (`prodId`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `admstock`
--
ALTER TABLE `admstock`
  ADD CONSTRAINT `admstock_ibfk_1` FOREIGN KEY (`prodId`) REFERENCES `admproducts` (`prodId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `admstock_ibfk_2` FOREIGN KEY (`usrId`) REFERENCES `sisusers` (`usrId`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`famId`) REFERENCES `conffamily` (`famId`);

--
-- Filtros para la tabla `confsubfamily`
--
ALTER TABLE `confsubfamily`
  ADD CONSTRAINT `famId` FOREIGN KEY (`famId`) REFERENCES `conffamily` (`famId`);

--
-- Filtros para la tabla `frm_categorias`
--
ALTER TABLE `frm_categorias`
  ADD CONSTRAINT `fk_FRM_CATEGORIAS_FRM_FORMULARIOS_1` FOREIGN KEY (`FORM_ID`) REFERENCES `frm_formularios` (`form_id`);

--
-- Filtros para la tabla `frm_formularios_completados`
--
ALTER TABLE `frm_formularios_completados`
  ADD CONSTRAINT `fk_FRM_FORMULARIOS_COMPLETADOS_FRM_FORMULARIOS_1` FOREIGN KEY (`FORM_ID`) REFERENCES `frm_formularios` (`form_id`);

--
-- Filtros para la tabla `frm_grupos`
--
ALTER TABLE `frm_grupos`
  ADD CONSTRAINT `fk_FRM_GRUPO_FRM_CATEGORIAS_1` FOREIGN KEY (`CATE_ID`) REFERENCES `frm_categorias` (`CATE_ID`);

--
-- Filtros para la tabla `frm_valores`
--
ALTER TABLE `frm_valores`
  ADD CONSTRAINT `fk_FRM_VALORES_FRM_GRUPO_1` FOREIGN KEY (`GRUP_ID`) REFERENCES `frm_grupos` (`GRUP_ID`),
  ADD CONSTRAINT `fk_FRM_VALORES_FRM_TIPO_DATO_1` FOREIGN KEY (`TIDA_ID`) REFERENCES `frm_tipos_dato` (`TIDA_ID`);

--
-- Filtros para la tabla `frm_valores_validos`
--
ALTER TABLE `frm_valores_validos`
  ADD CONSTRAINT `fk_FRM_VALORES_VALIDOS_FRM_VALORES_1` FOREIGN KEY (`VALO_ID`) REFERENCES `frm_valores` (`VALO_ID`);

--
-- Filtros para la tabla `tbl_detanotapedido`
--
ALTER TABLE `tbl_detanotapedido`
  ADD CONSTRAINT `tbl_detanotapedido_ibfk_1` FOREIGN KEY (`id_notaPedido`) REFERENCES `tbl_notapedido` (`id_notaPedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_equipos`
--
ALTER TABLE `tbl_equipos`
  ADD CONSTRAINT `tbl_equipos_ibfk_1` FOREIGN KEY (`id_subsector`) REFERENCES `tbl_subsector` (`id_subsector`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_listplantilla`
--
ALTER TABLE `tbl_listplantilla`
  ADD CONSTRAINT `tbl_listplantilla_ibfk_1` FOREIGN KEY (`id_plantilla`) REFERENCES `plantilla` (`id_plantilla`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_listplantilla_ibfk_2` FOREIGN KEY (`id_tarea`) REFERENCES `tareas` (`id_tarea`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `trj_pedido_trabajo`
--
ALTER TABLE `trj_pedido_trabajo`
  ADD CONSTRAINT `cliente_fk` FOREIGN KEY (`clie_id`) REFERENCES `admcustomers` (`cliId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
