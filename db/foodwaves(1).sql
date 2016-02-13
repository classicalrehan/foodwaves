-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2016 at 10:50 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodwaves`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pro_id`, `price`, `qty`, `user_id`, `datetime`, `ip`) VALUES
(10, 3, 12, 8, 1, '2016-02-06 10:31:08', '::1'),
(11, 4, 123, 5, 1, '2016-02-06 10:31:16', '::1'),
(12, 5, 12, 4, 1, '2016-02-06 10:31:20', '::1'),
(13, 7, 12, 5, 1, '2016-02-11 19:21:38', '::1'),
(14, 8, 30, 3, 1, '2016-02-12 19:25:06', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_parent` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `is_parent`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast', 'breakfast', 0, 'breakfast', '2016-02-07 06:38:34', '2016-02-07 07:27:26'),
(2, 'Paratha', 'paratha', 1, 'Yummy Paratha', '2016-02-07 06:51:15', '2016-02-07 07:26:55'),
(3, 'Sandwiche', 'sandwiche', 1, 'Sandwiche', '2016-02-07 07:03:20', '2016-02-07 07:27:06'),
(4, 'Lunch', 'lunch', 0, 'Lunch', '2016-02-07 07:25:26', '2016-02-07 07:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('product','category') NOT NULL,
  `name` varchar(255) NOT NULL,
  `baseimage` enum('0','1') NOT NULL,
  `smallimage` enum('0','1') NOT NULL,
  `thumbimage` enum('0','1') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `item_id`, `type`, `name`, `baseimage`, `smallimage`, `thumbimage`, `created_date`) VALUES
(1, 13, 'category', 'Chrysanthemum.jpg', '0', '0', '0', '2015-12-18 18:18:44'),
(2, 13, 'category', 'Desert.jpg', '0', '0', '0', '2015-12-18 18:18:44'),
(3, 13, 'category', 'Hydrangeas.jpg', '0', '0', '0', '2015-12-18 18:18:44'),
(4, 13, 'category', 'Jellyfish.jpg', '0', '0', '0', '2015-12-18 18:18:44'),
(5, 14, 'category', 'Chrysanthemum.jpg', '0', '0', '0', '2015-12-18 18:30:32'),
(6, 14, 'category', 'Desert.jpg', '0', '0', '0', '2015-12-18 18:30:32'),
(7, 14, 'category', 'Hydrangeas.jpg', '0', '0', '0', '2015-12-18 18:30:32'),
(8, 14, 'category', 'Jellyfish.jpg', '0', '0', '0', '2015-12-18 18:30:32'),
(9, 15, 'category', 'Lighthouse.jpg', '0', '0', '0', '2015-12-18 19:27:04'),
(10, 15, 'category', 'Koala.jpg', '0', '0', '0', '2015-12-18 19:27:04'),
(11, 16, 'category', 'Koala.jpg', '0', '0', '0', '2015-12-18 19:27:15'),
(12, 16, 'category', 'Lighthouse.jpg', '0', '0', '0', '2015-12-18 19:27:15'),
(13, 19, 'category', 'Chrysanthemum.jpg', '0', '0', '0', '2015-12-20 18:14:19'),
(14, 20, 'category', 'Desert (1).jpg', '0', '0', '0', '2015-12-22 18:33:17'),
(15, 20, 'category', 'Penguins.jpg', '0', '0', '0', '2015-12-22 18:33:17'),
(22, 22, 'category', 'Desert.jpg', '0', '0', '0', '2015-12-23 17:44:53'),
(23, 22, 'category', 'Penguins.jpg', '0', '0', '0', '2015-12-23 17:44:53'),
(24, 22, 'category', 'Desert (3).jpg', '0', '0', '0', '2015-12-24 19:24:59'),
(30, 22, 'category', 'Lighthouse (1).jpg', '0', '0', '0', '2015-12-26 06:48:31'),
(31, 22, 'category', 'Tulips.jpg', '0', '0', '0', '2015-12-26 06:49:51'),
(32, 22, 'category', 'Koala (1).jpg', '0', '0', '0', '2015-12-26 06:51:24'),
(34, 23, 'category', 'Hydrangeas (2).jpg', '0', '0', '0', '2015-12-26 07:03:58'),
(56, 27, 'category', 'Penguins (2).jpg', '0', '0', '0', '2015-12-27 11:04:36'),
(57, 27, 'category', 'Jellyfish (1).jpg', '0', '0', '0', '2015-12-27 11:04:36'),
(58, 27, 'category', 'Tulips (1).jpg', '0', '0', '0', '2015-12-27 11:04:36'),
(60, 16, 'product', 'Lighthouse (6).jpg', '0', '0', '0', '2015-12-27 11:53:49'),
(62, 2, 'category', 'p2.jpg', '0', '0', '0', '2016-01-05 19:12:47'),
(63, 3, 'category', 'p3.jpg', '0', '0', '0', '2016-01-05 19:12:56'),
(64, 4, 'category', 'p4.jpg', '0', '0', '0', '2016-01-05 19:13:15'),
(65, 5, 'category', 'p5.jpg', '0', '0', '0', '2016-01-05 19:13:22'),
(66, 6, 'category', 'p6.jpg', '0', '0', '0', '2016-01-05 19:13:35'),
(67, 7, 'category', 'p7.jpg', '0', '0', '0', '2016-01-05 19:13:45'),
(68, 8, 'category', 'p8.jpg', '0', '0', '0', '2016-01-05 19:13:56'),
(69, 9, 'category', 'p9.jpg', '0', '0', '0', '2016-01-05 19:14:05'),
(70, 21, 'category', 'p11.jpg', '0', '0', '0', '2016-01-05 19:15:39'),
(71, 11, 'category', 'p12.jpg', '0', '0', '0', '2016-01-05 19:16:03'),
(72, 1, 'product', 'p2.jpg', '0', '0', '0', '2016-01-05 20:14:32'),
(73, 2, 'product', 'p3.jpg', '0', '0', '0', '2016-01-05 20:16:08'),
(74, 4, 'product', 'p6.jpg', '0', '0', '0', '2016-01-05 20:22:45'),
(75, 5, 'product', 'p8.jpg', '0', '0', '0', '2016-01-05 20:23:05'),
(76, 6, 'product', 'p10.jpg', '0', '0', '0', '2016-01-05 20:23:24'),
(77, 2, 'product', 'p6.jpg', '0', '0', '0', '2016-01-05 20:22:45'),
(78, 3, 'product', 'p6.jpg', '0', '0', '0', '2016-01-05 20:22:45'),
(79, 1, 'category', 'breakfast.png', '0', '0', '0', '2016-02-07 06:38:34'),
(80, 2, 'category', 'paratha.jpg', '0', '0', '0', '2016-02-07 06:51:15'),
(87, 3, 'category', 'sandwich.jpg', '0', '0', '0', '2016-02-07 07:03:20'),
(92, 4, 'category', 'lunch.jpg', '0', '0', '0', '2016-02-07 07:25:26'),
(93, 17, 'product', '381ed8af-c552-4fc7-9f30-eeca8676adf1 (2).png', '1', '1', '1', '2016-02-07 16:52:00'),
(94, 18, 'product', '381ed8af-c552-4fc7-9f30-eeca8676adf1 (2).png', '', '', '', '2016-02-07 16:52:23'),
(95, 18, 'product', 'blog-img1.jpg', '', '', '', '2016-02-07 16:52:23'),
(96, 18, 'product', 'blog-img3.jpg', '', '', '', '2016-02-07 16:52:23'),
(97, 19, 'product', '381ed8af-c552-4fc7-9f30-eeca8676adf1 (3).png', '1', '1', '1', '2016-02-07 16:54:41'),
(98, 19, 'product', '404-img (1).png', '0', '0', '0', '2016-02-07 16:54:41'),
(99, 19, 'product', 'aaloo paratha (3).jpg', '0', '0', '0', '2016-02-07 16:54:41'),
(100, 20, 'product', '381ed8af-c552-4fc7-9f30-eeca8676adf1 (5).png', '1', '1', '1', '2016-02-07 16:56:50'),
(101, 20, 'product', '404-img (3).png', '0', '0', '0', '2016-02-07 16:56:50'),
(102, 20, 'product', 'aaloo paratha (5).jpg', '0', '0', '0', '2016-02-07 16:56:50'),
(103, 63, 'product', '381ed8af-c552-4fc7-9f30-eeca8676adf1 (24).png', '1', '0', '0', '2016-02-07 18:17:28'),
(104, 63, 'product', '404-img (22).png', '0', '1', '0', '2016-02-07 18:17:28'),
(105, 63, 'product', 'aaloo paratha (21).jpg', '0', '0', '1', '2016-02-07 18:17:28'),
(157, 7, 'product', 'aaloo paratha.jpg', '0', '0', '0', '2016-02-12 18:58:21'),
(158, 7, 'product', 'aaloo paratha.jpg', '1', '1', '0', '2016-02-12 18:58:21'),
(159, 7, 'product', 'aaloo paratha.jpg', '0', '0', '1', '2016-02-12 18:58:21'),
(160, 8, 'product', 'aloo-pyaj-paratha.jpg', '1', '1', '1', '2016-02-12 19:02:20'),
(161, 9, 'product', 'mix-paratha.jpg', '1', '1', '1', '2016-02-12 19:03:12'),
(162, 15, 'product', 'veg-grilled-sandwich.jpg', '1', '1', '1', '2016-02-12 19:03:45'),
(163, 14, 'product', 'chease-sandwich.jpg', '1', '1', '1', '2016-02-12 19:04:05'),
(164, 13, 'product', 'potato-sandwich.jpg', '1', '1', '1', '2016-02-12 19:04:17'),
(165, 12, 'product', 'gobhi-paratha.jpg', '1', '1', '1', '2016-02-12 19:04:34'),
(167, 10, 'product', 'onion-paratha.jpg', '1', '1', '1', '2016-02-12 19:05:08'),
(168, 11, 'product', 'mooli-paratha.jpg', '1', '1', '1', '2016-02-12 19:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
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
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `totalamount` double NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`id`, `orderid`, `itemid`, `price`, `qty`, `totalamount`, `status`) VALUES
(1, 7, 2, 12, 50, 600, 'Pending'),
(2, 7, 3, 12, 3, 36, 'Pending'),
(3, 7, 4, 123, 4, 492, 'Pending'),
(4, 8, 2, 12, 50, 600, 'Pending'),
(5, 8, 3, 12, 3, 36, 'Pending'),
(6, 8, 4, 123, 4, 492, 'Pending'),
(7, 9, 2, 12, 50, 600, 'Pending'),
(8, 9, 3, 12, 3, 36, 'Pending'),
(9, 9, 4, 123, 4, 492, 'Pending'),
(10, 10, 3, 12, 8, 96, 'Pending'),
(11, 10, 4, 123, 4, 492, 'Pending'),
(12, 10, 5, 12, 4, 48, 'Pending'),
(13, 11, 3, 12, 8, 96, 'Pending'),
(14, 11, 4, 123, 4, 492, 'Pending'),
(15, 11, 5, 12, 4, 48, 'Pending'),
(16, 12, 3, 12, 8, 96, 'Pending'),
(17, 12, 4, 123, 4, 492, 'Pending'),
(18, 12, 5, 12, 4, 48, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `paymentMethod` varchar(20) NOT NULL,
  `shippingCharge` double NOT NULL,
  `amount` double NOT NULL,
  `tax` double NOT NULL,
  `totalamount` double NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifieddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Pending','Processing','Complete','Cancelled','Closed','Hold') NOT NULL COMMENT 'Pending:  Pending PayPal:  Processing:  Complete:  Cancelled:  Closed:  On Hold: '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user`, `firstName`, `lastName`, `email`, `address`, `city`, `zip`, `telephone`, `mobile`, `paymentMethod`, `shippingCharge`, `amount`, `tax`, `totalamount`, `datetime`, `modifieddate`, `status`) VALUES
