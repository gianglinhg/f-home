-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 25, 2023 lúc 02:51 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fhome`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int UNSIGNED NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'vitae', 'vitae', 5, 1, '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(2, 'ipsam', 'ipsam', 1, 1, '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(3, 'sint', 'sint', 4, 1, '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(4, 'cum', 'cum', 5, 1, '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(5, 'dicta', 'dicta', 5, 1, '2023-04-18 03:11:02', '2023-04-18 03:11:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 'Explicabo est necessitatibus quis quia. Aspernatur aut velit in nobis doloribus qui aut. Voluptatem eaque dolore consequatur occaecati. Nulla dolorum consequuntur placeat nisi doloribus et sit.', '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(2, 5, 3, 'Praesentium et repellat et excepturi quo ex. Pariatur modi quae deserunt voluptas dolores ea. Corporis doloribus earum accusamus quibusdam aliquid quo doloremque.', '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(3, 3, 1, 'In qui iusto molestiae dolores sed odio doloremque. Iure aut repellat omnis at.', '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(4, 1, 4, 'Sed id dolor corporis non. Beatae officia consequatur animi omnis placeat impedit. Vero eligendi aliquid repellat quia est non. Numquam et id dolores voluptas qui voluptatem dolore.', '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(5, 2, 5, 'Repudiandae quisquam est veritatis ullam. Ut aliquam eos alias quia. Id deserunt maiores labore dolorem. Et vel nulla quis totam.', '2023-04-18 03:11:02', '2023-04-18 03:11:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mail_contacts`
--

CREATE TABLE `mail_contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mail_contacts`
--

INSERT INTO `mail_contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'f-home', 'linhbq89@gmail.com', '0337229661', '123', '2023-04-18 03:20:37', '2023-04-18 03:20:37'),
(2, 'f-home', 'linhbq89@gmail.com', '0337229661', 'Test  này thử', '2023-04-18 03:43:51', '2023-04-18 03:43:51'),
(3, 'f-home', 'linhbq89@gmail.com', '0337229661', 'Test mail', '2023-04-18 03:55:32', '2023-04-18 03:55:32'),
(4, 'Giang Van Linh', 'linhbq89@gmail.com', '0337229661', '123', '2023-04-18 03:57:08', '2023-04-18 03:57:08'),
(5, 'Giang Van Linh', 'linhbq89@gmail.com', '0337229661', '123', '2023-04-18 04:12:06', '2023-04-18 04:12:06'),
(6, 'Giang Van Linh', 'linhbq89@gmail.com', '0337229661', 'Test mail', '2023-04-19 08:51:54', '2023-04-19 08:51:54'),
(7, 'f-home', 'linhbq89@gmail.com', '0337229661', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2023-04-19 08:56:04', '2023-04-19 08:56:04'),
(8, 'f-home', 'linhbq89@gmail.com', '0337229661', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2023-04-19 08:57:21', '2023-04-19 08:57:21'),
(9, 'f-home', 'linhbq89@gmail.com', '0337229661', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2023-04-19 08:58:54', '2023-04-19 08:58:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_01_132231_create_product_table', 1),
(7, '2023_04_03_022643_create_categories_table', 1),
(8, '2023_04_03_022658_create_comments_table', 1),
(9, '2023_04_03_022711_create_order_details_table', 1),
(10, '2023_04_03_022718_create_orders_table', 1),
(11, '2023_04_18_100835_create_mail_contacts_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chờ xác nhận',
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `order_id` int UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` int NOT NULL,
  `discount` int DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `description`, `content`, `price`, `discount`, `image`, `sku`, `featured`, `created_at`, `updated_at`) VALUES
