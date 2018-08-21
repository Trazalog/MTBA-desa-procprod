-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: mtba-desa-procprod1
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `trj_pedido_trabajo`
--

DROP TABLE IF EXISTS `trj_pedido_trabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trj_pedido_trabajo` (
  `petr_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `clie_id` int(11) NOT NULL,
  `entrega_servicio` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion_entrega` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_cliente` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `proveedor_repuesto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `orden_compra` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `bpm_id` int(11) NOT NULL,
  PRIMARY KEY (`petr_id`),
  UNIQUE KEY `bpm_id_UNIQUE` (`bpm_id`),
  UNIQUE KEY `cod_interno_UNIQUE` (`cod_interno`),
  KEY `cliente_fk_idx` (`clie_id`),
  CONSTRAINT `cliente_fk` FOREIGN KEY (`clie_id`) REFERENCES `admcustomers` (`cliId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trj_pedido_trabajo`
--

LOCK TABLES `trj_pedido_trabajo` WRITE;
/*!40000 ALTER TABLE `trj_pedido_trabajo` DISABLE KEYS */;
INSERT INTO `trj_pedido_trabajo` VALUES (12,'Ferrary','BBBBBB','BORGVM','BORGWARD VM HR492 *4CIL* 92mm','CCCCCC','DDDDDDDD','Normal','2018-08-22','EEEEEEE','Componente Industrial','Motor Mediano',NULL,20,'Armado','direccion test','Emp.Transporte','Cliente','Trazalog_metodología_git_gitkraken-v1_1.pdf',1),(13,'aaaaaaa','aaaaaaaaaa','BORGVM','BORGWARD VM HR492 *4CIL* 92mm','aaaaaaaaaa','aaaaaaaa','Normal','2018-08-09','aaaaaaaa','Componente Liviano','Partes Sueltas',' CA - cardan ',25,NULL,NULL,NULL,NULL,NULL,2),(33,'Partes Test 2','Pantente Test 2','BED300','BEDFORD 300 DIESEL *4CIL* 98.4mm','333333','333333','Normal','0000-00-00','aaaaaaaaa','Componente Industrial','Motor Grande','BIE-63-18',20,NULL,NULL,NULL,NULL,NULL,12014),(35,'Partes Test','Pantente Test','CAT.3064','CATERPILLAR 3064 DIESEL*4CIL*102mm','1111111','333333','Garantía','0000-00-00','','Componente Liviano','Motor Entero','BIE-66-18',20,NULL,NULL,NULL,NULL,NULL,12016),(36,'Partes Test','Pantente Test','CHEVETTE 1.6','CHEVETTE 1.6 NAF. 8 VAL*4CIL* 82mm.','1111111','333333','Garantía','2018-08-17','aaaa','Componente Liviano','Motor Semiarmado','BIE-68-18',20,NULL,NULL,NULL,NULL,NULL,12017),(37,'Partes Test','Pantente Test','CAT.3304 ASP','CATERPILLAR 3304 ASP.NOR.INY.IND.P38*4CIL*120.6mm','555555','333333','Urgente','2018-08-18','','Componente Liviano','Motor Entero','IT-70-18',25,NULL,NULL,NULL,NULL,NULL,12018);
/*!40000 ALTER TABLE `trj_pedido_trabajo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-14 12:36:04
