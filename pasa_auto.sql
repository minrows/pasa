-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: pasa
-- ------------------------------------------------------
-- Server version	5.7.17

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
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (2,'Company Profile','<p>We started our journey in this business from the year 1998; we are one of the Nepal&#39;s best Recruiting Agencies. The number of years of experience and knowledge gives us the confident to say that, &quot;we outsource the best human resources&quot;. We have been providing expert and unparalleled value added recruitment services to our clients across the world who are looking for professional and smart candidates to excel in their business. We are happy to have satisfied clients with us from a long time and we feel proud and honored to give the best to our precious clients.</p>\r\n\r\n<hr />\r\n<pre>\r\n<div class=\"row hidden-xs hidden-sm\">\r\n<div class=\"col-lg-5 col-md-5\">\r\n<strong>Name :</strong> Pasa International Pvt. Ltd.\r\n<strong>Address :</strong> Kupondole, Lalitpur, Nepal\r\n<strong>Established :</strong> 1998 September 24\r\n<strong>Govt, License No. :</strong> 116/055/056\r\n<strong>Registered No. :</strong> 9222/055/056\r\n<strong>Tel :</strong> +977-1-5554499, 55539331, 5553380, 5553342\r\n<strong>Fax :</strong> +977-1-5538440\r\n<strong>Email :</strong> <a href=\"mailto:pimt@pasainternational.com.np\" target=\"_blank\">pimt@pasainternational.com.np</a>\r\n      : <a href=\"mailto:pimt@pasa.wlink.com.np\" target=\"_blank\">pimt@pasa.wlink.com.np</a>\r\n<strong>Website :</strong> <a href=\"http://www.pasainternational.com.np/\" target=\"_blank\">http://www.pasainternational.com.np</a>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-6\">\r\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.947025855255!2d85.31182412935517!3d27.687213511414598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbfb56d2f462c0c9!2sPASA+INTERNATIONAL+PVT.+LTD!5e0!3m2!1sen!2snp!4v1491990754177\" width=\"600\" height=\"250\" frameborder=\"0\" style=\"border:0; margin-top:-50px\" allowfullscreen></iframe>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row hidden-lg hidden-md\">\r\n<div class=\"col-sm-12 col-xs-12\">\r\n<strong>Name :</strong> Pasa International Pvt. Ltd.\r\n<strong>Address :</strong> Kupondole, Lalitpur, Nepal\r\n<strong>Established :</strong> 1998 September 24\r\n<strong>Govt, License No. :</strong> 116/055/056\r\n<strong>Registered No. :</strong> 9222/055/056\r\n<strong>Tel :</strong> +977-1-5554499, 55539331, 5553380, 5553342\r\n<strong>Fax :</strong> +977-1-5538440\r\n<strong>Email :</strong> <a href=\"mailto:pimt@pasainternational.com.np\" target=\"_blank\">pimt@pasainternational.com.np</a>\r\n      : <a href=\"mailto:pimt@pasa.wlink.com.np\" target=\"_blank\">pimt@pasa.wlink.com.np</a>\r\n<strong>Website :</strong> <a href=\"http://www.pasainternational.com.np/\" target=\"_blank\">http://www.pasainternational.com.np</a>\r\n</div>\r\n\r\n<div class=\"col-sm-12 col-xs-12\">\r\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.947025855255!2d85.31182412935517!3d27.687213511414598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbfb56d2f462c0c9!2sPASA+INTERNATIONAL+PVT.+LTD!5e0!3m2!1sen!2snp!4v1491990754177\" width=\"400\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\r\n</div>\r\n</div>\r\n</pre>',NULL,'on','2017-04-10 04:09:00','2017-04-12 04:17:09');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `achievers`
--

