-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 08:42 AM
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
(2, 'Company Profile', '<p>We started our journey in this business from the year 1998; we are one of the Nepal&#39;s best Recruiting Agencies. The number of years of experience and knowledge gives us the confident to say that, &quot;we outsource the best human resources&quot;. We have been providing expert and unparalleled value added recruitment services to our clients across the world who are looking for professional and smart candidates to excel in their business. We are happy to have satisfied clients with us from a long time and we feel proud and honored to give the best to our precious clients.</p>\r\n\r\n<hr />\r\n<pre>\r\n<div class=\"row hidden-xs hidden-sm\">\r\n<div class=\"col-lg-5 col-md-5\">\r\n<strong>Name :</strong> Pasa International Pvt. Ltd.\r\n<strong>Address :</strong> Kupondole, Lalitpur, Nepal\r\n<strong>Established :</strong> 1998 September 24\r\n<strong>Govt, License No. :</strong> 116/055/056\r\n<strong>Registered No. :</strong> 9222/055/056\r\n<strong>Tel :</strong> +977-1-5554499, 55539331, 5553380, 5553342\r\n<strong>Fax :</strong> +977-1-5538440\r\n<strong>Email :</strong> <a href=\"mailto:pimt@pasainternational.com.np\" target=\"_blank\">pimt@pasainternational.com.np</a>\r\n      : <a href=\"mailto:pimt@pasa.wlink.com.np\" target=\"_blank\">pimt@pasa.wlink.com.np</a>\r\n<strong>Website :</strong> <a href=\"http://www.pasainternational.com.np/\" target=\"_blank\">http://www.pasainternational.com.np</a>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-6\">\r\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.947025855255!2d85.31182412935517!3d27.687213511414598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbfb56d2f462c0c9!2sPASA+INTERNATIONAL+PVT.+LTD!5e0!3m2!1sen!2snp!4v1491990754177\" width=\"600\" height=\"250\" frameborder=\"0\" style=\"border:0; margin-top:-50px\" allowfullscreen></iframe>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row hidden-lg hidden-md\">\r\n<div class=\"col-sm-12 col-xs-12\">\r\n<strong>Name :</strong> Pasa International Pvt. Ltd.\r\n<strong>Address :</strong> Kupondole, Lalitpur, Nepal\r\n<strong>Established :</strong> 1998 September 24\r\n<strong>Govt, License No. :</strong> 116/055/056\r\n<strong>Registered No. :</strong> 9222/055/056\r\n<strong>Tel :</strong> +977-1-5554499, 55539331, 5553380, 5553342\r\n<strong>Fax :</strong> +977-1-5538440\r\n<strong>Email :</strong> <a href=\"mailto:pimt@pasainternational.com.np\" target=\"_blank\">pimt@pasainternational.com.np</a>\r\n      : <a href=\"mailto:pimt@pasa.wlink.com.np\" target=\"_blank\">pimt@pasa.wlink.com.np</a>\r\n<strong>Website :</strong> <a href=\"http://www.pasainternational.com.np/\" target=\"_blank\">http://www.pasainternational.com.np</a>\r\n</div>\r\n\r\n<div class=\"col-sm-12 col-xs-12\">\r\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.947025855255!2d85.31182412935517!3d27.687213511414598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbfb56d2f462c0c9!2sPASA+INTERNATIONAL+PVT.+LTD!5e0!3m2!1sen!2snp!4v1491990754177\" width=\"400\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\r\n</div>\r\n</div>\r\n</pre>', NULL, 'on', '2017-04-10 04:09:00', '2017-04-12 04:17:09'),
(3, 'Pasa Culture', '<p>During the past decades, we have developed our core foundation with the granular level of engineering approach in our system. Each and every nooks of our customized process is purely driven by the changing customer demands and the newer technological tools. The approach of system re-engineering is ever going process. Where the past activities information has been collected and their microscopic study are the key elements for our business strength.<br />\r\n<br />\r\nOur Client&#39;s and Candidate&#39;s satisfaction is our first preference, as per their needs and requirements. We are quick in response to the concerns and demands of our clients and act wisely on the requirements to fulfill the need which is the ethics of our recruitment process. We place the right candidates to get the right jobs for positive outcome.<br />\r\n<br />\r\nOur aim is directed by the value driven culture of our organization that adds value in our each services that contrast us among other competitors. Because we believe in serving the best to our clients requirements and finding best possible human resources for them from wide range of selections.<br />\r\n<br />\r\nWith the bricks of acknowledged faith in our potential and services, we have laid down the foundation for uncompromising quality in everything we deliver and have built a company where there is a promising bright future for everyone.</p>', NULL, 'on', '2017-04-13 00:50:39', '2017-04-13 00:50:39'),
(4, 'Message from Chairman', '<p><em>Warm Greetings!</em><br />\r\n<br />\r\nI am glad to introduce our company&nbsp;PASA International Pvt. Ltd.&nbsp;We are one of the successful workforce agency of Nepal. The company has begun its operation more than a decade ago with the mission to reach the excellence of professionalism such as expertise, Integrity and Moral Values in human resources Globally. This working culture of PASA is based on bringing two key elements, resources and opportunities. With the numerous studies and research works, Pasa always comes forward as opportunities to those who really want to work hard in order to secure their future. Similarly, it has served as a reliable source for those organizations who need quality human resources. As a good catalyst, the company has been able to put its best possible effort on making a synergetic result to combine the listed two elements. Those results have been recognized as a business rewards for our success.</p>\r\n\r\n<p>The company always believes in corporate solutions. Therefore to broaden its scope, it has been associated with different organization like Vocational training Institutes, Travel Agencies, Community Development Organizations etc. For the continuous research and development of its business process, we are keen on collection of information and regular feedbacks from our concerned bodies. Thank you for your precious time, we are looking forward to hear from you.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Devendra N. Shrestha</strong><br />\r\nChairman&nbsp;</p>', NULL, 'on', '2017-04-13 00:51:12', '2017-04-13 00:55:52'),
(5, 'Message from CEO', '<p>I am honored to introduce myself as the CEO of&nbsp;PASA International Pvt Ltd.&nbsp;We have walked a long way to reach the success with our efficient, dedicated, hardworking and responsible team with us.</p>\r\n\r\n<p>We always believe in client satisfaction, we don&rsquo;t just supply workforce but we believe in providing the best of the candidates with required filtration process. So that our valuable clients business shall run profitable and successful for a long run.</p>\r\n\r\n<p>Our joint efforts and sense of responsibility has given us an opportunity to be in this business successfully since a long period. We have friendly, professional and healthy working environment which give us zeal and boosts us to excel in providing the best of all.</p>\r\n\r\n<p>Our aim is to be the Nepal&#39;s No. 1 foreign recruitment agency in terms of quality services along with long term relationship with our valued clients.</p>\r\n\r\n<p>Thank you for your valuable time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Binod Purush Neupane</strong><br />\r\nCEO&nbsp;</p>', NULL, 'on', '2017-04-13 00:51:44', '2017-04-13 00:56:55'),
(6, 'Why Pasa International?', '<p>In the current era of business, due to the increasing competition as well as globalizations, only those organizations can stand and sustain in front of such business race which is backed with the elevating spirit of knowledge and skill. In fact, it is a result by the optimal use of required human expertise in the respective areas of today&#39;s organizations.&nbsp;Pasa International&nbsp;acts as a connecting bridge to tie between the knots of desired human skills and the organizations like those which are seeking for such manpower.<br />\r\n<br />\r\nOur aim is directed by the value driven culture of our organization that adds the unique value in our each service deliverables. That is why we don&#39;t do different things, however our focused approaches comes as different. This is justified by our standard recruitment system where the logical &amp; systematic approaches have been taken on, the identification of clients&#39; requirements and finding the best possible way out from wide range of selections. The countless rigorous activities where we had put our maximum efforts have made this organization successful in terms of both reliability and dependability. Adding to that, we intend to introduce and integrate the newer technological luxury to our organizations&rsquo; trait in order to successfully drive its day-to-day operation making a right step to move forward.<br />\r\n<br />\r\nWith the bricks of acknowledged faith in our potential and services, we have laid down the foundation for uncompromising quality in everything we deliver and have built a corporation where there is a committed dazzling prospects to everyone concerned.</p>', NULL, 'on', '2017-04-13 00:52:17', '2017-04-13 00:52:17'),
(7, 'Corporate Members', '<p><strong>Pasa International</strong>&nbsp;believes in the approach of corporate solutions. Therefore, each deliverables of Pasa is comprised of total corporate efforts from different wings as partner organizations. The following are the list of corporate team of Pasa. (Testimonials are available upon request)</p>', NULL, 'on', '2017-04-13 00:53:05', '2017-04-13 00:53:05'),
(8, 'Overseas Clients', '<p>...</p>', NULL, 'on', '2017-04-13 00:53:57', '2017-04-13 00:53:57'),
(9, 'Our Achievers', '<p>...</p>', NULL, 'on', '2017-04-13 00:54:33', '2017-04-13 00:54:33');

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

