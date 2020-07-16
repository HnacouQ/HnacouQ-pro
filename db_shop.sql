-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 07:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(1) DEFAULT '1',
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT '1',
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT '#',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `type`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'banner', 1, '1594647798-banner.png', '#', '2020-07-13 06:43:18', '2020-07-13 06:43:18'),
(2, 'banner-2', 1, '1594647932-banner-2.png', '#', '2020-07-13 06:45:32', '2020-07-13 06:45:32'),
(3, 'banner-3', 1, '1594647952-banner-3.png', '#', '2020-07-13 06:45:52', '2020-07-13 06:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Thời Trang Nam', 1, 'thoi-trang-nam', 0, '2020-07-12 08:10:31', '2020-07-12 08:10:31'),
(2, 'Thời Trang Nữ', 1, 'thoi-trang-nu', 0, '2020-07-12 08:10:47', '2020-07-12 08:10:47'),
(3, 'Phụ Kiện', 1, 'phu-kien', 0, '2020-07-12 08:12:40', '2020-07-12 08:12:40'),
(4, 'Áo sơ mi nam', 1, 'ao-so-mi-nam', 1, '2020-07-14 18:18:19', '2020-07-14 18:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('quocanh2298@gmail.com', '$2y$10$iFS4ZEQyGIrqNMnC1Hu2yOrYBIRvFOlINlpQi6qn.PNSZGhKZbzC2', '2020-07-11 02:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float NOT NULL,
  `sale_price` float DEFAULT '0',
  `content` text COLLATE utf8_unicode_ci,
  `slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `sale_price`, `content`, `slug`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Áo Sơ Mi Nam Chất liệu Kate lụa', '1594568209-Men1.jpg', 5000000, 200000, 'Chất vải: Lụa không nhăn.\r\nKiểu tay áo: Tay dài.\r\nĐường may tinh tế, tỉ mỉ trong từng chi tiết.\r\nÁo sơ mi nam họa tiết Cao cấp, không Bai, không Xù, Không mất phom sau thời gian dài sử dụng.\r\nChất vải mềm, mặc thoáng mát, thấm hút mồ hôi.', 'ao-so-mi-nam-chat-lieu-kate-lua', 1, 1, '2020-07-12 08:36:49', '2020-07-12 08:36:49'),
(3, 'Full set Cá tính Nữ', '1594568492-woment9.jpg', 2500000, 0, 'đẹp', 'full-set-ca-tinh-nu', 2, 0, '2020-07-12 08:41:32', '2020-07-12 08:41:32'),
(4, 'Black Dress Beautiful', '1594568566-women7.jpg', 2000000, 0, 'nice!', 'black-dress-beautiful', 2, 1, '2020-07-12 08:42:46', '2020-07-12 08:42:46'),
(5, 'Áo Thun Hồng Nam Tính', '1594568629-men2.jpg', 600000, 0, 'đẹp', 'ao-thun-hong-nam-tinh', 1, 1, '2020-07-12 08:43:49', '2020-07-12 08:43:49'),
(7, 'Áo Nam Fly-By-Air Black cool', '1594568789-men5.jpg', 700000, 0, 'đẹp', 'ao-nam-fly-by-air-black-cool', 1, 1, '2020-07-12 08:46:29', '2020-07-12 08:46:29'),
(9, 'Đồ Ngủ Simple Nữ', '1594568925-women5.jpg', 200000, 0, 'đẹp', 'do-ngu-simple-nu', 2, 1, '2020-07-12 08:48:45', '2020-07-12 08:48:45'),
(10, 'Áo Sơ Mi Sọc Kẻ Xanh Đỏ', '1594700492-men3.jpg', 2000000, 1500000, 'Đẹp', 'ao-so-mi-soc-ke-xanh-do', 1, 1, '2020-07-12 08:50:32', '2020-07-13 21:21:32'),
(12, 'Vòng Tay Cá tính', '1594569145-phu-kien7.jpg', 500000, 450000, 'đẹp', 'vong-tay-ca-tinh', 3, 1, '2020-07-12 08:52:25', '2020-07-12 08:52:25'),
(13, 'Thời trang công sở đơn giản', '1594569227-women1.jpg', 3520000, 0, 'đẹp', 'thoi-trang-cong-so-don-gian', 2, 1, '2020-07-12 08:53:47', '2020-07-12 08:53:47'),
(14, 'Full set Trắng thoáng mát nữ', '1594569308-women3.jpg', 2000000, 1520000, 'đẹp', 'full-set-trang-thoang-mat-nu', 2, 0, '2020-07-12 08:55:08', '2020-07-12 08:55:08'),
(15, 'Áo Phông Nam Trẻ Trung', '1594569389-men8.jpg', 650000, 500000, 'đẹp', 'ao-phong-nam-tre-trung', 1, 1, '2020-07-12 08:56:29', '2020-07-12 08:56:29'),
(16, 'mũ Lưỡi Trai chất lượng cao', '1594569461-phu-kien4.jpg', 200000, 150000, 'đẹp', 'mu-luoi-trai-chat-luong-cao', 3, 0, '2020-07-12 08:57:41', '2020-07-12 08:57:41'),
(17, 'Thắt lưng Nam và Nữ Đẹp', '1594569511-phu-kien3.jpg', 600000, 150000, 'đẹp', 'that-lung-nam-va-nu-dep', 3, 1, '2020-07-12 08:58:31', '2020-07-12 08:58:31'),
(18, 'Dress Beautiful Girl', '1594569576-women8.jpg', 400000, 35000, 'đẹp', 'dress-beautiful-girl', 2, 0, '2020-07-12 08:59:36', '2020-07-12 08:59:36'),
(19, 'áo Sơ Mi Kẻ sọc Trắng', '1594569631-men7.jpg', 600000, 500000, 'đẹp', 'ao-so-mi-ke-soc-trang', 1, 0, '2020-07-12 09:00:31', '2020-07-12 09:00:31'),
(20, 'Cà Vạt Chất lượng Cao', '1594569689-phu-kien8.jpg', 400000, 0, 'đẹp', 'ca-vat-chat-luong-cao', 3, 0, '2020-07-12 09:01:29', '2020-07-12 09:01:29'),
(21, 'Áo sơ mi kẻ sọc đen', '1594569730-men6.jpg', 1000000, 0, 'đẹp', 'ao-so-mi-ke-soc-den', 1, 1, '2020-07-12 09:02:10', '2020-07-12 09:02:10'),
(22, 'Dress Simple Girl', '1594569804-women6.jpg', 2000000, 0, 'đẹp', 'dress-simple-girl', 2, 1, '2020-07-12 09:03:24', '2020-07-12 09:03:24'),
(23, 'Áo Nam Nghịch Ngợm', '1594569843-men4.jpg', 1000000, 0, 'đẹp', 'ao-nam-nghich-ngom', 1, 1, '2020-07-12 09:04:03', '2020-07-12 09:04:03'),
(24, 'Vòng Phong thủy', '1594569932-phu-kien6.jpg', 1000000, 0, 'đẹp', 'vong-phong-thuy', 3, 0, '2020-07-12 09:05:32', '2020-07-12 09:05:32'),
(25, 'Đồ treo trang trí', '1594569971-phu-kien2.jpg', 100000, 20000, 'đẹp', 'do-treo-trang-tri', 3, 0, '2020-07-12 09:06:11', '2020-07-12 09:06:11'),
(26, 'Mũ Lưỡi Trai Phối màu', '1594575598-phu-kien10.jpg', 1000000, 500000, 'đẹp', 'mu-luoi-trai-phoi-mau', 3, 0, '2020-07-12 10:39:58', '2020-07-12 10:39:58'),
(27, 'Vòng Phong Thủy màu xanh', '1594575691-phu-kien9.png', 2000000, 1000000, 'đẹp', 'vong-phong-thuy-mau-xanh', 3, 1, '2020-07-12 10:41:31', '2020-07-12 10:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Quốc Anh', 'quocanh2298@gmail.com', 'Anhthe-1.jpg', NULL, '$2y$10$FbLY4UWJDwc.Q6Iy5PmuWO1CFfX7nCal3k15.6SnHmCfk.DWUn..e', 'QjGxnu6gmzZpLiz3fOtj3bUSOtm9gTHo0ZIFyF1Ip6NsQv1gyFGE52VjFOca', '2020-07-07 22:09:17', '2020-07-07 22:09:17'),
(2, 'Huỳnh Quốc Anh', 'admin@gmail.com', NULL, NULL, '$2y$10$mJzQgXKLX32jiBJ8rTlN2uKDr7CXta4Kn/wuJIYZMnq/BJQm8Gk7C', NULL, '2020-07-08 00:58:25', '2020-07-08 00:58:25'),
(5, 'HnaCouQ', 'qa012@gmail.com', NULL, NULL, '$2y$10$4rjKokhCDuzWf6K.QP1dcOHHCKECoopQam7hfzIyKTl0TFeYtocVe', NULL, '2020-07-08 01:42:42', '2020-07-08 01:42:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category_id` (`category_id`);

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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
