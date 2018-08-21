-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mtba-desa-procprod
-- ------------------------------------------------------
-- Server version	5.6.31

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
-- Table structure for table `sismenuactions`
--

DROP TABLE IF EXISTS `sismenuactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sismenuactions` (
  `menuAccId` int(11) NOT NULL AUTO_INCREMENT,
  `menuId` int(11) NOT NULL,
  `actId` int(11) DEFAULT NULL,
  PRIMARY KEY (`menuAccId`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sismenuactions`
--

LOCK TABLES `sismenuactions` WRITE;
/*!40000 ALTER TABLE `sismenuactions` DISABLE KEYS */;
INSERT INTO `sismenuactions` VALUES (1,1,1),(2,1,2),(4,1,4),(5,2,1),(6,2,2),(8,2,4),(13,4,1),(14,6,5),(15,7,5),(16,8,5),(17,10,1),(18,10,2),(19,10,3),(20,10,4),(21,11,1),(22,11,2),(23,11,3),(24,11,4),(25,13,1),(26,13,2),(27,13,3),(28,13,4),(29,14,1),(30,14,2),(31,14,3),(32,14,4),(33,15,1),(34,15,2),(35,15,3),(36,15,4),(37,4,4),(38,4,6),(39,16,1),(40,4,3),(41,18,1),(42,18,2),(43,18,3),(44,19,1),(45,19,1),(46,19,2),(47,20,1),(48,20,2),(49,20,3),(50,17,1),(51,17,2),(52,17,3),(53,18,7),(54,18,8),(55,18,9),(56,18,10),(57,18,4),(61,22,1),(62,22,3),(63,22,4),(64,23,1),(65,23,2),(66,23,3),(67,24,1),(68,24,1),(69,24,1),(70,26,1),(71,26,2),(72,26,3),(73,26,4),(74,27,1),(75,27,2),(76,27,3),(77,27,4),(78,28,1),(79,28,2),(80,28,3),(81,28,4),(82,29,1),(83,29,2),(84,29,3),(85,29,4),(86,30,1),(87,30,2),(88,30,3),(89,30,4),(90,31,1),(91,31,2),(92,31,3),(93,31,4),(94,32,1),(95,32,2),(96,32,3),(97,32,4),(98,33,1),(99,33,2),(100,34,1),(101,34,2),(102,34,3),(103,34,4),(104,35,1),(105,35,2),(106,35,3),(107,35,4),(108,36,1),(109,36,2),(110,36,3),(111,36,4),(112,37,1),(113,37,2),(114,38,1),(115,38,2),(116,38,3),(117,38,4),(118,39,1),(119,39,2),(120,39,3),(121,39,4),(122,40,4),(123,40,5);
/*!40000 ALTER TABLE `sismenuactions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-14  9:49:05