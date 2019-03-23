-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2019 at 06:53 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rainbow`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) UNSIGNED NOT NULL,
  `showing_id` int(11) NOT NULL,
  `seat_number` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `booking_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `showing_id`, `seat_number`, `price`, `status`, `created_at`, `updated_at`, `booking_number`, `movie_id`) VALUES
(1, 1, 1, 1000, 'comfirm', '2019-03-19 03:10:52', '2019-03-19 03:10:52', '123', 1),
(2, 1, 7, 1000, 'comfirm', '2019-03-19 03:10:56', '2019-03-19 03:10:56', '123', 1),
(3, 1, 8, 1000, 'comfirm', '2019-03-19 03:11:00', '2019-03-19 03:11:00', '456', 1),
(4, 2, 1, 1000, 'comfirm', '2019-03-19 03:11:08', '2019-03-19 03:11:08', '456', 2),
(5, 2, 7, 1000, 'comfirm', '2019-03-19 03:11:12', '2019-03-19 03:11:12', '789', 2),
(6, 3, 1, 1000, 'comfirm', '2019-03-19 03:11:21', '2019-03-19 03:11:21', '789', 3),
(7, 3, 7, 1000, 'comfirm', '2019-03-19 03:11:21', '2019-03-19 03:11:21', '789', 3),
(8, 3, 9, 1000, 'comfirm', '2019-03-19 03:11:25', '2019-03-19 03:11:25', '11', 3),
(22, 4, 1, 1000, 'comfirm', '2019-03-19 03:13:31', '2019-03-19 03:13:31', '44', 4),
(23, 4, 2, 1000, 'comfirm', '2019-03-19 03:13:32', '2019-03-19 03:13:32', '44', 4),
(24, 4, 3, 1000, 'comfirm', '2019-03-19 03:13:32', '2019-03-19 03:13:32', '44', 4),
(25, 4, 4, 1000, 'comfirm', '2019-03-19 03:13:32', '2019-03-19 03:13:32', '55', 4),
(26, 4, 6, 1000, 'comfirm', '2019-03-19 03:13:32', '2019-03-19 03:13:32', '44', 4),
(27, 1, 4, 1000, 'comfirm', '2019-03-19 04:38:48', '2019-03-19 04:38:48', '44', 1),
(28, 1, 2, 1000, 'comfirm', '2019-03-19 05:10:49', '2019-03-19 05:10:49', '20190319114049', 1),
(29, 1, 6, 1000, 'comfirm', '2019-03-19 08:23:02', '2019-03-19 08:23:02', '20190319145302', 1),
(30, 2, 3, 1000, 'comfirm', '2019-03-20 02:01:44', '2019-03-20 02:01:44', '20190320083144', 2),
(31, 2, 9, 1000, 'comfirm', '2019-03-20 02:01:45', '2019-03-20 02:01:45', '20190320083144', 2),
(32, 3, 3, 1000, 'comfirm', '2019-03-20 02:02:05', '2019-03-20 02:02:05', '20190320083205', 3),
(33, 3, 4, 1000, 'comfirm', '2019-03-20 02:02:06', '2019-03-20 02:02:06', '20190320083205', 3),
(34, 3, 6, 1000, 'comfirm', '2019-03-20 02:02:06', '2019-03-20 02:02:06', '20190320083205', 3),
(35, 1, 9, 1000, 'comfirm', '2019-03-20 02:09:59', '2019-03-20 02:09:59', '20190320083959', 1),
(36, 2, 8, 1000, 'comfirm', '2019-03-20 02:10:27', '2019-03-20 02:10:27', '20190320084027', 2),
(37, 2, 4, 1000, 'comfirm', '2019-03-20 02:10:58', '2019-03-20 02:10:58', '20190320084058', 2),
(38, 2, 6, 1000, 'comfirm', '2019-03-20 02:10:58', '2019-03-20 02:10:58', '20190320084058', 2),
(39, 4, 7, 1000, 'comfirm', '2019-03-20 02:11:26', '2019-03-20 02:11:26', '20190320084126', 4),
(40, 4, 8, 1000, 'comfirm', '2019-03-20 02:11:27', '2019-03-20 02:11:27', '20190320084126', 4),
(41, 3, 2, 1000, 'comfirm', '2019-03-20 02:11:55', '2019-03-20 02:11:55', '20190320084155', 3),
(42, 3, 8, 1000, 'comfirm', '2019-03-20 02:11:55', '2019-03-20 02:11:55', '20190320084155', 3),
(43, 1, 10, 1000, 'comfirm', '2019-03-20 02:12:47', '2019-03-20 02:12:47', '20190320084247', 1),
(44, 2, 10, 1000, 'comfirm', '2019-03-20 02:58:23', '2019-03-20 02:58:23', '20190320092823', 2),
(45, 1, 3, 1000, 'comfirm', '2019-03-21 09:28:02', '2019-03-21 09:28:02', '20190321155802', 1),
(46, 1, 29, 3000, 'comfirm', '2019-03-22 07:34:07', '2019-03-22 07:34:07', '20190322140407', 1),
(47, 4, 18, 2000, 'comfirm', '2019-03-22 09:09:55', '2019-03-22 09:09:55', '20190322153955', 4),
(48, 2, 21, 3000, 'comfirm', '2019-03-22 09:10:26', '2019-03-22 09:10:26', '20190322154026', 2),
(49, 2, 22, 3000, 'comfirm', '2019-03-22 09:10:26', '2019-03-22 09:10:26', '20190322154026', 2),
(50, 1, 20, 2000, 'comfirm', '2019-03-22 10:38:54', '2019-03-22 10:38:54', '20190322170854', 1),
(51, 1, 11, 2000, 'comfirm', '2019-03-22 23:43:10', '2019-03-22 23:43:10', '20190323061310', 1),
(52, 1, 12, 2000, 'comfirm', '2019-03-22 23:43:24', '2019-03-22 23:43:24', '20190323061324', 1),
(53, 1, 13, 2000, 'comfirm', '2019-03-22 23:43:42', '2019-03-22 23:43:42', '20190323061342', 1),
(54, 1, 14, 2000, 'comfirm', '2019-03-23 00:01:15', '2019-03-23 00:01:15', '20190323063115', 1),
(55, 1, 15, 2000, 'comfirm', '2019-03-23 00:01:15', '2019-03-23 00:01:15', '20190323063115', 1),
(56, 1, 16, 2000, 'comfirm', '2019-03-23 00:01:16', '2019-03-23 00:01:16', '20190323063115', 1),
(57, 1, 18, 2000, 'comfirm', '2019-03-23 00:01:40', '2019-03-23 00:01:40', '20190323063140', 1),
(58, 1, 19, 2000, 'comfirm', '2019-03-23 00:01:40', '2019-03-23 00:01:40', '20190323063140', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hall A', '2019-03-19 02:37:49', '2019-03-19 02:38:02'),
(2, 'Hall B', '2019-03-19 02:37:57', '2019-03-19 02:37:57');

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
(3, '2019_02_25_080222_create_movie_table', 1),
(4, '2019_02_26_062922_create_hall_table', 1),
(5, '2019_02_26_073755_create_seat_table', 1),
(6, '2019_02_27_073731_create_show_table', 1),
(7, '2019_02_28_101140_create_booking_table', 1),
(8, '2019_03_19_111848_add_booking_number_at_booking_table', 2),
(9, '2019_03_19_122020_add_movie_id_at_booking_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `image`, `status`, `title`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'upload/1BpIepTeutzHojMrTGEjMqMhso0IlG8IxcH793mI.jpeg', 'confirm', 'Monlight', 120, '2019-03-19 02:35:33', '2019-03-20 09:56:37'),
(2, 'upload/5lLbbXpRbTmHclaw7pj1biIoNlP53K4XY5uo99Ae.jpeg', 'some', 'Blade Runner', 120, '2019-03-19 02:36:07', '2019-03-19 02:36:07'),
(3, 'upload/pHubRL1wNdekR6Hlxuaezkg4paHbzztHCNoYEeAE.jpeg', 'some', 'Jhon Wick', 120, '2019-03-19 02:36:51', '2019-03-19 02:36:51'),
(4, 'upload/L5NNBcMJ4wd86SioqRyrfvgLx2FgBhQvQL1oA2r8.jpeg', 'some status', 'Batman', 120, '2019-03-22 08:41:09', '2019-03-22 08:41:09');

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
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(10) UNSIGNED NOT NULL,
  `hall_id` int(11) NOT NULL,
  `row` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `hall_id`, `row`, `number`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1000, '2019-03-19 02:41:02', '2019-03-19 02:41:02'),
(2, 1, 1, 2, 1000, '2019-03-19 02:41:17', '2019-03-19 02:41:17'),
(3, 1, 1, 3, 1000, '2019-03-19 02:41:29', '2019-03-19 02:41:29'),
(4, 1, 1, 4, 1000, '2019-03-19 02:42:53', '2019-03-19 02:42:53'),
(6, 1, 1, 6, 1000, '2019-03-19 02:43:16', '2019-03-19 02:43:16'),
(7, 1, 1, 7, 1000, '2019-03-19 02:43:26', '2019-03-19 02:43:26'),
(8, 1, 1, 8, 1000, '2019-03-19 02:43:37', '2019-03-19 02:43:37'),
(9, 1, 1, 9, 1000, '2019-03-19 02:43:51', '2019-03-19 02:43:51'),
(10, 1, 1, 10, 1000, '2019-03-19 02:44:07', '2019-03-19 02:44:07'),
(11, 2, 1, 1, 1000, '2019-03-19 02:44:59', '2019-03-19 02:44:59'),
(12, 2, 1, 2, 1000, '2019-03-19 02:45:11', '2019-03-19 02:45:11'),
(13, 2, 1, 3, 1000, '2019-03-19 02:45:24', '2019-03-19 02:45:24'),
(14, 2, 1, 4, 1000, '2019-03-19 02:45:34', '2019-03-19 02:45:47'),
(15, 2, 1, 6, 1000, '2019-03-19 02:46:06', '2019-03-19 02:46:06'),
(16, 2, 1, 7, 1000, '2019-03-19 02:46:15', '2019-03-19 02:46:15'),
(17, 2, 1, 8, 1000, '2019-03-19 02:46:28', '2019-03-19 02:46:28'),
(18, 1, 2, 11, 2000, '2019-03-21 10:08:27', '2019-03-21 10:08:27'),
(19, 1, 2, 12, 2000, '2019-03-21 10:08:37', '2019-03-21 10:08:37'),
(20, 1, 2, 13, 2000, '2019-03-21 10:08:48', '2019-03-21 10:08:48'),
(21, 1, 2, 14, 2000, '2019-03-21 10:08:59', '2019-03-21 10:08:59'),
(22, 1, 2, 15, 2000, '2019-03-21 10:09:12', '2019-03-21 10:09:34'),
(23, 1, 2, 16, 2000, '2019-03-21 10:09:44', '2019-03-21 10:09:44'),
(24, 1, 2, 17, 2000, '2019-03-21 10:09:58', '2019-03-21 10:09:58'),
(25, 1, 2, 18, 2000, '2019-03-21 10:10:12', '2019-03-21 10:10:12'),
(26, 1, 2, 19, 2000, '2019-03-21 10:10:27', '2019-03-21 10:10:27'),
(27, 1, 2, 20, 2000, '2019-03-21 10:10:39', '2019-03-21 10:10:39'),
(28, 1, 3, 21, 3000, '2019-03-21 10:11:01', '2019-03-21 10:11:01'),
(29, 1, 3, 22, 3000, '2019-03-21 10:11:13', '2019-03-21 10:11:13'),
(30, 1, 3, 23, 3000, '2019-03-21 10:11:24', '2019-03-21 10:11:24'),
(31, 1, 3, 24, 3000, '2019-03-21 10:11:33', '2019-03-21 10:11:33'),
(32, 1, 3, 25, 3000, '2019-03-21 10:11:41', '2019-03-21 10:11:41'),
(33, 1, 3, 26, 3000, '2019-03-21 10:11:51', '2019-03-21 10:11:51'),
(34, 1, 3, 27, 3000, '2019-03-21 10:12:07', '2019-03-21 10:12:07'),
(35, 1, 3, 28, 3000, '2019-03-21 10:12:19', '2019-03-21 10:12:19'),
(36, 1, 3, 29, 3000, '2019-03-21 10:12:29', '2019-03-21 10:12:29'),
(37, 1, 3, 30, 3000, '2019-03-21 10:12:43', '2019-03-21 10:12:43'),
(38, 1, 3, 31, 3000, '2019-03-21 10:13:11', '2019-03-21 10:13:11'),
(39, 1, 3, 32, 3000, '2019-03-21 10:13:21', '2019-03-21 10:13:21'),
(40, 1, 3, 33, 3000, '2019-03-21 10:13:31', '2019-03-21 10:13:31'),
(41, 1, 3, 34, 3000, '2019-03-21 10:13:54', '2019-03-21 10:13:54'),
(42, 2, 2, 9, 1000, '2019-03-21 10:14:12', '2019-03-21 10:18:39'),
(43, 2, 2, 10, 1000, '2019-03-21 10:14:22', '2019-03-21 10:18:21'),
(44, 2, 2, 11, 2000, '2019-03-21 10:15:04', '2019-03-21 10:19:01'),
(45, 2, 2, 12, 2000, '2019-03-21 10:15:23', '2019-03-21 10:19:17'),
(46, 2, 2, 13, 2000, '2019-03-21 10:15:34', '2019-03-21 10:28:26'),
(47, 2, 2, 14, 2000, '2019-03-21 10:15:44', '2019-03-21 10:19:43'),
(48, 2, 2, 15, 2000, '2019-03-21 10:15:55', '2019-03-21 10:19:56'),
(49, 2, 2, 16, 2000, '2019-03-21 10:16:05', '2019-03-21 10:20:07'),
(50, 2, 2, 17, 2000, '2019-03-21 10:17:03', '2019-03-21 10:20:42'),
(51, 2, 2, 18, 2000, '2019-03-21 10:21:26', '2019-03-21 10:21:26'),
(52, 2, 2, 19, 2000, '2019-03-21 10:21:37', '2019-03-21 10:21:37'),
(53, 2, 2, 20, 2000, '2019-03-21 10:21:51', '2019-03-21 10:22:04'),
(54, 2, 3, 21, 3000, '2019-03-21 10:22:23', '2019-03-21 10:22:23'),
(55, 2, 3, 22, 3000, '2019-03-21 10:22:46', '2019-03-21 10:22:46'),
(56, 2, 3, 23, 3000, '2019-03-21 10:23:07', '2019-03-21 10:23:07'),
(57, 2, 3, 24, 3000, '2019-03-21 10:23:17', '2019-03-21 10:23:32'),
(58, 2, 3, 25, 3000, '2019-03-21 10:23:45', '2019-03-21 10:23:45'),
(59, 2, 3, 26, 3000, '2019-03-21 10:23:57', '2019-03-21 10:23:57'),
(60, 2, 3, 27, 3000, '2019-03-21 10:24:09', '2019-03-21 10:24:09'),
(61, 2, 3, 28, 3000, '2019-03-21 10:24:22', '2019-03-21 10:24:22'),
(62, 2, 3, 29, 3000, '2019-03-21 10:24:39', '2019-03-21 10:24:58'),
(63, 2, 3, 30, 3000, '2019-03-21 10:25:16', '2019-03-21 10:25:16'),
(64, 2, 3, 31, 3000, '2019-03-21 10:25:27', '2019-03-21 10:25:27'),
(65, 2, 3, 32, 3000, '2019-03-21 10:25:39', '2019-03-21 10:26:43'),
(66, 2, 3, 33, 3000, '2019-03-21 10:25:51', '2019-03-21 10:25:51'),
(67, 2, 3, 34, 3000, '2019-03-21 10:26:04', '2019-03-21 10:26:57'),
(68, 1, 3, 35, 3000, '2019-03-22 08:06:30', '2019-03-22 08:06:30'),
(69, 1, 3, 36, 3000, '2019-03-22 08:14:30', '2019-03-22 08:14:30'),
(70, 1, 3, 37, 3000, '2019-03-22 08:14:41', '2019-03-22 08:14:41'),
(71, 1, 3, 38, 3000, '2019-03-22 08:15:37', '2019-03-22 08:15:37'),
(72, 1, 3, 39, 3000, '2019-03-22 08:15:48', '2019-03-22 08:15:48'),
(74, 1, 3, 40, 3000, '2019-03-22 08:16:11', '2019-03-22 08:16:11'),
(75, 1, 3, 41, 3000, '2019-03-22 08:16:22', '2019-03-22 08:16:22'),
(76, 2, 3, 35, 3000, '2019-03-22 08:20:14', '2019-03-22 08:20:14'),
(77, 2, 3, 36, 3000, '2019-03-22 08:20:30', '2019-03-22 08:20:30'),
(78, 2, 3, 37, 3000, '2019-03-22 08:21:12', '2019-03-22 08:21:12'),
(79, 2, 3, 38, 3000, '2019-03-22 08:21:26', '2019-03-22 08:21:26'),
(80, 2, 3, 39, 3000, '2019-03-22 08:21:40', '2019-03-22 08:21:40'),
(81, 2, 3, 40, 3000, '2019-03-22 08:21:52', '2019-03-22 08:21:52'),
(82, 2, 3, 41, 3000, '2019-03-22 08:22:04', '2019-03-22 08:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `show`
--

CREATE TABLE `show` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `show_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `show`
--

INSERT INTO `show` (`id`, `movie_id`, `hall_id`, `show_time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-03-20 03:30:00', '2019-03-19 02:49:55', '2019-03-19 02:49:55'),
(2, 2, 1, '2019-03-20 05:30:00', '2019-03-19 02:50:14', '2019-03-19 02:50:14'),
(3, 3, 2, '2019-03-22 08:30:00', '2019-03-19 02:50:35', '2019-03-19 02:50:35'),
(4, 4, 2, '2019-03-20 08:00:00', '2019-03-19 02:50:54', '2019-03-19 02:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$CFvSJCOQFRBTYHTWpyZC6em9lvp7AF14FnOCIv7ix.me2ZAna7K0i', '7JKC55a7eW6d8uG6v9FCxuYZUL2Utig2q3GTAaZi53XUlK9yOGwflewBKYOR', '2019-03-19 02:33:32', '2019-03-19 02:33:32'),
(2, 'Zawye', 'zaw@gmail.com', NULL, '123456', NULL, '2019-03-19 03:23:13', '2019-03-19 04:46:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show`
--
ALTER TABLE `show`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `show`
--
ALTER TABLE `show`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
