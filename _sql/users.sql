-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2022 at 08:36 PM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u562421358_oldfarm`
--

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
(1, 'rashu', 'rashu.pro@gmail.com', NULL, '$2y$10$m21vucATN67cbkbLXUrSpOwrmWkorXHBtSo59fZHFJ.ndFPRJIrie', 'HhExiBBNf2MTwnCenQYLuydsS9Vn9zqM9bThYrAsmzSoMlJb5SHEU7GiPPTu', '2022-11-03 14:05:55', '2022-11-12 03:22:51', 'cus_MmpaanMdlPPKcs', 'card', '4242', NULL),
(2, 'New User', '', NULL, '', NULL, NULL, '2022-11-11 05:05:27', 'cus_MkJjhqtLT00ldi', 'Visa credit card', NULL, NULL),
(3, 'test user', 'rashu.web@gmail.com', NULL, '$2y$10$kx0n/kKOvzAiQFYcP6QkGeSYowxBXJ7Hfv2PMrGKFRb0sYeB0vm8O', NULL, '2022-11-12 10:38:12', '2022-11-12 10:49:51', 'cus_Mmwny4g9Nt0ZVs', 'card', '5556', NULL),
(4, 'new user', 'rashu@mail.com', NULL, '$2y$10$uEacDiyPPDpBBfeX80RTUuL/bfi5RXNkX3e5nd7bvZ.raUkAG2f2y', NULL, '2022-11-12 13:11:47', '2022-11-12 13:17:28', 'cus_MmzBRT6mvLNVst', 'card', '1111', NULL),
(5, 'Giuseppe Pace', 'peppus19@outlook.it', NULL, '$2y$10$l8lHDXmsus32KzfX3jSecuVmvUc1bcENSNp7XO3IzrTuXdSrH7LBW', NULL, '2022-12-03 22:15:06', '2022-12-03 22:15:06', NULL, NULL, NULL, NULL),
(6, 'Giuseppe', 'giuseppe.pace.19@outlook.it', NULL, '$2y$10$jD3ZFE5TigtF0wDUbGnkJes.IpDFQOACTNLhu.19cV/x6N4QCld8W', NULL, '2022-12-05 00:40:24', '2022-12-05 00:40:24', NULL, NULL, NULL, NULL),
(7, 'FRANCESCO', 'maggio.francesco@itinsystem.it', NULL, '$2y$10$MvbzLMr3Q9Srp5A.ol7q0utO5zQNBLpwIcsRXeDBCN4l5KfBeZWgS', NULL, '2022-12-05 08:52:58', '2022-12-05 08:52:58', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
