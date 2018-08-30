-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2018 a las 01:53:45
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mtba-desa-procprod2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mtb_tiempos_standar`
--

CREATE TABLE `mtb_tiempos_standar` (
  `tipo_motor_id` varchar(45) NOT NULL,
  `dias_habiles` float NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mtb_tiempos_standar`
--

INSERT INTO `mtb_tiempos_standar` (`tipo_motor_id`, `dias_habiles`, `descripcion`) VALUES
('CI-MG', 10.14, 'CI-MG Motor Grande de 8 a 16 cil'),
('CI-MM', 6.64, 'CI-MM Motor Mediano de 3 a 6 cil'),
('CI-PS', 1.31, 'CL Parte Suelta'),
('CL-ME', 2, 'CL-ME Motor Entero de 4 a 6 cil'),
('CL-MSA', 1.81, 'CL-MSA Motor Semi-Armado ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mtb_tiempos_standar`
--
ALTER TABLE `mtb_tiempos_standar`
  ADD PRIMARY KEY (`tipo_motor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
