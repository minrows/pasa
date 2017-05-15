-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 12:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
(1, 'Company Profile', '<p>We started our journey in this business from the year 1998; we are one of the Nepal&#39;s best Recruiting Agencies. The number of years of experience and knowledge gives us the confident to say that, &quot;we outsource the best human resources&quot;. We have been providing expert and unparalleled value added recruitment services to our clients across the world who are looking for professional and smart candidates to excel in their business. We are happy to have satisfied clients with us from a long time and we feel proud and honored to give the best to our precious clients.</p>\r\n\r\n<hr />\r\n<pre>\r\n<div class="row hidden-xs hidden-sm">\r\n<div class="col-lg-5 col-md-5">\r\n<strong>Name :</strong> Pasa International Pvt. Ltd.\r\n<strong>Address :</strong> Kupondole, Lalitpur, Nepal\r\n<strong>Established :</strong> 1998 September 24\r\n<strong>Govt, License No. :</strong> 116/055/056\r\n<strong>Registered No. :</strong> 9222/055/056\r\n<strong>Tel :</strong> +977-1-5554499, 55539331, 5553380, 5553342\r\n<strong>Fax :</strong> +977-1-5538440\r\n<strong>Email :</strong> <a href="mailto:pimt@pasainternational.com.np" target="_blank">pimt@pasainternational.com.np</a>\r\n      : <a href="mailto:pimt@pasa.wlink.com.np" target="_blank">pimt@pasa.wlink.com.np</a>\r\n<strong>Website :</strong> <a href="http://www.pasainternational.com.np/" target="_blank">http://www.pasainternational.com.np</a>\r\n</div>\r\n\r\n<div class="col-lg-6 col-md-6">\r\n<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.947025855255!2d85.31182412935517!3d27.687213511414598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbfb56d2f462c0c9!2sPASA+INTERNATIONAL+PVT.+LTD!5e0!3m2!1sen!2snp!4v1491990754177" width="600" height="250" frameborder="0" style="border:0; margin-top:-50px" allowfullscreen></iframe>\r\n</div>\r\n</div>\r\n\r\n<div class="row hidden-lg hidden-md">\r\n<div class="col-sm-12 col-xs-12">\r\n<strong>Name :</strong> Pasa International Pvt. Ltd.\r\n<strong>Address :</strong> Kupondole, Lalitpur, Nepal\r\n<strong>Established :</strong> 1998 September 24\r\n<strong>Govt, License No. :</strong> 116/055/056\r\n<strong>Registered No. :</strong> 9222/055/056\r\n<strong>Tel :</strong> +977-1-5554499, 55539331, 5553380, 5553342\r\n<strong>Fax :</strong> +977-1-5538440\r\n<strong>Email :</strong> <a href="mailto:pimt@pasainternational.com.np" target="_blank">pimt@pasainternational.com.np</a>\r\n      : <a href="mailto:pimt@pasa.wlink.com.np" target="_blank">pimt@pasa.wlink.com.np</a>\r\n<strong>Website :</strong> <a href="http://www.pasainternational.com.np/" target="_blank">http://www.pasainternational.com.np</a>\r\n</div>\r\n\r\n<div class="col-sm-12 col-xs-12">\r\n<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.947025855255!2d85.31182412935517!3d27.687213511414598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbfb56d2f462c0c9!2sPASA+INTERNATIONAL+PVT.+LTD!5e0!3m2!1sen!2snp!4v1491990754177" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>\r\n</div>\r\n</div>\r\n</pre>', NULL, 'on', '2017-04-20 18:15:00', '2017-04-20 18:15:00'),
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
(1, 'Rijesh', 'craaabby@gmail.com', '$2y$10$Pz80pnjBhIFYpNzO6EabrOkcckALiSu5yA8mXxPsgtp7rIYQON74e', 'neDslzoKb0q1z9gPmf3nTGcWVQdR4kajAOiehZf4lEe9UHTiQrJOx0NaXmbA', '2017-04-23 18:15:00', '2017-04-23 18:15:00');

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
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate_fields`
--

INSERT INTO `corporate_fields` (`id`, `title`, `description`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Local Construction Companies', '<p>Construction companies in our process of recruitment deals with the onsite trade tests as well as one of the source of collection of potential skilled workers. The following are the companies those are currently existed in our association:</p>', 'on', '2017-05-09 00:15:32', '2017-05-09 00:15:32'),
(2, 'Technical institutes (Welder, Plumber, Mason, Electrician, Scaffolders, Carpenters etc.)', '<p>These are the vocational training centres where the candidates are being tested and provided necessary trainings on their respective fields.</p>', 'on', '2017-05-09 00:16:28', '2017-05-09 00:16:28'),
(3, 'Computer Institutes', '<p>Computer institutes are one of the associated partners which works on the field of generating administrative staffs with IT skills ranging from basic to advanced level.</p>', 'on', '2017-05-09 00:17:02', '2017-05-09 00:17:02'),
(4, 'Electro Mechanical Engineering Centres', '<p>Likewise of Technical institutes the organization is dedicated in electro mechanical engineering fields to produce skills on the mentioned subject.&nbsp;<br />\r\n&nbsp;</p>', 'off', '2017-05-09 00:17:19', '2017-05-09 00:34:13'),
(5, 'Medical Centres', '<p>The medical centres provide services on detail health examinations of the candidates whether they are medically fit or not as per the required job in demands.</p>', 'on', '2017-05-09 00:17:38', '2017-05-09 00:17:38'),
(6, 'Ticketing and Travel Agencies', '<p>Ticketing and Travel Agencies looks after on providing best alternatives of air routes and the corresponding tickets to fly candidates in their corresponding destinations.</p>', 'on', '2017-05-09 00:17:57', '2017-05-09 00:17:57'),
(7, 'Community Based Organizations', '<p>These are the rural based organizations which have been in the programme of skill exchange. These organizations are also the source of candidates.&nbsp;<br />\r\n&nbsp;</p>', 'on', '2017-05-09 00:18:24', '2017-05-09 00:18:24');

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

--
-- Dumping data for table `corporate_members`
--

INSERT INTO `corporate_members` (`corporate_field_id`, `id`, `title`, `location`, `img`, `state`, `created_at`, `updated_at`) VALUES
(1, 1, 'Atal Builders', 'Chakupat, Lalitpur, Nepal', 'corporate_member/o8NImnqIdh7CvWknkKSwS1qOfSbn28jUUdrM2UbU.png', 'on', '2017-05-09 00:26:36', '2017-05-09 00:26:36'),
(1, 2, 'Sura Constructions', 'Nakabahil, Lalitpur, Nepal', 'corporate_member/mlHzaZDdPLHCvBGvJzS2jOpFz1BUAkUyx1qc6Mb2.gif', 'on', '2017-05-09 00:28:55', '2017-05-09 00:28:55'),
(1, 3, 'Sea Links Travels and Tours P. Ltd.', 'Kamaladi, Kathmandu, Nepal', 'corporate_member/oyhOqYIBBVdUEuJkjVAc3Je65lPlRwk5vbcmlzGE.gif', 'on', '2017-05-09 01:21:28', '2017-05-09 01:21:28'),
(2, 1, 'South Asian School of Technology', 'Kalanki, Kathmandu, Nepal', 'corporate_member/4xrSGjAMxoHFJuj8u5uBL2YQBSBdUnV5DwZlIKiY.gif', 'on', '2017-05-09 00:29:48', '2017-05-09 00:29:48'),
(3, 1, 'Seven Educational Consultancy', NULL, 'corporate_member/ABZdvT4bDav12mka92r92ZqOTprmmLVe0jHYORhb.png', 'on', '2017-05-09 00:33:27', '2017-05-09 00:33:27'),
(5, 1, 'J.M. Medical Center', NULL, 'corporate_member/FwL0Jlga7uf8a4Vm64E0ArGwssYZjAfPY65mMY5B.gif', 'on', '2017-05-09 01:18:51', '2017-05-09 01:18:51'),
(5, 2, 'Purnima Medical & Research Centre', NULL, 'corporate_member/aqzWlqs3R9vCQK75YU0OxzgkqMz82NmXZkeyo1Zv.gif', 'on', '2017-05-09 01:19:48', '2017-05-09 01:19:48'),
(5, 3, 'Universal Diagnostic Center', NULL, 'corporate_member/C1jTUL64lPq2lN020RaFxGo8beCHNb4fFZIw5jpS.gif', 'on', '2017-05-09 01:20:25', '2017-05-09 01:20:25'),
(6, 1, 'Air Arabia', 'Nepal', 'corporate_member/E9PS9oAkSoc3Ifgyxg3KYRMeBboAkDyGVYBJjUFy.gif', 'on', '2017-05-09 01:20:57', '2017-05-09 01:20:57'),
(7, 1, 'Small Farmers Cooperatives Ltd.', 'Nepal', 'corporate_member/VNrPgyYjrTzuNDUD7V99dejj1iGDby3FKsy9faMY.gif', 'on', '2017-05-09 01:21:58', '2017-05-09 01:21:58');

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
(1, 'Advanced Construction Technology Service (ACTS)', 'Assistant Technician', 25, 'Qatar', 'on', '2017-05-15 02:27:03', '2017-05-15 02:27:03'),
(2, 'Gulf Falcon', 'Assistant Stocker', 50, 'Qatar', 'on', '2017-05-15 02:27:27', '2017-05-15 02:27:27'),
(3, 'Gulf Falcon', 'Loading / Unloading Helper', 25, 'Qatar', 'on', '2017-05-15 02:27:51', '2017-05-15 02:27:51'),
(4, 'Gulf Falcon', 'Light Driver GCC', 10, 'Qatar', 'on', '2017-05-15 02:28:21', '2017-05-15 02:28:21'),
(5, 'Quality Manpower', 'Heavy Driver GCC', 5, 'Qatar', 'on', '2017-05-15 02:28:43', '2017-05-15 02:28:43'),
(6, 'Al Meera Super Market', 'Female Cashier', 50, 'Qatar', 'on', '2017-05-15 02:29:06', '2017-05-15 02:29:06'),
(7, 'Al Meera Super Market', 'Supervisor with GCC Experience', 15, 'Qatar', 'on', '2017-05-15 02:29:27', '2017-05-15 02:29:27'),
(8, 'Al Meera Super Market', 'Butcher GCC', 20, 'Qatar', 'on', '2017-05-15 02:30:05', '2017-05-15 02:30:05'),
(9, 'Ansar Group', 'Male Cleaner', 80, 'Bahrain', 'on', '2017-05-15 02:30:46', '2017-05-15 02:30:46'),
(10, 'Ansar Group', 'Security Lady', 10, 'U.A.E', 'on', '2017-05-15 02:31:20', '2017-05-15 02:31:20'),
(11, 'Ansar Group', 'Butcher', 10, 'Qatar', 'on', '2017-05-15 02:31:40', '2017-05-15 02:31:40');

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
(9, 'current_demand/FNqd6oD9VZvWMWmD2SbO24coCby8o1oJsAGEfPO1.jpeg', 'current_demand/FNqd6oD9VZvWMWmD2SbO24coCby8o1oJsAGEfPO1.jpeg', 'on', '2017-05-15 01:34:15', '2017-05-15 01:34:15'),
(10, 'current_demand/aGEs9McFz7t9jIQLfVVEVSyJSZQGQAtvW8mS0pOk.jpeg', 'current_demand/aGEs9McFz7t9jIQLfVVEVSyJSZQGQAtvW8mS0pOk.jpeg', 'on', '2017-05-15 01:34:26', '2017-05-15 01:34:26'),
(11, 'current_demand/TUVkev37XZA8j7nArxxQUopIoveDqMNsGWtckbVF.jpeg', 'current_demand/TUVkev37XZA8j7nArxxQUopIoveDqMNsGWtckbVF.jpeg', 'on', '2017-05-15 01:34:36', '2017-05-15 01:34:36'),
(12, 'current_demand/rf3wKjg0prSJjM9E18V7wgJOshpsNoNMynPRDpUw.jpeg', 'current_demand/rf3wKjg0prSJjM9E18V7wgJOshpsNoNMynPRDpUw.jpeg', 'on', '2017-05-15 01:34:50', '2017-05-15 01:34:50'),
(13, 'current_demand/fLkqqkdFx9KIzKjP5a6fN3nfGoOg8Hsppe8LpNjq.jpeg', 'current_demand/fLkqqkdFx9KIzKjP5a6fN3nfGoOg8Hsppe8LpNjq.jpeg', 'on', '2017-05-15 01:35:00', '2017-05-15 01:35:00'),
(14, 'current_demand/WZq2ulrjN9oBD0kriWzNRh01iaxbEQOk8Eb036OZ.jpeg', 'current_demand/WZq2ulrjN9oBD0kriWzNRh01iaxbEQOk8Eb036OZ.jpeg', 'on', '2017-05-15 01:35:11', '2017-05-15 01:35:11');

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
(8, 'b', 'b@gmail.com', '123', 'asdf', '2017-04-26 02:27:14', '2017-04-26 02:27:14'),
(9, 'kfjaslkdflk', 'klaksdfkjasdf@lfkasd.com', '5345345345345', 'hello pal', '2017-04-26 02:56:31', '2017-04-26 02:56:31'),
(10, 'test', 'test@gmail.com', '1234', 'testtest', '2017-05-15 01:32:12', '2017-05-15 01:32:12'),
(11, 'test2', 'test2@gmail.com', '9849454', 'asdasfasd', '2017-05-15 01:40:40', '2017-05-15 01:40:40');

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
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overseas_clients`
--

