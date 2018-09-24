-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-09-2018 a las 19:30:57
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mtba-desa-procprod-desarrollo`
--

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
(1, 'input', '2018-07-05 14:41:04'),
(2, 'select', '2018-07-05 15:06:02'),
(3, 'checkbox', '2018-07-08 22:45:17'),
(4, 'textarea', '2018-07-13 13:16:26'),
(5, 'input_numerico', '2018-08-28 02:40:51'),
(6, 'input_fecha', '2018-08-28 02:40:51'),
(7, 'input_archivo', '2018-08-28 02:41:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `frm_tipos_dato`
--
ALTER TABLE `frm_tipos_dato`
  ADD PRIMARY KEY (`TIDA_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
