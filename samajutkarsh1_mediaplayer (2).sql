-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 05:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samajutkarsh1_mediaplayer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$geJD0cHUqnnOsa4aceZlMuFhw4R8xHpYlHAShoaUb.35oDhyz3.0O', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `logo_name` varchar(255) NOT NULL,
  `logo_image` varchar(255) NOT NULL,
  `advertisement_name` varchar(1000) NOT NULL,
  `advertisement_image` varchar(1000) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `logo_name`, `logo_image`, `advertisement_name`, `advertisement_image`, `description`, `created_at`, `updated_at`) VALUES
(5, 'fhgshgdh', '20221217101243.jpg', 'fgvshjvbcsjkncj', '20221217101243.jpg', 'gvsjhdgvsjvjshgbfkdwse', '2022-12-17 16:12:43', '2022-12-17 16:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `aniverserys`
--

CREATE TABLE `aniverserys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aniverserys`
--

INSERT INTO `aniverserys` (`id`, `name`, `image`, `audio`, `detail`, `created_at`, `updated_at`) VALUES
(2, 'Ashvin Ghugare', '/tmp/phph9ngpH', '/tmp/php5QgNCG', 'gfgf', '2022-12-02 21:01:29', '2022-12-02 21:01:29'),
(3, 'rthgrutghir', '/tmp/phpldo6Sd', '/tmp/phpTztBRG', 'hvkjdvkdsn', '2022-12-17 16:16:08', '2022-12-17 16:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `birthdays`
--

CREATE TABLE `birthdays` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthdays`
--

INSERT INTO `birthdays` (`id`, `name`, `image`, `audio`, `detail`, `created_at`, `updated_at`) VALUES
(6, '05 - The Chromatics - Tick of the Clock', '20221204042458.jpg', '20221204042458.mp3', 'test', '2022-12-04 10:24:58', '2022-12-04 10:24:58'),
(7, 'Sandeep jadav', '20221217101318.jfif', '20221217101318.mp3', 'sandeep', '2022-12-17 16:13:18', '2022-12-17 16:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `currentsongs`
--

CREATE TABLE `currentsongs` (
  `id` int(11) NOT NULL,
  `moviename` varchar(255) DEFAULT NULL,
  `songname` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `birthdaywish` varchar(255) DEFAULT NULL,
  `aniverserywish` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `timeslot` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `audio` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentsongs`
--

INSERT INTO `currentsongs` (`id`, `moviename`, `songname`, `category`, `birthdaywish`, `aniverserywish`, `other`, `timeslot`, `image`, `audio`, `created_at`, `updated_at`) VALUES
(6, 'Godfather', 'Godfather Songs', 'currentsongs', '', '', '', '', '20221217074447.jpeg', '20221217074447.mp3', '2022-12-17 13:44:47', '2022-12-31 13:42:09'),
(5, 'test', 'maa oo maa', 'currentsongs', '', '', '', '', '20221215053059.jpg', '20221215053059.mp3', '2022-12-15 11:30:59', '2022-12-31 13:42:42'),
(7, 'Bimbisara', 'Bimbisara  songs', 'currentsongs', '', '', '', '', '20221217075105.jpg', '20221217075105.mp3', '2022-12-17 13:51:05', '2022-12-31 05:50:10'),
(8, 'Bheemla Nayak', 'bheemla Nayak songs', 'currentsongs', '', '', '', '', '20221217075637.jpg', '20221217075637.mp3', '2022-12-17 13:56:37', '2022-12-31 05:50:10'),
(9, 'RRR', 'RRR songs', 'currentsongs', '', '', '', '', '20221217075838.jpg', '20221217075838.mp3', '2022-12-17 13:58:38', '2022-12-31 05:50:10'),
(11, 'Demo Song', 'mmnmmmn', NULL, NULL, NULL, NULL, NULL, '20230103184119.jpg', '20230103184119.mp3', '2023-01-03 13:11:19', '2023-01-03 13:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` int(11) NOT NULL,
  `branch_id` int(50) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `request` varchar(1000) NOT NULL,
  `user` varchar(1000) NOT NULL,
  `song` varchar(1000) NOT NULL,
  `video` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dedicatesong`
--

CREATE TABLE `dedicatesong` (
  `id` int(11) NOT NULL,
  `userId` varchar(255) DEFAULT NULL,
  `msg_sender` text DEFAULT NULL,
  `songId` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `birthday_name` text DEFAULT NULL,
  `anniversary_name` text DEFAULT NULL,
  `Time_Slot` text DEFAULT NULL,
  `Time` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dedicatesong`
--

INSERT INTO `dedicatesong` (`id`, `userId`, `msg_sender`, `songId`, `category`, `birthday_name`, `anniversary_name`, `Time_Slot`, `Time`, `created_at`, `updated_at`) VALUES
(1, 'STB281112', 'Manish', 2, 'oldsongs', 'Hellooooo', NULL, 'Morning', '12.00-12.30', '2022-12-31 09:24:15', '2022-12-31 09:24:15'),
(2, 'STB281112', 'Manish', 2, 'oldsongs', NULL, 'Helllooooo', 'Morning', '12.00-12.30', '2022-12-31 09:24:49', '2022-12-31 09:24:49'),
(3, NULL, 'sandeepjadav', 2, 'oldsongs', 'Tushar', NULL, 'Morning', '12:00-12:30', '2023-01-03 07:26:07', '2023-01-03 07:26:07'),
(4, NULL, 'sandeepjadav', 2, 'oldsongs', 'Tushar', NULL, 'Morning', '12:00-12:30', '2023-01-03 07:43:14', '2023-01-03 07:43:14'),
(5, NULL, 'Hii Sandeep Kumar', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', '06:00-06:30', '2023-01-03 07:47:12', '2023-01-03 07:47:12'),
(6, NULL, 'Hii Sandeep Kumar', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', '06:00-06:30', '2023-01-03 07:49:32', '2023-01-03 07:49:32'),
(7, NULL, 'Hii Sandeep Kumar', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', '06:00-06:30', '2023-01-03 07:50:05', '2023-01-03 07:50:05'),
(8, NULL, 'Gii', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', '06:00-06:30', '2023-01-03 07:51:42', '2023-01-03 07:51:42'),
(9, NULL, 'Gii', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', '06:00-06:30', '2023-01-03 07:52:02', '2023-01-03 07:52:02'),
(10, NULL, 'Gii', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', '06:00-06:30', '2023-01-03 07:52:24', '2023-01-03 07:52:24'),
(11, NULL, 'Gii', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', '06:00-06:30', '2023-01-03 07:53:58', '2023-01-03 07:53:58'),
(12, NULL, 'sandeepjadav', 9, 'oldsongs', 'Tushar', NULL, 'Morning', '12:00-12:30', '2023-01-03 09:16:53', '2023-01-03 09:16:53'),
(13, NULL, 'sandeepjadav', 19, 'oldsongs', 'Tushar', NULL, 'Morning', '12:00-12:30', '2023-01-03 09:17:02', '2023-01-03 09:17:02'),
(14, NULL, 'Drr', 2, 'recentsongs', 'Sandeep Jadav', NULL, 'Morning', 'undefined', '2023-01-03 09:34:09', '2023-01-03 09:34:09'),
(15, NULL, 'Drr', 2, 'recentsongs', 'Sandeep Jadav', NULL, 'Morning', '06:00-06:30', '2023-01-03 09:36:00', '2023-01-03 09:36:00'),
(16, NULL, 'Hii', 4, 'recentsongs', 'Sandeep', NULL, 'Morning', '06:00-06:30', '2023-01-03 09:48:17', '2023-01-03 09:48:17'),
(17, NULL, 'Gh', 4, 'recentsongs', 'Aaj', NULL, 'Morning', '06:00-06:30', '2023-01-03 09:49:53', '2023-01-03 09:49:53'),
(18, NULL, 'Hii', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', 'undefined', '2023-01-03 09:52:10', '2023-01-03 09:52:10'),
(19, NULL, 'Hii', 5, 'currentsongs', 'Sandeep', NULL, 'Morning', '10:30:11:00', '2023-01-03 09:57:50', '2023-01-03 09:57:50'),
(20, NULL, 'Hii', 2, 'recentsongs', 'Sandeep', NULL, 'Morning', '06:00-06:30', '2023-01-03 09:58:20', '2023-01-03 09:58:20'),
(21, NULL, 'Hii', 6, 'currentsongs', 'Sandeep', NULL, 'Morning', '06:00-06:30', '2023-01-03 09:58:41', '2023-01-03 09:58:41'),
(22, NULL, 'Hui', 6, 'oldsongs', 'Sandeep', NULL, 'Morning', '02:00-02:30', '2023-01-03 10:43:14', '2023-01-03 10:43:14'),
(23, NULL, 'Hii', 3, 'oldsongs', 'Sahvv', NULL, 'Evening & night', 'undefined', '2023-01-03 11:01:27', '2023-01-03 11:01:27'),
(24, NULL, 'Hii', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', 'undefined', '2023-01-03 11:11:17', '2023-01-03 11:11:17'),
(25, NULL, 'Hii', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', 'undefined', '2023-01-03 11:23:51', '2023-01-03 11:23:51'),
(26, NULL, 'sandeepjadav', 19, 'oldsongs', 'Tushar', NULL, 'Morning', '12:00-12:30', '2023-01-03 11:25:15', '2023-01-03 11:25:15'),
(27, NULL, 'Hii', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', '08:00-08:30', '2023-01-03 11:35:07', '2023-01-03 11:35:07'),
(28, NULL, 'Hii', 3, 'recentsongs', 'Sandeep', NULL, 'Morning', '11:30-12:00', '2023-01-03 11:39:31', '2023-01-03 11:39:31'),
(29, NULL, 'Hii', 9, 'currentsongs', 'Dgg', NULL, 'Evening & night', '08:00-08:30', '2023-01-03 11:40:02', '2023-01-03 11:40:02'),
(30, NULL, 'Hii', 5, 'oldsongs', 'Sandeep', NULL, 'Afternoon', '02:00-02:30', '2023-01-03 11:41:44', '2023-01-03 11:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `demotionsongs`
--

CREATE TABLE `demotionsongs` (
  `id` int(11) NOT NULL,
  `songname` varchar(255) NOT NULL,
  `moviename` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `birthdaywish` varchar(255) DEFAULT NULL,
  `aniverserywish` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `timeslot` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demotionsongs`
--

INSERT INTO `demotionsongs` (`id`, `songname`, `moviename`, `category`, `birthdaywish`, `aniverserywish`, `other`, `timeslot`, `image`, `audio`, `created_at`, `updated_at`) VALUES
(1, 'Vakratunda Mahakaya', 'Vakratunda movie', 'demotionsongs', '', '', '', '', '20221217075933.jpg', '20221217025429.mp3', '2022-12-17 08:54:29', '2022-12-31 05:47:34'),
(2, 'Ganesha Stotram', 'Ganesha movie', 'demotionsongs', '', '', '', '', '20221217080842.jpg', '20221217080842.mp3', '2022-12-17 14:08:42', '2022-12-31 05:47:34'),
(3, 'Sri rama songs', 'Sri Rama', 'demotionsongs', '', '', '', '', '20221217081009.jpg', '20221217081009.mp3', '2022-12-17 14:10:09', '2022-12-31 13:14:04');

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
-- Table structure for table `greetings`
--

CREATE TABLE `greetings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `greetings`
--

INSERT INTO `greetings` (`id`, `name`, `image`, `audio`, `detail`, `created_at`, `updated_at`) VALUES
(3, 'advertisement_logo', '/tmp/phpkZwIHZ', '/tmp/phptfeJ4O', 'happy birthday', '2022-12-03 17:46:46', '2022-12-03 17:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `like_songs`
--

CREATE TABLE `like_songs` (
  `id` int(11) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `songId` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `like` enum('false','true') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_songs`
--

INSERT INTO `like_songs` (`id`, `userId`, `songId`, `category`, `like`, `created_at`, `updated_at`) VALUES
(1, 'STB281112', 4, 'oldsongs', 'false', '2022-12-31 10:15:05', '2022-12-31 16:15:05'),
(3, 'STB281112', 5, 'oldsongs', 'false', '2023-01-03 16:08:27', '2023-01-03 22:08:27'),
(4, 'STB281112', 7, 'oldsongs', 'true', '2023-01-03 16:09:12', '2023-01-03 16:09:12'),
(5, 'STB281112', 6, 'oldsongs', 'true', '2023-01-03 16:09:42', '2023-01-03 16:09:42');

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
(5, '2022_11_23_113818_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `musiccategories`
--

CREATE TABLE `musiccategories` (
  `id` int(11) NOT NULL,
  `musicname` varchar(252) DEFAULT NULL,
  `songname` varchar(255) DEFAULT NULL,
  `musiccategories` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `audio` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musiccategories`
--

INSERT INTO `musiccategories` (`id`, `musicname`, `songname`, `musiccategories`, `image`, `audio`, `created_at`, `updated_at`) VALUES
(4, NULL, 'test', 'test', '20221215052938.jpg', '20221215052938.mp3', '2022-12-15 11:29:38', '2022-12-15 11:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `music_directors`
--

CREATE TABLE `music_directors` (
  `id` int(11) NOT NULL,
  `moviename` varchar(255) DEFAULT NULL,
  `songname` varchar(255) DEFAULT NULL,
  `musicdirectorname` varchar(255) DEFAULT NULL,
  `birthdaywish` varchar(255) NOT NULL,
  `aniverserywish` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `audio` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_directors`
--

INSERT INTO `music_directors` (`id`, `moviename`, `songname`, `musicdirectorname`, `birthdaywish`, `aniverserywish`, `other`, `timeslot`, `image`, `audio`, `created_at`, `updated_at`) VALUES
(2, 'test123', 'test4', 'test', '', '', '', '', '20221217053725.jpg', '20221214044611.mp3', '2022-12-14 10:39:37', '2022-12-17 11:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `old_songs`
--

CREATE TABLE `old_songs` (
  `id` int(11) NOT NULL,
  `moviename` varchar(255) DEFAULT NULL,
  `songname` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `birthdaywish` varchar(255) NOT NULL,
  `aniverserywish` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `audio` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `old_songs`
--

INSERT INTO `old_songs` (`id`, `moviename`, `songname`, `category`, `birthdaywish`, `aniverserywish`, `other`, `timeslot`, `image`, `audio`, `created_at`, `updated_at`) VALUES
(2, NULL, 'maa oo maa', 'oldsongs', '', '', '', '', '20221217054053.jpg', '20221215053018.mp3', '2022-12-15 11:30:18', '2022-12-31 05:48:15'),
(3, NULL, 'Pariyerum songs', 'oldsongs', '', '', '', '', '20221217094600.jpg', '20221217094600.mp3', '2022-12-17 15:46:01', '2022-12-31 13:01:46'),
(4, NULL, 'Eega songs', 'oldsongs', '', '', '', '', '20221217094650.jpg', '20221217094650.mp3', '2022-12-17 15:46:50', '2022-12-31 05:48:15'),
(5, NULL, 'Manam songs', 'oldsongs', '', '', '', '', '20221217094801.jpg', NULL, '2022-12-17 15:48:01', '2022-12-31 05:48:15'),
(6, NULL, 'jio re Bahubali', 'oldsongs', '', '', '', '', '20221217095018.jpg', '20221217095018.mp3', '2022-12-17 15:50:18', '2022-12-31 05:48:15'),
(7, NULL, 'Eega2songs', 'oldsongs', '', '', '', '', '20221217095145.webp', '20221217095145.mp3', '2022-12-17 15:51:45', '2022-12-31 05:48:15');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `image`, `audio`, `created_at`, `updated_at`) VALUES
(35, '01 - Kavinsky & Lovefoxxx - Nightcall', 'popsong', '20221215031908.jpg', '20221215031908.mp3', '2022-12-15 09:19:08', '2022-12-15 09:19:08'),
(36, 'Geetha Govindam', 'Yenki yenki', '20230103104040.jpg', '20230103104040.mp3', '2023-01-03 16:40:40', '2023-01-03 16:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `recent_songs`
--

CREATE TABLE `recent_songs` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `songname` varchar(255) NOT NULL,
  `moviename` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `birthdaywish` varchar(255) NOT NULL,
  `aniverserywish` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent_songs`
--

INSERT INTO `recent_songs` (`id`, `image`, `audio`, `songname`, `moviename`, `category`, `birthdaywish`, `aniverserywish`, `other`, `timeslot`, `created_at`, `updated_at`) VALUES
(2, '20221217073051.webp', '20221214180609.mp3', 'maa oo maa', 'K.G.F', 'recentsongs', '', '', '', '', '2022-12-15 00:06:09', '2022-12-31 05:38:18'),
(3, '20221217071714.jpg', '20221214180748.mp3', 'aa jaa re', 'Vikram Vedha', 'recentsongs', '', '', '', '', '2022-12-15 00:07:48', '2022-12-31 13:13:25'),
(4, '20221217071329.webp', '20221214180824.mp3', 'Jio re bahubali', 'Bahubali', 'recentsongs', '', '', '', '', '2022-12-15 00:08:24', '2022-12-31 05:38:18'),
(5, '20221217075831.jpg', '20221217075831.mp3', 'Bangalore songs', 'Bangalore Days', 'recentsongs', '', '', '', '', '2022-12-17 13:58:31', '2022-12-31 05:38:18'),
(6, '20221217093651.jpg', '20221217093651.mp3', 'Aagadu songs', 'Aagadu', 'recentsongs', '', '', '', '', '2022-12-17 15:36:51', '2022-12-31 05:38:18'),
(7, '20221217095432.jpg', '20221217095432.mp3', 'mama manam', 'Manam', 'recentsongs', '', '', '', '', '2022-12-17 15:54:32', '2022-12-31 05:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `mobile`, `email`, `detail`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'krishna12', 2589631472, 'krishna12@gmail.com', 'test', '/tmp/phpiRxy2w', NULL, '$2y$10$ZTwsNYWU2SNd9rdc2jmFU.8ZWeuiySQV.qgM7N.WxjV7AlaT8HnKa', NULL, '2022-11-23 00:46:31', '2022-12-07 21:24:53'),
(6, '', 'Ashvin Ghugare', 7276619002, 'ashvinghugare1@gmail.com', 'test', '/tmp/php6N8LMz', NULL, NULL, NULL, '2022-12-07 21:09:41', '2022-12-08 04:48:06'),
(7, '', 'Asshvin Ghugafre', 4556678888, 'aghugare@gmail.com', NULL, NULL, NULL, 'Pass@123', NULL, '2022-12-08 16:10:08', '2022-12-08 16:10:08'),
(9, '', 'Ashvin Ghugare', 7276619002, 'ashvinghugare345431@gmail.com', 'test', '20221208162358.jpg', NULL, NULL, NULL, '2022-12-08 22:23:58', '2022-12-08 22:23:58'),
(11, '', 'Asshvin Ghugare', 4546678888, 'avghugare@gmail.com', NULL, NULL, NULL, '$2y$10$WA9qAzxhA8W6hLHpBFpuauVi1DWYG12HWXbgqrm9uihPZ40AwIsee', NULL, '2022-12-08 17:49:48', '2022-12-08 17:49:48'),
(12, '', 'Asshvin Ghugare', 4556778888, 'adghugare@gmail.com', NULL, NULL, NULL, '$2y$10$LWyVCQHBnNFAd/SadI.IReuPyRmChDVTXos2LFnDdM2uTNbwO242S', NULL, '2022-12-08 18:00:36', '2022-12-08 18:00:36'),
(13, '', 'Asshvin Ghugare', 4586778888, 'test@gmail.com', NULL, '20221217053458.jpg', NULL, '$2y$10$g1v1L4QZZIGoFXxaL9otjOqUtEIeslmzC1P4MfbBTGBdo3.IBPT52', NULL, '2022-12-08 18:35:30', '2022-12-17 11:34:58'),
(14, '#1669692568', 'akshay ghugare', 8787687684, 'akghiugare@gmail.com', 'erter', '20221217053303.jpg', NULL, NULL, NULL, '2022-12-10 23:16:07', '2022-12-17 11:33:03'),
(16, '#823390', 'Ashvin Ghugare', 7276689002, 'ashvinghugare1yghyi@gmail.com', 'k,;', '20221217073352.jpg', NULL, '123456', NULL, '2022-12-10 23:25:02', '2022-12-17 13:33:52'),
(17, 'STB281112', 'manish', 9876543212, 'manish@gmail.com', 'test', '20221217073258.jpg', NULL, NULL, NULL, '2022-12-14 21:20:30', '2022-12-17 13:32:58'),
(18, 'STB156710', 'Ronit Nair', 5632107894, 'dfshdgg@gmail.com', 'yurjndscbnuhsbcu', '20221217073140.jpg', NULL, NULL, NULL, '2022-12-17 13:31:40', '2022-12-17 13:31:40'),
(19, 'STB399015', 'hkjdhni', 123456789, 'dtfyx@gmail.com', 'dfyugd dyug', '20230103111307.jpg', NULL, NULL, NULL, '2023-01-03 17:13:07', '2023-01-03 17:13:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aniverserys`
--
ALTER TABLE `aniverserys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currentsongs`
--
ALTER TABLE `currentsongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dedicatesong`
--
ALTER TABLE `dedicatesong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demotionsongs`
--
ALTER TABLE `demotionsongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `greetings`
--
ALTER TABLE `greetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_songs`
--
ALTER TABLE `like_songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musiccategories`
--
ALTER TABLE `musiccategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_directors`
--
ALTER TABLE `music_directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old_songs`
--
ALTER TABLE `old_songs`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_songs`
--
ALTER TABLE `recent_songs`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aniverserys`
--
ALTER TABLE `aniverserys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `currentsongs`
--
ALTER TABLE `currentsongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dedicatesong`
--
ALTER TABLE `dedicatesong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `demotionsongs`
--
ALTER TABLE `demotionsongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `greetings`
--
ALTER TABLE `greetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `like_songs`
--
ALTER TABLE `like_songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `musiccategories`
--
ALTER TABLE `musiccategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `music_directors`
--
ALTER TABLE `music_directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `old_songs`
--
ALTER TABLE `old_songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `recent_songs`
--
ALTER TABLE `recent_songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
