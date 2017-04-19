-- MySQL dump 10.13  Distrib 5.5.39, for Win32 (x86)
--
-- Host: localhost    Database: pasa
-- ------------------------------------------------------
-- Server version	5.5.39

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (2,'Company Profile','<p>We started our journey in this business from the year 1998; we are one of the Nepal&#39;s best Recruiting Agencies. The number of years of experience and knowledge gives us the confident to say that, &quot;we outsource the best human resources&quot;. We have been providing expert and unparalleled value added recruitment services to our clients across the world who are looking for professional and smart candidates to excel in their business. We are happy to have satisfied clients with us from a long time and we feel proud and honored to give the best to our precious clients.</p>\n\n<hr />\n<pre>\n<div class=\"row hidden-xs hidden-sm\">\n<div class=\"col-lg-5 col-md-5\">\n<strong>Name :</strong> Pasa International Pvt. Ltd.\n<strong>Address :</strong> Kupondole, Lalitpur, Nepal\n<strong>Established :</strong> 1998 September 24\n<strong>Govt, License No. :</strong> 116/055/056\n<strong>Registered No. :</strong> 9222/055/056\n<strong>Tel :</strong> +977-1-5554499, 55539331, 5553380, 5553342\n<strong>Fax :</strong> +977-1-5538440\n<strong>Email :</strong> <a href=\"mailto:pimt@pasainternational.com.np\" target=\"_blank\">pimt@pasainternational.com.np</a>\n      : <a href=\"mailto:pimt@pasa.wlink.com.np\" target=\"_blank\">pimt@pasa.wlink.com.np</a>\n<strong>Website :</strong> <a href=\"http://www.pasainternational.com.np/\" target=\"_blank\">http://www.pasainternational.com.np</a>\n</div>\n\n<div class=\"col-lg-6 col-md-6\">\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.947025855255!2d85.31182412935517!3d27.687213511414598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbfb56d2f462c0c9!2sPASA+INTERNATIONAL+PVT.+LTD!5e0!3m2!1sen!2snp!4v1491990754177\" width=\"600\" height=\"250\" frameborder=\"0\" style=\"border:0; margin-top:-50px\" allowfullscreen></iframe>\n</div>\n</div>\n\n<div class=\"row hidden-lg hidden-md\">\n<div class=\"col-sm-12 col-xs-12\">\n<strong>Name :</strong> Pasa International Pvt. Ltd.\n<strong>Address :</strong> Kupondole, Lalitpur, Nepal\n<strong>Established :</strong> 1998 September 24\n<strong>Govt, License No. :</strong> 116/055/056\n<strong>Registered No. :</strong> 9222/055/056\n<strong>Tel :</strong> +977-1-5554499, 55539331, 5553380, 5553342\n<strong>Fax :</strong> +977-1-5538440\n<strong>Email :</strong> <a href=\"mailto:pimt@pasainternational.com.np\" target=\"_blank\">pimt@pasainternational.com.np</a>\n      : <a href=\"mailto:pimt@pasa.wlink.com.np\" target=\"_blank\">pimt@pasa.wlink.com.np</a>\n<strong>Website :</strong> <a href=\"http://www.pasainternational.com.np/\" target=\"_blank\">http://www.pasainternational.com.np</a>\n</div>\n\n<div class=\"col-sm-12 col-xs-12\">\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.947025855255!2d85.31182412935517!3d27.687213511414598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbfb56d2f462c0c9!2sPASA+INTERNATIONAL+PVT.+LTD!5e0!3m2!1sen!2snp!4v1491990754177\" width=\"400\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\n</div>\n</div>\n</pre>',NULL,'on','2017-04-10 04:09:00','2017-04-17 23:37:01');
INSERT INTO `abouts` VALUES (3,'Pasa Culture','<p>During the past decades, we have developed our core foundation with the granular level of engineering approach in our system. Each and every nooks of our customized process is purely driven by the changing customer demands and the newer technological tools. The approach of system re-engineering is ever going process. Where the past activities information has been collected and their microscopic study are the key elements for our business strength.<br />\r\n<br />\r\nOur Client&#39;s and Candidate&#39;s satisfaction is our first preference, as per their needs and requirements. We are quick in response to the concerns and demands of our clients and act wisely on the requirements to fulfill the need which is the ethics of our recruitment process. We place the right candidates to get the right jobs for positive outcome.<br />\r\n<br />\r\nOur aim is directed by the value driven culture of our organization that adds value in our each services that contrast us among other competitors. Because we believe in serving the best to our clients requirements and finding best possible human resources for them from wide range of selections.<br />\r\n<br />\r\nWith the bricks of acknowledged faith in our potential and services, we have laid down the foundation for uncompromising quality in everything we deliver and have built a company where there is a promising bright future for everyone.</p>',NULL,'on','2017-04-13 00:50:39','2017-04-13 00:50:39');
INSERT INTO `abouts` VALUES (4,'Message from Chairman','<p><em>Warm Greetings!</em><br />\r\n<br />\r\nI am glad to introduce our company&nbsp;PASA International Pvt. Ltd.&nbsp;We are one of the successful workforce agency of Nepal. The company has begun its operation more than a decade ago with the mission to reach the excellence of professionalism such as expertise, Integrity and Moral Values in human resources Globally. This working culture of PASA is based on bringing two key elements, resources and opportunities. With the numerous studies and research works, Pasa always comes forward as opportunities to those who really want to work hard in order to secure their future. Similarly, it has served as a reliable source for those organizations who need quality human resources. As a good catalyst, the company has been able to put its best possible effort on making a synergetic result to combine the listed two elements. Those results have been recognized as a business rewards for our success.</p>\r\n\r\n<p>The company always believes in corporate solutions. Therefore to broaden its scope, it has been associated with different organization like Vocational training Institutes, Travel Agencies, Community Development Organizations etc. For the continuous research and development of its business process, we are keen on collection of information and regular feedbacks from our concerned bodies. Thank you for your precious time, we are looking forward to hear from you.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Devendra N. Shrestha</strong><br />\r\nChairman&nbsp;</p>','about/rgzGuXN9DP24jEi5k0N2hYEj3J3X15b6GPrPP8t4.jpeg','on','2017-04-13 00:51:12','2017-04-17 04:37:34');
INSERT INTO `abouts` VALUES (5,'Message from CEO','<p>I am honored to introduce myself as the CEO of&nbsp;PASA International Pvt Ltd.&nbsp;We have walked a long way to reach the success with our efficient, dedicated, hardworking and responsible team with us.</p>\r\n\r\n<p>We always believe in client satisfaction, we don&rsquo;t just supply workforce but we believe in providing the best of the candidates with required filtration process. So that our valuable clients business shall run profitable and successful for a long run.</p>\r\n\r\n<p>Our joint efforts and sense of responsibility has given us an opportunity to be in this business successfully since a long period. We have friendly, professional and healthy working environment which give us zeal and boosts us to excel in providing the best of all.</p>\r\n\r\n<p>Our aim is to be the Nepal&#39;s No. 1 foreign recruitment agency in terms of quality services along with long term relationship with our valued clients.</p>\r\n\r\n<p>Thank you for your valuable time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Binod Purush Neupane</strong><br />\r\nCEO&nbsp;</p>',NULL,'on','2017-04-13 00:51:44','2017-04-13 00:56:55');
INSERT INTO `abouts` VALUES (6,'Why Pasa International?','<p>In the current era of business, due to the increasing competition as well as globalizations, only those organizations can stand and sustain in front of such business race which is backed with the elevating spirit of knowledge and skill. In fact, it is a result by the optimal use of required human expertise in the respective areas of today&#39;s organizations.&nbsp;Pasa International&nbsp;acts as a connecting bridge to tie between the knots of desired human skills and the organizations like those which are seeking for such manpower.<br />\r\n<br />\r\nOur aim is directed by the value driven culture of our organization that adds the unique value in our each service deliverables. That is why we don&#39;t do different things, however our focused approaches comes as different. This is justified by our standard recruitment system where the logical &amp; systematic approaches have been taken on, the identification of clients&#39; requirements and finding the best possible way out from wide range of selections. The countless rigorous activities where we had put our maximum efforts have made this organization successful in terms of both reliability and dependability. Adding to that, we intend to introduce and integrate the newer technological luxury to our organizations&rsquo; trait in order to successfully drive its day-to-day operation making a right step to move forward.<br />\r\n<br />\r\nWith the bricks of acknowledged faith in our potential and services, we have laid down the foundation for uncompromising quality in everything we deliver and have built a corporation where there is a committed dazzling prospects to everyone concerned.</p>',NULL,'on','2017-04-13 00:52:17','2017-04-13 00:52:17');
INSERT INTO `abouts` VALUES (7,'Corporate Members','<p><strong>Pasa International</strong>&nbsp;believes in the approach of corporate solutions. Therefore, each deliverables of Pasa is comprised of total corporate efforts from different wings as partner organizations. The following are the list of corporate team of Pasa. (Testimonials are available upon request)</p>',NULL,'on','2017-04-13 00:53:05','2017-04-13 00:53:05');
INSERT INTO `abouts` VALUES (8,'Overseas Clients','<p>&amp;nbsp;</p>',NULL,'on','2017-04-13 00:53:57','2017-04-13 03:35:51');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achievers`
--

LOCK TABLES `achievers` WRITE;
/*!40000 ALTER TABLE `achievers` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'a','gallery/rxFCoo5KuLoL3PwBFFXmHUkD9hSJIgNpu9SUGIiV.jpeg','gallery/rxFCoo5KuLoL3PwBFFXmHUkD9hSJIgNpu9SUGIiV.jpeg','on','2017-04-10 01:43:33','2017-04-10 01:43:33');
INSERT INTO `galleries` VALUES (2,' ','gallery/Y55fmsVluyLz1bCRjBViS2yXMKZJpso5dGU8ZbiN.jpeg','gallery/Y55fmsVluyLz1bCRjBViS2yXMKZJpso5dGU8ZbiN.jpeg','on','2017-04-18 10:51:57','2017-04-18 10:51:57');
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `overseas_clients`
--

LOCK TABLES `overseas_clients` WRITE;
/*!40000 ALTER TABLE `overseas_clients` DISABLE KEYS */;
INSERT INTO `overseas_clients` VALUES (7,'Ansar Gallery','Baharain','overseas_client/17EkJEfcxZ8viuGrpZVwkhuzekLNHn0eyqsfmjdT.gif','on','2017-04-13 03:22:46','2017-04-13 03:22:46');
INSERT INTO `overseas_clients` VALUES (8,'Power Point Electrical & Mechanical Works L.L.C.','UAE','overseas_client/DagFu8qcLSuGoWGbkXTRyHr5dCoCocGsO4PD2a2V.gif','on','2017-04-13 03:23:42','2017-04-13 03:23:42');
INSERT INTO `overseas_clients` VALUES (9,'Abu Dhabi Coating Enterprises W.L.L.','UAE',NULL,'on','2017-04-13 03:24:14','2017-04-13 03:24:14');
INSERT INTO `overseas_clients` VALUES (10,'Al Mukadam Building Cleaning & Security LLC','UAE',NULL,'on','2017-04-13 03:24:38','2017-04-13 03:24:38');
INSERT INTO `overseas_clients` VALUES (11,'Can Gulf Technologies LLC','UAE',NULL,'on','2017-04-13 03:24:59','2017-04-13 03:24:59');
INSERT INTO `overseas_clients` VALUES (12,'Emirates Leisure Retail','UAE',NULL,'on','2017-04-13 03:25:23','2017-04-13 03:25:23');
INSERT INTO `overseas_clients` VALUES (13,'Gyathi Construction LLC','UAE',NULL,'on','2017-04-13 03:25:38','2017-04-13 03:25:38');
INSERT INTO `overseas_clients` VALUES (14,'International Market Group (For General Services)','UAE',NULL,'on','2017-04-13 03:25:57','2017-04-13 03:25:57');
INSERT INTO `overseas_clients` VALUES (15,'Lu Lu Hypermarket','UAE',NULL,'on','2017-04-13 03:26:14','2017-04-13 03:26:14');
INSERT INTO `overseas_clients` VALUES (16,'Marhaba Services','UAE',NULL,'on','2017-04-13 03:26:29','2017-04-13 03:26:29');
INSERT INTO `overseas_clients` VALUES (17,'National Catering Company L.L.C.','UAE',NULL,'on','2017-04-13 03:26:42','2017-04-13 03:26:42');
INSERT INTO `overseas_clients` VALUES (18,'Taisei Corporation','UAE',NULL,'on','2017-04-13 03:26:57','2017-04-13 03:26:57');
INSERT INTO `overseas_clients` VALUES (19,'Tarfana Services L.L.C.','UAE',NULL,'on','2017-04-13 03:27:14','2017-04-13 03:27:14');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasa_carousels`
--

