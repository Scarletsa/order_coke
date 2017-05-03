-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Current Database: `coke`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `coke` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `coke`;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `orderNumber` int(11) NOT NULL AUTO_INCREMENT,
  `storeNumber` int(11) NOT NULL,
  `user` varchar(55) DEFAULT NULL,
  `orderDate` varchar(127) DEFAULT NULL,
  `c132529` int(11) DEFAULT NULL,
  `c132530` int(11) DEFAULT NULL,
  `c132531` int(11) DEFAULT NULL,
  `c132532` int(11) DEFAULT NULL,
  `c132546` int(11) DEFAULT NULL,
  `c132551` int(11) DEFAULT NULL,
  `c132543` int(11) DEFAULT NULL,
  `c132541` int(11) DEFAULT NULL,
  `c132540` int(11) DEFAULT NULL,
  `c102605` int(11) DEFAULT NULL,
  `c102603` int(11) DEFAULT NULL,
  `c121751` int(11) DEFAULT NULL,
  `c102604` int(11) DEFAULT NULL,
  `c102656` int(11) DEFAULT NULL,
  `c114532` int(11) DEFAULT NULL,
  `c114230` int(11) DEFAULT NULL,
  `c102659` int(11) DEFAULT NULL,
  `c103029` int(11) DEFAULT NULL,
  `c112259` int(11) DEFAULT NULL,
  PRIMARY KEY (`orderNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (20,1901,'Dominos1901','Thursday 27th of April 2017 05:06:28 PM',2,7,0,3,0,1,1,3,12,2,3,0,1,0,0,1,1,2,2),(22,1901,'Dominos1901','Tuesday 2nd of May 2017 09:48:56 AM',3,2,1,1,1,3,2,1,2,0,3,0,0,0,0,2,0,2,1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) DEFAULT NULL,
  `firstName` varchar(55) DEFAULT NULL,
  `lastName` varchar(55) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(27) DEFAULT NULL,
  `storeNumber` int(11) DEFAULT NULL,
  `creationDate` varchar(127) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Dominos1901','Michael','Albrecht','1901@teamhoneybadger.com','Pizza!',1901,'Wednesday 26th of April 2017 03:15:20 PM'),(5,'Dominos1918','Nichole','Kesgard','1918@teamhoneybadger.com','Pizza',1918,'Thursday 27th of April 2017 01:51:30 PM');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-03  6:42:21
