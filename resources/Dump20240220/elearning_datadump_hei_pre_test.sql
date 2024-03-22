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
-- Table structure for table `hei_pre_test`
--

DROP TABLE IF EXISTS `hei_pre_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hei_pre_test` (
  `Last name` varchar(200) DEFAULT NULL,
  `First name` varchar(200) DEFAULT NULL,
  `Email address` varchar(200) NOT NULL,
  `City` varchar(200) DEFAULT NULL,
  `Country` varchar(200) DEFAULT NULL,
  `State` varchar(200) DEFAULT NULL,
  `Started on` varchar(200) DEFAULT NULL,
  `Completed` varchar(200) DEFAULT NULL,
  `Time taken` varchar(200) DEFAULT NULL,
  `Grade/100` varchar(200) DEFAULT NULL,
  `Q1` varchar(200) DEFAULT NULL,
  `Q2` varchar(200) DEFAULT NULL,
  `Q3` varchar(200) DEFAULT NULL,
  `Q4` varchar(200) DEFAULT NULL,
  `Q5` varchar(200) DEFAULT NULL,
  `Q6` varchar(200) DEFAULT NULL,
  `Q7` varchar(200) DEFAULT NULL,
  `Q8` varchar(200) DEFAULT NULL,
  `Q9` varchar(200) DEFAULT NULL,
  `Q10` varchar(200) DEFAULT NULL,
  `createdTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedTime` datetime DEFAULT NULL,
  `createdBy` int NOT NULL,
  `deleted` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`Email address`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hei_pre_test`
--

LOCK TABLES `hei_pre_test` WRITE;
/*!40000 ALTER TABLE `hei_pre_test` DISABLE KEYS */;
/*!40000 ALTER TABLE `hei_pre_test` ENABLE KEYS */;
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