LOCK TABLES `pasa_carousels` WRITE;
/*!40000 ALTER TABLE `pasa_carousels` DISABLE KEYS */;
INSERT INTO `pasa_carousels` VALUES (10,'Pasa Team','carousel/kwfhoOMibSrbHJoqfYwbxC1Gu74AanJxVrhCLWst.jpeg','on','2017-04-12 02:09:41','2017-04-12 02:33:59');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruitment_procedures`
--

LOCK TABLES `recruitment_procedures` WRITE;
/*!40000 ALTER TABLE `recruitment_procedures` DISABLE KEYS */;
INSERT INTO `recruitment_procedures` VALUES (1,'Pre-Approval from Labor Department','<p>As per the law of International Labor Organization (ILO), an agency of United Nations which deals with labor issues internationally, any person going abroad for work purpose is not liable to bear any cost towards Visa and ticket. Based on this provision, the government of Nepal has implemented &quot;ZERO COST&quot; policy since 6th July 2015. The labor department verifies the documents whether the employer company has mentioned that the Visa and ticket has been provided from their end, then the labor department proceeds further. The labor department also verifies the salary quoted by the employer company is as per the standards of Nepal government. The salary details for various positions can be found in the website of Nepal embassy. It takes around 1 to 4 days to complete the pre-approval procedure.</p>','fa fa-calendar','on','2017-04-17 05:21:51','2017-04-18 01:41:49');
INSERT INTO `recruitment_procedures` VALUES (2,'Advertisement and Application Collection','<p>The collection process begins with the advertisement of job vacancies and distribution of application forms for those candidates collected from the various sources using different marketing tools like personal references, training centers, in house marketing department and etc. The application form is made with a standard format where the personal details as well as the official comments regarding the candidates are recorded in our Central Data Bank.<br />\r\nVarious agencies are working as partner organization with us from where we collect trained workers as well as skilled persons for the employment at abroad companies. We also have the facility of onsite testing centers for the candidates. As far as the training institutes are concerned, these are the vocational training centers where we directly collect skilled and semi-skilled human resources. These institutions also function as skill enhancing centers for those candidates who are potentially going abroad for employment as recommended from our side.</p>\r\n\r\n<p><br />\r\n<em><strong>Note:</strong>&nbsp;Costs are applicable in this process.</em></p>','fa fa-clone','on','2017-04-17 05:23:20','2017-04-18 01:43:21');
INSERT INTO `recruitment_procedures` VALUES (3,'Selection Process','<p>The initial pre-screening of the candidate begins once all the data information is registered in Data Bank. The pre-screening process involves the initial interview and practical tests, if required. Thereafter the onsite test is being conducted for real time working capability test, if required. This is the filtration process for the final interview/test by the representative of concerned employer. For the time value we even provide facility to interact candidates with our clients via online communication services.<br />\r\nFor highly skilled candidates such as Engineers, Managers, Medical professionals etc. the experts from concerned fields are hired and interviewed as well as practical tests are conducted, if required. After their recommendations and comments, the necessary action is followed by the final test which is conducted by the concerned employer.</p>','fa fa-hand-o-right','on','2017-04-17 05:24:02','2017-04-18 01:44:18');
INSERT INTO `recruitment_procedures` VALUES (4,'Medical Test Process','<p>We make sure the candidates we are sending are medically fit as per the requirement. The Candidates who gets clear through medical test which includes HIV, VDRL, X-Rays etc. then further process of Visa processing starts.</p>\r\n\r\n<p><br />\r\n<em><strong>Note:</strong>&nbsp;Costs are applicable in this process.</em></p>','fa fa-heartbeat','on','2017-04-17 05:24:33','2017-04-18 01:45:18');
INSERT INTO `recruitment_procedures` VALUES (5,'Visa Process','<p>The medically fit candidate&#39;s documents are forwarded for Visa process. The employer will bear the applicable cost incurred in the process.</p>','fa fa-cc-visa','on','2017-04-17 05:24:55','2017-04-18 01:45:54');
INSERT INTO `recruitment_procedures` VALUES (6,'Orientation Process','<p>We make sure our candidates are well aware of the culture, general rules and regulations that needs to be followed by the candidates in abroad countries, which is provided through 2 days special orientation class in association with the government authorized training centers.</p>\r\n\r\n<p><br />\r\n<em><strong>Note:</strong>&nbsp;Costs are applicable in this process.</em></p>','fa fa-assistive-listening-systems','on','2017-04-17 05:25:23','2017-04-18 01:46:53');
INSERT INTO `recruitment_procedures` VALUES (7,'Labour Department Clearance','<p>After the completion of the above mentioned points, the copy of Visa, Certificate of Orientation class, Medical test report, Life Insurance copy, original passport and copy of employment contract needs to be submitted in labor department. Once the labor department checks the documents and gives the clearance then the candidates are legally allowed to work with the employer with whom they have applied for job. This process takes 4 to 5 days to be completed.</p>\r\n\r\n<p><br />\r\n<em><strong>Note:</strong>&nbsp;Costs are applicable in this process.</em></p>','fa fa-users','on','2017-04-17 05:26:15','2017-04-18 01:51:00');
INSERT INTO `recruitment_procedures` VALUES (8,'Insurance and Ticketing','<p>Before flying abroad, the insurance for each candidate is made compulsory, this is one of our standard practice in which each candidate will be insured with the amount of NRs. 500,000/-. The cost of insurance is to be payable by the candidate itself. The confirmation of ticket for them is the following process arranged by the employer as per the government provision.<br />\r\n&nbsp;</p>','fa fa-life-ring','on','2017-04-17 05:26:42','2017-04-18 01:52:30');
INSERT INTO `recruitment_procedures` VALUES (9,'Deployment','<p>On the day of departure, an hour&#39;s special orientation class takes place for the flying candidates. This is conducted from Pasa itself, where the general information about company and the general rules and norms that has to be followed in abroad country is provided. Once they are flown, the follow up with the employer company takes place to ensure that the candidates have reached successfully.</p>\r\n\r\n<p><strong>Document required from employer:</strong></p>\r\n\r\n<ul>\r\n	<li>Interparty Agreement</li>\r\n	<li>Guarantee Letter</li>\r\n	<li>Power of Attorney</li>\r\n	<li>Demand Letter</li>\r\n	<li>Employment Contracts</li>\r\n	<li>Job description / selection criteria for each job</li>\r\n	<li>Commercial Registration copy</li>\r\n	<li>Authorization to utilize visa or the Visa Approval</li>\r\n	<li>Offer letter after the selection of candidates</li>\r\n	<li>Joining ticket &amp; Service charge (where applicable)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>Categories:</h1>\r\n\r\n<p>Categories of human resources available in Nepal for foreign employment are broadly classified into Four Categories such as:<br />\r\n<br />\r\n<strong>Professionals</strong><br />\r\nEngineers, HR Executives, Managers, General Managers, Doctors, Surgeons, Dentists, Nurses,Chartered Accountants, Hospitality professionals, Aviation professionals, IT professionals, Retail Professionals, Geologist / Soil Specialist / Mineral Specialist, Professors &amp; teachers in various fields.<br />\r\n<br />\r\n<strong>Skilled</strong><br />\r\nCooks, Security Guards, Beautician, Driver Light GCC, Store Keepers, Machine Operator, Computer Operator, Photographer, Correspondent, Medical Assistant, Front Office Personnel, Sales Executive, Sales Representative, Clerk, Secretary, Driver Heavy GCC, Business Executive, Administrative, Translator, Foreman Plant Operators, Construction Supervisor, Pharmacist, Laboratory Technician, Overseer, Construction Equipment Operators, Scaffolding Supervisor, Draughtsman, Computer Engineer, Accountant, Physiotherapist.<br />\r\n<br />\r\n<strong>Semi-skilled</strong><br />\r\nMason,Plaster Worker, Block Makers, Carpenter,Mechanical helper, Electrical helper, Steel Fixture, Tile Fixture, Plumber, Pipe Fitter, Welder, Scaffolder, A/C Mechanic, Electricians, Tailors, Assistant Tailors, Laundry Man, Washer Man, Barbers, Shop Assistant, Messenger, Technician, Digger, Ceramic Worker, Painter, Gardeners, Reinforce Fitter, Construction, Cabling Technician, Receptionist, Designer, Professional, Cashier, Telephone Operator, Salesman, Assistant Cook, Typist, Bakers, Assistant Baker, Waiter.<br />\r\n<br />\r\n<strong>Un-skilled</strong><br />\r\nLabors, Cleaners, Helpers, Sweepers, Watchmen, Office Boy, Washing Workers, Building Worker, Construction Worker, Bell man, Room Attendant, Airport loader, Agricultural Labors/Farmers</p>','fa fa-rocket','on','2017-04-17 05:28:37','2017-04-18 01:42:09');
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

-- Dump completed on 2017-04-19 15:01:20
