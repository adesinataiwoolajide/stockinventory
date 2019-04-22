-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 07:36 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_managements`
--

CREATE TABLE `account_managements` (
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `activity_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operations` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`activity_id`, `user_id`, `operations`, `created_at`, `updated_at`) VALUES
(1, '1', 'Added Raw Material To The Category List', '2019-04-12 07:48:22', '2019-04-12 07:48:22'),
(2, '1', 'Added Consumables To The Category List', '2019-04-12 07:55:27', '2019-04-12 07:55:27'),
(3, '1', 'Added Hybrid Applications To The Category List', '2019-04-12 08:39:03', '2019-04-12 08:39:03'),
(4, '1', 'Added Goke Demmy To The Supplier List', '2019-04-13 11:33:34', '2019-04-13 11:33:34'),
(5, '1', 'Added Goke Demmy To The Supplier List', '2019-04-13 11:36:38', '2019-04-13 11:36:38'),
(6, '1', 'Added Goke Demmy To The Supplier List', '2019-04-13 11:37:25', '2019-04-13 11:37:25'),
(7, '1', 'Added Goke Demmy To The Supplier List', '2019-04-13 11:39:37', '2019-04-13 11:39:37'),
(8, '1', 'Added Goke Demmy To The Supplier List', '2019-04-13 11:41:29', '2019-04-13 11:41:29'),
(9, '1', 'Added Adesina Taiwo Olajide To The Supplier List', '2019-04-13 11:42:29', '2019-04-13 11:42:29'),
(10, '1', 'Added Adesina Taiwo Olajide To The Supplier List', '2019-04-13 11:46:18', '2019-04-13 11:46:18'),
(11, '1', 'Added Adelabu Adebayo To The Distributor List', '2019-04-13 12:25:37', '2019-04-13 12:25:37'),
(12, '1', 'Added Noble Immaculate To The Distributor List', '2019-04-13 12:28:21', '2019-04-13 12:28:21'),
(13, '1', 'Added Politician To The Distributor List', '2019-04-13 12:35:54', '2019-04-13 12:35:54'),
(14, '1', 'Added Foodco Idiape To The Outlet List', '2019-04-13 12:57:11', '2019-04-13 12:57:11'),
(15, '1', 'Added Feed Well Makola To The Outlet List', '2019-04-13 12:58:54', '2019-04-13 12:58:54'),
(16, '1', 'Assigned This DistributorAdelabu Adebayo To This OutletFoodco Idiape', '2019-04-13 20:47:18', '2019-04-13 20:47:18'),
(17, '1', 'Assigned This DistributorNoble Immaculate To This OutletFoodco Idiape', '2019-04-13 20:47:48', '2019-04-13 20:47:48'),
(18, '1', 'Assigned This DistributorAdelabu Adebayo To This OutletFeed Well Makola', '2019-04-13 20:54:27', '2019-04-13 20:54:27'),
(19, '1', 'Added Glorious Empire To The Outlet List', '2019-04-13 20:58:08', '2019-04-13 20:58:08'),
(20, '1', 'Added Cadlinks Eleyele To The Outlet List', '2019-04-13 20:59:53', '2019-04-13 20:59:53'),
(21, '1', 'Assigned Politician To Cadlinks Eleyele', '2019-04-13 21:00:30', '2019-04-13 21:00:30'),
(22, '1', 'Assigned Adelabu Adebayo To Cadlinks Eleyele', '2019-04-15 12:00:01', '2019-04-15 12:00:01'),
(23, '1', 'You Have AddedGYwith Size 20 LitresTo Raw Material', '2019-04-15 12:53:57', '2019-04-15 12:53:57'),
(24, '1', 'You Have AddedGYwith Size 20 LitresTo Raw Material', '2019-04-15 12:54:26', '2019-04-15 12:54:26'),
(25, '1', 'You Have AddedGYwith Size 20 LitresTo Raw Material', '2019-04-15 12:56:03', '2019-04-15 12:56:03'),
(26, '1', 'You Have AddedGYwith Size 20 LitresTo Raw Material', '2019-04-15 13:01:13', '2019-04-15 13:01:13'),
(27, '1', 'You Have AddedCap seal (Small and Big)with Size NullTo Consumables', '2019-04-15 13:02:11', '2019-04-15 13:02:11'),
(28, '1', 'Added Desktops To The Ware House List', '2019-04-15 16:15:01', '2019-04-15 16:15:01'),
(29, '1', 'Added Desktops To The Ware House List', '2019-04-15 16:15:38', '2019-04-15 16:15:38'),
(30, '1', 'Added Desktops To The Ware House List', '2019-04-15 16:16:04', '2019-04-15 16:16:04'),
(31, '1', 'Added Desktops To The Ware House List', '2019-04-15 16:16:31', '2019-04-15 16:16:31'),
(32, '1', 'Added Desktops To The Ware House List', '2019-04-15 16:17:39', '2019-04-15 16:17:39'),
(33, '1', 'Added Politician To The Ware House List', '2019-04-15 16:28:57', '2019-04-15 16:28:57'),
(34, '1', 'Added Adesina Taiwo Olajide To The Ware House List', '2019-04-15 16:29:44', '2019-04-15 16:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `assign_outlets`
--

CREATE TABLE `assign_outlets` (
  `assign_id` bigint(20) UNSIGNED NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `distributor_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_outlets`
--

INSERT INTO `assign_outlets` (`assign_id`, `outlet_id`, `distributor_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-04-13 20:47:18', '2019-04-13 20:47:18'),
(2, 1, 2, '2019-04-13 20:47:49', '2019-04-13 20:47:49'),
(3, 2, 1, '2019-04-13 20:54:27', '2019-04-13 20:54:27'),
(4, 4, 3, '2019-04-13 21:00:31', '2019-04-13 21:00:31'),
(5, 4, 1, '2019-04-15 12:00:02', '2019-04-15 12:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `updated_at`, `created_at`) VALUES
(1, 'Raw Material', '2019-04-12 07:48:23', '2019-04-12 07:48:23'),
(2, 'Consumables', '2019-04-12 07:55:27', '2019-04-12 07:55:27'),
(3, 'Hybrid Applications', '2019-04-12 08:39:03', '2019-04-12 08:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `distributor_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_one` int(11) NOT NULL,
  `phone_two` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_limit` int(11) NOT NULL,
  `credit_reduction_per_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`distributor_id`, `name`, `phone_one`, `phone_two`, `email`, `address`, `credit_limit`, `credit_reduction_per_month`, `updated_at`, `created_at`) VALUES
(1, 'Adelabu Adebayo', 908675949, 907654433, 'adelabu@gmail.com', 'Fola Hope', 1000, '2000', '2019-04-13 12:25:37', '2019-04-13 12:25:37'),
(2, 'Noble Immaculate', 908568478, 595749474, 'hope@gmail.cm', 'Bodija Esteta', 1000, '200', '2019-04-13 12:28:22', '2019-04-13 12:28:22'),
(3, 'Politician', 90868688, 97863537, 'hopes@gmail.cm', 'knr jvkgrhvfdkjdnh dj', 1000, '2000', '2019-04-13 12:35:54', '2019-04-13 12:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `contract_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_stocks`
--

CREATE TABLE `inventory_stocks` (
  `stock_id` bigint(20) UNSIGNED NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_08_143418_create_outlets_table', 1),
(4, '2019_04_08_144117_create_suppliers_table', 1),
(5, '2019_04_08_144314_create_distributors_table', 1),
(6, '2019_04_08_144513_create_products_table', 1),
(7, '2019_04_08_145017_create_orders_table', 1),
(8, '2019_04_08_145234_create_customers_table', 1),
(9, '2019_04_08_145741_create_employees_table', 1),
(10, '2019_04_08_150220_create_ware_house_managements_table', 1),
(11, '2019_04_08_151419_create_product_variants_table', 1),
(12, '2019_04_08_151907_create_account_managements_table', 1),
(13, '2019_04_08_152058_create_inventory_stocks_table', 1),
(14, '2019_04_08_152304_create_sales_table', 1),
(15, '2019_04_08_152432_create_user_roles_table', 1),
(16, '2019_04_09_034032_create_categories_table', 1),
(17, '2019_04_09_042654_create_activity_logs_table', 2),
(18, '2019_04_09_044501_add_category_id_to_products', 3),
(19, '2019_04_10_161600_create_permission_tables', 4),
(20, '2019_04_13_121032_add_status_to_users', 5),
(21, '2019_04_13_163904_create_assign_outlets_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(5, 'App\\User', '1'),
(7, 'App\\User', '1'),
(8, 'App\\User', '1'),
(9, 'App\\User', '1'),
(10, 'App\\User', '1'),
(11, 'App\\User', '1'),
(12, 'App\\User', '1'),
(13, 'App\\User', '1'),
(15, 'App\\User', '1'),
(16, 'App\\User', '1'),
(17, 'App\\User', '1'),
(18, 'App\\User', '1'),
(19, 'App\\User', '1'),
(20, 'App\\User', '1'),
(21, 'App\\User', '1'),
(22, 'App\\User', '1'),
(23, 'App\\User', '1'),
(24, 'App\\User', '1'),
(25, 'App\\User', '1'),
(26, 'App\\User', '1'),
(27, 'App\\User', '1'),
(28, 'App\\User', '1'),
(34, 'App\\User', '1'),
(35, 'App\\User', '1'),
(36, 'App\\User', '1'),
(37, 'App\\User', '1');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `total_order` int(11) NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `outlets`
--

CREATE TABLE `outlets` (
  `outlet_id` bigint(20) UNSIGNED NOT NULL,
  `outlet_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outlets`
--

INSERT INTO `outlets` (`outlet_id`, `outlet_name`, `updated_at`, `created_at`) VALUES
(1, 'Foodco Idiape', '2019-04-13 12:57:12', '2019-04-13 12:57:12'),
(2, 'Feed Well Makola', '2019-04-13 12:58:54', '2019-04-13 12:58:54'),
(3, 'Glorious Empire', '2019-04-13 20:58:08', '2019-04-13 20:58:08'),
(4, 'Cadlinks Eleyele', '2019-04-13 20:59:53', '2019-04-13 20:59:53');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2019-04-10 15:37:35', '2019-04-10 15:37:35'),
(2, 'role-create', 'web', '2019-04-10 15:37:36', '2019-04-10 15:37:36'),
(3, 'role-edit', 'web', '2019-04-10 15:37:36', '2019-04-10 15:37:36'),
(4, 'role-delete', 'web', '2019-04-10 15:37:36', '2019-04-10 15:37:36'),
(5, 'product-list', 'web', '2019-04-10 15:37:37', '2019-04-10 15:37:37'),
(6, 'product-create', 'web', '2019-04-10 15:37:39', '2019-04-10 15:37:39'),
(7, 'product-edit', 'web', '2019-04-10 15:37:40', '2019-04-10 15:37:40'),
(8, 'product-delete', 'web', '2019-04-10 15:37:41', '2019-04-10 15:37:41'),
(9, 'category-create', 'web', '2019-04-10 15:37:43', '2019-04-10 15:37:43'),
(10, 'category-edit', 'web', '2019-04-10 15:37:45', '2019-04-10 15:37:45'),
(11, 'category-delete', 'web', '2019-04-10 15:37:47', '2019-04-10 15:37:47'),
(12, 'category-update', 'web', '2019-04-10 15:37:48', '2019-04-10 15:37:48'),
(13, 'variant-create', 'web', '2019-04-10 15:37:49', '2019-04-10 15:37:49'),
(14, 'variant-edit', 'web', '2019-04-10 15:37:50', '2019-04-10 15:37:50'),
(15, 'variant-delete', 'web', '2019-04-10 15:37:50', '2019-04-10 15:37:50'),
(16, 'variant-update', 'web', '2019-04-10 15:37:50', '2019-04-10 15:37:50'),
(17, 'distributor-create', 'web', '2019-04-10 15:37:51', '2019-04-10 15:37:51'),
(18, 'distributor-edit', 'web', '2019-04-10 15:37:51', '2019-04-10 15:37:51'),
(19, 'distributor-delete', 'web', '2019-04-10 15:37:51', '2019-04-10 15:37:51'),
(20, 'distributor-update', 'web', '2019-04-10 15:37:52', '2019-04-10 15:37:52'),
(21, 'supplier-create', 'web', '2019-04-10 15:37:53', '2019-04-10 15:37:53'),
(22, 'supplier-edit', 'web', '2019-04-10 15:37:53', '2019-04-10 15:37:53'),
(23, 'supplier-delete', 'web', '2019-04-10 15:37:53', '2019-04-10 15:37:53'),
(24, 'supplier-update', 'web', '2019-04-10 15:37:53', '2019-04-10 15:37:53'),
(25, 'outlet-create', 'web', '2019-04-10 15:37:54', '2019-04-10 15:37:54'),
(26, 'outlet-edit', 'web', '2019-04-10 15:37:54', '2019-04-10 15:37:54'),
(27, 'outlet-delete', 'web', '2019-04-10 15:37:54', '2019-04-10 15:37:54'),
(28, 'outlet-update', 'web', '2019-04-10 15:37:54', '2019-04-10 15:37:54'),
(29, 'order-create', 'web', '2019-04-10 15:37:55', '2019-04-10 15:37:55'),
(30, 'order-edit', 'web', '2019-04-10 15:37:56', '2019-04-10 15:37:56'),
(31, 'order-delete', 'web', '2019-04-10 15:37:56', '2019-04-10 15:37:56'),
(32, 'order-update', 'web', '2019-04-10 15:37:56', '2019-04-10 15:37:56'),
(33, 'All Pages', 'web', '2019-04-12 06:02:46', '2019-04-12 06:02:46'),
(34, 'warehouse-create', 'web', '2019-04-15 14:50:01', '2019-04-15 14:50:01'),
(35, 'warehouse-edit', 'web', '2019-04-15 14:50:58', '2019-04-15 14:50:58'),
(36, 'warehouse-update', 'web', '2019-04-15 14:52:52', '2019-04-15 14:52:52'),
(37, 'warehouse-delete', 'web', '2019-04-15 14:53:16', '2019-04-15 14:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `variant_id` bigint(20) UNSIGNED NOT NULL,
  `variant_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(255) NOT NULL,
  `variant_size` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`variant_id`, `variant_name`, `category_id`, `variant_size`, `updated_at`, `created_at`) VALUES
(1, 'GY', 1, '20 Litres', '2019-04-15 13:01:13', '2019-04-15 13:01:13'),
(2, 'Cap seal (Small and Big)', 2, 'Null', '2019-04-15 13:02:11', '2019-04-15 13:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'web', '2019-04-11 07:00:20', '2019-04-11 04:17:18'),
(2, 'Editor', 'web', '2019-04-11 14:06:57', '2019-04-11 14:06:57'),
(3, 'Receptionist', 'web', '2019-04-11 14:08:08', '2019-04-11 14:08:08'),
(4, 'Supplier', 'web', '2019-04-11 14:09:10', '2019-04-11 14:09:10'),
(5, 'Distributor', 'web', '2019-04-11 14:09:51', '2019-04-11 14:09:51'),
(6, 'Accountant', 'web', '2019-04-11 14:10:23', '2019-04-11 14:10:23'),
(7, 'check order', 'web', '2019-04-11 14:15:43', '2019-04-11 14:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(6, 1),
(9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` bigint(20) UNSIGNED NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_one` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_two` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `name`, `phone_one`, `phone_two`, `email`, `address`, `city`, `state`, `country`, `updated_at`, `created_at`) VALUES
(2, 'Goke Demmy', '08138139333', '081', 'hope@gmail.cm', 'kjdsbf kj hxdfu', 'IBADAN', '20 Litres', '25 Litres', '2019-04-13 11:41:29', '2019-04-13 11:41:29'),
(3, 'Adesina Taiwo Olajide', '09087464467', '08076457755', 'taiwo@gmail.com', 'klygchjnjk,j', 'IBADAN', '25 Litres', '20 Litres', '2019-04-13 11:42:30', '2019-04-13 11:42:30'),
(4, 'Adesina Taiwo Olajide', '090867867', '09086866655', 'kenny@gmail.com', 'Follow', 'Mushin', '20 Litres', '20 Litres', '2019-04-13 11:46:18', '2019-04-13 11:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `registration_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `role`, `password`, `status`, `registration_number`, `updated_at`, `created_at`) VALUES
(1, 'Adesina Taiwo Olajide', 'tolajide74@gmail.com', 'Administrator', '$2y$10$/HzGhIa5ALfVv4LkM5jiVuEHTa3Hq8LnRDyFWxavUVCsXMAej2kDq', 0, '', '2019-04-10 16:29:39', '2019-04-10 16:29:39'),
(2, 'Adesina Taiwo Victor', 'admin@gmail.com', 'Administrator', '$2y$10$FVcO2c4XOKFNGDVsS.2L2OufMfv7fFOIrh/6slx0mzmBZZto5D5Ym', 0, '', '2019-04-12 20:43:47', '2019-04-12 20:43:47'),
(3, 'Goke Demmy', 'hope@gmail.cm', '\"Supplier\"', '$2y$10$eGq05ulslcZiCtnW/ghBOuLRexCsG6GREUIxKEsoLzG5EjxsYbI7q', 0, '', '2019-04-13 11:41:29', '2019-04-13 11:41:29'),
(4, 'Adesina Taiwo Olajide', 'taiwo@gmail.com', '\"Supplier\"', '$2y$10$VnItny6D1KtSXtfUlnERo.XaVFSxYyQYtH.PBsTFydsg2qc/pGUiC', 0, '', '2019-04-13 11:42:31', '2019-04-13 11:42:31'),
(5, 'Adesina Taiwo Olajide', 'kenny@gmail.com', '\"Supplier\"', '$2y$10$NXOIXgGgbP5a21CzLfvkmOAomR1MbTiLWgcrHI9Yq9AkPQCaEN3oa', 0, '', '2019-04-13 11:46:18', '2019-04-13 11:46:18'),
(6, 'Adelabu Adebayo', 'adelabu@gmail.com', '\"Distributor\"', '$2y$10$G1fk7CcPNVYoncKRyI1r8OtngKUyiILB.J7./oJsLoNtBcowgopke', 0, '502', '2019-04-13 12:25:37', '2019-04-13 12:25:37'),
(8, 'Politician', 'hopes@gmail.cm', '\"Distributor\"', '$2y$10$bcYNx7rdZdwRb8Gfu4XMIeq7M.O5DJbL8F7hNDV3ux3xpgwobcV2i', 0, '1011', '2019-04-13 12:35:54', '2019-04-13 12:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ware_house_managements`
--

CREATE TABLE `ware_house_managements` (
  `ware_house_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ware_house_managements`
--

INSERT INTO `ware_house_managements` (`ware_house_id`, `name`, `address`, `city`, `state`, `country`, `start_date`, `user_id`, `updated_at`, `created_at`) VALUES
(1, 'Desktops', 'fdajdafvh fruk', 'Mushin', 'Adamawa', '20 Litres', '2019-04-08', 'Adesina Taiwo Olajide', '2019-04-15 16:16:31', '2019-04-15 16:16:31'),
(2, 'Desktops', 'fdksfv suv shgfur', 'Mushin Lagos', 'Imo', '20 Litres', '2019-04-08', 'Politician', '2019-04-15 16:17:39', '2019-04-15 16:17:39'),
(3, 'Politician', 'cvk i skihf fsukjf cbuh', 'Mushin Lagos', 'Edo', 'Nigeria', '2019-04-16', 'Goke Demmy', '2019-04-15 16:28:58', '2019-04-15 16:28:58'),
(4, 'Adesina Taiwo Olajide', 'ahofdbin', 'IBADAN', 'Imo', 'Others', '2019-04-30', 'Adesina Taiwo Olajide', '2019-04-15 16:29:44', '2019-04-15 16:29:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_managements`
--
ALTER TABLE `account_managements`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `assign_outlets`
--
ALTER TABLE `assign_outlets`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`distributor_id`),
  ADD UNIQUE KEY `distributors_phone_one_unique` (`phone_one`),
  ADD UNIQUE KEY `distributors_phone_two_unique` (`phone_two`),
  ADD UNIQUE KEY `distributors_email_unique` (`email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `employees_phone_number_unique` (`phone_number`);

--
-- Indexes for table `inventory_stocks`
--
ALTER TABLE `inventory_stocks`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `orders_transaction_id_unique` (`transaction_id`);

--
-- Indexes for table `outlets`
--
ALTER TABLE `outlets`
  ADD PRIMARY KEY (`outlet_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `products_product_slug_unique` (`product_slug`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`variant_id`),
  ADD UNIQUE KEY `product_variants_variant_name_unique` (`variant_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `suppliers_phone_one_unique` (`phone_one`),
  ADD UNIQUE KEY `suppliers_phone_two_unique` (`phone_two`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `user_roles_role_name_unique` (`role_name`);

--
-- Indexes for table `ware_house_managements`
--
ALTER TABLE `ware_house_managements`
  ADD PRIMARY KEY (`ware_house_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_managements`
--
ALTER TABLE `account_managements`
  MODIFY `account_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `activity_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `assign_outlets`
--
ALTER TABLE `assign_outlets`
  MODIFY `assign_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `distributor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_stocks`
--
ALTER TABLE `inventory_stocks`
  MODIFY `stock_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outlets`
--
ALTER TABLE `outlets`
  MODIFY `outlet_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `variant_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ware_house_managements`
--
ALTER TABLE `ware_house_managements`
  MODIFY `ware_house_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
