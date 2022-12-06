-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 11:11 PM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `excerpt`, `description`, `slug`, `image_url`, `is_active`, `created_at`, `updated_at`) VALUES
(7, 'Animal', NULL, NULL, 'animals', NULL, 1, '2022-11-26 07:12:17', '2022-11-26 07:12:17'),
(8, 'Vegetable', NULL, NULL, 'vegetables', NULL, 1, '2022-11-26 07:15:07', '2022-11-26 07:15:07'),
(9, 'Fruit', NULL, NULL, 'fruits', NULL, 1, '2022-11-26 07:17:17', '2022-11-26 07:17:17'),
(10, 'category', NULL, NULL, NULL, NULL, NULL, '2022-12-04 14:42:18', '2022-12-04 14:42:18');

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
(7, '2019_05_03_000003_create_subscription_items_table', 2),
(8, '2022_11_14_191635_products', 3),
(9, '2022_11_14_194759_categories', 3),
(10, '2022_11_26_111107_categories', 4),
(11, '2022_11_26_135152_products', 5),
(12, '2022_12_02_174334_price', 6),
(13, '2022_12_02_185054_price', 7),
(14, '2022_12_03_115914_price', 8),
(15, '2022_12_03_124136_price', 9),
(16, '2022_12_03_130256_subscriptions', 10),
(17, '2022_12_03_145837_prices', 11),
(18, '2022_12_05_204209_users', 12),
(19, '2022_12_05_211326_users', 13);

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
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` decimal(8,2) NOT NULL,
  `recurring_interval` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interval_count` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_sched_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recurring_iteration` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `stripe_id`, `stripe_product`, `unit_price`, `recurring_interval`, `interval_count`, `created_at`, `updated_at`, `sub_sched_id`, `start_date`, `end_date`, `recurring_iteration`) VALUES
(4, 'price_1MAxD9GynPrdxMfb9uq8ajBC', 'prod_MtLmFL6ZsGI14y', '1667.00', 'month', 1, '2022-12-03 09:01:03', '2022-12-03 09:01:03', NULL, NULL, NULL, 3),
(5, 'price_1MAxGDGynPrdxMfbbTkd3HBW', 'prod_MtLtgwdPvm9g2E', '6667.00', 'month', 1, '2022-12-03 09:04:14', '2022-12-03 09:04:14', NULL, NULL, NULL, 6),
(6, 'price_1MAxGOGynPrdxMfbIovKOpGo', 'prod_MtLul134h4TkGF', '12500.00', 'month', 1, '2022-12-03 09:04:24', '2022-12-03 09:04:24', NULL, NULL, NULL, 8),
(7, 'price_1MAxGZGynPrdxMfb69JyPlOU', 'prod_MtLuamWbh70cj7', '10000.00', 'month', 1, '2022-12-03 09:04:35', '2022-12-03 09:04:35', NULL, NULL, NULL, 6),
(8, 'price_1MAxGpGynPrdxMfbf1y2GjhC', 'prod_MtLv6txh8mybqa', '333.00', 'week', 1, '2022-12-03 09:04:52', '2022-12-03 09:04:52', NULL, NULL, NULL, 6),
(9, 'price_1MAxKTGynPrdxMfb5GTvXDVK', 'prod_MtLvJ1MCaOcDkR', '750.00', 'week', 1, '2022-12-03 09:08:37', '2022-12-03 09:08:37', NULL, NULL, NULL, 4),
(10, 'price_1MAxKhGynPrdxMfbBjyXGGtB', 'prod_MtLwMtwEvllet8', '333.00', 'week', 1, '2022-12-03 09:08:51', '2022-12-03 09:08:51', NULL, NULL, NULL, 6),
(11, 'price_1MAxL0GynPrdxMfbcNsxMuN2', 'prod_MtLmFL6ZsGI14y', '1250.00', 'month', 1, '2022-12-03 09:09:10', '2022-12-03 09:09:10', NULL, NULL, NULL, 4),
(12, 'price_1MAxLBGynPrdxMfbTMsK2x6A', 'prod_MtLqPKOzVurda6', '667.00', 'month', 1, '2022-12-03 09:09:21', '2022-12-03 09:09:21', NULL, NULL, NULL, 6),
(13, 'price_1MAxLQGynPrdxMfbhsvz1TTN', 'prod_MtLruj7irgqRru', '750.00', 'month', 1, '2022-12-03 09:09:36', '2022-12-03 09:09:36', NULL, NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_gallery` tinyint(1) DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_stocked` tinyint(1) DEFAULT NULL,
  `is_variation` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_sale` tinyint(1) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `sale_price_start_date` timestamp NULL DEFAULT NULL,
  `sale_price_end_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `stripe_id`, `name`, `unit_price`, `excerpt`, `description`, `slug`, `image_url`, `is_gallery`, `images`, `category_id`, `sku`, `stock_status`, `is_stocked`, `is_variation`, `is_active`, `is_sale`, `is_featured`, `sale_price_start_date`, `sale_price_end_date`, `created_at`, `updated_at`) VALUES
(2, 'prod_MtLmFL6ZsGI14y', 'Grape', '50', 'grape', NULL, NULL, '1669748594.jpg', NULL, NULL, 9, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-29 13:03:14', '2022-11-29 13:03:14'),
(3, 'prod_MtLqPKOzVurda6', 'Apple', '40', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', NULL, '1669748821.png', NULL, NULL, 9, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-29 13:07:01', '2022-11-29 13:07:01'),
(4, 'prod_MtLruj7irgqRru', 'Strawberry', '60', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', NULL, '1669748874.png', NULL, NULL, 9, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-29 13:07:54', '2022-11-29 13:07:54'),
(5, 'prod_MtLtgwdPvm9g2E', 'Pork', '400', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', NULL, '1669748986.png', NULL, NULL, 7, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-29 13:09:46', '2022-11-29 13:09:46'),
(6, 'prod_MtLul134h4TkGF', 'Cow', '1000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', NULL, '1669749043.png', NULL, NULL, 7, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-29 13:10:43', '2022-11-29 13:10:43'),
(7, 'prod_MtLuamWbh70cj7', 'Lamb', '600', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', NULL, '1669749080.png', NULL, NULL, 7, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-29 13:11:20', '2022-11-29 13:11:20'),
(8, 'prod_MtLv6txh8mybqa', 'Carrot', '20', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', NULL, '1669749103.png', NULL, NULL, 8, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-29 13:11:43', '2022-11-29 13:11:43'),
(9, 'prod_MtLvJ1MCaOcDkR', 'Brocolli', '30', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', NULL, '1669749135.png', NULL, NULL, 8, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-29 13:12:15', '2022-11-29 13:12:15'),
(10, 'prod_MtLwMtwEvllet8', 'Capscicum', '20', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', NULL, '1669749181.png', NULL, NULL, 8, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-29 13:13:01', '2022-11-29 13:13:01');

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
  `scheduled_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `name`, `stripe_id`, `stripe_status`, `stripe_price`, `quantity`, `trial_ends_at`, `ends_at`, `scheduled_id`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(2, 1, 'default', 'sub_1M3G4sGynPrdxMfbhzwPT7vZ', 'active', 'price_1M3FcUGynPrdxMfb4ESC18F2', 1, NULL, NULL, NULL, NULL, NULL, '2022-11-12 03:32:42', '2022-11-12 03:32:45'),
