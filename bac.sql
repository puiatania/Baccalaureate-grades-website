-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: bac
-- ------------------------------------------------------
-- Server version	5.6.24

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
-- Table structure for table `elevi`
--

DROP TABLE IF EXISTS `elevi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elevi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nume` varchar(20) DEFAULT NULL,
  `prenume` varchar(20) DEFAULT NULL,
  `cnp` char(13) DEFAULT NULL,
  `initiala_tata` char(3) DEFAULT NULL,
  `clasa` varchar(5) DEFAULT NULL,
  `profil` varchar(5) DEFAULT NULL,
  `specializare` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elevi`
--

LOCK TABLES `elevi` WRITE;
/*!40000 ALTER TABLE `elevi` DISABLE KEYS */;
INSERT INTO `elevi` VALUES (1,'Tanase','Cosmina','6030402457291','P','XIIE','Real','Stiinte ale naturii'),(2,'Apostol','George','5010112340033','V','XIIF','Uman','Filologie'),(3,'Dumitru','Anastasia','6030720540978','G','XIIA','Real','Matematica-Informatica intesiv informatica'),(4,'Constantin','Stefan Ionut','5010501452200','CF','XIIB','Real','Matematica-Informatica intensiv engleza'),(5,'Banica','Oana Mirela','6020917452314','DN','XIIC','Real','Matematica-Informatica'),(6,'Draghici','Rodica Mihaela','6020824567390','F','XIIC','Real','Matematica-Informatica'),(7,'Mocanu','Alexandru Horia','5011104890123','A','XIID','Real','Matematica-Informatica'),(8,'Constantin','Laurentiu','5021224764500','BV','XIIG','Uman','Stiinte Sociale'),(9,'Juganaru','Adam Catalin','5020923763455','I','XIIA','Real','Matematica-Informatica intensiv informatica'),(10,'Manole','Alexandra Madalina','6020823540089','F','XIIC','Real','Matematica-Informatica'),(11,'Nastase','Ioana Maria','6020513584520','H','XIIB','Real','Matematica-Informatica intensiv engleza'),(12,'Zaharia','Bogdan Ioan','5020207236751','CD','XIID','Real','Matematica-Informatica'),(13,'Vlasceanu','Denisa Cristiana','6020822670912','D','XIIG','Uman','Stiinte Sociale'),(14,'Simion','Dumitru Cristian','5021222784521','AM','XIIF','Uman','Filologie'),(15,'Tanase','Denisa','6020818459812','IC','XIID','Real','Matematica-Informatica'),(16,'Slujitoru','Olivia Mirela','6020512319040','N','XIIC','Real','Matematica-Informatica'),(17,'Hristescu','Ionut Daniel','5010712319041','A','XIIA','Real','Matematica-Informatica intensiv informatica'),(18,'Chiriac','Sorina','6010511673440','V','XIIB','Real','Matematica-Informatica intensiv engleza'),(19,'Luciu','Tudor Andrei','5021109790816','L','XIIG','Uman','Stiinte Sociale'),(20,'Radu','Emanuel','5020309890123','F','XIIF','Uman','Filologie'),(21,'Cristescu','Ana','6030712891245','GL','XIIF','Uman','Stiinte Sociale'),(27,'Adam','George Florian','5020328125678','GL','XIIG','Uman','Stiinte Sociale'),(29,'Adam','George Florian','5020417895613','GL','XIIG','Uman','Stiinte Sociale'),(31,'Marin','Maria','6020730125678','I','XIIC','Real','Matematica-Informatica'),(32,'Florea','Cristian Ioan','5011123896754','K','XIIE','Real','Stiinte ale Naturii'),(36,'Tanase','Tudor','5020304667890','A','XIIE','Real','Stiinte ale Naturii');
/*!40000 ALTER TABLE `elevi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `probe`
--

DROP TABLE IF EXISTS `probe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `probe` (
  `id_elev` int(10) unsigned DEFAULT NULL,
  `proba_lb_romana` enum('Da','Nu') DEFAULT 'Da',
  `proba_obligatorie` enum('Matematica','Istorie') DEFAULT NULL,
  `proba_alegere` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `probe`
--

LOCK TABLES `probe` WRITE;
/*!40000 ALTER TABLE `probe` DISABLE KEYS */;
INSERT INTO `probe` VALUES (1,'Da','Matematica','Biologie'),(2,'Da','Istorie','Logica'),(3,'Da','Matematica','Fizica'),(4,'Da','Matematica','Chimie'),(5,'Da','Matematica','Informatica'),(6,'Da','Matematica','Informatica'),(7,'Da','Matematica','Biologie'),(8,'Da','Istorie','Geografie'),(9,'Da','Matematica','Chimie'),(10,'Da','Matematica','Fizica'),(11,'Da','Matematica','Fizica'),(12,'Da','Matematica','Biologie'),(13,'Da','Istorie','Sociologie'),(14,'Da','Istorie','Geografie'),(15,'Da','Matematica','Chimie'),(16,'Da','Matematica','Informatica'),(17,'Da','Matematica','Chimie'),(18,'Da','Matematica','Fizica'),(19,'Da','Istorie','Geografie'),(20,'Da','Istorie','Logica'),(21,'Da','Istorie','Sociologie'),(27,'Da','Istorie','Logica'),(29,'Da','Istorie','Sociologie'),(31,'Da','Matematica','Fizica');
/*!40000 ALTER TABLE `probe` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-16 10:25:20
