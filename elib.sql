-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 أبريل 2022 الساعة 12:58
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elib`
--

-- --------------------------------------------------------

--
-- بنية الجدول `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bio` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(5) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `authors`
--

INSERT INTO `authors` (`id`, `name`, `phone`, `email`, `bio`, `created_at`, `updated_at`, `created_by`, `is_active`) VALUES
(0, 'Osama', 'Alwafy', 'alwafy0516@gmail.com', 'sad czxzxcccc222222', NULL, NULL, 1, 1),
(0, 'Osama', 'Alwafy', 'alwafy0516@gmail.com', 'sad czxzxcccc222222', '2022-03-31 22:48:09', '2022-03-31 22:48:09', 1, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL,
  `pages_number` int(2) NOT NULL,
  `category_id` int(3) NOT NULL,
  `author_id` int(3) NOT NULL,
  `publisher_id` int(3) NOT NULL,
  `quantity` int(2) NOT NULL,
  `format` varchar(255) NOT NULL,
  `created_by` int(3) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`id`, `title`, `image`, `price`, `description`, `pages_number`, `category_id`, `author_id`, `publisher_id`, `quantity`, `format`, `created_by`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'c#', '6246356d97772.jpg', 32, 'c#', 323, 3, 0, 1, 18, 'pdf', 1, 1, '2022-03-31 23:12:45', '2022-03-31 23:12:45'),
(2, 'C#', '6249ed1fcd82f.jpg', 18, 'C#', 180, 3, 0, 1, 200, 'book electrony', 1, 1, '2022-04-03 18:53:19', '2022-04-03 18:53:19'),
(3, 'dins', '6249fd52de60b.jpg', 18, 'dins', 850, 3, 0, 1, 452, 'book electrony', 1, 1, '2022-04-03 20:02:26', '2022-04-03 20:02:26'),
(4, 'dins', '6249fdc74f494.jpg', 18, 'dins', 850, 16, 0, 1, 452, 'book electrony', 1, 1, '2022-04-03 20:04:23', '2022-04-03 20:04:23'),
(5, 'book hisory', '624a136cd16c9.jpg', 80, 'book hisory', 880, 18, 0, 1, 78, 'pdf', 1, 1, '2022-04-03 21:36:44', '2022-04-03 21:36:44'),
(6, 'book hisory', '624a13a72ef60.jpg', 80, 'book hisory', 880, 18, 0, 1, 78, 'pdf', 1, 1, '2022-04-03 21:37:43', '2022-04-03 21:37:43'),
(7, 'roiat a', '624a17c6dc529.jpg', 90, 'roiat a', 200, 19, 0, 1, 80, 'book electrony', 1, 1, '2022-04-03 21:55:18', '2022-04-03 21:55:18'),
(8, 'sias1', '624a2750ce166.jpg', 200, 'sias1', 120, 20, 0, 1, 180, 'book electrony', 1, 1, '2022-04-03 23:01:36', '2022-04-03 23:01:36');

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `is_active`, `created_at`, `upated_at`, `created_by`) VALUES
(16, 'din', '624749d4a5e5e.jpg', 1, '2022-04-01 18:52:04', '2022-04-01 18:52:04', 5),
(18, 'history', '624a13193d664.jpg', 1, '2022-04-03 21:35:21', '2022-04-03 21:35:21', 5),
(19, 'ro', '624a17775416c.jpg', 1, '2022-04-03 21:53:59', '2022-04-03 21:53:59', 5),
(20, 'siasa', '624a2716a26d0.jpg', 1, '2022-04-03 23:00:38', '2022-04-03 23:00:38', 5);

-- --------------------------------------------------------

--
-- بنية الجدول `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `cities`
--

INSERT INTO `cities` (`id`, `name`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Taiz', 1, '2022-03-31 22:37:53', '2022-03-31 22:37:53', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discount` double NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `book_ids` varchar(255) DEFAULT NULL,
  `category_ids` varchar(255) DEFAULT NULL,
  `all_books` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `offers`
--

INSERT INTO `offers` (`id`, `title`, `discount`, `start_date`, `end_date`, `book_ids`, `category_ids`, `all_books`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'down', 18, '2021-06-18', '2021-07-01', '2', '2', NULL, 1, '2022-03-31 23:50:56', '2022-03-31 23:50:56', 1),
(2, 'down', 18, '2021-06-18', '2021-06-23', '2', '2', 1, 1, '2022-03-31 23:52:04', '2022-03-31 23:52:04', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(3) NOT NULL,
  `user_id` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `total` double NOT NULL,
  `discount` double NOT NULL,
  `net_total` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upadted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_method` int(2) DEFAULT NULL,
  `address_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
`id` int(2) NOT NULL,
  `order_id` int(2) NOT NULL,
  `book_id` int(2) NOT NULL,
  `quantity` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `payements`
--

CREATE TABLE IF NOT EXISTS `payements` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `payements`
--

INSERT INTO `payements` (`id`, `name`, `image`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(0, 'visa', '624631b02a1b9.jpg', 1, '2022-03-31 22:56:48', '2022-03-31 22:56:48', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
`id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `alt_phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `phone`, `alt_phone`, `fax`, `email`, `address`, `country`, `image`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'gateeer', '755555', NULL, 'sadsad@sddasd.co', 'alwafy0516@gmail.com', 'sina@asdsad', 'yemen@dassad', '62463b628bee7.jpg', 1, '2022-03-31 23:38:10', '2022-03-31 23:38:10', 1),
(2, 'gateeer', '755555', NULL, 'sadsad@sddasd.co', 'alwafy0516@gmail.com', 'sina@asdsad', 'yemen@dassad', '62463bb48a03c.jpg', 1, '2022-03-31 23:39:32', '2022-03-31 23:39:32', 1),
(3, 'greer', '0736990516', '73699933', 'asadd', 'alwafy0516@gmail.com', 'Taiz', '?????', '62463be7d9157.jpg', 1, '2022-03-31 23:40:23', '2022-03-31 23:40:23', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `roles`
--

INSERT INTO `roles` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, '2022-03-28 15:27:53', '2022-03-28 15:27:53'),
(2, 'users', 1, '2022-03-28 15:29:34', '2022-03-28 15:29:34');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `role_id` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_active`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'dasdadasd', 'alwafy0516@gmail.com', 'asdasdad', 1, 1, '2022-04-01 18:49:18', '2022-04-01 18:49:18');

-- --------------------------------------------------------

--
-- بنية الجدول `user_addresses`
--

CREATE TABLE IF NOT EXISTS `user_addresses` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `city_id` int(2) NOT NULL,
  `address` varbinary(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `user_payment_methods`
--

CREATE TABLE IF NOT EXISTS `user_payment_methods` (
`id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `payement_id` int(2) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
`id` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `country` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payment_methods`
--
ALTER TABLE `user_payment_methods`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_is` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_payment_methods`
--
ALTER TABLE `user_payment_methods`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `user_profiles`
--
ALTER TABLE `user_profiles`
ADD CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
ADD CONSTRAINT `user_profiles_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
