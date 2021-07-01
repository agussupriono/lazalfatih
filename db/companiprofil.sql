-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Linux (i686)
--
-- Host: localhost    Database: companiprofil
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `slug_admin` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin','','d033e22ae348aeb5660fc2140aec35850c4da997','contact@compose.com');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `slug_blog` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `bs_class` varchar(225) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (2,1,2,'test111','10-test111','<p>testing</p>','29006-art_alphacoders_com2.jpg','','2017-02-24 07:21:31','publish','testing'),(3,1,2,'cara membuat anak','cara-membuat-anak','<p>awdawd</p>','8645-c-programming-1366x768-computer-wallpaper.jpg','','2017-02-16 08:26:28','publish','Cara membuat anak'),(5,1,2,'sfsefsef1','5-sfsefsef1','<p>dsdfsdf</p>','1385096_445510758888115_1423375145_n.jpg','','2017-02-16 08:45:03','draft','ssdvsfs'),(6,1,2,'Apakah ahok akan menang?','apakah-ahok-akan-menang','<p>Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor</p>','3D-Scenery-HD-Macbook-Wallpaper4.jpg','','2017-02-17 09:20:08','publish','ahok kalah'),(7,1,3,'testing','testing','<p>test</p>','114845.jpg','','2017-02-23 05:47:56','publish','test'),(8,1,3,'adawda','adawda','<p>awdawd</p>','114846.jpg','','2017-02-23 06:31:47','publish','awdawd'),(9,1,2,'dawdawd','dawdawd','<p>awdawd</p>','29006-art_alphacoders_com8.jpg','','2017-02-24 07:17:20','publish','awdaw'),(10,1,2,'awdawd','awdawd','<p>awdawd</p>','29006-art_alphacoders_com9.jpg','','2017-02-24 07:21:10','publish','awdawd'),(11,1,4,'bisnis1','11-bisnis1','<p>Testing bisnis PT. Nusa Kirana, RE ke satu</p>','','fa fa-university','2018-11-10 08:45:29','publish','Nusa Kirana Bisnis'),(12,1,4,'bisnis2','bisnis2','<p>Testing bisnis PT. Nusa Kirana, RE ke dua</p>','','fa fa-diamond','2018-11-10 08:46:10','publish','Nusa Kirana Bisnis'),(13,1,4,'bisnis3','bisnis3','<p>Bisnis PT. Nusa Kirana, RE ke tiga</p>','','fa fa-road','2018-11-10 08:47:02','publish','Nusa Kirana Bisnis');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `slug_category` varchar(225) NOT NULL,
  `order_category` int(11) NOT NULL,
  `category_description` text NOT NULL,
  `date_category` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,1,'News','2-news',1,'News Update','2017-02-15 14:31:39'),(3,1,'Politik','politik',2,'Seputar Politik','2017-02-23 05:47:26'),(4,1,'Our Business','our-business',3,'Content for Our Business Menus','2018-11-10 07:24:44');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `client_name` varchar(225) NOT NULL,
  `slug_client` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `website` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (2,1,'Hutan','hutan','29006-art_alphacoders_com6.jpg','hutan.com','2017-02-16 09:59:09','publish'),(3,1,'C Programming','c-programming','8645-c-programming-1366x768-computer-wallpaper1.jpg','http://indrarukmana.com','2017-02-23 10:15:17','publish');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `website` varchar(225) NOT NULL,
  `message` text NOT NULL,
  `date_comment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,0,'Indra','indrkmna@gmail.com','http://indrarukmana.com','testing','2017-02-20 03:54:40'),(2,0,'awda','wdqdq@gmail.com','http://indrarukmana.com','qwdq','2017-02-20 03:55:42'),(3,2,'rats','rats123@gmail.com','http://indrarukmana.com','rats','2017-02-20 03:56:37'),(4,2,'xaxsa','scascasc@gmail.com','http://indrarukmana.com','ascasc','2017-02-20 04:07:27'),(5,2,'adwd','awda@gmail.com','http://indrarukmana.com','dawd','2017-02-20 04:20:42'),(6,3,'awd','apoyaja@gmail.com','http://indrarukmana.com','qwdqwd','2017-02-24 07:22:53');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `nameweb` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `keywords` text NOT NULL,
  `google_maps` text NOT NULL,
  `logo` varchar(225) NOT NULL,
  `icon` varchar(225) NOT NULL,
  `about` text NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `phone_number` varchar(225) NOT NULL,
  `metatext` text NOT NULL,
  `fax` text NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `instagram` varchar(225) NOT NULL,
  `google_plus` varchar(225) NOT NULL,
  `pinterest` varchar(225) NOT NULL,
  `theme` varchar(225) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` VALUES (1,'PT. Nusa Kirana, RE','admin@nusakirana.com','Real Estate, Perumahan, Developer, Real Estate Jakarta Utara, Perumahan Jakarta Utara, Real Estate Jakarta, Perumahan Jakarta, ','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15852.780606179473!2d106.81194969999999!3d-6.6226642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c118e7fe877e90a!2sLippo+Plaza+Ekalokasari+Bogor!5e0!3m2!1sid!2sid!4v1482767277891','logo2.png','i3qUAvP.jpg','<p>lorem ipsum idoor lorem ipsum idoor lorem ipsum idoorlorem ipsum idoorlorem ipsum idoorlorem ipsum idoorlorem ipsum idoorlorem ipsum idoor lorem ipsum idoor lorem ipsum idoor lorem ipsum idoorlorem ipsum idoorlorem ipsum idoorlorem ipsum idoorlorem ipsum idoorlorem ipsum idoor</p>\r\n<table style=\"height: 75px;\" width=\"513\">\r\n<tbody>\r\n<tr>\r\n<td>Test</td>\r\n<td>1</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<td>aaa</td>\r\n<td>bbb</td>\r\n<td>nnn</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>','Perkantoran selatan','Bandung','18923','324234','Pengembang Perumahan & Real Estate Di Jakarta','23424','https://www.facebook.com/indrkmna/','','https://www.instagram.com/indra.97/','','','realbuild');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `messages` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'indra','indrkmna@gmail.com','testign','testing','2017-02-24 02:56:55'),(3,'testing','testing@gmail.com','testing','testing','2017-02-24 03:00:30');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `downloads`
