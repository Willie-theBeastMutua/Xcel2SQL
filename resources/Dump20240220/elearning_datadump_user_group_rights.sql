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
-- Table structure for table `user_group_rights`
--

DROP TABLE IF EXISTS `user_group_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_group_rights` (
  `userGroupRightId` int NOT NULL AUTO_INCREMENT,
  `pageId` int DEFAULT NULL,
  `userGroupId` int DEFAULT NULL,
  `create` int DEFAULT NULL,
  `edit` int DEFAULT NULL,
  `view` int DEFAULT NULL,
  `delete` int DEFAULT NULL,
  `createdTime` text,
  `updatedTime` text,
  `deletedTime` text,
  `createdBy` int DEFAULT NULL,
  `deleted` int DEFAULT NULL,
  PRIMARY KEY (`userGroupRightId`),
  KEY `user_group_rights_createdBy_idx` (`createdBy`),
  KEY `user_group_rights_pageId_idx` (`pageId`),
  KEY `user_group_rights_userGroupId_idx` (`userGroupId`),
  CONSTRAINT `user_group_rights_createdBy` FOREIGN KEY (`createdBy`) REFERENCES `users` (`userId`),
  CONSTRAINT `user_group_rights_pageId` FOREIGN KEY (`pageId`) REFERENCES `pages` (`pageId`),
  CONSTRAINT `user_group_rights_userGroupId` FOREIGN KEY (`userGroupId`) REFERENCES `user_groups` (`userGroupId`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_group_rights`
--

LOCK TABLES `user_group_rights` WRITE;
/*!40000 ALTER TABLE `user_group_rights` DISABLE KEYS */;
INSERT INTO `user_group_rights` VALUES (1,1,1,1,1,1,1,'2023-01-19 09:28:55','2023-01-19 09:29:22','',1,0),(2,2,1,1,1,1,1,'2023-01-19 09:28:55','2023-01-19 09:29:22','',1,0),(3,3,1,1,1,1,1,'2023-01-19 09:28:55','2023-01-19 09:29:22','',1,0),(5,5,1,1,1,1,1,'2023-01-19 09:28:55','2023-01-19 09:29:22','',1,0),(6,6,1,1,1,1,1,'2023-01-19 09:28:55','2023-01-19 09:29:22','',1,0),(7,7,1,1,1,1,1,'2023-01-19 09:28:55','2023-01-19 09:29:22','',1,0),(8,8,1,1,1,1,1,'2023-01-19 09:28:55','2023-01-19 09:29:22','',1,0),(9,9,1,1,1,1,1,'2023-01-20 21:37:20','2023-01-20 21:37:20','',1,0),(10,10,1,1,1,1,1,'2023-01-20 21:37:20','2023-01-20 21:37:20','',1,0),(11,11,1,1,1,1,1,'2023-01-20 21:37:20','2023-01-20 21:37:20','',1,0),(12,12,1,1,1,1,1,'2023-01-22 05:54:12','2023-01-22 05:54:12','',1,0),(13,13,1,1,1,1,1,'2023-01-22 05:54:12','2023-01-22 05:54:12','',1,0),(14,14,1,1,1,1,1,'2023-01-27 13:45:27','2023-01-27 13:45:27','',1,0),(16,15,1,1,1,1,1,'2024-02-09 10:55:34','2024-02-09 10:55:34','',1,0),(17,16,1,1,1,1,1,NULL,NULL,NULL,1,0),(18,18,1,1,1,1,1,NULL,NULL,NULL,1,0),(19,20,1,1,1,1,1,NULL,NULL,NULL,1,0),(20,21,1,1,1,1,1,NULL,NULL,NULL,1,0),(21,22,1,1,1,1,1,NULL,NULL,NULL,1,0),(22,23,1,1,1,1,1,NULL,NULL,NULL,1,0),(23,24,1,1,1,1,1,NULL,NULL,NULL,1,0),(24,25,1,1,1,1,1,NULL,NULL,NULL,1,0),(25,26,1,1,1,1,1,NULL,NULL,NULL,1,0),(26,27,1,1,1,1,1,NULL,NULL,NULL,1,0),(27,28,1,1,1,1,1,NULL,NULL,NULL,1,0),(28,29,1,1,1,1,1,NULL,NULL,NULL,1,0),(29,30,1,1,1,1,1,NULL,NULL,NULL,1,0),(30,31,1,1,1,1,1,NULL,NULL,NULL,1,0),(35,32,1,1,1,1,1,NULL,NULL,NULL,1,0),(36,33,1,1,1,1,1,NULL,NULL,NULL,1,0),(37,34,1,1,1,1,1,NULL,NULL,NULL,1,0),(38,35,1,1,1,1,1,NULL,NULL,NULL,1,0);
/*!40000 ALTER TABLE `user_group_rights` ENABLE KEYS */;
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
