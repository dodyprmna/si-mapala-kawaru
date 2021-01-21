-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: db_mapala_kawaru
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

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
-- Table structure for table `tbl_activity`
--

DROP TABLE IF EXISTS `tbl_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_activity` (
  `id_activity` int NOT NULL AUTO_INCREMENT,
  `activity` varchar(100) DEFAULT NULL,
  `fk_id_user` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_activity`),
  KEY `tbl_activity_FK` (`fk_id_user`),
  CONSTRAINT `tbl_activity_FK` FOREIGN KEY (`fk_id_user`) REFERENCES `tbl_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_activity`
--

LOCK TABLES `tbl_activity` WRITE;
/*!40000 ALTER TABLE `tbl_activity` DISABLE KEYS */;
INSERT INTO `tbl_activity` VALUES (1,'Login aplikasi IP : 127.0.0.1',1,'2021-01-19 13:53:25'),(2,'Insert Program Kerja AAA',1,'2021-01-19 14:26:10'),(3,'Update Program Kerja id(1)',1,'2021-01-19 14:37:54'),(4,'Update Program Kerja id(1)',1,'2021-01-19 14:38:04'),(5,'Input Kegiatan Dayung',1,'2021-01-19 15:15:14'),(6,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-19 15:22:36'),(7,'Login aplikasi IP : 127.0.0.1',1,'2021-01-19 15:22:41'),(8,'Tambah user admin',1,'2021-01-19 15:41:57'),(9,'Update user. user id : 1',1,'2021-01-19 15:47:10'),(10,'Input Prestasi Juara I Lomba Dayung',1,'2021-01-19 16:47:12'),(11,'Update Prestasi id(1)',1,'2021-01-19 16:51:42'),(12,'Update Program Kerja id(1)',1,'2021-01-19 17:30:12'),(13,'Update Program Kerja id(1)',1,'2021-01-19 17:30:24'),(14,'Update Program Kerja id(1)',1,'2021-01-19 17:41:22'),(15,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-19 21:03:07'),(16,'Login aplikasi IP : 127.0.0.1',1,'2021-01-19 21:03:17'),(17,'Ubah password',1,'2021-01-19 21:03:40'),(18,'Login aplikasi IP : 127.0.0.1',1,'2021-01-19 21:18:52'),(19,'update role (id role : 1)',1,'2021-01-19 21:30:40'),(20,'update role (id role : 1)',1,'2021-01-19 21:32:21'),(21,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-19 21:33:16'),(22,'Login aplikasi IP : 127.0.0.1',1,'2021-01-19 21:33:22'),(23,'Tambah role KBPPSDM',1,'2021-01-19 21:35:20'),(24,'Tambah role KBPPSDM',1,'2021-01-19 21:35:22'),(25,'Tambah role KBPPSDM',1,'2021-01-19 21:35:26'),(26,'Tambah role Ekspeditor',1,'2021-01-19 21:35:41'),(27,'Tambah role Ketua Umum',1,'2021-01-19 21:35:56'),(28,'Tambah role Bendahara',1,'2021-01-19 21:36:15'),(29,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-19 21:46:35'),(30,'Login aplikasi IP : 127.0.0.1',1,'2021-01-19 21:47:09'),(31,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-19 21:47:29'),(32,'Login aplikasi IP : 127.0.0.1',1,'2021-01-20 10:41:49'),(33,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-20 11:23:55'),(34,'Login aplikasi IP : 127.0.0.1',1,'2021-01-20 13:27:52'),(35,'Login aplikasi IP : 127.0.0.1',1,'2021-01-20 15:42:10'),(36,'Login aplikasi IP : 127.0.0.1',1,'2021-01-20 15:50:43'),(37,'Login aplikasi IP : 127.0.0.1',1,'2021-01-20 15:54:47'),(38,'Login aplikasi IP : 127.0.0.1',1,'2021-01-20 19:30:32'),(39,'Input Program Kerja BB',1,'2021-01-20 19:35:39'),(40,'Update Program Kerja id(2)',1,'2021-01-20 19:38:47'),(41,'Update Program Kerja id(2)',1,'2021-01-20 19:38:52'),(42,'Update pelaksana kegiatan id(1)',1,'2021-01-20 20:22:06'),(43,'Update pelaksana kegiatan id(1)',1,'2021-01-20 20:31:48'),(44,'Update pelaksana kegiatan id(1)',1,'2021-01-20 20:58:52'),(45,'Update pelaksana kegiatan id(1)',1,'2021-01-20 20:59:19'),(46,'Login aplikasi IP : 127.0.0.1',1,'2021-01-20 20:59:39'),(47,'Update pelaksana kegiatan id(1)',1,'2021-01-20 20:59:51'),(48,'Login aplikasi IP : 127.0.0.1',1,'2021-01-20 22:39:35'),(49,'Update Program Kerja id(1)',1,'2021-01-20 23:06:24'),(50,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 08:19:42'),(51,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 08:25:13'),(52,'Update pelaksana kegiatan id(1)',1,'2021-01-21 08:35:13'),(53,'Update pelaksana kegiatan id(1)',1,'2021-01-21 08:35:23'),(54,'Update pelaksana kegiatan id(1)',1,'2021-01-21 08:36:31'),(55,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 08:36:53'),(56,'Update pelaksana kegiatan id(1)',1,'2021-01-21 08:37:02'),(57,'Input Kegiatan Wall Climbing',1,'2021-01-21 08:37:24'),(58,'Input Kegiatan Wall Climbing',1,'2021-01-21 08:37:39'),(59,'Input Kegiatan Wall Climbing',1,'2021-01-21 08:39:30'),(60,'Update pelaksana kegiatan id(4)',1,'2021-01-21 08:43:00'),(61,'Tambah user Oki',1,'2021-01-21 09:24:57'),(62,'Tambah user Ana',1,'2021-01-21 09:25:26'),(63,'Tambah user Rachmad',1,'2021-01-21 09:26:03'),(64,'Tambah user Rohman',1,'2021-01-21 09:26:50'),(65,'update role (id role : 1)',1,'2021-01-21 09:32:51'),(66,'update role (id role : 1)',1,'2021-01-21 09:43:24'),(67,'update role (id role : 1)',1,'2021-01-21 09:45:55'),(68,'update role (id role : 7)',1,'2021-01-21 09:46:11'),(69,'update role (id role : 1)',1,'2021-01-21 09:55:21'),(70,'update role (id role : 7)',1,'2021-01-21 09:56:51'),(71,'update role (id role : 8)',1,'2021-01-21 09:57:28'),(72,'update role (id role : 9)',1,'2021-01-21 09:59:25'),(73,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 10:03:03'),(74,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 10:03:06'),(75,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 10:03:26'),(76,'Login aplikasi IP : 127.0.0.1',78,'2021-01-21 10:03:32'),(77,'update role (id role : 7)',78,'2021-01-21 10:18:29'),(78,'update role (id role : 8)',78,'2021-01-21 10:18:47'),(79,'update role (id role : 9)',78,'2021-01-21 10:18:55'),(80,'Logout aplikasi IP : 127.0.0.1',78,'2021-01-21 10:19:02'),(81,'Login aplikasi IP : 127.0.0.1',78,'2021-01-21 10:19:10'),(82,'update role (id role : 7)',78,'2021-01-21 10:20:56'),(83,'Logout aplikasi IP : 127.0.0.1',78,'2021-01-21 10:21:02'),(84,'Login aplikasi IP : 127.0.0.1',78,'2021-01-21 10:21:10'),(85,'update role (id role : 7)',78,'2021-01-21 10:22:46'),(86,'Logout aplikasi IP : 127.0.0.1',78,'2021-01-21 10:22:50'),(87,'Login aplikasi IP : 127.0.0.1',78,'2021-01-21 10:22:55'),(88,'update role (id role : 7)',78,'2021-01-21 10:23:14'),(89,'Logout aplikasi IP : 127.0.0.1',78,'2021-01-21 10:23:20'),(90,'Login aplikasi IP : 127.0.0.1',78,'2021-01-21 10:23:27'),(91,'Update Program Kerja id(4)',78,'2021-01-21 10:34:40'),(92,'Logout aplikasi IP : 127.0.0.1',78,'2021-01-21 11:03:32'),(93,'Login aplikasi IP : 127.0.0.1',81,'2021-01-21 11:03:37'),(94,'Logout aplikasi IP : 127.0.0.1',81,'2021-01-21 11:03:45'),(95,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 11:03:53'),(96,'update role (id role : 8)',1,'2021-01-21 11:04:03'),(97,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 11:04:06'),(98,'Login aplikasi IP : 127.0.0.1',81,'2021-01-21 11:04:29'),(99,'Update pelaksana kegiatan id(4)',81,'2021-01-21 11:11:57'),(100,'Update pelaksana kegiatan id(4)',81,'2021-01-21 11:12:33'),(101,'Update pelaksana kegiatan id(4)',81,'2021-01-21 11:13:56'),(102,'Update detail kegiatan id(4)',81,'2021-01-21 11:17:25'),(103,'Login aplikasi IP : 127.0.0.1',81,'2021-01-21 11:22:14'),(104,'Update detail kegiatan id(4)',81,'2021-01-21 12:01:59'),(105,'Update detail kegiatan id(4)',81,'2021-01-21 13:25:41'),(106,'Update detail kegiatan id(4)',81,'2021-01-21 13:30:37'),(107,'Logout aplikasi IP : 127.0.0.1',81,'2021-01-21 13:41:53'),(108,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 13:41:58'),(109,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 14:11:14'),(110,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 14:48:28'),(111,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 15:01:02'),(112,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 15:03:11'),(113,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 15:20:32'),(114,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 15:22:58'),(115,'Update detail kegiatan id(4)',1,'2021-01-21 15:23:21'),(116,'Update detail kegiatan id(4)',1,'2021-01-21 15:23:28'),(117,'Update detail kegiatan id(4)',1,'2021-01-21 15:23:29'),(118,'Update detail kegiatan id(4)',1,'2021-01-21 15:23:29'),(119,'Update detail kegiatan id(4)',1,'2021-01-21 15:23:30'),(120,'Update detail kegiatan id(4)',1,'2021-01-21 15:23:30'),(121,'Update detail kegiatan id(4)',1,'2021-01-21 15:24:07'),(122,'Update detail kegiatan id(4)',1,'2021-01-21 15:25:16'),(123,'Update detail kegiatan id(4)',1,'2021-01-21 15:25:24'),(124,'Input Kegiatan Wall Climbing',1,'2021-01-21 15:41:19'),(125,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 15:43:30'),(126,'Login aplikasi IP : 127.0.0.1',81,'2021-01-21 15:43:36'),(127,'Logout aplikasi IP : 127.0.0.1',81,'2021-01-21 15:44:29'),(128,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 15:44:36'),(129,'update role (id role : 8)',1,'2021-01-21 15:44:45'),(130,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 15:44:48'),(131,'Login aplikasi IP : 127.0.0.1',81,'2021-01-21 15:45:01'),(132,'Logout aplikasi IP : 127.0.0.1',81,'2021-01-21 15:53:37'),(133,'Login aplikasi IP : 127.0.0.1',78,'2021-01-21 15:53:43'),(134,'Logout aplikasi IP : 127.0.0.1',78,'2021-01-21 15:54:04'),(135,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 16:23:19'),(136,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 19:07:46'),(137,'update role (id role : 1)',1,'2021-01-21 19:17:03'),(138,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 19:17:11'),(139,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 19:17:16'),(140,'update role (id role : 1)',1,'2021-01-21 19:18:18'),(141,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 19:18:22'),(142,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 19:18:26'),(143,'Update Program Kerja id(1)',1,'2021-01-21 19:37:34'),(144,'update role (id role : 10)',1,'2021-01-21 19:39:35'),(145,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 19:39:54'),(146,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 19:40:09'),(147,'Update user. user id : 79',1,'2021-01-21 19:40:18'),(148,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 19:40:23'),(149,'Login aplikasi IP : 127.0.0.1',79,'2021-01-21 19:40:29'),(150,'Update budget proker id(2)',79,'2021-01-21 19:41:01'),(151,'Logout aplikasi IP : 127.0.0.1',79,'2021-01-21 19:41:10'),(152,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 19:41:15'),(153,'Update Program Kerja id(1)',1,'2021-01-21 19:41:37'),(154,'Update Program Kerja id(1)',1,'2021-01-21 19:42:29'),(155,'Update budget proker id(1)',1,'2021-01-21 19:42:46'),(156,'Update Program Kerja id(5)',1,'2021-01-21 20:18:54'),(157,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 20:20:58'),(158,'Update Program Kerja id(4)',1,'2021-01-21 20:22:10'),(159,'Input Capaian Kegiatan ',1,'2021-01-21 20:22:52'),(160,'Input Capaian Kegiatan ',1,'2021-01-21 20:23:55'),(161,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 20:37:51'),(162,'Update capaian kegiatan id(2)',1,'2021-01-21 20:37:59'),(163,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 20:38:19'),(164,'Login aplikasi IP : 127.0.0.1',80,'2021-01-21 20:38:23'),(165,'Logout aplikasi IP : 127.0.0.1',80,'2021-01-21 20:39:22'),(166,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 20:39:28'),(167,'update role (id role : 7)',1,'2021-01-21 20:41:33'),(168,'update role (id role : 8)',1,'2021-01-21 20:41:40'),(169,'update role (id role : 7)',1,'2021-01-21 20:42:56'),(170,'update role (id role : 7)',1,'2021-01-21 20:43:16'),(171,'update role (id role : 8)',1,'2021-01-21 20:43:27'),(172,'update role (id role : 8)',1,'2021-01-21 20:43:34'),(173,'update role (id role : 9)',1,'2021-01-21 20:43:41'),(174,'update role (id role : 10)',1,'2021-01-21 20:43:47'),(175,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 20:44:04'),(176,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 20:44:46'),(177,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 20:44:52'),(178,'Login aplikasi IP : 127.0.0.1',80,'2021-01-21 20:45:03'),(179,'Logout aplikasi IP : 127.0.0.1',80,'2021-01-21 20:45:13'),(180,'Login aplikasi IP : 127.0.0.1',1,'2021-01-21 20:45:21'),(181,'update role (id role : 9)',1,'2021-01-21 20:50:26'),(182,'Logout aplikasi IP : 127.0.0.1',1,'2021-01-21 20:50:31'),(183,'Login aplikasi IP : 127.0.0.1',80,'2021-01-21 20:50:37'),(184,'Logout aplikasi IP : 127.0.0.1',80,'2021-01-21 20:57:10');
/*!40000 ALTER TABLE `tbl_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_capaian_kegiatan`
--

DROP TABLE IF EXISTS `tbl_capaian_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_capaian_kegiatan` (
  `id_capaian` int NOT NULL AUTO_INCREMENT,
  `fk_user` int DEFAULT NULL,
  `fk_kegiatan` int DEFAULT NULL,
  `judul_penelitian` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_capaian`),
  KEY `tbl_capaian_kegiatan_FK` (`fk_kegiatan`),
  KEY `tbl_capaian_kegiatan_FK_1` (`fk_user`),
  CONSTRAINT `tbl_capaian_kegiatan_FK` FOREIGN KEY (`fk_kegiatan`) REFERENCES `tbl_kegiatan` (`id_kegiatan`),
  CONSTRAINT `tbl_capaian_kegiatan_FK_1` FOREIGN KEY (`fk_user`) REFERENCES `tbl_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_capaian_kegiatan`