--

DROP TABLE IF EXISTS `downloads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `downloads` (
  `download_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL,
  `slug_download` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file_description` text NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`download_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `downloads`
--

LOCK TABLES `downloads` WRITE;
/*!40000 ALTER TABLE `downloads` DISABLE KEYS */;
INSERT INTO `downloads` VALUES (3,1,'Template','3-template','153-P101.pdf','2017-02-16 13:19:05','asas','publish'),(4,1,'PDF 1','4-pdf-1','153-P09.pdf','2017-02-17 08:03:08','test','draft'),(5,1,'Matematika (Matrix)','matematika-matrix','153-P091.pdf','2017-03-06 12:29:22','Silahkan download materi ini untuk di pelajari','publish');
/*!40000 ALTER TABLE `downloads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gallery_name` varchar(225) NOT NULL,
  `slug_gallery` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `gallery_description` text NOT NULL,
  `position` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (8,1,'Hi Welcome to Nirasoft','hi-welcome-to-nirasoft','slide-1.jpg','Welcome to Nirasoft','slider','2017-02-17 13:53:06','publish'),(9,1,'Cantik ya hehe','cantik-ya-hehe','slide-2.jpg','cantik banget sih neng wkwk','slider','2017-02-17 13:55:53','publish'),(10,1,'Ngops gan','ngops-gan','slide-4.jpg','Ngops dulu','slider','2017-02-17 13:56:35','publish'),(12,1,'We Are Anon!!!','we-are-anon','1385096_445510758888115_1423375145_n2.jpg','Testing','profil','2017-02-17 13:58:14','publish'),(13,1,'Hutan','14-hutan','29006-art_alphacoders_com7.jpg','hutan','harga','2017-03-07 08:51:02','publish'),(14,1,'Adaw','adaw','361783.jpg','awdawd','footer','2017-02-24 06:36:05','publish');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) DEFAULT NULL,
  `menu_url` varchar(100) DEFAULT NULL,
  `menu_image` varchar(200) DEFAULT NULL,
  `menu_image_hover` varchar(200) DEFAULT NULL,
  `parent_menu_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `dates` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Home','index.php',NULL,NULL,0,'publish','2018-09-08 16:28:56'),(2,'About Us','#about',NULL,NULL,0,'publish','2018-09-08 16:28:56'),(3,'Subsidiaries','#subsidiaries',NULL,NULL,0,'publish',NULL),(4,'Our Business','#ourbusiness',NULL,NULL,0,'publish',NULL),(5,'Projects','#property',NULL,NULL,0,'publish',NULL),(6,'CSR','#csr',NULL,NULL,0,'publish','2018-09-08 16:28:56'),(7,'News & Evens','#news',NULL,NULL,0,'publish','2018-09-08 16:28:56'),(8,'Contact Us','#contact',NULL,NULL,0,'publish','2018-09-08 16:28:56');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `price`
--

DROP TABLE IF EXISTS `price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `price` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `price_name` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `headline` text NOT NULL,
  `description` text NOT NULL,
  `with_service` varchar(100) NOT NULL,
  `no_with_service` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `price`
--

LOCK TABLES `price` WRITE;
/*!40000 ALTER TABLE `price` DISABLE KEYS */;
INSERT INTO `price` VALUES (4,1,'Industri Setup Awal','90.000/3 Bulan/ Unit','','','Free','90.000/3 Bulan/ Unit','publish','2017-03-07 00:50:38'),(5,1,'Industri Kecil','500.000/ Unit','','','Free','270.000/3 Bulan/ Unit','publish','2017-03-07 00:33:55'),(6,1,'Industri Menengah','750.000/ Unit','','','270.000/3 Bulan/ Unit','Call','publish','2017-03-07 00:34:29'),(7,1,'Industri Besar','Call','','','Call','Call','publish','2017-03-07 00:34:49'),(8,1,'Pemerintah','Call','','','Call','Call','publish','2017-03-07 00:35:01'),(9,0,'','','awdawd','','','','','2017-03-07 08:41:35');
/*!40000 ALTER TABLE `price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `slug_product` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `product_description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,1,'Anonymous1','5-anonymous1','29006-art_alphacoders_com4.jpg','test','2017-02-24 07:00:28','publish'),(4,1,'tefesefs','tefesefs','361782.jpg','sefsef','2017-02-16 09:34:49','publish'),(5,1,'Product 1','product-1','3D-Scenery-HD-Macbook-Wallpaper5.jpg','Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 ','2017-02-17 09:27:40','publish');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type_name` varchar(225) NOT NULL,
  `slug_type` varchar(225) NOT NULL,
  `order_type` int(11) NOT NULL,
  `type_description` text NOT NULL,
  `date_type` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (4,1,'testing','',1,'testing type','2017-02-16 13:56:38'),(5,1,'Odol','odol',2,'odol','2017-02-16 13:57:21');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'companiprofil'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-12 10:32:58
