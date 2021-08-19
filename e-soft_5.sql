-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 05:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-soft_5`
--

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
(3, '2021_08_17_070154_create_reports_table', 1);

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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` double(8,2) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `address`, `phone`, `district`, `nid`, `photo`, `fee`, `email`, `password`, `confirm_password`, `created_at`, `updated_at`) VALUES
(9, 'milidi', 'syduxe', '21', 'sivyjabavu', 'report-image/nid-photo.png', 'report-image/avater.png', 50.00, 'losuv@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:49:09', '2021-08-17 09:49:09'),
(10, 'xiwim', 'kiquqe', '1', 'vopihywame', 'report-image/nid-photo.png', 'report-image/avater.png', 36.00, 'hehemuzis@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:49:22', '2021-08-17 09:49:22'),
(11, 'pujex', 'jedas', '55', 'zamij', 'report-image/nid-photo.png', 'report-image/avater.png', 44.00, 'nubavo@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:50:10', '2021-08-17 09:50:10'),
(12, 'rowozozoko', 'figugecygi', '58', 'hemegu', 'report-image/nid-photo.png', 'report-image/avater.png', 47.00, 'fimygo@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:50:21', '2021-08-17 09:50:21'),
(13, 'hefyduhi', 'laqijaj', '14', 'difugof', 'report-image/nid-photo.png', 'report-image/avater.png', 45.00, 'guhi@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:50:32', '2021-08-17 09:50:32'),
(14, 'lybivi', 'timena', '80', 'sezarusoti', 'report-image/nid-photo.png', 'report-image/avater.png', 27.00, 'syposi@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:50:44', '2021-08-17 09:50:44'),
(15, 'zahabub', 'kyjozuv', '88', 'wemowiqoni', 'report-image/nid-photo.png', 'report-image/avater.png', 69.00, 'rucoruf@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:51:03', '2021-08-17 09:51:03'),
(16, 'vytomoxele', 'cajoqy', '35', 'ropygy', 'report-image/nid-photo.png', 'report-image/avater.png', 76.00, 'kawet@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:51:14', '2021-08-17 09:51:14'),
(17, 'hoterypi', 'nojapiro', '8', 'cyrejow', 'report-image/nid-photo.png', 'report-image/avater.png', 95.00, 'juto@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:51:25', '2021-08-17 09:51:25'),
(18, 'xygajytezy', 'qikefybifu', '98', 'vixet', 'report-image/nid-photo.png', 'report-image/avater.png', 56.00, 'kely@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:51:36', '2021-08-17 09:51:36'),
(19, 'bewunab', 'mikutyja', '75', 'hafozexopa', 'report-image/nid-photo.png', 'report-image/avater.png', 25.00, 'vupilit@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:51:46', '2021-08-17 09:51:46'),
(20, 'degejal', 'dibefen', '84', 'juhyqy', 'report-image/nid-photo.png', 'report-image/avater.png', 52.00, 'zozid@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:51:57', '2021-08-17 09:51:57'),
(21, 'vibib', 'togusi', '81', 'wapulynacu', 'report-image/nid-photo.png', 'report-image/avater.png', 82.00, 'wyjorigic@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:52:08', '2021-08-17 09:52:08'),
(22, 'senyhu', 'zunedu', '36', 'faruci', 'report-image/nid-photo.png', 'report-image/avater.png', 100.00, 'wexevopise@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:52:35', '2021-08-17 09:52:35'),
(23, 'duxejy', 'zaquco', '39', 'qobaq', 'report-image/nid-photo.png', 'report-image/avater.png', 4.00, 'qefe@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:52:47', '2021-08-17 09:52:47'),
(24, 'garomopaf', 'dimihexiw', '81', 'comobiwihi', 'report-image/nid-photo.png', 'report-image/avater.png', 98.00, 'lemydad@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2021-08-17 09:52:58', '2021-08-17 09:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafi Hossain', 'rafi@gmail.com', '$2y$10$1MT2.bTnkRjtBTjlkDKIc.KUaZdD5S6NVJP7O7EyX3mB6aBZaD6rG', 'Q2NKPuqvhUsp6mhAtQLVLHcQdwXxmtLJAXqqFhViPXcjkzZY5RFLnN2eGy8b', '2021-08-17 02:03:06', '2021-08-17 02:03:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
