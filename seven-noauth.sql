-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 04:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seven-noauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Tarek Ashry', 'admin@admin.com', '$2y$10$KX2yw04SFsXMWiKO52Ff5uazDPmJaaraTl6J36SObWACON.9IBVdW', '2021-04-17 18:51:03', '2021-04-17 18:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `created_at`, `updated_at`) VALUES
(1, '2021-05-04 18:02:28', '2021-05-04 18:02:28'),
(2, '2021-09-17 09:51:13', '2021-09-17 09:51:13'),
(3, '2021-09-17 12:24:10', '2021-09-17 12:24:10'),
(4, '2021-09-17 12:24:44', '2021-09-17 12:24:44'),
(5, '2021-09-17 15:01:12', '2021-09-17 15:01:12'),
(6, '2021-10-24 17:51:27', '2021-10-24 17:51:27'),
(7, '2021-10-24 17:51:38', '2021-10-24 17:51:38'),
(8, '2021-10-24 17:51:51', '2021-10-24 17:51:51'),
(9, '2021-10-24 17:52:06', '2021-10-24 17:52:06'),
(10, '2021-10-24 17:52:18', '2021-10-24 17:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_translations`
--

CREATE TABLE `attribute_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_translations`
--

INSERT INTO `attribute_translations` (`id`, `attribute_id`, `locale`, `name`) VALUES
(1, 1, 'en', 'Green'),
(2, 2, 'en', 'White'),
(3, 3, 'en', 'yellow'),
(4, 4, 'en', 'Red'),
(5, 5, 'en', 'Blue'),
(6, 6, 'en', 'Brown'),
(7, 7, 'en', 'Black'),
(8, 8, 'en', 'gray'),
(9, 9, 'en', 'luminous'),
(10, 10, 'en', 'Purple'),
(11, 1, 'ar', 'أخضر'),
(12, 2, 'ar', 'أبيض'),
(13, 3, 'ar', 'أصفر'),
(14, 4, 'ar', 'أحمر'),
(15, 5, 'ar', 'أزرق'),
(16, 6, 'ar', 'بنى'),
(17, 7, 'ar', 'أسود'),
(18, 8, 'ar', 'رمادى'),
(19, 9, 'ar', 'مشع'),
(20, 10, 'ar', 'بنفسجي');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `is_active`, `photo`, `created_at`, `updated_at`) VALUES
(12, 1, '8AqCs6b1wlV31ijaAMAnCf71jtlJKYaRSbsXyUX2.jpg', '2021-10-24 18:04:26', '2021-10-24 18:04:26'),
(13, 1, 'OGxOIZfWjjvARUvpH2wkcDTX9peXm1OvQU48x3U1.jpg', '2021-10-24 18:33:19', '2021-10-24 18:33:19'),
(14, 1, '9kNLifZQPTLkxu75rnoG4qPvl6gYkyusW3XcVgSR.jpg', '2021-10-24 18:34:14', '2021-10-24 18:34:14'),
(15, 1, '1JgU23yewTOqzq9Ow9AKuqQtLgD57gPoinhd9Gsq.jpg', '2021-10-24 18:35:48', '2021-10-24 18:35:48'),
(16, 1, 'ybZGonbZdO7AfdDN7x1kGOMUYSRId70scVRUTsI9.jpg', '2021-10-24 18:36:08', '2021-10-24 18:36:08'),
(17, 1, 'wT9vgw9pwy02DIhh2JkWInZpxi3Wrn7cf4ZufLeq.jpg', '2021-10-24 18:36:25', '2021-10-24 18:36:25'),
(18, 1, 'lMuBnneGv0weWTT1JJFAyAnpzwsZPnbW0oVsQ5aC.jpg', '2021-10-24 18:37:02', '2021-10-24 18:37:02'),
(19, 1, 'ma95E6QonBKDhQq8MFfFAapL6GBK3nfuijU1VeJJ.jpg', '2021-10-26 07:06:12', '2021-10-26 07:06:12'),
(20, 1, 'sZ0cL5stP5MuPs6bLMs5lFj0bPpkToShlrHqZlcd.jpg', '2021-10-26 07:09:14', '2021-10-26 07:09:14'),
(21, 1, 'Sxte6oCzu9wr7ByvSICKkHxx5S2Tlqc7EgI4SCtq.jpg', '2021-10-26 07:10:51', '2021-10-26 07:10:51'),
(22, 1, 'CHhXYkrRjRVEr88xprh02t5PHP9DN6PcsMSe4iVo.jpg', '2021-10-26 07:15:08', '2021-10-26 07:15:08'),
(23, 1, 'oRnZTfDf9zmz2by2j06M8wlOoefGbjZGOyQn2kQW.jpg', '2021-10-26 07:22:13', '2021-10-26 07:22:13'),
(24, 1, 'mnIcQNBL0KkKdmzOL0ZJKO4ayzcIlboFVtQw8KYn.jpg', '2021-10-26 07:23:55', '2021-10-26 07:23:55'),
(25, 1, '0FazNc2yRzOl8d8WR5gTsOFQ2i3MI4Ng7YAgZ5U6.png', '2021-10-26 07:24:46', '2021-10-26 07:24:46'),
(26, 1, 'DrofZm04PoHRvgGgha8sPHJ2svl5Wsq0LYe5eE73.jpg', '2021-10-26 07:25:15', '2021-10-26 07:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `brand_translations`
--

CREATE TABLE `brand_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_translations`
--

INSERT INTO `brand_translations` (`id`, `brand_id`, `locale`, `name`) VALUES
(1, 1, 'en', 'Electronics'),
(2, 2, 'en', 'Electronics'),
(3, 3, 'en', 'Clothes'),
(4, 4, 'en', 'Your Majesty, Gentlemen, Karimi'),
(5, 5, 'en', 'Sunny Minya'),
(6, 6, 'en', 'Sunny Sheikh Fadl'),
(7, 7, 'en', 'Buird'),
(8, 8, 'en', 'Tarseta Beige'),
(9, 9, 'en', 'Tarseta Ashen'),
(10, 10, 'en', 'Tarseta Bronze'),
(11, 11, 'en', 'Tarseta luminous'),
(12, 12, 'en', 'Galala'),
(13, 13, 'en', 'Suny'),
(14, 14, 'en', 'Italian'),
(15, 15, 'en', 'Turkish'),
(16, 16, 'en', 'Indian'),
(17, 17, 'en', 'Egyptian'),
(18, 18, 'en', 'Imported'),
(19, 12, 'ar', 'جلالة'),
(20, 13, 'ar', 'صنى'),
(21, 14, 'ar', 'ايطالى'),
(22, 15, 'ar', 'تركى'),
(23, 16, 'ar', 'هندى'),
(24, 17, 'ar', 'مصرى'),
(25, 18, 'ar', 'غير مصرى'),
(26, 19, 'en', 'Silvia'),
(27, 20, 'en', 'Felto'),
(28, 21, 'en', 'Tarseta'),
(29, 22, 'en', 'Elster'),
(30, 23, 'en', 'Spanish'),
(31, 24, 'en', 'Brescia'),
(32, 25, 'en', 'Cream'),
(33, 26, 'en', 'Karara');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `slug`, `is_active`, `photo`, `created_at`, `updated_at`) VALUES
(71, NULL, 'Marble-marble', 1, 'zdOUqBuhOygirh54Z6ivjNPhiPpUyIiGgz5vv7ak.jpg', '2021-10-23 20:39:42', '2021-10-23 20:39:42'),
(74, NULL, 'Geranyt-geranyt', 1, '26fyw4mwoTc0wd4KjkEU7VU4ZZMr8mRxX4LNzHZ6.jpg', '2021-10-24 13:59:58', '2021-10-24 13:59:58'),
(75, NULL, 'Sculpture-sculpture', 1, '1xM76WLKSxbvLPSrB8O7l8ohd9L0vXLpfCqS3tcR.jpg', '2021-10-24 14:02:10', '2021-10-24 14:02:10'),
(76, 71, 'Marble-marble-egyptian', 1, '11ESWwBMP4mmHwoG3KrkiqmviMotorhDToTdnsc2.jpg', '2021-10-24 14:08:30', '2021-10-24 14:08:30'),
(77, 71, 'Marble-marble-imported', 1, 'ODVFd3nHrJFUshVmzVnX0E3P6EqlnClNu9FJR2tx.jpg', '2021-10-24 14:16:33', '2021-10-24 14:16:33'),
(78, 74, 'Granite-granite-egyptian', 1, 'ykpKlrsJje16d8Il2uJGEyxPMQB1byXoljkwN91U.jpg', '2021-10-24 14:19:22', '2021-10-24 14:19:22'),
(79, 74, 'Granite-granite-imported', 1, 'M4UtEFimA20XIQ4TobkHyJS0isLB47AxBtx4FoDa.jpg', '2021-10-24 14:21:04', '2021-10-24 14:21:04'),
(80, 75, 'Sculpture-sculpture-marble-egyptian', 1, 'jNxtEbbKnUDRekuvGWFT9l0BlbpYmMPKd7SayXdU.jpg', '2021-10-24 14:34:28', '2021-10-24 14:43:51'),
(81, 75, 'Sculpture-sculpture-marble-imported', 1, 'BTFW8ZQNgtwLy0P3SHKqqjdQtJIAYRaIVd0bFW3X.jpg', '2021-10-24 14:35:53', '2021-10-24 14:45:30'),
(82, 75, 'Sculpture-sculpture-granite-egyptian', 1, 'wXFvtibPWEUvMJP5fpXH0R1J7C48w6XydUXbNXId.jpg', '2021-10-24 14:47:37', '2021-10-24 14:47:37'),
(83, 75, 'Sculpture-sculpture-granite-imported', 1, 'tEHDxoDoJKW1n3X3hGJb3pmzLyaqYnEP9RhHXXPN.jpg', '2021-10-24 14:52:44', '2021-10-24 14:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `name`) VALUES
(70, 71, 'ar', 'الرخام'),
(71, 71, 'en', 'Marble'),
(75, 74, 'en', 'Geranyt'),
(76, 74, 'ar', 'الجرانيت'),
(77, 75, 'en', 'Sculpture'),
(78, 75, 'ar', 'النحت'),
(79, 76, 'en', 'Marble Egyptian'),
(80, 76, 'ar', 'الرخام المصرى'),
(81, 77, 'en', 'Marble Imported'),
(82, 77, 'ar', 'الرخام المستورد'),
(83, 78, 'en', 'Granite Egyptian'),
(84, 78, 'ar', 'الجرانيت المصرى'),
(85, 79, 'en', 'Granite Imported'),
(86, 79, 'ar', 'الجرانيت المستورد'),
(87, 80, 'en', 'Sculpture Marble Egyptian'),
(88, 80, 'ar', 'نحت الرخام المصرى'),
(89, 81, 'en', 'Sculpture Marble Imported'),
(90, 81, 'ar', 'نحت الرخام المستورد'),
(91, 82, 'en', 'Sculpture Granite Egyptian'),
(92, 82, 'ar', 'نحت الجرانيت المصرى'),
(93, 83, 'en', 'Sculpture Granite Imported'),
(94, 83, 'ar', 'نحت الجرانيت المستورد');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `photo`, `created_at`, `updated_at`) VALUES
(26, 34, 'nsM8x4nP99qG4rZUudKVzliJWl19Vu6owySBN1m1.jpg', '2021-10-25 08:53:25', '2021-10-25 08:53:25'),
(27, 34, 'xvCTKH82PMMGEq136zJOA11MU9MWVdVHP93ZRxbf.jpg', '2021-10-25 08:53:25', '2021-10-25 08:53:25'),
(28, 34, 'dfBGevoYZ17hMjUVjzvTlclxjx43bdigjhyEwfbP.jpg', '2021-10-25 08:53:25', '2021-10-25 08:53:25'),
(29, 35, 'yYjutjxkr3swF08CjccQj6Lyfi57dTbvPfJ2sU7G.jpg', '2021-10-25 08:53:40', '2021-10-25 08:53:40'),
(30, 35, 'w7QusMtiaUgPF1CWtwyhohDZAR327YeLTgLZaMuk.jpg', '2021-10-25 08:53:40', '2021-10-25 08:53:40'),
(31, 35, 'arUTBXoAYYvDVPbtoxLpEDHOoBuR8puYvOk9YHpJ.jpg', '2021-10-25 08:53:40', '2021-10-25 08:53:40'),
(32, 36, 'vpJko6ZR7LSYm3wYUBtti1ou1KKaKy1yFOT5Pont.jpg', '2021-10-25 08:53:56', '2021-10-25 08:53:56'),
(33, 36, 'N6KlJsx9QnDAJMLLGIIG1KMAU2xPuoTvJHSZ7JWs.jpg', '2021-10-25 08:53:56', '2021-10-25 08:53:56'),
(34, 36, 'VfhkVgGQ0goITS9YoiaMLadPBDQRvBcKukpqGECB.jpg', '2021-10-25 08:53:56', '2021-10-25 08:53:56'),
(35, 37, 'dhAZ7TAp1rWWKUdzWMQ7gcZ4xQR95WIzWmEuxgtB.jpg', '2021-10-25 08:54:37', '2021-10-25 08:54:37'),
(36, 37, 'NwB2m90gF2lF9ZPcfIu7DfzjqQYXK4M0NSOkNi9j.jpg', '2021-10-25 08:54:37', '2021-10-25 08:54:37'),
(37, 37, 'aFqDe1qg0kRZNT5STFeCzW6uGlAdZ1O26TArXo4T.jpg', '2021-10-25 08:54:37', '2021-10-25 08:54:37'),
(38, 38, '56Hdn6HUl4GPZA3FhiOX7JBYQpVJocPkN2sldrIe.jpg', '2021-10-25 15:02:24', '2021-10-25 15:02:24'),
(39, 38, 'DzGZTr76U2prPgYBsetYe1JzKQ0l06YStxSY0KYJ.jpg', '2021-10-25 15:02:24', '2021-10-25 15:02:24'),
(40, 38, 'LB7ayqYmPSTea60jKHJHRvDAcAg3B52ZbdInqTZZ.jpg', '2021-10-25 15:02:24', '2021-10-25 15:02:24'),
(41, 80, 'XtLPdGdJgH60aHvfFogONCqV7ZuYftxeEKzRcM1K.jpg', '2021-11-02 16:08:52', '2021-11-02 16:08:52'),
(42, 75, 'qpcmzvYN4ay8uqUvVUazpghPVeAuiTExAD7Cqhxk.jpg', '2021-11-02 16:09:05', '2021-11-02 16:09:05'),
(43, 74, 'v6Xb6SknJhHDCES10KyAKilRJHmI9atGTKDW8xNb.jpg', '2021-11-02 16:09:17', '2021-11-02 16:09:17'),
(44, 73, 'DNFuUZbVphk9NQxj4Ftip4z7jkmYo9SUT5WqbSMe.jpg', '2021-11-02 16:09:35', '2021-11-02 16:09:35'),
(45, 71, 'IP3KUe9FVmb3eqyWRpGGEJSaOZueQDluvXigPXNU.jpg', '2021-11-02 16:09:57', '2021-11-02 16:09:57'),
(46, 70, 'Y6kj0uGDpVhgVqNNgLQ0k5fjMWscolH3pbhI5RwQ.jpg', '2021-11-02 16:10:20', '2021-11-02 16:10:20'),
(47, 69, 'yPEJtJjxGwvK3n5cxj76A5T53xOuMY0BLYQMUmva.jpg', '2021-11-02 16:10:37', '2021-11-02 16:10:37'),
(48, 68, 'JD8fcCSoB27H996T1DIbSzOCuEGPODYBHEL77Tgs.jpg', '2021-11-02 16:10:55', '2021-11-02 16:10:55'),
(49, 66, 'FkEDvZhhTRAnpfuZAicl1QzxxM8xWuhJwbKuHQQa.jpg', '2021-11-02 16:11:17', '2021-11-02 16:11:17'),
(50, 65, 'AzVXarliFZd24vSn6vRzvLimLZZsZF65z52adzGg.jpg', '2021-11-02 16:11:37', '2021-11-02 16:11:37'),
(51, 64, 'fsKW2idlqteYEo2ZfXeuHLSvaduV2tR3SkmFRHiL.jpg', '2021-11-02 16:11:56', '2021-11-02 16:11:56'),
(52, 63, 'pn9WkFyTk3UvQBjop3qa6Fl2wHBlYK9LYdguJ7WG.jpg', '2021-11-02 16:12:16', '2021-11-02 16:12:16'),
(53, 62, 'BBN5WBpvVZyj4KcsWROEuzU3OXhj2VGOiYcSnFIy.jpg', '2021-11-02 16:12:45', '2021-11-02 16:12:45'),
(54, 61, 'sJILbxDvDi6rz48vFbuMgTe2Tcgslcm8W57hHpC0.jpg', '2021-11-02 16:13:07', '2021-11-02 16:13:07'),
(55, 60, 'ZDoBRXduC0x3AEj3ARzZZhc6YTe5CFiTtKpTXKNE.jpg', '2021-11-02 16:13:31', '2021-11-02 16:13:31'),
(56, 59, 'cbZhfVwmma1Im10nigcRrIO9r9FMWO1D1WpOCTIj.jpg', '2021-11-02 16:13:51', '2021-11-02 16:13:51'),
(57, 58, 'sxvVi2iPCm9S1Pzrpsn79faJHObHMz5KlTBSgnDl.jpg', '2021-11-02 16:14:15', '2021-11-02 16:14:15'),
(58, 57, 'Z8vp9Gax2fg0zuAjAeYb4qJD91UiAAWzZvtqOKzF.jpg', '2021-11-02 16:14:37', '2021-11-02 16:14:37'),
(59, 56, 'SSPqKHkYuxtTKTFq7AS3HCBkbM59MJsfo1MaU53f.jpg', '2021-11-02 16:14:57', '2021-11-02 16:14:57'),
(60, 55, 'IK6Q8Dvi7pH9mHEw0CiZsKkWpNTdk6yy9jb40dOR.jpg', '2021-11-02 16:15:18', '2021-11-02 16:15:18'),
(61, 54, '5YaOz0pJh5Xp19p7rW3v9RpKPPgXvcsOkaEjrSul.jpg', '2021-11-02 16:15:44', '2021-11-02 16:15:44'),
(62, 52, 'SwjpFgYeC0qhH2VOtrIG4xQa8kyoSGMd1mXSYpka.jpg', '2021-11-02 16:16:07', '2021-11-02 16:16:07'),
(63, 51, 'B6h3yqD4z3506M36qIvFMAKZbhANhY7NxLOxoNj2.jpg', '2021-11-02 16:16:32', '2021-11-02 16:16:32'),
(64, 50, 'hgZ3AhvSX57NTgU4SxNoW2z5qI5BtWPxJ1u81Vb3.jpg', '2021-11-02 16:16:51', '2021-11-02 16:16:51'),
(65, 49, 'lZNrL13YERtaR5shRhqMme7jiv3v9lBa36YqymYr.jpg', '2021-11-02 16:17:25', '2021-11-02 16:17:25'),
(66, 48, '234jDIveU3JNk4DppP0GZv3jSAhLShdGNnASkQ1m.jpg', '2021-11-02 16:18:07', '2021-11-02 16:18:07'),
(67, 47, 'jWSSBL2ui0rwRBqotYkPVMOMbXF53cmROp4SYWTg.jpg', '2021-11-02 16:18:34', '2021-11-02 16:18:34'),
(68, 46, 'ZdfQy1qRSePERvIbEO985c1kEkMQsr1XqQWG5K8K.jpg', '2021-11-02 16:19:05', '2021-11-02 16:19:05'),
(69, 45, 'vjjzobOqRT4VLrOglMCyyytyKyhJnvvXZQamIAdp.jpg', '2021-11-02 16:19:27', '2021-11-02 16:19:27'),
(70, 44, 'XiTAluyoaSDBRKTzrCdsMyxcTgYzOucY43eXKPm5.jpg', '2021-11-02 16:19:53', '2021-11-02 16:19:53'),
(71, 43, 'jcavpTN5CN8Y7x04EgaZwvxiQnKX7jL0OmmxTeZE.jpg', '2021-11-02 16:20:18', '2021-11-02 16:20:18'),
(72, 42, 'GMQ103NWSmSabSpWYnhO9gtUi5IZ7ONimN5ODRxb.jpg', '2021-11-02 16:20:34', '2021-11-02 16:20:34'),
(73, 41, 'iXjBK4GRYzroxb3FTYS0LN92mVBaWbcwohBctzGG.jpg', '2021-11-02 16:21:02', '2021-11-02 16:21:02'),
(74, 40, '2arvMclBfRaLr7V0bPpRE0V1S7allmobOQ50hYnu.jpg', '2021-11-02 16:21:28', '2021-11-02 16:21:28'),
(75, 39, 'sGyfiSFVJeS5iVc15BJ1Ag43Mg4KA9biB1aJqHs4.jpg', '2021-11-02 16:21:52', '2021-11-02 16:21:52'),
(76, 38, 'kaYOf8AXuazM84YookSjwWb2EIYqeVWr1a3eH2Wy.jpg', '2021-11-02 16:22:26', '2021-11-02 16:22:26'),
(77, 35, 'qw7ErvM1BUT1VHfS6mtNIsVef0N8Qh3e4ZK1GBQW.jpg', '2021-11-02 16:22:59', '2021-11-02 16:22:59'),
(78, 34, 'QdxaBYI08PAojIDNMoTOoHeMKrpMsddNrct4ZRHs.jpg', '2021-11-02 16:23:14', '2021-11-02 16:23:14'),
(79, 53, 'YNKdbfVSkKsphu67jsK5BxkmUp0eJ1G29DhgVIS7.jpg', '2021-11-02 16:24:07', '2021-11-02 16:24:07'),
(80, 58, 'InIlx9zbJPGyEsN3r6p9yYZxntkwz2ISsh5EqESE.jpg', '2021-11-02 16:35:19', '2021-11-02 16:35:19'),
(81, 67, 'LyM1YBJeTuPXcj4OPXLG1yIxxEh2SqrTL51VGGQf.jpg', '2021-11-02 16:36:07', '2021-11-02 16:36:07'),
(82, 72, '9H48XCjXEmjBqZb2Zima5dMK7VPO14H6ui6cd9b2.jpg', '2021-11-16 12:59:38', '2021-11-16 12:59:38'),
(83, 72, 'guaIeXcyBAR5lYjhjGdfyZ71RxL7LpfIzlZsQFUU.jpg', '2021-11-16 12:59:38', '2021-11-16 12:59:38');

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
(4, '2021_04_17_204234_create_admins_table', 1),
(5, '2021_04_17_204835_create_admins_table', 2),
(6, '2021_04_24_220705_create_setting_table', 3),
(7, '2021_04_24_220732_create_setting_translations_table', 3),
(8, '2021_04_27_190118_create_categories_table', 4),
(9, '2021_04_27_190142_create_category_translations_table', 4),
(10, '2021_04_30_203502_create_brands_table', 5),
(11, '2021_04_30_203537_create_brand_translations_table', 5),
(12, '2021_04_30_205559_add_photo_column_to_brands_table', 6),
(13, '2021_05_02_214435_create_tags_table', 7),
(14, '2021_05_02_214549_create_tag_translations_table', 7),
(15, '2021_05_03_184806_create_products_table', 8),
(16, '2021_05_03_184822_create_product_translations_table', 8),
(17, '2021_05_03_184840_create_product_tags_table', 8),
(18, '2021_05_03_185905_create_product_categories_table', 8),
(19, '2020_09_27_191506_create_product_images_table', 9),
(20, '2020_10_15_205319_create_attributes_table', 9),
(21, '2020_10_15_205726_create_attribute_translations_table', 9),
(22, '2020_08_23_222542_create_trigger_setting_translations', 10),
(23, '2021_05_04_185809_create_attributes_table', 11),
(24, '2021_05_04_185837_create_attributes_translations_table', 11),
(25, '2021_05_04_190025_create_options_table', 12),
(26, '2021_05_04_190040_create_option_translations_table', 12),
(27, '2021_05_04_190524_add_price_column_to_options_table', 13),
(28, '2021_06_23_090832_add_mobile_column_to_user_table', 14),
(29, '2021_06_23_092752_drop_email_column_from_user_table', 15),
(30, '2021_06_23_190131_create_users_verfication_code_table', 15),
(31, '2021_06_24_085811_create_sliders_table', 16),
(32, '2021_09_15_113705_add_photo_column_to_categories_table', 17),
(33, '2021_09_24_092017_add_status_column_to_sliders_table', 18),
(34, '2021_09_24_140930_create_sliders_table', 19),
(35, '2021_09_24_141930_add_is_active_column_to_sliders_table', 20),
(36, '2021_10_23_184327_create_section_table', 21),
(37, '2021_10_23_184347_create_section_translations_table', 21),
(38, '2021_10_24_125555_create__user_verfication_table', 22),
(39, '2021_10_25_181747_create_section_table', 23),
(40, '2021_10_25_181758_create_section_translations_table', 23),
(41, '2021_10_25_195142_create_section_table', 24),
(42, '2021_10_25_195457_create_section_translations_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `attribute_id`, `product_id`, `price`, `created_at`, `updated_at`) VALUES
(17, 1, 34, '50', '2021-10-26 17:34:59', '2021-10-26 17:34:59'),
(18, 1, 35, '51', '2021-10-26 17:47:28', '2021-10-26 17:47:28'),
(19, 1, 38, '52', '2021-10-26 17:48:00', '2021-10-26 17:48:00'),
(20, 1, 39, '53', '2021-10-26 17:48:22', '2021-10-26 17:48:22'),
(21, 1, 40, '55', '2021-10-26 17:48:52', '2021-10-26 17:48:52'),
(22, 1, 41, '57', '2021-10-26 17:52:51', '2021-10-26 17:52:51'),
(23, 1, 42, '57', '2021-10-26 17:53:29', '2021-10-26 17:53:29'),
(24, 1, 43, '58', '2021-10-26 17:53:55', '2021-10-26 17:53:55'),
(25, 1, 44, '58', '2021-10-26 17:54:15', '2021-10-26 17:54:15'),
(26, 1, 44, '59', '2021-10-26 17:54:49', '2021-10-26 17:54:49'),
(27, 1, 45, '60', '2021-10-26 17:55:11', '2021-10-26 17:55:11'),
(28, 1, 46, '61', '2021-10-26 17:55:45', '2021-10-26 20:34:17'),
(29, 1, 47, '62', '2021-10-26 17:56:11', '2021-10-26 20:33:56'),
(30, 1, 48, '63', '2021-10-26 19:54:11', '2021-10-26 20:33:33'),
(31, 1, 49, '55', '2021-10-26 19:57:43', '2021-10-26 19:57:43'),
(32, 1, 50, '64', '2021-10-26 19:58:11', '2021-10-26 19:58:11'),
(33, 1, 51, '66', '2021-10-26 19:58:54', '2021-10-26 19:58:54'),
(34, 1, 52, '67', '2021-10-26 19:59:24', '2021-10-26 19:59:24'),
(35, 1, 53, '68', '2021-10-26 19:59:53', '2021-10-26 20:31:45'),
(36, 1, 54, '69', '2021-10-26 20:00:17', '2021-10-26 20:00:17'),
(37, 1, 55, '72', '2021-10-26 20:14:37', '2021-10-26 20:31:04'),
(38, 1, 56, '70', '2021-10-26 20:15:39', '2021-10-26 20:15:39'),
(39, 1, 57, '150', '2021-10-26 20:16:10', '2021-10-26 20:16:10'),
(40, 1, 58, '51', '2021-10-26 20:16:40', '2021-10-26 20:16:40'),
(41, 1, 59, '51', '2021-10-26 20:16:59', '2021-10-26 20:16:59'),
(42, 1, 60, '52', '2021-10-26 20:17:25', '2021-10-26 20:17:25'),
(43, 1, 61, '51', '2021-10-26 20:17:45', '2021-10-26 20:17:45'),
(44, 1, 62, '50', '2021-10-26 20:18:05', '2021-10-26 20:18:05'),
(45, 1, 63, '52', '2021-10-26 20:18:26', '2021-10-26 20:18:26'),
(46, 1, 64, '50', '2021-10-26 20:18:56', '2021-10-26 20:39:40'),
(47, 1, 65, '150', '2021-10-26 20:19:10', '2021-10-26 20:19:10'),
(48, 1, 66, '51', '2021-10-26 20:19:32', '2021-10-26 20:19:32'),
(49, 1, 67, '51', '2021-10-26 20:20:13', '2021-10-26 20:20:13'),
(50, 1, 68, '51', '2021-10-26 20:20:36', '2021-10-26 20:20:36'),
(51, 1, 69, '51', '2021-10-26 20:20:57', '2021-10-26 20:20:57'),
(52, 1, 70, '51', '2021-10-26 20:21:22', '2021-10-26 20:21:22'),
(53, 1, 71, '51', '2021-10-26 20:21:51', '2021-10-26 20:21:51'),
(54, 1, 72, '51', '2021-10-26 20:22:54', '2021-10-26 20:22:54'),
(55, 1, 34, '51', '2021-10-26 20:24:13', '2021-10-26 20:24:13'),
(56, 1, 74, '51', '2021-10-26 20:24:42', '2021-10-26 20:24:42'),
(57, 1, 75, '51', '2021-10-26 20:25:09', '2021-10-26 20:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `option_translations`
--

CREATE TABLE `option_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `option_translations`
--

INSERT INTO `option_translations` (`id`, `option_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(19, 17, 'en', 'Galala Extra Plain', '2021-10-26 17:34:59', '2021-10-26 17:34:59'),
(20, 18, 'en', 'Suny Menya', '2021-10-26 17:47:28', '2021-10-26 17:47:28'),
(21, 19, 'en', 'Suny Sheikh Fadl', '2021-10-26 17:48:00', '2021-10-26 17:48:00'),
(22, 20, 'en', 'Silvia Green', '2021-10-26 17:48:22', '2021-10-26 17:48:22'),
(23, 21, 'en', 'Silvia White', '2021-10-26 17:48:52', '2021-10-26 17:48:52'),
(24, 22, 'en', 'Smooth Felto', '2021-10-26 17:52:51', '2021-10-26 17:52:51'),
(25, 23, 'en', 'Tarseta Beige', '2021-10-26 17:53:29', '2021-10-26 17:53:29'),
(26, 24, 'en', 'Tarseta Gray', '2021-10-26 17:53:55', '2021-10-26 17:53:55'),
(27, 25, 'en', 'Tarseta Bronz', '2021-10-26 17:54:15', '2021-10-26 17:54:15'),
(28, 26, 'en', 'Tarseta Bronz', '2021-10-26 17:54:49', '2021-10-26 17:54:49'),
(29, 27, 'en', 'Elster Luminous', '2021-10-26 17:55:11', '2021-10-26 17:55:11'),
(30, 28, 'en', 'Italian Calcutta Extra', '2021-10-26 17:55:45', '2021-10-26 17:55:45'),
(31, 29, 'en', 'Italian Calcutta Super', '2021-10-26 17:56:11', '2021-10-26 17:56:11'),
(32, 30, 'en', 'Italian Brescia Dyno', '2021-10-26 19:54:11', '2021-10-26 19:54:11'),
(33, 31, 'en', 'Italian Carrara', '2021-10-26 19:57:43', '2021-10-26 19:57:43'),
(34, 32, 'en', 'Spanish loose', '2021-10-26 19:58:11', '2021-10-26 19:58:11'),
(35, 33, 'en', 'Brescia Arora', '2021-10-26 19:58:54', '2021-10-26 19:58:54'),
(36, 34, 'en', 'Brescia Unciata', '2021-10-26 19:59:24', '2021-10-26 19:59:24'),
(37, 35, 'en', 'Cream Marvel', '2021-10-26 19:59:53', '2021-10-26 19:59:53'),
(38, 36, 'en', 'Turkish Cream', '2021-10-26 20:00:17', '2021-10-26 20:00:17'),
(39, 37, 'en', 'Mastara Karara', '2021-10-26 20:14:37', '2021-10-26 20:14:37'),
(40, 38, 'en', 'Short Light Dark Brown', '2021-10-26 20:15:39', '2021-10-26 20:15:39'),
(41, 39, 'en', 'Singles Green And Yellow', '2021-10-26 20:16:10', '2021-10-26 20:16:10'),
(42, 40, 'en', 'Company Gray', '2021-10-26 20:16:40', '2021-10-26 20:16:40'),
(43, 41, 'en', 'Ramadi Suleiman', '2021-10-26 20:16:59', '2021-10-26 20:16:59'),
(44, 42, 'en', 'Red And Black Aswan', '2021-10-26 20:17:25', '2021-10-26 20:17:25'),
(45, 43, 'en', 'Rosa Nasr And Hody And Marwa', '2021-10-26 20:17:45', '2021-10-26 20:17:45'),
(46, 44, 'en', 'Gondola', '2021-10-26 20:18:05', '2021-10-26 20:18:05'),
(47, 45, 'en', 'Red Fersan And Azoka', '2021-10-26 20:18:26', '2021-10-26 20:18:26'),
(48, 46, 'en', 'Fantasy Red And White', '2021-10-26 20:18:56', '2021-10-26 20:18:56'),
(49, 47, 'en', 'Halayeb', '2021-10-26 20:19:10', '2021-10-26 20:19:10'),
(50, 48, 'en', 'New Halayeb', '2021-10-26 20:19:32', '2021-10-26 20:19:32'),
(51, 49, 'en', 'Indian Double Black', '2021-10-26 20:20:13', '2021-10-26 20:20:13'),
(52, 50, 'en', 'Indian Double Black Galaxy', '2021-10-26 20:20:36', '2021-10-26 20:20:36'),
(53, 51, 'en', 'Indian White Kashmir', '2021-10-26 20:20:57', '2021-10-26 20:20:57'),
(54, 52, 'en', 'Indian Gold Kashmir', '2021-10-26 20:21:23', '2021-10-26 20:21:23'),
(55, 53, 'en', 'Indian Red Cashmere', '2021-10-26 20:21:51', '2021-10-26 20:21:51'),
(56, 54, 'en', 'Sculpture Statues', '2021-10-26 20:22:54', '2021-10-26 20:22:54'),
(57, 55, 'en', 'Sculpture Statues Marble Imported', '2021-10-26 20:24:13', '2021-10-26 20:24:13'),
(58, 56, 'en', 'Column Carving Marble Imported', '2021-10-26 20:24:42', '2021-10-26 20:24:42'),
(59, 57, 'en', 'Sculpture Statues Granite Egyptian', '2021-10-26 20:25:09', '2021-10-26 20:25:09'),
(60, 17, 'ar', 'جلالة اكسترا بلان', '2021-10-26 20:26:41', '2021-10-26 20:26:41'),
(61, 57, 'ar', 'نحت الأعمدة - جرانيت المستورد', '2021-10-26 20:27:34', '2021-10-26 20:27:34'),
(62, 56, 'ar', 'نحت الأعمدة - جرانيت المصرى', '2021-10-26 20:27:53', '2021-10-26 20:27:53'),
(63, 55, 'ar', 'جلالة اكسترا بلان', '2021-10-26 20:28:19', '2021-10-26 20:28:19'),
(64, 54, 'ar', 'نحت التماثيل - الرخام المصرى', '2021-10-26 20:28:37', '2021-10-26 20:28:37'),
(65, 53, 'ar', 'كشمير أحمر هندى', '2021-10-26 20:35:14', '2021-10-26 20:35:14'),
(66, 52, 'ar', 'كشمير جولد هندى', '2021-10-26 20:35:23', '2021-10-26 20:35:23'),
(67, 51, 'ar', 'كشمير أبيض هندى', '2021-10-26 20:35:33', '2021-10-26 20:35:33'),
(68, 50, 'ar', 'دابل بلاك جالاكسى هندى', '2021-10-26 20:35:45', '2021-10-26 20:35:45'),
(69, 49, 'ar', 'دابل بلاك هندى', '2021-10-26 20:35:55', '2021-10-26 20:35:55'),
(70, 48, 'ar', 'حلايب الجديد', '2021-10-26 20:36:05', '2021-10-26 20:36:05'),
(71, 47, 'ar', 'حلايب', '2021-10-26 20:36:18', '2021-10-26 20:36:18'),
(72, 46, 'ar', 'فانتازيا أحمر و أبيض', '2021-10-26 20:40:31', '2021-10-26 20:40:31'),
(73, 45, 'ar', 'أحمر فرسان و احمر عزوقة', '2021-10-26 20:40:47', '2021-10-26 20:40:47'),
(74, 44, 'ar', 'جندولا', '2021-10-26 20:41:03', '2021-10-26 20:41:03'),
(75, 43, 'ar', 'روزا نصر و هودى و ومروة', '2021-10-26 20:41:20', '2021-10-26 20:41:20'),
(76, 42, 'ar', 'أحمر و أسود أسوان', '2021-10-26 20:45:19', '2021-10-26 20:45:19'),
(77, 41, 'ar', 'رمادى سليمان', '2021-10-26 20:45:31', '2021-10-26 20:45:31'),
(78, 40, 'ar', 'رمادى الشركة', '2021-10-26 21:03:50', '2021-10-26 21:03:50'),
(79, 39, 'ar', 'الفردى أخضر و أصفر', '2021-10-26 21:04:02', '2021-10-26 21:04:02'),
(80, 38, 'ar', 'بنى قصير فاتح غامق', '2021-10-26 21:04:17', '2021-10-26 21:04:17'),
(81, 37, 'ar', 'كرارة تركى', '2021-10-26 21:04:27', '2021-10-26 21:04:27'),
(82, 36, 'ar', 'كريمة تركى', '2021-10-26 21:04:44', '2021-10-26 21:04:44'),
(83, 35, 'ar', 'كريمة مارفيل', '2021-10-26 21:04:54', '2021-10-26 21:04:54'),
(84, 34, 'ar', 'برسشيا أونشياتا', '2021-10-26 21:05:05', '2021-10-26 21:05:05'),
(85, 33, 'ar', 'بريشيا أرورا', '2021-10-26 21:05:16', '2021-10-26 21:05:16'),
(86, 32, 'ar', 'رخو اسبانى', '2021-10-26 21:05:27', '2021-10-26 21:05:27'),
(87, 31, 'ar', 'كرارة ايطالى', '2021-10-26 21:05:38', '2021-10-26 21:05:38'),
(88, 30, 'ar', 'بريشيا دانيو ايطالى', '2021-10-26 21:05:49', '2021-10-26 21:05:49'),
(89, 29, 'ar', 'كلاكتة ايطالى سوبر', '2021-10-26 21:06:00', '2021-10-26 21:06:00'),
(90, 28, 'ar', 'كلاكتة ايطالى اكسترا', '2021-10-26 21:06:11', '2021-10-26 21:06:11'),
(91, 27, 'ar', 'الاستر مضيئ', '2021-10-26 21:06:22', '2021-10-26 21:06:22'),
(92, 26, 'ar', 'تريستا برونز', '2021-10-26 21:06:31', '2021-10-26 21:06:31'),
(93, 25, 'ar', 'تريستا برونز', '2021-10-26 21:06:43', '2021-10-26 21:06:43'),
(94, 24, 'ar', 'تريستا رمادى', '2021-10-26 21:06:54', '2021-10-26 21:06:54'),
(95, 23, 'ar', 'تريستا بيج', '2021-10-26 21:07:04', '2021-10-26 21:07:04'),
(96, 22, 'ar', 'فلتو سلسة', '2021-10-26 21:07:16', '2021-10-26 21:07:16'),
(97, 21, 'ar', 'سلفيا أبيض', '2021-10-26 21:07:26', '2021-10-26 21:07:26'),
(98, 20, 'ar', 'سلفيا أخضر', '2021-10-26 21:07:38', '2021-10-26 21:07:38'),
(99, 19, 'ar', 'صنى الشيخ فضل', '2021-10-26 21:07:50', '2021-10-26 21:07:50'),
(100, 18, 'ar', 'صنى منيا', '2021-10-26 21:08:01', '2021-10-26 21:08:01');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `special_price` int(11) UNSIGNED DEFAULT NULL,
  `special_price_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_price_start` date DEFAULT NULL,
  `special_price_end` date DEFAULT NULL,
  `selling_price` int(11) UNSIGNED DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manage_stock` tinyint(1) NOT NULL DEFAULT 0,
  `qty` int(11) DEFAULT NULL,
  `in_stock` tinyint(1) NOT NULL DEFAULT 1,
  `viewed` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `slug`, `price`, `special_price`, `special_price_type`, `special_price_start`, `special_price_end`, `selling_price`, `sku`, `manage_stock`, `qty`, `in_stock`, `viewed`, `is_active`, `brand_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(34, 'Marble-marble-egyptian-galala-extra-plain', 50, 51, 'percent', '2021-10-28', '2021-10-28', NULL, '005', 1, 4, 1, 0, 1, 12, NULL, '2021-10-24 18:47:36', '2021-10-27 20:29:24'),
(35, 'Marble-marble-egyptian-suny-menya', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-25 06:17:14', '2021-10-25 06:17:14'),
(38, 'Marble-marble-egyptian-suny-sheikh-fadl', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 13, NULL, '2021-10-25 10:35:31', '2021-10-25 10:35:31'),
(39, 'Marble-marble-egyptian-silvia-green', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 12, NULL, '2021-10-26 07:05:08', '2021-10-26 07:05:08'),
(40, 'Marble-marble-egyptian-silvia-white', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 19, NULL, '2021-10-26 07:07:21', '2021-10-26 07:07:21'),
(41, 'Marble-marble-egyptian-smooth-felto', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:08:42', '2021-10-26 07:08:42'),
(42, 'Marble-marble-egyptian-tarseta-beige', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:10:13', '2021-10-26 07:10:13'),
(43, 'Marble-marble-egyptian-tarseta-gray', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 21, NULL, '2021-10-26 07:11:59', '2021-10-26 07:11:59'),
(44, 'Marble-marble-egyptian-tarseta-bronze', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 21, NULL, '2021-10-26 07:14:09', '2021-10-26 07:14:09'),
(45, 'Marble-marble-egyptian-elster-luminous', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 22, NULL, '2021-10-26 07:15:50', '2021-10-26 07:15:50'),
(46, 'Marble-marble-imported-italian-calcutta-extra', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 14, NULL, '2021-10-26 07:17:38', '2021-10-26 07:17:38'),
(47, 'Marble-marble-imported-italian-calcutta-super', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 14, NULL, '2021-10-26 07:18:39', '2021-10-26 07:18:39'),
(48, 'Marble-marble-imported-Italian-brescia-dyno', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 14, NULL, '2021-10-26 07:19:31', '2021-10-26 07:19:31'),
(49, 'Marble-marble-imported-italian-carrara', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 14, NULL, '2021-10-26 07:20:41', '2021-10-26 07:20:41'),
(50, 'Marble-marble-imported-spanish-loose', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 18, NULL, '2021-10-26 07:21:45', '2021-10-26 07:21:45'),
(51, 'Marble-marble-imported-brescia-arora', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 18, NULL, '2021-10-26 07:23:10', '2021-10-26 07:23:10'),
(52, 'Marble-marble-imported-urescia-unciata', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 24, NULL, '2021-10-26 07:41:29', '2021-10-26 07:41:29'),
(53, 'Marble-marble-imported-cream-marvel', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 25, NULL, '2021-10-26 07:42:23', '2021-10-26 07:42:23'),
(54, 'marble-marble-imported-turkish-cream', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 26, NULL, '2021-10-26 07:43:09', '2021-10-26 07:43:09'),
(55, 'Marble-marble-imported-mastara-karara', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 26, NULL, '2021-10-26 07:43:50', '2021-10-26 07:43:50'),
(56, 'Granite-granite-egyptian-short-light-dark-brown', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 18, NULL, '2021-10-26 07:45:03', '2021-10-26 07:45:03'),
(57, 'Granite-granite-egyptian-singles-green-and-yellow', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 18, NULL, '2021-10-26 07:45:51', '2021-10-26 07:45:51'),
(58, 'Granite-granite-egyptian-company-gray', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:46:45', '2021-10-26 07:46:45'),
(59, 'Granite-granite-egyptian-ramadi-suleiman', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:47:35', '2021-10-26 07:47:35'),
(60, 'Granite-granite-egyptian-red-and-black-aswan', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:48:37', '2021-10-26 07:48:37'),
(61, 'Granite-granite-egyptian-rosa-nasr-and-hody-and-marwa', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:50:01', '2021-10-26 07:50:01'),
(62, 'granite-granite-egyptian-gondola', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:51:20', '2021-10-26 07:51:20'),
(63, 'Granite-granite-egyptian-red-fersan-and-azoka', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:53:01', '2021-10-26 07:53:01'),
(64, 'Granite-granite-egyptian-fantasy-red-and-white', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:54:14', '2021-10-26 07:54:14'),
(65, 'Granite-granite-egyptian-halayeb', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:54:49', '2021-10-26 07:54:49'),
(66, 'Granite-granite-egyptian-new-halayeb', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 07:55:25', '2021-10-26 07:55:25'),
(67, 'Granite-granite-imported-indian-double-black', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 16, NULL, '2021-10-26 07:56:14', '2021-10-26 07:56:14'),
(68, 'granite-granite-imported-indian-double-black-galaxy', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 16, NULL, '2021-10-26 07:57:08', '2021-10-26 07:57:08'),
(69, 'Granite-granite-imported-indian-white-kashmir', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 16, NULL, '2021-10-26 07:58:12', '2021-10-26 07:58:12'),
(70, 'Granite-granite-imported-indian-gold-kashmir', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 12, NULL, '2021-10-26 07:58:57', '2021-10-26 07:58:57'),
(71, 'Granite-granite-imported-indian-red-cashmere', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 16, NULL, '2021-10-26 07:59:40', '2021-10-26 07:59:40'),
(72, 'sculpture-marble-egyptian-sculpture-statues', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 08:05:20', '2021-10-26 08:05:20'),
(73, 'sculpture-marble-imported-sculpture-statues', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 18, NULL, '2021-10-26 08:17:15', '2021-10-26 08:17:15'),
(74, 'sculpture-marble-imported-column-carving', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 18, NULL, '2021-10-26 08:19:54', '2021-10-26 08:19:54'),
(75, 'sculpture-granite-egyptian-sculpture-statues', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, NULL, '2021-10-26 08:23:05', '2021-10-26 08:23:05'),
(76, 'sculpture-sculpture-granite-egyptian-column-carving', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 17, '2021-10-26 20:08:08', '2021-10-26 08:26:01', '2021-10-26 20:08:08'),
(77, 'sculpture-sculpture-statues-granite-imported', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 12, '2021-10-26 20:08:11', '2021-10-26 09:11:56', '2021-10-26 20:08:11'),
(78, 'our-produts-sculpture-statues', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 12, '2021-10-26 20:08:15', '2021-10-26 09:14:31', '2021-10-26 20:08:15'),
(79, 'our-products', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 12, '2021-10-26 20:08:18', '2021-10-26 15:27:31', '2021-10-26 20:08:18'),
(80, 'marble-marble-imported-turkish-karara', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 15, NULL, '2021-10-26 20:04:11', '2021-10-26 20:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_id`, `category_id`) VALUES
(34, 71),
(34, 76),
(35, 71),
(35, 76),
(38, 71),
(38, 76),
(39, 71),
(40, 71),
(40, 76),
(41, 71),
(41, 76),
(43, 71),
(43, 76),
(44, 71),
(44, 76),
(45, 71),
(45, 76),
(46, 71),
(46, 77),
(47, 71),
(47, 77),
(48, 71),
(48, 77),
(49, 71),
(49, 77),
(50, 71),
(50, 77),
(51, 71),
(51, 77),
(52, 71),
(52, 77),
(53, 71),
(53, 77),
(54, 71),
(54, 76),
(55, 71),
(55, 77),
(56, 74),
(56, 78),
(57, 74),
(57, 78),
(58, 74),
(58, 78),
(59, 74),
(59, 78),
(60, 74),
(60, 78),
(61, 74),
(61, 78),
(62, 74),
(62, 78),
(63, 74),
(63, 78),
(64, 74),
(64, 78),
(65, 74),
(65, 78),
(66, 74),
(66, 78),
(67, 74),
(67, 79),
(68, 74),
(68, 79),
(69, 74),
(69, 79),
(70, 74),
(70, 79),
(71, 74),
(71, 79),
(72, 75),
(72, 80),
(73, 75),
(73, 81),
(74, 75),
(74, 81),
(75, 75),
(75, 82),
(76, 75),
(76, 82),
(80, 71),
(80, 77);

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `name`, `description`, `short_description`) VALUES
(34, 34, 'en', 'Galala Extra Plain', 'Marble-marble-egyptian-galala-extra-plain egyptian', 'Marble-marble-egyptian-galala-extra-plain'),
(35, 34, 'ar', 'جلالة اكسترا بلان', 'جلالة اكسترا بلان رخام مصرى', 'جلالة اكسترا بلان رخام مصرى'),
(36, 35, 'en', 'Suny Menya', 'Marble suny menya marble egyptian', 'Marble suny menya marble eg'),
(37, 35, 'ar', 'صنى منيا', 'صنى منيا رخام مصرى', NULL),
(40, 38, 'en', 'Suny Sheikh Fadl', 'Marble marble egyptian suny sheikh fadl', 'Marble marble egyptian suny sheikh fadl'),
(41, 38, 'ar', 'صنى الشيخ فضل', 'صنى الشيخ فضل رخام مصرى', NULL),
(42, 39, 'en', 'Silvia Green', 'Marble marble egyptian Silvia Green', NULL),
(43, 40, 'en', 'Silvia White', 'Marble marble egyptian Silvia White', NULL),
(44, 41, 'en', 'Smooth Felto', 'Marble marble egyptian Smooth Felto', NULL),
(45, 42, 'en', 'Tarseta Beige', 'Marble marble egyptian Tarseta Beige', NULL),
(46, 43, 'en', 'Tarseta Gray', 'Marble marble egyptian Tarseta Gray', NULL),
(47, 44, 'en', 'Tarseta Bronze', 'Marble marble egyptian Tarseta Bronze', NULL),
(48, 45, 'en', 'Elster Luminous', 'Marble marble egyptian Elster Luminous', NULL),
(49, 46, 'en', 'Italian Calcutta Extra', 'Marble Imported Italian Calcutta Extra', NULL),
(50, 47, 'en', 'Italian Calcutta Super', 'Marble Imported Italian Calcutta Super', NULL),
(51, 48, 'en', 'Italian Brescia Dyno', 'Marble Imported Italian Brescia Dyno', NULL),
(52, 49, 'en', 'Italian Carrara', 'Marble Imported Italian Carrara', NULL),
(53, 50, 'en', 'Spanish loose', 'Marble Imported Spanish loose', NULL),
(54, 51, 'en', 'Brescia Arora', 'Marble Imported Brescia Arora', NULL),
(55, 52, 'en', 'Brescia Unciata', 'Marble Imported Brescia Unciata', NULL),
(56, 53, 'en', 'Cream Marvel', 'Marble Imported Cream Marve', NULL),
(57, 54, 'en', 'Turkish Cream', 'Marble Imported Turkish Cream', NULL),
(58, 55, 'en', 'Mastara Karara', 'Marble Imported Mastara Karara', NULL),
(59, 56, 'en', 'Short Light Dark Brown', 'Short Light Dark Brown Granite Egyptian', NULL),
(60, 57, 'en', 'Singles Green And Yellow', 'Singles Green And Yellow Granite Egyptian', NULL),
(61, 58, 'en', 'Company Gray', 'Company Gray Granite Egyptian', NULL),
(62, 59, 'en', 'Ramadi Suleiman', 'Ramadi Suleiman Granite Egyptian', NULL),
(63, 60, 'en', 'Red And Black Aswan', 'Granite Egyptian Red And Black Aswan', NULL),
(64, 61, 'en', 'Rosa Nasr And Hody And Marwa', 'Granite Egyptian Rosa Nasr And Hody And Marwa', NULL),
(65, 62, 'en', 'Gondola', 'Gondola Granite Egyptian', NULL),
(66, 63, 'en', 'Red Fersan And Azoka', 'Red Fersan And Azoka Granite Egyptian', NULL),
(67, 64, 'en', 'Fantasy Red And White', 'Fantasy Red And White Granite Egyptian', NULL),
(68, 65, 'en', 'Halayeb', 'Halayeb Granite Egyptian', NULL),
(69, 66, 'en', 'New Halayeb', 'New Halayeb Granite Egyptian New Halayeb', NULL),
(70, 67, 'en', 'Indian Double Black', 'Indian Double Black Granite Imported', NULL),
(71, 68, 'en', 'Indian Double Black Galaxy', 'Indian Double Black Galaxy Granite Imported', NULL),
(72, 69, 'en', 'Indian White Kashmir', 'Indian White Kashmir Granite Imported', NULL),
(73, 70, 'en', 'Indian Gold Kashmir', 'Indian Gold Kashmir Granite Imported', NULL),
(74, 71, 'en', 'Indian Red Cashmere', 'Indian Red Cashmere Granite Imported', NULL),
(75, 72, 'en', 'Sculpture Statues', 'Sculpture Statues Sculpture Marble Egyptian', NULL),
(76, 73, 'en', 'Sculpture Statues Marble Imported', 'Sculpture Statues Marble Imported', NULL),
(77, 74, 'en', 'Column Carving Marble Imported', 'Column Carving Marble Imported', NULL),
(78, 75, 'en', 'Sculpture Statues Granite Egyptian', 'Sculpture Statues Granite Egyptian', NULL),
(79, 76, 'en', 'Column Carving Granite Egyptian', 'Column Carving Granite Egyptian', NULL),
(80, 77, 'en', 'Sculpture Statues Granite Imported', 'Sculpture Statues Granite Imported', NULL),
(81, 78, 'en', 'Our Produts Sculpture Statues Big & Small', 'Our Produts Sculpture Statues Big & Small  Our Produts Sculpture Statues', NULL),
(82, 39, 'ar', 'سلفيا أخضر', 'سلفيا أخضر رخام مصرى', NULL),
(83, 40, 'ar', 'سلفيا أبيض', 'سلفيا أبيض رخام مصرى', NULL),
(84, 41, 'ar', 'فلتو سلسة', 'فلتو سلسة رخام مصرى', NULL),
(85, 42, 'ar', 'تريستا بيج', 'تريستا بيج رخام مصرى', NULL),
(86, 43, 'ar', 'تريستا رمادى', 'تريستا رمادى رخام مصرى', NULL),
(87, 44, 'ar', 'تريستا برونز', 'تريستا برونز رخام مصرى', NULL),
(88, 45, 'ar', ' الاستر مضيئ', ' الاستر مضيئ رخام مصرى', NULL),
(89, 46, 'ar', 'كلاكتة ايطالى اكسترا', 'رخام مستورد كلاكتة ايطالى اكسترا', NULL),
(90, 47, 'ar', 'كلاكتة ايطالى سوبر', 'كلاكتة ايطالى سوبر رخام مستورد', NULL),
(91, 48, 'ar', 'بريشيا دانيو ايطالى', 'بريشيا دانيو ايطالى رخام مستورد', NULL),
(92, 79, 'en', 'Our Produts', 'Sculpture Statues', NULL),
(93, 49, 'ar', ' كرارة ايطالى', ' كرارة ايطالى رخام مستورد', NULL),
(94, 50, 'ar', 'رخو اسبانى', 'رخام مستورد رخو اسبانى', NULL),
(95, 51, 'ar', 'بريشيا أرورا', 'رخام مستورد بريشيا أرورا', NULL),
(96, 52, 'ar', 'برسشيا أونشياتا', 'رخام مستورد برسشيا أونشياتا', NULL),
(99, 54, 'ar', 'كريمة تركى', 'كريمة تركى رخام مستورد', NULL),
(100, 55, 'ar', 'كرارة تركى', 'كرارة تركى رخام مستورد', NULL),
(111, 60, 'ar', 'أحمر و أسود أسوان', 'أحمر و أسود أسوان جرانيت مصرى', NULL),
(112, 56, 'ar', ' بنى قصير فاتح غامق', ' بنى قصير فاتح غامق جرانيت مصرى', NULL),
(113, 57, 'ar', ' الفردى أخضر و أصفر', ' جرانيت مصرى الفردى أخضر و أصفر', NULL),
(114, 58, 'ar', 'رمادى الشركة', 'رمادى الشركة جرانيت مصرى', NULL),
(115, 59, 'ar', 'رمادى سليمان', 'رمادى سليمان جرانيت مصرى', NULL),
(116, 53, 'ar', 'كريمة مارفيل', 'رخام مستورد كريمة مارفيل', NULL),
(117, 61, 'ar', 'روزا نصر و هودى و ومروة', 'روزا نصر و هودى و ومروة جرانيت مصرى', NULL),
(118, 62, 'ar', 'جندولا', 'جندولا جرانيت مصرى', NULL),
(119, 63, 'ar', 'أحمر فرسان و احمر عزوقة', 'أحمر فرسان و احمر عزوقة جرانيت مصرى', NULL),
(120, 64, 'ar', 'فانتازيا أحمر و أبيض ', 'فانتازيا أحمر و أبيض جرانيت مصرى', NULL),
(121, 65, 'ar', 'حلايب', '', NULL),
(122, 66, 'ar', 'حلايب الجديد', 'حلايب الجديد جرانيت مصرى', NULL),
(123, 70, 'ar', 'كشمير جولد هندى', 'كشمير جولد هندى رخام مستورد ', NULL),
(124, 71, 'ar', 'كشمير أحمر هندى', 'كشمير أحمر هندى رخام مستورد', NULL),
(125, 72, 'ar', 'نحت التماثيل - الرخام المصرى', 'نحت التماثيل بالرخام المصرى', NULL),
(126, 73, 'ar', 'نحت التماثيل - الجرانيت المصرى', 'نحت التماثيل بالجرانيت المصرى', NULL),
(127, 74, 'ar', ' نحت الأعمدة - جرانيت المصرى', ' نحت الأعمدة بالجرانيت المصرى', NULL),
(128, 75, 'ar', 'نحت الأعمدة - جرانيت المستورد', 'نحت الأعمدة بالجرانيت المستورد', NULL),
(129, 80, 'en', 'Turkish Karara', 'Marble Imported Turkish Karara', 'Marble Imported Turkish Karara'),
(130, 80, 'ar', 'كرارة تركى', 'كرارة تركى رخام مستورد', NULL),
(131, 69, 'ar', 'كشمير أبيض هندى', 'كشمير أبيض هندى رخام مستورد', NULL),
(132, 68, 'ar', 'دابل بلاك جالاكسى هندى', 'دابل بلاك جالاكسى هندى رخام مستورد', NULL),
(133, 67, 'ar', 'دابل بلاك هندى', 'دابل بلاك هندى رخام مستورد', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `parent`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, 'dolores-enim-ipsam-enim-est-ut-placeat-quas', 1, '2021-10-25 19:38:39', '2021-10-25 19:38:39'),
(2, NULL, 'aspernatur-dolorem-voluptas-possimus-voluptas-est', 1, '2021-10-25 19:43:08', '2021-10-25 19:43:08'),
(3, NULL, 'nihil-nulla-eligendi-voluptas-corporis-qui', 1, '2021-10-25 19:43:08', '2021-10-25 19:43:08'),
(4, NULL, 'explicabo-pariatur-quasi-adipisci-perferendis-amet-facere-tempore-quas', 0, '2021-10-25 19:43:08', '2021-10-25 19:43:08'),
(5, NULL, 'quia-repudiandae-corporis-dolorum-enim-mollitia', 0, '2021-10-25 19:43:08', '2021-10-25 19:43:08'),
(6, NULL, 'eum-amet-voluptas-sit-dolores-illo-enim', 0, '2021-10-25 19:43:09', '2021-10-25 19:43:09'),
(7, NULL, 'qui-placeat-qui-praesentium-ducimus-sed', 1, '2021-10-25 19:43:09', '2021-10-25 19:43:09'),
(8, NULL, 'nobis-unde-est-delectus-dolorem-voluptas-explicabo-occaecati', 0, '2021-10-25 19:43:09', '2021-10-25 19:43:09'),
(9, NULL, 'voluptates-quibusdam-enim-esse-aut-quam-aut-rerum', 1, '2021-10-25 19:43:09', '2021-10-25 19:43:09'),
(10, NULL, 'dicta-recusandae-maxime-et-qui-aut', 1, '2021-10-25 19:43:09', '2021-10-25 19:43:09'),
(11, NULL, 'esse-minima-Granite -modi-eveniet', 1, '2021-10-25 19:43:09', '2021-10-25 22:11:07'),
(12, NULL, 'deleniti-dolorum-Granite -eum-et-illo', 1, '2021-10-25 19:43:09', '2021-10-25 22:08:05'),
(13, NULL, 'voluptatem-ipsum-Imported -dignissimos-perferendis-eaque-Imported', 1, '2021-10-25 19:43:09', '2021-10-25 22:06:49'),
(14, NULL, 'qui-Imported -Imported -mollitia-aut-repudiandae-Imported -nihil', 1, '2021-10-25 19:43:09', '2021-10-25 22:06:05'),
(15, NULL, 'praesentium-Imported-repellat-in-Imported', 0, '2021-10-25 19:43:09', '2021-10-25 22:05:15'),
(16, NULL, 'Marble -et-eos-ea-explicabo-aut-Marble -Imported', 1, '2021-10-25 19:43:10', '2021-10-25 22:04:16'),
(17, NULL, 'Imported-ri-reiciendis-eum-quis-expedita-velit-Imported', 1, '2021-10-25 19:43:10', '2021-10-25 22:03:22'),
(18, NULL, 'Marble-Imported -est-aliquid-placeat-Marble-Imported', 1, '2021-10-25 19:43:10', '2021-10-25 22:02:20'),
(19, NULL, 'Marble-possimus-nulla-in-Marble -Imported', 0, '2021-10-25 19:43:10', '2021-10-25 22:00:58'),
(20, NULL, 'Marble -et-praesentium-iusto-Marble', 1, '2021-10-25 19:43:10', '2021-10-25 21:59:32'),
(21, NULL, 'voluptatem-placeat-fugiat-est-ullam', 1, '2021-10-25 19:43:10', '2021-10-25 19:43:10'),
(22, NULL, 'ratione-tenetur-nihil-in-ea-reprehenderit', 1, '2021-10-25 19:43:10', '2021-10-25 19:43:10'),
(23, NULL, 'marble -egyptian -sit-consequatur-ab-aspernatur-natus-dolore', 0, '2021-10-25 19:43:10', '2021-10-25 21:52:19'),
(24, NULL, 'sunt-esse-mollitia-laboriosam-totam-harum', 1, '2021-10-25 19:43:11', '2021-10-25 19:43:11'),
(25, NULL, 'necessitatibus-odit-libero-voluptatem-molestias-non-iste', 1, '2021-10-25 19:43:11', '2021-10-25 21:51:02'),
(26, NULL, 'quidem-porro-aut-assumenda-a-possimus', 0, '2021-10-25 19:43:11', '2021-10-25 19:43:11'),
(27, NULL, 'totam-velit-dolores-nemo-quos', 0, '2021-10-25 19:43:11', '2021-10-25 19:43:11'),
(28, NULL, 'quia-sed-repudiandae-unde-corrupti', 1, '2021-10-25 19:43:11', '2021-10-25 20:03:11'),
(29, NULL, 'accusamus-ea-harum-qui-autem-cumque-eaque-similique', 1, '2021-10-25 19:43:11', '2021-10-25 19:43:11'),
(30, NULL, 'aliquam-placeat-aliquam-error-dolorem-assumenda', 1, '2021-10-25 19:43:11', '2021-10-25 20:02:24'),
(31, NULL, 'minima-dolor-quia-modi-consequuntur-sunt', 1, '2021-10-25 19:43:11', '2021-10-25 19:43:11'),
(32, NULL, 'Extra-Plain', 1, '2021-10-25 19:46:45', '2021-10-25 19:55:03'),
(33, NULL, 'granite-imported-indian-double-black-galaxy', 1, '2021-10-25 22:53:26', '2021-10-25 22:53:26'),
(34, NULL, 'granite-imported-indian-white-kashmir', 1, '2021-10-25 22:54:53', '2021-10-25 22:54:53'),
(35, NULL, 'granite-imported-indian-gold-kashmir', 1, '2021-10-25 22:55:37', '2021-10-25 22:55:37'),
(36, NULL, 'granite-imported-indian-red-cashmere', 1, '2021-10-25 22:56:26', '2021-10-25 22:56:26'),
(37, NULL, 'our-produts-sculpture-statues', 1, '2021-10-25 22:58:18', '2021-10-25 22:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `section_translations`
--

CREATE TABLE `section_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_translations`
--

INSERT INTO `section_translations` (`id`, `section_id`, `locale`, `name`, `description`, `short_description`) VALUES
(1, 2, 'en', 'New Halayeb', 'New Halayeb Granite Egyptian New Halayeb', 'New Halayeb Granite Eg'),
(2, 3, 'en', 'Halayeb', 'Halayeb Granite Egyptian', 'Halayeb Granite Eg'),
(3, 4, 'en', 'Fantasy Red And White', 'Fantasy Red And White Granite Egyptian', 'Fantasy Red And White Granite Eg'),
(4, 5, 'en', 'Red Fersan And Azoka', 'Red Fersan And Azoka Granite Egyptian', 'Red Fersan And Azoka Granite Eg'),
(5, 6, 'en', 'Gondola', 'Gondola Granite Egyptian', 'Gondola Granite Eg'),
(6, 7, 'en', 'Rosa Nasr And Hody And Marwa', 'Granite Egyptian Rosa Nasr And Hody And Marwa', 'Rosa Nasr And Hody And Marwa Granite Egyptian'),
(7, 8, 'en', 'Red And Black Aswan', 'Granite Egyptian Red And Black Aswan', 'Egyptian Red And Black Aswan'),
(8, 9, 'en', 'Ramadi Suleiman', 'Ramadi Suleiman Granite Egyptian', 'Ramadi Suleiman Granite Egyptian'),
(9, 10, 'en', 'Company Gray', 'Company Gray Granite Egyptian', 'Company Gray Granite Eg'),
(10, 11, 'en', 'Singles Green And Yellow', 'Granite Egyptian Singles Green And Yellow', 'id'),
(11, 12, 'en', 'Short Light Dark Brown', 'Granite Egyptian Short Light Dark Brown', 'Granite Egyptian Short Light Dark Brown'),
(12, 13, 'en', 'Mastara Karara', 'Marble Imported Mastara Karara', 'Marble Mastara Karara'),
(13, 14, 'en', 'Turkish Karara', 'Marble Imported Turkish Karara', 'Marble Turkish Karara'),
(14, 15, 'en', 'Turkish Cream', 'Marble Imported Turkish Cream', 'Marble  Turkish Cream'),
(15, 16, 'en', 'Brescia Unciata', 'Marble Imported Brescia Unciata', 'Marble Brescia Unciata'),
(16, 17, 'en', 'Brescia Arora', 'Marble Imported Brescia Arora', 'Marble Brescia Arora'),
(17, 18, 'en', 'Spanish loose', 'Marble Imported Spanish loose', 'Marble Spanish loose'),
(18, 19, 'en', 'Italian Carrara', 'Marble Imported Italian Carrara', 'Marble Italian Carrara'),
(19, 20, 'en', 'Italian Brescia Dyno', 'Marble Imported Italian Brescia Dyno', 'Marble Imported Italian Brescia Dyno'),
(20, 21, 'en', 'Italian Calcutta Super', 'Marble Imported Italian Calcutta Super', 'Italian Calcutta Super'),
(21, 22, 'en', 'Italian Calcutta Extra', 'Italian Calcutta Extra Marble Imported', 'Italian Calcutta Extra Marble Imported'),
(22, 23, 'en', 'Marble marble egyptian Elster Luminous', 'Marble marble egyptian Elster Luminous', 'marble egyptian Elster Luminous'),
(23, 24, 'en', 'Tarseta Bronze', 'Marble marble egyptian Tarseta Bronze', 'marble egyptian Tarseta Bronze'),
(24, 25, 'en', 'Tarseta Gray', 'Marble marble egyptian Tarseta Gray', 'marble egyptian Tarseta Gray'),
(25, 26, 'en', 'Tarseta Beige', 'Marble marble egyptian Tarseta Beige', 'marble egyptian Tarseta Beige'),
(26, 27, 'en', 'Smooth Felto', 'Marble marble egyptian Smooth Felto', 'marble egyptian Smooth Felto'),
(27, 28, 'en', 'Silvia White', 'Marble marble egyptian Silvia White', 'marble egyptian Silvia White'),
(28, 29, 'en', 'Silvia Green', 'Marble marble egyptian Silvia Green', 'marble egyptian Silvia Green'),
(29, 30, 'en', 'Suny Sheikh Fadl', 'Marble marble egyptian suny sheikh fadl', 'marble egyptian suny sheikh fadl'),
(30, 31, 'en', 'Suny Menya', 'Marble suny menya marble egyptian', 'suny menya marble egyptian'),
(31, 32, 'en', 'Galala Extra Plain', 'Marble suny menya marble egyptian', NULL),
(32, 32, 'ar', 'جلالة اكسترا بلان', 'صنى منيا رخام مصرى', NULL),
(33, 31, 'ar', 'صنى الشيخ فضل', 'صنى منيا رخام مصرى', NULL),
(34, 30, 'ar', 'سلفيا أخضر', 'سلفيا أبيض رخام مصرى', NULL),
(35, 29, 'ar', 'فلتو سلسة', 'فلتو سلسة رخام مصرى', NULL),
(36, 28, 'ar', 'تريستا بيج', 'تريستا بيج رخام مصرى', NULL),
(37, 27, 'ar', 'تريستا رمادى', 'تريستا رمادى رخام مصرى', 'تريستا رمادى'),
(38, 26, 'ar', 'تريستا برونز', 'تريستا برونز رخام مصرى', NULL),
(39, 25, 'ar', 'تريستا مضيئ', 'تريستا مضيئ رخام مصرى', NULL),
(40, 1, 'en', 'Indian Double Black', 'Indian Double Black Granite Imported', 'Indian Double Black Granite Import'),
(41, 33, 'en', 'Indian Double Black Galaxy', 'Indian Double Black Galaxy', NULL),
(42, 34, 'en', 'Indian White Kashmir Granite Imp', 'Indian White Kashmir Granite Imported', NULL),
(43, 35, 'en', 'Indian Gold Kashmir Granite Impo', 'Indian Gold Kashmir Granite Imported', NULL),
(44, 36, 'en', 'Indian Red Cashmere Granite Im', 'Indian Red Cashmere Granite Imported', NULL),
(45, 37, 'en', 'Column Carving', 'Sculpture Statues Big & Small', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_translatable` tinyint(1) NOT NULL DEFAULT 0,
  `plain_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `is_translatable`, `plain_value`, `created_at`, `updated_at`) VALUES
(1, 'default_locale', 0, 'en', '2021-04-26 18:57:35', '2021-04-26 18:57:35'),
(2, 'default_timezone', 0, 'Africa/Cairo', '2021-04-26 18:57:35', '2021-04-26 18:57:35'),
(3, 'reviews_enabled', 0, '1', '2021-04-26 18:57:35', '2021-04-26 18:57:35'),
(4, 'auto_approve_reviews', 0, '1', '2021-04-26 18:57:36', '2021-04-26 18:57:36'),
(5, 'supported_currencies', 0, '[\"USD\",\"LE\",\"SAR\"]', '2021-04-26 18:57:36', '2021-04-26 18:57:36'),
(6, 'default_currency', 0, 'USD', '2021-04-26 18:57:36', '2021-04-26 18:57:36'),
(7, 'store_email', 0, 'admin@admin.com', '2021-04-26 18:57:36', '2021-04-26 18:57:36'),
(8, 'search_engine', 0, 'mysql', '2021-04-26 18:57:36', '2021-04-26 18:57:36'),
(9, 'local_shipping_cost', 0, '0', '2021-04-26 18:57:36', '2021-04-26 18:57:36'),
(10, 'outer_shipping_cost', 0, '0', '2021-04-26 18:57:36', '2021-04-26 18:57:36'),
(11, 'free_shipping_cost', 0, '0', '2021-04-26 18:57:36', '2021-04-26 18:57:36'),
(12, 'store_name', 1, NULL, '2021-04-26 18:57:36', '2021-04-26 18:57:36'),
(13, 'free_shipping_label', 1, '5', '2021-04-26 18:57:36', '2021-08-30 02:03:32'),
(14, 'local_label', 1, NULL, '2021-04-26 18:57:36', '2021-04-26 18:57:36'),
(15, 'outer_label', 1, NULL, '2021-04-26 18:57:36', '2021-04-26 18:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `locale`, `value`) VALUES
(1, 12, 'en', 'Front store'),
(2, 13, 'en', 'Free Delivery'),
(3, 14, 'en', 'Internal Delivery'),
(4, 15, 'en', 'External Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(33, '71NskHsYp31C9UEDOiBLJY0tugU0wofb0zxjT4pc.jpg', '2021-10-25 11:39:53', '2021-10-25 11:39:53'),
(34, '1x2CPBOT8S1UMOCZ1DEmHiAACiXvJG2vzQEKtMVw.jpg', '2021-10-25 11:39:53', '2021-10-25 11:39:53'),
(35, 'PukFrYh28UQE9AjDL1vGp6xGiHzHdtuzzFU6bJwi.jpg', '2021-10-25 11:39:53', '2021-10-25 11:39:53'),
(36, 'ZdYEnRqckTLWQgKYY5aSPvEkbSo8vzHHamzVtwMc.jpg', '2021-10-25 11:39:53', '2021-10-25 11:39:53'),
(37, 'AASHkwTGP0hOnCk1vJYVyyZtjYPWbcQRZs0eNMcB.jpg', '2021-10-25 11:39:53', '2021-10-25 11:39:53'),
(38, 'xm0qP7Sw4SkOrSfORMfTV8nad7P86fZcrPezZmdl.jpg', '2021-10-25 11:39:54', '2021-10-25 11:39:54'),
(39, 'M1s428fsz3ysxEAYzW91PXZXXwySwmBUNUp5aj4H.jpg', '2021-10-25 11:39:54', '2021-10-25 11:39:54'),
(40, 'nzWZ71bj3uMhPfT28V5BFhrt3pLZHDTrWOMCojOu.jpg', '2021-10-25 11:39:54', '2021-10-25 11:39:54'),
(41, 'dharpmC7LwX9AliuFEweRWYvDUgctDy463wLFmYL.jpg', '2021-10-25 11:39:54', '2021-10-25 11:39:54'),
(42, 'tl9kUrG6wlbtS5eDyf18HPH3ecByqxcRAEp4oXay.jpg', '2021-10-25 11:39:54', '2021-10-25 11:39:54'),
(43, 'XAB2o2BdGRz9zK3Ul8hHXsVKxgj6y3jw7SIjaYYe.jpg', '2021-11-16 12:13:36', '2021-11-16 12:13:36'),
(44, 'qEX42Ww7QH339CTCpG6Pbzt28VxDVxCoxmf5k8S2.jpg', '2021-11-16 12:13:36', '2021-11-16 12:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'Granite-granite', '2021-10-24 18:38:28', '2021-10-24 18:38:28'),
(7, 'Marble-marble', '2021-10-24 18:38:42', '2021-10-24 18:38:42'),
(8, 'Sculpture-sculpture', '2021-10-24 18:38:57', '2021-10-24 18:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `tag_translations`
--

CREATE TABLE `tag_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_translations`
--

INSERT INTO `tag_translations` (`id`, `tag_id`, `locale`, `name`) VALUES
(8, 6, 'en', 'Granite'),
(9, 7, 'en', 'Marble'),
(10, 8, 'en', 'Sculpture'),
(11, 6, 'ar', 'جرانيت'),
(12, 7, 'ar', 'رخام'),
(13, 8, 'ar', 'النحت');

-- --------------------------------------------------------

--
-- Table structure for table `user_verfications`
--

CREATE TABLE `user_verfications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_translations`
--
ALTER TABLE `attribute_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_translations_attribute_id_locale_unique` (`attribute_id`,`locale`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_translations`
--
ALTER TABLE `brand_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brand_translations_brand_id_locale_unique` (`brand_id`,`locale`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_attribute_id_foreign` (`attribute_id`),
  ADD KEY `options_product_id_foreign` (`product_id`);

--
-- Indexes for table `option_translations`
--
ALTER TABLE `option_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option_translations_option_id_locale_unique` (`option_id`,`locale`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`product_id`,`tag_id`),
  ADD KEY `product_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`);
ALTER TABLE `product_translations` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sections_slug_unique` (`slug`),
  ADD KEY `sections_parent_foreign` (`parent`);

--
-- Indexes for table `section_translations`
--
ALTER TABLE `section_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `section_translations_section_id_locale_unique` (`section_id`,`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `tag_translations`
--
ALTER TABLE `tag_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag_translations_tag_id_locale_unique` (`tag_id`,`locale`);

--
-- Indexes for table `user_verfications`
--
ALTER TABLE `user_verfications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`user_id`,`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attribute_translations`
--
ALTER TABLE `attribute_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `brand_translations`
--
ALTER TABLE `brand_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `option_translations`
--
ALTER TABLE `option_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `section_translations`
--
ALTER TABLE `section_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tag_translations`
--
ALTER TABLE `tag_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_verfications`
--
ALTER TABLE `user_verfications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `options_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `option_translations`
--
ALTER TABLE `option_translations`
  ADD CONSTRAINT `option_translations_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD CONSTRAINT `product_tags_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_parent_foreign` FOREIGN KEY (`parent`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `section_translations`
--
ALTER TABLE `section_translations`
  ADD CONSTRAINT `section_translations_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tag_translations`
--
ALTER TABLE `tag_translations`
  ADD CONSTRAINT `tag_translations_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
