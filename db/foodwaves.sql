-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2016 at 10:11 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodwaves`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_parent` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `is_parent`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Soups', 0, 'Content', '0000-00-00 00:00:00', '2016-01-01 06:39:10'),
(2, 'Sandwiches', 0, 'Sandwiches', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Fast Food', 0, 'Fast Food', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Vegetables', 0, 'Vegetables', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Fruits', 0, 'Fruits', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Beans', 0, 'Beans', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Salads‎', 0, 'Salads‎', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Chinese', 0, 'Chinese', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'South Indian', 0, 'South Indian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Leafy Veg', 0, 'Leafy Veg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Paratha', 0, 'Paratha', '2015-12-23 17:43:59', '2016-01-05 19:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `type` enum('product','category') NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `item_id`, `type`, `name`, `created_date`) VALUES
(1, 13, 'category', 'Chrysanthemum.jpg', '2015-12-18 18:18:44'),
(2, 13, 'category', 'Desert.jpg', '2015-12-18 18:18:44'),
(3, 13, 'category', 'Hydrangeas.jpg', '2015-12-18 18:18:44'),
(4, 13, 'category', 'Jellyfish.jpg', '2015-12-18 18:18:44'),
(5, 14, 'category', 'Chrysanthemum.jpg', '2015-12-18 18:30:32'),
(6, 14, 'category', 'Desert.jpg', '2015-12-18 18:30:32'),
(7, 14, 'category', 'Hydrangeas.jpg', '2015-12-18 18:30:32'),
(8, 14, 'category', 'Jellyfish.jpg', '2015-12-18 18:30:32'),
(9, 15, 'category', 'Lighthouse.jpg', '2015-12-18 19:27:04'),
(10, 15, 'category', 'Koala.jpg', '2015-12-18 19:27:04'),
(11, 16, 'category', 'Koala.jpg', '2015-12-18 19:27:15'),
(12, 16, 'category', 'Lighthouse.jpg', '2015-12-18 19:27:15'),
(13, 19, 'category', 'Chrysanthemum.jpg', '2015-12-20 18:14:19'),
(14, 20, 'category', 'Desert (1).jpg', '2015-12-22 18:33:17'),
(15, 20, 'category', 'Penguins.jpg', '2015-12-22 18:33:17'),
(22, 22, 'category', 'Desert.jpg', '2015-12-23 17:44:53'),
(23, 22, 'category', 'Penguins.jpg', '2015-12-23 17:44:53'),
(24, 22, 'category', 'Desert (3).jpg', '2015-12-24 19:24:59'),
(30, 22, 'category', 'Lighthouse (1).jpg', '2015-12-26 06:48:31'),
(31, 22, 'category', 'Tulips.jpg', '2015-12-26 06:49:51'),
(32, 22, 'category', 'Koala (1).jpg', '2015-12-26 06:51:24'),
(34, 23, 'category', 'Hydrangeas (2).jpg', '2015-12-26 07:03:58'),
(38, 11, 'product', 'Chrysanthemum.jpg', '2015-12-26 13:58:12'),
(39, 11, 'product', 'Desert.jpg', '2015-12-26 13:58:12'),
(41, 12, 'product', 'Hydrangeas.jpg', '2015-12-26 14:00:44'),
(42, 12, 'product', 'Jellyfish (1).jpg', '2015-12-26 14:00:44'),
(43, 12, 'product', 'Koala.jpg', '2015-12-26 14:00:44'),
(44, 12, 'product', 'Lighthouse (1).jpg', '2015-12-26 14:00:44'),
(50, 13, 'product', 'Desert (2).jpg', '2015-12-26 18:25:37'),
(51, 13, 'product', 'Hydrangeas (1).jpg', '2015-12-26 18:25:37'),
(52, 13, 'product', 'Lighthouse (3).jpg', '2015-12-26 18:28:30'),
(54, 14, 'product', 'Tulips (1).jpg', '2015-12-26 18:37:47'),
(55, 14, 'product', 'Lighthouse (4).jpg', '2015-12-26 18:38:09'),
(56, 27, 'category', 'Penguins (2).jpg', '2015-12-27 11:04:36'),
(57, 27, 'category', 'Jellyfish (1).jpg', '2015-12-27 11:04:36'),
(58, 27, 'category', 'Tulips (1).jpg', '2015-12-27 11:04:36'),
(59, 15, 'product', 'Lighthouse (5).jpg', '2015-12-27 11:36:04'),
(60, 16, 'product', 'Lighthouse (6).jpg', '2015-12-27 11:53:49'),
(61, 1, 'category', 'p1 (1).jpg', '2016-01-05 19:12:21'),
(62, 2, 'category', 'p2.jpg', '2016-01-05 19:12:47'),
(63, 3, 'category', 'p3.jpg', '2016-01-05 19:12:56'),
(64, 4, 'category', 'p4.jpg', '2016-01-05 19:13:15'),
(65, 5, 'category', 'p5.jpg', '2016-01-05 19:13:22'),
(66, 6, 'category', 'p6.jpg', '2016-01-05 19:13:35'),
(67, 7, 'category', 'p7.jpg', '2016-01-05 19:13:45'),
(68, 8, 'category', 'p8.jpg', '2016-01-05 19:13:56'),
(69, 9, 'category', 'p9.jpg', '2016-01-05 19:14:05'),
(70, 21, 'category', 'p11.jpg', '2016-01-05 19:15:39'),
(71, 11, 'category', 'p12.jpg', '2016-01-05 19:16:03'),
(72, 1, 'product', 'p2.jpg', '2016-01-05 20:14:32'),
(73, 2, 'product', 'p3.jpg', '2016-01-05 20:16:08'),
(74, 4, 'product', 'p6.jpg', '2016-01-05 20:22:45'),
(75, 5, 'product', 'p8.jpg', '2016-01-05 20:23:05'),
(76, 6, 'product', 'p10.jpg', '2016-01-05 20:23:24'),
(77, 2, 'product', 'p6.jpg', '2016-01-05 20:22:45'),
(78, 3, 'product', 'p6.jpg', '2016-01-05 20:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_13_080001_create_category_table', 1),
('2015_12_13_084743_create_product_table', 2),
('2015_12_13_090601_create_category_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `content`, `created_date`, `modified_date`) VALUES
(4, 'dsada sdad ads', '<p>dsdsada dsds dad</p>\r\n', '2015-12-26 20:11:55', '2015-12-26 20:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `full_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `is_stock` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `is_enable` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `user_id`, `name`, `short_description`, `full_description`, `price`, `is_stock`, `is_enable`, `created_at`, `updated_at`) VALUES
(1, 1, 'Retis lapen casen', '<p>Quick content goes here..</p>\r\n', '<p>Product description goes here....</p>\r\n', 232, '1', '1', '2016-01-05 20:14:32', '2016-01-05 20:14:32'),
(2, 1, 'Retis lapen casen', '<p>short content</p>\r\n', '<p>product description</p>\r\n', 12, '1', '1', '2016-01-05 20:16:08', '2016-01-05 20:16:08'),
(3, 1, 'Retis lapen casen', '<p>short description</p>\r\n', '<p>product description</p>\r\n', 12, '1', '1', '2016-01-05 20:16:51', '2016-01-05 20:16:51'),
(4, 1, 'Retis lapen casen', '<p>Short description</p>\r\n', '<p>Product description</p>\r\n', 123, '1', '1', '2016-01-05 20:22:45', '2016-01-05 20:22:45'),
(5, 1, 'Retis lapen casen', '<p>dsad</p>\r\n', '<p>dad</p>\r\n', 12, '1', '1', '2016-01-05 20:23:05', '2016-01-05 20:23:05'),
(6, 1, 'Retis lapen casen', '<p>da</p>\r\n', '<p>dada</p>\r\n', 22, '1', '1', '2016-01-05 20:23:24', '2016-01-05 20:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `pro_id`, `cat_id`) VALUES
(1, 12, 2),
(2, 12, 4),
(3, 12, 5),
(23, 13, 2),
(24, 13, 3),
(25, 13, 4),
(26, 13, 5),
(33, 14, 3),
(34, 14, 4),
(35, 15, 1),
(36, 16, 2),
(37, 16, 3),
(38, 1, 1),
(39, 2, 2),
(40, 3, 3),
(41, 4, 4),
(42, 5, 3),
(43, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `pro_id`, `type`) VALUES
(1, 16, 'breakfast'),
(2, 16, 'snacks'),
(3, 1, 'breakfast'),
(4, 1, 'lunch'),
(5, 2, 'breakfast'),
(6, 3, 'lunch'),
(7, 4, 'dinner'),
(8, 5, 'lunch'),
(9, 6, 'snacks');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` set('customer','client','admin') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstName`, `lastName`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rihan', '', '', 'rihan@gmail.com', '$2y$10$lsPTWfUa4AjQyvdzJ8wFL./Nki41u9ZODf.K5N46p1xAFa4zMRvYq', 'admin', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Fsfddda', '', '', 'rihandsfsfansari@mobiloitte.com', '$2y$10$I0.uP2Iz29Ilig/RXip6Y..ngTHG/38oJJmS4Ex3fUP0mkeZdORKe', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'asad', '', '', 'classicalrehan@gmail.com', '$2y$10$kB2CjbJOQYzb.R.YLjgxMO94yM1WcnIkAGQ4fTCqqWIqJGtMtO4K.', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'rihan update', '', '', 'rihasan.ansari@mobiloitte.com', '$2y$10$1OmORHwp2yoFtGBbXttnIuIZHLdAd76PmDIiDzcLQZl6kdKUW1Gu.', 'client', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'testing', '', '', 'dsda@gmail.com', '$2y$10$JVBBHHM6lsS1CyvQbnLdzuTwgfRS000UoIRrqs/ZhwtbuHmVBB.da', 'customer', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'dsa', 'da', 'da', 'rihan.ansdsadari@gmail.com', '$2y$10$MzYt9Y5ekAqNY.KjtnUC/OgmSodWMi3Blq0igaHBw.0HHBIRktWWK', 'customer', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '', 'ritesh', 'pathak', 'lifeisatrack@gmail.com', '$2y$10$4LR4ao.AVi5JGqHt36Q4wOcupjv72igPEww7SPtb3YhYcT2pbKM6a', 'customer', 'YxKeGVQa7OSYcosfRveqPFWn4WJztZpvy89tV6XQyH21qwE55BFPsmG3LDTM', '0000-00-00 00:00:00', '2016-01-22 14:42:43');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
