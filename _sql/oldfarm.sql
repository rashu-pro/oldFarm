-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 06:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oldfarm`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2019_05_03_000001_create_customer_columns', 2),
(6, '2019_05_03_000002_create_subscriptions_table', 2),
(7, '2019_05_03_000003_create_subscription_items_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `name`, `stripe_id`, `stripe_status`, `stripe_price`, `quantity`, `trial_ends_at`, `ends_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'default', 'sub_1M3G4sGynPrdxMfbhzwPT7vZ', 'active', 'price_1M3FcUGynPrdxMfb4ESC18F2', 1, NULL, NULL, '2022-11-12 03:32:42', '2022-11-12 03:32:45'),
(3, 1, 'default', 'sub_1M3GB4GynPrdxMfbMdwCv9nZ', 'active', 'price_1M3GB2GynPrdxMfbp6cROhEn', 1, NULL, NULL, '2022-11-12 03:39:06', '2022-11-12 03:39:09'),
(4, 1, 'default', 'sub_1M3GBBGynPrdxMfbWyxF9gOs', 'active', 'price_1M3GB9GynPrdxMfbauNlSwqG', 1, NULL, NULL, '2022-11-12 03:39:12', '2022-11-12 03:39:15'),
(5, 1, 'default', 'sub_1M3GBHGynPrdxMfbZtRgais7', 'active', 'price_1M3GBFGynPrdxMfbRKv5rcZU', 1, NULL, NULL, '2022-11-12 03:39:19', '2022-11-12 03:39:21'),
(6, 1, 'default', 'sub_1M3GFSGynPrdxMfbdhdRPsEa', 'active', 'price_1M3GFQGynPrdxMfb0fUdDK9r', 5, NULL, NULL, '2022-11-12 03:43:38', '2022-11-12 03:43:56'),
(7, 1, 'default', 'sub_1M3GFZGynPrdxMfbbLHiNibp', 'active', 'price_1M3GFXGynPrdxMfbXLqFWpT2', 1, NULL, NULL, '2022-11-12 03:43:45', '2022-11-12 03:43:48'),
(8, 1, 'default', 'sub_1M3GFgGynPrdxMfbYUJ99UNq', 'active', 'price_1M3GFfGynPrdxMfbthKlJ5kp', 1, NULL, NULL, '2022-11-12 03:43:52', '2022-11-12 03:43:55'),
(9, 1, 'default', 'sub_1M3M7rGynPrdxMfblHTVyOa9', 'active', 'price_1M3M7pGynPrdxMfbMpDBPzFH', 1, NULL, NULL, '2022-11-12 10:00:11', '2022-11-12 10:00:14'),
(10, 1, 'default', 'sub_1M3MDYGynPrdxMfbu1NweZCF', 'active', 'price_1M3MDTGynPrdxMfb2DaUNQsf', 1, NULL, NULL, '2022-11-12 10:06:04', '2022-11-12 10:06:04'),
(11, 1, 'default', 'sub_1M3MLLGynPrdxMfblJgZaoYK', 'active', 'price_1M3MLJGynPrdxMfbkTBujN87', 5, NULL, NULL, '2022-11-12 10:14:07', '2022-11-12 10:14:10'),
(12, 3, 'default', 'sub_1M3MtzGynPrdxMfbpHc1Jb2H', 'active', 'price_1M3MtxGynPrdxMfbnC9Fjged', 2, NULL, NULL, '2022-11-12 10:49:55', '2022-11-12 10:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_items`
--

INSERT INTO `subscription_items` (`id`, `subscription_id`, `stripe_id`, `stripe_product`, `stripe_price`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 2, 'si_MmpkfZivcS7wOW', 'prod_MmpHGfBWKHfh47', 'price_1M3FcUGynPrdxMfb4ESC18F2', 1, '2022-11-12 03:32:42', '2022-11-12 03:32:42'),
(3, 3, 'si_MmpqT8vE4UybxS', 'prod_Mmpq9BJ8FHgw2h', 'price_1M3GB2GynPrdxMfbp6cROhEn', 1, '2022-11-12 03:39:06', '2022-11-12 03:39:06'),
(4, 4, 'si_Mmpqb9hY08HwMU', 'prod_MmpqAtfD8g455q', 'price_1M3GB9GynPrdxMfbauNlSwqG', 1, '2022-11-12 03:39:12', '2022-11-12 03:39:12'),
(5, 5, 'si_MmpqrF3ywezI8t', 'prod_MmpqWIoRGoCu5b', 'price_1M3GBFGynPrdxMfbRKv5rcZU', 1, '2022-11-12 03:39:19', '2022-11-12 03:39:19'),
(6, 6, 'si_MmpvZNKTxW59NW', 'prod_MmpvWowBUT9y8r', 'price_1M3GFQGynPrdxMfb0fUdDK9r', 1, '2022-11-12 03:43:38', '2022-11-12 03:43:38'),
(7, 7, 'si_MmpvxughrZTwa7', 'prod_MmpvkxOf28VP0y', 'price_1M3GFXGynPrdxMfbXLqFWpT2', 1, '2022-11-12 03:43:45', '2022-11-12 03:43:45'),
(8, 8, 'si_MmpvveT4dO7mVv', 'prod_Mmpv3MiAMlCTst', 'price_1M3GFfGynPrdxMfbthKlJ5kp', 1, '2022-11-12 03:43:52', '2022-11-12 03:43:52'),
(9, 9, 'si_MmvzlzA23mykV3', 'prod_MmvzEH76WCIHh9', 'price_1M3M7pGynPrdxMfbMpDBPzFH', 1, '2022-11-12 10:00:11', '2022-11-12 10:00:11'),
(10, 10, 'si_Mmw5ml07YlMmdM', 'prod_Mmw5CvW8rulhmn', 'price_1M3MDTGynPrdxMfb2DaUNQsf', 1, '2022-11-12 10:06:04', '2022-11-12 10:06:04'),
(11, 11, 'si_MmwDEqBc9KDr0u', 'prod_MmwDKoLzzkPSZq', 'price_1M3MLJGynPrdxMfbkTBujN87', 5, '2022-11-12 10:14:07', '2022-11-12 10:14:07'),
(12, 12, 'si_MmwnLxY8vDaNtX', 'prod_Mmwn924ktKkF0k', 'price_1M3MtxGynPrdxMfbnC9Fjged', 2, '2022-11-12 10:49:55', '2022-11-12 10:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
(1, 'rashu', 'rashu.pro@gmail.com', NULL, '$2y$10$m21vucATN67cbkbLXUrSpOwrmWkorXHBtSo59fZHFJ.ndFPRJIrie', 'px9KFFbUwmh7nsngnpI1yihtEVGqcO8KyhbNuLQDq8TiggnBoAgY7IWG8HCY', '2022-11-03 14:05:55', '2022-11-12 03:22:51', 'cus_MmpaanMdlPPKcs', 'card', '4242', NULL),
(2, 'New User', '', NULL, '', NULL, NULL, '2022-11-11 05:05:27', 'cus_MkJjhqtLT00ldi', 'Visa credit card', NULL, NULL),
(3, 'test user', 'rashu.web@gmail.com', NULL, '$2y$10$kx0n/kKOvzAiQFYcP6QkGeSYowxBXJ7Hfv2PMrGKFRb0sYeB0vm8O', NULL, '2022-11-12 10:38:12', '2022-11-12 10:49:51', 'cus_Mmwny4g9Nt0ZVs', 'card', '5556', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  ADD UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
