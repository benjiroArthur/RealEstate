-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 06:14 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real-estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `phone_number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Benjamin Arthur', 'majorcaios@gmail.com', 'benjiro', '0241842651', '$2y$10$L6vTqFQoMYN85J5roGUMD.F5ouhN6S0Zg3qiGhH1JTpc3yRxGfH.e', 'G1AMwvQTylLdsnpTMuELHip59soRB5oQKgkKHTO1Cyq899p0qlVO1zzTCybQ', '2018-07-17 15:16:20', '2018-07-17 15:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone_number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'benjamin arthur', 'majorcaios@gmail.com', '0241842651', 'This is a test message.', '2018-07-15 08:22:48', '2018-07-15 08:22:48'),
(2, 'benjiro', 'lilcaios@ymail.com', '0241558866', 'this is the second test message', '2018-07-15 08:26:37', '2018-07-15 08:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `properties_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_13_093510_create_properties_table', 1),
(4, '2018_07_13_205302_create_contacts_table', 2),
(5, '2018_07_17_120954_create_admins_table', 3),
(6, '2018_08_01_192702_create_images_table', 4),
(7, '2018_08_01_200520_add__properties_id_to_images', 5),
(8, '2018_08_01_201356_add_user_id_to_properties', 6),
(9, '2018_08_02_103633_add_transaction_type_to_properties', 7),
(10, '2018_08_09_203429_create_orders_table', 8),
(11, '2019_01_01_220914_create_notify_mes_table', 9),
(12, '2019_01_01_222400_create_notify_mes_table', 10),
(13, '2019_01_02_105809_add_property_type_to_properties', 11),
(14, '2019_01_02_183331_add_available_to_properties', 12),
(15, '2019_01_08_011201_add_class_to_properties', 13),
(16, '2019_01_08_011943_add_class_to_properties', 14),
(17, '2019_05_11_143825_add_role_to_users', 15),
(18, '2019_05_11_200740_add_admin_to_users', 16),
(19, '2019_05_13_122842_add_pdw_change_to_users', 17),
(20, '2019_05_27_181032_add_p_id_to_properties_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `notify_me`
--

CREATE TABLE `notify_me` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `notify_me`
--

INSERT INTO `notify_me` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'kofitutu@gh.com', '2019-01-01 22:51:11', '2019-01-01 22:51:11'),
(2, 'kkb@ggr.com', '2019-01-01 22:51:54', '2019-01-01 22:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `streetAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentMethod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cardNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertyId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transactionType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('majorcaios@gmail.com', '$2y$10$tYROM8HdOlaHqj0haVe3c.Ij0AGbzdPc8YeRUpJrbswyj9s33SY8C', '2018-07-18 14:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `p_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `access` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_space` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utility` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `p_id`, `user_id`, `name`, `price`, `address`, `images`, `access`, `floor_space`, `utility`, `description`, `transaction_type`, `property_type`, `structure_type`, `available`, `class`, `created_at`, `updated_at`) VALUES
(1, 'LGR/19/1', 10, 'PROPERTY 1', '45000.00', 'ADENTA STREET 54/6 A, ACCRA', 'a_1560868595.jpg,b_1560868597.jpg,c_1560868599.jpg,d_1560868599.jpg,e_1560868599.jpg,f_1560868600.png', 'WELL CONSTRUCTED ROAD', '25000', 'ELECTRICITY, WATER, REGULAR TRASH COLLECTION', 'A FOUR BED ROOM HOUSE WITH MASTER BED ROOM, KITCHEN, RASH ROOM', 'Sale', 'Home', 'Mansion', 1, 1, '2019-06-18 14:36:40', '2019-06-18 16:07:11'),
(2, 'LGR/19/2', 10, 'PROPERTY 2', '700.00', 'BK 66 ANAJI WEST LINE, TAKORADI', 'a_1560868815.jpg,b_1560868815.jpg,c_1560868815.jpg,d_1560868816.jpg,e_1560868817.jpg,f_1560868818.png', 'WELL CONSTRUCTED ROAD', '5000', 'ELECTRICITY, WATER, REGULAR TRASH COLLECTION', 'THREE BED ROOM WITH ONE MASTER BED ROOM, KITCHEN HALL, WASH ROOM.', 'Rent', 'Home', 'Detached', 1, 0, '2019-06-18 14:40:18', '2019-06-18 14:40:18'),
(3, 'LGR/19/3', 9, 'PROPERTY 3', '36620.00', '66 AVENUE OLD TAFO, KUMASI', 'a_1560870761.jpg,b_1560870761.png,c_1560870762.jpg,d_1560870762.jpeg,e_1560870762.jpg,f_1560870762.jpeg', 'WELL CONSTRUCTED ROAD', '4522', 'ELECTRICITY, WATER, REGULAR TRASH COLLECTION', 'THREE BED ROOM HALL WITH KITCHEN, TOILET AND BATH', 'Sale', 'Home', 'Bungalow', 1, 0, '2019-06-18 15:12:45', '2019-06-18 15:12:45'),
(4, 'LGR/19/4', 9, 'PROPERTY 4', '36620.00', '45 AVENUE OLD TAFO, KUMASI', 'a_1560870933.jpg,b_1560870933.jpg,c_1560870933.jpg,d_1560870934.jpg,e_1560870934.jpg,f_1560870934.jpeg', 'WELL CONSTRUCTED ROAD', '55632', 'ELECTRICITY, WATER, REGULAR TRASH COLLECTION', 'THREE BEDROOM HALL WITH KITCHEN RASHROOM', 'Sale', 'Home', 'Bungalow', 1, 1, '2019-06-18 15:15:37', '2019-06-18 16:07:42'),
(5, 'LGR/19/5', 8, 'PROPERTY 5', '90000.00', 'F 87/4 A, STARLET 91 ROAD, CAPECOAST', 'a_1560871177.jpg,b_1560871177.jpg,c_1560871178.jpg,d_1560871178.jpg,e_1560871178.jpeg,f_1560871178.jpg', 'WELL CONSTRUCTED ROAD', '45660', 'WATER, ELECTRICITY', 'SIX BED ROOM HALL WITH MASTER BEDROOM KITCHEN AND WASH ROOM', 'Lease', 'Home', 'Semi-Detached', 1, 1, '2019-06-18 15:19:40', '2019-06-18 16:09:10'),
(6, 'LGR/19/6', 8, 'PROPERTY 5', '125500.00', '67 AVENUE, CAPE COAST', 'a_1560871866.jpg,b_1560871866.jpg,c_1560871866.jpg,d_1560871869.jpg,e_1560871869.jpg,f_1560871869.jpg', 'WELL CONSTRUCTED ROAD', '45000', 'WATER, ELECTRICITY, REGULAR TRASH COLLECTION', 'EIGHT MASTER BED ROOMS WITH KITCHEN TOILET AND BATH', 'Sale', 'Home', 'Detached Storey', 1, 1, '2019-06-18 15:31:11', '2019-06-18 16:09:59'),
(7, 'LGR/19/7', 8, 'STORE 1', '250.00', '1860 ROAD TEMA', 'a_1560872380.jpg,b_1560872381.jpg', 'WELL CONSTRUCTED ROAD', '12550', 'WATER, ELECTRICITY, REGULAR TRASH COLLECTION', 'WIDE OFFICE SPACE WITH RASH ROOM', 'Rent', 'Office Space', 'Flat', 1, 0, '2019-06-18 15:39:41', '2019-06-18 15:39:41'),
(8, 'LGR/19/8', 10, 'STORE BEE', '500.00', 'S/K BLK 24 sawaba', 'a_1560872539.jpeg,b_1560872539.jpg', 'WELL CONSTRUCTED ROAD', '25000', 'ELECTRICITY, WATER, REGULAR TRASH COLLECTION', '25000 METER SQUARE STORE WITH WASH ROOM AND DSTV INSTALLED', 'Rent', 'Store', 'Detached', 1, 0, '2019-06-18 15:42:19', '2019-06-18 15:42:19'),
(9, 'LGR/19/9', 9, 'STORE LU', '280.00', '45 AVENUE, MANKESSIM', 'a_1560872713.jpg,b_1560872713.jpeg', 'WELL CONSTRUCTED ROAD', '4550', 'ELECTRICITY, WATER, REGULAR TRASH COLLECTION', 'SPACIOUS OFFICE WITH WASH ROOM', 'Rent', 'Office Space', 'Detached Storey', 1, 0, '2019-06-18 15:45:13', '2019-06-18 15:45:13'),
(10, 'LGR/19/10', 10, 'PROPERTY B1', '90000.00', 'S/K BLK 24 KASOA', 'landissues_1560873060.png', 'WELL CONSTRUCTED ROAD', '95000', 'GOOD WATER SUPPLY AND ELECTRICITY TO THE AREA', '95 ACERS OF LAND IN A WELL KNOWN AREA', 'Sale', 'Land', 'Land', 1, 1, '2019-06-18 15:51:00', '2019-06-18 16:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `pwdChange` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `phone_number`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`, `pwdChange`) VALUES
(1, 'System Administrator', 'admin@admin.com', 'admin', '0241842651', '$2y$10$T9pce200C8mlf0N3Jz3yPufS1bRmeus/SeOpIS9Uey6w13oVUfcJW', '3BppQx1QQZVyqg9kZEHcMZSlUWGcOTQ44DwTRGCoDMbtzCGovKHbE5XRpkOx', '2018-07-16 12:19:48', '2018-07-16 12:19:48', 1, 1),
(7, 'ben amoah', 'ben@gmail.com', 'benben', '0244556677', '$2y$10$lkgs6jMjhll0jCiuLJkcBuU6W8KcH5XNEMSrWtE.G3zak0TqnIO0e', NULL, '2019-05-27 13:44:31', '2019-05-27 13:46:35', 0, 1),
(8, 'PATRICIA OFORIWAA APPENTENG', 'daffodil@gmail.com', 'daffodil', '0241415569', '$2y$10$GtvhDELu6jSd/nZaIzdDDeoP/l3OBBCa1Ccn5X8fBnOf.6J9HXwUG', NULL, '2019-06-18 03:54:00', '2019-06-18 04:01:45', 0, 1),
(9, 'LUCY AMOH', 'mamaluu@gmail.com', 'mamaluu', '0248556639', '$2y$10$.Bz4mEd3WZ5jo2dC5pXh9OsOG1bPiE0ALR/nYjy/eX1sN6nL0n0W6', NULL, '2019-06-18 03:55:21', '2019-06-18 04:00:24', 0, 1),
(10, 'BENJAMIN ARTHUR', 'benjiro@gmail.com', 'benjiro', '0241842651', '$2y$10$kuZXl5Lv5Scp2lpXSIQHvOrxKOoBXqG91KIQTCE1EJ7CheIxJny0y', NULL, '2019-06-18 03:57:20', '2019-06-18 04:01:57', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_me`
--
ALTER TABLE `notify_me`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notify_me_email_unique` (`email`);

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
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notify_me`
--
ALTER TABLE `notify_me`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