(3, 1, 'default', 'sub_1M3GB4GynPrdxMfbMdwCv9nZ', 'active', 'price_1M3GB2GynPrdxMfbp6cROhEn', 1, NULL, NULL, NULL, NULL, NULL, '2022-11-12 03:39:06', '2022-11-12 03:39:09'),
(4, 1, 'default', 'sub_1M3GBBGynPrdxMfbWyxF9gOs', 'active', 'price_1M3GB9GynPrdxMfbauNlSwqG', 1, NULL, NULL, NULL, NULL, NULL, '2022-11-12 03:39:12', '2022-11-12 03:39:15'),
(5, 1, 'default', 'sub_1M3GBHGynPrdxMfbZtRgais7', 'active', 'price_1M3GBFGynPrdxMfbRKv5rcZU', 1, NULL, NULL, NULL, NULL, NULL, '2022-11-12 03:39:19', '2022-11-12 03:39:21'),
(6, 1, 'default', 'sub_1M3GFSGynPrdxMfbdhdRPsEa', 'active', 'price_1M3GFQGynPrdxMfb0fUdDK9r', 5, NULL, NULL, NULL, NULL, NULL, '2022-11-12 03:43:38', '2022-11-12 03:43:56'),
(7, 1, 'default', 'sub_1M3GFZGynPrdxMfbbLHiNibp', 'active', 'price_1M3GFXGynPrdxMfbXLqFWpT2', 1, NULL, NULL, NULL, NULL, NULL, '2022-11-12 03:43:45', '2022-11-12 03:43:48'),
(8, 1, 'default', 'sub_1M3GFgGynPrdxMfbYUJ99UNq', 'active', 'price_1M3GFfGynPrdxMfbthKlJ5kp', 1, NULL, NULL, NULL, NULL, NULL, '2022-11-12 03:43:52', '2022-11-12 03:43:55'),
(9, 1, 'default', 'sub_1M3M7rGynPrdxMfblHTVyOa9', 'active', 'price_1M3M7pGynPrdxMfbMpDBPzFH', 1, NULL, NULL, NULL, NULL, NULL, '2022-11-12 10:00:11', '2022-11-12 10:00:14'),
(10, 1, 'default', 'sub_1M3MDYGynPrdxMfbu1NweZCF', 'active', 'price_1M3MDTGynPrdxMfb2DaUNQsf', 1, NULL, NULL, NULL, NULL, NULL, '2022-11-12 10:06:04', '2022-11-12 10:06:04'),
(11, 1, 'default', 'sub_1M3MLLGynPrdxMfblJgZaoYK', 'active', 'price_1M3MLJGynPrdxMfbkTBujN87', 5, NULL, NULL, NULL, NULL, NULL, '2022-11-12 10:14:07', '2022-11-12 10:14:10'),
(12, 3, 'default', 'sub_1M3MtzGynPrdxMfbpHc1Jb2H', 'active', 'price_1M3MtxGynPrdxMfbnC9Fjged', 2, NULL, NULL, NULL, NULL, NULL, '2022-11-12 10:49:55', '2022-11-12 10:49:57'),
(13, 3, 'default', 'sub_1M3P5uGynPrdxMfb2kPl4EMd', 'active', 'price_1M3P5sGynPrdxMfbn9SI3DCg', 1, NULL, NULL, NULL, NULL, NULL, '2022-11-12 13:10:23', '2022-11-12 13:10:26'),
(14, 4, 'default', 'sub_1M3PCpGynPrdxMfb3J7HFXMr', 'active', 'price_1M3PCmGynPrdxMfbu0pYBqHn', 1, NULL, NULL, NULL, NULL, NULL, '2022-11-12 13:17:32', '2022-11-12 13:17:34'),
(15, 1, 'default', 'sub_1MBPLlGynPrdxMfbf4iEjSyF', 'active', 'price_1MAxL0GynPrdxMfbcNsxMuN2', 1, NULL, NULL, 'sub_sched_1MBPLlGynPrdxMfbBepKhvEg', '2022-12-04 15:03:49', '2023-04-03 18:00:00', '2022-12-04 15:03:50', '2022-12-04 15:03:50'),
(16, 1, 'default', 'sub_1MBPMAGynPrdxMfbUJ9To41Y', 'active', 'price_1MAxL0GynPrdxMfbcNsxMuN2', 1, NULL, NULL, 'sub_sched_1MBPMAGynPrdxMfbzyexcKbL', '2022-12-04 15:04:13', '2023-04-03 18:00:00', '2022-12-04 15:04:14', '2022-12-04 15:04:14'),
(17, 1, 'default', 'sub_1MBPQsGynPrdxMfbXI0ryT2A', 'active', 'price_1MAxL0GynPrdxMfbcNsxMuN2', 1, NULL, NULL, 'sub_sched_1MBPQsGynPrdxMfbR9q4lir9', '2022-12-04 15:09:05', '2023-04-03 18:00:00', '2022-12-04 15:09:06', '2022-12-04 15:09:06'),
(18, 1, 'default', 'sub_1MBPS0GynPrdxMfbckJxWZzI', 'active', 'price_1MAxL0GynPrdxMfbcNsxMuN2', 1, NULL, NULL, 'sub_sched_1MBPS0GynPrdxMfbl3IR7mQV', '2022-12-04 15:10:16', '2023-04-03 18:00:00', '2022-12-04 15:10:17', '2022-12-04 15:10:17'),
(19, 1, 'default', 'sub_1MBPZdGynPrdxMfb3blEShra', 'active', 'price_1MAxL0GynPrdxMfbcNsxMuN2', 1, NULL, NULL, 'sub_sched_1MBPZdGynPrdxMfb38rQ6zKU', '2022-12-04 15:18:09', '2023-04-03 18:00:00', '2022-12-04 15:18:10', '2022-12-04 15:18:10'),
(20, 1, 'default', 'sub_1MBPjNGynPrdxMfbxItVUkOH', 'active', 'price_1MAxLQGynPrdxMfbhsvz1TTN', 1, NULL, NULL, 'sub_sched_1MBPjNGynPrdxMfbVEESGRyG', '2022-12-04 15:28:13', '2023-08-03 18:00:00', '2022-12-04 15:28:11', '2022-12-04 15:28:14'),
(21, 1, 'default', 'sub_1MBPusGynPrdxMfbE6CWfFhb', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBPusGynPrdxMfb1myYwBoy', '2022-12-04 15:40:06', '2023-08-03 18:00:00', '2022-12-04 15:40:05', '2022-12-04 15:40:07'),
(22, 1, 'default', 'sub_1MBPvlGynPrdxMfb7yoRhyD3', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBPvlGynPrdxMfbAfay6MbF', '2022-12-04 15:41:01', '2023-08-03 18:00:00', '2022-12-04 15:40:59', '2022-12-04 15:41:01'),
(23, 1, 'default', 'sub_1MBPw3GynPrdxMfbv8m7Cyri', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBPw3GynPrdxMfbxRUA8WbU', '2022-12-04 15:41:19', '2023-08-03 18:00:00', '2022-12-04 15:41:17', '2022-12-04 15:41:20'),
(24, 1, 'default', 'sub_1MBPx2GynPrdxMfbWOIzVP2O', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBPx2GynPrdxMfbPXt2zkTP', '2022-12-04 15:42:20', '2023-08-03 18:00:00', '2022-12-04 15:42:19', '2022-12-04 15:42:21'),
(25, 1, 'default', 'sub_1MBPyaGynPrdxMfblrTyadjz', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBPyaGynPrdxMfbTP7Pj1WK', '2022-12-04 15:43:56', '2023-08-03 18:00:00', '2022-12-04 15:43:55', '2022-12-04 15:43:57'),
(26, 1, 'default', 'sub_1MBPzzGynPrdxMfbRzBsoSYF', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBPzzGynPrdxMfbZo7KGNT0', '2022-12-04 15:45:23', '2023-08-03 18:00:00', '2022-12-04 15:45:21', '2022-12-04 15:45:24'),
(27, 1, 'default', 'sub_1MBQ0NGynPrdxMfbegx80PAk', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBQ0MGynPrdxMfbjI8DRBpH', '2022-12-04 15:45:46', '2023-08-03 18:00:00', '2022-12-04 15:45:45', '2022-12-04 15:45:47'),
(28, 1, 'default', 'sub_1MBQ0QGynPrdxMfbHb0pFuHg', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBQ0QGynPrdxMfb0VriHuUo', '2022-12-04 15:45:50', '2023-08-03 18:00:00', '2022-12-04 15:45:49', '2022-12-04 15:45:51'),
(29, 1, 'default', 'sub_1MBQ0UGynPrdxMfbaXFViKsR', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBQ0UGynPrdxMfbGU9GLu35', '2022-12-04 15:45:54', '2023-08-03 18:00:00', '2022-12-04 15:45:53', '2022-12-04 15:45:55'),
(30, 1, 'default', 'sub_1MBQ0iGynPrdxMfbhY5C98FX', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBQ0iGynPrdxMfbihJPf2vj', '2022-12-04 15:46:08', '2023-08-03 18:00:00', '2022-12-04 15:46:06', '2022-12-04 15:46:09'),
(31, 1, 'default', 'sub_1MBQ0mGynPrdxMfbgwL4Gnm6', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBQ0mGynPrdxMfbDr4Ik9pD', '2022-12-04 15:46:12', '2023-08-03 18:00:00', '2022-12-04 15:46:10', '2022-12-04 15:46:12'),
(32, 1, 'default', 'sub_1MBQ17GynPrdxMfb98wh7lX3', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBQ17GynPrdxMfbmfyc17QZ', '2022-12-04 15:46:33', '2023-08-03 18:00:00', '2022-12-04 15:46:31', '2022-12-04 15:46:34'),
(33, 1, 'default', 'sub_1MBQ1BGynPrdxMfb38lv23qe', 'active', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, NULL, NULL, 'sub_sched_1MBQ1BGynPrdxMfbboyqpFYQ', '2022-12-04 15:46:37', '2023-08-03 18:00:00', '2022-12-04 15:46:35', '2022-12-04 15:46:38'),
(34, 1, 'default', 'sub_1MBQ3gGynPrdxMfbCE7VQuEy', 'active', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, NULL, NULL, 'sub_sched_1MBQ3fGynPrdxMfbkiwQKiGf', '2022-12-04 15:49:11', '2023-06-03 18:00:00', '2022-12-04 15:49:10', '2022-12-04 15:49:12'),
(35, 1, 'default', 'sub_1MBQ7JGynPrdxMfbujFPWgWr', 'active', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, NULL, NULL, 'sub_sched_1MBQ7JGynPrdxMfbQtdcXDzt', '2022-12-04 15:52:57', '2023-06-03 18:00:00', '2022-12-04 15:52:55', '2022-12-04 15:52:58'),
(36, 1, 'default', 'sub_1MBQ7NGynPrdxMfbdW2NnUpe', 'active', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, NULL, NULL, 'sub_sched_1MBQ7NGynPrdxMfbarjxrPVd', '2022-12-04 15:53:01', '2023-06-03 18:00:00', '2022-12-04 15:53:00', '2022-12-04 15:53:02'),
(37, 1, 'default', 'sub_1MBQ9BGynPrdxMfbmNfRWQF3', 'active', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, NULL, NULL, 'sub_sched_1MBQ9BGynPrdxMfbNibzHDQt', '2022-12-04 15:54:53', '2023-06-03 18:00:00', '2022-12-04 15:54:52', '2022-12-04 15:54:54'),
(38, 1, 'default', 'sub_1MBQBPGynPrdxMfbuNByzuwF', 'active', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, NULL, NULL, 'sub_sched_1MBQBPGynPrdxMfbOImj7miV', '2022-12-04 15:57:11', '2023-06-03 18:00:00', '2022-12-04 15:57:10', '2022-12-04 15:57:12'),
(39, 10, 'default', 'sub_1MBnKYGynPrdxMfblI0FclWK', 'active', 'price_1MAxLQGynPrdxMfbhsvz1TTN', 1, NULL, NULL, 'sub_sched_1MBnKYGynPrdxMfb9Nrog0bB', '2022-12-05 16:40:10', '2023-08-04 18:00:00', '2022-12-05 16:40:11', '2022-12-05 16:40:11'),
(40, 11, 'default', 'sub_1MC9HOGynPrdxMfb5yUs43Eh', 'active', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, NULL, NULL, 'sub_sched_1MC9HOGynPrdxMfbgcsY4tFf', '2022-12-06 16:06:20', '2023-06-05 18:00:00', '2022-12-06 16:06:21', '2022-12-06 16:06:21');

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
(12, 12, 'si_MmwnLxY8vDaNtX', 'prod_Mmwn924ktKkF0k', 'price_1M3MtxGynPrdxMfbnC9Fjged', 2, '2022-11-12 10:49:55', '2022-11-12 10:49:55'),
(13, 13, 'si_Mmz4siVkpykOCm', 'prod_Mmz3IIgRGAAIR6', 'price_1M3P5sGynPrdxMfbn9SI3DCg', 1, '2022-11-12 13:10:23', '2022-11-12 13:10:23'),
(14, 14, 'si_MmzBx9lS0tcAfB', 'prod_MmzBhq9aPuKXE9', 'price_1M3PCmGynPrdxMfbu0pYBqHn', 1, '2022-11-12 13:17:32', '2022-11-12 13:17:32'),
(15, 19, 'si_MvG51yFY3Y2NI8', 'Apple', 'price_1MAxL0GynPrdxMfbcNsxMuN2', 1, '2022-12-04 15:18:10', '2022-12-04 15:18:10'),
(16, 20, 'si_MvGFhnrfzXP94o', 'prod_MtLruj7irgqRru', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, '2022-12-04 15:28:12', '2022-12-04 15:28:13'),
(17, 21, 'si_MvGRfV2ob0n8rb', 'prod_MtLul134h4TkGF', 'price_1MAxGZGynPrdxMfb69JyPlOU', 1, '2022-12-04 15:40:05', '2022-12-04 15:40:06'),
(18, 22, 'si_MvGSY1V2a66hfr', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:40:59', '2022-12-04 15:41:02'),
(19, 23, 'si_MvGSb1RjaE9465', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:41:18', '2022-12-04 15:41:20'),
(20, 24, 'si_MvGUdON4S8y4J6', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:42:19', '2022-12-04 15:42:21'),
(21, 25, 'si_MvGVcOzvaWxXEQ', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:43:55', '2022-12-04 15:43:58'),
(22, 26, 'si_MvGXD2w2WOqWt3', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:45:22', '2022-12-04 15:45:24'),
(23, 27, 'si_MvGXgbOTwEZePf', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:45:45', '2022-12-04 15:45:48'),
(24, 28, 'si_MvGXChDAMow6IU', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:45:49', '2022-12-04 15:45:52'),
(25, 29, 'si_MvGX7kfovkTGuz', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:45:53', '2022-12-04 15:45:55'),
(26, 30, 'si_MvGXCkUPJwdHTi', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:46:07', '2022-12-04 15:46:09'),
(27, 31, 'si_MvGX7CZpMF0qWz', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:46:11', '2022-12-04 15:46:13'),
(28, 32, 'si_MvGYDZ84naDF2C', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:46:32', '2022-12-04 15:46:34'),
(29, 33, 'si_MvGYUmxF0TeIpp', 'prod_MtLul134h4TkGF', 'price_1MAxGOGynPrdxMfbIovKOpGo', 1, '2022-12-04 15:46:36', '2022-12-04 15:46:38'),
(30, 34, 'si_MvGaLeg2brc77z', 'prod_MtLqPKOzVurda6', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, '2022-12-04 15:49:10', '2022-12-04 15:49:13'),
(31, 35, 'si_MvGe12aIhEo6Hv', 'prod_MtLqPKOzVurda6', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, '2022-12-04 15:52:56', '2022-12-04 15:52:58'),
(32, 36, 'si_MvGeTl3WskSkcJ', 'prod_MtLqPKOzVurda6', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, '2022-12-04 15:53:00', '2022-12-04 15:53:02'),
(33, 37, 'si_MvGgpNcekhoRYK', 'prod_MtLqPKOzVurda6', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, '2022-12-04 15:54:52', '2022-12-04 15:54:55'),
(34, 38, 'si_MvGiJxbCekq1wJ', 'prod_MtLqPKOzVurda6', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, '2022-12-04 15:57:10', '2022-12-04 15:57:12'),
(35, 39, 'si_MvedEDXdq8mTrC', 'prod_MtLruj7irgqRru', 'price_1MAxLQGynPrdxMfbhsvz1TTN', 1, '2022-12-05 16:40:11', '2022-12-05 16:40:11'),
(36, 40, 'si_Mw1K7SOYPf2gY0', 'prod_MtLqPKOzVurda6', 'price_1MAxLBGynPrdxMfbTMsK2x6A', 1, '2022-12-06 16:06:22', '2022-12-06 16:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofbirth` timestamp NULL DEFAULT current_timestamp(),
  `cellphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `address`, `dateofbirth`, `cellphone`, `job_position`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`, `profile_picture`) VALUES
(1, 'rashu', '', 'rashu.pro@gmail.com', '', '2022-12-05 20:51:31', NULL, NULL, NULL, '$2y$10$m21vucATN67cbkbLXUrSpOwrmWkorXHBtSo59fZHFJ.ndFPRJIrie', 'HhExiBBNf2MTwnCenQYLuydsS9Vn9zqM9bThYrAsmzSoMlJb5SHEU7GiPPTu', '2022-11-03 14:05:55', '2022-11-12 03:22:51', 'cus_MmpaanMdlPPKcs', 'card', '4242', NULL, NULL),
(2, 'New User', '', '', '', '2022-12-05 20:51:31', NULL, NULL, NULL, '', NULL, NULL, '2022-11-11 05:05:27', 'cus_MkJjhqtLT00ldi', 'Visa credit card', NULL, NULL, NULL),
(3, 'test user', '', 'rashu.web@gmail.com', '', '2022-12-05 20:51:31', NULL, NULL, NULL, '$2y$10$kx0n/kKOvzAiQFYcP6QkGeSYowxBXJ7Hfv2PMrGKFRb0sYeB0vm8O', NULL, '2022-11-12 10:38:12', '2022-11-12 10:49:51', 'cus_Mmwny4g9Nt0ZVs', 'card', '5556', NULL, NULL),
(4, 'new user', '', 'rashu@mail.com', '', '2022-12-05 20:51:31', NULL, NULL, NULL, '$2y$10$uEacDiyPPDpBBfeX80RTUuL/bfi5RXNkX3e5nd7bvZ.raUkAG2f2y', NULL, '2022-11-12 13:11:47', '2022-11-12 13:17:28', 'cus_MmzBRT6mvLNVst', 'card', '1111', NULL, NULL),
(5, 'Giuseppe Pace', '', 'peppus19@outlook.it', '', '2022-12-05 20:51:31', NULL, NULL, NULL, '$2y$10$l8lHDXmsus32KzfX3jSecuVmvUc1bcENSNp7XO3IzrTuXdSrH7LBW', NULL, '2022-12-03 22:15:06', '2022-12-03 22:15:06', NULL, NULL, NULL, NULL, NULL),
(6, 'Giuseppe', '', 'giuseppe.pace.19@outlook.it', '', '2022-12-05 20:51:31', NULL, NULL, NULL, '$2y$10$jD3ZFE5TigtF0wDUbGnkJes.IpDFQOACTNLhu.19cV/x6N4QCld8W', NULL, '2022-12-05 00:40:24', '2022-12-05 00:40:24', NULL, NULL, NULL, NULL, NULL),
(7, 'FRANCESCO', '', 'maggio.francesco@itinsystem.it', '', '2022-12-05 20:51:31', NULL, NULL, NULL, '$2y$10$MvbzLMr3Q9Srp5A.ol7q0utO5zQNBLpwIcsRXeDBCN4l5KfBeZWgS', NULL, '2022-12-05 08:52:58', '2022-12-05 08:52:58', NULL, NULL, NULL, NULL, NULL),
(8, 'Rooney Hooper', NULL, 'qumikuqu@mailinator.com', NULL, '2022-12-05 21:15:00', NULL, NULL, NULL, '$2y$10$H7W1rKhCuex3gLnJX6iHWugOQWsQRsg9b4P38dVMd6m3HP3PP/f2.', NULL, '2022-12-05 15:15:00', '2022-12-05 15:15:00', NULL, NULL, NULL, NULL, NULL),
(9, 'Ursa Clarke', NULL, 'myrojyqyh@mailinator.com', NULL, '2022-12-05 21:17:56', NULL, NULL, NULL, 'f55ec0c4277e8763a29b5f318bc6885b', NULL, '2022-12-05 15:17:56', '2022-12-05 15:17:56', NULL, NULL, NULL, NULL, NULL),
(10, 'Zane Whitaker', 'Hunt', 'relisixuvu@mailinator.com', 'Magni dicta culpa d', '2022-12-05 21:19:42', '+1 (918) 102-2174', NULL, NULL, '$2y$10$X69bk6LzQr8rIoYeUX.jx.NQlq5L8g1xXidKkyc20Ns0ys6YEBYOC', NULL, '2022-12-05 15:19:42', '2022-12-05 16:40:10', 'cus_MvedNsXMVUEAet', NULL, NULL, NULL, NULL),
(11, 'Kirk Burch', 'Burns', 'nuxicu@mailinator.com', 'dgdfgd', '2022-12-06 22:05:16', '+1 (115) 931-4255', NULL, NULL, '$2y$10$F4UAUI9HU6pYwnpVu7kykOezu6sy4ZPL0nEmmWWKGOznAOujcTahy', NULL, '2022-12-06 16:05:16', '2022-12-06 16:06:20', 'cus_Mw1KHG1VKZmIaM', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

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
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `price_stripe_id_unique` (`stripe_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_stripe_id_unique` (`stripe_id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_index` (`category_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD UNIQUE KEY `subscriptions_scheduled_id_unique` (`scheduled_id`),
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
