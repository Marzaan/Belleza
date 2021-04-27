-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 04:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rooftop`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownerQuotes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownerImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `image`, `ownerQuotes`, `ownerImage`, `created_at`, `updated_at`) VALUES
(2, 'Belleza continuously innovates to offer a wide range of high performance and good cosmetics, skincare products, and beauty salons. Combining new cosmetic technology with an in-depth understanding of our woman’s needs, Belleza also offers its consumers a comprehensive beauty experience through its products that are ideal for a variety of our skin tones.', 'about-img.jpg', 'Happiness is not in money, but in shopping. When I make my clients happy that real success.\r\n\r\nOur goal is to serve you with the best things and being your part of happiness.\r\nBuy good, stay good.', 'owner-img.jpg', '2020-12-18 16:32:35', '2020-12-21 06:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `contact1`, `contact2`, `contact3`, `email1`, `email3`, `created_at`, `updated_at`) VALUES
(2, '432 Wyandotte Ave, Lakewood, OH, 44107', '8801779878026', '8801521321282', '8801731348323', 'yeasminakter123@gmail.com', 'support@belleza.com', '2019-06-16 13:00:32', '2020-12-12 17:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category`, `name`, `description`, `price`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Lip', 'Lipstick', 'Lorial Brand (Red Color)', 250, 'g1.jpg', NULL, '2019-06-15 15:04:30', '2020-12-18 19:02:03'),
(2, 'Lip', 'Lipstick', 'Lorial (Pink)', 300, 'g2.jpg', NULL, '2019-06-15 15:07:07', '2020-12-18 17:40:59'),
(3, 'Eye', 'Eye Brow Brush', 'Glossier', 200, 'g4.jpg', '2020-12-18 17:39:53', '2019-06-15 15:07:32', '2020-12-18 17:39:53'),
(4, 'Face', 'Face Powder', 'Lekme Brand', 350, 'g3.jpg', NULL, '2019-06-15 15:07:56', '2020-12-18 17:39:41'),
(5, 'Face', 'Sun Screen Powder', 'BrushOnBlock', 250, 'g4.jpg', NULL, '2019-06-15 15:08:27', '2020-12-18 17:35:18'),
(6, 'Eye', 'Eye Brow', 'Lorial Brand', 50, 'g1.jpg', '2020-12-18 18:38:46', '2019-06-15 15:10:08', '2020-12-18 18:38:46'),
(7, 'Face', 'Dove', 'Moisturizer (500gm)', 300, 'Dove.jpg', NULL, '2020-12-18 17:44:48', '2020-12-18 17:44:48'),
(8, 'Face', 'Olay', 'Moisturizer (500gm)', 500, 'olay.jpg', NULL, '2020-12-18 17:45:23', '2020-12-18 17:45:23'),
(9, 'Face', 'Himalaya', 'Moisturizer (500gm)', 400, 'Himalaya.jpg', NULL, '2020-12-18 17:46:01', '2020-12-18 17:46:01'),
(10, 'Face', 'Foundation', 'Born This Way', 800, 'FFBornThisWay.jpg', NULL, '2020-12-18 17:46:35', '2020-12-18 17:46:35'),
(11, 'Face', 'Foundation', 'Loreal Paris', 1000, 'FFLorealParis.jpg', NULL, '2020-12-18 17:47:00', '2020-12-18 17:47:00'),
(12, 'Face', 'Face Powder', 'Attitude Brand', 500, 'FPattitude.jpg', NULL, '2020-12-18 17:47:30', '2020-12-18 17:47:30'),
(13, 'Face', 'Face Powder', 'ColourBox Brand', 600, 'FPcolourbox.jpg', NULL, '2020-12-18 17:48:02', '2020-12-18 17:48:02'),
(14, 'Face', 'Foundation', 'NYX Brand', 700, 'FFnyx.jpeg', NULL, '2020-12-18 17:48:54', '2020-12-18 17:48:54'),
(15, 'Lip', 'Lipstick', 'NARS Brand', 250, 'LipstickBrown.jpg', NULL, '2020-12-18 17:51:45', '2020-12-18 17:51:45'),
(16, 'Eye', 'Mascara', 'Absolutely Water Proof', 350, 'AbsolutelyWaterproofMascara.jpg', NULL, '2020-12-18 17:55:31', '2020-12-18 17:55:31'),
(17, 'Eye', 'Eye Shadow', 'NARS Brand', 300, 'NARSSingleEyeshadow.jpg', NULL, '2020-12-18 17:56:19', '2020-12-18 17:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `mobile`, `message`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Marzan', 'raiyanmarzan.rm@gmail.com', '82122323', 'Hlw.. please tell something about your project', NULL, '2019-06-15 15:10:57', '2019-06-15 15:10:57'),
(3, 'Nahian', 'nahian@gmail.com', '82122323', 'Hlw.. I am Nahian', '2020-12-18 17:12:41', '2019-07-08 04:36:43', '2020-12-18 17:12:41'),
(6, 'Sonia', 'soniafoujia@gmail.com', '01779878026', 'How are you and your business.. ??', NULL, '2020-12-18 18:33:21', '2020-12-18 18:33:21');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_05_24_210900_create_items_table', 1),
(16, '2019_06_15_163553_create_messages_table', 1),
(17, '2019_06_15_173541_create_contacts_table', 1),
(25, '2019_07_07_203651_create_orders_table', 4),
(26, '2019_06_15_173610_create_abouts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL,
  `productName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `productDescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `CustomerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Confirm',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `pid`, `productName`, `price`, `productDescription`, `productType`, `quantity`, `CustomerName`, `phone`, `email`, `address`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'Lipstick', 300, 'Lorial', 'Lip', 1, 'Afra', '01521321282', 'afra132@gmail.com', 'lamabazar, Sylhet.', 'Completed', '2020-12-18 17:10:13', '2020-12-18 17:18:32'),
(4, 4, 'Face Powder', 350, 'Lorial Brand', 'Face', 1, 'Bushra', '01779878026', 'bushra153@yahoo.com', 'zindabazar, Sylhet.', 'Confirmed', '2020-12-18 17:12:13', '2020-12-18 17:18:44'),
(5, 5, 'Sun Screen Powder', 250, 'Ponds', 'Face', 2, 'Putul', '01779878026', 'putul@gmail.com', 'salibondor, Sylhet.', 'Not Confirm', '2020-12-18 17:18:14', '2020-12-18 17:18:14');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Raiyan Marzan', 'raiyanmarzan.rm@gmail.com', NULL, '$2y$10$dVpSpodriPRjdS8pBoWOqOa2BxRsxtjXvE.UQfECKDSwqIxlnWOyS', NULL, '2019-06-15 15:01:32', '2019-06-15 15:01:32'),
(2, 'Yeasmin Akter', 'yeasminakter25@gmail.com', NULL, '$2y$10$Z8/5bDbBrBUBxjoBftG2XOhk7kbsBtHgN6XnWZTlI.jvkpmELm6ve', NULL, '2020-12-21 06:03:29', '2020-12-21 06:03:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
