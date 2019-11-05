CREATE DATABASE  IF NOT EXISTS `markus.pylkkanen` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `markus.pylkkanen`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: markus.pylkkanen
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB-0+deb9u1

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
-- Table structure for table `viestit`
--

DROP TABLE IF EXISTS `viestit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `viestit` (
  `viestit` int(11) NOT NULL AUTO_INCREMENT,
  `viesti` varchar(45) DEFAULT NULL,
  `pvm` varchar(45) DEFAULT NULL,
  `nimi` varchar(45) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`viestit`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viestit`
--

LOCK TABLES `viestit` WRITE;
/*!40000 ALTER TABLE `viestit` DISABLE KEYS */;
INSERT INTO `viestit` VALUES (19,'jaska','2019-10-28','Moikkamoi',NULL),(20,'wasd','2019-10-28','wasd',NULL),(21,'wasd','2019-10-28','wasd',0),(22,'Tuomas','2019-10-31','Moikkamoi',0),(23,'wasd','2019-11-05','wasd',0),(24,'wasd','2019-11-05','wasd',0),(25,'hwadhabdha','2019-11-05','qkewqhbdw§',0),(26,'wasd','2019-11-05','wasd',0);
/*!40000 ALTER TABLE `viestit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-05 12:27:19
