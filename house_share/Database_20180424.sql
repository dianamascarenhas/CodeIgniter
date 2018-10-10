-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: wdm
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.31-MariaDB

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
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expenses` (
  `ExpenseId` int(20) NOT NULL AUTO_INCREMENT,
  `toBePayedBy` varchar(50) DEFAULT NULL,
  `IncurrerId` varchar(50) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `Amount` double(10,2) DEFAULT NULL,
  `EDate` date DEFAULT NULL,
  `Remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ExpenseId`),
  KEY `toBePayedBy` (`toBePayedBy`),
  KEY `IncurrerId` (`IncurrerId`),
  CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`toBePayedBy`) REFERENCES `users` (`username`),
  CONSTRAINT `expenses_ibfk_2` FOREIGN KEY (`IncurrerId`) REFERENCES `users` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expenses`
--

LOCK TABLES `expenses` WRITE;
/*!40000 ALTER TABLE `expenses` DISABLE KEYS */;
INSERT INTO `expenses` VALUES (8,'axp8508','axp8508','Test157',20.00,'2018-04-17','tested'),(9,'axp8508','axp8508','update details check',30.00,'2018-04-17','added by owner update check-test 4'),(11,'axp8508','exd2365','test3 ',50.00,'2018-04-17','tested for add by guest');
/*!40000 ALTER TABLE `expenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `Pid` int(6) NOT NULL AUTO_INCREMENT,
  `PayerId` varchar(30) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `Amount` double(10,2) DEFAULT NULL,
  `PaymentDate` date DEFAULT NULL,
  PRIMARY KEY (`Pid`),
  KEY `FK_Payment` (`PayerId`),
  CONSTRAINT `FK_Payment` FOREIGN KEY (`PayerId`) REFERENCES `users` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=881 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (875,'axp8508','test1',240.00,'2018-04-24'),(876,'axp8508','test2',563.00,'2018-04-26'),(877,'dxp7678','Test as other user',23.00,'2018-04-26'),(878,'dxp7678','test after validation',40.00,'2018-04-27'),(879,'dxp7678','Test7',65.00,'2018-04-26'),(880,'dxp7678','check double value',69.76,'2018-04-30');
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propertyinfo`
--

DROP TABLE IF EXISTS `propertyinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propertyinfo` (
  `RoomNbr` varchar(20) NOT NULL,
  `RoomType` varchar(20) DEFAULT NULL,
  `RoomCapacity` int(11) DEFAULT NULL,
  `Availability` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`RoomNbr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propertyinfo`
--

LOCK TABLES `propertyinfo` WRITE;
/*!40000 ALTER TABLE `propertyinfo` DISABLE KEYS */;
INSERT INTO `propertyinfo` VALUES ('D476376','Double',2,1),('D4893','Double',2,1),('D4894','Double',2,1),('D564','Double',2,0),('S321','Suite',4,1),('S673465','Suite',4,1),('S673466','Suite',4,1);
/*!40000 ALTER TABLE `propertyinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `ReservationId` varchar(50) NOT NULL,
  `RoomId` varchar(20) DEFAULT NULL,
  `OccupantId` varchar(50) DEFAULT NULL,
  `NbrOccupants` int(11) DEFAULT NULL,
  `DateFrom` date DEFAULT NULL,
  `DateTo` date DEFAULT NULL,
  `BookingStatus` tinyint(1) DEFAULT NULL,
  `ConditionBefore` varchar(20) DEFAULT NULL,
  `ConditionAfter` varchar(20) DEFAULT NULL,
  `BookedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ReservationId`),
  KEY `FK_reservation1` (`OccupantId`),
  KEY `FK_reservation2` (`BookedBy`),
  KEY `FK_reservation3` (`RoomId`),
  CONSTRAINT `FK_reservation1` FOREIGN KEY (`OccupantId`) REFERENCES `users` (`username`),
  CONSTRAINT `FK_reservation2` FOREIGN KEY (`BookedBy`) REFERENCES `users` (`username`),
  CONSTRAINT `FK_reservation3` FOREIGN KEY (`RoomId`) REFERENCES `propertyinfo` (`RoomNbr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES ('res_87326','D564','exd2365',1,'2018-04-11','2018-04-16',1,'Clean',NULL,'axp8508'),('rs_5ad52ecc92933','S321','axp8508',2,'2018-04-18','2018-04-24',1,'clean',NULL,'dxp7678'),('rs_5ad6d721a00ad','D4893','dxp7678',2,'2018-04-24','2018-04-25',1,'clean',NULL,'dxp7678'),('rs_5ad6f29aa08a9','S673465','dxp7678',2,'2018-04-24','2018-04-25',1,'clean',NULL,'dxp7678'),('rs_5ad8e9f191f85','D4894','dxp7678',2,'2018-04-24','2018-04-25',1,'clean',NULL,'axp8508'),('rs_5ad8e9f1a71cc','D564','dxp7678',2,'2018-04-24','2018-04-25',1,'clean',NULL,'axp8508');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `userrole` varchar(50) DEFAULT NULL,
  `phnbr` int(11) DEFAULT NULL,
  `guestOf` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `guestOf` (`guestOf`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`guestOf`) REFERENCES `users` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('Admin','Admin','axa1234','wdm2018#','admin@wdm.com','admin',746574657,NULL),('Abhishek','Modi','axm8767','wdm2018#','abhishekm@gmail.com','owner',7836274,NULL),('Anurag','Patra','axp8508','wdm2018#','anurag.ofc@gmail.com','owner',682313901,NULL),('Dhruvi','Shah','das4589','wdm2018#','dshah@gmail.com','owner',87467823,NULL),('Diana','S','dxp7678','dianam6374','dianas@gmail.com','owner',32675435,NULL),('elizabeth','diaz','exd2365','wdm2018#','diaz@gmail.com','guest',984758,'axp8508'),('testttt','admin','test675','wdm2018#','tester@gmail.com','owner',2147483647,NULL),('guest','tester','testGuest','wdm2018#','guest@gmail.com','guest',68231390,'axp8508');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'wdm'
--

--
-- Dumping routines for database 'wdm'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-24 19:38:52
