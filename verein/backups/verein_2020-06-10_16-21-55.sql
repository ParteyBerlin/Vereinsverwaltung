-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: verein
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `passwort` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('hans@wurst','$2y$10$XMZw/8PRu8VxxqIUpXhbROuImBYzeXsfvJBo9Mgh34DWf7BAOK9KO'),('p.schulz.berlin@web.de','$2y$10$VJSf2JvA/rOpuYW70lAjk.jtE9Otn1pggWGMEdtiQTRZcTDFnK6cq');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mitglied`
--

DROP TABLE IF EXISTS `mitglied`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mitglied` (
  `mitglied_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `vorname` varchar(100) NOT NULL,
  `geschlecht` varchar(1) NOT NULL,
  `geb_dat` date NOT NULL,
  `strasse` varchar(100) DEFAULT NULL,
  `nr` varchar(10) DEFAULT NULL,
  `plz` char(5) DEFAULT NULL,
  `ort` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mitglied_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mitglied`
--

LOCK TABLES `mitglied` WRITE;
/*!40000 ALTER TABLE `mitglied` DISABLE KEYS */;
INSERT INTO `mitglied` VALUES (5,'wurst II','Patrick','w','2020-04-27','Charlottenburger Strasse','2','23326','be'),(9,'Möbius','Erika','w','1971-01-01','Havemannstraße','1','12059','Berlin'),(10,'Ohlenburg','Rebecca','w','1984-12-16','Küferstraße','1','12345','Esslingen'),(11,'al Baghdadi','Abu ','w','2019-11-01','Kufürstendamm','1','12059','Suffhausen'),(12,'Schröder','Gerhard','m','2004-10-19','Hansastraße','57','20456','Hamburg'),(13,'Trump','Donald John','m','1942-06-14','Pennsylvania Avenue Ave NW','1600','20500','Washington DC'),(14,'Jinping','Xi','m','1953-06-15','Zhongnanhai','1','10000','Peking'),(15,'Erdogan','Recep Tayyip','w','1954-02-26','Cumhurbaşkanlığı Külliyesi','1','06560','Beştepe-Ankara-Turkey'),(16,'Putin','Wladimir Wladimirowitsch','m','1952-10-07','Kreml','','10307','Moskau');
/*!40000 ALTER TABLE `mitglied` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verein`
--

DROP TABLE IF EXISTS `verein`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verein` (
  `verein_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `stadt` varchar(100) NOT NULL,
  `vorstandsvors` int(11) DEFAULT NULL,
  `gruendung` date NOT NULL,
  PRIMARY KEY (`verein_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verein`
--

LOCK TABLES `verein` WRITE;
/*!40000 ALTER TABLE `verein` DISABLE KEYS */;
INSERT INTO `verein` VALUES (9,'corona e.V.','karlmarxstadt',1,'2018-11-02'),(15,'Old White Autocrats','Shining City on the Hill',1,'2020-06-10');
/*!40000 ALTER TABLE `verein` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vereinmitglied`
--

DROP TABLE IF EXISTS `vereinmitglied`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vereinmitglied` (
  `verein_id` int(11) NOT NULL,
  `mitglied_id` int(11) NOT NULL,
  `bezahlt` varchar(1) NOT NULL,
  PRIMARY KEY (`verein_id`,`mitglied_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vereinmitglied`
--

LOCK TABLES `vereinmitglied` WRITE;
/*!40000 ALTER TABLE `vereinmitglied` DISABLE KEYS */;
INSERT INTO `vereinmitglied` VALUES (1,2,'j'),(1,3,'j'),(4,2,'n'),(4,3,'j'),(5,2,'n'),(6,4,'j'),(7,5,'n'),(9,5,'j'),(9,7,'j'),(9,11,'n'),(9,12,'n'),(12,5,'j'),(12,9,'j'),(15,11,'n'),(15,12,'j'),(15,13,'n'),(15,14,'j'),(15,15,'n'),(15,16,'j');
/*!40000 ALTER TABLE `vereinmitglied` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-10 16:21:55
