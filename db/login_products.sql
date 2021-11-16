-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: login
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `register_name` varchar(200) NOT NULL,
  `bar_code` varchar(60) NOT NULL,
  `tittle` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `brand` varchar(60) NOT NULL,
  `color` varchar(45) NOT NULL,
  `print` varchar(3) NOT NULL,
  `img` varchar(200) NOT NULL,
  `date_register` datetime NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Admin','123456','','Calça CTZ - Tactel cinza','calca','Calca CTZ','cinza','nao','calca1.jpg','0000-00-00 00:00:00'),(2,'Admin','1234121','','Calça NTZ - Tactel preta','calca','Calca NTZ','preto','nao','calca2.jpg','0000-00-00 00:00:00'),(3,'Admin','1412121','','Calça OX - Tactel cinza','calca','Calca OX','cinza','nao','calca3.jpg','0000-00-00 00:00:00'),(4,'Admin','9834121','','Calça Adidas - Tactel preta','calca','Calca Adidas','preto','nao','calca4.jpg','0000-00-00 00:00:00'),(5,'Admin','9343112','','Calça Nike - Tactel preto e branco','calca','Calca Nike','preto','sim','calca5.jpg','0000-00-00 00:00:00'),(6,'Admin','3993421','','Calça JUMP - Tactel azul','calca','Calcas JUMP','azul','nao','calca6.jpg','0000-00-00 00:00:00'),(7,'Admin','987635','','Camisa Corinthians Preto e Branco','camisa','Camisa Corinthians','preto','sim','camisa_cor1.jpg','0000-00-00 00:00:00'),(8,'Admin','3124215','','Camisa Corintinhians - Nike laranja','camisa','Camisa Corinthians','laranja','nao','camisa_cor4.jpg','0000-00-00 00:00:00'),(9,'Admin','465766','','Camisa Palmeiras Branca - Pulma','camisa','Camisa Palmeiras','branco','sim','camisa_pl2.jpg','0000-00-00 00:00:00'),(10,'Admin','2357612','','Camisa São Paulo Preta - Adidas','camisa','Camisa Sao Paulo','preto','nao','camisa_sp4.jpg','0000-00-00 00:00:00'),(11,'Admin','129832','','Camisa Santos Preta - Umbro','camisa','Camisa Santos','preto','sim','camisa_st3.jpg','0000-00-00 00:00:00'),(12,'Admin','129832','','Camisa Santos Rosa e Branco - Umbro','camisa','Camisa Santos','rosa','sim','camisa_st4.jpg','0000-00-00 00:00:00'),(13,'Admin','87421','','Chuteira Nike - Phanton','chuteira','Chuteira Nike','preto','sim','chuteira1.jpg','0000-00-00 00:00:00'),(14,'Admin','48742311','','Chuteira Nike - Preto e Azul','chuteira','Chuteira Nike','preto','sim','chuteira2.jpg','0000-00-00 00:00:00'),(15,'Admin','9832174','','Chuteira Nike - Preto e Azul','chuteira','Chuteira Nike','preto','sim','chuteira3.jpg','0000-00-00 00:00:00'),(16,'Admin','3214512','','Chuteira Adidas - Preto e Laranja','chuteira','Chuteira Adidas','preto','sim','chuteira4.jpg','0000-00-00 00:00:00'),(17,'Admin','9831274','','Chuteira Nike - Preto e Laranja','chuteira','Chuteira Nike','preto','sim','chuteira5.jpg','0000-00-00 00:00:00'),(18,'Admin','3214512','','Chuteira Adidas - Preto e Verde','chuteira','Chuteira Adidas','preto','sim','chuteira6.jpg','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-15 22:53:26
