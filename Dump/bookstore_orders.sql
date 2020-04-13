-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: bookstore
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `order_no` int(11) NOT NULL AUTO_INCREMENT,
  `book_no` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_no`),
  KEY `book_no` (`book_no`),
  KEY `customer` (`customer`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`book_no`) REFERENCES `book` (`no`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer`) REFERENCES `mem` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,4,1,'admin','2020-04-13 11:33:25'),(3,5,2,'admin','2020-04-13 11:33:38'),(4,6332,2,'admin','2020-04-13 11:33:51'),(5,332,2,'admin','2020-04-13 11:33:54'),(6,1332,2,'admin','2020-04-13 11:34:01'),(7,2332,2,'admin','2020-04-13 11:34:03'),(8,3332,2,'admin','2020-04-13 11:34:04'),(9,4332,2,'admin','2020-04-13 11:34:05'),(10,5332,2,'admin','2020-04-13 11:34:05'),(11,132,2,'admin','2020-04-13 11:34:12'),(12,232,2,'admin','2020-04-13 11:34:13'),(14,532,2,'admin','2020-04-13 11:34:16'),(15,632,2,'admin','2020-04-13 11:34:17'),(16,732,2,'admin','2020-04-13 11:34:19'),(17,832,2,'admin','2020-04-13 11:34:20');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-13 15:39:48
