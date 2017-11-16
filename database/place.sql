-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: company
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `place`
--

DROP TABLE IF EXISTS `place`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `place` (
  `pid` varchar(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `address` varchar(30) NOT NULL,
  `subdistrict` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `zip` int(5) NOT NULL,
  `picture` int(2) NOT NULL,
  `price` double NOT NULL,
  `size` double NOT NULL,
  `avgrating` double NOT NULL DEFAULT '0',
  `noreviews` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `place`
--

LOCK TABLES `place` WRITE;
/*!40000 ALTER TABLE `place` DISABLE KEYS */;
INSERT INTO `place` VALUES ('0000000001','','บ้านหนูเอง','','110','ลุมพินี','ปทุมวัน','กรุงเทพมหานคร',10330,2,200,325,0,0),('0000000002','','บ้านผมคับ','','120','ประเวศ','ประเวศ','กรุงเทพมหานคร',10250,3,300,500,0,0),('0000000003','','ห้องใครหรอ','','130','บางจาก','ภาษีเจริญ','กรุงเทพมหานคร',10160,2,350,450,0,0),('0000000004','','สวยดีเนอะ','','140','ลาดกระบัง','ลาดกระบัง','กรุงเทพมหานคร',10520,2,400,325,0,0),('0000000005','','นี่ที่ไหน','','150','ถนนพญาไท','ราชเทวี','กรุงเทพมหานคร',10400,5,1200,740,0,0),('0000000006','','อยู่ด้วยกันมั้ย','','160','สะพานสูง','สะพานสูง','กรุงเทพมหานคร',10240,3,560,200,0,0),('0000000007','','มาลองดู','','170','ยานนาวา','สาทร','กรุงเทพมหานคร',10120,2,490,450,0,0),('0000000008','','รูหนู','','180','บางกะปิ','ห้วยขวาง','กรุงเทพมหานคร',10310,3,50,250,0,0),('0000000009','','ปราสาทเจ้าหญิง','','190','ลาดพร้าว','ลาดพร้าว','กรุงเทพมหานคร',10230,2,120,160,0,0),('0000000010','','หรูมีระดับ','','010','สีลม','บางรัก','กรุงเทพมหานคร',10500,4,900,480,0,0),('0000000011','','หาให้เจอ','','011','บางรัก','บางรัก','กรุงเทพมหานคร',10500,3,300,500,0,0),('0000000012','','ยาจก','','012','สี่พระยา','บางรัก','กรุงเทพมหานคร',10500,4,350,250,0,0),('0000000013','','ที่นี่อยู่แล้วรวย','','013','ลุมพินี','ปทุมวัน','กรุงเทพมหานคร',10330,5,400,200,0,0),('0000000014','','บ้านหมา','','014','มักกะสัน','ราชเทวี','กรุงเทพมหานคร',10400,2,250,325,0,0);
/*!40000 ALTER TABLE `place` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-16 15:00:47
