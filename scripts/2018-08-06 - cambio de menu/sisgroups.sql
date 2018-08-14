-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mtba-desa-procprod
-- ------------------------------------------------------
-- Server version	5.6.31


--
-- Table structure for table `sisgroups`
--

CREATE TABLE `sisgroups` (
  `grpId` int(11) NOT NULL AUTO_INCREMENT,
  `grpName` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `grpDash` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`grpId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


--
-- Dumping data for table `sisgroups`
--

INSERT INTO `sisgroups` (`grpId`, `grpName`, `grpDash`) VALUES
(1, 'Administrador', 'Otrabajo'),
(2, 'Vendedor', 'Otrabajo'),
(3, 'Depósito', 'Otrabajo'),
(4, 'Taller', 'Otrabajo'),
(5, 'Supervisor Taller', 'Otrabajo'),
(6, 'Compras', 'Otrabajo'),
(7, 'coordinador', 'Otrabajo');
