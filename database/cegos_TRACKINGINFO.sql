-- MySQL dump 10.13  Distrib 8.0.24, for macos11 (x86_64)
--
-- Host: localhost    Database: cegos
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `TRACKINGINFO`
--

DROP TABLE IF EXISTS `TRACKINGINFO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `TRACKINGINFO` (
  `InternalClient` varchar(20) NOT NULL COMMENT 'This is our InternalClient code',
  `Client` varchar(20) NOT NULL COMMENT 'Our client name\r\n',
  `Module` varchar(20) NOT NULL COMMENT 'The code of the launched module\r\n',
  `Language` varchar(20) NOT NULL COMMENT 'The language that the module was launched',
  `URL` varchar(200) NOT NULL COMMENT 'URL of the request',
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Creation date of this row. This should be the current date by default',
  `Width` int NOT NULL COMMENT 'Width of the Browser',
  `Height` int NOT NULL COMMENT 'Height of the Browser',
  `Browser` varchar(50) NOT NULL COMMENT 'The browser that the module was launched from',
  `BrowserVersion` varchar(50) NOT NULL COMMENT 'The browser version',
  `Java` varchar(10) NOT NULL COMMENT 'If java is being used',
  `Mobile` varchar(10) NOT NULL COMMENT 'If the module was accessed by a mobile device',
  `OS` varchar(20) NOT NULL COMMENT 'The Operating System that the module was launched from',
  `OSVersion` varchar(50) NOT NULL COMMENT 'The Operating System version',
  `Cookies` varchar(10) NOT NULL COMMENT 'If the browser has cookies enabled',
  `track` varchar(500) NOT NULL COMMENT 'Store the received encrypted comma-separated variable',
  PRIMARY KEY (`track`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRACKINGINFO`
--

LOCK TABLES `TRACKINGINFO` WRITE;
/*!40000 ALTER TABLE `TRACKINGINFO` DISABLE KEYS */;
INSERT INTO `TRACKINGINFO` VALUES ('CLHUB','DS','me002','de','http://localhost','2022-09-20 11:36:43',414,896,'Safari','14.1.2','false','true','iOS','14.8.1','true','434c4855423b44533b6d653030323b64653b687474703a2f2f6c6f63616c686f73743b3431343b3839363b5361666172693b31342e312e323b66616c73653b747275653b694f533b31342e382e313b74727565'),('CLHUB','DS','mfh004','pt','http://localhost','2022-09-20 11:35:24',1080,720,'Safari','15.5','false','false','Windows','10','true','434c4855423b44533b6d66683030343b70743b687474703a2f2f6c6f63616c686f73743b313038303b3732303b5361666172693b31352e353b66616c73653b66616c73653b57696e646f77733b31303b74727565'),('CLHUB','DS','mh017','fr','http://localhost','2022-09-20 11:34:54',1920,1080,'Firefox','104.0.2','false','false','Windows','10','true','434c4855423b44533b6d683031373b66723b687474703a2f2f6c6f63616c686f73743b313932303b313038303b46697265666f783b3130342e302e323b66616c73653b66616c73653b57696e646f77733b31303b74727565'),('CLHUB','DS','mh140_a','fr','http://localhost','2022-09-20 11:35:47',1440,900,'Safari','13.0.2','true','false','Mac OS X','10_15','true','434c4855423b44533b6d683134305f613b66723b687474703a2f2f6c6f63616c686f73743b313434303b3930303b5361666172693b31332e302e323b747275653b66616c73653b4d6163204f5320583b31305f31353b74727565'),('CLHUB','DS','ms007','it','http://localhost','2022-09-20 11:37:33',414,896,'Chrome','104.0.5112.97','false','true','Android','12','true','434c4855423b44533b6d733030373b69743b687474703a2f2f6c6f63616c686f73743b3431343b3839363b4368726f6d653b3130342e302e353131322e39373b66616c73653b747275653b416e64726f69643b31323b74727565'),('CLHUB','DS','tvid006','us','http://localhost','2022-09-20 11:34:27',1920,1080,'Chrome','104.0.0.0','false','false','Windows','10','true','434c4855423b44533b747669643030363b75733b687474703a2f2f6c6f63616c686f73743b313932303b313038303b4368726f6d653b3130342e302e302e303b66616c73653b66616c73653b57696e646f77733b31303b74727565');
/*!40000 ALTER TABLE `TRACKINGINFO` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-20 12:44:03