--
-- Dumping data for table `achievers`
--

INSERT INTO `achievers` (`id`, `title`, `img`, `state`, `created_at`, `updated_at`) VALUES
(1, 'a', 'achiever/Q8jcZTNULzZYPsLZA2n0wuuSAsTRP7emR9SDnXGc.jpeg', 'on', '2017-04-11 01:12:08', '2017-04-11 01:12:08');

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
(1, 'Rijesh', 'craaabby@gmail.com', '$2y$10$cfxXkl0RiBAlNbNJVMn2fusvr1PY8QkRFx2UQgO2jH8KDUBXwSxAq', 'UUjkl7cG4oXrr0VMo5BVvX2O0fuufXHfbJnKsoQrnPceQoOhtwaAKWLvgtiZ', '2017-04-04 18:15:00', '2017-04-04 18:15:00');

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

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `description`, `state`, `created_at`, `updated_at`) VALUES
(3, 'a', 'aa', 'on', '2017-04-10 23:07:20', '2017-04-10 23:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_fields`
--

CREATE TABLE `corporate_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate_fields`
--

INSERT INTO `corporate_fields` (`id`, `title`, `description`, `state`, `created_at`, `updated_at`) VALUES
(1, 'a', '<p>a</p>', 'on', '2017-04-11 01:32:59', '2017-04-11 01:32:59'),
(3, 'b', '<p>c</p>', 'on', '2017-04-11 01:33:33', '2017-04-11 01:33:49'),
(4, 'c', '<p>c</p>', 'on', '2017-04-11 01:33:57', '2017-04-11 01:33:57'),
(5, 'Technical institutes', '<p>a</p>', 'on', '2017-04-11 03:02:29', '2017-04-11 03:02:29');

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

--
-- Dumping data for table `curr_demands`
--

INSERT INTO `curr_demands` (`id`, `title`, `trade`, `quantity`, `country`, `state`, `created_at`, `updated_at`) VALUES
(3, 'b', 'a', 1, 'a', 'on', '2017-04-10 01:01:50', '2017-04-10 01:24:51');

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

--
-- Dumping data for table `curr_demand_imgs`
--

INSERT INTO `curr_demand_imgs` (`id`, `img_thumb`, `img_full`, `state`, `created_at`, `updated_at`) VALUES
(9, 'current_demand/TetBAcyxJu1zfugzTcOP0Q6hH0KR44HsJKjaRN3i.jpeg', 'current_demand/TetBAcyxJu1zfugzTcOP0Q6hH0KR44HsJKjaRN3i.jpeg', 'on', '2017-04-10 03:37:44', '2017-04-10 03:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phn_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `img_thumb`, `img_full`, `state`, `created_at`, `updated_at`) VALUES
(1, 'a', 'gallery/rxFCoo5KuLoL3PwBFFXmHUkD9hSJIgNpu9SUGIiV.jpeg', 'gallery/rxFCoo5KuLoL3PwBFFXmHUkD9hSJIgNpu9SUGIiV.jpeg', 'on', '2017-04-10 01:43:33', '2017-04-10 01:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2017_03_31_090941_create_pasa_carousel_table', 1),
(42, '2017_04_03_054626_create_curr_demand_img_table', 1),
(43, '2017_04_03_055055_create_curr_demand_table', 1),
(44, '2017_04_03_055643_create_about_table', 1),
(45, '2017_04_03_055847_create_overseas_client_table', 1),
(46, '2017_04_03_060205_create_achiever_table', 1),
(47, '2017_04_03_060546_create_corporate_field_table', 1),
(48, '2017_04_03_060649_create_corporate_member_table', 1),
(49, '2017_04_03_063650_create_recruitment_procedure_table', 1),
(50, '2017_04_03_064210_create_contact_table', 1),
(51, '2017_04_03_064745_create_gallery_table', 1),
(52, '2017_04_03_065614_create_feedback_table', 2),
(53, '2017_04_03_070400_create_online_form_table', 3),
(54, '2017_04_04_060255_create_admin_table', 4);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `overseas_clients`
--

CREATE TABLE `overseas_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overseas_clients`
--

INSERT INTO `overseas_clients` (`id`, `title`, `country`, `img`, `state`, `created_at`, `updated_at`) VALUES
(3, 'a', 'a', 'overseas_client/Y234NO15iJPoB38KvHla0fFdt0DXYt0f3ErFatmd.jpeg', 'on', '2017-04-11 00:48:36', '2017-04-11 00:53:30'),
(5, 'b', 'b', NULL, 'on', '2017-04-11 00:54:00', '2017-04-11 00:54:00'),
(6, 'c', 'a', NULL, 'on', '2017-04-11 00:54:11', '2017-04-11 00:54:11');

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
(10, 'Pasa Team', 'carousel/kwfhoOMibSrbHJoqfYwbxC1Gu74AanJxVrhCLWst.jpeg', 'on', '2017-04-12 02:09:41', '2017-04-12 02:33:59'),
(11, 'Construction Work', 'carousel/l3oLY7eMGJYIpc0oMA45mOvOs0UmumrwOPFihvUY.jpeg', 'on', '2017-04-12 02:10:21', '2017-04-12 02:34:07'),
(12, '3 idiots', 'carousel/NFFlEIAoSgopk6i6MYAvdy08VzrwMnWOopQgFYIJ.jpeg', 'on', '2017-04-12 03:32:07', '2017-04-12 03:32:07'),
(14, 'fasdfasdf', 'carousel/3MbXMLoyj3jpVhYx4aIaGEqx13neS8cCOzKqTH4v.jpeg', 'on', '2017-04-12 03:35:10', '2017-04-12 03:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment_procedures`
--

CREATE TABLE `recruitment_procedures` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `achievers`
--
ALTER TABLE `achievers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `corporate_fields`
--
ALTER TABLE `corporate_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `curr_demands`
--
ALTER TABLE `curr_demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `curr_demand_imgs`
--
ALTER TABLE `curr_demand_imgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `online_forms`
--
ALTER TABLE `online_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `overseas_clients`
--
ALTER TABLE `overseas_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pasa_carousels`
--
ALTER TABLE `pasa_carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `recruitment_procedures`
--
ALTER TABLE `recruitment_procedures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