(1, 1, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'cod', 0, 0, 0, 0, '2016-02-03 19:09:26', '2016-02-04 16:30:28', ''),
(2, 1, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'paypal', 0, 0, 0, 0, '2016-02-03 19:46:40', '2016-02-04 16:30:48', 'Pending'),
(3, 1, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'paypal', 0, 0, 0, 0, '2016-02-03 19:55:09', '2016-02-04 16:30:52', 'Pending'),
(4, 0, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'cod', 0, 0, 0, 0, '2016-02-05 17:12:23', '2016-02-05 17:12:23', 'Pending'),
(5, 0, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'paypal', 0, 0, 0, 0, '2016-02-06 08:39:08', '2016-02-06 08:39:08', 'Pending'),
(6, 0, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'paypal', 0, 0, 0, 0, '2016-02-06 08:49:32', '2016-02-06 08:49:32', 'Pending'),
(7, 0, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'paypal', 0, 0, 0, 0, '2016-02-06 08:50:26', '2016-02-06 08:50:26', 'Pending'),
(8, 0, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'paypal', 0, 0, 0, 0, '2016-02-06 09:07:10', '2016-02-06 09:07:10', 'Pending'),
(9, 0, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'paypal', 0, 0, 0, 0, '2016-02-06 09:07:26', '2016-02-06 09:07:26', 'Pending'),
(10, 0, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'paypal', 0, 0, 0, 0, '2016-02-06 10:32:11', '2016-02-06 10:32:11', 'Pending'),
(11, 1, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'cod', 0, 0, 0, 0, '2016-02-06 10:36:00', '2016-02-06 10:36:00', 'Pending'),
(12, 1, 'mohd', 'mohd', '', 'D 92 New Ashok Nagar', 'New Delhi', '110096', '1234567890', '1234567890', 'paypal', 0, 636, 0, 636, '2016-02-06 10:40:57', '2016-02-06 10:40:57', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `content`, `created_date`, `modified_date`) VALUES
(4, 'dsada sdad ads', '<p>dsdsada dsds dad</p>\r\n', '2015-12-26 20:11:55', '2015-12-26 20:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `full_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `is_stock` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `is_enable` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `user_id`, `name`, `slug`, `short_description`, `full_description`, `price`, `is_stock`, `is_enable`, `created_at`, `updated_at`) VALUES
(7, 1, 'Aaloo Paratha', 'aaloo-paratha', '', '', 12, '1', '1', '2016-02-07 06:54:28', '2016-02-07 07:34:11'),
(8, 1, 'Aaloo Pyaj Paratha', 'aaloo-pyaj-paratha', '', '', 30, '1', '1', '2016-02-07 06:56:41', '2016-02-07 07:34:01'),
(9, 1, 'Mix Paratha', 'mix-paratha', '', '', 40, '1', '1', '2016-02-07 06:57:38', '2016-02-07 07:34:34'),
(10, 1, 'Onion Paratha', 'onion-paratha', '', '', 50, '1', '1', '2016-02-07 06:59:02', '2016-02-07 07:34:24'),
(11, 1, 'Moooli Paratha', 'moooli-paratha', '', '', 60, '1', '1', '2016-02-07 07:00:01', '2016-02-07 07:33:52'),
(12, 1, 'Gobi Paratha', 'gobi-paratha', '', '', 60, '1', '1', '2016-02-07 07:01:21', '2016-02-07 07:33:37'),
(13, 1, 'Potaoto Sandwich', 'potaoto-sandwich', '', '', 23, '1', '1', '2016-02-07 07:04:28', '2016-02-07 07:33:18'),
(14, 1, 'Cheese Sandwich', 'cheese-sandwich', '', '', 23, '1', '1', '2016-02-07 07:07:41', '2016-02-07 07:33:09'),
(15, 1, 'Veg Grilled Sandwich', 'veg-grilled-sandwich', '', '', 33, '1', '1', '2016-02-07 07:08:56', '2016-02-07 07:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `pro_id`, `cat_id`) VALUES
(95, 13, 1),
(96, 13, 3),
(107, 7, 1),
(108, 7, 2),
(109, 7, 1),
(110, 7, 2),
(111, 7, 1),
(112, 7, 2),
(113, 7, 1),
(114, 7, 2),
(115, 7, 1),
(116, 7, 2),
(117, 7, 1),
(118, 7, 2),
(119, 8, 1),
(120, 8, 2),
(121, 9, 1),
(122, 9, 2),
(123, 15, 1),
(124, 15, 3),
(125, 14, 1),
(126, 14, 2),
(127, 13, 1),
(128, 13, 3),
(129, 12, 1),
(130, 12, 2),
(131, 11, 1),
(132, 11, 2),
(133, 10, 1),
(134, 10, 2),
(135, 11, 1),
(136, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(9, 6, 'snacks'),
(10, 7, 'breakfast'),
(11, 8, 'breakfast'),
(12, 9, 'breakfast'),
(13, 10, 'breakfast'),
(14, 11, 'breakfast'),
(15, 12, 'breakfast'),
(16, 13, 'breakfast'),
(17, 14, 'breakfast'),
(18, 15, 'breakfast'),
(19, 18, 'breakfast'),
(20, 19, 'breakfast'),
(21, 20, 'lunch'),
(22, 63, 'lunch');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `access_token_secret` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` set('customer','client','admin') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstName`, `lastName`, `email`, `photo`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rihan', '', '', 'rihan@gmail.com', '', '$2y$10$lsPTWfUa4AjQyvdzJ8wFL./Nki41u9ZODf.K5N46p1xAFa4zMRvYq', 'admin', '9XD0JP9LRUdlpIrsTj7AH2sRTI1BMmtgLoMU00qrXLhWZ99t47eCyIWnQbVh', '0000-00-00 00:00:00', '2016-02-13 04:00:34'),
(10, 'Fsfddda', '', '', 'rihandsfsfansari@mobiloitte.com', '', '$2y$10$I0.uP2Iz29Ilig/RXip6Y..ngTHG/38oJJmS4Ex3fUP0mkeZdORKe', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'asad', '', '', 'classicalrehan@gmail.com', '', '$2y$10$kB2CjbJOQYzb.R.YLjgxMO94yM1WcnIkAGQ4fTCqqWIqJGtMtO4K.', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'rihan update', '', '', 'rihasan.ansari@mobiloitte.com', '', '$2y$10$1OmORHwp2yoFtGBbXttnIuIZHLdAd76PmDIiDzcLQZl6kdKUW1Gu.', 'client', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'testing', '', '', 'dsda@gmail.com', '', '$2y$10$JVBBHHM6lsS1CyvQbnLdzuTwgfRS000UoIRrqs/ZhwtbuHmVBB.da', 'customer', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'dsa', 'da', 'da', 'rihan.ansdsadari@gmail.com', '', '$2y$10$MzYt9Y5ekAqNY.KjtnUC/OgmSodWMi3Blq0igaHBw.0HHBIRktWWK', 'customer', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