INSERT INTO `overseas_clients` (`id`, `title`, `country`, `img`, `state`, `created_at`, `updated_at`) VALUES
(10, 'Ansar Gallery', 'Baharain', 'overseas_client/usTCQzWwFgBrnr61oxkzs0AiHCQwAl6sWFg5mvUe.jpeg', 'on', '2017-05-02 00:53:28', '2017-05-09 04:11:30'),
(11, 'Power Point Electrical & Mechanical Works L.L.C.', 'UAE', 'overseas_client/vVhLLTPqgXuFD2sB1FUOYj4UuQOkp8j7ceQdbmTm.jpeg', 'on', '2017-05-02 00:53:54', '2017-05-09 04:17:05'),
(12, 'Abu Dhabi Coating Enterprises W.L.L.', 'UAE', 'overseas_client/TZwXfyzg7YNC7QVcmWkRONdQSlcc9uPXJoJ9qEaw.jpeg', 'on', '2017-05-02 00:54:21', '2017-05-09 04:15:44'),
(13, 'Can Gulf Technologies LLC', 'UAE', 'overseas_client/3Swzm55jUEGePrcf9Ev9nalplNMAIMfwsJfUwwgC.jpeg', 'on', '2017-05-02 00:54:38', '2017-05-09 04:15:57'),
(14, 'Emirates Leisure Retail', 'UAE', 'overseas_client/8K8o3wBB0NOiMoUAF3Ihn4b4MInvd9OVv0zIuwyq.jpeg', 'on', '2017-05-02 00:54:57', '2017-05-09 04:16:37'),
(15, 'Gyathi Construction LLC', 'UAE', 'overseas_client/a91LDgJ57y0sqCP5P1UHMVS2pFFQgThv11sq5peB.png', 'on', '2017-05-02 00:55:18', '2017-05-09 04:16:49'),
(17, 'DOHA CITY', 'Qatar', 'overseas_client/dwpziD4PKfroMbDfPu4HeeBZhA8B9JYIzaGy4um3.png', 'on', '2017-05-02 00:56:08', '2017-05-09 04:15:14'),
(18, 'ANSAR CITY', 'Qatar', 'overseas_client/6BpPbws7dHlsY4kQiWPgMNPwi9lUaVn1KOc4xYMT.png', 'on', '2017-05-02 00:56:26', '2017-05-09 04:11:44'),
(19, 'NEW WORLD COMPANY', 'Qatar', 'overseas_client/ITKOSxU7p2W4Q29bCh0d2pJ7vlzJHwVKCEspyuIn.jpeg', 'on', '2017-05-02 00:56:53', '2017-05-09 04:15:31'),
(20, 'Ansar Gallery', 'Qatar', 'overseas_client/bOhoFayzxOOPGmMIvBhG0heB83kJtRWn3PfFJVWg.jpeg', 'on', '2017-05-09 23:18:15', '2017-05-09 23:18:15'),
(21, 'Ansar Gallery Center', 'Qatar', NULL, 'on', '2017-05-09 23:20:16', '2017-05-09 23:20:16'),
(22, 'Ansar Real Estate Investment', 'Qatar', NULL, 'on', '2017-05-09 23:21:59', '2017-05-09 23:21:59'),
(23, 'Impex Marketing & Distribution Co.', 'Qatar', NULL, 'on', '2017-05-09 23:22:43', '2017-05-09 23:22:43'),
(24, 'Workshop New World Centre', 'Qatar', NULL, 'on', '2017-05-09 23:23:14', '2017-05-09 23:23:14'),
(25, 'Al-Ansari Novelty', 'Qatar', NULL, 'on', '2017-05-09 23:23:39', '2017-05-09 23:23:39'),
(26, 'New World Center', 'Qatar', 'overseas_client/Y1R0iREtM9fxmZGbokyfRcaGbVTePTcWZKDnLkj4.jpeg', 'on', '2017-05-09 23:24:22', '2017-05-09 23:24:22'),
(27, 'Al Meera Holding Company L.L.C', 'Qatar', NULL, 'on', '2017-05-09 23:25:21', '2017-05-09 23:25:21'),
(28, 'Al Meera Supermarkets Company S.P.C.', 'Qatar', NULL, 'on', '2017-05-09 23:25:52', '2017-05-09 23:25:52'),
(29, 'Al Meera Development Company L.L.C.', 'Qatar', NULL, 'on', '2017-05-09 23:26:18', '2017-05-09 23:26:18'),
(30, 'Qatar Market Company W.L.L.', 'Qatar', NULL, 'on', '2017-05-09 23:26:37', '2017-05-09 23:26:37'),
(31, 'Al Meera Bookstore S.P.C', 'Qatar', NULL, 'on', '2017-05-09 23:27:06', '2017-05-09 23:27:06'),
(32, 'Al Oumara Bakeries Company W.L.L', 'Qatar', 'overseas_client/Lonb5AFiejHFIbFXEfsCJelR5MccheUvskSUy6B8.jpeg', 'on', '2017-05-09 23:27:30', '2017-05-09 23:27:30'),
(33, 'Al Meera Consumer Goods Company Q.S.C.', 'Qatar', 'overseas_client/OxRkWVF2lC6V6f2D3IsiwnoHTPqKHA39qxto75Qk.jpeg', 'on', '2017-05-09 23:28:20', '2017-05-09 23:28:20'),
(34, 'Abdul Wahed Al-Ghanem Est. Decoration Br.', 'K.S.A', NULL, 'on', '2017-05-09 23:29:30', '2017-05-09 23:29:30'),
(35, 'Abdullah A. Al-Rashid Con''t. Est.', 'K.S.A', NULL, 'on', '2017-05-09 23:29:52', '2017-05-09 23:29:52'),
(36, 'Al-Ayuni Investment & Contracting Co.', 'K.S.A', 'overseas_client/6VEda57WSYKBL17tCAdDfuDzJrrEH5l738XcYUJd.png', 'on', '2017-05-09 23:30:09', '2017-05-09 23:30:09'),
(37, 'Al Jazeera Factory for Paints Co.', 'K.S.A', 'overseas_client/ucwrOpaxZCS5VqxVDZWGl6s1GK8d24ES4JFQCxkB.png', 'on', '2017-05-09 23:30:38', '2017-05-09 23:30:38'),
(38, 'Al-Shallal Center', 'K.S.A', NULL, 'on', '2017-05-09 23:31:04', '2017-05-09 23:31:04'),
(39, 'Beauty of House Wares & Gifts', 'K.S.A', NULL, 'on', '2017-05-09 23:31:25', '2017-05-09 23:31:25'),
(40, 'Heet Est. for Industry', 'K.S.A', NULL, 'on', '2017-05-09 23:31:50', '2017-05-09 23:31:50'),
(41, 'Industrial Machinery Est.', 'K.S.A', NULL, 'on', '2017-05-09 23:32:10', '2017-05-09 23:32:10'),
(42, 'Hayder M.S. Al-Jarash Contracting Est.', 'K.S.A', NULL, 'on', '2017-05-09 23:32:43', '2017-05-09 23:32:43'),
(43, 'Al Mukadam Building Cleaning & Security LLC', 'U.A.E', NULL, 'on', '2017-05-09 23:34:10', '2017-05-09 23:34:10'),
(44, 'International Market Group (For General Services)', 'U.A.E', 'overseas_client/L1AJ7ikhe6zpKgqsznafdMHF2rRoRu4wwZRrSk1U.jpeg', 'on', '2017-05-09 23:34:27', '2017-05-09 23:34:27'),
(45, 'Lu Lu Hypermarket', 'U.A.E', 'overseas_client/xsqcAGjOiEG2nzOqv8JMw6Zu4aetagMopoyD1AtY.png', 'on', '2017-05-09 23:34:42', '2017-05-09 23:34:42'),
(46, 'Marhaba Services', 'U.A.E', 'overseas_client/ZZUh1bbxjmHh5IcmkRVBUNtzo1lpX5M8s1qKyTDB.png', 'on', '2017-05-09 23:34:56', '2017-05-09 23:34:56'),
(47, 'National Catering Company L.L.C.', 'U.A.E', 'overseas_client/9UwMSPTevQfFZY1vBTtkVsbikXbjb4tQatpmr5VJ.jpeg', 'on', '2017-05-09 23:35:11', '2017-05-09 23:35:11'),
(48, 'Taisei Corporation', 'U.A.E', 'overseas_client/jre8PxE3wWrnSBP8aPxYNAkybf1jo52bBAP4DD6s.jpeg', 'on', '2017-05-09 23:35:26', '2017-05-09 23:35:26'),
(49, 'Tarfana Services L.L.C.', 'U.A.E', 'overseas_client/T0sd1h38V2QvOWEHzLlgpfAAEGi3vuqd77MX6gcd.jpeg', 'on', '2017-05-09 23:35:40', '2017-05-09 23:35:40');

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
(10, 'a', 'carousel/sl8rIQ0cC1QJrbmxnoV1LgbMapCgzOw3lc9swgE2.jpeg', 'on', '2017-05-15 03:48:56', '2017-05-15 03:48:56'),
(11, 'fasdf', 'carousel/YvRonjWjnOjR2B634UE8f2f1zSBE8Vsw05zHFweQ.jpeg', 'on', '2017-05-15 03:49:33', '2017-05-15 03:49:33'),
(13, 'fasdf', 'carousel/LRRWB98Jg5rd5tlliPU1KvHhHpXdMBTL3Lhp6UM5.jpeg', 'on', '2017-05-15 03:57:03', '2017-05-15 03:57:03'),
(14, 'asdfasfd', 'carousel/kS7WPZ8Kv0WgJTof6zZpqgGxrkzCnKBRaxmNRa2F.jpeg', 'on', '2017-05-15 03:57:14', '2017-05-15 03:57:14');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `curr_demands`
--
ALTER TABLE `curr_demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `curr_demand_imgs`
--
ALTER TABLE `curr_demand_imgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `pasa_carousels`
--
ALTER TABLE `pasa_carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `recruitment_procedures`
--
ALTER TABLE `recruitment_procedures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
