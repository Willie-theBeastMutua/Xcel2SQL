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
-- Table structure for table `art_survey`
--

DROP TABLE IF EXISTS `art_survey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `art_survey` (
  `Response` varchar(200) DEFAULT NULL,
  `Submitted on` varchar(200) DEFAULT NULL,
  `Institution` varchar(200) DEFAULT NULL,
  `Course` varchar(200) DEFAULT NULL,
  `Group` varchar(200) DEFAULT NULL,
  `ID` varchar(200) NOT NULL,
  `Full name` varchar(200) DEFAULT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Q00_Full name` varchar(200) DEFAULT NULL,
  `Q00_Email address` varchar(200) DEFAULT NULL,
  `Q00` varchar(200) DEFAULT NULL,
  `Q00_Sex` varchar(200) DEFAULT NULL,
  `Q00_Education` varchar(200) DEFAULT NULL,
  `Q00_Age` varchar(200) DEFAULT NULL,
  `Q00_Country` varchar(200) DEFAULT NULL,
  `Q00_Other country` varchar(200) DEFAULT NULL,
  `Q00_Cadre` varchar(200) DEFAULT NULL,
  `Q00_Carder-other` varchar(500) DEFAULT NULL,
  `Q00_Level of service support` varchar(200) DEFAULT NULL,
  `Q00_Other levels HC support` varchar(200) DEFAULT NULL,
  `Q00_County` varchar(200) DEFAULT NULL,
  `Q00_More than one county` varchar(200) DEFAULT NULL,
  `Q00_Sub county` varchar(200) DEFAULT NULL,
  `Q00_Health facility` varchar(200) DEFAULT NULL,
  `Q00_MFLCode` varchar(200) DEFAULT NULL,
  `Q00_Experience in health sector` varchar(200) DEFAULT NULL,
  `Q00_Experience in HIV response` varchar(200) DEFAULT NULL,
  `Q01_eCourse registration` varchar(200) DEFAULT NULL,
  `Q02_Motivations for eLearning` varchar(700) DEFAULT NULL,
  `Q03_Level of access->1` varchar(200) DEFAULT NULL,
  `Q03_Level of access->2` varchar(200) DEFAULT NULL,
  `Q03_Level of access->3` varchar(200) DEFAULT NULL,
  `Q03_Level of access->4` varchar(200) DEFAULT NULL,
  `Q03_Level of access->5` varchar(200) DEFAULT NULL,
  `Q04_Level of Confidence in IT->1` varchar(200) DEFAULT NULL,
  `Q04_Level of Confidence in IT->2` varchar(200) DEFAULT NULL,
  `Q04_Level of Confidence in IT->3` varchar(200) DEFAULT NULL,
  `Q04_Level of Confidence in IT->4` varchar(200) DEFAULT NULL,
  `Q04_Level of Confidence in IT->5` varchar(200) DEFAULT NULL,
  `Q05_Time in a day` varchar(200) DEFAULT NULL,
  `Q06_Difficulties for the course->1` varchar(200) DEFAULT NULL,
  `Q06_Difficulties for the course->2` varchar(200) DEFAULT NULL,
  `Q06_Difficulties for the course->3` varchar(200) DEFAULT NULL,
  `Q06_Difficulties for the course->4` varchar(200) DEFAULT NULL,
  `Q07_Support needed->1` varchar(200) DEFAULT NULL,
  `Q07_Support needed->2` varchar(200) DEFAULT NULL,
  `Q07_Support needed->3` varchar(200) DEFAULT NULL,
  `Q07_Support needed->4` varchar(200) DEFAULT NULL,
  `Q07_Support needed->5` varchar(200) DEFAULT NULL,
  `Q07_Support needed->6` varchar(200) DEFAULT NULL,
  `Q08_Time of the day->1` varchar(200) DEFAULT NULL,
  `Q08_Time of the day->2` varchar(200) DEFAULT NULL,
  `Q08_Time of the day->3` varchar(200) DEFAULT NULL,
  `Q08_Time of the day->4` varchar(200) DEFAULT NULL,
  `Q08_Time of the day->5` varchar(200) DEFAULT NULL,
  `Q08_Time of the day->6` varchar(200) DEFAULT NULL,
  `Q08_Time of the day->7` varchar(200) DEFAULT NULL,
  `Q08_Time of the day->8` varchar(200) DEFAULT NULL,
  `createdTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedTime` datetime DEFAULT NULL,
  `createdBy` int NOT NULL,
  `deleted` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art_survey`
--

LOCK TABLES `art_survey` WRITE;
/*!40000 ALTER TABLE `art_survey` DISABLE KEYS */;
/*!40000 ALTER TABLE `art_survey` ENABLE KEYS */;
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
