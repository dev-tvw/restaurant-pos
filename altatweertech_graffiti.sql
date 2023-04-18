-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2023 at 01:32 PM
-- Server version: 5.7.41
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `altatweertech_graffiti`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `customer_id`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(65, 1, 0, '2023-02-16 10:34:38', '2023-02-16 10:34:41', 1),
(66, 8, 0, '2023-02-16 10:39:31', '2023-02-16 12:46:37', 1),
(69, 1, 0, '2023-02-18 09:54:59', '2023-02-18 09:55:29', 1),
(71, 1, 0, '2023-02-27 06:36:00', '2023-02-27 06:37:28', 1),
(72, 1, 0, '2023-02-27 06:37:58', '2023-02-27 06:38:16', 1),
(75, 1, 0, '2023-02-27 07:27:36', '2023-02-27 07:28:51', 1),
(76, 13, 0, '2023-02-27 07:38:07', '2023-02-27 07:38:52', 1),
(77, 1, 0, '2023-02-27 16:20:21', '2023-02-27 16:20:47', 1),
(80, 1, 0, '2023-02-28 11:03:43', '2023-02-28 11:04:22', 1),
(82, 15, 0, '2023-02-28 14:42:51', '2023-02-28 14:43:26', 1),
(84, 16, 0, '2023-03-01 11:14:48', '2023-03-01 11:15:12', 1),
(85, 16, 0, '2023-03-01 11:15:20', '2023-03-01 11:15:34', 1),
(86, 1, 0, '2023-03-02 10:57:07', '2023-03-06 14:36:36', 2),
(87, 8, 0, '2023-03-02 10:57:52', '2023-03-02 11:03:48', 2),
(88, 17, 0, '2023-03-02 11:29:23', '2023-03-02 11:31:42', 4),
(91, 1, 0, '2023-03-27 20:37:09', '2023-03-27 21:45:39', 1),
(92, 1, 1, '2023-04-05 12:18:57', '2023-04-05 12:18:57', 1),
(93, 19, 1, '2023-04-06 19:45:50', '2023-04-06 19:45:50', 1),
(94, 2, 0, '2023-04-06 21:05:29', '2023-04-06 21:06:21', 1),
(95, 11, 0, '2023-04-07 18:52:34', '2023-04-07 18:53:04', 1),
(98, 16, 0, '2023-04-09 10:30:42', '2023-04-09 10:31:46', 2),
(99, 17, 0, '2023-04-09 10:33:34', '2023-04-09 10:34:31', 2),
(101, 18, 0, '2023-04-09 10:38:37', '2023-04-09 10:39:08', 2),
(102, 22, 0, '2023-04-13 08:40:55', '2023-04-13 08:43:46', 2),
(103, 18, 0, '2023-04-13 10:35:04', '2023-04-13 10:35:58', 2),
(104, 24, 0, '2023-04-13 11:39:37', '2023-04-13 11:39:58', 2),
(105, 23, 0, '2023-04-13 20:30:20', '2023-04-13 20:36:57', 2),
(106, 34, 0, '2023-04-13 20:33:21', '2023-04-13 20:33:24', 2),
(107, 24, 0, '2023-04-15 11:03:56', '2023-04-15 11:30:13', 1),
(108, 32, 0, '2023-04-15 11:22:08', '2023-04-15 11:22:11', 2),
(109, 23, 0, '2023-04-15 12:21:20', '2023-04-15 12:21:36', 1),
(110, 34, 0, '2023-04-15 12:21:46', '2023-04-15 12:21:52', 1),
(111, 23, 0, '2023-04-15 12:38:25', '2023-04-15 12:40:16', 1),
(112, 33, 0, '2023-04-15 12:46:38', '2023-04-15 12:47:12', 1),
(113, 23, 0, '2023-04-15 12:47:53', '2023-04-15 14:10:27', 1),
(114, 33, 1, '2023-04-15 12:48:47', '2023-04-15 12:48:47', 1),
(115, 31, 1, '2023-04-15 14:09:46', '2023-04-15 14:09:46', 1),
(116, 24, 0, '2023-04-16 06:08:30', '2023-04-16 06:43:31', 1),
(118, 24, 0, '2023-04-16 09:59:48', '2023-04-16 10:00:27', 2),
(119, 24, 0, '2023-04-16 10:07:31', '2023-04-16 10:08:10', 2),
(120, 23, 0, '2023-04-16 10:11:24', '2023-04-16 10:11:31', 2),
(121, 24, 1, '2023-04-16 10:25:38', '2023-04-16 10:25:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_extra`
--

CREATE TABLE `cart_extra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `extra_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_extra`
--

INSERT INTO `cart_extra` (`id`, `cart_id`, `extra_id`, `created_at`, `updated_at`, `quantity`) VALUES
(1, 77, 1, NULL, NULL, 2),
(2, 77, 2, NULL, NULL, 1),
(3, 77, 3, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cost` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `cart_id`, `product_id`, `price`, `quantity`, `created_at`, `updated_at`, `cost`) VALUES
(113, 67, 13, '45000', 1, '2023-02-16 12:46:14', '2023-02-16 12:46:14', 0),
(114, 67, 12, '95000', 1, '2023-02-16 12:46:16', '2023-02-16 12:46:16', 0),
(115, 67, 11, '45000', 1, '2023-02-16 12:46:18', '2023-02-16 12:46:18', 0),
(121, 68, 12, '95000', 1, '2023-02-18 09:37:35', '2023-02-18 09:37:35', 0),
(170, 92, 10, '45000', 1, '2023-03-27 20:38:28', '2023-03-27 20:38:28', 0),
(175, 92, 105, '42000', 2, '2023-04-05 12:18:57', '2023-04-06 19:45:39', 2),
(176, 92, 104, '7500', 2, '2023-04-05 12:19:01', '2023-04-05 12:19:01', 2000),
(177, 92, 60, '6500', 1, '2023-04-06 19:33:58', '2023-04-06 19:33:58', 3000),
(178, 92, 102, '5000', 1, '2023-04-06 19:45:27', '2023-04-06 19:45:27', 2500),
(179, 92, 103, '6000', 3, '2023-04-06 19:45:36', '2023-04-08 11:35:00', 3000),
(180, 93, 102, '5000', 1, '2023-04-06 19:45:50', '2023-04-06 19:45:50', 2500),
(181, 93, 99, '7500', 1, '2023-04-06 19:46:02', '2023-04-06 19:46:02', 2000),
(182, 93, 104, '7500', 1, '2023-04-06 19:47:08', '2023-04-06 19:47:08', 2000),
(183, 93, 101, '4500', 1, '2023-04-06 19:47:27', '2023-04-06 19:47:27', 2000),
(184, 93, 70, '1000', 1, '2023-04-06 19:51:06', '2023-04-06 19:51:06', 250),
(185, 93, 68, '1000', 4, '2023-04-06 19:51:08', '2023-04-06 19:51:11', 250),
(186, 93, 69, '1000', 1, '2023-04-06 19:51:08', '2023-04-06 19:51:08', 250),
(187, 93, 75, '500', 1, '2023-04-06 19:51:20', '2023-04-06 19:51:20', 250),
(188, 92, 41, '8000', 3, '2023-04-06 20:49:57', '2023-04-06 20:50:23', 4500),
(189, 92, 40, '8500', 1, '2023-04-06 20:50:28', '2023-04-06 20:50:28', 4000),
(190, 93, 40, '8500', 1, '2023-04-06 20:50:37', '2023-04-06 20:50:37', 4000),
(191, 92, 58, '9500', 1, '2023-04-06 21:05:19', '2023-04-06 21:05:19', 4000),
(192, 94, 58, '9500', 1, '2023-04-06 21:05:29', '2023-04-06 21:05:29', 4000),
(193, 92, 62, '5500', 1, '2023-04-07 18:52:24', '2023-04-07 18:52:24', 2000),
(194, 95, 62, '5500', 1, '2023-04-07 18:52:34', '2023-04-07 18:52:34', 2000),
(197, 92, 107, '500', 7, '2023-04-09 10:29:29', '2023-04-09 10:29:49', 400),
(198, 98, 107, '500', 5, '2023-04-09 10:30:42', '2023-04-09 10:31:11', 400),
(199, 98, 106, '500', 2, '2023-04-09 10:30:56', '2023-04-09 10:31:28', 437),
(200, 99, 106, '500', 3, '2023-04-09 10:33:34', '2023-04-09 10:34:00', 437),
(201, 99, 42, '9000', 1, '2023-04-09 10:34:21', '2023-04-09 10:34:21', 5000),
(203, 101, 107, '500', 4, '2023-04-09 10:38:37', '2023-04-09 10:38:49', 400),
(205, 92, 56, '14000', 1, '2023-04-12 14:31:34', '2023-04-12 14:31:34', 5000),
(206, 92, 42, '9000', 1, '2023-04-13 08:38:08', '2023-04-13 08:38:08', 5000),
(207, 102, 42, '9000', 1, '2023-04-13 08:40:55', '2023-04-13 08:40:55', 5000),
(208, 102, 104, '7500', 1, '2023-04-13 08:42:16', '2023-04-13 08:42:16', 2000),
(209, 103, 101, '4500', 1, '2023-04-13 10:35:04', '2023-04-13 10:35:04', 2000),
(210, 103, 98, '6000', 1, '2023-04-13 10:35:19', '2023-04-13 10:35:19', 2000),
(211, 103, 95, '7000', 1, '2023-04-13 10:35:21', '2023-04-13 10:35:21', 3000),
(212, 104, 102, '5000', 1, '2023-04-13 11:39:37', '2023-04-13 11:39:37', 2500),
(213, 104, 103, '6000', 1, '2023-04-13 11:39:37', '2023-04-13 11:39:37', 3000),
(214, 105, 103, '6000', 1, '2023-04-13 20:30:20', '2023-04-13 20:30:20', 3000),
(215, 105, 42, '9000', 2, '2023-04-13 20:33:07', '2023-04-13 20:33:08', 5000),
(216, 106, 105, '42000', 1, '2023-04-13 20:33:21', '2023-04-13 20:33:21', 2),
(217, 105, 105, '42000', 1, '2023-04-13 20:33:28', '2023-04-13 20:33:28', 2),
(218, 105, 59, '12500', 1, '2023-04-13 20:36:53', '2023-04-13 20:36:53', 4000),
(219, 107, 102, '5000', 6, '2023-04-15 11:03:56', '2023-04-15 11:04:16', 2500),
(220, 107, 103, '6000', 4, '2023-04-15 11:03:57', '2023-04-15 11:04:06', 3000),
(221, 107, 104, '7500', 5, '2023-04-15 11:03:58', '2023-04-15 11:04:10', 2000),
(222, 108, 102, '5000', 1, '2023-04-15 11:22:08', '2023-04-15 11:22:08', 2500),
(223, 108, 103, '6000', 1, '2023-04-15 11:22:08', '2023-04-15 11:22:08', 3000),
(224, 109, 103, '6000', 1, '2023-04-15 12:21:20', '2023-04-15 12:21:20', 3000),
(225, 109, 98, '6000', 1, '2023-04-15 12:21:29', '2023-04-15 12:21:29', 2000),
(226, 110, 102, '5000', 1, '2023-04-15 12:21:46', '2023-04-15 12:21:46', 2500),
(227, 111, 105, '42000', 1, '2023-04-15 12:38:25', '2023-04-15 12:38:25', 2),
(228, 111, 103, '6000', 1, '2023-04-15 12:38:36', '2023-04-15 12:38:36', 3000),
(229, 111, 102, '5000', 1, '2023-04-15 12:38:38', '2023-04-15 12:38:38', 2500),
(230, 111, 101, '4500', 1, '2023-04-15 12:38:40', '2023-04-15 12:38:40', 2000),
(231, 111, 100, '6000', 1, '2023-04-15 12:38:41', '2023-04-15 12:38:41', 2500),
(232, 112, 103, '6000', 1, '2023-04-15 12:46:38', '2023-04-15 12:46:38', 3000),
(233, 112, 100, '6000', 1, '2023-04-15 12:46:41', '2023-04-15 12:46:41', 2500),
(234, 112, 92, '5000', 1, '2023-04-15 12:46:45', '2023-04-15 12:46:45', 2500),
(235, 112, 91, '4500', 1, '2023-04-15 12:46:46', '2023-04-15 12:46:46', 2000),
(236, 113, 37, '8500', 1, '2023-04-15 12:47:53', '2023-04-15 12:47:53', 4000),
(237, 114, 102, '5000', 1, '2023-04-15 12:48:47', '2023-04-15 12:48:47', 2500),
(238, 114, 58, '9500', 1, '2023-04-15 12:49:07', '2023-04-15 12:49:07', 4000),
(239, 113, 59, '12500', 1, '2023-04-15 12:49:37', '2023-04-15 12:49:37', 4000),
(242, 115, 102, '5000', 1, '2023-04-15 14:09:46', '2023-04-15 14:09:46', 2500),
(243, 113, 102, '5000', 2, '2023-04-15 14:10:18', '2023-04-15 14:10:19', 2500),
(244, 116, 102, '5000', 1, '2023-04-16 06:08:30', '2023-04-16 06:08:30', 2500),
(246, 118, 103, '6000', 3, '2023-04-16 09:59:48', '2023-04-16 10:00:02', 3000),
(247, 118, 102, '5000', 3, '2023-04-16 09:59:48', '2023-04-16 10:00:05', 2500),
(248, 118, 104, '7500', 5, '2023-04-16 09:59:48', '2023-04-16 10:00:07', 2000),
(249, 118, 105, '42000', 4, '2023-04-16 09:59:49', '2023-04-16 10:00:20', 2),
(250, 118, 100, '6000', 2, '2023-04-16 09:59:50', '2023-04-16 10:00:23', 2500),
(251, 118, 99, '7500', 1, '2023-04-16 09:59:50', '2023-04-16 09:59:50', 2000),
(252, 118, 98, '6000', 1, '2023-04-16 09:59:51', '2023-04-16 09:59:51', 2000),
(253, 119, 102, '5000', 1, '2023-04-16 10:07:31', '2023-04-16 10:07:31', 2500),
(254, 119, 103, '6000', 1, '2023-04-16 10:07:32', '2023-04-16 10:07:32', 3000),
(255, 119, 104, '7500', 1, '2023-04-16 10:07:32', '2023-04-16 10:07:32', 2000),
(256, 119, 105, '42000', 1, '2023-04-16 10:07:32', '2023-04-16 10:07:32', 2),
(257, 120, 102, '5000', 1, '2023-04-16 10:11:24', '2023-04-16 10:11:24', 2500),
(258, 120, 103, '6000', 1, '2023-04-16 10:11:25', '2023-04-16 10:11:25', 3000),
(259, 120, 104, '7500', 1, '2023-04-16 10:11:26', '2023-04-16 10:11:26', 2000),
(260, 121, 102, '5000', 1, '2023-04-16 10:25:38', '2023-04-16 10:25:38', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `cart_item_extra`
--

CREATE TABLE `cart_item_extra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_item_id` bigint(20) UNSIGNED NOT NULL,
  `extra_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_item_extra`
--

INSERT INTO `cart_item_extra` (`id`, `cart_item_id`, `extra_id`, `created_at`, `updated_at`, `quantity`) VALUES
(1, 192, 11, NULL, NULL, 1),
(2, 207, 1, NULL, NULL, 1),
(3, 209, 1, NULL, NULL, 1),
(4, 212, 1, NULL, NULL, 1),
(5, 212, 4, NULL, NULL, 1),
(6, 234, 6, NULL, NULL, 1),
(7, 253, 5, NULL, NULL, 4),
(8, 253, 6, NULL, NULL, 2),
(9, 254, 9, NULL, NULL, 3),
(10, 254, 10, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `category_id`, `created_at`, `updated_at`, `name_ar`, `status`) VALUES
(12, 'Chicken Burger', '2023040115165.png', 0, '2023-04-01 12:16:47', '2023-04-01 12:16:47', 'برغر الدجاج', 1),
(13, 'Beef Burger', '202304011521برغر اللحم.png', 0, '2023-04-01 12:21:00', '2023-04-01 12:21:00', 'برغر اللحم', 1),
(14, 'Sandwiche', '202304011534ساندويش.png', 0, '2023-04-01 12:34:34', '2023-04-01 12:34:34', 'ساندويش', 1),
(15, 'FRIES', '202304011537FRIES.png', 0, '2023-04-01 12:37:35', '2023-04-01 12:37:35', 'بطاطس مقلية', 1),
(16, 'Side orders', '202304011551side orders.png', 0, '2023-04-01 12:51:06', '2023-04-01 12:51:06', 'طلبيات جانبية', 1),
(17, 'Drinks', '202304011553Drinks.png', 0, '2023-04-01 12:53:41', '2023-04-01 12:53:41', 'المشروبات', 1),
(18, 'Family box', '202304011606Family box.png', 0, '2023-04-01 13:04:23', '2023-04-01 13:06:14', 'بوكسات عائلية', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'take_away'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mobile`, `email`, `state`, `city`, `zip_code`, `address`, `created_at`, `updated_at`, `type`) VALUES
(23, 'Walking Customer', '009641234567890', 'walking@graffiti.com', 'Basrah', 'Basrah', NULL, 'Basrah, Iraq', NULL, NULL, 'take_away'),
(24, 'Walking customer', '12365478963', NULL, NULL, NULL, NULL, NULL, '2023-04-13 11:39:34', '2023-04-13 11:39:34', 'dine_in'),
(25, 'زين الدين', '07721203410', NULL, NULL, NULL, NULL, NULL, '2023-04-13 20:30:20', '2023-04-13 20:30:20', 'take_away'),
(26, 'زين الدين', '07721203410', NULL, NULL, NULL, NULL, NULL, '2023-04-13 20:30:20', '2023-04-13 20:30:20', 'take_away'),
(27, 'زين الدين', '07721203410', NULL, NULL, NULL, NULL, NULL, '2023-04-13 20:30:21', '2023-04-13 20:30:21', 'take_away'),
(28, 'زين الدين', '07721203410', NULL, NULL, NULL, NULL, NULL, '2023-04-13 20:30:21', '2023-04-13 20:30:21', 'take_away'),
(29, 'زين الدين', '07721203410', NULL, NULL, NULL, NULL, NULL, '2023-04-13 20:30:21', '2023-04-13 20:30:21', 'take_away'),
(30, 'زين الدين', '07721203410', NULL, NULL, NULL, NULL, NULL, '2023-04-13 20:30:21', '2023-04-13 20:30:21', 'take_away'),
(31, 'زين الدين', '07721203410', NULL, NULL, NULL, NULL, NULL, '2023-04-13 20:30:23', '2023-04-13 20:30:23', 'take_away'),
(32, 'زين الدين', '07721203410', NULL, NULL, NULL, NULL, NULL, '2023-04-13 20:30:47', '2023-04-13 20:30:47', 'take_away'),
(33, 'زين الدين', '07721203410', NULL, NULL, NULL, NULL, NULL, '2023-04-13 20:31:26', '2023-04-13 20:31:26', 'take_away'),
(34, 'زين الدين', '07721203410', NULL, NULL, NULL, NULL, NULL, '2023-04-13 20:33:07', '2023-04-13 20:33:07', 'take_away');

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `extra_type_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`id`, `name`, `price`, `created_at`, `updated_at`, `extra_type_id`, `status`) VALUES
(1, 'Chili Sauce', 20, '2023-02-26 13:07:08', '2023-04-05 11:51:54', 1, 0),
(2, 'Mozarila', 250, '2023-02-27 06:29:59', '2023-04-05 11:51:21', 2, 0),
(3, 'ketchup', 500, '2023-02-27 06:31:22', '2023-04-05 11:52:13', 3, 0),
(4, 'test', 250, '2023-03-06 14:33:13', '2023-04-05 11:52:24', 1, 0),
(5, 'SAUCE - صلصة', 1000, '2023-04-05 11:47:34', '2023-04-08 09:56:50', 10, 1),
(6, 'CHEESE SAUCE - صلصة الجبن', 1000, '2023-04-05 11:48:20', '2023-04-08 09:57:50', 10, 1),
(7, 'shrimps - روبيان', 3000, '2023-04-05 11:49:23', '2023-04-08 09:58:23', 10, 1),
(8, 'Beef patty - شرائح اللحم', 3500, '2023-04-05 11:50:08', '2023-04-08 09:59:14', 10, 1),
(9, 'JALPENO SLICES - شرائح الجالبينو', 1000, '2023-04-05 11:50:45', '2023-04-08 09:59:48', 10, 1),
(10, 'BEEF BACON - بيف بيكون', 2000, '2023-04-05 11:53:48', '2023-04-08 10:00:18', 10, 1),
(11, 'CHEESE - جبن', 1000, '2023-04-05 11:55:14', '2023-04-08 10:03:04', 10, 1),
(12, 'STEAK - ستيك', 1500, '2023-04-05 12:00:22', '2023-04-08 10:03:30', 10, 1),
(13, 'STEAK', 1500, '2023-04-05 12:00:23', '2023-04-08 10:04:10', 8, 0),
(14, 'BEEF BACON - بيف بيكون', 2000, '2023-04-05 12:01:17', '2023-04-08 10:05:05', 10, 0),
(15, 'CHEETOS - شيتوس', 1500, '2023-04-05 12:06:05', '2023-04-08 10:05:40', 10, 1),
(16, 'CHEESE - جبن', 1000, '2023-04-05 12:07:32', '2023-04-08 10:07:34', 10, 1),
(17, 'CRUCHY CHICKEN - دجاج كرنشي', 2500, '2023-04-08 10:09:42', '2023-04-08 10:09:42', 10, 1),
(18, 'EGG - بيض', 1000, '2023-04-08 10:11:38', '2023-04-08 10:11:38', 10, 1),
(19, 'test', 250, '2023-04-16 09:22:42', '2023-04-16 09:22:52', 3, 0),
(20, 'بدون بصل', 0, '2023-04-16 09:57:49', '2023-04-16 09:57:49', 11, 1),
(21, 'بدون جالابينو', 0, '2023-04-16 09:58:29', '2023-04-16 09:58:29', 11, 1),
(22, 'بدون جبن', 0, '2023-04-16 09:58:52', '2023-04-16 09:58:52', 11, 1),
(23, 'بدون جيتوس', 0, '2023-04-16 09:59:15', '2023-04-16 09:59:15', 11, 1),
(24, 'بدون خس', 0, '2023-04-16 09:59:37', '2023-04-16 09:59:37', 11, 1),
(25, 'بدون طماطة', 0, '2023-04-16 10:00:05', '2023-04-16 10:00:05', 11, 1),
(26, 'بدون فلفل اخضر', 0, '2023-04-16 10:00:33', '2023-04-16 10:00:33', 11, 1),
(27, 'بدون مخلل', 0, '2023-04-16 10:00:53', '2023-04-16 10:00:53', 11, 1),
(28, 'بدون مشروم', 0, '2023-04-16 10:01:13', '2023-04-16 10:01:13', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `extra_types`
--

CREATE TABLE `extra_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extra_types`
--

INSERT INTO `extra_types` (`id`, `name`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Sauces', '2023-02-26 13:06:42', '2023-04-08 10:01:42', 0),
(2, 'cheese', '2023-02-27 06:28:41', '2023-04-08 10:01:49', 0),
(3, 'tomato', '2023-02-27 06:29:07', '2023-04-05 11:54:36', 0),
(4, 'Hony Mustard', '2023-03-02 12:05:59', '2023-04-05 11:54:30', 0),
(5, 'Test Test', '2023-04-01 12:04:42', '2023-04-05 11:54:22', 0),
(6, 'SLICES', '2023-04-05 11:44:57', '2023-04-08 10:23:45', 0),
(7, 'SHRIMPS', '2023-04-05 11:45:28', '2023-04-08 10:23:54', 0),
(8, 'STEAK', '2023-04-05 11:45:44', '2023-04-08 10:24:16', 0),
(9, 'CRUNCHY CHICKEN', '2023-04-05 11:46:00', '2023-04-08 10:23:26', 0),
(10, 'ADD ON', '2023-04-08 09:55:27', '2023-04-08 09:55:27', 1),
(11, 'Remove - ازالة', '2023-04-15 23:34:13', '2023-04-15 23:34:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci,
  `rating` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `phone`, `feedback`, `rating`, `created_at`, `updated_at`, `name`) VALUES
(2, '03037186382', 'Test Feedback', 0, '2023-02-25 13:49:03', '2023-02-25 13:49:03', NULL),
(3, '03037186382', 'Test Feedback', 0, '2023-02-26 20:40:08', '2023-02-26 20:40:08', NULL),
(4, '03345324752', 'very nice app', 0, '2023-02-26 20:46:16', '2023-02-26 20:46:16', NULL),
(5, '+923345324752', 'final release testing', 0, '2023-02-27 00:25:54', '2023-02-27 00:25:54', NULL),
(6, '+96407827901488', 'test', 0, '2023-02-27 07:43:17', '2023-02-27 07:43:17', NULL),
(7, '+96407827901488', 'test', 0, '2023-02-27 07:45:07', '2023-02-27 07:45:07', NULL),
(8, '+96407827901488', 'Hello', 0, '2023-02-27 11:06:09', '2023-02-27 11:06:09', 'zainab'),
(9, '+96407827901488', 'زهوره', 0, '2023-02-27 11:51:46', '2023-02-27 11:51:46', 'zainab'),
(10, '+96407827901488', 'test', 0, '2023-02-27 11:53:35', '2023-02-27 11:53:35', 'zainab'),
(11, '+96407721203410', 'اختبار', 0, '2023-03-02 11:45:39', '2023-03-02 11:45:39', NULL),
(12, '+9647721203410', 'لم يعجبني', 0, '2023-03-02 11:47:07', '2023-03-02 11:47:07', 'zinedine'),
(13, '+9647721203410', 'مو حلو', 0, '2023-03-02 11:52:23', '2023-03-02 11:52:23', 'zain'),
(14, '+9647721203410', 'test', 0, '2023-03-02 11:53:25', '2023-03-02 11:53:25', 'zain');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_ratings`
--

CREATE TABLE `feedback_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feedback_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_ratings`
--

INSERT INTO `feedback_ratings` (`id`, `feedback_id`, `question_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 5, '2023-02-25 13:49:03', '2023-02-25 13:49:03'),
(2, 3, 1, 5, '2023-02-26 20:40:08', '2023-02-26 20:40:08'),
(3, 4, 1, 4, '2023-02-26 20:46:16', '2023-02-26 20:46:16'),
(4, 4, 2, 3, '2023-02-26 20:46:16', '2023-02-26 20:46:16'),
(5, 4, 3, 2, '2023-02-26 20:46:16', '2023-02-26 20:46:16'),
(6, 5, 1, 2, '2023-02-27 00:25:54', '2023-02-27 00:25:54'),
(7, 5, 2, 3, '2023-02-27 00:25:54', '2023-02-27 00:25:54'),
(8, 5, 3, 4, '2023-02-27 00:25:54', '2023-02-27 00:25:54'),
(9, 6, 1, 3, '2023-02-27 07:43:17', '2023-02-27 07:43:17'),
(10, 6, 2, 4, '2023-02-27 07:43:17', '2023-02-27 07:43:17'),
(11, 6, 3, 5, '2023-02-27 07:43:17', '2023-02-27 07:43:17'),
(12, 7, 1, 3, '2023-02-27 07:45:07', '2023-02-27 07:45:07'),
(13, 7, 2, 4, '2023-02-27 07:45:07', '2023-02-27 07:45:07'),
(14, 7, 3, 5, '2023-02-27 07:45:07', '2023-02-27 07:45:07'),
(15, 8, 1, 5, '2023-02-27 11:06:09', '2023-02-27 11:06:09'),
(16, 8, 2, 5, '2023-02-27 11:06:09', '2023-02-27 11:06:09'),
(17, 8, 3, 5, '2023-02-27 11:06:09', '2023-02-27 11:06:09'),
(18, 9, 1, 1, '2023-02-27 11:51:46', '2023-02-27 11:51:46'),
(19, 9, 2, 3, '2023-02-27 11:51:46', '2023-02-27 11:51:46'),
(20, 9, 3, 5, '2023-02-27 11:51:46', '2023-02-27 11:51:46'),
(21, 10, 1, 4, '2023-02-27 11:53:35', '2023-02-27 11:53:35'),
(22, 10, 2, 4, '2023-02-27 11:53:35', '2023-02-27 11:53:35'),
(23, 10, 3, 4, '2023-02-27 11:53:35', '2023-02-27 11:53:35'),
(24, 11, 1, 5, '2023-03-02 11:45:39', '2023-03-02 11:45:39'),
(25, 11, 2, 5, '2023-03-02 11:45:39', '2023-03-02 11:45:39'),
(26, 11, 3, 5, '2023-03-02 11:45:39', '2023-03-02 11:45:39'),
(27, 11, 4, 5, '2023-03-02 11:45:39', '2023-03-02 11:45:39'),
(28, 12, 1, 1, '2023-03-02 11:47:07', '2023-03-02 11:47:07'),
(29, 12, 2, 3, '2023-03-02 11:47:07', '2023-03-02 11:47:07'),
(30, 12, 3, 4, '2023-03-02 11:47:07', '2023-03-02 11:47:07'),
(31, 12, 4, 1, '2023-03-02 11:47:07', '2023-03-02 11:47:07'),
(32, 13, 1, 2, '2023-03-02 11:52:23', '2023-03-02 11:52:23'),
(33, 13, 2, 1, '2023-03-02 11:52:23', '2023-03-02 11:52:23'),
(34, 13, 3, 3, '2023-03-02 11:52:23', '2023-03-02 11:52:23'),
(35, 13, 4, 3, '2023-03-02 11:52:23', '2023-03-02 11:52:23'),
(36, 14, 1, 1, '2023-03-02 11:53:25', '2023-03-02 11:53:25'),
(37, 14, 2, 1, '2023-03-02 11:53:25', '2023-03-02 11:53:25'),
(38, 14, 3, 1, '2023-03-02 11:53:25', '2023-03-02 11:53:25'),
(39, 14, 4, 1, '2023-03-02 11:53:25', '2023-03-02 11:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_09_064224_create_user_profiles_table', 1),
(5, '2021_11_11_110731_create_permission_tables', 1),
(6, '2021_11_16_114009_create_media_table', 1),
(7, '2022_10_08_114502_create_categories_table', 1),
(8, '2022_10_09_121310_create_products_table', 1),
(9, '2022_10_13_063108_create_languages_table', 2),
(10, '2022_10_13_063526_add_active_column_to_languages_table', 2),
(11, '2022_10_17_132604_create_customers_table', 2),
(12, '2022_10_20_064702_add_name_ar_column_to_categories_table', 2),
(13, '2022_10_20_064819_add_name_ar_column_to_products_table', 2),
(14, '2022_05_28_105746_create_orders_table', 3),
(15, '2022_06_20_060031_create_carts_table', 3),
(16, '2022_06_20_060404_create_cart_items_table', 3),
(17, '2022_10_24_125812_add_price_column_to_products_table', 3),
(18, '2022_10_30_154643_add_created_by_column_to_carts_table', 4),
(19, '2022_10_30_154732_add_created_by_column_to_orders_table', 4),
(20, '2022_10_31_115742_create_notifications_table', 5),
(21, '2022_11_02_090620_add_updated_by_column_to_orders_table', 5),
(22, '2022_11_03_065657_create_feedback_table', 6),
(23, '2022_11_08_075506_add_qr_code_column_to_orders_table', 6),
(24, '2022_11_09_125321_change_columns_to_customers_table', 6),
(25, '2022_11_10_075506_add_cost_column_to_products_table', 6),
(26, '2022_11_10_125139_add_cost_column_to_cart_items_table', 6),
(27, '2022_11_10_131010_add_profit_column_to_orders_table', 6),
(28, '2022_11_16_112539_add_active_column_to_products_table', 7),
(29, '2023_01_28_080754_change_mobile_column_nullable_to_customers_table', 8),
(30, '2023_02_07_103739_add_daily_code_to_orders_table', 9),
(31, '2023_02_21_105920_create_feedback_table', 10),
(32, '2023_02_22_115459_add_cooking_time_column_to_products_table', 11),
(33, '2023_02_23_073827_add_type_column_to_customers_table', 11),
(34, '2023_02_23_111953_create_questions_table', 11),
(35, '2023_02_25_071657_create_feedback_ratings_table', 12),
(36, '2023_02_25_071840_add_columns_to_feedbacks_table', 12),
(37, '2023_02_25_092001_create_extras_table', 12),
(38, '2023_02_25_111816_create_extra_types_table', 12),
(39, '2023_02_25_112017_add_type_column_to_extras_table', 12),
(40, '2023_02_25_121029_add_discount_columns_to_orders_table', 12),
(41, '2023_02_26_070336_create_cart_item_extra_table', 13),
(42, '2023_02_27_074019_create_cart_extra_table', 14),
(43, '2023_02_27_075245_add_quantity_column_to_cart_extra_table', 14),
(44, '2023_02_28_101629_add_quantity_column_to_cart_item_extra_table', 15),
(45, '2023_04_04_111701_add_status_column_to_categories_table', 16),
(46, '2023_04_04_111803_add_status_column_to_extra_types_table', 16),
(47, '2023_04_04_111826_add_status_column_to_extras_table', 16),
(48, '2023_04_05_103523_add_start_at_column_to_orders_table', 17),
(49, '2023_04_10_171809_add_column_cooking_time_to_orders', 17);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('00145f01-ca97-4848-87e0-1dc4adcd9116', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":39}', '2022-11-09 11:59:13', '2022-11-06 11:26:50', '2022-11-09 11:59:13'),
('0280bb5f-fac9-4a97-b4c5-6c58ea3cccdd', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":61}', '2023-03-02 11:05:19', '2023-02-27 07:28:51', '2023-03-02 11:05:19'),
('02c2d959-4df7-429e-8266-0df120ec4fc0', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":19}', NULL, '2023-04-16 10:00:27', '2023-04-16 10:00:27'),
('034ceabf-edc3-4d3e-bf88-679fb494a026', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":62}', '2023-03-02 11:05:19', '2023-02-27 07:38:52', '2023-03-02 11:05:19'),
('039d961c-7e9e-49ca-bbab-b39f9d63d93a', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":21}', '2022-11-03 09:27:06', '2022-11-03 09:26:53', '2022-11-03 09:27:06'),
('04eed85f-d172-4579-acc1-49f4169ebf1e', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":7}', '2023-04-13 11:31:15', '2023-04-13 10:35:58', '2023-04-13 11:31:15'),
('0752797f-0354-4ac5-a291-93eb9b6091b8', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":22}', '2022-11-03 09:30:27', '2022-11-03 09:30:13', '2022-11-03 09:30:27'),
('085e084b-35c7-460c-83b3-4bbfaf0bab95', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":16}', '2022-11-03 09:03:25', '2022-11-03 08:54:51', '2022-11-03 09:03:25'),
('0978117e-9528-4015-bbfc-9d4be566ca69', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":11}', NULL, '2023-04-15 11:22:12', '2023-04-15 11:22:12'),
('0efa7bf0-1464-4223-a3d1-88c8e5830271', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"CTB1KR\",\"id\":21,\"type\":\"ready\"}', '2022-11-09 12:02:27', '2022-11-03 09:27:24', '2022-11-09 12:02:27'),
('12bcf798-a4e6-4971-bccd-7cb9facdc2c3', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":70}', '2023-04-08 09:21:29', '2023-03-06 14:36:37', '2023-04-08 09:21:29'),
('13e56e2a-ab48-457b-8f8f-2a507057ed7c', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":28}', '2022-11-03 09:31:07', '2022-11-03 09:31:01', '2022-11-03 09:31:07'),
('14663425-42c0-4e94-a790-a2061261ab0c', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":2}', '2023-04-08 09:21:29', '2023-04-07 18:53:04', '2023-04-08 09:21:29'),
('1820f8fb-908d-4334-ad2c-01344ab44c93', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":50}', '2023-02-07 09:23:00', '2023-02-07 09:22:17', '2023-02-07 09:23:00'),
('1babd456-473b-47c1-b175-be527c4c74c1', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":13}', NULL, '2023-04-15 12:21:36', '2023-04-15 12:21:36'),
('1fafa069-5094-42ae-8786-e2e6a99e3fd2', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":11}', '2022-11-03 08:34:59', '2022-11-03 08:33:11', '2022-11-03 08:34:59'),
('219d86c8-07f5-407f-adbc-874b87bf529f', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":54}', '2023-03-02 11:05:19', '2023-02-16 10:34:41', '2023-03-02 11:05:19'),
('21c4a077-d955-4490-8430-4056eda7379e', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":72}', '2023-04-08 09:21:29', '2023-03-27 21:45:39', '2023-04-08 09:21:29'),
('223fde6f-6fe7-4ae1-ac3b-e0b1451182ac', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 1, '{\"order_code\":\"OJSK6C\",\"id\":54,\"type\":\"ready\"}', '2023-02-16 12:48:51', '2023-02-16 12:48:50', '2023-02-16 12:48:51'),
('2480d6ea-772f-4fa1-9423-511bb14b946c', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":6}', '2023-04-13 08:46:18', '2023-04-13 08:43:47', '2023-04-13 08:46:18'),
('25d6a4ce-2c95-4289-b05e-1ef5ef247b6b', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"WCQO2T\",\"id\":9,\"type\":\"ready\"}', '2022-11-03 07:21:32', '2022-11-03 07:20:39', '2022-11-03 07:21:32'),
('27303b3f-9b51-4f03-965d-ce344133b869', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":18}', NULL, '2023-04-16 06:43:31', '2023-04-16 06:43:31'),
('2a839ac8-53fd-40e6-939e-75fe8edcb4ad', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":14}', '2022-11-03 08:47:01', '2022-11-03 08:45:50', '2022-11-03 08:47:01'),
('2b03bf5a-5dbd-4fd4-8416-6dec8389184c', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 1, '{\"order_code\":\"QKGVBM\",\"id\":49,\"type\":\"ready\"}', '2023-02-07 09:12:17', '2023-02-07 09:12:16', '2023-02-07 09:12:17'),
('2e5dadc6-02bd-4ea7-b8bf-ee985e0a40d2', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":65}', '2023-03-02 11:05:19', '2023-02-28 14:43:26', '2023-03-02 11:05:19'),
('2f6e3c65-b8d1-478b-b993-208ea700d7b4', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":38}', '2022-11-03 09:41:21', '2022-11-03 09:41:15', '2022-11-03 09:41:21'),
('2f9236e4-fae8-4312-82bf-6b1c741ce049', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":17}', '2022-11-03 09:11:30', '2022-11-03 09:11:23', '2022-11-03 09:11:30'),
('322fe937-c444-4efa-a206-f852664df7df', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":42}', '2022-11-09 11:59:13', '2022-11-09 11:56:04', '2022-11-09 11:59:13'),
('32d867a0-438b-407e-908e-9afc996985bd', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":25}', '2022-11-03 09:30:59', '2022-11-03 09:30:45', '2022-11-03 09:30:59'),
('395b787c-855c-4a65-a542-c2fe05dd517d', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":63}', '2023-03-02 11:05:19', '2023-02-27 16:20:47', '2023-03-02 11:05:19'),
('3b430baa-3ea9-4eb1-a0e0-8f636b46f173', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":8}', '2022-11-03 07:17:40', '2022-11-03 07:17:24', '2022-11-03 07:17:40'),
('3bf5fbf8-f708-41ad-a773-c2727f6348c4', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":23}', '2022-11-03 09:30:43', '2022-11-03 09:30:30', '2022-11-03 09:30:43'),
('406899a0-13d0-4bbf-bdbd-58e325e6e6e2', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":37}', '2022-11-03 09:36:09', '2022-11-03 09:35:59', '2022-11-03 09:36:09'),
('42dcd010-f6a0-4d1f-b925-0999bfed2b2f', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":44}', '2023-02-01 13:25:10', '2023-01-26 13:16:16', '2023-02-01 13:25:10'),
('43de1170-1ec6-4cc6-8498-61ce079b4474', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"VECJZ9\",\"id\":48,\"type\":\"ready\"}', '2023-03-02 11:04:06', '2023-02-02 07:41:38', '2023-03-02 11:04:06'),
('44b017fe-8788-4bf9-a9be-9ce2ca82d243', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"NZQ7ZD\",\"id\":19,\"type\":\"ready\"}', '2022-11-09 12:02:27', '2022-11-03 09:21:58', '2022-11-09 12:02:27'),
('48dbddbc-3064-4dc0-a945-c593f2c00fdf', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":19}', '2022-11-03 09:21:41', '2022-11-03 09:21:27', '2022-11-03 09:21:41'),
('52c47ba5-f20c-40de-8d63-22d609826c37', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":4}', '2023-04-10 06:01:12', '2023-04-09 10:34:31', '2023-04-10 06:01:12'),
('53cd4e00-772b-4ef9-b846-6f2e36a98174', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"6HPTVW\",\"id\":6,\"type\":\"ready\"}', '2023-04-13 08:46:43', '2023-04-13 08:46:38', '2023-04-13 08:46:43'),
('5758f87b-1e13-4f8b-96f9-05e1a20446be', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":12}', NULL, '2023-04-15 11:30:13', '2023-04-15 11:30:13'),
('5a068bbe-8fb0-410d-b6d8-c41486a5dc87', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":3}', '2023-04-10 06:01:12', '2023-04-09 10:31:46', '2023-04-10 06:01:12'),
('5a43b30c-e412-443d-8bfc-56d309f5daf6', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":59}', '2023-03-02 11:05:19', '2023-02-27 06:37:28', '2023-03-02 11:05:19'),
('5cd86fe6-3c1f-4d69-9117-7c1a41fba788', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":29}', '2022-11-03 09:31:31', '2022-11-03 09:31:08', '2022-11-03 09:31:31'),
('5d1ac7c6-eaa2-4c30-b3ee-c5250d1bc6b4', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":56}', '2023-03-02 11:05:19', '2023-02-16 12:46:37', '2023-03-02 11:05:19'),
('5d91f9db-4d97-4f4e-9af7-73abfa3a229b', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":67}', '2023-03-02 11:05:19', '2023-03-01 11:15:34', '2023-03-02 11:05:19'),
('650953f9-62b1-4a84-b6cd-f1d796df5a69', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"S37FAR\",\"id\":42,\"type\":\"ready\"}', '2022-11-09 12:14:42', '2022-11-09 12:07:30', '2022-11-09 12:14:42'),
('6763cd0d-a7b6-4623-9875-adf6ed4aa417', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":45}', '2023-02-01 13:25:10', '2023-02-01 11:59:25', '2023-02-01 13:25:10'),
('6b7e89f0-9e7e-4198-a8f4-ed1c35466457', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":48}', '2023-02-01 13:25:10', '2023-02-01 13:20:52', '2023-02-01 13:25:10'),
('6cd232f3-ed39-44a8-acdb-d2d5bf8a7d03', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":34}', '2022-11-03 09:31:31', '2022-11-03 09:31:31', '2022-11-03 09:31:31'),
('728ecb8d-3b57-43e4-9209-e02f74935982', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"XGBA6O\",\"id\":38,\"type\":\"ready\"}', '2022-11-09 12:02:27', '2022-11-03 09:41:36', '2022-11-09 12:02:27'),
('74491800-601e-4ca6-850e-c0a9d5fd49f8', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":9}', '2023-04-13 20:36:30', '2023-04-13 20:33:24', '2023-04-13 20:36:30'),
('75744329-e06b-406c-8830-26cd251d9688', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":20}', '2022-11-03 09:25:11', '2022-11-03 09:24:57', '2022-11-03 09:25:11'),
('7972bc6d-be92-446a-9f6f-1be29bb31ff8', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":47}', '2023-02-01 13:25:10', '2023-02-01 12:58:44', '2023-02-01 13:25:10'),
('8157094e-2035-4c30-804e-6e35abe58c27', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"WE0FL1\",\"id\":68,\"type\":\"ready\"}', '2023-04-09 10:32:11', '2023-03-02 11:05:48', '2023-04-09 10:32:11'),
('838cf3a3-5e37-46ec-963c-1617bd0773b7', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":5}', '2022-11-02 12:45:29', '2022-11-02 12:44:59', '2022-11-02 12:45:29'),
('83bdd721-c8ec-4315-9311-f827d5e01e04', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":15}', NULL, '2023-04-15 12:40:16', '2023-04-15 12:40:16'),
('876e68b5-d3ab-4cd4-935b-e26cf9f38453', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":13}', '2022-11-03 08:47:01', '2022-11-03 08:45:22', '2022-11-03 08:47:01'),
('8893511c-f0f7-4484-a9d1-2f02809bba9e', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":4}', '2022-11-02 12:43:45', '2022-11-02 12:43:30', '2022-11-02 12:43:45'),
('8b0011ab-e59d-43aa-8336-e97e82b40cd4', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"IAYQSE\",\"id\":17,\"type\":\"ready\"}', '2022-11-03 09:12:12', '2022-11-03 09:12:00', '2022-11-03 09:12:12'),
('8e089cfc-dd43-44bc-a072-e9c71f5bd738', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":27}', '2022-11-03 09:30:59', '2022-11-03 09:30:56', '2022-11-03 09:30:59'),
('90a1cc7a-e1f7-4221-8127-9473c4370681', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"VWTKPJ\",\"id\":36,\"type\":\"ready\"}', '2022-11-09 12:02:27', '2022-11-06 11:25:29', '2022-11-09 12:02:27'),
('90dc300b-ccf1-45b3-80c0-ca30081f09af', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":35}', '2022-11-03 09:31:46', '2022-11-03 09:31:43', '2022-11-03 09:31:46'),
('93919a69-6066-40fb-b965-5fb1aba719ce', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":1}', '2023-04-08 09:21:29', '2023-04-06 21:06:21', '2023-04-08 09:21:29'),
('93c2588e-f687-47fc-823e-1d68d13e8e86', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":7}', '2022-11-02 12:51:03', '2022-11-02 12:47:22', '2022-11-02 12:51:03'),
('9513d1bb-d900-417b-b6d1-4123b661cc18', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":30}', '2022-11-03 09:31:31', '2022-11-03 09:31:14', '2022-11-03 09:31:31'),
('95665fc0-eeaf-4df5-8eb2-870f17a74d16', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":43}', '2022-11-09 12:02:29', '2022-11-09 12:02:19', '2022-11-09 12:02:29'),
('95d8f96e-8cf3-4f23-ad82-8fae0f86e5c1', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 1, '{\"order_code\":\"SFWKNP\",\"id\":62,\"type\":\"ready\"}', '2023-02-27 07:44:36', '2023-02-27 07:44:36', '2023-02-27 07:44:36'),
('98462929-b781-4bbd-a986-339c35221e3c', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":53}', '2023-02-07 09:26:58', '2023-02-07 09:26:38', '2023-02-07 09:26:58'),
('9dee43ff-c523-41a6-8504-772d5b966877', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":41}', '2022-11-09 11:59:13', '2022-11-09 11:53:24', '2022-11-09 11:59:13'),
('9e5e734c-3f30-4a48-8654-be87ba06f219', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 4, '{\"order_code\":\"MYQ58H\",\"id\":69,\"type\":\"ready\"}', '2023-03-02 11:33:30', '2023-03-02 11:32:20', '2023-03-02 11:33:30'),
('a07e56fe-5a17-42ab-b7d5-2196ef52d6e4', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":9}', '2022-11-03 07:18:51', '2022-11-03 07:17:55', '2022-11-03 07:18:51'),
('a0f7ed8c-fd48-4dfb-be26-6fa8e1870ee0', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":40}', '2022-11-09 11:59:13', '2022-11-09 11:51:32', '2022-11-09 11:59:13'),
('a2a69edf-2999-4a08-9c93-f3aea9349f73', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":17}', NULL, '2023-04-15 14:10:27', '2023-04-15 14:10:27'),
('a2e3e2fd-ded5-4a18-8def-d8672f001b1e', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":8}', '2023-04-13 12:06:02', '2023-04-13 11:39:58', '2023-04-13 12:06:02'),
('aa19884d-f33c-41fc-8b74-8c04fc1af7d2', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 1, '{\"order_code\":\"RRHXYN\",\"id\":50,\"type\":\"ready\"}', '2023-02-07 09:24:09', '2023-02-07 09:23:50', '2023-02-07 09:24:09'),
('aae3511f-0608-4de7-9f6c-577b6a8db333', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 1, '{\"order_code\":\"VBHLM9\",\"id\":55,\"type\":\"ready\"}', '2023-02-16 12:46:52', '2023-02-16 12:46:51', '2023-02-16 12:46:52'),
('abe68d62-420f-4f76-880c-cf9ed8b5aea1', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":20}', NULL, '2023-04-16 10:08:10', '2023-04-16 10:08:10'),
('af0b3a93-5e50-4db0-813d-03480533c4c5', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":14}', NULL, '2023-04-15 12:21:52', '2023-04-15 12:21:52'),
('b63ada95-8bd9-4bcc-8d31-f41b8cc3a125', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":60}', '2023-03-02 11:05:19', '2023-02-27 06:38:16', '2023-03-02 11:05:19'),
('ba917fa7-7ade-4bcb-b128-df3ef9051e8a', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":24}', '2022-11-03 09:30:43', '2022-11-03 09:30:38', '2022-11-03 09:30:43'),
('bb1b29c7-b0ac-48ba-82a0-f784025d46b2', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":71}', '2023-04-08 09:21:29', '2023-03-27 20:38:34', '2023-04-08 09:21:29'),
('bbd36008-c591-4ae9-9220-12ea07075259', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 1, '{\"order_code\":\"DLYNCT\",\"id\":63,\"type\":\"ready\"}', '2023-02-27 16:21:17', '2023-02-27 16:21:16', '2023-02-27 16:21:17'),
('c21a9b5f-f919-4911-83aa-18fb3dd0df58', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":26}', '2022-11-03 09:30:59', '2022-11-03 09:30:52', '2022-11-03 09:30:59'),
('c44fcdce-8807-4489-86b7-c07a7ea1cf0b', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":33}', '2022-11-03 09:31:31', '2022-11-03 09:31:26', '2022-11-03 09:31:31'),
('c492acb9-442f-4663-885a-fbf632d4a1bf', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":16}', NULL, '2023-04-15 12:47:12', '2023-04-15 12:47:12'),
('c4ede710-4161-4ff6-bf12-a8d489071671', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"QUN9L3\",\"id\":4,\"type\":\"ready\"}', '2023-04-13 08:44:21', '2023-04-09 20:38:50', '2023-04-13 08:44:21'),
('c6acdb6c-4c59-4ac6-9eac-5679f862fe2d', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":64}', '2023-03-02 11:05:19', '2023-02-28 11:04:22', '2023-03-02 11:05:19'),
('c975083b-7645-4232-94a3-fb6895a3d189', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"WYBXZE\",\"id\":3,\"type\":\"ready\"}', '2023-04-13 08:44:21', '2023-04-09 20:11:58', '2023-04-13 08:44:21'),
('ce44aa35-d12e-436d-83f6-fe0fdc816e50', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"KTY3W2\",\"id\":34,\"type\":\"cancelled\"}', '2023-02-01 13:46:51', '2022-11-10 08:47:08', '2023-02-01 13:46:51'),
('cff5a96b-43a2-4d04-874d-144640c7c219', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":18}', '2022-11-03 09:20:02', '2022-11-03 09:19:46', '2022-11-03 09:20:02'),
('d0043be8-e043-4846-bae5-50344281c99e', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":10}', NULL, '2023-04-13 20:36:57', '2023-04-13 20:36:57'),
('d19a3967-3c71-4d83-a634-2602e15f411b', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":5}', '2023-04-10 06:01:12', '2023-04-09 10:39:08', '2023-04-10 06:01:12'),
('d2135ed3-953b-422d-a1e3-566b0049fa01', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":46}', '2023-02-01 13:25:10', '2023-02-01 12:02:04', '2023-02-01 13:25:10'),
('d3202f13-f319-4d6b-8c5f-38d0882b91dc', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 4, '{\"order_code\":\"WKGDHX\",\"id\":7,\"type\":\"ready\"}', '2022-11-02 12:53:39', '2022-11-02 12:51:16', '2022-11-02 12:53:39'),
('ddb155cf-fc44-4442-8abf-feafb96edaae', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":32}', '2022-11-03 09:31:31', '2022-11-03 09:31:22', '2022-11-03 09:31:31'),
('df90e263-e5a2-4738-9d1b-61271a62cdac', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 1, '{\"order_code\":\"BSUWLO\",\"id\":64,\"type\":\"ready\"}', '2023-02-28 11:05:03', '2023-02-28 11:05:02', '2023-02-28 11:05:03'),
('e0138ab3-0bb5-4a7c-bab7-eba063adfd7d', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":36}', '2022-11-03 09:35:23', '2022-11-03 09:32:36', '2022-11-03 09:35:23'),
('e12ebb1d-016c-4b44-8451-350315b60b92', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":21}', NULL, '2023-04-16 10:11:31', '2023-04-16 10:11:31'),
('e3bd5c4e-3676-4613-a640-703c84798987', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 1, '{\"order_code\":\"YYZHGB\",\"id\":53,\"type\":\"ready\"}', '2023-02-07 11:45:20', '2023-02-07 09:29:45', '2023-02-07 11:45:20'),
('e72b3a07-9ffd-4b57-aa54-e4920eb37912', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":66}', '2023-03-02 11:05:19', '2023-03-01 11:15:12', '2023-03-02 11:05:19'),
('e754530b-e056-4224-9985-af5aec5998d0', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":10}', '2022-11-03 08:34:59', '2022-11-03 08:32:45', '2022-11-03 08:34:59'),
('e7675716-2670-4770-959b-f1c6eaff376f', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"KXDYVR\",\"id\":37,\"type\":\"ready\"}', '2022-11-09 12:02:27', '2022-11-03 09:36:31', '2022-11-09 12:02:27'),
('e95f75d3-3841-44ee-b913-955bf2c49247', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":12}', '2022-11-03 08:45:08', '2022-11-03 08:43:50', '2022-11-03 08:45:08'),
('eac5c7a7-c6fe-425d-97be-ceed4061b7e3', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":49}', '2023-02-07 09:16:19', '2023-02-07 08:57:27', '2023-02-07 09:16:19'),
('ec317421-1939-4481-8578-7b97390b2f4e', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":57}', '2023-03-02 11:05:19', '2023-02-18 09:37:47', '2023-03-02 11:05:19'),
('ed68e2ae-ad31-46c8-9931-30f8d9cd2953', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 4, '{\"order_code\":\"TSCO1Z\",\"id\":5,\"type\":\"ready\"}', '2022-11-02 12:53:39', '2022-11-02 12:52:40', '2022-11-02 12:53:39'),
('eda5bbca-5fd4-4cfc-b976-5fe484667754', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":51}', '2023-02-07 09:25:06', '2023-02-07 09:24:59', '2023-02-07 09:25:06'),
('efe15cb8-78a6-437f-8ca1-1637b9e6c8f3', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":68}', '2023-03-02 11:05:19', '2023-03-02 11:03:48', '2023-03-02 11:05:19'),
('f08db64d-994d-45fe-bf64-0df0e50c8ef2', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":31}', '2022-11-03 09:31:31', '2022-11-03 09:31:18', '2022-11-03 09:31:31'),
('f2baebef-38c2-43a2-a508-f0d92fd057e9', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":58}', '2023-03-02 11:05:19', '2023-02-18 09:55:29', '2023-03-02 11:05:19'),
('f755396d-df61-4d8f-afbb-77650ff0a4a0', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":55}', '2023-03-02 11:05:19', '2023-02-16 12:46:20', '2023-03-02 11:05:19'),
('f86b3dcd-965f-4e47-98ce-ce2552ffc8e2', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":6}', '2022-11-02 12:47:01', '2022-11-02 12:45:48', '2022-11-02 12:47:01'),
('f8d1ba57-aa10-470c-9d9a-c4836c5a3f4e', 'App\\Notifications\\OrderStatus', 'App\\Models\\User', 2, '{\"order_code\":\"URYL0N\",\"id\":43,\"type\":\"ready\"}', '2022-11-09 12:14:42', '2022-11-09 12:08:43', '2022-11-09 12:14:42'),
('fa532c15-8d3a-45f5-9a91-d0f4afdb3e1a', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":15}', '2022-11-03 08:54:28', '2022-11-03 08:54:15', '2022-11-03 08:54:28'),
('fb57e709-5459-4142-a0ac-980282f5bce2', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":52}', '2023-02-07 09:25:45', '2023-02-07 09:25:38', '2023-02-07 09:25:45'),
('fc052c45-4c3e-4c04-a4b8-4f75820e8295', 'App\\Notifications\\NewOrder', 'App\\Models\\User', 3, '{\"order_id\":69}', '2023-03-02 11:31:58', '2023-03-02 11:31:42', '2023-03-02 11:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `item_count` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `qr_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daily_code` int(11) NOT NULL DEFAULT '0',
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cooking_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `customer_id`, `cart_id`, `item_count`, `grand_total`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`, `qr_code`, `profit`, `daily_code`, `discount`, `start_at`, `cooking_time`) VALUES
(8, 'WXCLFM', 24, 104, 2, 11000, 4, '2023-04-13 11:39:58', '2023-04-13 12:10:51', 2, 2, 'WXCLFM.png', '5500', 1, '0', '2023-04-13 15:10:47', 41),
(9, 'OEDWAI', 34, 106, 1, 42000, 4, '2023-04-13 20:33:24', '2023-04-15 08:39:44', 2, 2, 'OEDWAI.png', '41998', 2, '0', '2023-04-13 23:33:41', 2),
(10, 'L9WCA7', 23, 105, 4, 78500, 4, '2023-04-13 20:36:57', '2023-04-15 12:46:31', 2, 2, 'L9WCA7.png', '61498', 3, '0', '2023-04-15 11:39:34', 54),
(11, 'RGJLTV', 32, 108, 2, 11000, 4, '2023-04-15 11:22:11', '2023-04-15 12:46:30', 2, 2, 'RGJLTV.png', '5500', 1, '0', '2023-04-15 15:22:10', 41),
(12, 'RUYFJI', 24, 107, 3, 91500, 4, '2023-04-15 11:30:13', '2023-04-15 12:46:31', 1, 1, 'RUYFJI.png', '54500', 2, '50', '2023-04-15 15:22:09', 64),
(13, '1UO2SH', 23, 109, 2, 12000, 4, '2023-04-15 12:21:35', '2023-04-15 12:46:29', 1, 1, '1UO2SH.png', '7000', 3, '0', '2023-04-15 15:22:08', 43),
(14, 'TR3WHN', 34, 110, 1, 5000, 4, '2023-04-15 12:21:52', '2023-04-15 12:46:27', 1, 1, 'TR3WHN.png', '2500', 4, '0', '2023-04-15 15:22:07', 21),
(15, 'DEI0RJ', 23, 111, 5, 63500, 4, '2023-04-15 12:40:16', '2023-04-15 14:10:07', 1, 1, 'DEI0RJ.png', '53498', 5, '0', '2023-04-15 15:47:32', 67),
(16, 'ETGB9N', 33, 112, 4, 21500, 4, '2023-04-15 12:47:12', '2023-04-15 14:10:08', 1, 1, 'ETGB9N.png', '11500', 6, '0', '2023-04-15 15:47:29', 59),
(17, 'KWVAPZ', 23, 113, 3, 31000, 4, '2023-04-15 14:10:27', '2023-04-15 14:28:36', 1, 1, 'KWVAPZ.png', '18000', 7, '0', '2023-04-15 17:10:40', 52),
(18, 'SUCKHM', 24, 116, 1, 5000, 1, '2023-04-16 06:43:31', '2023-04-16 06:43:31', 1, 1, 'SUCKHM.png', '2500', 1, '0', NULL, 21),
(19, 'TIPME1', 24, 118, 7, 264000, 1, '2023-04-16 10:00:27', '2023-04-16 10:00:27', 2, 2, 'TIPME1.png', '228492', 2, '0', NULL, 108),
(20, 'B4U9C2', 24, 119, 4, 60500, 1, '2023-04-16 10:08:10', '2023-04-16 10:08:10', 2, 2, 'B4U9C2.png', '52998', 3, '0', NULL, 66),
(21, 'OTH1FW', 23, 120, 3, 18500, 1, '2023-04-16 10:11:31', '2023-04-16 10:11:31', 2, 2, 'OTH1FW.png', '11000', 4, '0', NULL, 64);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `cooking_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `category_id`, `created_at`, `updated_at`, `name_ar`, `description_ar`, `price`, `cost`, `active`, `cooking_time`) VALUES
(36, 'BEEF SLiDER', 'crunchy chiken topped with chedder cheese Sauce,Fresh Lettunce and crushed cheetos chips with special Graffiti saus', '2023033011442.jpg', 13, '2023-03-30 08:44:20', '2023-04-01 13:39:58', 'سلايدر اللحم', 'دجاج مقرمش مضاف اليه صلصة جبنة الشيدر  ,خس طازج ,مطحون رقائق الشيتوس ,بالاضافة الى خلطة جرافيتي الخاصة', '7500', 7500, 1, '6'),
(37, 'ASAMURAI CRUNCHY CHICKEN BURGER', 'Crunchy Chicken topped with Sliced Pepper Jack Cheese, Shredded Iceberg Lettuce, Sliced Tomato, and Sliced Smoked Turkey Bacon with Samurai Sauce', '2023033012043.jpg', 12, '2023-03-30 09:04:58', '2023-04-01 13:39:30', 'برغر دجاج الساموراي المقرمش', 'دجاج مقرمش مضاف اليه شرائح جبن بيبر جاك,خس ايبرغ مبشور,شرائح طماطم,شرائح الديك الرومي المدخن بالاضافة الى خلطة الساموراي', '8500', 4000, 1, '9'),
(38, 'MAHARAJA CRUNCHY CHICKEN BURGER', 'Crunchy Chicken topped with Sliced Pepper Jack Cheese, Coleslaw, and Grilled Onion with Curry Sauce', '2023033013074.jpg', 12, '2023-03-30 10:07:44', '2023-04-01 13:38:58', 'برغر الدجاج مهراجا المقرمش', 'دجاج مقرمش مضاف اليه شرائح جبن بيبر جاك,سلطة ملفوف, بصل مشوي بالاضافة الى صلصة الكاري', '8000', 4000, 1, '8'),
(39, 'SPICY MAHARAJA CRUNCHY CHICKEN BURGER', 'Crunchy Chicken topped with Sliced Pepper Jack Cheese, Coleslaw. Grilled Onion. and Sliced Jalaneno with Currv', '2023033013328.png', 12, '2023-03-30 10:32:48', '2023-04-01 13:38:27', 'برغر دجاج مهراجا المقرمش', 'دجاج مقرمش مضاف اليه شرائح جبن بيبر جاك,سلطة ملفوف,بصل مشوي,شرائح هالبينو,بالاضافة االى صلصة الكاري', '8500', 3000, 1, '11'),
(40, 'SMOKED CRUNCHYCHICKEN', 'Crispy Chicken, Cheese, Beef Bacon, Crushed Cheetos, Onion Rings, Smoked Sauce', '20230330135510.png', 12, '2023-03-30 10:55:33', '2023-04-01 13:38:03', 'كرانشي الدجاج المقرمش', 'دجاج جبن,لحم مقدد,شيتوس مطحون,حلقات البصل,صلصة مدخنة', '8500', 4000, 1, '12'),
(41, 'SPICY CRUNCHY CHICKEN BURGER', 'Crispy Chicken, Cheese, Beef Bacon, Crushed Cheetos, Onion Rings, Smoked Sauce', '20230330141211.png', 12, '2023-03-30 11:12:18', '2023-04-01 13:37:28', 'برغر الدجاج المقرمش', 'دجاج مقرمش مضاف اليه صلصة جبنة الشيدر,خس طازج,مطحون رقائق الشيتوس الحار,شرائح هالبينو,بالاضافة الى جرافيتي الخاصة الحارة', '8000', 4500, 1, '15'),
(42, 'Spicy samurai crunchy chicken burger', 'CrunchyChickentoppedwithSlicedPepperJackCheese shredded iceberg lettuce,sliced Tomato,sliced,Jalapeno,ana sliced smoked Turkey Bacon with samurai souce', '202304011658برغر دجاج.png', 12, '2023-04-01 13:58:46', '2023-04-01 13:58:46', 'برغر دجاج الساموراي المقرمش', 'دجاج مقرمش مضاف اليه شرائح جبن بيبر جاك,خس ايسبرغ مبشور, شرائح طماطم,شرائح هالبينو, شرائح الديك الرومي المدخن, بالاضافة الى خلطة الساموراي', '9000', 5000, 1, '10'),
(43, 'GRAFFTIBURGERWITHE66', 'wagyu Beef patty topped with sliced American cheese fresh lettuce pickiles ,Egg, and sliced tomato with special graffiti sauce', '202304011718برغر لحم.png', 13, '2023-04-01 14:18:32', '2023-04-01 14:18:32', 'جرافيتي برغر مع البيض', 'شرائح لحم واغيو مضاف اليها شرائح الجبن الامريكي, خس طازج, مخلل بيض, شرائح طماطم, بالاضافة الى خلطة جرافيتي الخاصة', '9000', 4500, 1, '15'),
(44, 'CHETOS BEF BURGER', 'BEEF patty  topped with silced American cheese, and crushed spicy cheetos chips with special sause', '202304012236beef burger.png', 13, '2023-04-01 19:36:39', '2023-04-01 19:41:40', 'برغر لحم بالشيتوس', 'شرائح لحم مضاف اليها شرائح الجبن الامريكي, مطحون رقائق الشيتوس الحار,بالاضافة الى خلطة خاصة', '(s) 9000    (D) 13000', 5000, 1, '17'),
(45, 'MUSLROOM BEEF BURGER', 'Beef patty topped with silced American cheese, grilled onion, and Grilled mushroom sauce', '202304012254beef burger.png', 13, '2023-04-01 19:54:17', '2023-04-01 19:54:17', 'برغر لحم مشروم', 'شرائح لحم مضاف اليها شرائح الجبن الامريكي, بصل مشوي, مشروم مشوي بالاضافة الى صلصة المشروم', '(s) 9000     (D)  13000', 6000, 1, '20'),
(46, 'ZENGOBEEFBURGER', 'Beef patty stuffed with 3 different cheese types (American cheese- pepper Jack cheese- mozzarella cheese) topped with silced American cheese, fresh lettuce with Deluxe sause', '202304012317زينغو برغر.png', 13, '2023-04-01 20:17:41', '2023-04-01 20:17:41', 'زينغو برغر لحم', 'شرائح لحم محشوة ب3 اصناف جبنة مختلفة (جبنة امريكية - جبنة بيبر جاك - جبنة موزاريلا) مضاف اليها شرائح الجبن الامريكي, خس طازج بالاضافة الى خلطة ديلوكس', '13500', 5000, 1, '22'),
(47, 'BEEFSAMURAIBURGER', 'Beef patty topped with silced swiss cheese ,fresh lettuce, and silced Tomato with samurai sauce', '202304021526ساموراي برغر.png', 13, '2023-04-02 12:26:58', '2023-04-02 12:26:58', 'برغر لحم ساموراي', 'شرائح لحم مضاف اليها شرائح الجبنة السويسرية خس طازج, شرائح طماطم بالاضافة الى خلطة الساموراي', '9000', 4500, 1, '25'),
(48, 'BRIOCHEBEEFBURGER', 'Brioche bun stuffed with Beef patty, silced Amercian cheese, chopped Beef Bacon, Grilled onion with a special sauce', '202304021534برغر بريوش.png', 13, '2023-04-02 12:34:26', '2023-04-02 12:34:26', 'برغر لحم بريوش', 'خبز بريوش محشو بشرائح اللحم مضاف اليها شرائح الجبن الامريكي, لحم مقدد , بصل مشوي. بالاضافة الى خلطة خاصة', '13000', 5000, 1, '23'),
(49, 'GRAFFITIBURGER', 'Wagyu Beef patty topped with sliced American cheese, fresh lettuce ,pickles, and silced Tomato with special Graffiti Sauce', '202304021541جرافيتي برغر.png', 13, '2023-04-02 12:41:57', '2023-04-02 12:41:57', 'جرافيتي برغر', 'شرائح لحم واغيو مضاف اليها شرائح الجبن الامريكي, خس طازج, مخلل, شرائح طماطم, بالاضافة الى خلطة جرافيتي الخاصة', '8000', 4500, 1, '27'),
(50, 'GRAFFITIBURGER  (meal)', 'Wagyu Beef patty topped with sliced American cheese, fresh lettuce ,pickles, and silced Tomato with special Graffiti Sauce', '202304021547جرافيتي برغر.png', 13, '2023-04-02 12:47:50', '2023-04-02 12:47:50', 'جرافيتي برغر', 'شرائح لحم واغيو مضاف اليها شرائح الجبن الامريكي, خس طازج, مخلل, شرائح طماطم, بالاضافة الى خلطة جرافيتي الخاصة', '11000', 4500, 1, '27'),
(51, 'COWBOY', 'لBeef pattyu, smoke cheese, lettuce, Tomato, Barbecue sauce, Deluxe sauce', '202304021601كابوي برغر.png', 13, '2023-04-02 13:01:36', '2023-04-02 13:01:36', 'كابوي', 'لحم , جبن مدخن, طماطم , خس , ضلضة الباربيكيو , ضلصة ديلوكس', '8500', 4000, 1, '24'),
(52, 'COWBOY (Meal)', 'لBeef pattyu, smoke cheese, lettuce, Tomato, Barbecue sauce, Deluxe sauce', '202304021605كابوي برغر.png', 13, '2023-04-02 13:05:01', '2023-04-02 13:05:33', 'كابوي', 'لحم , جبن مدخن, طماطم , خس , ضلضة الباربيكيو , ضلصة ديلوكس', '12000', 4000, 1, '24'),
(53, 'SMOKE BE EF BURGER', 'Beef paty topped with silced Amercian cheese, chopped Beef  bacon , and fried onion rings with smoke sauc', '202304021621برغر لحم مدخن.png', 13, '2023-04-02 13:21:24', '2023-04-02 13:21:24', 'برغر لحم مدخن', 'شرائح لحم مضاف اليها شرائح الجبن الامريكي , لحم مقدد , حلقات البصل المقلية ,بالاضافة الى صلصة مدخنة', '9000', 5000, 1, '12'),
(54, 'OVERLOADBEFBURGER', NULL, '202304030253برغر لحم اوفر لود.png', 13, '2023-04-02 23:53:07', '2023-04-02 23:53:07', 'برغر لحم اوفرلود', NULL, '10000', 5000, 1, '30'),
(55, 'OVERLOADBEFBURGER', NULL, '202304030255برغر لحم اوفر لود.png', 13, '2023-04-02 23:55:48', '2023-04-02 23:55:48', 'برغر لحم اوفرلود', NULL, '14000', 5000, 1, '30'),
(56, 'RENGO BE EF BURGER', NULL, '202304031514رينغو برغر.png', 13, '2023-04-03 12:14:47', '2023-04-03 12:14:47', 'رينغو برغر لحم', NULL, '14000', 5000, 1, '34'),
(57, 'BEEF ANDELOUS BURGER', NULL, '202304031517برغر لحم اندلسي.png', 13, '2023-04-03 12:17:59', '2023-04-03 12:17:59', 'برغر لحم اندلسي', NULL, '9500', 4500, 1, '20'),
(58, 'DELUXEBURGER', NULL, '202304031524ديلوكس برغر.png', 13, '2023-04-03 12:24:37', '2023-04-03 12:24:37', 'ديلوكس برغر', NULL, '9500', 4000, 1, '22'),
(59, 'DELUXEBURGER  (meal)', NULL, '202304031526ديلوكس برغر.png', 13, '2023-04-03 12:26:25', '2023-04-03 12:27:02', 'ديلوكس برغر', NULL, '12500', 4000, 1, '22'),
(60, 'CHICKEN CHE ETOS WRAP', NULL, '202304031548راب دجاج بالشيتوس.png', 14, '2023-04-03 12:48:50', '2023-04-03 12:48:50', 'راب دجاج بالشيتوس', NULL, '6500', 3000, 1, '20'),
(61, 'CHICKEN ROLER', NULL, '202304031552رول مقرمش.png', 14, '2023-04-03 12:52:29', '2023-04-03 12:52:29', 'رول دجاج مقرمش', NULL, '7000', 2500, 1, '20'),
(62, 'CHICKEN CURRY PORRATA', NULL, '202304051511دجاج كاري بالبارتا.png', 13, '2023-04-03 12:57:05', '2023-04-05 12:11:52', 'دجاج كاري بالبراتا', NULL, '5500', 2000, 1, '20'),
(63, 'CLASSICHOTDOG', NULL, '202304031602نقانق كلاسيك.png', 14, '2023-04-03 13:02:18', '2023-04-03 13:02:18', 'نقانق كلاسيك', NULL, '5500', 2000, 1, '25'),
(64, 'SPECIALLINTONG', NULL, '202304031606نقانق خاص.png', 14, '2023-04-03 13:06:01', '2023-04-03 13:06:01', 'نقانق خاص', NULL, '6000', 3000, 1, '15'),
(65, 'SMOKE HOTDOG', NULL, '202304031608نقانق مدخن.png', 14, '2023-04-03 13:08:43', '2023-04-03 13:08:43', 'نقانق مدخن', NULL, '6500', 3500, 1, '20'),
(66, 'CHICKEN ROLLER', NULL, '202304051510رول الدجاج المقرمش الحار.png', 14, '2023-04-03 13:13:36', '2023-04-05 12:10:08', 'رول الدجاج المقرمش الحار', NULL, '7500', 3500, 1, '32'),
(67, 'GRAFFITI STEAK', NULL, '202304031616جرافيتي ستيك.png', 14, '2023-04-03 13:16:42', '2023-04-03 13:16:42', 'جرافيتي ستيك', NULL, '7000', 3000, 1, '20'),
(68, 'COCACOLA', NULL, '202304031632كوكا كولا.png', 17, '2023-04-03 13:32:50', '2023-04-03 13:32:50', 'كوكا كولا', NULL, '1000', 250, 1, '20'),
(69, 'FANTA', NULL, '202304031635فانتا.png', 17, '2023-04-03 13:35:56', '2023-04-03 13:35:56', 'فانتا', NULL, '1000', 250, 1, '1'),
(70, 'SPRITE', NULL, '202304031638سبرايت.png', 17, '2023-04-03 13:38:01', '2023-04-03 13:38:01', 'سبرايت', NULL, '1000', 250, 1, '1'),
(71, 'CLASICOREOMILKSHAKE', NULL, '202304031645كلاسيك ميلك شيك اوريو.png', 17, '2023-04-03 13:45:18', '2023-04-03 13:45:18', 'كلاسيك ميلك شيك اوريو', NULL, '7000', 2500, 1, '2'),
(72, 'STRAWBERRYMLIKSHAKE', NULL, '202304031649فراولة ميلك شيك.png', 17, '2023-04-03 13:49:18', '2023-04-03 13:49:18', 'فراولة ميلك شيك', NULL, '7000', 2000, 1, '3'),
(73, 'LOTUSMLIKSHAKE', NULL, '202304031651ميلك شيك لوتس.png', 17, '2023-04-03 13:51:47', '2023-04-03 13:51:47', 'ميلك شيك لوتس', NULL, '7000', 3000, 1, '5'),
(74, 'COCACOLAZERO', NULL, '202304031654كوكا كولا زيرو.png', 17, '2023-04-03 13:54:24', '2023-04-03 13:54:24', 'كوكا كولا زيرو', NULL, '1000', 250, 1, '4'),
(75, 'Water', NULL, '202304031657مياه غازية.png', 17, '2023-04-03 13:57:06', '2023-04-03 13:57:06', 'مياه غازية', NULL, '500', 250, 1, '7'),
(76, 'BLUE CURACAO MOJTI O', NULL, '202304040320بلو كوراكو.png', 17, '2023-04-04 00:20:19', '2023-04-04 00:20:19', 'بلو كوراكو موهيتو', NULL, '5500', 2000, 1, '3'),
(77, 'BLUE CURACAO MOJTI O', NULL, '202304040320بلو كوراكو.png', 17, '2023-04-04 00:20:20', '2023-04-04 00:20:20', 'بلو كوراكو موهيتو', NULL, '5500', 2000, 1, '3'),
(78, 'STRAWBERYMOJITO', NULL, '202304040323فراولة موهيتو.png', 17, '2023-04-04 00:23:22', '2023-04-04 00:23:22', 'فراولة موهيتو', NULL, '5500', 2000, 1, '6'),
(79, 'GRENADINE MOJITO', NULL, '202304040326كريادين موهيتو.png', 17, '2023-04-04 00:26:07', '2023-04-04 00:26:07', 'كريادين موهيتو', NULL, '5500', 2000, 1, '5'),
(80, 'PASSION FRUIT MOJITO', NULL, '202304040328باشن فروت موهيتو.png', 17, '2023-04-04 00:28:35', '2023-04-04 00:28:35', 'باشن فروت موهيتو', NULL, '5500', 2000, 1, '7'),
(81, 'RASPBERRY MOJITO', NULL, '202304040331توت موهيتو.png', 17, '2023-04-04 00:31:19', '2023-04-04 00:31:19', 'توت موهيتو', NULL, '5500', 2000, 1, '8'),
(82, 'FRIES', NULL, '202304040518FRIES.png', 15, '2023-04-04 02:18:54', '2023-04-04 02:18:54', 'بطاطس مقلية', NULL, '3000', 1000, 1, '15'),
(83, 'TWISTIER FRIES', NULL, '202304041409بطاطس تويستر.png', 15, '2023-04-04 11:09:05', '2023-04-04 11:09:05', 'بطاطا تويستر', NULL, '4000', 2000, 1, '7'),
(84, 'TWISTER CHESE FRIES', NULL, '202304041411بطاطس تويستر باللجبن.png', 15, '2023-04-04 11:11:10', '2023-04-04 11:11:10', 'بطاطا تويستر بالجبن', NULL, '5500', 2000, 1, '15'),
(85, 'TWISTER FRIES WTIH SAUCE', NULL, '202304041412بطاطس تويستر بالصلصة.png', 15, '2023-04-04 11:12:41', '2023-04-04 11:12:41', 'بطاطا تويستر بالصلصة', NULL, '5000', 2000, 1, '20'),
(86, 'SWETPOTATOFRIES', NULL, '202304041414بطاطس حلوة.png', 15, '2023-04-04 11:14:01', '2023-04-04 11:14:01', 'بطاطا حلوة', NULL, '4500', 2000, 1, '14'),
(87, 'CHEESEFRIES', NULL, '202304041415بطاطا باللجبنة.png', 15, '2023-04-04 11:15:25', '2023-04-04 11:15:25', 'بطاطا بالجبن', NULL, '4000', 2500, 1, '12'),
(88, 'F R I E S WTI H SAUCE', NULL, '202304041418بطاطا بالصلصة.png', 15, '2023-04-04 11:18:41', '2023-04-04 11:18:41', 'بطاطا بالصلصة', NULL, '5000', 2500, 1, '13'),
(89, 'CHEETOSCHEESFRIES', NULL, '202304041423بطاطا بالجبنة والشيتوس.png', 15, '2023-04-04 11:23:04', '2023-04-04 11:23:04', 'بطاطا بالجبنة والشيتوس', NULL, '5000', 2000, 1, '18'),
(90, 'GRAFITICRAZYSTYLEFRIES', NULL, '202304041445بطاطا جرافيتي كريزي ستايل.png', 15, '2023-04-04 11:45:43', '2023-04-04 11:45:43', 'بطاطا جرافيتي كريزي ستايل', NULL, '6000', 3000, 1, '29'),
(91, 'GRAF FITI STYLE FRIES', NULL, '202304041511بطاطا جرافيتي ستايل.png', 15, '2023-04-04 12:11:43', '2023-04-04 12:11:43', 'بطاطا جرافيتي ستايل', NULL, '4500', 2000, 1, '16'),
(92, 'SPiCY GRAF FITI STYLE FRIES', NULL, '202304041513بطاطا جرافيتي ستايل الحارة.png', 15, '2023-04-04 12:13:10', '2023-04-04 12:13:10', 'بطاطا جرافيتي ستايل حارة', NULL, '5000', 2500, 1, '14'),
(93, 'CHILICHESEFRIES', NULL, '202304041515بطاطا تشيلي تشيز.png', 15, '2023-04-04 12:15:24', '2023-04-04 12:15:24', 'بطاطا تشيلي تشيز', NULL, '7500', 3000, 1, '12'),
(94, 'BONELESBUFALOCHCIKEN', NULL, '202304041528بافلو الدجاج.png', 16, '2023-04-04 12:28:01', '2023-04-04 12:28:01', 'بافلو الدجاج', NULL, '6500', 3000, 1, '17'),
(95, 'BARBECUECHICKENWNIGS', NULL, '202304041530اجنحة الدجاج بالباربيكيو.png', 16, '2023-04-04 12:30:09', '2023-04-04 12:30:09', 'اجنحة دجاج بالباربيكيو', NULL, '7000', 3000, 1, '14'),
(96, 'BUFFALO CHICKEN WINGS', NULL, '202304041533اجنحة الدجاج بالبافلو.png', 16, '2023-04-04 12:33:50', '2023-04-04 12:33:50', 'اجنحة الدجاج بالبافلو', NULL, '6500', 3000, 1, '14'),
(97, 'DYNAMITE SHRIMP', NULL, '202304041538داينيمت روبيان.png', 16, '2023-04-04 12:38:59', '2023-04-04 12:38:59', 'داينميت روبيان', NULL, '10000', 4000, 1, '45'),
(98, 'BUFFALO CHICKEN WINGS', NULL, '202304041542اصابع الموزاريلا.png', 16, '2023-04-04 12:42:14', '2023-04-04 12:42:14', 'اصابع الموزاريلا', NULL, '6000', 2000, 1, '23'),
(99, 'MAC&CHETOS', NULL, '202304041544ماك اند شيتوس.png', 16, '2023-04-04 12:44:40', '2023-04-04 12:44:40', 'ماك اند شيتوس', NULL, '7500', 2000, 1, '10'),
(100, 'CHICKENSTRiPS', NULL, '202304041549تشيكن ستريبس.png', 16, '2023-04-04 12:49:22', '2023-04-04 12:49:22', 'تشكن شتريبس', NULL, '6000', 2500, 1, '9'),
(101, 'ONIONRINGS', NULL, '202304041552حلقات البصل.png', 16, '2023-04-04 12:52:10', '2023-04-04 12:52:10', 'حلقات البصل', NULL, '4500', 2000, 1, '15'),
(102, 'JALAPENDPOPPERS', NULL, '202304051516كرات الجبن بالهالبينو.png', 16, '2023-04-04 13:00:54', '2023-04-05 12:16:58', 'كرات الجبن بالهالبينو', NULL, '5000', 2500, 1, '21'),
(103, 'BONELESDYNAMTIECHICKEN', NULL, '202304041606داينيمت الدجاج.png', 16, '2023-04-04 13:06:04', '2023-04-04 13:06:04', 'داينميت الدجاج', NULL, '6000', 3000, 1, '20'),
(104, 'NK MAC & CHE ETOS', NULL, '202304041610بينك ماك اند جيتوس.png', 16, '2023-04-04 13:10:10', '2023-04-04 13:10:10', 'بينك ماك اند شيتوس', NULL, '7500', 2000, 1, '23'),
(105, 'SHARING BOX', NULL, '202304041615SHARING BOX.png', 18, '2023-04-04 13:15:12', '2023-04-04 13:15:12', 'SHARING BOX', NULL, '42000', 2, 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `created_at`, `updated_at`) VALUES
(1, 'How was the test?', '2023-02-23 13:47:42', '2023-02-23 13:47:42'),
(2, 'How was the food quality?', '2023-02-23 13:47:58', '2023-02-23 13:47:58'),
(3, 'How was the Service quality?', '2023-02-23 13:48:16', '2023-02-23 13:48:16'),
(4, 'هل لديكم ملاحضات على طلبكم', '2023-03-02 11:38:08', '2023-03-02 11:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `title`, `guard_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'web', 1, '2022-10-17 08:09:50', '2022-10-17 08:09:50'),
(2, 'cashier', 'Cashier', 'web', 1, '2022-10-17 08:09:50', '2022-10-17 08:09:50'),
(3, 'kitchen', 'Kitchen', 'web', 1, '2022-10-17 08:09:50', '2022-10-17 08:09:50'),
(4, 'agency', 'agency', 'web', 1, '2023-04-12 11:56:34', '2023-04-12 11:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `phone_number`, `email_verified_at`, `user_type`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '', 'admin@graffiti.com', NULL, '2022-10-17 08:09:50', 'admin', '$2y$10$SE98FSRPMOnFqk7z5BDJPeeL3cGy8LKO5YNSaI965.0BqRPCi6cta', 'pending', 'gweY9mgPlUxfBjsgGUxIt0h69M3Nq2ei3PiV05QWSFMAPqp96CF7qpFkvlTe', '2022-10-17 08:09:50', '2022-10-17 08:09:50'),
(2, 'cashier', 'Cashier', '', 'cashier@graffiti.com', NULL, '2022-10-17 08:09:50', 'cashier', '$2y$10$8b9y3RlOkYlBa1n50pvIsu1rRYG4hT5eeS2wfA8zZFroW/5B9D9r6', 'pending', 'V6gqXuS3Uo97fyuauX4gvNJYR3n0swKP1dsEkGUzqL9Rky66V3cJuFguzMva', '2022-10-17 08:09:50', '2022-10-17 08:09:50'),
(3, 'kitchen', 'Kitchen', '', 'kitchen@graffiti.com', NULL, '2022-10-17 08:09:50', 'kitchen', '$2y$10$OSw0Yks4jKRvwKqHAtGjLeu0AIMXLo.sNEwzn2jG57iZeYIqKyHvm', 'pending', '63Nwr96wJynWF1LzqP6pTFr7RJK0WvoO1uegRcJ0PFzV3rxPcux4tIGv9RJN', '2022-10-17 08:09:50', '2022-10-17 08:09:50'),
(4, 'cashier1', 'Cashier', '1', 'cashier1@graffiti.com', NULL, '2022-11-02 12:42:31', 'cashier', '$2y$10$iaMVdAktEEUyGlFMgF/9UOxP5ccE5ZjusDY9AFSI.zNgVo5A0gVda', 'pending', '3W6jpvcPZgr2H6kf0f4nbLHlF2ISh8kERRHQgKk5JP4zz4WWouVgCPPPekES', '2022-11-02 12:42:31', '2022-11-02 12:42:31'),
(5, 'cashier2', 'Cashier', '2', 'cashier2@graffiti.com', NULL, '2022-11-02 12:42:31', 'cashier', '$2y$10$qWkmAjMG3aGAzx275HdKv.SFe3oxbiBMiPvi3c513OAcrIT4fOlY6', 'pending', 'Bo1cHRHUCb', '2022-11-02 12:42:31', '2022-11-02 12:42:31'),
(6, 'Agency', 'Agency', 'Agency', 'Agency@graffiti.com', NULL, '2023-04-12 11:56:34', 'agency', '$2y$10$/lbgqCQiCUoJIegC8/x9xuKtKzEWkKNUK5ofw9zQA/1oVcfE5lTB6', 'pending', 'lHCLllK0d8', '2023-04-12 11:56:34', '2023-04-12 11:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_addr_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_addr_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` bigint(20) DEFAULT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_extra`
--
ALTER TABLE `cart_extra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_extra_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_extra_extra_id_foreign` (`extra_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_item_extra`
--
ALTER TABLE `cart_item_extra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_item_extra_cart_item_id_foreign` (`cart_item_id`),
  ADD KEY `cart_item_extra_extra_id_foreign` (`extra_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_types`
--
ALTER TABLE `extra_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_ratings`
--
ALTER TABLE `feedback_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `cart_extra`
--
ALTER TABLE `cart_extra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `cart_item_extra`
--
ALTER TABLE `cart_item_extra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `extra_types`
--
ALTER TABLE `extra_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback_ratings`
--
ALTER TABLE `feedback_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_extra`
--
ALTER TABLE `cart_extra`
  ADD CONSTRAINT `cart_extra_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_extra_extra_id_foreign` FOREIGN KEY (`extra_id`) REFERENCES `extras` (`id`);

--
-- Constraints for table `cart_item_extra`
--
ALTER TABLE `cart_item_extra`
  ADD CONSTRAINT `cart_item_extra_cart_item_id_foreign` FOREIGN KEY (`cart_item_id`) REFERENCES `cart_items` (`id`),
  ADD CONSTRAINT `cart_item_extra_extra_id_foreign` FOREIGN KEY (`extra_id`) REFERENCES `extras` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