(1, 1, 'est', 'est', 'Pariatur quisquam labore praesentium non et et eius. Illo deleniti tempore odio voluptas voluptas libero quae. Voluptatem dolorum quis voluptates minima veritatis cumque molestias.', 'Cum qui est ea officiis. Molestiae reiciendis iusto voluptatem nihil corrupti eius vel. Est similique et earum facere minus sit consequatur. Ut omnis necessitatibus dolores sit necessitatibus est.', 459459, NULL, 'product-4.png', 'PRO-IGH5', 1, '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(2, 2, 'pariatur', 'pariatur', 'Sed soluta doloribus nulla occaecati et. Dicta asperiores eos aut eos ex numquam. Qui eos et et tempora nisi. Possimus et non aut.', 'Est minima perspiciatis dolorum non consequatur quasi at non. Esse consequatur et modi amet neque. Ea eum et architecto eveniet quia rem. Dolorum architecto doloremque et ut.', 991359, NULL, 'product-4.png', 'PRO-2LXB', 1, '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(3, 1, 'ea', 'ea', 'Delectus esse id ratione inventore voluptates veniam. Aliquam ad iste velit et magni magnam maxime. Qui quaerat iste eveniet doloremque quis ea. Exercitationem expedita ullam sunt aperiam facere vitae et.', 'Aut assumenda soluta in et dolores rerum dolorem perferendis. Possimus autem doloremque deleniti sequi dolores reprehenderit et. Sed fugit beatae explicabo id et ab corrupti.', 812273, NULL, 'product-4.png', 'PRO-VXHN', 1, '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(4, 3, 'voluptates', 'voluptates', 'Officia architecto eos facere. Facere et ut neque occaecati magnam. Aut dicta rerum eos dolores. Aut et eligendi consequatur qui.', 'Quos dignissimos dolorum aut voluptas mollitia deserunt culpa aliquid. Dolorem autem nihil sequi. Fuga libero eum sint aliquam consequuntur in.', 437980, NULL, 'product-1.png', 'PRO-VYGH', 1, '2023-04-18 03:11:02', '2023-04-18 03:11:02'),
(5, 3, 'adipisci', 'adipisci', 'Voluptatum aut fuga officia. Atque quasi praesentium rerum consequatur corporis. Sunt voluptas laudantium ab deserunt. Porro et esse et et nihil.', 'Non magni consequuntur maxime. Et asperiores non mollitia porro ipsum rerum aperiam. Quas corrupti dolores corrupti voluptas harum aut. Iste sit amet dolores aut aut asperiores ipsam occaecati.', 330544, NULL, 'product-5.png', 'PRO-UVXL', 1, '2023-04-18 03:11:02', '2023-04-18 03:11:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `role`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'default.jpg', 'f-home', 'linhbq89@gmail.com', 'user', '$2y$10$VJvnOq/0v5T4J/FWYZcFJO2WglJtCFaKvaAAS5pJpJmihF9ovMAfi', NULL, NULL, '2023-04-18 03:11:49', '2023-04-18 03:11:49'),
(2, 'default.jpg', 'Từ Nguyên Khôi', 'khoitnps15595@fpt.edu.vn', 'user', '$2y$10$7ybLHO2pQiPCC7W5w20fm.vJtGmoUNM/7RtzGESz14yQbLz9QGMb6', NULL, NULL, '2023-03-03 02:32:26', NULL),
(3, 'default.jpg', 'Đường Duy Tân', 'tanddps15156@fpt.edu.vn', 'user', '$2y$10$XN0Fr34pn5p75./M/YRUxevgltFddjx.DsBLhKgVspJzXRs1of.2G', NULL, NULL, '2023-06-21 02:32:26', NULL),
(4, 'default.jpg', 'Đoàn Văn Thành', 'Thanhdvps15017@fpt.edu.vn', 'user', '$2y$10$nQU4B.87lmcQyoQ8QtMCXOFxrWPTvWMyUBK4aTy3XDDuJjofCv4fm', NULL, NULL, '2023-03-24 02:32:26', NULL),
(5, 'default.jpg', 'Phan Thế Dương', 'duongptph14649@fpt.edu.vn ', 'user', '$2y$10$p6fRTcsr1Ur2d.REndFgtOokwWxa0SL6xtMdaS6YkH6CG/nN5lB4q', NULL, NULL, '2023-08-19 02:32:26', NULL),
(6, 'default.jpg', 'Giang Văn Linh', 'linhgvps14900@fpt.edu.vne', 'user', '$2y$10$iKTOX0Ak5I5vvatPtiNd0.60YwN/0rtcRTZ8KlsFa4abcZUp66Pz6', NULL, NULL, '2023-04-25 02:32:26', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `mail_contacts`
--
ALTER TABLE `mail_contacts`
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
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

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
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mail_contacts`
--
ALTER TABLE `mail_contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
