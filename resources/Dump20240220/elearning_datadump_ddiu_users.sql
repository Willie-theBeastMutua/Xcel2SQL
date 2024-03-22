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
-- Table structure for table `ddiu_users`
--

DROP TABLE IF EXISTS `ddiu_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ddiu_users` (
  `id` varchar(200) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `idnumber` varchar(200) DEFAULT NULL,
  `institution` varchar(500) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `phone1` varchar(200) DEFAULT NULL,
  `phone2` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `profile_field_countykenya` varchar(200) DEFAULT NULL,
  `profile_field_orgname` varchar(200) DEFAULT NULL,
  `profile_field_designation` varchar(200) DEFAULT NULL,
  `profile_field_academicnew` varchar(200) DEFAULT NULL,
  `profile_field_academicbackground` varchar(200) DEFAULT NULL,
  `profile_field_fullname` varchar(200) DEFAULT NULL,
  `profile_field_gender` varchar(200) DEFAULT NULL,
  `profile_field_dob` varchar(200) DEFAULT NULL,
  `profile_field_NationalID` varchar(200) DEFAULT NULL,
  `profile_field_passportNo` varchar(200) DEFAULT NULL,
  `profile_field_mobile` varchar(200) DEFAULT NULL,
  `profile_field_expectations` varchar(800) DEFAULT NULL,
  `profile_field_fileUpload` varchar(200) DEFAULT NULL,
  `profile_field_icq` varchar(200) DEFAULT NULL,
  `profile_field_skype` varchar(200) DEFAULT NULL,
  `profile_field_aim` varchar(200) DEFAULT NULL,
  `profile_field_yahoo` varchar(200) DEFAULT NULL,
  `profile_field_msn` varchar(200) DEFAULT NULL,
  `profile_field_url` varchar(200) DEFAULT NULL,
  `createdTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedTime` datetime DEFAULT NULL,
  `createdBy` int NOT NULL,
  `deleted` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ddiu_users`
--

LOCK TABLES `ddiu_users` WRITE;
/*!40000 ALTER TABLE `ddiu_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `ddiu_users` ENABLE KEYS */;
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