--

LOCK TABLES `tbl_capaian_kegiatan` WRITE;
/*!40000 ALTER TABLE `tbl_capaian_kegiatan` DISABLE KEYS */;
INSERT INTO `tbl_capaian_kegiatan` VALUES (1,NULL,4,'123456'),(2,1,4,'255');
/*!40000 ALTER TABLE `tbl_capaian_kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_detail_kegiatan`
--

DROP TABLE IF EXISTS `tbl_detail_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_detail_kegiatan` (
  `fk_kegiatan` int NOT NULL,
  `fk_user` int NOT NULL,
  PRIMARY KEY (`fk_kegiatan`,`fk_user`),
  KEY `detail_kegiatan_FK` (`fk_user`),
  CONSTRAINT `detail_kegiatan_FK` FOREIGN KEY (`fk_user`) REFERENCES `tbl_user` (`id_user`),
  CONSTRAINT `detail_kegiatan_FK_1` FOREIGN KEY (`fk_kegiatan`) REFERENCES `tbl_kegiatan` (`id_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_detail_kegiatan`
--

LOCK TABLES `tbl_detail_kegiatan` WRITE;
/*!40000 ALTER TABLE `tbl_detail_kegiatan` DISABLE KEYS */;
INSERT INTO `tbl_detail_kegiatan` VALUES (4,78),(4,79);
/*!40000 ALTER TABLE `tbl_detail_kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kegiatan`
--

DROP TABLE IF EXISTS `tbl_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int NOT NULL AUTO_INCREMENT,
  `fk_proker` int DEFAULT NULL,
  `ketupel` int DEFAULT NULL,
  `nama_kegiatan` varchar(100) DEFAULT NULL,
  `tanggal_mulai_kegiatan` date DEFAULT NULL,
  `tanggal_selesai_kegiatan` date DEFAULT NULL,
  `lokasi_kegiatan` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kegiatan`),
  KEY `tbl_kegiatan_FK` (`fk_proker`),
  KEY `tbl_kegiatan_FK_1` (`ketupel`),
  CONSTRAINT `tbl_kegiatan_FK` FOREIGN KEY (`fk_proker`) REFERENCES `tbl_program_kerja` (`id_proker`),
  CONSTRAINT `tbl_kegiatan_FK_1` FOREIGN KEY (`ketupel`) REFERENCES `tbl_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kegiatan`
--

LOCK TABLES `tbl_kegiatan` WRITE;
/*!40000 ALTER TABLE `tbl_kegiatan` DISABLE KEYS */;
INSERT INTO `tbl_kegiatan` VALUES (4,2,1,'Wall Climbing','2021-01-18','2021-01-19','Surabaya','2021-01-21 08:39:30'),(5,2,78,'Dayung',NULL,NULL,NULL,'2021-01-21 15:41:19');
/*!40000 ALTER TABLE `tbl_kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kinerja`
--

DROP TABLE IF EXISTS `tbl_kinerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kinerja` (
  `id_kinerja` int NOT NULL AUTO_INCREMENT,
  `fk_kegiatan` int DEFAULT NULL,
  `point_1` int DEFAULT NULL,
  `point_2` int DEFAULT NULL,
  `point_3` int DEFAULT NULL,
  `bobot` int DEFAULT NULL,
  PRIMARY KEY (`id_kinerja`),
  KEY `tbl_kinerja_FK` (`fk_kegiatan`),
  CONSTRAINT `tbl_kinerja_FK` FOREIGN KEY (`fk_kegiatan`) REFERENCES `tbl_kegiatan` (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kinerja`
--

LOCK TABLES `tbl_kinerja` WRITE;
/*!40000 ALTER TABLE `tbl_kinerja` DISABLE KEYS */;
INSERT INTO `tbl_kinerja` VALUES (1,4,1,0,0,1);
/*!40000 ALTER TABLE `tbl_kinerja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pendanaan`
--

DROP TABLE IF EXISTS `tbl_pendanaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pendanaan` (
  `id_pendanaan` int NOT NULL AUTO_INCREMENT,
  `fk_kegiatan` int DEFAULT NULL,
  `pemasukan` int DEFAULT NULL,
  `pengeluaran` int DEFAULT NULL,
  PRIMARY KEY (`id_pendanaan`),
  KEY `tbl_pendanaan_FK` (`fk_kegiatan`),
  CONSTRAINT `tbl_pendanaan_FK` FOREIGN KEY (`fk_kegiatan`) REFERENCES `tbl_kegiatan` (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pendanaan`
--

LOCK TABLES `tbl_pendanaan` WRITE;
/*!40000 ALTER TABLE `tbl_pendanaan` DISABLE KEYS */;
INSERT INTO `tbl_pendanaan` VALUES (2,4,1500000,2000000);
/*!40000 ALTER TABLE `tbl_pendanaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_prestasi`
--

DROP TABLE IF EXISTS `tbl_prestasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_prestasi` (
  `id_prestasi` int NOT NULL AUTO_INCREMENT,
  `fk_user` int DEFAULT NULL,
  `prestasi` varchar(200) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_prestasi`),
  KEY `tbl_prestasi_FK` (`fk_user`),
  CONSTRAINT `tbl_prestasi_FK` FOREIGN KEY (`fk_user`) REFERENCES `tbl_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_prestasi`
--

LOCK TABLES `tbl_prestasi` WRITE;
/*!40000 ALTER TABLE `tbl_prestasi` DISABLE KEYS */;
INSERT INTO `tbl_prestasi` VALUES (1,1,'Juara I Lomba Dayung','2021','2021-01-19 16:47:12');
/*!40000 ALTER TABLE `tbl_prestasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_program_kerja`
--

DROP TABLE IF EXISTS `tbl_program_kerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_program_kerja` (
  `id_proker` int NOT NULL AUTO_INCREMENT,
  `nama_proker` varchar(100) DEFAULT NULL,
  `tanggal_mulai_proker` date DEFAULT NULL,
  `tanggal_selesai_proker` date DEFAULT NULL,
  `dana` int DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_proker`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_program_kerja`
--

LOCK TABLES `tbl_program_kerja` WRITE;
/*!40000 ALTER TABLE `tbl_program_kerja` DISABLE KEYS */;
INSERT INTO `tbl_program_kerja` VALUES (1,'AA','2021-01-01','2021-01-28',1500000,'Surabaya'),(2,'BB','2021-01-20','2021-01-22',15000000,'Surabaya\r\nJawa Timur, Indonesia');
/*!40000 ALTER TABLE `tbl_program_kerja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_role`
--

DROP TABLE IF EXISTS `tbl_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(20) DEFAULT NULL,
  `akses_role` text,
  `added_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `status_role` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '1',
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_role`
--

LOCK TABLES `tbl_role` WRITE;
/*!40000 ALTER TABLE `tbl_role` DISABLE KEYS */;
INSERT INTO `tbl_role` VALUES (1,'Admin','1,2,3,4,5,6,7,8,9,10,11,12',NULL,'2021-01-19 13:49:32','1'),(7,'KBPPSDM','1,2,3,4,6,9,10,11',1,'2021-01-19 21:35:26','1'),(8,'Ekspeditor','1,3,5,7,9',1,'2021-01-19 21:35:41','1'),(9,'Ketua Umum','1,2,3,9',1,'2021-01-19 21:35:56','1'),(10,'Bendahara','1,3,6,12',1,'2021-01-19 21:36:15','1');
/*!40000 ALTER TABLE `tbl_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `fk_id_role` int NOT NULL,
  `nama_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `nomor_telepon` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text,
  `status_user` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '1',
  `added_by` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `status_login` char(1) DEFAULT NULL,
  `ip_login` varchar(20) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,1,'Ajeng','Surabaya','08177777','ajeng','$2y$10$3bMNUwIdy4hze0mtbn9s9.2d2v3.aVZE/i6mPPOuMtDD6MxKjBpb2','1',NULL,'2021-01-19 13:44:40','0','127.0.0.1','2021-01-21 20:45:21'),(77,1,'admin','surabaya','0812212121','admin','$2y$10$0wPuIUsiKMFkJiAlmaUUQO.7idbOX8p1o20OPO/CgibX2VejuWMH.','1',1,'2021-01-19 15:41:57',NULL,NULL,NULL),(78,7,'Oki','Manukan','087777','oki','$2y$10$7opf/YwB/wuiNv7NcAGGG.A06yX7GUJo8hH0G1l12Z5Cxy3qfJpq2','1',1,'2021-01-21 09:24:57','0','127.0.0.1','2021-01-21 15:53:43'),(79,10,'Ana','Surabaya','082222','ana','$2y$10$rcHBLZs2TcPAP9z/JrWf.ewwiX1oSq8bp5zvuI0d0VAc20MNGmtby','1',1,'2021-01-21 09:25:26','0','127.0.0.1','2021-01-21 19:40:29'),(80,9,'Rachmad','Surabaya','08555','rachmad','$2y$10$WkODC1FFsPo1jQXWv7QrOO8eKdLfPPOzbM8f2BFU1FXQiJdlfOoWG','1',1,'2021-01-21 09:26:03','0','127.0.0.1','2021-01-21 20:50:37'),(81,8,'Rohman','Surabaya','08777','rohman','$2y$10$J5p0j.Xkc/ug0wHbWisPNupwp2T8/ZpPdbHo56Usfs8fpB3HW5bq.','1',1,'2021-01-21 09:26:50','0','127.0.0.1','2021-01-21 15:45:01');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_mapala_kawaru'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-21 20:58:17
