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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `userId` int NOT NULL,
  `firstName` text,
  `lastName` text,
  `email` text,
  `mobile` text,
  `passwordHash` text,
  `authKey` text,
  `userStatusId` int DEFAULT NULL,
  `authToken` text,
  `renewToken` text,
  `resetCode` text,
  `expiryDate` int DEFAULT NULL,
  `tokenExpiry` text,
  `changePassword` int DEFAULT NULL,
  `createdTime` text,
  `updatedTime` text,
  `deletedTime` text,
  `createdBy` int DEFAULT NULL,
  `deleted` int DEFAULT NULL,
  PRIMARY KEY (`userId`),
  KEY `users_userStatusId_idx` (`userStatusId`),
  CONSTRAINT `users_userStatusId` FOREIGN KEY (`userStatusId`) REFERENCES `user_status` (`userStatusId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Joseph','Ngugi','willymathuva@gmail.com','0722896758','$2y$13$FYkRbvFG.CdMCqlOL58GsuMmzGfCXZsaAQQq6LEo23aYklzd30Rgu','scdvpGPClipRYZ2aMOngk4hm6vxAZt7O',1,'5BkI8tA6vNEEWWbuA9Z6gnIXsRqbeWw-',NULL,NULL,NULL,'2024-02-13',0,'2022-10-19 10:29:31','2024-02-14 12:47:10',NULL,1,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-20 12:44:23
