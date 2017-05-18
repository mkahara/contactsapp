-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 01:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `organization`, `dob`, `status`, `avatar`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 6, 'Peter Munyasi', 'peter@gmail.com', '0715302571', '392', 'Startupscrib', '1980-01-29', 1, 'default-avi.jpg', NULL, '2017-05-10 04:29:31', '2017-05-13 05:45:23', NULL),
(3, 6, 'Manson Kibe', 'samsoft12@gmail.com', '0708940113', '392', 'Startupscrib', '2017-05-13', 1, NULL, NULL, '2017-05-10 05:53:16', '2017-05-13 07:22:48', NULL),
(10, 6, 'Samuel Kahara', 'manson@gmail.com', '0726981598', '392', 'Startupscrib', '2017-05-24', 1, NULL, NULL, '2017-05-10 07:32:30', '2017-05-10 11:01:44', NULL),
(11, 7, 'Richard Ojwang', 'richard@gmail.com', '0711795116', 'Imara', 'Startupscrib', '2017-05-31', 1, 'default-avi.jpg', NULL, '2017-05-10 07:33:48', '2017-05-10 07:33:48', NULL),
(13, 7, 'Victor Sitati', 'victor@gmail.com', '0763967537​⁠​', 'Equity', 'Startupscrib', '2017-05-27', 1, 'default-avi.jpg', NULL, '2017-05-10 07:40:05', '2017-05-10 07:40:05', NULL),
(14, 6, 'Robert Asimba', 'robert@gmail.com', '0721691459​⁠​', '392', 'Startupscrib', '2017-05-09', 1, 'default-avi.jpg', NULL, '2017-05-12 03:37:18', '2017-05-12 05:48:48', NULL),
(15, 6, 'Allan Mugoz', 'allan@gmail.com', '0717279482​⁠​', '392', 'Startupscrib', '2012-02-25', 1, 'default-avi.jpg', NULL, '2017-05-12 03:43:20', '2017-05-17 14:07:54', NULL),
(16, 6, 'Martin Okendo', 'martin@gmail.com', '0721912744​⁠​', '392', 'Startupscrib', '2008-03-06', 1, 'default-avi.jpg', NULL, '2017-05-12 03:57:20', '2017-05-12 05:50:54', '2017-05-12 05:50:54'),
(18, 6, 'Purity Kyalo', 'purity@gmail.com', '0711833398', '392', 'Startupscrib', '2017-05-02', 1, 'default-avi.jpg', NULL, '2017-05-12 04:06:23', '2017-05-14 05:16:13', NULL),
(20, 8, 'Samuel Kahara', 'samsoft123@gmail.com', '726981598', '392', 'Startupscrib', '2017-05-17', 1, 'default-avi.jpg', NULL, '2017-05-12 09:56:38', '2017-05-12 09:56:38', NULL),
(21, 4, 'Uhuru Kenyatta', 'uhuru@gmail.com', '0712001122', '392', 'Startupscrib', '2017-05-05', 1, 'default-avi.jpg', NULL, '2017-05-13 05:18:10', '2017-05-13 05:18:10', NULL);

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'http://localhost/contactsapp/public/default-avi.jpg',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `facebook_id`, `avatar`, `email`, `user_type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Samuel Kahara', NULL, 'http://localhost/contactsapp/public/default-avi.jp...', 'samsoft12@gmail.com', 0, '$2y$10$2IyWHBllqC3yLosNL451VeJzbfZgzoQaz5UM7G.apmrBDBXI0p3hW', NULL, '2017-05-03 06:28:34', '2017-05-03 06:28:34'),
(4, 'SamSoft Mbugua Kahara', NULL, 'http://localhost/contactsapp/public/default-avi.jp...', 'mbuguasamuel90@yahoo.com', 1, NULL, 'wuU3nVkL6LxYhymr607BtlAqK6CMG1ymFl7CbVv0vwhkEnyS7HoKy9NjBJ8b', '2017-05-03 07:13:03', '2017-05-03 07:13:03'),
(6, 'peter munyasi', NULL, 'http://localhost/contactsapp/public/default-avi.jpg', 'peter@jijifest.com', 1, '$2y$10$8q/hBzbFuhxgA88Kyd13luySGLN0ec/t5FBHqONbz9MSoAAMg95K.', '3oysOw5vLGMeph7dBXPwEwB02eapD51kevMkZOu58LrIU5OD5UqoSRe5kTho', '2017-05-04 11:03:35', '2017-05-04 11:03:35'),
(7, 'Manson Kibe', NULL, 'http://localhost/contactsapp/public/default-avi.jpg', 'manson@gmail.com', 1, '$2y$10$WtTLhVEl.g0q5v1h.QipI.qiv0lsthOK/cX5pO7i./V9T0N1gyiDO', 'FA2K7bN4TPXyyt2HV8M6QtMEadNd0EvC0nRwrVLacySxfBRStPTMlFBB6E6Y', '2017-05-10 07:55:52', '2017-05-10 07:55:52'),
(8, 'Peter Munyasi', NULL, 'http://localhost/contactsapp/public/default-avi.jpg', 'psmunyasi@ymail.com', 1, NULL, 'mBfxkrE9mXMqvH47SM9XV0CDIkclNPAlZWLXnRDwqJUZoDSbLOvy7p8Fpp2A', '2017-05-12 09:54:26', '2017-05-12 09:54:26'),
(9, 'Samuel Mbugua', NULL, 'http://localhost/contactsapp/public/default-avi.jpg', 'samsof@gmail.com', 1, '$2y$10$lpjv4I3oa96WQhhyw37J5OLbEv8QwFITIF0qTArsYSmddh8TVDbDa', '1Rw7prR5XOd1VPUVnIstQMPPrLCuTK8jsUAtUaj530Nu7x5HED1Sy85k4Lxc', '2017-05-13 05:32:13', '2017-05-13 05:32:13'),
(10, 'Robert Asimba', NULL, 'http://localhost/contactsapp/public/default-avi.jpg', 'robert@gmail.com', 1, '$2y$10$rgsaCH8zalvgcclMwtesdOCPVZW7.1DGtkLpzyM4KDDhoifHLYIl6', 'K6iodaUJJup83HbTkm2SefXeqcIedQnwrzvhRKuvsQovvfMi4AszkzWovjsf', '2017-05-14 03:19:53', '2017-05-14 03:19:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_details_email_unique` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