DROP TABLE IF EXISTS `achievers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `achievers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achievers`
--

LOCK TABLES `achievers` WRITE;
/*!40000 ALTER TABLE `achievers` DISABLE KEYS */;
INSERT INTO `achievers` VALUES (1,'a','achiever/Q8jcZTNULzZYPsLZA2n0wuuSAsTRP7emR9SDnXGc.jpeg','on','2017-04-11 01:12:08','2017-04-11 01:12:08');
/*!40000 ALTER TABLE `achievers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Rijesh','craaabby@gmail.com','$2y$10$cfxXkl0RiBAlNbNJVMn2fusvr1PY8QkRFx2UQgO2jH8KDUBXwSxAq','UUjkl7cG4oXrr0VMo5BVvX2O0fuufXHfbJnKsoQrnPceQoOhtwaAKWLvgtiZ','2017-04-04 18:15:00','2017-04-04 18:15:00');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (3,'a','aa','on','2017-04-10 23:07:20','2017-04-10 23:07:20');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `corporate_fields`
--

DROP TABLE IF EXISTS `corporate_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `corporate_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `corporate_fields`
--

LOCK TABLES `corporate_fields` WRITE;
/*!40000 ALTER TABLE `corporate_fields` DISABLE KEYS */;
INSERT INTO `corporate_fields` VALUES (1,'a','<p>a</p>','on','2017-04-11 01:32:59','2017-04-11 01:32:59');
INSERT INTO `corporate_fields` VALUES (3,'b','<p>c</p>','on','2017-04-11 01:33:33','2017-04-11 01:33:49');
INSERT INTO `corporate_fields` VALUES (4,'c','<p>c</p>','on','2017-04-11 01:33:57','2017-04-11 01:33:57');
INSERT INTO `corporate_fields` VALUES (5,'Technical institutes','<p>a</p>','on','2017-04-11 03:02:29','2017-04-11 03:02:29');
/*!40000 ALTER TABLE `corporate_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `corporate_members`
--

DROP TABLE IF EXISTS `corporate_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `corporate_members` (
  `corporate_field_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`corporate_field_id`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `corporate_members`
--

LOCK TABLES `corporate_members` WRITE;
/*!40000 ALTER TABLE `corporate_members` DISABLE KEYS */;
/*!40000 ALTER TABLE `corporate_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curr_demand_imgs`
--

DROP TABLE IF EXISTS `curr_demand_imgs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curr_demand_imgs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_thumb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_full` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curr_demand_imgs`
--

LOCK TABLES `curr_demand_imgs` WRITE;
/*!40000 ALTER TABLE `curr_demand_imgs` DISABLE KEYS */;
INSERT INTO `curr_demand_imgs` VALUES (9,'current_demand/TetBAcyxJu1zfugzTcOP0Q6hH0KR44HsJKjaRN3i.jpeg','current_demand/TetBAcyxJu1zfugzTcOP0Q6hH0KR44HsJKjaRN3i.jpeg','on','2017-04-10 03:37:44','2017-04-10 03:37:44');
/*!40000 ALTER TABLE `curr_demand_imgs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curr_demands`
--

DROP TABLE IF EXISTS `curr_demands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curr_demands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curr_demands`
--

LOCK TABLES `curr_demands` WRITE;
/*!40000 ALTER TABLE `curr_demands` DISABLE KEYS */;
INSERT INTO `curr_demands` VALUES (3,'b','a',1,'a','on','2017-04-10 01:01:50','2017-04-10 01:24:51');
/*!40000 ALTER TABLE `curr_demands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedbacks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phn_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedbacks`
--

LOCK TABLES `feedbacks` WRITE;
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedbacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_thumb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_full` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'a','gallery/rxFCoo5KuLoL3PwBFFXmHUkD9hSJIgNpu9SUGIiV.jpeg','gallery/rxFCoo5KuLoL3PwBFFXmHUkD9hSJIgNpu9SUGIiV.jpeg','on','2017-04-10 01:43:33','2017-04-10 01:43:33');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (41,'2017_03_31_090941_create_pasa_carousel_table',1);
INSERT INTO `migrations` VALUES (42,'2017_04_03_054626_create_curr_demand_img_table',1);
INSERT INTO `migrations` VALUES (43,'2017_04_03_055055_create_curr_demand_table',1);
INSERT INTO `migrations` VALUES (44,'2017_04_03_055643_create_about_table',1);
INSERT INTO `migrations` VALUES (45,'2017_04_03_055847_create_overseas_client_table',1);
INSERT INTO `migrations` VALUES (46,'2017_04_03_060205_create_achiever_table',1);
INSERT INTO `migrations` VALUES (47,'2017_04_03_060546_create_corporate_field_table',1);
INSERT INTO `migrations` VALUES (48,'2017_04_03_060649_create_corporate_member_table',1);
INSERT INTO `migrations` VALUES (49,'2017_04_03_063650_create_recruitment_procedure_table',1);
INSERT INTO `migrations` VALUES (50,'2017_04_03_064210_create_contact_table',1);
INSERT INTO `migrations` VALUES (51,'2017_04_03_064745_create_gallery_table',1);
INSERT INTO `migrations` VALUES (52,'2017_04_03_065614_create_feedback_table',2);
INSERT INTO `migrations` VALUES (53,'2017_04_03_070400_create_online_form_table',3);
INSERT INTO `migrations` VALUES (54,'2017_04_04_060255_create_admin_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `online_forms`
--

DROP TABLE IF EXISTS `online_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `online_forms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` enum('single','married') COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_no` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doi` date NOT NULL,
  `plae_of_issue` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doe` date NOT NULL,
  `height_feet` int(11) NOT NULL,
  `height_inch` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `parent_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prior_exp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applied_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `online_forms`
--

LOCK TABLES `online_forms` WRITE;
/*!40000 ALTER TABLE `online_forms` DISABLE KEYS */;
/*!40000 ALTER TABLE `online_forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `overseas_clients`
--

DROP TABLE IF EXISTS `overseas_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `overseas_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `overseas_clients`
--

LOCK TABLES `overseas_clients` WRITE;
/*!40000 ALTER TABLE `overseas_clients` DISABLE KEYS */;
INSERT INTO `overseas_clients` VALUES (3,'a','a','overseas_client/Y234NO15iJPoB38KvHla0fFdt0DXYt0f3ErFatmd.jpeg','on','2017-04-11 00:48:36','2017-04-11 00:53:30');
INSERT INTO `overseas_clients` VALUES (5,'b','b',NULL,'on','2017-04-11 00:54:00','2017-04-11 00:54:00');
INSERT INTO `overseas_clients` VALUES (6,'c','a',NULL,'on','2017-04-11 00:54:11','2017-04-11 00:54:11');
/*!40000 ALTER TABLE `overseas_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasa_carousels`
--

DROP TABLE IF EXISTS `pasa_carousels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasa_carousels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasa_carousels`
--

LOCK TABLES `pasa_carousels` WRITE;
/*!40000 ALTER TABLE `pasa_carousels` DISABLE KEYS */;
INSERT INTO `pasa_carousels` VALUES (10,'Pasa Team','carousel/kwfhoOMibSrbHJoqfYwbxC1Gu74AanJxVrhCLWst.jpeg','on','2017-04-12 02:09:41','2017-04-12 02:33:59');
INSERT INTO `pasa_carousels` VALUES (11,'Construction Work','carousel/l3oLY7eMGJYIpc0oMA45mOvOs0UmumrwOPFihvUY.jpeg','on','2017-04-12 02:10:21','2017-04-12 02:34:07');
INSERT INTO `pasa_carousels` VALUES (12,'3 idiots','carousel/NFFlEIAoSgopk6i6MYAvdy08VzrwMnWOopQgFYIJ.jpeg','on','2017-04-12 03:32:07','2017-04-12 03:32:07');
INSERT INTO `pasa_carousels` VALUES (14,'fasdfasdf','carousel/3MbXMLoyj3jpVhYx4aIaGEqx13neS8cCOzKqTH4v.jpeg','on','2017-04-12 03:35:10','2017-04-12 03:35:10');
INSERT INTO `pasa_carousels` VALUES (15,'fjasdfjdsx','carousel/0eRCLyOoEmTXXgjuVke3V3xalSNRSYkJSPED5oF5.jpeg','on','2017-04-12 23:48:48','2017-04-12 23:48:48');
/*!40000 ALTER TABLE `pasa_carousels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruitment_procedures`
--

DROP TABLE IF EXISTS `recruitment_procedures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruitment_procedures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruitment_procedures`
--

LOCK TABLES `recruitment_procedures` WRITE;
/*!40000 ALTER TABLE `recruitment_procedures` DISABLE KEYS */;
/*!40000 ALTER TABLE `recruitment_procedures` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-13 12:52:06
