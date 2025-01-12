-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: elearning_datadump
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `pageId` int NOT NULL AUTO_INCREMENT,
  `pageName` varchar(45) DEFAULT NULL,
  `create` int NOT NULL DEFAULT '0',
  `edit` int NOT NULL DEFAULT '0',
  `delete` int NOT NULL DEFAULT '0',
  `view` int NOT NULL DEFAULT '0',
  `comments` text,
  `createdTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedTime` datetime DEFAULT NULL,
  `createdBy` int NOT NULL,
  `deleted` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`pageId`),
  KEY `pages_createdBy_idx` (`createdBy`),
  CONSTRAINT `pages_createdBy` FOREIGN KEY (`createdBy`) REFERENCES `users` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Users',1,1,1,1,NULL,'2021-04-08 09:13:19','2021-04-08 15:13:19',NULL,1,0),(2,'User Groups',1,1,1,1,NULL,'2021-04-08 09:13:19','2021-04-08 15:13:19',NULL,1,0),(3,'User Status',1,1,1,1,NULL,'2021-04-08 09:13:19','2021-04-08 15:13:19',NULL,1,0),(5,'Support Subject',1,1,1,1,NULL,'2021-04-08 09:13:19','2021-10-24 06:20:05',NULL,1,0),(6,'Support Status',1,1,1,1,NULL,'2021-04-08 09:13:19','2021-10-24 06:20:05',NULL,1,0),(7,'Manage Support',1,1,1,1,NULL,'2021-04-08 09:13:19','2021-10-24 06:20:05',NULL,1,0),(8,'Templates',1,1,1,1,NULL,'2021-04-08 09:13:19','2022-10-21 18:55:18',NULL,1,0),(9,'Reports',1,1,1,1,NULL,'2023-01-20 18:36:13','2024-02-12 12:13:54',NULL,1,0),(10,'Report Types',1,1,1,1,NULL,'2023-01-20 18:36:13','2023-01-30 14:19:16',NULL,1,0),(11,'Report Status',1,1,1,1,NULL,'2023-01-20 18:36:13','2023-01-30 14:19:16',NULL,1,0),(12,'Calendar',1,1,1,1,NULL,'2023-01-22 02:53:34','2023-01-30 14:19:16',NULL,1,0),(13,'Forum',1,1,1,1,NULL,'2023-01-22 02:53:34','2023-01-30 14:19:16',NULL,1,0),(14,'Resources',1,1,1,1,NULL,'2023-01-27 10:44:28','2023-01-30 14:19:16',NULL,1,0),(15,'Pages',1,1,1,1,NULL,'2024-02-09 07:54:56','2024-02-09 10:54:56',NULL,1,0),(18,'Elearning',1,1,1,1,'','2024-02-15 07:42:20','2024-02-15 10:42:20',NULL,1,0),(19,'Upload',1,1,1,1,NULL,'2024-02-16 07:13:53','2024-02-16 10:13:53',NULL,1,0),(20,'ArtPreTest',1,1,1,1,'','2024-02-20 07:14:13','2024-02-20 10:14:13',NULL,1,0),(21,'ArtPostTest',1,1,1,1,'','2024-02-20 07:49:21','2024-02-20 10:49:21',NULL,1,0),(22,'ArtSurvey',1,1,1,1,'','2024-02-20 07:49:38','2024-02-20 10:49:38',NULL,1,0),(23,'ArtUsers',1,1,1,1,'','2024-02-20 07:50:02','2024-02-20 10:50:02',NULL,1,0),(24,'DDIU Post-Test',1,1,1,1,'','2024-02-20 08:33:22','2024-02-20 11:33:22',NULL,1,0),(25,'DDIU Pre-Test',1,1,1,1,'','2024-02-20 08:33:58','2024-02-20 11:33:58',NULL,1,0),(26,'DDIU Survey',1,1,1,1,'','2024-02-20 08:34:25','2024-02-20 11:34:25',NULL,1,0),(27,'DDIU Users',1,1,1,1,'','2024-02-20 08:34:42','2024-02-20 11:34:42',NULL,1,0),(28,'HEI Pre-Test',1,1,1,1,'','2024-02-20 09:07:57','2024-02-20 12:07:57',NULL,1,0),(29,'HEI Post-Test',1,1,1,1,'','2024-02-20 09:08:12','2024-02-20 12:08:12',NULL,1,0),(30,'HEI Survey',1,1,1,1,'','2024-02-20 09:08:34','2024-02-20 12:08:34',NULL,1,0),(31,'HEI Users',1,1,1,1,'','2024-02-20 09:08:51','2024-02-20 12:08:51',NULL,1,0),(32,'HIV M&E Pre-Test',1,1,1,1,'','2024-02-20 09:24:59','2024-02-20 12:24:59',NULL,1,0),(33,'HIV M&E Post-Test',1,1,1,1,'','2024-02-20 09:25:16','2024-02-20 12:25:16',NULL,1,0),(34,'HIV M&E users',1,1,1,1,'','2024-02-20 09:25:49','2024-02-20 12:25:49',NULL,1,0),(35,'HIV M&E Survey',1,1,1,1,'','2024-02-20 09:28:28','2024-02-20 12:28:28',NULL,1,0);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-20 12:44:24
