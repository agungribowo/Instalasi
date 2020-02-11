-- MySQL dump 10.13  Distrib 8.0.19, for Linux (x86_64)
--
-- Host: localhost    Database: db_instalasi
-- ------------------------------------------------------
-- Server version	8.0.19-0ubuntu0.19.10.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_cs_store`
--

DROP TABLE IF EXISTS `tbl_cs_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_cs_store` (
  `id_cs_store` int NOT NULL AUTO_INCREMENT,
  `kode_cs_store` varchar(20) NOT NULL,
  `nama_cs_store` varchar(25) NOT NULL,
  `no_hp` int NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_cs_store`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cs_store`
--

LOCK TABLES `tbl_cs_store` WRITE;
/*!40000 ALTER TABLE `tbl_cs_store` DISABLE KEYS */;
INSERT INTO `tbl_cs_store` VALUES (2,'CS0002','Sahoy',2147483647,'Parung Panjang','sahoyyy','e10adc3949ba59abbe56e057f20f883e','Screenshot_from_2019-08-12_22-41-43.png'),(3,'CS0003','Nur Iman',2147483647,'Pranata Indonesia','imankubbil','d1c93de6ffdedf9824494dc41d67e854','Screenshot_from_2019-08-18_19-17-22.png');
/*!40000 ALTER TABLE `tbl_cs_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_customer` (
  `id_customer` int NOT NULL AUTO_INCREMENT,
  `kode_customer` varchar(20) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `no_hp` tinyint NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_customer`
--

LOCK TABLES `tbl_customer` WRITE;
/*!40000 ALTER TABLE `tbl_customer` DISABLE KEYS */;
INSERT INTO `tbl_customer` VALUES (4,'C0001','Nama',127,'Pranata Indonesia'),(5,'C0005','asdasdas',127,'asfkhasklfhashf'),(6,'C0006','asdasdas',127,'asfkhasklfhashf'),(7,'C0007','kjkjgjkgkj',127,'kjasgfjkgaskj'),(8,'C0008','Testing',127,'Testing'),(9,'C0009','Testing 1',127,'asfkgjkafs');
/*!40000 ALTER TABLE `tbl_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_installer`
--

DROP TABLE IF EXISTS `tbl_installer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_installer` (
  `id_installer` int NOT NULL AUTO_INCREMENT,
  `kode_installer` varchar(20) NOT NULL,
  `nama_installer` varchar(20) NOT NULL,
  `no_hp` tinyint NOT NULL,
  `alamat` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_installer`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_installer`
--

LOCK TABLES `tbl_installer` WRITE;
/*!40000 ALTER TABLE `tbl_installer` DISABLE KEYS */;
INSERT INTO `tbl_installer` VALUES (2,'I0002','Suaeb',127,'Kafsjagsfhj','suaeb','7e7acd159ff700df1c53501dc41a869a','laptop_room_on_the_desk_keyboard_mouse_apple_window_interior_73963_1920x1080.jpg'),(3,'I0003','Saiful',127,'sdgjlbakjgshkjh','saiful','4eeccab0e8c08e16a1d08296265e38fa','Screenshot_from_2019-08-12_22-41-42_-_1.png');
/*!40000 ALTER TABLE `tbl_installer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_jadwal_instalasi`
--

DROP TABLE IF EXISTS `tbl_jadwal_instalasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_jadwal_instalasi` (
  `id_jadwal_instalasi` int NOT NULL AUTO_INCREMENT,
  `kode_instalasi` varchar(25) NOT NULL,
  `kode_permintaan` varchar(25) NOT NULL,
  `kode_customer` varchar(25) NOT NULL,
  `kode_produk` varchar(25) NOT NULL,
  `kode_installer` varchar(25) NOT NULL,
  `tanggal_instalasi` varchar(25) NOT NULL,
  `hasil_perbaikan` varchar(35) NOT NULL,
  `hasil_kerja` varchar(35) NOT NULL,
  `komentar` text NOT NULL,
  `biaya_service` int NOT NULL,
  `biaya_transport` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_jadwal_instalasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_jadwal_instalasi`
--

LOCK TABLES `tbl_jadwal_instalasi` WRITE;
/*!40000 ALTER TABLE `tbl_jadwal_instalasi` DISABLE KEYS */;
INSERT INTO `tbl_jadwal_instalasi` VALUES (1,'JI0001','PM0001','C0005','P0001','I0002','12/10/2019 13:21','a','b','c',736742,758575,1);
/*!40000 ALTER TABLE `tbl_jadwal_instalasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_permintaan`
--

DROP TABLE IF EXISTS `tbl_permintaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_permintaan` (
  `id_permintaan` int NOT NULL AUTO_INCREMENT,
  `kode_permintaan` varchar(25) NOT NULL,
  `kode_customer` varchar(25) NOT NULL,
  `kode_produk` varchar(25) NOT NULL,
  `tanggal_permintaan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_permintaan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_permintaan`
--

LOCK TABLES `tbl_permintaan` WRITE;
/*!40000 ALTER TABLE `tbl_permintaan` DISABLE KEYS */;
INSERT INTO `tbl_permintaan` VALUES (1,'PM0001','C0006','P0001','11-10-2019'),(2,'PM0002','C0007','P0002','11-10-2019'),(3,'PM0003','C0008','P0003','11-10-2019'),(4,'PM0004','C0009','P0004','11-10-2019');
/*!40000 ALTER TABLE `tbl_permintaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produk`
--

DROP TABLE IF EXISTS `tbl_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_produk` (
  `id_produk` int NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(25) NOT NULL,
  `nama_produk` varchar(35) NOT NULL,
  `jenis_produk` varchar(35) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produk`
--

LOCK TABLES `tbl_produk` WRITE;
/*!40000 ALTER TABLE `tbl_produk` DISABLE KEYS */;
INSERT INTO `tbl_produk` VALUES (1,'P0001','asdjgkjasdgjkg','kljasfjkgasjk'),(2,'P0002','kasfkgasgkjf','kjgasfjgkjasfg'),(3,'P0003','Testing','Testing'),(4,'P0004','Testing 1','asfhjkhj');
/*!40000 ALTER TABLE `tbl_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_instalasi'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-11 19:44:49
