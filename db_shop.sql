-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 04, 2020 lúc 03:51 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
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
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `type`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'banner', 1, '1594647798-banner.png', '#', '2020-07-13 06:43:18', '2020-07-13 06:43:18'),
(2, 'banner-2', 1, '1594647932-banner-2.png', '#', '2020-07-13 06:45:32', '2020-07-13 06:45:32'),
(3, 'banner-3', 1, '1594647952-banner-3.png', '#', '2020-07-13 06:45:52', '2020-07-13 06:45:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
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
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Thời Trang Nam', 1, 'thoi-trang-nam', 0, '2020-07-12 08:10:31', '2020-07-12 08:10:31'),
(2, 'Thời Trang Nữ', 1, 'thoi-trang-nu', 0, '2020-07-12 08:10:47', '2020-07-12 08:10:47'),
(3, 'Phụ Kiện', 1, 'phu-kien', 0, '2020-07-12 08:12:40', '2020-07-12 08:12:40'),
(6, 'Hoodie', 1, 'hoodie', 0, '2020-08-28 23:58:35', '2020-08-28 23:58:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `com_slug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `content`, `com_slug`, `created_at`, `updated_at`) VALUES
(1, 'HnacouQ', 'quocanh2298@gmail.com', 'sản phẩm chất lượng kém quá!!!', 'ao-thun-hong-nam-tinh', '2020-08-21 03:05:49', '2020-08-21 03:05:49'),
(7, 'Đại', 'daiub1998@gmail.com', 'sản phẩm tốt!!', 'ao-thun-hong-nam-tinh', '2020-08-21 03:24:47', '2020-08-21 03:24:47'),
(8, 'HnacouQ', 'quocanh2298@gmail.com', 'khá bảnh!!!', 'ao-so-mi-nam-chat-lieu-kate-lua', '2020-08-21 05:15:30', '2020-08-21 05:15:30'),
(9, 'Huỳnh Quốc Anh', 'ph2002bkap@gmail.com', 'sản phẩm tốt!!', 'ao-khoac-new-style-da-ca-sau', '2020-08-21 05:17:35', '2020-08-21 05:17:35'),
(10, 'Huỳnh Quốc Anh', 'quocanh2298@gmail.com', 'gjhj', 'ao-nam-nghich-ngom', '2020-08-22 04:14:16', '2020-08-22 04:14:16'),
(11, 'Huỳnh Anh', 'admin@gmail.com', 'khá bảnh cũng khá đuối!!', 'ao-khoac-new-style-da-ca-sau', '2020-08-22 19:43:43', '2020-08-22 19:43:43'),
(12, 'HnaCouQ', 'quocanh2298@gmail.com', '2132313', 'full-set-ca-tinh-nu', '2020-08-25 10:20:00', '2020-08-25 10:20:00'),
(13, 'dai', 'admin@gmail.com', 'sản phẩm này giá hơi đắt !!!', 'ao-phong-nam-tre-trung', '2020-08-28 00:46:09', '2020-08-28 00:46:09'),
(14, 'Quân', 'quan@gmail.com', 'sản phẩm đẹp mà giá hơi rẻ!', 'ao-ke-nam-dep', '2020-08-28 00:48:46', '2020-08-28 00:48:46'),
(15, 'hnacouq', 'phuongthai98@gmail.com', 'sản phẩm này kém chất lượng!!!', 'ao-so-mi-nam-chat-lieu-kate-lua', '2020-09-03 06:33:20', '2020-09-03 06:33:20'),
(16, 'dai', 'admin@gmail.com', 'áo đẹp đấy!!', 'ao-so-mi-nam-chat-lieu-kate-lua', '2020-09-03 06:34:24', '2020-09-03 06:34:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `address`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'HnacouQ', 'daiub1998@gmail.com', '0921313931', 'hà nọi', '$2y$10$eX7thf1s1FFdmCOBTlhAGedwAiAofQxQnYKtk0zHJHqSAOEEuoyyS', NULL, '2020-07-17 05:43:01', '2020-07-17 05:43:01'),
(3, 'Quốc Anh', 'quocanh2298@gmail.com', '0399419888', '', '$2y$10$CXHDQLP7J8dVgBosxQ7Vle2xnOQ76qowoJN9JQ4U4Uf1AUxzPefCy', NULL, '2020-07-20 02:11:39', '2020-07-20 02:11:39'),
(4, 'Huỳnh Anh', 'quocanh@gmail.com', '0976646886', '', '$2y$10$uJlENcq7OIHllz8uKLtTEuqkqEmX5MvZcx/yu.N6YBW10RYe7izSi', NULL, '2020-07-20 21:30:29', '2020-07-20 21:30:29'),
(6, 'huynhasd', 'ph20@gmail.com', '123213123', 'Hà lam', '123456', NULL, '2020-07-31 09:03:29', '2020-07-31 09:03:29'),
(7, 'Huỳnh Quốc Anh', 'ph2002bkap@gmail.com', '213123123', NULL, '$2y$10$KO7OPulAhOrsOBxGOE3fwe3EE9WMSbVvg/KHZqNWQqHJTPBD5xROu', NULL, '2020-07-31 02:04:25', '2020-07-31 02:04:25'),
(8, 'HnaCouQ', 'hnacouqpls@gmail.com', '0374124123', 'Phù Lỗ Sóc Sơn Hà Nội', '$2y$10$6hGy6DlqTIZwDfIkVCkeuOcH8.BeMZUboS8UFUk9CfNwrSwhemzJm', NULL, '2020-08-24 06:04:31', '2020-08-24 06:04:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `order_note`, `payment_method`, `status`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 'Quốc Anh', 'quocanh2298@gmail.com', '0399419888', NULL, 'adas', 0, 0, 3, '2020-07-28 19:40:27', '2020-07-30 09:16:22'),
(2, 'Quốc Anh', 'quocanh2298@gmail.com', '0399419888', NULL, 'ádadaa', 0, 1, 3, '2020-07-28 20:26:15', '2020-08-19 19:01:03'),
(3, 'Quốc Anh', 'quocanh2298@gmail.com', '0399419888', NULL, 'khá bảnh cũng khá đuối', 1, 1, 3, '2020-07-28 22:17:38', '2020-07-30 09:16:43'),
(4, 'Quốc Anh', 'quocanh2298@gmail.com', '0399419888', NULL, 'khá bảnh đuối quá', 0, 1, 3, '2020-07-28 22:22:17', '2020-08-11 05:21:55'),
(5, 'Quốc Anh', 'quocanh2298@gmail.com', '0399419888', NULL, 'em hỏi nhạc sao hay anh gọi đó là bí thuật', 1, 1, 3, '2020-07-29 01:11:12', '2020-07-31 02:08:58'),
(6, 'Quốc Anh', 'quocanh2298@gmail.com', '0399419888', '', 'gửi nhanh nhé', 0, 2, 3, '2020-08-21 05:21:10', '2020-09-03 06:36:02'),
(7, 'HnaCouQ', 'hnacouqpls@gmail.com', '0374124123', 'Phù Lỗ Sóc Sơn Hà Nội', 'Nhanh gọn lẹ nhé cưng!!!', 1, 2, 8, '2020-08-24 06:06:40', '2020-08-27 21:44:37'),
(8, 'HnaCouQ', 'hnacouqpls@gmail.com', '0374124123', 'Phù Lỗ Sóc Sơn Hà Nội', 'anh biết rằng a sai', 0, 1, 8, '2020-08-24 06:08:25', '2020-08-27 20:44:32'),
(9, 'HnaCouQ', 'hnacouqpls@gmail.com', '0374124123', 'Phù Lỗ Sóc Sơn Hà Nội', 'nhưng không bao giờ tha thứ', 0, 2, 8, '2020-08-24 06:09:29', '2020-08-27 21:47:28'),
(10, 'HnaCouQ', 'hnacouqpls@gmail.com', '0374124123', 'Phù Lỗ Sóc Sơn Hà Nội', '...', 0, 1, 8, '2020-08-24 06:10:49', '2020-08-25 05:26:26'),
(11, 'HnaCouQ', 'hnacouqpls@gmail.com', '0374124123', 'Phù Lỗ Sóc Sơn Hà Nội', 'nhanh nhé!!', 0, 2, 8, '2020-08-27 19:54:14', '2020-08-27 21:31:39'),
(12, 'Anh', 'hnacouqpls@gmail.com', '21312313', 'Hà nội', 'cần gấp!', 1, 2, 8, '2020-08-27 19:58:21', '2020-08-27 21:43:52'),
(13, 'HnaCouQ', 'hnacouqpls@gmail.com', '0374124123', 'Phù Lỗ Sóc Sơn Hà Nội', 'gửi hàng xóm', 0, 2, 8, '2020-08-27 22:05:16', '2020-08-27 22:05:36'),
(14, 'HnaCouQ', 'hnacouqpls@gmail.com', '0374124123', 'Phù Lỗ Sóc Sơn Hà Nội', 'gửi bác Hòa hàng xóm', 0, 2, 8, '2020-08-27 22:08:19', '2020-08-27 22:08:35'),
(15, 'Quốc Anh', 'quocanh2298@gmail.com', '0399419888', NULL, NULL, 0, 2, 3, '2020-08-29 02:47:52', '2020-09-03 06:35:49'),
(16, 'HnaCouQ', 'hnacouqpls@gmail.com', '0374124123', 'Phù Lỗ Sóc Sơn Hà Nội', 'giao hàng ngoài giờ hành chính nhé!!!', 1, 1, 8, '2020-08-30 01:52:48', '2020-09-04 02:51:04'),
(17, 'Quốc Anh', 'quocanh2298@gmail.com', '0399419888', 'Hà Nội', 'khá bảnh cũng khá đuối!!!', 1, 1, 3, '2020-09-03 06:39:09', '2020-09-04 02:51:07'),
(18, 'Quốc Anh', 'quocanh2298@gmail.com', '0399419888', 'Hà Nội', 'à thế à!!', 1, 1, 3, '2020-09-03 21:04:38', '2020-09-04 02:51:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 21, 1, 1000000),
(2, 29, 50, 150000),
(3, 29, 31, 150000),
(4, 27, 21, 1000000),
(5, 5, 1, 600000),
(5, 15, 1, 500000),
(5, 16, 1, 150000),
(6, 29, 8, 150000),
(6, 27, 1, 1000000),
(6, 5, 2, 600000),
(7, 1, 5, 200000),
(7, 19, 6, 500000),
(7, 30, 7, 1900000),
(8, 7, 10, 700000),
(9, 22, 1, 2000000),
(10, 4, 12, 2000000),
(11, 1, 8, 200000),
(12, 16, 1, 150000),
(13, 17, 1, 150000),
(14, 29, 1, 150000),
(15, 30, 1, 1900000),
(15, 15, 1, 500000),
(15, 29, 1, 150000),
(16, 33, 1, 300000),
(16, 30, 1, 1900000),
(17, 33, 12, 300000),
(18, 33, 2, 300000),
(18, 32, 1, 290000),
(18, 31, 1, 450000),
(18, 30, 1, 1900000),
(18, 15, 1, 500000),
(18, 1, 1, 200000),
(18, 29, 1, 150000),
(18, 4, 1, 2000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('quocanh2298@gmail.com', '$2y$10$iFS4ZEQyGIrqNMnC1Hu2yOrYBIRvFOlINlpQi6qn.PNSZGhKZbzC2', '2020-07-11 02:13:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float NOT NULL,
  `sale_price` float DEFAULT '0',
  `content` text COLLATE utf8_unicode_ci,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `sale_price`, `content`, `slug`, `category_id`, `views`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Áo Sơ Mi Nam Chất liệu Kate lụa', '1594568209-Men1.jpg', 5000000, 200000, 'Chất vải: Lụa không nhăn.\r\nKiểu tay áo: Tay dài.\r\nĐường may tinh tế, tỉ mỉ trong từng chi tiết.\r\nÁo sơ mi nam họa tiết Cao cấp, không Bai, không Xù, Không mất phom sau thời gian dài sử dụng.\r\nChất vải mềm, mặc thoáng mát, thấm hút mồ hôi.', 'ao-so-mi-nam-chat-lieu-kate-lua', 1, 16, 1, '2020-07-12 08:36:49', '2020-09-03 21:52:52'),
(3, 'Full set Cá tính Nữ', '1594568492-woment9.jpg', 2500000, 0, 'đẹp', 'full-set-ca-tinh-nu', 2, 0, 0, '2020-07-12 08:41:32', '2020-07-12 08:41:32'),
(4, 'Black Dress Beautiful', '1594568566-women7.jpg', 2000000, 0, 'nice!', 'black-dress-beautiful', 2, 3, 1, '2020-07-12 08:42:46', '2020-08-28 20:10:59'),
(5, 'Áo Thun Hồng Nam Tính', '1594568629-men2.jpg', 600000, 0, 'đẹp', 'ao-thun-hong-nam-tinh', 1, 1, 1, '2020-07-12 08:43:49', '2020-08-28 00:43:21'),
(7, 'Áo Nam Fly-By-Air Black cool', '1594568789-men5.jpg', 700000, 0, 'đẹp', 'ao-nam-fly-by-air-black-cool', 1, 0, 1, '2020-07-12 08:46:29', '2020-07-12 08:46:29'),
(9, 'Đồ Ngủ Simple Nữ', '1594568925-women5.jpg', 200000, 0, 'đẹp', 'do-ngu-simple-nu', 2, 0, 1, '2020-07-12 08:48:45', '2020-07-12 08:48:45'),
(12, 'Vòng Tay Cá tính', '1594569145-phu-kien7.jpg', 500000, 450000, 'đẹp', 'vong-tay-ca-tinh', 3, 0, 1, '2020-07-12 08:52:25', '2020-07-12 08:52:25'),
(13, 'Thời trang công sở đơn giản', '1594569227-women1.jpg', 3520000, 0, 'đẹp', 'thoi-trang-cong-so-don-gian', 2, 0, 1, '2020-07-12 08:53:47', '2020-07-12 08:53:47'),
(14, 'Full set Trắng thoáng mát nữ', '1594569308-women3.jpg', 2000000, 1520000, 'đẹp', 'full-set-trang-thoang-mat-nu', 2, 0, 0, '2020-07-12 08:55:08', '2020-07-12 08:55:08'),
(15, 'Áo Phông Nam Trẻ Trung', '1594569389-men8.jpg', 650000, 500000, 'đẹp', 'ao-phong-nam-tre-trung', 1, 11, 1, '2020-07-12 08:56:29', '2020-09-03 06:34:38'),
(16, 'mũ Lưỡi Trai chất lượng cao', '1594569461-phu-kien4.jpg', 200000, 150000, 'đẹp', 'mu-luoi-trai-chat-luong-cao', 3, 0, 0, '2020-07-12 08:57:41', '2020-07-12 08:57:41'),
(17, 'Thắt lưng Nam và Nữ Đẹp', '1594569511-phu-kien3.jpg', 600000, 150000, 'đẹp', 'that-lung-nam-va-nu-dep', 3, 0, 1, '2020-07-12 08:58:31', '2020-07-12 08:58:31'),
(18, 'Dress Beautiful Girl', '1594569576-women8.jpg', 400000, 35000, 'đẹp', 'dress-beautiful-girl', 2, 0, 0, '2020-07-12 08:59:36', '2020-07-12 08:59:36'),
(19, 'áo Sơ Mi Kẻ sọc Trắng', '1594569631-men7.jpg', 600000, 500000, 'đẹp', 'ao-so-mi-ke-soc-trang', 1, 0, 0, '2020-07-12 09:00:31', '2020-07-12 09:00:31'),
(20, 'Cà Vạt Chất lượng Cao', '1594569689-phu-kien8.jpg', 400000, 0, 'đẹp', 'ca-vat-chat-luong-cao', 3, 0, 0, '2020-07-12 09:01:29', '2020-07-12 09:01:29'),
(21, 'Áo sơ mi kẻ sọc đen', '1594569730-men6.jpg', 1000000, 0, 'đẹp', 'ao-so-mi-ke-soc-den', 1, 0, 1, '2020-07-12 09:02:10', '2020-07-12 09:02:10'),
(22, 'Dress Simple Girl', '1594569804-women6.jpg', 2000000, 0, 'đẹp', 'dress-simple-girl', 2, 1, 1, '2020-07-12 09:03:24', '2020-09-01 00:20:11'),
(23, 'Áo Nam Nghịch Ngợm', '1594569843-men4.jpg', 1000000, 0, 'đẹp', 'ao-nam-nghich-ngom', 1, 0, 1, '2020-07-12 09:04:03', '2020-07-12 09:04:03'),
(24, 'Vòng Phong thủy', '1594569932-phu-kien6.jpg', 1000000, 0, 'đẹp', 'vong-phong-thuy', 3, 0, 0, '2020-07-12 09:05:32', '2020-07-12 09:05:32'),
(25, 'Đồ treo trang trí', '1594569971-phu-kien2.jpg', 100000, 20000, 'đẹp', 'do-treo-trang-tri', 3, 0, 0, '2020-07-12 09:06:11', '2020-07-12 09:06:11'),
(26, 'Mũ Lưỡi Trai Phối màu', '1594575598-phu-kien10.jpg', 1000000, 500000, 'đẹp', 'mu-luoi-trai-phoi-mau', 3, 1, 0, '2020-07-12 10:39:58', '2020-08-28 03:58:26'),
(27, 'Vòng Phong Thủy màu xanh', '1594575691-phu-kien9.png', 2000000, 1000000, 'đẹp', 'vong-phong-thuy-mau-xanh', 3, 0, 1, '2020-07-12 10:41:31', '2020-07-12 10:41:31'),
(29, 'Áo kẻ nam đẹp', '1595814965-men3.jpg', 200000, 150000, 'đẹp phết', 'ao-ke-nam-dep', 1, 8, 1, '2020-07-26 18:56:05', '2020-09-03 06:37:49'),
(30, 'Áo khoác new style da cá sấu', '1597990514-quandui.jpg', 2000000, 1900000, 'Cũng rất gì và này nọ :D', 'ao-khoac-new-style-da-ca-sau', 2, 5, 1, '2020-07-27 08:07:56', '2020-09-03 06:36:36'),
(31, 'Hoodie tím mộng mơ', '1598684412-hoodietim.jpg', 450000, 0, '• Form áo oversize.\r\n• Phần nón có dây tinh chỉnh.\r\n• Ống tay áo có dán velcro.\r\n• Hình in bánh donut to ở sau, và 1 hình nhỏ ở phía ngực trái.\r\n• Có tag áo được in ở cuối thân áo.', 'hoodie-tim-mong-mo', 6, 2, 0, '2020-08-29 00:00:12', '2020-08-30 03:55:35'),
(32, 'Hoodie  form rộng', '1598684487-formrong.jpg', 300000, 290000, '• Form áo oversize.\r\n• Phần nón có dây tinh chỉnh.\r\n• Ống tay áo có dán velcro.\r\n• Hình in bánh donut to ở sau, và 1 hình nhỏ ở phía ngực trái.\r\n• Có tag áo được in ở cuối thân áo.', 'hoodie-form-rong', 6, 2, 0, '2020-08-29 00:01:27', '2020-08-30 03:53:32'),
(33, 'Hoodie  trẻ trung năng động', '1598777135-aodep.jpg', 300000, 0, 'Áo hoodie thết kế dáng suông trẻ trung cá tính.\r\nThiết kế có mũ giúp bạn chống nắng về mùa hè, giữ ấm vào mùa đông.\r\nMũ có dây rút, in chữ trên nón và hình in dễ thươngtrước ngực giúp bạnthêm nổi bật.', 'hoodie-tre-trung-nang-dong', 6, 21, 0, '2020-08-30 01:45:35', '2020-09-03 06:37:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Quốc Anh', 'quocanh2298@gmail.com', 'Anhthe-1.jpg', NULL, '$2y$10$FbLY4UWJDwc.Q6Iy5PmuWO1CFfX7nCal3k15.6SnHmCfk.DWUn..e', 'SoonlQ3qBeSb8Gh3Gnr7B2EcMejSQvbjLlsrLMcNbDgFenEKe1ffCsxpTylm', '2020-07-07 22:09:17', '2020-07-07 22:09:17'),
(2, 'Huỳnh Quốc Anh', 'admin@gmail.com', NULL, NULL, '$2y$10$mJzQgXKLX32jiBJ8rTlN2uKDr7CXta4Kn/wuJIYZMnq/BJQm8Gk7C', NULL, '2020-07-08 00:58:25', '2020-07-08 00:58:25'),
(5, 'HnaCouQ', 'qa012@gmail.com', NULL, NULL, '$2y$10$4rjKokhCDuzWf6K.QP1dcOHHCKECoopQam7hfzIyKTl0TFeYtocVe', NULL, '2020-07-08 01:42:42', '2020-07-08 01:42:42');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `com_slug` (`com_slug`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`com_slug`) REFERENCES `product` (`slug`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
