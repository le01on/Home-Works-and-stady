-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: courses_db
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `courses_history`
--

DROP TABLE IF EXISTS `courses_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `base_ccy` varchar(10) DEFAULT NULL,
  `ccy` varchar(10) DEFAULT NULL,
  `buy` varchar(10) DEFAULT NULL,
  `sale` varchar(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses_history`
--

LOCK TABLES `courses_history` WRITE;
/*!40000 ALTER TABLE `courses_history` DISABLE KEYS */;
INSERT INTO `courses_history` VALUES (6,'UAH','USD','26.20000','26.55000','2019-06-15 12:21:46'),(7,'UAH','EUR','29.20000','29.95000','2019-06-15 12:21:46'),(8,'UAH','USD','26.20000','26.55000','2019-06-15 12:25:08'),(9,'UAH','EUR','29.20000','29.95000','2019-06-15 12:25:08'),(10,'UAH','USD','26.20000','26.55000','2019-06-15 12:35:23'),(11,'UAH','EUR','29.20000','29.95000','2019-06-15 12:35:23'),(12,'UAH','USD','26.20000','26.55000','2019-06-15 12:41:48'),(13,'UAH','EUR','29.20000','29.95000','2019-06-15 12:41:48'),(14,'UAH','USD','26.20000','26.55000','2019-06-15 12:44:46'),(15,'UAH','EUR','29.20000','29.95000','2019-06-15 12:44:46'),(16,'UAH','USD','26.20000','26.55000','2019-06-15 16:25:45'),(17,'UAH','EUR','29.20000','29.95000','2019-06-15 16:25:45'),(18,'UAH','USD','26.20000','26.55000','2019-06-16 14:30:33'),(19,'UAH','EUR','29.20000','29.95000','2019-06-16 14:30:33'),(20,'UAH','USD','26.20000','26.55000','2019-06-16 14:52:29'),(21,'UAH','EUR','29.20000','29.95000','2019-06-16 14:52:29'),(22,'UAH','USD','26.20000','26.55000','2019-06-16 14:54:06'),(23,'UAH','EUR','29.20000','29.95000','2019-06-16 14:54:06'),(24,'UAH','USD','26.20000','26.55000','2019-06-16 14:54:54'),(25,'UAH','EUR','29.20000','29.95000','2019-06-16 14:54:54'),(26,'UAH','USD','26.20000','26.55000','2019-06-16 14:55:39'),(27,'UAH','EUR','29.20000','29.95000','2019-06-16 14:55:39'),(28,'UAH','USD','26.20000','26.55000','2019-06-16 15:12:34'),(29,'UAH','EUR','29.20000','29.95000','2019-06-16 15:12:34'),(30,'UAH','USD','26.20000','26.55000','2019-06-16 15:33:16'),(31,'UAH','EUR','29.20000','29.95000','2019-06-16 15:33:16'),(32,'UAH','USD','26.20000','26.55000','2019-06-16 19:23:57'),(33,'UAH','EUR','29.20000','29.95000','2019-06-16 19:23:57');
/*!40000 ALTER TABLE `courses_history` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-16 23:24:09
