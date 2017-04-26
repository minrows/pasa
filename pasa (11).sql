-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 10:33 AM
-- Server version: 5.5.39
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `img`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Company Profile', '<p>We started our journey in this business from the year 1998; we are one of the Nepal&#39;s best Recruiting Agencies. The number of years of experience and knowledge gives us the confident to say that, &quot;we outsource the best human resources&quot;. We have been providing expert and unparalleled value added recruitment services to our clients across the world who are looking for professional and smart candidates to excel in their business. We are happy to have satisfied clients with us from a long time and we feel proud and honored to give the best to our precious clients.</p>\r\n\r\n<hr />\r\n<pre>\r\n<div class=\"row hidden-xs hidden-sm\">\r\n<div class=\"col-lg-5 col-md-5\">\r\n<strong>Name :</strong> Pasa International Pvt. Ltd.\r\n<strong>Address :</strong> Kupondole, Lalitpur, Nepal\r\n<strong>Established :</strong> 1998 September 24\r\n<strong>Govt, License No. :</strong> 116/055/056\r\n<strong>Registered No. :</strong> 9222/055/056\r\n<strong>Tel :</strong> +977-1-5554499, 55539331, 5553380, 5553342\r\n<strong>Fax :</strong> +977-1-5538440\r\n<strong>Email :</strong> <a href=\"mailto:pimt@pasainternational.com.np\" target=\"_blank\">pimt@pasainternational.com.np</a>\r\n      : <a href=\"mailto:pimt@pasa.wlink.com.np\" target=\"_blank\">pimt@pasa.wlink.com.np</a>\r\n<strong>Website :</strong> <a href=\"http://www.pasainternational.com.np/\" target=\"_blank\">http://www.pasainternational.com.np</a>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-6\">\r\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.947025855255!2d85.31182412935517!3d27.687213511414598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbfb56d2f462c0c9!2sPASA+INTERNATIONAL+PVT.+LTD!5e0!3m2!1sen!2snp!4v1491990754177\" width=\"600\" height=\"250\" frameborder=\"0\" style=\"border:0; margin-top:-50px\" allowfullscreen></iframe>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row hidden-lg hidden-md\">\r\n<div class=\"col-sm-12 col-xs-12\">\r\n<strong>Name :</strong> Pasa International Pvt. Ltd.\r\n<strong>Address :</strong> Kupondole, Lalitpur, Nepal\r\n<strong>Established :</strong> 1998 September 24\r\n<strong>Govt, License No. :</strong> 116/055/056\r\n<strong>Registered No. :</strong> 9222/055/056\r\n<strong>Tel :</strong> +977-1-5554499, 55539331, 5553380, 5553342\r\n<strong>Fax :</strong> +977-1-5538440\r\n<strong>Email :</strong> <a href=\"mailto:pimt@pasainternational.com.np\" target=\"_blank\">pimt@pasainternational.com.np</a>\r\n      : <a href=\"mailto:pimt@pasa.wlink.com.np\" target=\"_blank\">pimt@pasa.wlink.com.np</a>\r\n<strong>Website :</strong> <a href=\"http://www.pasainternational.com.np/\" target=\"_blank\">http://www.pasainternational.com.np</a>\r\n</div>\r\n\r\n<div class=\"col-sm-12 col-xs-12\">\r\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.947025855255!2d85.31182412935517!3d27.687213511414598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbfb56d2f462c0c9!2sPASA+INTERNATIONAL+PVT.+LTD!5e0!3m2!1sen!2snp!4v1491990754177\" width=\"400\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\r\n</div>\r\n</div>\r\n</pre>', NULL, 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(2, 'Pasa Culture', '<p>During the past decades, we have developed our core foundation with the granular level of engineering approach in our system. Each and every nooks of our customized process is purely driven by the changing customer demands and the newer technological tools. The approach of system re-engineering is ever going process. Where the past activities information has been collected and their microscopic study are the key elements for our business strength.<br />\r\n<br />\r\nOur Client&#39;s and Candidate&#39;s satisfaction is our first preference, as per their needs and requirements. We are quick in response to the concerns and demands of our clients and act wisely on the requirements to fulfill the need which is the ethics of our recruitment process. We place the right candidates to get the right jobs for positive outcome.<br />\r\n<br />\r\nOur aim is directed by the value driven culture of our organization that adds value in our each services that contrast us among other competitors. Because we believe in serving the best to our clients requirements and finding best possible human resources for them from wide range of selections.<br />\r\n<br />\r\nWith the bricks of acknowledged faith in our potential and services, we have laid down the foundation for uncompromising quality in everything we deliver and have built a company where there is a promising bright future for everyone.</p>', NULL, 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(3, 'Message from Chairman', '<p><em>Warm Greetings!</em><br />\r\n<br />\r\nI am glad to introduce our company&nbsp;PASA International Pvt. Ltd.&nbsp;We are one of the successful workforce agency of Nepal. The company has begun its operation more than a decade ago with the mission to reach the excellence of professionalism such as expertise, Integrity and Moral Values in human resources Globally. This working culture of PASA is based on bringing two key elements, resources and opportunities. With the numerous studies and research works, Pasa always comes forward as opportunities to those who really want to work hard in order to secure their future. Similarly, it has served as a reliable source for those organizations who need quality human resources. As a good catalyst, the company has been able to put its best possible effort on making a synergetic result to combine the listed two elements. Those results have been recognized as a business rewards for our success.</p>\r\n\r\n<p>The company always believes in corporate solutions. Therefore to broaden its scope, it has been associated with different organization like Vocational training Institutes, Travel Agencies, Community Development Organizations etc. For the continuous research and development of its business process, we are keen on collection of information and regular feedbacks from our concerned bodies. Thank you for your precious time, we are looking forward to hear from you.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Devendra N. Shrestha</strong><br />\r\nChairman&nbsp;</p>', 'about/rgzGuXN9DP24jEi5k0N2hYEj3J3X15b6GPrPP8t4.jpeg', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(4, 'Message from CEO', '<p>I am honored to introduce myself as the CEO of&nbsp;PASA International Pvt Ltd.&nbsp;We have walked a long way to reach the success with our efficient, dedicated, hardworking and responsible team with us.</p>\r\n\r\n<p>We always believe in client satisfaction, we don&rsquo;t just supply workforce but we believe in providing the best of the candidates with required filtration process. So that our valuable clients business shall run profitable and successful for a long run.</p>\r\n\r\n<p>Our joint efforts and sense of responsibility has given us an opportunity to be in this business successfully since a long period. We have friendly, professional and healthy working environment which give us zeal and boosts us to excel in providing the best of all.</p>\r\n\r\n<p>Our aim is to be the Nepal&#39;s No. 1 foreign recruitment agency in terms of quality services along with long term relationship with our valued clients.</p>\r\n\r\n<p>Thank you for your valuable time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Binod Purush Neupane</strong><br />\r\nCEO&nbsp;</p>', NULL, 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(5, 'Why Pasa International?', '<p>In the current era of business, due to the increasing competition as well as globalizations, only those organizations can stand and sustain in front of such business race which is backed with the elevating spirit of knowledge and skill. In fact, it is a result by the optimal use of required human expertise in the respective areas of today&#39;s organizations.&nbsp;Pasa International&nbsp;acts as a connecting bridge to tie between the knots of desired human skills and the organizations like those which are seeking for such manpower.<br />\r\n<br />\r\nOur aim is directed by the value driven culture of our organization that adds the unique value in our each service deliverables. That is why we don&#39;t do different things, however our focused approaches comes as different. This is justified by our standard recruitment system where the logical &amp; systematic approaches have been taken on, the identification of clients&#39; requirements and finding the best possible way out from wide range of selections. The countless rigorous activities where we had put our maximum efforts have made this organization successful in terms of both reliability and dependability. Adding to that, we intend to introduce and integrate the newer technological luxury to our organizations&rsquo; trait in order to successfully drive its day-to-day operation making a right step to move forward.<br />\r\n<br />\r\nWith the bricks of acknowledged faith in our potential and services, we have laid down the foundation for uncompromising quality in everything we deliver and have built a corporation where there is a committed dazzling prospects to everyone concerned.</p>', NULL, 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(6, 'Corporate Members', '<p><strong>Pasa International</strong>&nbsp;believes in the approach of corporate solutions. Therefore, each deliverables of Pasa is comprised of total corporate efforts from different wings as partner organizations. The following are the list of corporate team of Pasa. (Testimonials are available upon request)</p>', NULL, 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(7, 'Overseas Clients', '<p>&amp;nbsp;</p>', NULL, 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `achievers`
--

