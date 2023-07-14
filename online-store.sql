-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 14 2023 г., 03:50
-- Версия сервера: 5.7.41-44
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

<<<<<<< HEAD
=======


>>>>>>> fa60cfb9881ea77c57064047b416208965efbc37
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cw48103_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `code`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Товары для футбола', 'football', 'Лучшие товары для футбола', 'uploads/category/p30OiFGHo3OqTD6nzXHcp2Bz1dXDS42OJLgevKFw.jpg', '2023-06-14 00:06:52', '2023-06-14 00:06:52'),
(2, 'Товары для хоккея', 'hockey', 'Лучшие товары для хоккея', 'uploads/category/tGdoj9YaFmcfwiaTPxyrtHXFLfQ4X7f5qp1GQTfR.jpg', '2023-06-14 00:12:56', '2023-06-14 00:12:56'),
(3, 'Теннис', 'tennis', 'Товары для тенниса', 'uploads/category/WJQYeyqHdOEkwlBfyKQc1frqaHzUicTzY7OOgaN9.jpg', '2023-06-14 04:53:30', '2023-06-14 04:53:30');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_13_140237_create_product_table', 1),
(6, '2023_06_13_140600_create_categories_table', 1),
(7, '2023_06_13_205057_create_orders_table', 1),
(8, '2023_06_13_205704_create_order_product_table', 1),
(9, '2023_06_13_220106_create_permission_tables', 1),
(10, '2023_04_28_215754_update_order_product_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `status`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, NULL, '2023-06-14 00:37:53', '2023-06-14 00:37:53'),
(2, 0, NULL, NULL, '2023-06-14 01:03:46', '2023-06-14 01:03:46'),
(3, 0, NULL, NULL, '2023-06-14 02:16:51', '2023-06-14 02:16:51'),
(4, 0, NULL, NULL, '2023-06-14 04:57:23', '2023-06-14 04:57:23'),
(5, 0, NULL, NULL, '2023-06-14 14:10:05', '2023-06-14 14:10:05'),
(6, 0, NULL, NULL, '2023-06-14 14:11:04', '2023-06-14 14:11:04'),
(7, 0, NULL, NULL, '2023-06-15 17:33:45', '2023-06-15 17:33:45'),
(8, 0, NULL, NULL, '2023-07-13 15:48:07', '2023-07-13 15:48:07');

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE IF NOT EXISTS `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-06-14 00:46:55', '2023-06-14 00:46:58'),
(2, 2, 1, 1, '2023-06-14 01:03:46', '2023-06-14 01:03:59'),
(6, 3, 1, 1, '2023-06-14 04:08:42', '2023-06-14 04:08:42'),
(7, 4, 5, 2, '2023-06-14 04:57:23', '2023-06-14 04:57:42'),
(8, 4, 6, 2, '2023-06-14 04:57:28', '2023-06-14 04:57:34'),
(9, 5, 5, 1, '2023-06-14 14:10:05', '2023-06-14 14:10:05'),
(10, 6, 11, 1, '2023-06-14 14:11:04', '2023-06-14 14:11:04'),
(11, 7, 7, 1, '2023-06-15 17:33:45', '2023-06-15 17:33:45'),
(12, 8, 4, 1, '2023-07-13 15:48:07', '2023-07-13 15:48:07'),
(13, 8, 5, 1, '2023-07-13 15:48:14', '2023-07-13 15:48:14');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `category_id`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Футбольный мяч Aerial', 'football_ball_1', 1, 'Футбольный мяч Aerial', 'uploads/product/football1.jpg', 600, NULL, '2023-06-14 04:55:43'),
(4, 'Футбольные бутсы детские Nike', 'boots', 1, 'бытсы', 'uploads/product/boots.jpg', 3200, NULL, NULL),
(5, 'Хоккейная клюшка Zeta', 'hockeystick1', 2, 'бытсы', 'uploads/product/hockeystick.jpg', 2100, NULL, NULL),
(6, 'Хоккейная шайба MK-2', 'puck1', 2, 'бытсы', 'uploads/product/puck.jpg', 200, NULL, NULL),
(7, 'Хоккейная шайба Heavy', 'puck2', 2, 'бытсы', 'uploads/product/puck.jpg', 300, NULL, NULL),
(8, 'Хоккейная клюшка SandROck', 'hockeystick2', 2, 'бытсы', 'uploads/product/hockeystick.jpg', 1800, NULL, NULL),
(9, 'Футбольный мяч Adidas', 'football_ball_2', 1, 'Это мяч', 'uploads/product/football2.jpg', 950, NULL, NULL),
(10, 'Хоккейная клюшка Shenlong', 'hockeystick3', 2, 'бытсы', 'uploads/product/hockeystick.jpg', 2500, NULL, NULL),
(11, 'Вратарские перчатки Finger', 'goalkeeper1', 1, 'Перчатки', 'uploads/product/goalkeep.jpg', 1200, NULL, NULL),
(12, 'Футбольные бутсы Nike', 'boots', 1, 'бытсы', 'uploads/product/boots.jpg', 3200, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2023-06-14 00:00:16', '2023-06-14 00:00:16'),
(2, 'admin', 'web', '2023-06-14 00:00:21', '2023-06-14 00:00:21');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'test', 'test@gmail.com', NULL, '$2y$10$YSuV0rusvtCTLRollHclI.HEusnYmebTORvaJOoYJSqNzIJLV4qfa', NULL, NULL, NULL, NULL, '2023-06-14 00:00:56', '2023-06-14 00:00:56'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$EPyc/ZTpKczA1pw1Z.U7ped7P3F2rLvvEuqMBI3riTXadWh8JrFpG', NULL, NULL, NULL, NULL, '2023-06-14 00:01:16', '2023-06-14 00:01:16'),
(4, 'sasha', 'sasha@gmail.com', NULL, '$2y$10$sVAWNZZgbCTZJ.3BHuTlae7pn9klGS9lod46wKhjEWjmtA2fEts0e', NULL, NULL, NULL, NULL, '2023-06-14 04:21:44', '2023-06-14 04:21:44'),
(5, 'ilyaT', 'terentev@gmail.com', NULL, '$2y$10$CDplqzNMTm7qODxjhX6GnurQcK2PCYQ7PLYTRv67M5TR/zUttKzkK', NULL, NULL, NULL, NULL, '2023-06-14 04:56:49', '2023-06-14 04:56:49');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
