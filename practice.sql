-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2019 at 01:41 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, '2019_10_16_094537_create_predictions_table', 2),
(13, '2019_10_16_100913_add_prediction_id_to_tips', 3),
(30, '2014_10_12_000000_create_users_table', 4),
(35, '2019_10_22_131623_create_statuses_table', 4),
(36, '2019_10_22_135905_create_types_table', 4),
(45, '2014_10_12_100000_create_password_resets_table', 5),
(46, '2019_08_19_000000_create_failed_jobs_table', 5),
(48, '2019_09_26_085527_create_tips_table', 5),
(49, '2019_09_23_071737_create_posts_table', 6);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `names` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `names`, `email`, `subject`, `body`, `created_at`, `updated_at`) VALUES
(1, 'jeff', 'jeffkilindah@gmail.com', 'Tip types', 'what does 1x mean', '2019-11-12 21:00:00', NULL),
(2, 'jeff kil', 'kilindah@gmail.com', 'Tip ', 'what does gg mean', '2019-11-04 21:00:00', NULL),
(3, 'jeff kilinda', 'kilindahh@gmail.com', 'payment', 'do you take money from users', '2019-11-14 21:00:00', NULL),
(4, 'jeff kilinda', 'kilindahh@gmail.com', 'payment dfddfd', 'do you take money from users nhtgrdfedssd', '2019-11-02 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `predictions`
--

CREATE TABLE `predictions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `predictions`
--

INSERT INTO `predictions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, NULL),
(2, '2', NULL, NULL),
(3, '1X', NULL, NULL),
(4, 'X2', NULL, NULL),
(5, '12', NULL, NULL),
(6, 'GG', NULL, NULL),
(7, 'NG', NULL, NULL),
(8, 'Ov1.5', NULL, NULL),
(9, 'Ov2.5', NULL, NULL),
(10, 'Un 2.5', NULL, NULL),
(11, 'Un1.5', NULL, NULL),
(12, 'X', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Not Played', NULL, NULL),
(2, 'Won', NULL, NULL),
(3, 'Lost', NULL, NULL),
(4, 'Cancelled', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `league` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_id` bigint(20) NOT NULL,
  `odd` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `results` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_-_',
  `status_id` bigint(20) NOT NULL DEFAULT '1',
  `type_id` bigint(20) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `date`, `time`, `league`, `team1`, `team2`, `prediction_id`, `odd`, `results`, `status_id`, `type_id`, `created_at`, `updated_at`) VALUES
(46, '2019-11-07', '19:45', 'Arabian Gulf League', 'Al Nasr', 'Ittihad Kalba', 1, '1.30', '_-_', 1, 1, '2019-11-07 07:18:41', '2019-11-07 07:18:41'),
(47, '2019-11-07', '19:45', 'Arabian Gulf League', 'Jazira', 'Sharjah', 6, '1.40', '_-_', 1, 1, '2019-11-07 07:20:04', '2019-11-07 07:20:04'),
(48, '2019-11-07', '17:00', 'Arabian Gulf League', 'Bani Yas', 'Al Ain', 4, '1.30', '_-_', 1, 2, '2019-11-07 07:23:07', '2019-11-07 07:23:07'),
(49, '2019-11-07', '17:00', 'Arabian Gulf League', 'Dhafra', 'Shabab Al-Ahli Dubai', 2, '1.40', '_-_', 1, 1, '2019-11-07 07:25:04', '2019-11-07 07:25:04'),
(50, '2019-11-07', '19:20', 'Stars League', 'Al Arabi', 'Al Sailiya', 3, '1.35', '_-_', 1, 1, '2019-11-07 07:38:06', '2019-11-07 07:38:06'),
(51, '2019-11-07', '17:10', 'Stars League', 'Al Rayyan', 'Al Shahaniya', 1, '1.20', '_-_', 1, 2, '2019-11-07 07:39:23', '2019-11-07 07:39:23'),
(52, '2019-11-07', '19:45', 'Kuwait premier league', 'Al Qadisiya', 'Al salmiya', 5, '1.28', '_-_', 1, 1, '2019-11-07 07:43:50', '2019-11-07 07:43:50'),
(53, '2019-11-07', '17:30', 'Kuwait premier league', 'Al Naser', 'Kazma', 8, '1.32', '_-_', 1, 1, '2019-11-07 07:45:31', '2019-11-07 07:45:31'),
(54, '2019-11-07', '15:00', 'Gulf pro league', 'Paykan', 'Saipa', 8, '1.30', '_-_', 1, 1, '2019-11-07 07:52:30', '2019-11-07 07:52:30'),
(55, '2019-11-07', '23:00', 'Europa League', 'Wolves', 'Slovan Bratislava', 1, '1.40', '_-_', 1, 1, '2019-11-07 08:00:48', '2019-11-07 08:00:48'),
(56, '2019-11-07', '23:00', 'Europa League', 'B. Monchengladbach', 'As Roma', 6, '1.60', '_-_', 1, 2, '2019-11-07 08:04:40', '2019-11-07 08:04:40'),
(57, '2019-11-07', '23:00', 'Europa League', 'Braga', 'Besiktas', 1, '1.52', '_-_', 1, 1, '2019-11-07 08:05:35', '2019-11-07 08:05:35'),
(58, '2019-11-07', '16:00', 'Europa League', 'Wolfsberger', 'Basaksehir', 8, '1.28', '_-_', 1, 1, '2019-11-07 08:11:04', '2019-11-07 08:11:04'),
(59, '2019-11-07', '23:00', 'Europa League', 'Wolfsburg', 'Gent', 6, '1.72', '_-_', 1, 1, '2019-11-07 08:12:14', '2019-11-07 08:12:14'),
(60, '2019-11-07', '23:00', 'Europa League', 'Olekasandria', 'St. Etienne', 4, '1.25', '_-_', 1, 1, '2019-11-07 08:13:23', '2019-11-07 08:13:23'),
(61, '2019-11-07', '23:00', 'Europa League', 'Ferencvaros', 'CSKA Moscow', 6, '1.77', '_-_', 1, 2, '2019-11-07 08:15:17', '2019-11-07 08:15:17'),
(62, '2019-11-07', '23:00', 'Europa League', 'Espanyol', 'Ludogorets', 3, '1.30', '_-_', 1, 2, '2019-11-07 09:35:34', '2019-11-07 09:35:34'),
(63, '2019-11-07', '23:00', 'Europa League', 'Rangers', 'Porto', 6, '1.77', '_-_', 1, 2, '2019-11-07 09:37:28', '2019-11-07 09:37:28'),
(64, '2019-11-07', '23:00', 'Europa League', 'Rangers', 'Porto', 6, '1.77', '_-_', 1, 2, '2019-11-07 09:37:35', '2019-11-07 09:37:35'),
(65, '2019-11-07', '23:00', 'Europa League', 'Rangers', 'Porto', 6, '1.77', '_-_', 1, 2, '2019-11-07 09:37:36', '2019-11-07 09:37:36'),
(66, '2019-11-07', '23:00', 'Europa League', 'Feyenoord', 'Young Boys', 6, '1.53', '_-_', 1, 2, '2019-11-07 09:38:48', '2019-11-07 09:38:48'),
(67, '2019-11-07', '23:00', 'Europa League', 'Manchester U', 'Partizan', 1, '1.45', '_-_', 1, 2, '2019-11-07 09:39:40', '2019-11-07 09:39:40'),
(68, '2019-11-07', '20:55', 'Europa League', 'Standard Liege', 'Eintr. Frankfurt', 6, '1.50', '_-_', 1, 1, '2019-11-07 09:43:42', '2019-11-07 09:54:32'),
(69, '2019-11-07', '20:55', 'Europa League', 'Lazio', 'Celtic', 6, '1.70', '_-_', 1, 2, '2019-11-07 09:44:59', '2019-11-07 09:44:59'),
(70, '2019-11-07', '20:55', 'Europa League', 'Cluj', 'Rennes', 8, '1.28', '_-_', 1, 1, '2019-11-07 09:45:46', '2019-11-07 09:45:46'),
(71, '2019-11-07', '20:55', 'Europa League', 'Rosenborg', 'Sporting', 6, '1.75', '_-_', 1, 1, '2019-11-07 09:47:08', '2019-11-07 09:47:08'),
(72, '2019-11-07', '20:55', 'Europa League', 'LASK', 'PSV', 6, '1.68', '_-_', 1, 2, '2019-11-07 09:48:06', '2019-11-07 09:48:06'),
(73, '2019-11-07', '20:55', 'Europa League', 'Krasnodar', 'Trabzon', 8, '1.34', '_-_', 1, 1, '2019-11-07 09:48:58', '2019-11-07 09:48:58'),
(74, '2019-11-07', '20:55', 'Europa League', 'Basel', 'Getafe', 5, '1.36', '_-_', 1, 1, '2019-11-07 09:49:38', '2019-11-07 09:49:38'),
(75, '2019-11-07', '20:55', 'Europa League', 'Lugano', 'Malmo', 4, '1.40', '_-_', 1, 2, '2019-11-07 09:50:30', '2019-11-07 09:50:30'),
(76, '2019-11-07', '20:55', 'Europa League', 'Copenhagen', 'Dynamo Kyiv', 6, '2.05', '_-_', 1, 1, '2019-11-07 09:51:35', '2019-11-07 09:51:35'),
(77, '2019-11-07', '20:55', 'Europa League', 'Dudelange', 'Sevilla', 2, '1.30', '_-_', 1, 2, '2019-11-07 09:52:20', '2019-11-07 09:52:20'),
(78, '2019-11-07', '20:55', 'Europa League', 'APOEL', 'Qarabag', 4, '1.65', '_-_', 1, 1, '2019-11-07 09:53:06', '2019-11-07 09:53:06'),
(79, '2019-11-07', '18:50', 'Europa League', 'Astana', 'AZ Alkmaar', 2, '1.63', '_-_', 1, 1, '2019-11-07 09:53:53', '2019-11-07 09:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'normal', NULL, NULL),
(2, 'top', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'salu', 0, 'onesalu@gmail.com', NULL, '$2y$10$Llo4AlZHWHO9ytdyaqs/NeO3OgHkRy.RtJkiXBbBsA5nPMK.xHvlO', NULL, '2019-10-22 12:34:12', '2019-10-22 12:34:12'),
(4, 'jeff', 1, 'jeffkilindah@gmail.com', NULL, '$2y$10$yG0ZJ88dJbx5DjXj.vJ/U.UrCI/5ZheMxfAoSebFhmXjmUMh.Awpu', 'vjMedCUJz0fgJvPtfcVF4EYps9V3sZCpDUkVrch3nox2KFzLSoR2TLxMEAvC', '2019-10-24 03:48:30', '2019-10-24 03:48:30'),
(5, 'ones', 0, 'oneskilinda@gmail.com', NULL, '$2y$10$xUiL5H3cEOE8jClTj09DM.Ix9zRuB9.QRANG4PSITVQBiAoLS81wu', NULL, '2019-10-24 06:08:13', '2019-10-24 06:08:13'),
(6, 'kilinda', 0, 'admin@gmail.com', NULL, '$2y$10$JZqQx4Z4wl5xQjL1/yd9u.ot0pNfhTpwZOHk8AhGz6bBqjCsbP54y', NULL, '2019-10-24 06:13:41', '2019-10-24 06:13:41'),
(7, 'kilindah', 0, 'kilindah@gmail.com', NULL, '$2y$10$WznZC/KCxH6QZ4U.El.Zxeb2RdJmmHXlX6oSrB5L4Wv.Hp5FehZ0y', NULL, '2019-10-24 06:25:31', '2019-10-24 06:25:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `predictions`
--
ALTER TABLE `predictions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `predictions`
--
ALTER TABLE `predictions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