CREATE TABLE `achievers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rijesh', 'craaabby@gmail.com', '$2y$10$Pz80pnjBhIFYpNzO6EabrOkcckALiSu5yA8mXxPsgtp7rIYQON74e', NULL, '2017-04-23 18:15:00', '2017-04-23 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `corporate_fields`
--

CREATE TABLE `corporate_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `corporate_members`
--

CREATE TABLE `corporate_members` (
  `corporate_field_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curr_demands`
--

CREATE TABLE `curr_demands` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curr_demand_imgs`
--

CREATE TABLE `curr_demand_imgs` (
  `id` int(10) UNSIGNED NOT NULL,
  `img_thumb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_full` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phn_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phn_no`, `message`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a@gmail.com', 'a', 'a', '2017-04-26 02:01:12', '2017-04-26 02:01:12'),
(2, 'a', 'a@gmail.com', 'a', 'a', '2017-04-26 02:02:30', '2017-04-26 02:02:30'),
(3, 'a', 'a@gmail.com', 'a', 'a', '2017-04-26 02:02:49', '2017-04-26 02:02:49'),
(4, 'b', 'b@gmail.com', 'b', 'b', '2017-04-26 02:05:57', '2017-04-26 02:05:57'),
(5, 'c', 'c@gmail.com', 'c', 'c', '2017-04-26 02:10:07', '2017-04-26 02:10:07'),
(6, 'c', 'c@gmail.com', 'c', 'c', '2017-04-26 02:10:26', '2017-04-26 02:10:26'),
(7, 'a', 'a@gmail.com', '5', 'a', '2017-04-26 02:25:12', '2017-04-26 02:25:12'),
(8, 'b', 'b@gmail.com', '123', 'asdf', '2017-04-26 02:27:14', '2017-04-26 02:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_thumb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_full` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `title`, `url`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com/Pasa-International-Pvt-Ltd-653196754701229/', 'fa fa-facebook', '2017-04-24 18:15:00', '2017-04-24 18:15:00'),
(2, 'Mail', 'mailto:pimt@pasa.wlink.com.np', 'fa fa-envelope', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_03_31_090941_create_pasa_carousel_table', 1),
(2, '2017_04_03_054626_create_curr_demand_img_table', 1),
(3, '2017_04_03_055055_create_curr_demand_table', 1),
(4, '2017_04_03_055643_create_about_table', 1),
(5, '2017_04_03_055847_create_overseas_client_table', 1),
(6, '2017_04_03_060205_create_achiever_table', 1),
(7, '2017_04_03_060546_create_corporate_field_table', 1),
(8, '2017_04_03_060649_create_corporate_member_table', 1),
(9, '2017_04_03_063650_create_recruitment_procedure_table', 1),
(10, '2017_04_03_064210_create_contact_table', 1),
(11, '2017_04_03_064745_create_gallery_table', 1),
(12, '2017_04_03_065614_create_feedback_table', 1),
(13, '2017_04_03_070400_create_online_form_table', 1),
(14, '2017_04_04_060255_create_admin_table', 1),
(15, '2017_04_25_050420_create_links_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `online_forms`
--

CREATE TABLE `online_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` enum('single','married') COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_no` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doi` date NOT NULL,
  `place_of_issue` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doe` date NOT NULL,
  `height_feet` int(11) NOT NULL,
  `height_inch` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `parent_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prior_exp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applied_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `online_forms`
--

INSERT INTO `online_forms` (`id`, `name`, `position`, `tel_no`, `mob_no`, `religion`, `address`, `con_address`, `email`, `qualification`, `dob`, `gender`, `marital_status`, `spouse_name`, `passport_no`, `doi`, `place_of_issue`, `doe`, `height_feet`, `height_inch`, `weight`, `parent_name`, `prior_exp`, `document`, `img`, `applied_date`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', 'asdf@gmail.com', '1', '0001-01-01', 'male', 'single', '1', '1', '0001-01-01', '1', '0001-01-01', 1, 1, 1, '1', '1', '1', 'online_files/pp_1.jpeg', NULL, '2017-04-24 04:31:19', '2017-04-24 04:31:20'),
(2, '1', '1', '1', '1', '1', '1', '1', 'asdf@gmail.com', '1', '2017-04-24', 'male', 'single', NULL, '1', '2017-04-24', '1', '2017-04-24', 1, 1, 1, '1', '1', '1', 'online_files/pp_2.jpeg', NULL, '2017-04-24 04:44:55', '2017-04-24 04:44:55'),
(3, '1', '1', '1', '1', '1', '1', '1', 'asdf@gmail.com', '1', '0001-01-01', 'male', 'single', '1', '1', '0001-01-01', '1', '0001-01-01', 1, 1, 1, '1', '1', '1', 'online_files/pp_3.jpeg', NULL, '2017-04-24 04:59:56', '2017-04-24 04:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `overseas_clients`
--

CREATE TABLE `overseas_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pasa_carousels`
--

CREATE TABLE `pasa_carousels` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasa_carousels`
--

INSERT INTO `pasa_carousels` (`id`, `title`, `img`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Pasa Team', 'carousel/kwfhoOMibSrbHJoqfYwbxC1Gu74AanJxVrhCLWst.jpeg', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment_procedures`
--

CREATE TABLE `recruitment_procedures` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recruitment_procedures`
--

INSERT INTO `recruitment_procedures` (`id`, `title`, `description`, `img`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Pre-Approval from Labor Department', '<p>As per the law of International Labor Organization (ILO), an agency of United Nations which deals with labor issues internationally, any person going abroad for work purpose is not liable to bear any cost towards Visa and ticket. Based on this provision, the government of Nepal has implemented &quot;ZERO COST&quot; policy since 6th July 2015. The labor department verifies the documents whether the employer company has mentioned that the Visa and ticket has been provided from their end, then the labor department proceeds further. The labor department also verifies the salary quoted by the employer company is as per the standards of Nepal government. The salary details for various positions can be found in the website of Nepal embassy. It takes around 1 to 4 days to complete the pre-approval procedure.</p>', 'fa fa-calendar', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(2, 'Advertisement and Application Collection', '<p>The collection process begins with the advertisement of job vacancies and distribution of application forms for those candidates collected from the various sources using different marketing tools like personal references, training centers, in house marketing department and etc. The application form is made with a standard format where the personal details as well as the official comments regarding the candidates are recorded in our Central Data Bank.<br />\r\nVarious agencies are working as partner organization with us from where we collect trained workers as well as skilled persons for the employment at abroad companies. We also have the facility of onsite testing centers for the candidates. As far as the training institutes are concerned, these are the vocational training centers where we directly collect skilled and semi-skilled human resources. These institutions also function as skill enhancing centers for those candidates who are potentially going abroad for employment as recommended from our side.</p>\r\n\r\n<p><br />\r\n<em><strong>Note:</strong>&nbsp;Costs are applicable in this process.</em></p>', 'fa fa-clone', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(3, 'Selection Process', '<p>The initial pre-screening of the candidate begins once all the data information is registered in Data Bank. The pre-screening process involves the initial interview and practical tests, if required. Thereafter the onsite test is being conducted for real time working capability test, if required. This is the filtration process for the final interview/test by the representative of concerned employer. For the time value we even provide facility to interact candidates with our clients via online communication services.<br />\r\nFor highly skilled candidates such as Engineers, Managers, Medical professionals etc. the experts from concerned fields are hired and interviewed as well as practical tests are conducted, if required. After their recommendations and comments, the necessary action is followed by the final test which is conducted by the concerned employer.</p>', 'fa fa-hand-o-right', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(4, 'Medical Test Process', '<p>We make sure the candidates we are sending are medically fit as per the requirement. The Candidates who gets clear through medical test which includes HIV, VDRL, X-Rays etc. then further process of Visa processing starts.</p>\r\n\r\n<p><br />\r\n<em><strong>Note:</strong>&nbsp;Costs are applicable in this process.</em></p>', 'fa fa-heartbeat', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(5, 'Visa Process', '<p>The medically fit candidate&#39;s documents are forwarded for Visa process. The employer will bear the applicable cost incurred in the process.</p>', 'fa fa-cc-visa', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(6, 'Orientation Process', '<p>We make sure our candidates are well aware of the culture, general rules and regulations that needs to be followed by the candidates in abroad countries, which is provided through 2 days special orientation class in association with the government authorized training centers.</p>\r\n\r\n<p><br />\r\n<em><strong>Note:</strong>&nbsp;Costs are applicable in this process.</em></p>', 'fa fa-assistive-listening-systems', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(7, 'Labour Department Clearance', '<p>After the completion of the above mentioned points, the copy of Visa, Certificate of Orientation class, Medical test report, Life Insurance copy, original passport and copy of employment contract needs to be submitted in labor department. Once the labor department checks the documents and gives the clearance then the candidates are legally allowed to work with the employer with whom they have applied for job. This process takes 4 to 5 days to be completed.</p>\r\n\r\n<p><br />\r\n<em><strong>Note:</strong>&nbsp;Costs are applicable in this process.</em></p>', 'fa fa-users', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(8, 'Insurance and Ticketing', '<p>Before flying abroad, the insurance for each candidate is made compulsory, this is one of our standard practice in which each candidate will be insured with the amount of NRs. 500,000/-. The cost of insurance is to be payable by the candidate itself. The confirmation of ticket for them is the following process arranged by the employer as per the government provision.<br />\r\n&nbsp;</p>', 'fa fa-life-ring', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
(9, 'Deployment', '<p>On the day of departure, an hour&#39;s special orientation class takes place for the flying candidates. This is conducted from Pasa itself, where the general information about company and the general rules and norms that has to be followed in abroad country is provided. Once they are flown, the follow up with the employer company takes place to ensure that the candidates have reached successfully.</p>\r\n\r\n<p><strong>Document required from employer:</strong></p>\r\n\r\n<ul>\r\n	<li>Interparty Agreement</li>\r\n	<li>Guarantee Letter</li>\r\n	<li>Power of Attorney</li>\r\n	<li>Demand Letter</li>\r\n	<li>Employment Contracts</li>\r\n	<li>Job description / selection criteria for each job</li>\r\n	<li>Commercial Registration copy</li>\r\n	<li>Authorization to utilize visa or the Visa Approval</li>\r\n	<li>Offer letter after the selection of candidates</li>\r\n	<li>Joining ticket &amp; Service charge (where applicable)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>Categories:</h1>\r\n\r\n<p>Categories of human resources available in Nepal for foreign employment are broadly classified into Four Categories such as:<br />\r\n<br />\r\n<strong>Professionals</strong><br />\r\nEngineers, HR Executives, Managers, General Managers, Doctors, Surgeons, Dentists, Nurses,Chartered Accountants, Hospitality professionals, Aviation professionals, IT professionals, Retail Professionals, Geologist / Soil Specialist / Mineral Specialist, Professors &amp; teachers in various fields.<br />\r\n<br />\r\n<strong>Skilled</strong><br />\r\nCooks, Security Guards, Beautician, Driver Light GCC, Store Keepers, Machine Operator, Computer Operator, Photographer, Correspondent, Medical Assistant, Front Office Personnel, Sales Executive, Sales Representative, Clerk, Secretary, Driver Heavy GCC, Business Executive, Administrative, Translator, Foreman Plant Operators, Construction Supervisor, Pharmacist, Laboratory Technician, Overseer, Construction Equipment Operators, Scaffolding Supervisor, Draughtsman, Computer Engineer, Accountant, Physiotherapist.<br />\r\n<br />\r\n<strong>Semi-skilled</strong><br />\r\nMason,Plaster Worker, Block Makers, Carpenter,Mechanical helper, Electrical helper, Steel Fixture, Tile Fixture, Plumber, Pipe Fitter, Welder, Scaffolder, A/C Mechanic, Electricians, Tailors, Assistant Tailors, Laundry Man, Washer Man, Barbers, Shop Assistant, Messenger, Technician, Digger, Ceramic Worker, Painter, Gardeners, Reinforce Fitter, Construction, Cabling Technician, Receptionist, Designer, Professional, Cashier, Telephone Operator, Salesman, Assistant Cook, Typist, Bakers, Assistant Baker, Waiter.<br />\r\n<br />\r\n<strong>Un-skilled</strong><br />\r\nLabors, Cleaners, Helpers, Sweepers, Watchmen, Office Boy, Washing Workers, Building Worker, Construction Worker, Bell man, Room Attendant, Airport loader, Agricultural Labors/Farmers</p>', 'fa fa-rocket', 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievers`
--
ALTER TABLE `achievers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_fields`
--
ALTER TABLE `corporate_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_members`
--
ALTER TABLE `corporate_members`
  ADD PRIMARY KEY (`corporate_field_id`,`id`);

--
-- Indexes for table `curr_demands`
--
ALTER TABLE `curr_demands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curr_demand_imgs`
--
ALTER TABLE `curr_demand_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_forms`
--
ALTER TABLE `online_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overseas_clients`
--
ALTER TABLE `overseas_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasa_carousels`
--
ALTER TABLE `pasa_carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitment_procedures`
--
ALTER TABLE `recruitment_procedures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `achievers`
--
ALTER TABLE `achievers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `corporate_fields`
--
ALTER TABLE `corporate_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `curr_demands`
--
ALTER TABLE `curr_demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `curr_demand_imgs`
--
ALTER TABLE `curr_demand_imgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `online_forms`
--
ALTER TABLE `online_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `overseas_clients`
--
ALTER TABLE `overseas_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pasa_carousels`
--
ALTER TABLE `pasa_carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `recruitment_procedures`
--
ALTER TABLE `recruitment_procedures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
