-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2025 at 09:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lexicon`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(7, '2014 – Humble Beginnings', 'image1742714710.jpg', 'Lexicon was founded as a 600-square-foot institute in Roy Para, Cross Road, Khulna, offering IELTS preparation, Spoken English, Basic Writing, and Phonetics courses, along with mock\r\ntests and IELTS registration services', '2025-03-23 11:25:10', '2025-03-23 11:25:10'),
(8, '2015 – The First IELTS Registration Center in Khulna', 'image1742714768.jpg', 'With expert training, Lexicon produced remarkable IELTS scores of 7.0, 7.5, and 8.0. This\r\nsuccess led to Lexicon becoming the first official IELTS registration center in Khulna in\r\ncollaboration with British Council Bangladesh.', '2025-03-23 11:26:08', '2025-03-23 11:26:08'),
(9, '2016 – Gaining Recognition & Expanding Services', 'image1742714859.jpg', 'Lexicon’s reputation grew rapidly, making it a trusted name in IELTS preparation and Spoken\r\nEnglish courses. A new collaboration with IDP IELTS expanded student opportunities.', '2025-03-23 11:27:39', '2025-03-23 11:27:39'),
(10, '2017 – A Bigger Space, A Bigger Vision', 'image1742714953.jpg', 'To accommodate growth, Lexicon relocated to Nirala (House 97, Road 1), expanding to 1,700 sq. ft. The move enabled the introduction of extensive IELTS and English language courses\r\nwhile continuing to produce high IELTS scores.', '2025-03-23 11:29:13', '2025-03-23 11:29:13'),
(11, '2018 – Market Leadership & Innovative Learning', 'image1742715061.jpg', 'Lexicon became the leading IELTS institute in Khulna, training the highest number of candidates each month. New initiatives included the GALA Speaking Test at CSS AVA Center, project-based learning, and presentation-based teaching.', '2025-03-23 11:31:01', '2025-03-23 11:31:01'),
(12, '2019 – Becoming an Official British Council IELTS Test Venue', 'image1742715098.jpg', 'Lexicon became an official closed IELTS test venue in partnership with British Council Bangladesh, conducting tests at CSS AVA Center. The Cambridge Young Learners English (YLE) Program was also introduced for children.', '2025-03-23 11:31:38', '2025-03-23 11:31:38'),
(13, '2020 – Strengthening Expertise Amid the Pandemic', 'image1742715145.jpg', 'Despite COVID-19, Lexicon’s IELTS trainer, Md Shozibul Islam, earned the Cambridge CELTA certification from the University of Cambridge. Online classes via Zoom ensured uninterrupted learning, and Lexicon became the only O/A Level exam venue in the Khulna division.', '2025-03-23 11:32:25', '2025-03-23 11:32:25'),
(14, '2021 – Unparalleled IELTS Success', 'image1742715177.jpg', 'For the first time, Lexicon students achieved an IELTS 9.0 in Speaking and an overall band score of 8.5, solidifying Lexicon’s leadership in IELTS success.', '2025-03-23 11:32:57', '2025-03-23 11:32:57'),
(15, '2022 – British Council’s Top Contributor Award', 'image1742800473.jpg', 'Lexicon received British Council Bangladesh’s Top Contributor Award for the highest number of\r\nIELTS registrations from Khulna', '2025-03-24 11:14:33', '2025-03-24 11:14:33'),
(16, '2023 – Sustained Excellence & Another Prestigious Award', 'image1742800504.jpg', 'Lexicon continued to dominate IELTS training and test facilitation, winning another British\r\nCouncil Top Contributor Award and reinforcing its position as the market leader in Khulna', '2025-03-24 11:15:04', '2025-03-24 11:15:04'),
(17, '2024 – A New Era: The Most Premium IELTS Test Center in Bangladesh', 'image1742800575.jpg', '<ul><li>Relocation to NLI Tower, Khulna, expanding to 3,700 sq. ft.&nbsp;</li><li>Recognized as the most premium IELTS test center and top IELTS registration contributor for British Council Bangladesh.&nbsp;</li><li>Introduction of IELTS on Computer for enhanced testing services.&nbsp;</li><li>CEO returned from Canada with an IMTE (International Master of Teaching English) from Saint Mary’s University, Halifax, introducing modern pedagogy, innovative technology, and a student-centered approach.&nbsp;</li><li>Enhanced teacher training and research, utilizing Oxford’s Headway &amp; Cambridge’s Empower for world-class education.</li></ul>', '2025-03-24 11:16:15', '2025-03-24 12:20:31'),
(18, '2025 – Unstoppable Growth & Expansion', 'image1742800642.jpg', '<ul><li><strong>Venue Expansion</strong> – Lexicon expanded to 7,400 sq. ft. across the 6th &amp; 7th floors of NLI Tower.&nbsp;</li><li><strong>Launch of LexiFly</strong> – A Higher Education &amp; Immigration consultancy service guiding students beyond borders.&nbsp;</li><li><strong>New Course Offerings</strong> – Introduction of PTE (Pearson Test of English) &amp; SAT (Scholastic Aptitude Test)preparation courses.</li></ul>', '2025-03-24 11:17:22', '2025-03-24 13:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogcategory_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogcategory_id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(14, '10', 'In aut eos dolor mol', 'image1745390672.jpg', NULL, '2025-04-23 10:44:32', '2025-04-23 10:44:32'),
(15, '10', 'Aliquip labore culpa', 'image1745390697.jpg', NULL, '2025-04-23 10:44:57', '2025-04-23 10:44:57'),
(16, '10', 'Eligendi maiores est', 'image1745390707.jpg', NULL, '2025-04-23 10:45:07', '2025-04-23 10:45:07'),
(17, '12', 'Quo et qui est veni', 'image1745390718.jpg', NULL, '2025-04-23 10:45:18', '2025-04-23 10:45:18'),
(18, '12', 'Excepteur consequunt', 'image1745390725.jpg', NULL, '2025-04-23 10:45:25', '2025-04-23 10:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(10, 'IELTS', '2025-04-22 14:09:57', '2025-04-22 14:09:57'),
(11, 'PTE', '2025-04-22 14:10:03', '2025-05-12 11:07:36'),
(12, 'ESL', '2025-04-22 14:10:09', '2025-04-22 14:10:09'),
(13, 'YLE', '2025-04-22 14:10:15', '2025-04-22 14:10:15'),
(14, 'Vocabulary', '2025-05-10 09:22:54', '2025-05-10 09:22:54'),
(15, 'Phonetics', '2025-05-10 09:23:04', '2025-05-10 09:23:04'),
(16, 'Higher Education', '2025-05-10 09:23:12', '2025-05-10 09:23:12'),
(17, 'Immigration', '2025-05-10 09:23:21', '2025-05-10 09:23:21'),
(18, 'Miscellaneous', '2025-05-12 11:08:12', '2025-05-12 11:08:12'),
(19, 'server', '2025-05-27 15:28:20', '2025-05-27 15:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'IELTS COURSES', '2025-03-04 09:17:43', '2025-03-04 09:17:43'),
(2, 'ESL COURSES', '2025-03-04 09:17:53', '2025-03-04 09:17:53'),
(3, 'YLE COURSES', '2025-03-04 09:18:00', '2025-03-04 09:18:33'),
(5, 'ONLINE COURSES', '2025-03-04 09:18:17', '2025-03-04 09:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Hyatt Caldwell', '+1 (178) 855-3816', 'mypyxoli@mailinator.com', 'Voluptate non invent', '2025-03-10 12:08:29', '2025-03-10 12:08:29'),
(7, 'Gregorysaics', '83428642536', 'nomin.momin+214m4@mail.ru', 'Gwhduwdjiwhduwh uhiwdjiwjdeufhu jikodwfiewfiwjdjw jidwjosqdijwifi jiwdowidqoiowufeugewi uiwjdiwurfuwyruewiai fwhuwhwhfuwhduwijdw lexiconeltc.com', '2025-06-26 03:32:25', '2025-06-26 03:32:25'),
(8, 'Anthonydonse', '85433522962', 'majahamill@yahoo.com', 'URGENT MESSAGE! Urgent: $199,175.76 Withdrawal Expires in 5 Minutes https://script.google.com/macros/s/AKfycbxRUZSzSRTvJGLSdGeMqdKOOnTZyrzPjQmaGcXc-jdmldEobmebx5pwIVbcUWlT5egu3g/exec/0f9u0s5i/4m9q/2/3u/9w1t6k1i/4n7r/g/l8/1w6m0h4o/4z5g/q/ge', '2025-06-27 12:39:05', '2025-06-27 12:39:05'),
(9, 'Anthonydonse', '81363575658', 'majahamill@yahoo.com', 'URGENT MESSAGE! Urgent: $199,175.76 Withdrawal Expires in 5 Minutes https://script.google.com/macros/s/AKfycbxRUZSzSRTvJGLSdGeMqdKOOnTZyrzPjQmaGcXc-jdmldEobmebx5pwIVbcUWlT5egu3g/exec/0f9u0s5i/4m9q/2/3u/9w1t6k1i/4n7r/g/l8/1w6m0h4o/4z5g/q/ge', '2025-06-27 12:39:06', '2025-06-27 12:39:06'),
(10, 'Anthonydonse', '86798323788', 'majahamill@yahoo.com', 'URGENT MESSAGE! Urgent: $199,175.76 Withdrawal Expires in 5 Minutes https://script.google.com/macros/s/AKfycbxRUZSzSRTvJGLSdGeMqdKOOnTZyrzPjQmaGcXc-jdmldEobmebx5pwIVbcUWlT5egu3g/exec/0f9u0s5i/4m9q/2/3u/9w1t6k1i/4n7r/g/l8/1w6m0h4o/4z5g/q/ge', '2025-06-27 12:39:07', '2025-06-27 12:39:07'),
(11, 'Anthonydonse', '82366865613', 'majahamill@yahoo.com', 'URGENT MESSAGE! Urgent: $199,175.76 Withdrawal Expires in 5 Minutes https://script.google.com/macros/s/AKfycbxRUZSzSRTvJGLSdGeMqdKOOnTZyrzPjQmaGcXc-jdmldEobmebx5pwIVbcUWlT5egu3g/exec/0f9u0s5i/4m9q/2/3u/9w1t6k1i/4n7r/g/l8/1w6m0h4o/4z5g/q/ge', '2025-06-27 12:39:08', '2025-06-27 12:39:08'),
(12, 'Anthonydonse', '84122692751', 'majahamill@yahoo.com', 'URGENT MESSAGE! Urgent: $199,175.76 Withdrawal Expires in 5 Minutes https://script.google.com/macros/s/AKfycbxRUZSzSRTvJGLSdGeMqdKOOnTZyrzPjQmaGcXc-jdmldEobmebx5pwIVbcUWlT5egu3g/exec/0f9u0s5i/4m9q/2/3u/9w1t6k1i/4n7r/g/l8/1w6m0h4o/4z5g/q/ge', '2025-06-27 12:39:09', '2025-06-27 12:39:09'),
(13, 'Georgedaula', '81711469875', 'yawiviseya67@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-06-28 16:16:09', '2025-06-28 16:16:09'),
(14, 'Leedaula', '88899197135', 'dinanikolskaya99@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-06-28 18:10:50', '2025-06-28 18:10:50'),
(15, 'Anthonydonse', '85169764579', 'mellow0011@icloud.com', 'IMPORTANT! Jackpot! $199,975.28 for You! https://script.google.com/macros/s/AKfycbyjIilD5dY8kZ41ZuMmyxQEPzR6CJZgdZNvrMeX80dwmlxxLl3_eJExWVmviNMFZWfw/exec/3c8y8s1o/5m5m/o/54/0z1n9j5u/7r5d/2/v2/1x0b8j4t/3q0z/6/lr', '2025-06-29 14:42:14', '2025-06-29 14:42:14'),
(16, 'Anthonydonse', '82834731691', 'mellow0011@icloud.com', 'IMPORTANT! Jackpot! $199,975.28 for You! https://script.google.com/macros/s/AKfycbyjIilD5dY8kZ41ZuMmyxQEPzR6CJZgdZNvrMeX80dwmlxxLl3_eJExWVmviNMFZWfw/exec/3c8y8s1o/5m5m/o/54/0z1n9j5u/7r5d/2/v2/1x0b8j4t/3q0z/6/lr', '2025-06-29 14:42:17', '2025-06-29 14:42:17'),
(17, 'Anthonydonse', '86738233275', 'mellow0011@icloud.com', 'IMPORTANT! Jackpot! $199,975.28 for You! https://script.google.com/macros/s/AKfycbyjIilD5dY8kZ41ZuMmyxQEPzR6CJZgdZNvrMeX80dwmlxxLl3_eJExWVmviNMFZWfw/exec/3c8y8s1o/5m5m/o/54/0z1n9j5u/7r5d/2/v2/1x0b8j4t/3q0z/6/lr', '2025-06-29 14:42:19', '2025-06-29 14:42:19'),
(18, 'Anthonydonse', '84688947546', 'mellow0011@icloud.com', 'IMPORTANT! Jackpot! $199,975.28 for You! https://script.google.com/macros/s/AKfycbyjIilD5dY8kZ41ZuMmyxQEPzR6CJZgdZNvrMeX80dwmlxxLl3_eJExWVmviNMFZWfw/exec/3c8y8s1o/5m5m/o/54/0z1n9j5u/7r5d/2/v2/1x0b8j4t/3q0z/6/lr', '2025-06-29 14:42:22', '2025-06-29 14:42:22'),
(19, 'Anthonydonse', '82236445819', 'mellow0011@icloud.com', 'IMPORTANT! Jackpot! $199,975.28 for You! https://script.google.com/macros/s/AKfycbyjIilD5dY8kZ41ZuMmyxQEPzR6CJZgdZNvrMeX80dwmlxxLl3_eJExWVmviNMFZWfw/exec/3c8y8s1o/5m5m/o/54/0z1n9j5u/7r5d/2/v2/1x0b8j4t/3q0z/6/lr', '2025-06-29 14:42:24', '2025-06-29 14:42:24'),
(20, 'Anthonydonse', '86291377123', 'sweepi1987@gmail.com', 'URGENT! URGENT ALERT: CLAIM YOUR $199,315.53 WINNINGS https://script.google.com/macros/s/AKfycbwYIrg07_ezxVFTzc765cprshMik0x9b-Z2a_ji6qUt_tUYNIClmSqP8kx1YLlL2mkm/exec/2w8k9l4w/4x6z/f/m8/1c6j0a3i/7m9t/4/pi/1r5g0f4u/6v6y/p/11', '2025-07-02 00:58:54', '2025-07-02 00:58:54'),
(21, 'Anthonydonse', '81125144883', 'sweepi1987@gmail.com', 'URGENT! URGENT ALERT: CLAIM YOUR $199,315.53 WINNINGS https://script.google.com/macros/s/AKfycbwYIrg07_ezxVFTzc765cprshMik0x9b-Z2a_ji6qUt_tUYNIClmSqP8kx1YLlL2mkm/exec/2w8k9l4w/4x6z/f/m8/1c6j0a3i/7m9t/4/pi/1r5g0f4u/6v6y/p/11', '2025-07-02 00:58:56', '2025-07-02 00:58:56'),
(22, 'Anthonydonse', '82177856648', 'sweepi1987@gmail.com', 'URGENT! URGENT ALERT: CLAIM YOUR $199,315.53 WINNINGS https://script.google.com/macros/s/AKfycbwYIrg07_ezxVFTzc765cprshMik0x9b-Z2a_ji6qUt_tUYNIClmSqP8kx1YLlL2mkm/exec/2w8k9l4w/4x6z/f/m8/1c6j0a3i/7m9t/4/pi/1r5g0f4u/6v6y/p/11', '2025-07-02 00:58:57', '2025-07-02 00:58:57'),
(23, 'Anthonydonse', '82825978593', 'sweepi1987@gmail.com', 'URGENT! URGENT ALERT: CLAIM YOUR $199,315.53 WINNINGS https://script.google.com/macros/s/AKfycbwYIrg07_ezxVFTzc765cprshMik0x9b-Z2a_ji6qUt_tUYNIClmSqP8kx1YLlL2mkm/exec/2w8k9l4w/4x6z/f/m8/1c6j0a3i/7m9t/4/pi/1r5g0f4u/6v6y/p/11', '2025-07-02 00:58:58', '2025-07-02 00:58:58'),
(24, 'Anthonydonse', '89653536817', 'sweepi1987@gmail.com', 'URGENT! URGENT ALERT: CLAIM YOUR $199,315.53 WINNINGS https://script.google.com/macros/s/AKfycbwYIrg07_ezxVFTzc765cprshMik0x9b-Z2a_ji6qUt_tUYNIClmSqP8kx1YLlL2mkm/exec/2w8k9l4w/4x6z/f/m8/1c6j0a3i/7m9t/4/pi/1r5g0f4u/6v6y/p/11', '2025-07-02 00:58:59', '2025-07-02 00:58:59'),
(25, 'Gilbert Mackinolty', '3338857018', 'gilbert.mackinolty@gmail.com', 'Lexicon Take a look at a tool your business truly needs, while others haven’t heard of it.\r\n\r\nImagine this. A visitor wraps up their visit. Without trying to find you on Google, hoping they choose your listing, they just use a tap card.\r\n\r\nYour review page opens instantly. No clicking. They leave their comment, and finish in seconds.\r\n\r\nAnd there’s more. When someone tries to leave less than 5 stars, you manage how it works.\r\n\r\nWith your dashboard, you can:\r\n\r\nPresent a pop-up like \"Please speak to a manager first\"  \r\nLet them submit concerns in private  \r\nAdjust responses how you like\r\n\r\nThis tap card is:\r\n\r\nJust $35  \r\nNo monthly fees  \r\nUse it as much as you want  \r\nComes with admin access  \r\nBlocks low-star reviews  \r\nGets you found faster  \r\nShows you’re reputable  \r\nNeeds no setup\r\n\r\nThis system is exclusive, and clients are loving the results.\r\n\r\nGuaranteed for 30 days  \r\nYour satisfaction is guaranteed.\r\n\r\nCards are limited  \r\nBuy now\r\n\r\nThis is a tool you’ll use daily.\r\n\r\nCheck out: https://customreviewscard.com/lexiconeltc.comhttp://lexiconeltc.com to get started.', '2025-07-20 13:55:20', '2025-07-20 13:55:20'),
(26, 'Shovon Pundari', '01780441842', 'pundarishovon@gmail.com', 'I want to pursue higher education abroad, I want to study undergraduate in civil engineering. Do you provide visa processing or guidelines for going abroad?My English is not that good at the basics, let\'s say my English is very bad. Should I do IELTS in this situation? Do you start from the basics in IELTS?I don\'t understand what I can do now.please give me some advise', '2025-07-22 10:49:18', '2025-07-22 10:49:18'),
(27, 'Leedaula', '86493521643', 'irinademenkova86@gmail.com', 'Xin chào, tôi muốn biết giá của bạn.', '2025-07-30 03:46:05', '2025-07-30 03:46:05'),
(28, 'Leedaula', '86922251559', 'zekisuquc419@gmail.com', 'Γεια σου, ήθελα να μάθω την τιμή σας.', '2025-07-30 07:07:08', '2025-07-30 07:07:08'),
(29, 'Hasnat', '01537548975', 'adnan.ru2720@gmail.com', 'I want to join at chat club..', '2025-08-03 08:04:34', '2025-08-03 08:04:34'),
(30, 'MD FAHIM AHMED', '+8801709203890', 'fahimahmed15890@gmail.com', 'I want to complete my IELTS preparation here.', '2025-08-08 10:52:04', '2025-08-08 10:52:04'),
(31, 'শশি', '01784503902', 'jebunesashoshi07@gmail.com', 'I think lexicon is the best For IELTS preparation. And I try my best', '2025-08-08 14:08:48', '2025-08-08 14:08:48'),
(32, 'Bijoya Ray', '1610923295', 'llb.bijoyaraysp19@gmail.com', 'I want to attend chat club', '2025-08-08 19:36:58', '2025-08-08 19:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `course_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '2', 'One', 'dsfds fdf sdf sd fsd sdf sdfsdfsdfsdf sdfsd fsdfsdf', '2025-03-04 13:24:28', '2025-03-04 13:24:28'),
(2, '2', 'Two', 'sdfdsf sdf vsd sdfgsdgsd fsdf sdf sdfvsdfsdfsdf sdfsd', '2025-03-04 13:25:17', '2025-03-04 13:25:17'),
(3, '2', 'Three', 'sdf sdfsdfsdgsd gsdg sdfgsdg sdgsdgsdgsd fgsdfgsdgfsdgfds gfgdsfg dfgfdg fd g', '2025-03-04 13:25:30', '2025-03-04 13:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `sub_heading` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `class_schedule` varchar(255) DEFAULT NULL,
  `support` varchar(255) DEFAULT NULL,
  `seats` varchar(255) DEFAULT NULL,
  `batch_name` varchar(255) DEFAULT NULL,
  `extra_title` varchar(255) DEFAULT NULL,
  `extra_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `heading`, `sub_heading`, `title`, `sub_title`, `image`, `price`, `short_description`, `description`, `start_date`, `class_schedule`, `support`, `seats`, `batch_name`, `extra_title`, `extra_description`, `created_at`, `updated_at`) VALUES
(4, '5', NULL, NULL, 'ESL Executive Course', NULL, 'image1742111925.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-16 11:48:37', '2025-05-07 13:32:17'),
(5, '1', 'IELTS SIGNATURE', 'IELTS SIGNATURE', 'IELTS SIGNATURE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-12 13:58:24', '2025-04-23 09:46:12'),
(6, '1', 'IELTS INTENSIVE', 'IELTS intensive', 'IELTS INTENSIVE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-12 14:00:30', '2025-04-12 14:30:12'),
(8, '1', 'IELTS PREMIUM', 'IELTS PREMIUM', 'IELTS PREMIUM', NULL, NULL, '15000', NULL, NULL, 'Friday, May 21', '10.15 pm - 11.45 pm (Sunday- Tuesday)', '16 hours a day, 6 days a week', '10', 'On the 14th Batch', NULL, NULL, '2025-04-12 14:04:49', '2025-04-24 09:19:21'),
(9, '1', 'IELTS STANDARD REGULAR / UKVI', 'IELTS STANDARD REGULAR / UKVI', 'IELTS STANDARD REGULAR / UKVI', NULL, NULL, NULL, NULL, '<p>\\</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-12 14:08:46', '2025-04-12 14:29:36'),
(10, '1', 'IELTS EXECUTIVE', 'IELTS EXECUTIVE', 'IELTS EXECUTIVE', NULL, NULL, '500', NULL, NULL, 'Friday, March 21', '10.15 pm - 11.45 pm (Sunday- Tuesday)', '16 hours a day, 6 days a week', '10', 'On the 14th Batch', NULL, NULL, '2025-04-12 14:10:04', '2025-05-07 13:31:16'),
(11, '2', 'ADVANCED LEARNERS', 'ADVANCED LEARNERS', 'ENGLISH FOR ADVANCED LEARNERS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-12 14:11:45', '2025-04-12 14:46:10'),
(12, '2', 'ENGLISH FOR ELEMENTARY LEARNERS', 'ELEMENTARY LEARNERS', 'ENGLISH FOR ELEMENTARY LEARNERS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-12 14:13:00', '2025-04-12 14:45:58'),
(13, '3', 'KIDS ENGLISH', 'KIDS ENGLISH', 'KIDS ENGLISH', NULL, NULL, NULL, NULL, '<h2>🎨 <strong>KIDS ENGLISH – DESCRIPTION SKILLS</strong></h2><h3>🧠 <strong>1. What is Describing?</strong></h3><p>Describing means <strong>telling someone</strong> about <strong>what something looks like</strong> or <strong>how it feels</strong>. You can describe:</p><p><strong>People</strong> (family, friends, characters)</p><p><strong>Places</strong> (your home, school, favorite places)</p><p><strong>Things</strong> (toys, animals, objects)</p><h3>🗣️ <strong>2. Speaking: Easy Descriptions for Kids</strong></h3><p>In speaking, kids will be asked to <strong>talk about simple things</strong>. Here’s how you can teach them to describe:</p><h4>🔹 <strong>Describe a person:</strong></h4><p><strong>Example Question:</strong> “Can you describe your friend?”</p><p><strong>Sample Answer:</strong></p><p>“My friend is tall. She has short hair and big eyes. She wears glasses. She is funny and kind.”</p><h4>🔹 <strong>Describe an animal:</strong></h4><p><strong>Example Question:</strong> “Can you describe your favorite animal?”</p><p><strong>Sample Answer:</strong></p><p>“My favorite animal is a dog. It is brown. It has long ears and a tail. It is very friendly.”</p><h4>🔹 <strong>Describe a place:</strong></h4><p><strong>Example Question:</strong> “Can you describe your house?”</p><p><strong>Sample Answer:</strong></p><p>“My house is big. It has a garden with flowers. There are three bedrooms. I like my house because it is comfortable.”</p><h4>🔹 <strong>Describe a toy:</strong></h4><p><strong>Example Question:</strong> “Can you describe your favorite toy?”</p><p><strong>Sample Answer:</strong></p><p>“My favorite toy is a teddy bear. It is soft and brown. It has a red ribbon on its neck. I sleep with it every night.”</p><h3>📚 <strong>3. Vocabulary for Kids’ Descriptions</strong></h3><p>Here are some <strong>simple words</strong> to use for describing:</p><h4><strong>People</strong></h4><p>Tall, short, funny, happy, sad, kind, old, young, big, small</p><h4><strong>Animals</strong></h4><p>Big, small, fast, slow, furry, fluffy, cute, strong</p><h4><strong>Places</strong></h4><p>Big, small, beautiful, quiet, noisy, green, blue, tall, wide, colorful</p><h4><strong>Things</strong></h4><p>Soft, hard, round, square, colorful, big, small, light, heavy</p><h3>🧩 <strong>4. Sentence Structures for Kids</strong></h3><p><strong>Sentence starters</strong> that will help kids describe things easily:</p><p><strong>This is…</strong></p><p><strong>It is…</strong></p><p><strong>I like it because…</strong></p><p><strong>It looks like…</strong></p><p><strong>It is very…</strong></p><p>Examples:</p><p>“This is my cat. It is small. It has white fur. It is very cute.”</p><p>“My toy car is red. It is fast. I like it because it goes very fast.”</p><h3>🎲 <strong>5. Fun Practice Activities for Kids</strong></h3><h4><strong>Activity 1: Describe Your Favorite Food</strong></h4><p>Ask the child to describe their favorite food.</p><p>Example: \"I like pizza. It is round. It has cheese and tomatoes on top.\"</p><h4><strong>Activity 2: Draw &amp; Describe</strong></h4><p>Give kids a picture to draw (like an animal, a house, or a toy).</p><p>Ask them to describe their drawing.</p><p>Example: “I drew a house. It has a red roof. There is a garden with flowers.”</p><h4><strong>Activity 3: Show &amp; Tell</strong></h4><p>Ask the child to bring their favorite toy or book and describe it in front of the class or group.</p><p>Example: “This is my doll. It has blue hair and a pink dress. I love it because it talks.”</p><h3>📖 <strong>6. Writing Practice for Kids</strong></h3><p>For kids starting to learn how to describe things in writing, encourage them to write <strong>short sentences</strong> about:</p><p><strong>Their family</strong></p><p><strong>Their school</strong></p><p><strong>A place they visited</strong></p><p>Example for family:</p><blockquote><p>“I have two sisters. They are funny and kind. My father is tall and my mother is short.”</p></blockquote><h3>✏️ <strong>7. Tips for Kids to Describe Better</strong></h3><p><strong>Use simple words:</strong> Don’t worry about long words or complex grammar.</p><p><strong>Practice with pictures:</strong> Show pictures of animals, places, or people, and have them describe what they see.</p><p><strong>Speak clearly:</strong> Help kids practice speaking slowly and clearly.</p><p><strong>Use actions:</strong> Encourage them to act out or use gestures when describing.</p><h3>🎉 <strong>8. Example: Describing a Picture</strong></h3><p>If you have a picture, ask the kids to describe it:</p><p><strong>Question:</strong> “Can you describe this picture?”<br><i>Imagine a picture of a sunny park with people walking and kids playing.</i></p><p><strong>Answer:</strong></p><p>“In the picture, there is a park. It is very sunny. Some people are walking, and some kids are playing with a ball. There are trees, and the grass is green. It looks fun!”</p><h2>📦 <strong>9. Fun Practice Questions for Kids</strong></h2><p><strong>What is your favorite toy? Can you describe it?</strong></p><p><strong>Tell me about your pet.</strong></p><p><strong>Describe your classroom.</strong></p><p><strong>What do you like to do on the weekend?</strong></p><p><strong>Describe your best friend.</strong></p><h2>💡 <strong>10. Encouraging Kids to Describe More</strong></h2><p>Use <strong>games</strong> and <strong>activities</strong> to make describing fun. For example, try a game like “I Spy” to help them describe things around them.</p><p><strong>Praise their efforts</strong>, even if their descriptions are simple. Encouragement will make them confident!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-12 14:14:39', '2025-04-12 14:14:39'),
(14, '3', 'PRE-TEEN ENGLISH', 'PRE-TEEN ENGLISH', 'PRE-TEEN ENGLISH', 'The 4th batch of classes will start from January 26th.', NULL, '500', 'Specialization', NULL, 'Friday, March 21', '10.15 pm - 11.45 pm (Sunday- Tuesday)', '16 hours a day, 6 days a week', '10', 'On the 14th Batch', NULL, NULL, '2025-04-12 14:15:31', '2025-04-12 14:24:05'),
(19, '2', 'ESL Executive Course', 'ESL Executive Course', 'ESL Executive Course', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-07 13:13:29', '2025-05-07 13:13:29'),
(20, '3', NULL, NULL, 'Teen English', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-07 13:14:40', '2025-05-07 13:14:40'),
(21, '1', 'IELTS Life Skills', NULL, 'IELTS Life Skills', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-17 01:21:29', '2025-06-17 01:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `course_trainers`
--

CREATE TABLE `course_trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `trainer_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_trainers`
--

INSERT INTO `course_trainers` (`id`, `course_id`, `trainer_id`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '2025-03-12 13:50:55', '2025-03-12 13:50:55'),
(3, '2', '4', '2025-03-12 13:53:41', '2025-03-12 13:53:41'),
(5, '2', '1', '2025-03-12 13:58:45', '2025-03-12 13:58:45'),
(6, '4', '4', '2025-03-16 11:49:29', '2025-03-16 11:49:29'),
(7, '10', '1', '2025-04-23 09:56:57', '2025-04-23 09:56:57'),
(8, '9', '4', '2025-04-23 09:57:08', '2025-04-23 09:57:08'),
(9, '8', '3', '2025-04-23 09:57:20', '2025-04-23 09:57:20'),
(10, '7', '2', '2025-04-23 09:57:31', '2025-04-23 09:57:31'),
(11, '6', '6', '2025-04-23 09:57:41', '2025-04-23 09:57:41'),
(12, '18', '1', '2025-05-13 14:53:02', '2025-05-13 14:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Doloribus sunt tempo', 'image1742110414.jpg', '2025-03-03 12:40:27', '2025-03-16 11:33:34'),
(3, 'Sunt doloribus in vo', 'image1742018596.jpg', '2025-03-03 12:51:39', '2025-03-15 10:03:16'),
(4, 'Atque porro facilis', 'image1742018464.jpg', '2025-03-03 12:53:16', '2025-03-15 10:01:04'),
(5, 'Expedita illum nihi', 'image1742108780.jpg', '2025-03-03 12:53:38', '2025-03-16 11:06:20'),
(6, 'Dolore nihil non vol', 'image1742017849.jpg', '2025-03-03 12:53:47', '2025-03-15 09:50:49'),
(7, 'Dolor laboris a amet', 'image1742017805.jpg', '2025-03-03 12:53:56', '2025-03-15 09:50:05'),
(8, 'Accusamus sed quo ma', 'image1742021204.jpg', '2025-03-03 12:54:05', '2025-03-15 10:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `exam_dates`
--

CREATE TABLE `exam_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_date_tests`
--

CREATE TABLE `exam_date_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_title` varchar(255) DEFAULT NULL,
  `exam_date` varchar(255) DEFAULT NULL,
  `exam_date_time` varchar(255) DEFAULT NULL,
  `test_name` varchar(255) DEFAULT NULL,
  `requirement` varchar(255) DEFAULT NULL,
  `requirement_detail` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_date_tests`
--

INSERT INTO `exam_date_tests` (`id`, `exam_title`, `exam_date`, `exam_date_time`, `test_name`, `requirement`, `requirement_detail`, `name`, `mobile`, `email`, `created_at`, `updated_at`) VALUES
(12, 'A/O level exam', '2025-05-25', '10:00', 'IELTS Academic', 'Yes', 'a,\r\nb,\r\nc', 'Arman Sharif', '01632109022', 'arman.bae.innovation@gmail.com', '2025-05-04 13:57:18', '2025-05-04 13:57:18'),
(13, 'A/O level exam', '2025-05-25', '20:00', 'IELTS Academic', 'No', NULL, 'Ori Cochran', '+1 (803) 197-2463', 'roseby@mailinator.com', '2025-05-04 14:08:53', '2025-05-04 14:08:53'),
(15, 'A/O level exam', '2025-05-10', '16:00', 'IELTS Academic', 'No', NULL, 'Shakib hossain Shovon', '01705140659', 'info@metacademy.com', '2025-05-05 11:14:39', '2025-05-05 11:14:39'),
(16, 'Ielts paper based exam', '2025-05-20', '18:00', 'IELTS Academic', 'No', NULL, 'Shakib hossain Shovon', '01703584483', 'info@mangrovevalley.com', '2025-05-05 11:17:53', '2025-05-05 11:17:53'),
(17, 'Ielts on computer', '2025-05-15', '16:30', 'IELTS General Training', 'Yes', 'FUJVJGVKVHK', 'Shakib hossain Shovon', '01705140659', 'info@metacademy.com', '2025-05-05 11:18:29', '2025-05-05 11:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `exam_date_times`
--

CREATE TABLE `exam_date_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `examdate_id` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_date_times`
--

INSERT INTO `exam_date_times` (`id`, `examdate_id`, `time`, `created_at`, `updated_at`) VALUES
(1, '36', '10:00', '2025-05-04 13:16:48', '2025-05-04 13:16:48'),
(2, '33', '16:00', '2025-05-04 13:18:37', '2025-05-04 13:18:37'),
(3, '36', '20:00', '2025-05-04 13:19:38', '2025-05-04 13:19:38'),
(4, '35', '18:00', '2025-05-05 11:17:23', '2025-05-05 11:17:23'),
(5, '34', '16:30', '2025-05-05 11:17:37', '2025-05-05 11:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `type`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(7, 'IELTS on Computer', 'Ria Warren', '+1 (248) 391-3129', 'zuvo@mailinator.com', '2025-03-10 12:35:03', '2025-03-10 12:35:03'),
(8, 'IELTS on Paper', 'Arman Sharif', '01632109022', 'arman.p2c@gmail.com', '2025-03-10 13:08:22', '2025-03-10 13:08:22'),
(9, 'A/O Exam', 'Arman Sharif', '01632109022', 'arman.p2c@gmail.com', '2025-03-17 08:36:03', '2025-03-17 08:36:03'),
(10, 'IELTS on Computer', 'Md Shozibul Islam', '01717081549', 'shozib2011@gmail.com', '2025-04-17 10:29:32', '2025-04-17 10:29:32'),
(11, 'IELTS on Computer', 'Md Shozibul Islam', '01717081549', 'shozib2011@gmail.com', '2025-05-07 10:24:54', '2025-05-07 10:24:54'),
(12, 'IELTS on Computer', 'rkmuxmojsj', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:16', '2025-07-30 18:53:16'),
(13, 'IELTS on Computer', 'udzqvkiyxm', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:16', '2025-07-30 18:53:16'),
(14, 'IELTS on Computer', 'hwfzngkgvk', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:17', '2025-07-30 18:53:17'),
(15, 'IELTS on Computer', 'gpplfdyojo', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:17', '2025-07-30 18:53:17'),
(16, 'IELTS on Computer', 'tsqghjkngd', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:18', '2025-07-30 18:53:18'),
(17, 'IELTS on Paper', 'gmukwyfdph', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:18', '2025-07-30 18:53:18'),
(18, 'IELTS on Computer', 'iqwzdprpjt', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:18', '2025-07-30 18:53:18'),
(19, 'IELTS on Computer', 'ddpfwktglw', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:18', '2025-07-30 18:53:18'),
(20, 'IELTS on Paper', 'ldnirmhxpx', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:18', '2025-07-30 18:53:18'),
(21, 'IELTS on Paper', 'pvyvndlgdo', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:18', '2025-07-30 18:53:18'),
(22, 'IELTS on Computer', 'ugjttxwwni', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:19', '2025-07-30 18:53:19'),
(23, 'IELTS on Paper', 'gxqekripsj', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:19', '2025-07-30 18:53:19'),
(24, 'IELTS on Paper', 'rpukhynnof', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:19', '2025-07-30 18:53:19'),
(25, 'A/O Exam', 'hsvijefpom', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:19', '2025-07-30 18:53:19'),
(26, 'IELTS on Paper', 'zwkrkpowwq', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:20', '2025-07-30 18:53:20'),
(27, 'IELTS on Paper', 'kloeeluuiy', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:20', '2025-07-30 18:53:20'),
(28, 'IELTS on Paper', 'nvqkrqilmf', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:20', '2025-07-30 18:53:20'),
(29, 'A/O Exam', 'yroegusqjz', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:20', '2025-07-30 18:53:20'),
(30, 'A/O Exam', 'htkltsyzzt', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:21', '2025-07-30 18:53:21'),
(31, 'A/O Exam', 'fkyetuglwh', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:21', '2025-07-30 18:53:21'),
(32, 'A/O Exam', 'lppestgpjy', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:21', '2025-07-30 18:53:21'),
(33, 'A/O Exam', 'iqkjxxvqks', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:21', '2025-07-30 18:53:21'),
(34, 'A/O Exam', 'utewqqwunu', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:22', '2025-07-30 18:53:22'),
(35, 'A/O Exam', 'rxowxvjzrq', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:22', '2025-07-30 18:53:22'),
(36, 'IELTS on Computer', 'derujdjgjj', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:54:22', '2025-07-30 18:54:22'),
(37, 'IELTS on Computer', 'wsnhylpiqp', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:54:23', '2025-07-30 18:54:23'),
(38, 'IELTS on Computer', 'kzgluhtufv', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:54:23', '2025-07-30 18:54:23'),
(39, 'IELTS on Computer', 'vgggzeepsj', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:54:24', '2025-07-30 18:54:24'),
(40, 'IELTS on Paper', 'quynlhrnhn', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:54:26', '2025-07-30 18:54:26'),
(41, 'IELTS on Paper', 'tkvvxhtwqm', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:54:27', '2025-07-30 18:54:27'),
(42, 'IELTS on Paper', 'wpwsoelpil', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:54:27', '2025-07-30 18:54:27'),
(43, 'IELTS on Paper', 'rvhvkrsyqv', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:54:28', '2025-07-30 18:54:28'),
(44, 'A/O Exam', 'sgmkqhjiik', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:54:30', '2025-07-30 18:54:30'),
(45, 'A/O Exam', 'odpfhodyud', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:54:30', '2025-07-30 18:54:30'),
(46, 'A/O Exam', 'wuwppzkwok', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:54:31', '2025-07-30 18:54:31'),
(47, 'A/O Exam', 'neqdptwyzq', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:54:32', '2025-07-30 18:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `course_id`, `title`, `created_at`, `updated_at`) VALUES
(2, '2', '6 full Mocktest', '2025-03-04 11:52:24', '2025-03-04 11:52:24'),
(3, '2', '8 Partial mocktest', '2025-03-04 11:52:31', '2025-03-04 11:52:31'),
(4, '2', '24 Class', '2025-03-04 11:52:37', '2025-03-04 11:52:37'),
(5, '2', '6 full Mocktest', '2025-03-04 11:52:44', '2025-03-04 11:52:44'),
(6, '2', '8 Partial mocktest', '2025-03-04 11:52:50', '2025-03-04 11:52:50'),
(16, '14', 'Durantion 1 year', '2025-04-12 14:22:28', '2025-04-12 14:22:28'),
(17, '14', 'Semester : 3', '2025-04-12 14:22:44', '2025-04-12 14:22:44'),
(18, '5', 'Course Duration: 1 Month', '2025-04-12 14:32:26', '2025-04-12 14:32:26'),
(19, '5', '24 Classes', '2025-04-12 14:36:45', '2025-04-12 14:36:45'),
(20, '5', '6 Full Mock Tests', '2025-04-12 14:36:54', '2025-04-12 14:36:54'),
(21, '5', '8 partial Mock Tests', '2025-04-12 14:37:04', '2025-04-12 14:37:04'),
(22, '5', 'Customized Course Materials', '2025-04-12 14:37:14', '2025-04-12 14:37:14'),
(23, '5', '1 Set Book, E-library', '2025-04-12 14:37:23', '2025-04-12 14:37:23'),
(24, '5', 'Unlimited Practice Session', '2025-04-12 14:37:36', '2025-04-12 14:37:36'),
(25, '6', 'Course Duration:  1 Month', '2025-04-12 14:39:08', '2025-04-12 14:39:08'),
(26, '6', '36 Classes', '2025-04-12 14:39:23', '2025-04-12 14:39:23'),
(27, '6', '3 Full Mock Tests', '2025-04-12 14:39:31', '2025-04-12 14:39:31'),
(28, '6', '4 partial Mock Tests', '2025-04-12 14:39:40', '2025-04-12 14:39:40'),
(29, '6', 'Customized Course Materials', '2025-04-12 14:39:49', '2025-04-12 14:39:49'),
(30, '6', '1 Set Book, E-library', '2025-04-12 14:39:59', '2025-04-12 14:39:59'),
(31, '6', 'Unlimited Practice Session', '2025-04-12 14:40:08', '2025-04-12 14:40:08'),
(32, '7', 'Course Duration: 2.5 Months', '2025-04-12 14:40:29', '2025-04-12 14:40:29'),
(33, '7', '36 Classes', '2025-04-12 14:40:37', '2025-04-12 14:40:37'),
(34, '7', '3 Full Mock Tests', '2025-04-12 14:40:45', '2025-04-12 14:40:45'),
(35, '7', '4 partial Mock Tests', '2025-04-12 14:40:53', '2025-04-12 14:40:53'),
(36, '7', 'Customized Course Materials', '2025-04-12 14:41:02', '2025-04-12 14:41:02'),
(37, '7', '1 Set Book, E-library', '2025-04-12 14:41:17', '2025-04-12 14:41:17'),
(39, '7', 'Unlimited Practice Session', '2025-04-12 14:41:45', '2025-04-12 14:41:45'),
(40, '8', 'Course Duration: 2 Months', '2025-04-12 14:42:11', '2025-04-12 14:42:11'),
(41, '8', '36 Classes', '2025-04-12 14:42:18', '2025-04-12 14:42:18'),
(42, '8', '3 Full Mock Tests', '2025-04-12 14:42:26', '2025-04-12 14:42:26'),
(43, '8', '4 partial Mock Tests', '2025-04-12 14:42:33', '2025-04-12 14:42:33'),
(44, '8', 'Customized Course Materials', '2025-04-12 14:42:41', '2025-04-12 14:42:41'),
(45, '8', '1 Set Book, E-library', '2025-04-12 14:42:49', '2025-04-12 14:42:49'),
(46, '8', 'Unlimited Practice Session', '2025-04-12 14:42:59', '2025-04-12 14:42:59'),
(47, '9', 'Course Duration: 3 Months', '2025-04-12 14:43:21', '2025-04-12 14:43:21'),
(48, '9', '36 Classes', '2025-04-12 14:43:30', '2025-04-12 14:43:30'),
(49, '9', '3 Full Mock Tests', '2025-04-12 14:43:39', '2025-04-12 14:43:39'),
(50, '9', '4 partial Mock Tests', '2025-04-12 14:43:47', '2025-04-12 14:43:47'),
(51, '9', 'Customized Course Materials', '2025-04-12 14:43:56', '2025-04-12 14:43:56'),
(52, '9', '1 Set Book, E-library', '2025-04-12 14:44:03', '2025-04-12 14:44:03'),
(53, '9', 'Unlimited Practice Session', '2025-04-12 14:44:11', '2025-04-12 14:44:11'),
(54, '10', 'Course Duration: 2 Months', '2025-04-12 14:44:36', '2025-04-12 14:44:36'),
(55, '10', '24 Classes', '2025-04-12 14:44:44', '2025-04-12 14:44:44'),
(56, '10', '3 Full Mock Tests', '2025-04-12 14:44:52', '2025-04-12 14:44:52'),
(57, '10', '4 partial Mock Tests', '2025-04-12 14:45:08', '2025-04-12 14:45:08'),
(58, '10', 'Customized Course Materials', '2025-04-12 14:45:21', '2025-04-12 14:45:21'),
(59, '10', '1 Set Book, E-library', '2025-04-12 14:45:30', '2025-04-12 14:45:30'),
(60, '10', 'Unlimited Practice Session', '2025-04-12 14:45:38', '2025-04-12 14:45:38'),
(61, '12', 'Duration: 2 Months', '2025-04-12 14:46:52', '2025-04-12 14:46:52'),
(62, '12', 'Input Sessions: 24', '2025-04-12 14:47:05', '2025-04-12 14:47:05'),
(63, '12', 'Areas To Improve: Grammar, Presentation, Pronunciation, Vocabulary, Listening, Reading, Writing & Speaking', '2025-04-12 14:47:23', '2025-04-12 14:47:23'),
(64, '12', 'Chat Club, Movie Club', '2025-04-12 14:47:31', '2025-04-12 14:47:31'),
(65, '11', 'Duration: 2 Months', '2025-04-12 14:48:09', '2025-04-12 14:48:09'),
(66, '11', 'Input Sessions: 24', '2025-04-12 14:48:18', '2025-04-12 14:48:18'),
(67, '11', 'Areas To Improve: Grammar, Presentation, Pronunciation, Vocabulary, Listening, Reading, Writing & Speaking', '2025-04-12 14:48:27', '2025-04-12 14:48:27'),
(68, '11', 'Chat Club, Movie Club', '2025-04-12 14:48:36', '2025-04-12 14:48:36'),
(69, '13', 'Followed by Cambridge English', '2025-04-12 14:49:34', '2025-04-12 14:49:34'),
(70, '13', 'Duration: 1 Year', '2025-04-12 14:49:49', '2025-04-12 14:49:49'),
(71, '13', 'Semesters: 3', '2025-04-12 14:50:00', '2025-04-12 14:50:00'),
(72, '13', '3 Days In A Week', '2025-04-12 14:50:08', '2025-04-12 14:50:08'),
(73, '13', 'Monthly Payment', '2025-04-12 14:50:17', '2025-04-12 14:50:17'),
(74, '13', 'Age Group: 5-8 Years old', '2025-04-12 14:50:48', '2025-04-12 14:50:48'),
(75, '13', 'Cambridge Curriculum Course Materials', '2025-04-12 14:50:59', '2025-04-12 14:50:59'),
(76, '13', 'Interactive & Engaging Classroom Environment', '2025-04-12 14:51:08', '2025-04-12 14:51:08'),
(77, '14', '3 Days In A Week', '2025-04-12 14:51:34', '2025-04-12 14:51:34'),
(78, '14', 'Monthly Payment', '2025-04-12 14:51:42', '2025-04-12 14:51:42'),
(79, '14', 'Age Group: 9-12 Years old', '2025-04-12 14:51:49', '2025-04-12 14:51:49'),
(80, '14', 'Cambridge Curriculum Course Materials', '2025-04-12 14:51:58', '2025-04-12 14:51:58'),
(81, '14', 'Interactive & Engaging', '2025-04-12 14:52:07', '2025-04-12 14:52:07'),
(82, '14', 'Classroom Environment', '2025-04-12 14:52:21', '2025-04-12 14:52:21'),
(83, '14', 'Library', '2025-04-12 14:52:28', '2025-04-12 14:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `ielts_registrations`
--

CREATE TABLE `ielts_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `passport_exp_date` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `country_for_apply` varchar(255) DEFAULT NULL,
  `year_studied_english` varchar(255) DEFAULT NULL,
  `test_type` varchar(255) DEFAULT NULL,
  `test_date` varchar(255) DEFAULT NULL,
  `test_venue` varchar(255) DEFAULT NULL,
  `test_format` varchar(255) DEFAULT NULL,
  `passport_nid_image` varchar(255) DEFAULT NULL,
  `guardian_name` varchar(255) DEFAULT NULL,
  `guardian_dob` varchar(255) DEFAULT NULL,
  `guardian_email` varchar(255) DEFAULT NULL,
  `guardian_phone` varchar(255) DEFAULT NULL,
  `guardian_passport_nid` varchar(255) DEFAULT NULL,
  `guardian_passport_exp_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ielts_registrations`
--

INSERT INTO `ielts_registrations` (`id`, `first_name`, `last_name`, `dob`, `passport_number`, `passport_exp_date`, `nid`, `email`, `phone`, `occupation`, `country_for_apply`, `year_studied_english`, `test_type`, `test_date`, `test_venue`, `test_format`, `passport_nid_image`, `guardian_name`, `guardian_dob`, `guardian_email`, `guardian_phone`, `guardian_passport_nid`, `guardian_passport_exp_date`, `created_at`, `updated_at`) VALUES
(8, 'Lael', 'Patton', '2005-01-21', '639', '1984-12-26', '349', 'mahebyvi@mailinator.com', '+1 (948) 833-5629', 'Aliqua Dolore lauda', 'New Zeland', '2019', 'IELTS Life Skills', '1989-10-19', 'A/0 Exam', NULL, NULL, 'Scarlett Molina', '1974-04-30', 'wyhijygam@mailinator.com', '+1 (436) 606-7117', '896', '2004-02-21', '2025-03-13 10:51:06', '2025-03-13 10:51:06'),
(9, 'Lucian', 'Sharpe', '2009-06-27', '461', '2008-03-19', '732', 'dopikahov@mailinator.com', '+1 (907) 897-6633', 'Adipisicing similiqu', 'Ireland', '1986', 'General Training', '1978-08-20', 'A/0 Exam', NULL, NULL, 'Brody Frost', '1986-04-03', 'puxir@mailinator.com', '+1 (699) 445-6227', '863', '1997-01-01', '2025-04-06 12:30:22', '2025-04-08 08:50:30'),
(10, 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe lexiconeltc.com', 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe lexiconeltc.com', '10/08/1980', 's56fpj$8pZN', 's56fpj$8pZN', 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe #hostname', 'nomin.momin+408m9@mail.ru', '81516658196', 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe lexiconeltc.com', 'Germany', 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe #hostname', 'General Training', NULL, 'A/0 Exam', NULL, NULL, 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe lexiconeltc.com', NULL, 'nomin.momin+408m9@mail.ru', '88761386937', 's56fpj$8pZN', 's56fpj$8pZN', '2025-07-24 20:37:23', '2025-07-24 20:37:23'),
(11, 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe lexiconeltc.com', 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe lexiconeltc.com', '10/08/1980', 's56fpj$8pZN', 's56fpj$8pZN', 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe #hostname', 'nomin.momin+396e3@mail.ru', '86361421715', 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe lexiconeltc.com', 'Germany', 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe #hostname', 'General Training', NULL, 'A/0 Exam', NULL, NULL, 'Mfuehudwj hiwjswdwidjwidji jdiwjswihdfeufhiwj ijdiwjwihdiwkdoq jiwjdwidjwifjei jwdodkwofjiehiehgiejdiw jifjeifjeifwkfijrghis kwoskowfiejifefefefe lexiconeltc.com', NULL, 'nomin.momin+396e3@mail.ru', '84691321313', 's56fpj$8pZN', 's56fpj$8pZN', '2025-07-31 01:15:14', '2025-07-31 01:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `lexiflies`
--

CREATE TABLE `lexiflies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `lexiflycountry_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lexiflies`
--

INSERT INTO `lexiflies` (`id`, `type`, `country`, `university`, `lexiflycountry_id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, NULL, '3', 'Kessie Morin', '+1 (885) 263-6367', 'masehyfo@mailinator.com', '2025-03-11 12:10:37', '2025-03-11 12:10:37'),
(4, NULL, NULL, NULL, '2', 'Shafira Gray', '+1 (553) 451-6842', 'luwicitenu@mailinator.com', '2025-03-11 12:10:44', '2025-03-11 12:10:44'),
(5, 'Higher Education', 'Canada', 'Alexa Mullen', NULL, 'Whitney Lara', '+1 (959) 441-1569', 'jyfoh@mailinator.com', '2025-05-05 14:10:08', '2025-05-05 14:10:08'),
(6, 'Higher Education', 'United Kingdom', 'Brittany Hewitt', NULL, 'Shakib hossain Shovon', '01705140659', 'info@metacademy.com', '2025-05-13 14:27:20', '2025-05-13 14:27:20'),
(7, 'Immigration', 'Australia', 'Shea Shaffer', NULL, 'Shakib hossain Shovon', '01703584483', 'info@mangrovevalley.com', '2025-05-13 14:30:18', '2025-05-13 14:30:18'),
(8, 'Higher Education', 'United States of America', 'Choose', NULL, 'fomviylqzi', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:31', '2025-07-30 18:53:31'),
(9, 'Higher Education', 'United States of America', 'Choose', NULL, 'klruojxtpg', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:31', '2025-07-30 18:53:31'),
(10, 'Higher Education', 'Canada', 'Choose', NULL, 'tjvqwyvutg', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:32', '2025-07-30 18:53:32'),
(11, 'Higher Education', 'Canada', 'Choose', NULL, 'tqwkysltpr', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:33', '2025-07-30 18:53:33'),
(12, 'Higher Education', 'United States of America', 'Choose', NULL, 'dhkxggkskv', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:33', '2025-07-30 18:53:33'),
(13, 'Higher Education', 'United States of America', 'Choose', NULL, 'otjlzwqmfj', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:33', '2025-07-30 18:53:33'),
(14, 'Higher Education', 'United States of America', 'Choose', NULL, 'ifuleshlvq', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:33', '2025-07-30 18:53:33'),
(15, 'Higher Education', 'United States of America', 'Choose', NULL, 'grqilxzjzk', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:34', '2025-07-30 18:53:34'),
(16, 'Higher Education', 'Australia', 'Choose', NULL, 'myxzlotinf', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:34', '2025-07-30 18:53:34'),
(17, 'Higher Education', 'Canada', 'Choose', NULL, 'prwmnupfwi', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:34', '2025-07-30 18:53:34'),
(18, 'Higher Education', 'Australia', 'Choose', NULL, 'jdfhomxexh', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:35', '2025-07-30 18:53:35'),
(19, 'Higher Education', 'Canada', 'Choose', NULL, 'liqwshojql', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:35', '2025-07-30 18:53:35'),
(20, 'Higher Education', 'United States of America', 'Choose', NULL, 'rgvexqwlpq', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:35', '2025-07-30 18:53:35'),
(21, 'Higher Education', 'Australia', 'Choose', NULL, 'keerfhgtwk', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:36', '2025-07-30 18:53:36'),
(22, 'Higher Education', 'Canada', 'Choose', NULL, 'ydomkntrik', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:36', '2025-07-30 18:53:36'),
(23, 'Higher Education', 'Australia', 'Choose', NULL, 'pflfiokgsj', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:36', '2025-07-30 18:53:36'),
(24, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'zvrwtntvvt', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:36', '2025-07-30 18:53:36'),
(25, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'mlzpdtuofk', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:36', '2025-07-30 18:53:36'),
(26, 'Higher Education', 'United States of America', 'Choose', NULL, 'mkihtxevxq', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:36', '2025-07-30 18:53:36'),
(27, 'Higher Education', 'Canada', 'Choose', NULL, 'xxoxpgirvg', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:37', '2025-07-30 18:53:37'),
(28, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'onguuponuw', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:37', '2025-07-30 18:53:37'),
(29, 'Higher Education', 'Ireland', 'Choose', NULL, 'vsrwyzymrg', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:38', '2025-07-30 18:53:38'),
(30, 'Higher Education', 'Canada', 'Choose', NULL, 'zlouhtiylu', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:38', '2025-07-30 18:53:38'),
(31, 'Higher Education', 'Canada', 'Choose', NULL, 'znvkmfvohx', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:38', '2025-07-30 18:53:38'),
(32, 'Higher Education', 'Australia', 'Choose', NULL, 'tjynzzdwsh', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:38', '2025-07-30 18:53:38'),
(33, 'Higher Education', 'Ireland', 'Choose', NULL, 'qupiditvtx', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:39', '2025-07-30 18:53:39'),
(34, 'Higher Education', 'Ireland', 'Choose', NULL, 'utvnutjsiu', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:39', '2025-07-30 18:53:39'),
(35, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'kopmeiofjo', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:39', '2025-07-30 18:53:39'),
(36, 'Immigration', 'Australia', 'Choose', NULL, 'tohqvntvqm', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:39', '2025-07-30 18:53:39'),
(37, 'Higher Education', 'Australia', 'Choose', NULL, 'nszuxuphmt', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:39', '2025-07-30 18:53:39'),
(38, 'Higher Education', 'Australia', 'Choose', NULL, 'gwidumqski', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:40', '2025-07-30 18:53:40'),
(39, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'qhnhlgkqgj', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:40', '2025-07-30 18:53:40'),
(40, 'Higher Education', 'Australia', 'Choose', NULL, 'trmlrewziv', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:40', '2025-07-30 18:53:40'),
(41, 'Immigration', 'Australia', 'Choose', NULL, 'nxwqtmyhss', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:40', '2025-07-30 18:53:40'),
(42, 'Immigration', 'Australia', 'Choose', NULL, 'zoneukwdxo', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:40', '2025-07-30 18:53:40'),
(43, 'Higher Education', 'New Zealand', 'Choose', NULL, 'geexolmydh', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:41', '2025-07-30 18:53:41'),
(44, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'nudwtqvymf', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:41', '2025-07-30 18:53:41'),
(45, 'Higher Education', 'Ireland', 'Choose', NULL, 'hknowqgksi', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:41', '2025-07-30 18:53:41'),
(46, 'Higher Education', 'Ireland', 'Choose', NULL, 'rnffsgtjdu', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:42', '2025-07-30 18:53:42'),
(47, 'Higher Education', 'New Zealand', 'Choose', NULL, 'rftnhykplh', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:42', '2025-07-30 18:53:42'),
(48, 'Higher Education', 'New Zealand', 'Choose', NULL, 'hheykinedp', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:42', '2025-07-30 18:53:42'),
(49, 'Immigration', 'Canada', 'Choose', NULL, 'hlgthxngou', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:42', '2025-07-30 18:53:42'),
(50, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'qsthfseokv', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:42', '2025-07-30 18:53:42'),
(51, 'Higher Education', 'Ireland', 'Choose', NULL, 'ozdwpstlqs', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:43', '2025-07-30 18:53:43'),
(52, 'Immigration', 'Australia', 'Choose', NULL, 'hxrzutsdml', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:43', '2025-07-30 18:53:43'),
(53, 'Immigration', 'Australia', 'Choose', NULL, 'fyyyfrihkh', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:43', '2025-07-30 18:53:43'),
(54, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'eplfmhwxxh', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:43', '2025-07-30 18:53:43'),
(55, 'Immigration', 'Canada', 'Choose', NULL, 'pzskiyutxi', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:43', '2025-07-30 18:53:43'),
(56, 'Immigration', 'Canada', 'Choose', NULL, 'dinjldgliy', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:43', '2025-07-30 18:53:43'),
(57, 'Immigration', 'Australia', 'Choose', NULL, 'heowljlmru', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:44', '2025-07-30 18:53:44'),
(58, 'Higher Education', 'Ireland', 'Choose', NULL, 'felvrgqfqh', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:45', '2025-07-30 18:53:45'),
(59, 'Higher Education', 'Ireland', 'Choose', NULL, 'ghkznuvddf', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:45', '2025-07-30 18:53:45'),
(60, 'Higher Education', 'New Zealand', 'Choose', NULL, 'nwmmdsqtvu', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:45', '2025-07-30 18:53:45'),
(61, 'Higher Education', 'New Zealand', 'Choose', NULL, 'xhujmqfxlz', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:46', '2025-07-30 18:53:46'),
(62, 'Higher Education', 'New Zealand', 'Choose', NULL, 'jdmlfwsyuw', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:46', '2025-07-30 18:53:46'),
(63, 'Immigration', 'Australia', 'Choose', NULL, 'iowkrteqku', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:46', '2025-07-30 18:53:46'),
(64, 'Immigration', 'Canada', 'Choose', NULL, 'lntfvjjdys', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:47', '2025-07-30 18:53:47'),
(65, 'Immigration', 'Canada', 'Choose', NULL, 'imkextfdds', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:47', '2025-07-30 18:53:47'),
(66, 'Immigration', 'Australia', 'Choose', NULL, 'rvzqhuiyik', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:48', '2025-07-30 18:53:48'),
(67, 'Higher Education', 'New Zealand', 'Choose', NULL, 'sipfulqwud', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:48', '2025-07-30 18:53:48'),
(68, 'Immigration', 'Canada', 'Choose', NULL, 'iutzutqwem', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:49', '2025-07-30 18:53:49'),
(69, 'Higher Education', 'New Zealand', 'Choose', NULL, 'xftzuehugq', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:49', '2025-07-30 18:53:49'),
(70, 'Immigration', 'Canada', 'Choose', NULL, 'mqdhkwytwg', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:49', '2025-07-30 18:53:49'),
(71, 'Immigration', 'Canada', 'Choose', NULL, 'isqfisihhv', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:51', '2025-07-30 18:53:51'),
(72, 'Higher Education', 'United States of America', 'Choose', NULL, 'dpepmtmkzr', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:54:55', '2025-07-30 18:54:55'),
(73, 'Higher Education', 'United States of America', 'Choose', NULL, 'tmxvfljtes', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:54:56', '2025-07-30 18:54:56'),
(74, 'Higher Education', 'United States of America', 'Choose', NULL, 'ootmyfytwo', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:54:56', '2025-07-30 18:54:56'),
(75, 'Higher Education', 'Canada', 'Choose', NULL, 'fjvjxogxvl', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:54:59', '2025-07-30 18:54:59'),
(76, 'Higher Education', 'Canada', 'Choose', NULL, 'dzjlyzpwfh', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:55:04', '2025-07-30 18:55:04'),
(77, 'Higher Education', 'United States of America', 'Choose', NULL, 'kopjonyjyh', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:55:05', '2025-07-30 18:55:05'),
(78, 'Higher Education', 'Canada', 'Choose', NULL, 'uznrvmjhje', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:55:05', '2025-07-30 18:55:05'),
(79, 'Higher Education', 'Australia', 'Choose', NULL, 'tfnuylmpnv', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:55:07', '2025-07-30 18:55:07'),
(80, 'Higher Education', 'Australia', 'Choose', NULL, 'ijloghtxgp', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:55:11', '2025-07-30 18:55:11'),
(81, 'Higher Education', 'Australia', 'Choose', NULL, 'zggpxudnko', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:55:11', '2025-07-30 18:55:11'),
(82, 'Higher Education', 'Canada', 'Choose', NULL, 'uzohoirqgn', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:55:11', '2025-07-30 18:55:11'),
(83, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'zdhjfooymm', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:55:12', '2025-07-30 18:55:12'),
(84, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'eneifrkxkz', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:55:15', '2025-07-30 18:55:15'),
(85, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'usjlydmgev', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:55:15', '2025-07-30 18:55:15'),
(86, 'Higher Education', 'Australia', 'Choose', NULL, 'nyyitwnprm', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:55:16', '2025-07-30 18:55:16'),
(87, 'Higher Education', 'Ireland', 'Choose', NULL, 'oiysnmvtlx', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:55:17', '2025-07-30 18:55:17'),
(88, 'Higher Education', 'Ireland', 'Choose', NULL, 'qxfuddxepi', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:55:19', '2025-07-30 18:55:19'),
(89, 'Higher Education', 'Ireland', 'Choose', NULL, 'rnivgjelgh', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:55:20', '2025-07-30 18:55:20'),
(90, 'Higher Education', 'United Kingdom', 'Choose', NULL, 'mdqeuxqdrh', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:55:20', '2025-07-30 18:55:20'),
(91, 'Immigration', 'Australia', 'Choose', NULL, 'quimhyvvnf', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:55:21', '2025-07-30 18:55:21'),
(92, 'Immigration', 'Australia', 'Choose', NULL, 'zepfjhsooh', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:55:23', '2025-07-30 18:55:23'),
(93, 'Immigration', 'Australia', 'Choose', NULL, 'rtfkhrmyhh', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:55:24', '2025-07-30 18:55:24'),
(94, 'Higher Education', 'Ireland', 'Choose', NULL, 'xqtiynetix', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:55:24', '2025-07-30 18:55:24'),
(95, 'Higher Education', 'New Zealand', 'Choose', NULL, 'iryohqsrkd', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:55:25', '2025-07-30 18:55:25'),
(96, 'Higher Education', 'New Zealand', 'Choose', NULL, 'zxrkjkoizr', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:55:27', '2025-07-30 18:55:27'),
(97, 'Higher Education', 'New Zealand', 'Choose', NULL, 'tktopeyydg', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:55:28', '2025-07-30 18:55:28'),
(98, 'Immigration', 'Australia', 'Choose', NULL, 'lkzxyqnule', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:55:28', '2025-07-30 18:55:28'),
(99, 'Immigration', 'Canada', 'Choose', NULL, 'vdhlqpwwyg', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:55:30', '2025-07-30 18:55:30'),
(100, 'Immigration', 'Canada', 'Choose', NULL, 'rsmvjmyiee', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:55:32', '2025-07-30 18:55:32'),
(101, 'Immigration', 'Canada', 'Choose', NULL, 'hletnqisre', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:55:32', '2025-07-30 18:55:32'),
(102, 'Higher Education', 'New Zealand', 'Choose', NULL, 'eiefeqvyjf', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:55:32', '2025-07-30 18:55:32'),
(103, 'Immigration', 'Canada', 'Choose', NULL, 'vqskdjjpzy', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:55:36', '2025-07-30 18:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `lexifly_countries`
--

CREATE TABLE `lexifly_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lexifly_countries`
--

INSERT INTO `lexifly_countries` (`id`, `type`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Immigration', 'Canada', 'image1741676738.png', '2025-03-11 10:56:47', '2025-03-11 11:05:38'),
(2, 'Higher Education', 'New Zealand', 'image1741676774.png', '2025-03-11 11:00:22', '2025-03-11 11:06:14'),
(3, 'Immigration', 'Australia', 'image1741676727.png', '2025-03-11 11:05:27', '2025-03-11 11:05:27'),
(4, 'Higher Education', 'Ireland', 'image1741676789.png', '2025-03-11 11:06:29', '2025-03-11 11:06:29'),
(5, 'Higher Education', 'United Kingdom', 'image1741676817.png', '2025-03-11 11:06:57', '2025-03-11 11:06:57'),
(6, 'Higher Education', 'Australia', 'image1741676830.png', '2025-03-11 11:07:10', '2025-03-11 11:07:10'),
(7, 'Higher Education', 'Canada', 'image1741676844.png', '2025-03-11 11:07:24', '2025-03-11 11:07:24'),
(8, 'Higher Education', 'United States of America', 'image1741676858.png', '2025-03-11 11:07:38', '2025-03-11 11:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `lexifly_country_universities`
--

CREATE TABLE `lexifly_country_universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lexiflycountry_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lexifly_country_universities`
--

INSERT INTO `lexifly_country_universities` (`id`, `lexiflycountry_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '7', 'Alexa Mullen', '2025-04-15 10:54:30', '2025-04-15 10:54:30'),
(2, '6', 'Linus Cameron', '2025-04-15 10:55:32', '2025-04-15 10:55:32'),
(4, '6', 'Raphael Abbott', '2025-04-15 10:55:39', '2025-04-15 10:55:39'),
(5, '8', 'Madison Montgomery', '2025-05-05 13:53:10', '2025-05-05 13:53:10'),
(6, '8', 'Tanek Lowe', '2025-05-05 13:53:13', '2025-05-05 13:53:13'),
(7, '5', 'Susan Booker', '2025-05-05 13:53:28', '2025-05-05 13:53:28'),
(8, '5', 'Brittany Hewitt', '2025-05-05 13:53:31', '2025-05-05 13:53:31'),
(9, '4', 'Sade Ramirez', '2025-05-05 13:53:37', '2025-05-05 13:53:37'),
(10, '4', 'Derek Sutton', '2025-05-05 13:53:40', '2025-05-05 13:53:40'),
(11, '2', 'Burton Martinez', '2025-05-05 13:53:45', '2025-05-05 13:53:45'),
(12, '2', 'Xaviera Harding', '2025-05-05 13:53:48', '2025-05-05 13:53:48'),
(13, '3', 'Hu Black', '2025-05-05 13:56:12', '2025-05-05 13:56:12'),
(14, '3', 'Shea Shaffer', '2025-05-05 13:56:15', '2025-05-05 13:56:15'),
(15, '3', 'Roanna Valdez', '2025-05-05 13:56:17', '2025-05-05 13:56:17'),
(16, '1', 'Chanda Pratt', '2025-05-05 13:57:10', '2025-05-05 13:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `listens`
--

CREATE TABLE `listens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `lq1` varchar(255) DEFAULT NULL,
  `la1` varchar(20) DEFAULT NULL,
  `lq2` varchar(255) DEFAULT NULL,
  `la2` varchar(20) DEFAULT NULL,
  `lq3` varchar(255) DEFAULT NULL,
  `la3` varchar(20) DEFAULT NULL,
  `lq4` varchar(255) DEFAULT NULL,
  `la4` varchar(20) DEFAULT NULL,
  `lq5` varchar(255) DEFAULT NULL,
  `la5` varchar(20) DEFAULT NULL,
  `lq6` varchar(255) DEFAULT NULL,
  `la6` varchar(20) DEFAULT NULL,
  `lq7` varchar(255) DEFAULT NULL,
  `la7` varchar(20) DEFAULT NULL,
  `lq8` varchar(255) DEFAULT NULL,
  `la8` varchar(20) DEFAULT NULL,
  `lq9` varchar(255) DEFAULT NULL,
  `la9` varchar(20) DEFAULT NULL,
  `lq10` varchar(255) DEFAULT NULL,
  `la10` varchar(20) DEFAULT NULL,
  `lq11` varchar(255) DEFAULT NULL,
  `la11` varchar(20) DEFAULT NULL,
  `lq12` varchar(255) DEFAULT NULL,
  `la12` varchar(20) DEFAULT NULL,
  `lq13` varchar(255) DEFAULT NULL,
  `la13` varchar(20) DEFAULT NULL,
  `lq14` varchar(255) DEFAULT NULL,
  `la14` varchar(20) DEFAULT NULL,
  `lq15` varchar(255) DEFAULT NULL,
  `la15` varchar(20) DEFAULT NULL,
  `lq16` varchar(255) DEFAULT NULL,
  `la16` varchar(20) DEFAULT NULL,
  `lq17` varchar(255) DEFAULT NULL,
  `la17` varchar(20) DEFAULT NULL,
  `lq18` varchar(255) DEFAULT NULL,
  `la18` varchar(20) DEFAULT NULL,
  `lq19` varchar(255) DEFAULT NULL,
  `la19` varchar(20) DEFAULT NULL,
  `lq20` varchar(255) DEFAULT NULL,
  `la20` varchar(20) DEFAULT NULL,
  `lq21` varchar(255) DEFAULT NULL,
  `la21` varchar(20) DEFAULT NULL,
  `lq22` varchar(255) DEFAULT NULL,
  `la22` varchar(20) DEFAULT NULL,
  `lq23` varchar(255) DEFAULT NULL,
  `la23` varchar(20) DEFAULT NULL,
  `lq24` varchar(255) DEFAULT NULL,
  `la24` varchar(20) DEFAULT NULL,
  `lq25` varchar(255) DEFAULT NULL,
  `la25` varchar(20) DEFAULT NULL,
  `lq26` varchar(255) DEFAULT NULL,
  `la26` varchar(20) DEFAULT NULL,
  `lq27` varchar(255) DEFAULT NULL,
  `la27` varchar(20) DEFAULT NULL,
  `lq28` varchar(255) DEFAULT NULL,
  `la28` varchar(20) DEFAULT NULL,
  `lq29` varchar(255) DEFAULT NULL,
  `la29` varchar(20) DEFAULT NULL,
  `lq30` varchar(255) DEFAULT NULL,
  `la30` varchar(20) DEFAULT NULL,
  `lq31` varchar(255) DEFAULT NULL,
  `lq31o1` varchar(20) DEFAULT NULL,
  `lq31o2` varchar(20) DEFAULT NULL,
  `lq31o3` varchar(20) DEFAULT NULL,
  `la31` varchar(20) DEFAULT NULL,
  `lq32` varchar(255) DEFAULT NULL,
  `lq32o1` varchar(20) DEFAULT NULL,
  `lq32o2` varchar(20) DEFAULT NULL,
  `lq32o3` varchar(20) DEFAULT NULL,
  `la32` varchar(20) DEFAULT NULL,
  `lq33` varchar(255) DEFAULT NULL,
  `lq33o1` varchar(20) DEFAULT NULL,
  `lq33o2` varchar(20) DEFAULT NULL,
  `lq33o3` varchar(20) DEFAULT NULL,
  `la33` varchar(20) DEFAULT NULL,
  `lq34` varchar(255) DEFAULT NULL,
  `la34` varchar(20) DEFAULT NULL,
  `lq35` varchar(255) DEFAULT NULL,
  `la35` varchar(20) DEFAULT NULL,
  `lq36` varchar(255) DEFAULT NULL,
  `la36` varchar(20) DEFAULT NULL,
  `lq37` varchar(255) DEFAULT NULL,
  `la37` varchar(20) DEFAULT NULL,
  `lq38` varchar(255) DEFAULT NULL,
  `la38` varchar(20) DEFAULT NULL,
  `lq39` varchar(255) DEFAULT NULL,
  `la39` varchar(20) DEFAULT NULL,
  `lq40` varchar(255) DEFAULT NULL,
  `la40` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listens`
--

INSERT INTO `listens` (`id`, `course_id`, `lq1`, `la1`, `lq2`, `la2`, `lq3`, `la3`, `lq4`, `la4`, `lq5`, `la5`, `lq6`, `la6`, `lq7`, `la7`, `lq8`, `la8`, `lq9`, `la9`, `lq10`, `la10`, `lq11`, `la11`, `lq12`, `la12`, `lq13`, `la13`, `lq14`, `la14`, `lq15`, `la15`, `lq16`, `la16`, `lq17`, `la17`, `lq18`, `la18`, `lq19`, `la19`, `lq20`, `la20`, `lq21`, `la21`, `lq22`, `la22`, `lq23`, `la23`, `lq24`, `la24`, `lq25`, `la25`, `lq26`, `la26`, `lq27`, `la27`, `lq28`, `la28`, `lq29`, `la29`, `lq30`, `la30`, `lq31`, `lq31o1`, `lq31o2`, `lq31o3`, `la31`, `lq32`, `lq32o1`, `lq32o2`, `lq32o3`, `la32`, `lq33`, `lq33o1`, `lq33o2`, `lq33o3`, `la33`, `lq34`, `la34`, `lq35`, `la35`, `lq36`, `la36`, `lq37`, `la37`, `lq38`, `la38`, `lq39`, `la39`, `lq40`, `la40`, `created_at`, `updated_at`) VALUES
(8, '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-02 14:36:18', '2025-03-02 14:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`id`, `type`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'IELTS', 'Est aspernatur culpa', 'Beatae vel aliquid m', 'Ipsa et eu magna es', 'Ipsam dolores aliqui', 'Aspernatur velit mi', 'Aspernatur velit mi', '2025-04-07 18:01:42', '2025-04-07 18:01:42'),
(2, 'IELTS', 'Nihil ea qui aute al', 'Recusandae Do dicta', 'Fugiat unde ut conse', 'Voluptas duis laboru', 'Illo lorem dolore en', 'Fugiat unde ut conse', '2025-04-07 18:08:13', '2025-04-10 14:30:53'),
(3, 'ESL', 'Voluptas eaque exerc', 'In vel aperiam sit i', 'Explicabo Ab assume', 'Sint anim officiis a', 'Magnam culpa non et', 'In vel aperiam sit i', '2025-04-07 18:08:30', '2025-04-07 18:08:30'),
(4, 'IELTS', 'Sit vel aut ea in e', 'Laboriosam voluptat', 'Culpa ex vel deleni', 'Est aliqua Aliqua', 'Omnis tempora eiusmo', 'Culpa ex vel deleni', '2025-04-08 13:24:17', '2025-04-08 13:24:17'),
(5, 'IELTS', 'What is one possible consequence of global warming mentioned in the passage?', 'Decreased temperature', 'Rising sea levels', 'Decrease in carbon dioxide', 'Stable weather patterns', 'Rising sea levels', '2025-04-09 13:55:11', '2025-04-09 13:55:11'),
(6, 'IELTS', 'According to the passage, what is one threat to plant life?', 'Pollution', 'Deforestation', 'Overpopulation', 'Global warming', 'Deforestation', '2025-04-09 13:57:39', '2025-04-09 13:57:39'),
(7, 'IELTS', 'What is the main purpose of the IELTS test?', 'To evaluate general knowledge', 'To assess the English language proficiency of non-native speakers', 'To measure cognitive ability', 'To test technical skills in English', 'To assess the English language proficiency of non-native speakers', '2025-04-09 14:05:47', '2025-04-10 09:51:05'),
(8, 'IELTS', 'According to the passage, what is the primary reason for deforestation in the Amazon rainforest?', 'Natural disasters', 'Logging for timber', 'Urban expansion', 'Agricultural activities', 'Agricultural activities', '2025-04-10 10:40:46', '2025-04-10 10:40:46'),
(9, 'IELTS', 'What can be inferred about the writer\'s attitude toward renewable energy?', 'Skeptical', 'Neutral', 'Supportive', 'Opposed', 'Supportive', '2025-04-10 10:41:51', '2025-04-10 10:41:51'),
(10, 'IELTS', 'The professor says the Industrial Revolution began in:', 'The 17th century', 'The early 18th century', 'The late 18th century', 'The 19th century', 'The late 18th century', '2025-04-10 10:43:18', '2025-04-10 10:43:18'),
(11, 'IELTS', 'The synonym of “rapid” is:', 'Slow', 'Fast', 'Steady', 'Lazy', 'Fast', '2025-04-10 10:44:50', '2025-04-10 10:44:50'),
(12, 'IELTS', 'Complete the sentence: “If we had left earlier, we ______ the train.”', 'will catch', 'would catch', 'would have caught', 'have caught', 'would have caught', '2025-04-10 10:45:38', '2025-04-10 10:45:38'),
(13, 'IELTS', 'In the notice, it states that the gym will be closed:', 'Every weekend', 'Until further notice', 'For one day only', 'On public holidays', 'Until further notice', '2025-04-10 10:46:24', '2025-04-10 10:46:24'),
(14, 'IELTS', 'What is the correct response to: “Would you mind opening the window?”', 'Yes, I’ll do it right away.', 'Yes, I mind.', 'No, go ahead.', 'No, not at all.', 'No, not at all.', '2025-04-10 10:47:23', '2025-04-10 10:47:23'),
(15, 'IELTS', 'The word “significant” in the sentence “The study revealed significant results” most likely means:', 'Unimportant', 'Large in number', 'Meaningful', 'Easy to understand', 'Meaningful', '2025-04-10 10:48:06', '2025-04-10 10:48:06'),
(16, 'IELTS', 'If the train is delayed and you have a meeting at 9:00 a.m., what should you do?', 'Go back home', 'Inform your manager', 'Take a nap', 'Ignore it', 'Inform your manager', '2025-04-10 11:32:34', '2025-04-10 11:32:34'),
(17, 'IELTS', 'If a student fails to submit the assignment on time, what is the likely consequence?', 'They’ll get a higher grade', 'They’ll be asked to teach the class', 'They may receive a penalty', 'They’ll be exempted from future tasks', 'They may receive a penalty', '2025-04-10 11:33:25', '2025-04-10 11:33:25'),
(18, 'YLE', 'Eveniet quae dolore', 'Id est aut similiqu', 'Excepturi sit quasi', 'Illo ab facilis impe', 'Totam dignissimos al', 'Illo ab facilis impe', '2025-04-12 10:09:50', '2025-04-12 10:12:12'),
(19, 'YLE', 'Laudantium et omnis', 'Est doloremque odio', 'Labore fugiat qui qu', 'Est sed iure id exc', 'Reiciendis adipisci', 'Est doloremque odio', '2025-04-12 10:12:59', '2025-04-12 10:12:59'),
(20, 'ESL', 'What is the main purpose of the IELTS test?', 'Decreased temperature', 'Rising sea levels', 'Supportive', 'Opposed', 'Rising sea levels', '2025-05-13 15:15:09', '2025-05-13 15:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_students`
--

CREATE TABLE `mcq_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mark` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mcq_students`
--

INSERT INTO `mcq_students` (`id`, `type`, `name`, `phone`, `email`, `mark`, `total`, `created_at`, `updated_at`) VALUES
(22, 'ESL', 'Shakib hossain Shovon', '01705140659', 'info@metacademy.com', NULL, NULL, '2025-04-09 11:15:37', '2025-04-09 11:15:37'),
(23, 'IELTS', 'Shakib hossain Shovon', '01703584483', 'info@mangrovevalley.com', NULL, NULL, '2025-04-09 11:21:06', '2025-04-09 11:21:06'),
(27, 'IELTS', 'Shakib hossain Shovon', '01703584483', 'info@mangrovevalley.com', NULL, NULL, '2025-04-10 11:49:20', '2025-04-10 11:49:20'),
(29, 'IELTS', 'Shakib hossain Shovon', '01703584483', 'info@mangrovevalley.com', NULL, NULL, '2025-04-10 14:19:31', '2025-04-10 14:19:31'),
(30, 'IELTS', 'Shakib hossain Shovon', '01703584483', 'info@mangrovevalley.com', NULL, NULL, '2025-04-10 14:31:18', '2025-04-10 14:31:18'),
(31, 'YLE', 'Rakib', '01677035212', 'iamrakibulislam86@gmail.com', NULL, NULL, '2025-04-13 11:38:39', '2025-04-13 11:38:39'),
(32, 'YLE', 'MD AL HASIB RABBI', '01609026817', 'alhasibrabbi894@gmail.com', NULL, NULL, '2025-04-17 10:13:59', '2025-04-17 10:13:59'),
(33, 'IELTS', 'Eleanor Le', '+1 (473) 846-3763', 'timab@mailinator.com', NULL, NULL, '2025-05-12 14:26:26', '2025-05-12 14:26:26'),
(34, 'IELTS', 'Shakib hossain Shovon', '01705140659', 'info@metacademy.com', NULL, NULL, '2025-05-13 15:15:37', '2025-05-13 15:15:37'),
(35, 'IELTS', 'Jasmine Le', '+1 (315) 877-7992', 'xavofima@mailinator.com', NULL, NULL, '2025-05-13 15:17:27', '2025-05-13 15:17:27'),
(36, 'ESL', 'Shakib hossain Shovon', '01705140659', 'info@metacademy.com', NULL, NULL, '2025-06-17 06:14:23', '2025-06-17 06:14:23'),
(37, 'YLE', 'mvpfiyzwmj', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', NULL, NULL, '2025-07-30 18:53:22', '2025-07-30 18:53:22'),
(38, 'YLE', 'vhgdhymkiz', '+1-794-834-4968', 'skmejwkm@testform.xyz', NULL, NULL, '2025-07-30 18:53:22', '2025-07-30 18:53:22'),
(39, 'YLE', 'goremtozvv', '+1-555-956-6398', 'rlrmigol@testform.xyz', NULL, NULL, '2025-07-30 18:53:22', '2025-07-30 18:53:22'),
(40, 'YLE', 'vklhnngivi', '+1-084-668-0672', 'gnygiehf@testform.xyz', NULL, NULL, '2025-07-30 18:53:22', '2025-07-30 18:53:22'),
(41, 'YLE', 'xvoevohrxt', '+1-602-531-3502', 'gzhfpuep@testform.xyz', NULL, NULL, '2025-07-30 18:53:23', '2025-07-30 18:53:23'),
(42, 'YLE', 'okdenvwpdw', '+1-313-017-3464', 'sejquqot@testform.xyz', NULL, NULL, '2025-07-30 18:53:23', '2025-07-30 18:53:23'),
(43, 'ESL', 'hohorlyifw', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', NULL, NULL, '2025-07-30 18:53:23', '2025-07-30 18:53:23'),
(44, 'ESL', 'ytitzpdfzs', '+1-794-834-4968', 'skmejwkm@testform.xyz', NULL, NULL, '2025-07-30 18:53:24', '2025-07-30 18:53:24'),
(45, 'ESL', 'grgitpddtv', '+1-555-956-6398', 'rlrmigol@testform.xyz', NULL, NULL, '2025-07-30 18:53:24', '2025-07-30 18:53:24'),
(46, 'YLE', 'komyntotyh', '+1-569-750-0472', 'dsgyeqll@testform.xyz', NULL, NULL, '2025-07-30 18:53:24', '2025-07-30 18:53:24'),
(47, 'ESL', 'hnhoggyfry', '+1-084-668-0672', 'gnygiehf@testform.xyz', NULL, NULL, '2025-07-30 18:53:24', '2025-07-30 18:53:24'),
(48, 'ESL', 'sjypjhzvdz', '+1-602-531-3502', 'gzhfpuep@testform.xyz', NULL, NULL, '2025-07-30 18:53:24', '2025-07-30 18:53:24'),
(49, 'YLE', 'ikpxvsizvd', '+1-298-579-1178', 'vgejzdkg@testform.xyz', NULL, NULL, '2025-07-30 18:53:24', '2025-07-30 18:53:24'),
(50, 'IELTS', 'rkrpoekpyg', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', NULL, NULL, '2025-07-30 18:53:25', '2025-07-30 18:53:25'),
(51, 'IELTS', 'siesmdowzq', '+1-794-834-4968', 'skmejwkm@testform.xyz', NULL, NULL, '2025-07-30 18:53:25', '2025-07-30 18:53:25'),
(52, 'ESL', 'zrudyuptlq', '+1-313-017-3464', 'sejquqot@testform.xyz', NULL, NULL, '2025-07-30 18:53:25', '2025-07-30 18:53:25'),
(53, 'IELTS', 'ohjqdsrtvn', '+1-084-668-0672', 'gnygiehf@testform.xyz', NULL, NULL, '2025-07-30 18:53:25', '2025-07-30 18:53:25'),
(54, 'ESL', 'wgwuslzqso', '+1-569-750-0472', 'dsgyeqll@testform.xyz', NULL, NULL, '2025-07-30 18:53:25', '2025-07-30 18:53:25'),
(55, 'IELTS', 'osomivogzf', '+1-555-956-6398', 'rlrmigol@testform.xyz', NULL, NULL, '2025-07-30 18:53:25', '2025-07-30 18:53:25'),
(56, 'IELTS', 'wsshyntzps', '+1-602-531-3502', 'gzhfpuep@testform.xyz', NULL, NULL, '2025-07-30 18:53:26', '2025-07-30 18:53:26'),
(57, 'ESL', 'vmseonuxyj', '+1-298-579-1178', 'vgejzdkg@testform.xyz', NULL, NULL, '2025-07-30 18:53:26', '2025-07-30 18:53:26'),
(58, 'IELTS', 'igeklgfgmv', '+1-298-579-1178', 'vgejzdkg@testform.xyz', NULL, NULL, '2025-07-30 18:53:28', '2025-07-30 18:53:28'),
(59, 'IELTS', 'nkdsxkyyhl', '+1-569-750-0472', 'dsgyeqll@testform.xyz', NULL, NULL, '2025-07-30 18:53:28', '2025-07-30 18:53:28'),
(60, 'IELTS', 'fdderunqnf', '+1-313-017-3464', 'sejquqot@testform.xyz', NULL, NULL, '2025-07-30 18:53:29', '2025-07-30 18:53:29'),
(61, 'YLE', 'qrxtftshpg', '+1-850-623-6881', 'medyxhly@testform.xyz', NULL, NULL, '2025-07-30 18:54:34', '2025-07-30 18:54:34'),
(62, 'YLE', 'kqykdthykd', '+1-351-681-0452', 'lvjmodsn@testform.xyz', NULL, NULL, '2025-07-30 18:54:34', '2025-07-30 18:54:34'),
(63, 'YLE', 'wofglkmwfl', '+1-954-800-1183', 'kntnsdiq@testform.xyz', NULL, NULL, '2025-07-30 18:54:34', '2025-07-30 18:54:34'),
(64, 'YLE', 'vryhjwiois', '+1-147-594-6725', 'ixsefnvm@testform.xyz', NULL, NULL, '2025-07-30 18:54:35', '2025-07-30 18:54:35'),
(65, 'ESL', 'ipnlxvnqdf', '+1-850-623-6881', 'medyxhly@testform.xyz', NULL, NULL, '2025-07-30 18:54:38', '2025-07-30 18:54:38'),
(66, 'ESL', 'gizqynfndf', '+1-351-681-0452', 'lvjmodsn@testform.xyz', NULL, NULL, '2025-07-30 18:54:38', '2025-07-30 18:54:38'),
(67, 'ESL', 'uyudjjkxxg', '+1-954-800-1183', 'kntnsdiq@testform.xyz', NULL, NULL, '2025-07-30 18:54:39', '2025-07-30 18:54:39'),
(68, 'ESL', 'fpmylmyejo', '+1-147-594-6725', 'ixsefnvm@testform.xyz', NULL, NULL, '2025-07-30 18:54:40', '2025-07-30 18:54:40'),
(69, 'IELTS', 'nfrjqoutwz', '+1-850-623-6881', 'medyxhly@testform.xyz', NULL, NULL, '2025-07-30 18:54:43', '2025-07-30 18:54:43'),
(70, 'IELTS', 'ispmrskqzw', '+1-351-681-0452', 'lvjmodsn@testform.xyz', NULL, NULL, '2025-07-30 18:54:44', '2025-07-30 18:54:44'),
(71, 'IELTS', 'wgtpgnxsef', '+1-954-800-1183', 'kntnsdiq@testform.xyz', NULL, NULL, '2025-07-30 18:54:44', '2025-07-30 18:54:44'),
(72, 'IELTS', 'nyegedlyhw', '+1-147-594-6725', 'ixsefnvm@testform.xyz', NULL, NULL, '2025-07-30 18:54:48', '2025-07-30 18:54:48'),
(73, 'IELTS', 'Md. Tajibur Rahman', '01711140442', 'tajiburs.tr@gmail.com', NULL, NULL, '2025-08-01 14:39:35', '2025-08-01 14:39:35'),
(74, 'ESL', 'Md Yasin', '01941656588', 'yasin41656588@gmail.com', NULL, NULL, '2025-08-02 01:49:54', '2025-08-02 01:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2025_01_15_050154_create_writes_table', 3),
(9, '2025_01_15_125326_create_listens_table', 4),
(10, '2025_01_20_062647_create_tests_table', 5),
(11, '2025_01_20_062703_create_test_writings_table', 5),
(13, '2025_01_21_073219_create_test_listenings_table', 7),
(14, '2025_01_21_065450_create_test_readings_table', 8),
(15, '2025_03_02_094446_create_websites_table', 9),
(16, '2025_03_02_095425_create_settings_table', 10),
(17, '2025_03_03_063421_create_blogs_table', 11),
(18, '2025_03_03_071917_create_scorers_table', 12),
(19, '2025_03_03_073552_create_events_table', 13),
(20, '2025_03_03_081012_create_achievements_table', 14),
(21, '2025_03_03_082530_create_trainers_table', 15),
(22, '2025_03_04_041202_create_categories_table', 16),
(23, '2025_01_12_075650_create_courses_table', 17),
(24, '2025_03_04_063610_create_features_table', 18),
(25, '2025_03_04_081638_create_contents_table', 19),
(26, '2025_03_04_085845_create_exam_dates_table', 20),
(27, '2025_03_06_043253_create_ielts_registrations_table', 21),
(28, '2025_03_06_050357_create_placements_table', 22),
(29, '2025_03_10_075212_create_contacts_table', 23),
(30, '2025_03_10_082436_create_exam_types_table', 24),
(31, '2025_03_11_053722_create_testimonials_table', 25),
(32, '2025_03_11_064147_create_lexifly_countries_table', 26),
(33, '2025_03_11_075658_create_lexiflies_table', 27),
(34, '2025_03_12_093653_create_course_trainers_table', 28),
(35, '2025_04_07_080725_create_mcqs_table', 29),
(36, '2025_04_08_070940_create_mcq_students_table', 30),
(37, '2025_04_10_104149_create_lexifly_country_universities_table', 31),
(38, '2025_04_20_045838_create_partners_table', 32),
(39, '2025_04_21_045716_create_notices_table', 33),
(40, '2025_04_21_054709_create_blog_categories_table', 34),
(41, '2025_04_21_064716_create_sliders_table', 35),
(43, '2025_04_30_054320_create_exam_date_tests_table', 37),
(44, '2025_05_04_081741_create_exam_date_times_table', 38),
(45, '2025_05_06_081154_create_mocktest_students_table', 39),
(50, '2025_08_14_065317_create_mock_tests_table', 40),
(51, '2025_08_14_071731_create_sections_table', 40),
(52, '2025_08_14_081024_create_test_users_table', 40),
(53, '2025_08_14_110259_create_question_groups_table', 40),
(54, '2025_08_14_110300_create_questions_table', 41),
(55, '2025_08_14_110300_create_question_options_table', 42),
(56, '2025_08_14_110301_create_question_answers_table', 42),
(57, '2025_08_16_073900_add_question_no_to_questions_table', 43);

-- --------------------------------------------------------

--
-- Table structure for table `mocktest_students`
--

CREATE TABLE `mocktest_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mocktest_students`
--

INSERT INTO `mocktest_students` (`id`, `type`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(104, NULL, 'Blake Lang', '+1 (676) 498-6425', 'pacapyq@mailinator.com', '2025-07-10 02:56:38', '2025-07-10 02:56:38'),
(105, NULL, 'Thane Franco', '+1 (236) 248-7175', 'zubo@mailinator.com', '2025-07-10 03:57:18', '2025-07-10 03:57:18'),
(106, NULL, 'Prescott Rodriquez', '+1 (178) 597-4089', 'dajy@mailinator.com', '2025-07-12 02:29:00', '2025-07-12 02:29:00'),
(107, NULL, 'Raiyan Sharikul', '01798165611', 'raiyansharikul805@gmail.com', '2025-07-22 09:42:18', '2025-07-22 09:42:18'),
(108, NULL, 'MD AL HASIB RABBI', '01609026817', 'alhasibrabbi894@gmail.com', '2025-07-23 12:44:21', '2025-07-23 12:44:21'),
(109, NULL, 'Shanta', '01233', 'edrwfhj@hmh', '2025-07-24 08:44:36', '2025-07-24 08:44:36'),
(110, NULL, 'Auhona Islam', '01916409852', 'islamauhona@gmail.com', '2025-07-27 09:06:27', '2025-07-27 09:06:27'),
(111, NULL, 'MINA SAZIDUR RAHMAN', '01766982904', 'misazid90@gmail.com', '2025-07-28 13:51:50', '2025-07-28 13:51:50'),
(112, 'IELTS on Computer', 'txuomlxfse', '+1-794-834-4968', 'skmejwkm@testform.xyz', '2025-07-30 18:53:27', '2025-07-30 18:53:27'),
(113, 'IELTS on Computer', 'gdnulukqso', '+1-084-668-0672', 'gnygiehf@testform.xyz', '2025-07-30 18:53:27', '2025-07-30 18:53:27'),
(114, 'IELTS on Computer', 'vdxesqhwzx', '+1-555-956-6398', 'rlrmigol@testform.xyz', '2025-07-30 18:53:27', '2025-07-30 18:53:27'),
(115, 'IELTS on Computer', 'zdglrsrire', '+1-602-531-3502', 'gzhfpuep@testform.xyz', '2025-07-30 18:53:27', '2025-07-30 18:53:27'),
(116, 'IELTS on Computer', 'vlpqznqfpj', '+1-411-370-1908', 'vpwjuqsn@testform.xyz', '2025-07-30 18:53:28', '2025-07-30 18:53:28'),
(117, 'IELTS on Computer', 'kmnnrfznvi', '+1-569-750-0472', 'dsgyeqll@testform.xyz', '2025-07-30 18:53:30', '2025-07-30 18:53:30'),
(118, 'IELTS on Computer', 'ypsjyyzrqi', '+1-313-017-3464', 'sejquqot@testform.xyz', '2025-07-30 18:53:30', '2025-07-30 18:53:30'),
(119, 'IELTS on Computer', 'orfejdjerq', '+1-298-579-1178', 'vgejzdkg@testform.xyz', '2025-07-30 18:53:31', '2025-07-30 18:53:31'),
(120, 'IELTS on Computer', 'yvorwoeynk', '+1-850-623-6881', 'medyxhly@testform.xyz', '2025-07-30 18:54:47', '2025-07-30 18:54:47'),
(121, 'IELTS on Computer', 'fmivuxhwrw', '+1-351-681-0452', 'lvjmodsn@testform.xyz', '2025-07-30 18:54:48', '2025-07-30 18:54:48'),
(122, 'IELTS on Computer', 'srtpseekzg', '+1-954-800-1183', 'kntnsdiq@testform.xyz', '2025-07-30 18:54:48', '2025-07-30 18:54:48'),
(123, 'IELTS on Computer', 'sxkosonjlj', '+1-147-594-6725', 'ixsefnvm@testform.xyz', '2025-07-30 18:54:52', '2025-07-30 18:54:52'),
(124, NULL, 'Garrett Workman', '+1 (186) 245-6351', 'xowyhyc@mailinator.com', '2025-07-31 07:14:13', '2025-07-31 07:14:13'),
(125, NULL, 'Mari Rojas', '+1 (663) 465-7636', 'xevecocinu@mailinator.com', '2025-08-01 05:35:27', '2025-08-01 05:35:27'),
(126, NULL, 'Md. Tanvir Ahmed', '01983270519', 'tanvir190440@gmail.com', '2025-08-02 06:07:25', '2025-08-02 06:07:25'),
(127, NULL, 'Md. Tajibur Rahman', '01711140442', 'tajiburs.tr@gmail.com', '2025-08-02 16:07:27', '2025-08-02 16:07:27'),
(128, NULL, 'shahnewaz alam', '01311387460', 'shahnewazalam2441139@gmail.com', '2025-08-05 07:54:56', '2025-08-05 07:54:56'),
(129, NULL, 'Mijan Mia', '01620248917', 'mijanmiam21@gmail.com', '2025-08-07 03:59:30', '2025-08-07 03:59:30'),
(130, NULL, 'Suman Sarkar', '01717528092', 'suman.ru.bb@gmail.com', '2025-08-07 04:00:21', '2025-08-07 04:00:21'),
(131, NULL, 'Tazim Ahmed', '01917670027', 'tazim670027@gmail.com', '2025-08-07 04:02:26', '2025-08-07 04:02:26'),
(132, NULL, 'Deepan Paul Diptya', '01609003519', 'dpdstudy2026@gmail.com', '2025-08-07 04:03:10', '2025-08-07 04:03:10'),
(133, NULL, 'Sheikh Abidul Haque Abid', '01760136079', 'prankbd1971@gamil.com', '2025-08-07 04:03:25', '2025-08-07 04:03:25'),
(134, NULL, 'Rachel Potter', '+1 (903) 187-1777', 'qezydocyza@mailinator.com', '2025-08-07 04:46:00', '2025-08-07 04:46:00'),
(135, NULL, 'Amir Moreno', '+1 (657) 948-9815', 'xepygari@mailinator.com', '2025-08-14 00:10:14', '2025-08-14 00:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `mock_tests`
--

CREATE TABLE `mock_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mock_tests`
--

INSERT INTO `mock_tests` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'MockTest 1', 'This is test 1', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `host_name` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `cover`, `date`, `time`, `description`, `host_name`, `venue`, `status`, `created_at`, `updated_at`) VALUES
(9, 'FREE DEMO CLASS FOR IELTS & SPOKEN ENGLISH', 'cover1747046575.jpg', '2025-05-17', '10:00', '<h2><strong>FREE DEMO CLASS ALERT!&nbsp;</strong></h2><p>&nbsp;</p><p>Ready to level up your English or prep for IELTS like a pro? Lexicon – British Council IELTS Venue, Khulna is hosting a FREE Demo Class on 9th May 2025 and YOU are invited!&nbsp;</p><p>🎤 Meet Your Trainer: <strong>MD Shozibul Islam</strong>&nbsp;</p><p>📌 <strong>Cambridge CELTA Certified&nbsp;</strong></p><p>📌<strong> M.Ed. in Teaching &amp; Educational Linguistics, Canada</strong>&nbsp;</p><p>📌 15+ Years of English Teaching Experience&nbsp;</p><p>📌 Trained 10,000+ learners in Spoken English &amp; IELTS What’s in it for you?&nbsp;</p><p>👉 A complete walkthrough of our IELTS &amp; Spoken English courses</p><p>&nbsp;👉 Activity-based learning preview&nbsp;</p><p>👉 Real class vibe with international standard teaching</p><p>&nbsp;👉 Q&amp;A session with the trainer</p><p>&nbsp;👉 Career-oriented English roadmap&nbsp;</p><p>&nbsp;</p><p>📍 Venue: <strong>Lexicon – NLI Tower, 7th Floor, KDA New Market Area, Khulna&nbsp;</strong></p><p>🗓 Date: <strong>10 May 2025&nbsp;</strong></p><p>&nbsp;</p><p>🕒 Time:&nbsp;</p><p>▫️ 3:00 PM – 4:30 PM → Spoken English Demo&nbsp;</p><p>▫️ 5:00 PM – 6:30 PM → IELTS Demo&nbsp;</p><p>&nbsp;</p><p>📞 WhatsApp (Text Only): <strong>01913 91 94 70&nbsp;</strong></p><p>🌐 www.lexiconeltc.com</p>', 'Lexicon', 'Lexicon-British Council Exam Venue, Khulna', 1, '2025-05-03 08:54:27', '2025-05-12 14:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, 'image1746613786.png', '2025-05-07 14:29:46', '2025-05-07 14:29:46'),
(6, 'image1746613792.png', '2025-05-07 14:29:52', '2025-05-07 14:29:52'),
(7, 'image1746868385.png', '2025-05-07 14:29:59', '2025-05-10 13:13:05'),
(8, 'image1746868392.png', '2025-05-07 14:30:05', '2025-05-10 13:13:12'),
(9, 'image1746871021.png', '2025-05-10 13:57:01', '2025-05-10 13:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('arman.p2c@gmail.com', '$2y$12$IiL2fB5AA3HQRBLna6sKteAHjR23VmSrdex53fGd06lFX7LV.ck6e', '2025-04-26 18:04:34'),
('iamrakibulislam86@gmail.com', '$2y$12$cZxB.N2XkHvHrjcwx0y0xup.6FpLzf1hrxIIIlnkSEDjma4LOJyMS', '2025-06-25 16:02:16'),
('test@gmail.com', '$2y$12$rc7bJ3QqNOBh8hAao501tOFX3Z5Ty6N1VpIzi4tog4.MiQfxKWnja', '2025-04-26 18:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `placements`
--

CREATE TABLE `placements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `passport_exp_date` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `country_for_apply` varchar(255) DEFAULT NULL,
  `year_studied_english` varchar(255) DEFAULT NULL,
  `test_type` varchar(255) DEFAULT NULL,
  `test_date` varchar(255) DEFAULT NULL,
  `test_venue` varchar(255) DEFAULT NULL,
  `test_format` varchar(255) DEFAULT NULL,
  `enrollment_date` varchar(255) DEFAULT NULL,
  `batch` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `course_start` varchar(255) DEFAULT NULL,
  `course_end` varchar(255) DEFAULT NULL,
  `renewal1` varchar(255) DEFAULT NULL,
  `renewal2` varchar(255) DEFAULT NULL,
  `renewal3` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gurdian_phone` varchar(255) DEFAULT NULL,
  `passport_nid_image` varchar(255) DEFAULT NULL,
  `why_enroll_course` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `placements`
--

INSERT INTO `placements` (`id`, `course_id`, `first_name`, `last_name`, `dob`, `passport_number`, `passport_exp_date`, `nid`, `email`, `phone`, `occupation`, `country_for_apply`, `year_studied_english`, `test_type`, `test_date`, `test_venue`, `test_format`, `enrollment_date`, `batch`, `name`, `father_name`, `mother_name`, `blood_group`, `profession`, `fb`, `course_start`, `course_end`, `renewal1`, `renewal2`, `renewal3`, `reference`, `image`, `gurdian_phone`, `passport_nid_image`, `why_enroll_course`, `created_at`, `updated_at`) VALUES
(6, '2', NULL, NULL, NULL, NULL, NULL, NULL, 'pativ@mailinator.com', '+1 (299) 938-2164', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1987-11-22', '2nd', 'Desirae Cabrera', 'Gage Alvarado', 'Miriam James', 'Est deleniti ea reic', 'Doloremque non ea am', 'Est et suscipit prov', '1982-12-15', '2006-10-24', NULL, NULL, NULL, 'Totam esse sunt cup', 'image1741859417.jpg', '+1 (511) 604-8342', NULL, NULL, '2025-03-13 13:50:17', '2025-04-08 10:05:32'),
(7, '2', NULL, NULL, NULL, NULL, NULL, NULL, 'suke@mailinator.com', '+1 (299) 773-3967', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1996-12-07', 'Omnis hic voluptatem', 'Maya Cortez', 'Marvin Potter', 'Dieter Cardenas', 'Harum cillum dolores', 'Velit vitae tempora', 'Aut et officia ullam', '1982-01-16', '2024-10-02', '3000', '4000', '3000', 'Aut officia est sit', 'image1743928201.jpg', '+1 (821) 841-1908', NULL, NULL, '2025-04-06 12:30:01', '2025-04-12 12:20:43'),
(8, '4', NULL, NULL, NULL, NULL, NULL, NULL, 'info@metacademy.com', '01705140659', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-06', '2', 'Shakib hossain Shovon', 'A', 'S', 'A', 'a', 'Jdjdj', '2025-04-06', '2025-05-31', NULL, NULL, NULL, 'Jd', 'image1744109788.png', 'Jd', NULL, NULL, '2025-04-06 14:32:35', '2025-04-08 14:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_group_id` bigint(20) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `type` enum('mcq','fill_blank','multi_select','checkbox','table','true_false','select','static','others') NOT NULL,
  `order_no` int(11) NOT NULL DEFAULT 1,
  `question_no` int(11) DEFAULT NULL,
  `meta_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta_data`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_group_id`, `text`, `type`, `order_no`, `question_no`, `meta_data`, `created_at`, `updated_at`) VALUES
(1, 1, '<b>Southern</b> <span style=\"color:red;\">Rental Car</span> - booking extra', 'static', 1, NULL, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(2, 1, 'Name: William <input>', 'fill_blank', 2, 1, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(3, 1, 'Address: 10 <input>', 'fill_blank', 3, 2, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(4, 1, 'Contact number: 07 <input>', 'fill_blank', 4, 3, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(5, 1, 'Payment by <input> card type', 'fill_blank', 5, 4, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(6, 1, 'Card No. 4550 1392 8309 3221', 'static', 6, NULL, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(7, 1, 'Card expiry date: July 20XX', 'static', 7, NULL, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(8, 1, 'Rental period: <input>', 'fill_blank', 8, 5, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(9, 1, 'How much is the car per day? <input>', 'fill_blank', 9, 6, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(10, 1, 'What does the price include? <input>', 'fill_blank', 10, 7, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(11, 1, 'Who will he be visiting? <input>', 'fill_blank', 11, 8, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(12, 1, 'What kind of car does the agent recommend? <input>', 'fill_blank', 12, 9, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(13, 1, 'What does he need to collect the car? <input>', 'fill_blank', 13, 10, NULL, '2025-08-16 06:48:31', '2025-08-16 06:48:31'),
(14, 2, 'Overlander', 'others', 1, NULL, '{\"row\":1,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(15, 2, '', 'others', 2, NULL, '{\"row\":1,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(16, 2, 'Distance/km', 'others', 3, NULL, '{\"row\":2,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(17, 2, '', 'fill_blank', 4, 11, '{\"row\":2,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(18, 2, 'Highlight', 'others', 5, NULL, '{\"row\":3,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(19, 2, '3 volcanoes', 'others', 6, NULL, '{\"row\":3,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(20, 2, 'Time/hours', 'others', 7, NULL, '{\"row\":4,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(21, 2, '11', 'others', 8, NULL, '{\"row\":4,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(22, 2, 'Transalpine', 'others', 9, NULL, '{\"row\":5,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(23, 2, '', 'others', 10, NULL, '{\"row\":5,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(24, 2, 'Distance/km', 'others', 11, NULL, '{\"row\":6,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(25, 2, '223', 'others', 12, NULL, '{\"row\":6,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(26, 2, 'Highlight', 'others', 13, NULL, '{\"row\":7,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(27, 2, '', 'fill_blank', 14, 12, '{\"row\":7,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(28, 2, 'Time/hours', 'others', 15, NULL, '{\"row\":8,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(29, 2, '', 'fill_blank', 16, 13, '{\"row\":8,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(30, 2, 'Transcoastal', 'others', 17, NULL, '{\"row\":9,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(31, 2, '', 'others', 18, NULL, '{\"row\":9,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(32, 2, 'Distance/km', 'others', 19, NULL, '{\"row\":10,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(33, 2, '', 'fill_blank', 20, 14, '{\"row\":10,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(34, 2, 'Highlight', 'others', 21, NULL, '{\"row\":11,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(35, 2, '', 'fill_blank', 22, 15, '{\"row\":11,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(36, 2, 'Time/hours', 'others', 23, NULL, '{\"row\":12,\"col\":1}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(37, 2, '5', 'others', 24, NULL, '{\"row\":12,\"col\":2}', '2025-08-16 08:56:54', '2025-08-16 08:56:54'),
(38, 2, 'Taking three days to complete, the <input> is one of the world’s longest train journeys.', 'fill_blank', 25, 16, '{\"position\":\"summary\"}', '2025-08-16 09:02:08', '2025-08-16 09:02:08'),
(39, 2, 'The Ghan is shorter, passing through towns built by the <input>', 'fill_blank', 26, 17, '{\"position\":\"summary\"}', '2025-08-16 09:02:08', '2025-08-16 09:02:08'),
(40, 2, 'There is also a sculpture designed to mark the laying of the <input> concrete sleeper.', 'fill_blank', 27, 18, '{\"position\":\"summary\"}', '2025-08-16 09:02:08', '2025-08-16 09:02:08'),
(41, 2, 'The Overland was the first train to travel between the capital cities in two <input>', 'fill_blank', 28, 19, '{\"position\":\"summary\"}', '2025-08-16 09:02:08', '2025-08-16 09:02:08'),
(42, 2, ' and it is also the oldest journey of its kind on <input>', 'fill_blank', 29, 20, '{\"position\":\"summary\"}', '2025-08-16 09:02:08', '2025-08-16 09:02:08'),
(43, 3, 'Lyn is having difficulty completing her project because', 'mcq', 1, 21, NULL, '2025-08-16 10:00:32', '2025-08-16 10:00:32'),
(44, 3, 'Her presentation is going to focus on', 'mcq', 2, 22, NULL, '2025-08-16 10:00:32', '2025-08-16 10:00:32'),
(45, 3, 'Why does Lyn think we should be looking for alternative sources of energy?', 'mcq', 3, 23, NULL, '2025-08-16 10:00:32', '2025-08-16 10:00:32'),
(46, 3, 'Solar power is a good form of alternative energy because', 'mcq', 4, 24, NULL, '2025-08-16 10:00:32', '2025-08-16 10:00:32'),
(47, 3, 'Which graph best indicates what Lyn is describing?', 'mcq', 5, 25, '{\"image\":\"https://ieltsonlinetests.com/sites/default/files/listening-test-1-section-3-Q25.png\"}', '2025-08-16 10:00:32', '2025-08-16 10:00:32'),
(48, 3, 'Label the following diagram USING NO MORE THAN TWO WORDS AND / OR A NUMBER', 'static', 6, NULL, '{\"image\":\"https://ieltsonlinetests.com/sites/default/files/2018-11/listening-test-13-section-3-Q27.png\"}', '2025-08-16 10:14:15', '2025-08-16 10:14:15'),
(49, 3, '<input>', 'fill_blank', 7, 26, NULL, '2025-08-16 10:14:15', '2025-08-16 10:14:15'),
(50, 3, '<input>', 'fill_blank', 8, 27, NULL, '2025-08-16 10:14:15', '2025-08-16 10:14:15'),
(51, 3, '<input>', 'fill_blank', 9, 28, NULL, '2025-08-16 10:14:15', '2025-08-16 10:14:15'),
(52, 3, '<input>', 'fill_blank', 10, 29, NULL, '2025-08-16 10:14:15', '2025-08-16 10:14:15'),
(53, 3, '<input>', 'fill_blank', 11, 30, NULL, '2025-08-16 10:14:15', '2025-08-16 10:14:15'),
(54, 4, 'Lecture on <input>', 'fill_blank', 1, 31, NULL, '2025-08-16 10:41:18', '2025-08-16 10:41:18'),
(55, 4, 'Examples: tourism and <input>', 'fill_blank', 2, 32, NULL, '2025-08-16 10:41:18', '2025-08-16 10:41:18'),
(56, 4, 'Common misconception is that marketing points to <input> in what is being provided.', 'fill_blank', 3, 33, NULL, '2025-08-16 10:41:18', '2025-08-16 10:41:18'),
(57, 4, 'Marketing is actually essential in maintaining <input>', 'fill_blank', 4, 34, NULL, '2025-08-16 10:41:18', '2025-08-16 10:41:18'),
(58, 4, 'Selling a product is easier because it is <input> and customers do not have such different ___', 'fill_blank', 5, 35, NULL, '2025-08-16 10:41:18', '2025-08-16 10:41:18'),
(59, 4, 'Aim: offer service beyond hopes of <input>', 'fill_blank', 6, 37, NULL, '2025-08-16 10:41:18', '2025-08-16 10:41:18'),
(60, 4, 'Important to: (a) keep informed & (b) <input>', 'fill_blank', 7, 38, NULL, '2025-08-16 10:41:18', '2025-08-16 10:41:18'),
(61, 4, 'One way to achieve this: <input>', 'fill_blank', 8, 39, NULL, '2025-08-16 10:41:18', '2025-08-16 10:41:18'),
(62, 4, '<input> must always be available for any queries or problems.', 'fill_blank', 9, 40, NULL, '2025-08-16 10:41:18', '2025-08-16 10:41:18'),
(63, 5, 'The text has 5 paragraphs (A - E).', 'static', 1, NULL, NULL, '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(64, 5, '<b>Which paragraph contains each of the following pieces of information?</b>', 'static', 2, NULL, NULL, '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(65, 5, 'The fact that a woman runs one of Thailand’s biggest banks', 'select', 3, 1, '{\"options\":[\"A\",\"B\",\"C\",\"D\",\"E\"]}', '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(66, 5, 'The number of countries included in the survey', 'select', 4, 2, '{\"options\":[\"A\",\"B\",\"C\",\"D\",\"E\"]}', '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(67, 5, 'The fact that Japan’s birth rate is falling quickly', 'select', 5, 3, '{\"options\":[\"A\",\"B\",\"C\",\"D\",\"E\"]}', '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(68, 5, 'The criteria used to get a score for each country', 'select', 6, 4, '{\"options\":[\"A\",\"B\",\"C\",\"D\",\"E\"]}', '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(69, 5, '<b>Complete the following sentences using NO MORE THAN THREE WORDS from the text for each gap.</b>', 'static', 7, NULL, NULL, '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(70, 5, 'Higher consumption in the <input> sector of the market is one reason that Asia’s economies are doing well.', 'fill_blank', 8, 5, NULL, '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(71, 5, 'The scores were decided through a combination of interviews and <input>.', 'fill_blank', 9, 6, NULL, '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(72, 5, 'Higher <input> has created an economic problem for Korea.', 'fill_blank', 10, 7, NULL, '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(73, 5, 'Japanese politicians have not yet decided how to get money for the <input> .', 'fill_blank', 11, 8, NULL, '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(74, 5, '<b>Do the following statements agree with the information given in Reading Passage 1?</b>', 'static', 12, NULL, NULL, '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(75, 5, 'In boxes 9 - 13 on your answer sheet, write <b>TRUE</b> if the statement agrees with the information, <b> FALSE </b> if it contradicts the information, and <b> NOT GIVEN </b> if there is no information.', 'static', 13, NULL, NULL, '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(76, 5, 'Other countries are looking at the example of Thailand to see if its policies can help their economies.', 'true_false', 14, 9, '{\"options\":[\"TRUE\",\"FALSE\",\"NOT GIVEN\"]}', '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(77, 5, 'Higher female participation in an economy always leads to greater economic growth.', 'true_false', 15, 10, '{\"options\":[\"TRUE\",\"FALSE\",\"NOT GIVEN\"]}', '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(78, 5, 'Female participation in the economy is lower in Japan than in most other developed economies.', 'true_false', 16, 11, '{\"options\":[\"TRUE\",\"FALSE\",\"NOT GIVEN\"]}', '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(79, 5, 'Most of the Bank of Thailand’s assistant governors are female.', 'true_false', 17, 12, '{\"options\":[\"TRUE\",\"FALSE\",\"NOT GIVEN\"]}', '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(80, 5, 'The writer considers fairness to be a bad reason for giving women top jobs.', 'true_false', 18, 13, '{\"options\":[\"TRUE\",\"FALSE\",\"NOT GIVEN\"]}', '2025-08-16 11:32:17', '2025-08-16 11:32:17'),
(81, 6, 'The text has 8 paragraphs (A - H).', 'static', 1, NULL, NULL, '2025-08-16 11:41:24', '2025-08-16 11:41:24'),
(82, 6, 'Which paragraph does each of the following headings best fit?', 'static', 2, NULL, NULL, '2025-08-16 11:41:24', '2025-08-16 11:41:24'),
(83, 6, 'Most popular employers for different students', 'select', 3, 14, '{\"options\":[\"A\",\"B\",\"C\",\"D\",\"E\",\"F\",\"G\",\"H\"]}', '2025-08-16 11:41:24', '2025-08-16 11:41:24'),
(84, 6, 'Students’ expectations', 'select', 4, 15, '{\"options\":[\"A\",\"B\",\"C\",\"D\",\"E\",\"F\",\"G\",\"H\"]}', '2025-08-16 11:41:24', '2025-08-16 11:41:24'),
(85, 6, 'Give and develop with the NHS', 'select', 5, 16, '{\"options\":[\"A\",\"B\",\"C\",\"D\",\"E\",\"F\",\"G\",\"H\"]}', '2025-08-16 11:41:24', '2025-08-16 11:41:24'),
(86, 6, 'Reason for the NHS to be happy', 'select', 6, 17, '{\"options\":[\"A\",\"B\",\"C\",\"D\",\"E\",\"F\",\"G\",\"H\"]}', '2025-08-16 11:41:24', '2025-08-16 11:41:24'),
(87, 6, 'According to the information given in the text, choose the correct answer or answers from the choices given.', 'static', 7, NULL, NULL, '2025-08-16 11:47:28', '2025-08-16 11:47:28'),
(88, 6, 'The survey covered students', 'mcq', 8, 23, NULL, '2025-08-16 11:47:28', '2025-08-16 11:47:28'),
(89, 6, 'The BBC', 'mcq', 9, 24, NULL, '2025-08-16 11:47:28', '2025-08-16 11:47:28'),
(90, 7, 'For each question, only ONE of the choices is correct. Write the corresponding letter in the appropriate box on your answer sheet.', 'static', 1, NULL, NULL, '2025-08-16 11:54:20', '2025-08-16 11:54:20'),
(91, 7, 'The Celestron SkyScout can', 'mcq', 2, 27, NULL, '2025-08-16 11:54:20', '2025-08-16 11:54:20'),
(92, 7, 'The Seiko Spectrum e-paper watch', 'mcq', 3, 28, NULL, '2025-08-16 11:54:20', '2025-08-16 11:54:20'),
(93, 7, 'The Electrolux Trilobite 2.0 robot vacuum cleaner', 'mcq', 4, 29, NULL, '2025-08-16 11:54:20', '2025-08-16 11:54:20'),
(94, 7, 'The Honda Asimo robot', 'mcq', 5, 30, NULL, '2025-08-16 11:54:20', '2025-08-16 11:54:20'),
(95, 7, '<b>Complete the following sentences using NO MORE THAN THREE WORDS from the text for each gap.</b>', 'static', 6, NULL, NULL, NULL, NULL),
(96, 7, 'The SkyScout uses GPS and <input> to help you find a star.', 'fill_blank', 7, 31, NULL, '2025-08-18 10:40:41', '2025-08-18 10:40:41'),
(97, 7, 'The Seiko Spectrum does not need batteries to power the <input>.', 'fill_blank', 8, 32, NULL, '2025-08-18 10:40:41', '2025-08-18 10:40:41'),
(98, 7, 'HDTV uses more <input> than conventional TV.', 'fill_blank', 9, 33, NULL, '2025-08-18 10:40:41', '2025-08-18 10:40:41'),
(99, 7, 'The Trilobite 2.0 could be used to <input> guests.', 'fill_blank', 10, 34, NULL, '2025-08-18 10:40:41', '2025-08-18 10:40:41'),
(100, 7, 'Asimo first appeared <input>.', 'fill_blank', 11, 35, NULL, '2025-08-18 10:40:41', '2025-08-18 10:40:41'),
(101, 7, 'Do the following statements agree with the information given in Reading Passage 3? In boxes 36 - 40 on your answer sheet, write TRUE if the statement agrees with the information, FALSE if the statement contradicts the information, NOT GIVEN if there is no information on this.', 'static', 12, NULL, NULL, '2025-08-18 10:43:02', '2025-08-18 10:43:02'),
(102, 7, 'The Nokia N91 is strong.', 'true_false', 13, 36, '{\"options\":[\"TRUE\",\"FALSE\",\"NOT GIVEN\"]}', '2025-08-18 10:44:41', '2025-08-18 10:44:41'),
(103, 7, 'E-paper can be torn easily.', 'true_false', 14, 37, '{\"options\":[\"TRUE\",\"FALSE\",\"NOT GIVEN\"]}', '2025-08-18 10:44:41', '2025-08-18 10:44:41'),
(104, 7, 'HDTV is filmed differently to conventional TV.', 'true_false', 15, 38, '{\"options\":[\"TRUE\",\"FALSE\",\"NOT GIVEN\"]}', '2025-08-18 10:44:41', '2025-08-18 10:44:41'),
(105, 7, 'The Trilobite 2.0 looks just like the original design.', 'true_false', 16, 39, '{\"options\":[\"TRUE\",\"FALSE\",\"NOT GIVEN\"]}', '2025-08-18 10:44:41', '2025-08-18 10:44:41'),
(106, 7, 'Asimo is available for export.', 'true_false', 17, 40, '{\"options\":[\"TRUE\",\"FALSE\",\"NOT GIVEN\"]}', '2025-08-18 10:44:41', '2025-08-18 10:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE `question_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer_text` varchar(255) DEFAULT NULL,
  `option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_groups`
--

CREATE TABLE `question_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `media_file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_groups`
--

INSERT INTO `question_groups` (`id`, `section_id`, `title`, `description`, `media_file`, `created_at`, `updated_at`) VALUES
(1, 1, 'Part 1', 'Part 1', NULL, '2025-08-16 06:22:37', '2025-08-16 06:22:37'),
(2, 1, 'Part 2', 'Part 2', NULL, '2025-08-16 06:22:37', '2025-08-16 06:22:37'),
(3, 1, 'Part 3', 'Part 3', NULL, '2025-08-16 06:22:37', '2025-08-16 06:22:37'),
(4, 1, 'Part 4', 'Part 3', NULL, '2025-08-16 06:22:37', '2025-08-16 06:22:37'),
(5, 2, 'Part 1', '<p>You should spend about 20 minutes on Questions 1 -13, which are based on Reading Passage 1 below.</p><img style=\"width:100%;height:300px;\"src=\"{{ asset(\'adminMock/2/T2S1_0.jpg\') }}\"alt=\"image\"><h5>Secret of Thailand\'s Success?</h5><p>A. It is a question officials here in Asia are being posed more and more:Why are your economies so vibrant? Answers include young and swelling populations, decreased debt, growing cities, emerging middle-class consumer sectors, evolving markets and, of course, ( China’s rise. Add this to that list: Women and their increasing role in Asia’s economies. The idea is that the more opportunities women have, the more vibrant economies are and,consequently, the less need there is to amass a huge public debt to boost growth. It is an idea bolstered by a new survey by MasterCard International Inc., which compares the socio-economic level of women with men in Asia-Pacific nations. The gauge uses four key indicators: participation in the labour force, college education, managerial positions, and above-median income.<br>B. Which Asian nation is doing host when it comes to women’s advancement? Thailand. It scored 92.3 of a possible 100, and according to MasterCard’s index, 100 equals gender equality. The survey was based on interviews with 300 to 350 women in thirteen nations and national statistics. Malaysia came in second with a score of 86.2, while China came in third with 68.4. The average score in Asia was 67.7. At the bottom of the list is South Korea (45.5), followed by Indonesia (52.5), and Japan (54.5). Perhaps it is a bizarre coincidence, yet MasterCard’s findings fit quite neatly with two important issues in Asia: economic leadership and debt. Thailand, Malaysia, and China are three economies widely seen as the future of Asia. Thailand’s economic boom in recent years has prompted many leaders in the region to look at its growth strategy. Malaysia, which has a female central bank governor, is one of Asia’s rising economic powers. China, of course, is the world’s hottest economy, and one that is shaking up trade patterns and business decisions everywhere.<br>C. Something all three economies have in common is an above-average level of female participation. What the three worst ranked economies share are severe long-term economic challenges of high levels of debt and a female workforce that is being neglected. Research in economic history is very conclusive on the role of women in economic growth and development, says Yuwa Hedrick-Wong, an economic adviser to MasterCard. The more extensive women’s participation at all areas of economic activities, the higher the probability for stronger economic growth. That, Hedrick-Wong says, means societies and economies that consistently fail to fully incorporate women’s ability and talent in businesses, and the workplace will suffer the consequences. Take Korea, which has been walking in place economically in recent years. Immediately following the 1997— 1998 Asian financial crisis, Korea became a regional role model as growth boomed and unemployment fell. Yet a massive increase in household debt left consumers overexposed and growth slowed.<br>D. Maybe it is a just coincidence that Korea also ranks low on measures of gender equality published by the United Nations. As of 2003, for example, it ranked below Honduras, Paraguay, Mauritius, and Ukraine in terms of women’s economic and political empowerment. Utilising more of its female workforce would deepen Korea’s labour pool and increase potential growth rates in the economy. The same goes for Japan. The reluctance of Asia’s biggest economy to increase female participation and let more women into the executive suite exacerbates its biggest long-term challenge: a declining birth rate. In 2003, the number of children per Japanese woman fell to a record low of 1.29 versus about. 2 in the early 1970s. Preliminary government statistics suggest the rate declined further in 2004. The trend is nothing short of a crisis for a highly indebted nation of 126 million that has yet to figure out how to fund the national pension system down the road. Yet Japan has been slow to realise that for many women, the decision to delay childbirth is a form of rebellion against societal expectations to have children and become housewives,<br>E. It may be 2005, yet having children is a career-ending decision for millions of bright, ambit ions, and well-educated Japanese, Until corrected, Japan’s birth rate will drop and economic growth will lag, UN Secretary General Kofi Annan was absolutely right earlier this month when he said no other policy is as likely to raise economic productivity than the empowerment of women. Here, in Thailand, the government is getting some decent marks in this regard, and the economy’s 6 per cent-plus growth rate may be a direct result. Thailand still has a long way to go. Yet the Bank of Thailand’s deputy governor, Tarisa Watanagase, is a woman, as are seven of nine assistant governors. Then there’s Jada Wattanasiritham, who runs Siam Commercial Bank Plc, Thailand’s fourth-biggest lender. How many female chief executives can you name in Japan or Korea? Looked at broadly in Asia, MasterCard’s survey is on to something. It is that giving women more opportunities to contribute to an economy is not just about fairness, but dollars and sense, too.\n</p>\n', NULL, '2025-08-16 06:22:37', '2025-08-16 06:22:37'),
(6, 2, 'Part 2', '<p> You should spend about 20 minutes on Questions 14 - 26, which are based on Reading Passage 2 below.</p><img style=\"width: 100%; height: 300px\" src=\"{{asset(\'adminMock/2/T2S2_0.jpg\')}}\" alt=\"image\"/><h5>Patients Are a Virtue</h <p> A. Despite conference jeers, job cuts, and a financial crisis, health secretary Patricia Hewitt may find a reason to smile this week, as the NHS (British National Health Service) was named one of the top places to work by students. Among engineering, science, and IT students, the health service was ranked second in this year’s Univer-sum UK graduate survey of ideal employers, a leap of 54 places from last year. The annual survey, conducted in the UK since 1997, canvassed the opinions of more than 7,700 final and penultimate-year students studying for degrees in business, engineering, science, IT, and the humanities, at 39 universities, between January and March this year.<br>B. Each student was presented with a list of 130 employers, nominated by students through a separate process, from which they selected the five they considered to be ideal employers. The Universum list is based on the frequency of an organisation being selected as an ideal employer, following a weighting process. This year, government departments and public sector organisations dominated the top spots, with the BBC ranked first among humanities, engineering, science, and IT students, retaining its place from last year, and coming third for those studying business. Among humanities students, the BBC was followed closely by the Foreign and Commonwealth Office and the Civil Service fast stream. The Cabinet Office and the Ministry of Defence were not far behind, ranked fifth and sixth respectively. As well as the NHS, engineering, science, and IT students favoured the Environment Agency, which leapt 83 places, from 86 in 2005 to number three this year. Meanwhile, business students voted accountancy giants PricewaterhouseCoopers (PwC) as their favoured employer, followed by HSBC.< >C. At a London awards ceremony sponsored by the Guardian, Foluke Ajayi, head of NHS careers at NHS employers, said its success this year reflected the reality of the health service, which is the third largest employer in the world and the largest in Europe. “We employ people in other clinical areas, such as health care. We employ IT managers, engineers, architects,” she said, adding that the health service is no longer seen as a “second choice” career. “People recognise that they can give something back to the community, but still develop a worthwhile career.”<br>D. Sarah Churchman, director of student recruitment and diversity at PwC, said her company’s success is down to a good campus presence, its commitment to invest in its employees and, with offices around the world, the chance to travel, something which just under half of the students polled said was an important factor when it came to looking for work. One of the big four accountancy firms, PwC is not into gimmicks, and it does not offer freebies but, said Churchman, it does offer “a solid foundation” for anyone wanting a career in business. “We sell our people skills, so we are interested in building skills. We’re not selling something, we invest in our people,” she added.<br> E. Further down the rankings, but still with reason to celebrate, was John Lewis, which matched bumper sales this year with a leap from 111th place in 2005 to 26th among this year’s humanities students. Sky found itself in 12th place, up from 104th last year, and the Environment Agency also proved popular among this student group, rising from 138th in 2005 to 7th this year. Among the business fraternity, shell saw a reversal of fortunes, rising to 30th place after last year’s 76thposition. There were a few dramatic drops in the rankings. The Bank of England fell from 14th in 2005 to 27th this year among humanities students, although it retained its mid-table position among those studying business. British Airways also saw a slight dip, as did McKinsey & Co, which dropped from 11th to 22ndamong business undergraduates.<br>F. Perhaps more surprisingly, this year was the first appearance in the rankings of Teach First, a small charity launched three years ago that aims to create the “leaders of the future” by encouraging top graduates who would not normally consider a career in teaching to commit to work in “challenging” secondary schools for at least two years. The organisation came straight in at number eight among humanities students and was voted 22nd by those studying engineering, science, and IT. James Darley, director of graduate recruitment at Teach First, said he was “bowled over” by the news. “We were not expecting this. We’re a registered charity, only able to physically go to 15 universities.”<br>G. The scheme, based on one run in the US, has the backing of more than 80 businesses, including Deloitte and HSBC. During their two years, candidates undertake leadership training and emerge from the programme with a range of skills and experiences. “We hope in the long term they will be our ambassadors, as we call them, in politics, industry, charities, who will have done it and continue to support the educationally disadvantaged,” adds Darley. This year, 260 graduates are expected to take up the Teach First challenge in schools in London and Manchester, More are expected over the coming years, as the scheme expands to Birmingham and three other cities by 2008. Of the first set of recruits to complete the programme, half have gone on to work for “some amazing companies”, while the other half have chosen to stay on in their schools for a further year - 20% in leadership roles.<br>H. While more than half of students were concerned about achieving a good work life balance, a third said they wanted a job that would challenge them. Although male Students tended to focus more on the practical aspects of work, such as “building a sound financial base”, women, particularly those studying for humanities degrees, had a more idealistic outlook, saying making a contribution to society was a key career goal. Almost half of all students said that paid overtime was a key part of any company compensation package, However, business students said that the most important compensation, apart from salary, was performance-related bonuses, while important considerations for humanities students were retirement plans. Working overseas also scored highly among those surveyed this year, with 45% of business students, and 44% of humanities students, listing it as a priority. Ethical considerations and corporate social responsibilities were also mentioned, with a large percentage of humanities and engineering, science and IT students saying it was a key consideration when it came to choosing an employer.</p>\n', NULL, '2025-08-16 06:22:37', '2025-08-16 06:22:37'),
(7, 2, 'Part 3', '<p>\n    You should spend about 20 minutes on Questions 27 - 40, which are based on\n    Reading Passage 3 below.\n</p>\n<img\n    style=\"width: 100%; height: 300px\"\n    src=\"{{asset(\'adminMock/2/T2S3_0.jpg\')}}\"\n    alt=\"image\"\n/>\n\n<h5>Rise of the Robots</h5>\n<p>\n    If you are into technology, you are living in wonderful times. Things are\n    developing in leaps and bounds, especially gadgets. Let us look at the\n    technology that is set to break through.\n</p>\n\n<h6>CELESTRON SKYSCOUT</h6>\n<p>\n    Backyard stargazing goes seriously hi-tech with the Celestron SkyScout,\n    which was judged to be the Best of Innovations at the New York Consumer\n    Electronics Show press preview event in November. It is not difficult to see\n    why. The SkyScout is a hand-held viewing device that is capable of finding\n    and identifying more than 6,000 celestial objects visible to the naked eye,\n    thus transforming the night sky into your own personal planetarium. Using\n    GPS technology and a substantial celestial database, the camcorder-sized\n    SkyScout enables stargazers to point the device at any visible object in the\n    sky, press a button, and then listen to a commentary. For the truly\n    celestially challenged, if you want to view a star or planet but do not have\n    a clue which bit of the heavens to look in, do not despair; the SkyScout’s\n    \"locate” feature will guide you to it using illuminated arrows in the\n    viewfinder.\n</p>\n\n<h6>NOKIA N91</h6>\n<p>\n    This amazing mobile jukebox is due out early in 2006. Nokia’s N91 looks set\n    to be in a class of its own as a multimedia mobile phone. It will play\n    music, take photos, surf the web and download videos, store contact details,\n    and generally organise your life. The robust little phone, resplendent in\n    its stainless steel case, is the first Nokia to be equipped with a hard\n    drive (4Gb), which means that it can store up to 3,000 songs. The N91, which\n    has a hi-fi quality headset and remote control, supports a wide range of\n    digital music formats, including MP3, Real, WAV, and WMA. It uses wireless\n    technology to allow users to find and buy music from the operator’s music\n    store. You can also drag and drop music from your PC to the N91 and manage\n    and share playlists. If you can find the time, you can get on the blower,\n    too.\n</p>\n\n<h6>SEIKO SPECTRUM E-PAPER WATCH</h6>\n<p>\n    The Seiko Spectrum is no ordinary wristwatch. At first glance, it is an\n    attractive and futuristic bracelet-style watch. Look closer, however, and\n    you will notice that its display is unlike any you have seen before. Rather\n    than the usual LCD screen, the display is made of “e-paper” - from the\n    electronic paper pioneers E Ink Corp - and shows a constantly changing\n    mosaic pattern along with the time. Because e-paper is so flexible and thin,\n    it allows the display to curve round the wrist along with the watch band -\n    something conventional liquid-crystal displays cannot do, as they have to be\n    flat. Seiko says the e-paper display not only produces far better contrast\n    than an LCD screen, but requires no power to retain an image, so the\n    batteries last longer. Seiko is releasing only 500 of the watches next\n    month, priced at about £1,250 - so you\'d better lose no time.\n</p>\n\n<h6>HIGH-DEFINITION TV</h6>\n<p>\n    HDTV, already available in the United States, Japan, and Australia, will hit\n    the UK in 2006. When you watch a programme filmed in the HD format, you will\n    see a much sharper, clearer and more vibrant image. This is due partly to\n    the way a programme is filmed, but also to the high-definition TV set\n    itself, which uses either 720 or 1,080 visible rows of pixels (depending on\n    which format the individual HDTV uses) to display images, compared to the\n    576 rows of pixels used in current sets.\n</p>\n\n<h6>ELECTROLUX TRILOBITE 2.0 ROBOT VACUUM CLEANER</h6>\n<p>\n    Next time you are expecting visitors, do not bother to vacuum first - wait\n    until they arrive, and then entertain them with this little gadget. The\n    Electrolux Trilobite 2.0 is a robotic vacuum cleaner that navigates its way\n    around your floors using ultrasound, just like a bat. It pings out\n    ultrasound vibrations at surfaces to create a map of the room, which it\n    remembers for future cleaning assignments. The Trilobite has no problem\n    avoiding collision with things placed on the floor. Special magnetic strips\n    are placed in doorways, near stairs and other openings. These act as a wall,\n    keeping the Trilobite in the room. You can also programme it to glide round\n    when you’re at work or after you\'ve gone to bed. When Electrolux introduced\n    the original Trilobite in 2001, it was voted among the 100 most innovative\n    designs (though whether the judges were dedicated couch potatoes, and thus\n    biased, we were not aide to discover). The name comes from the hard-shelled\n    sea creature from the Paleozoic era (between 250 million and 560 million\n    years ago) that roamed the ocean floor feeding on particles and small\n    animals.\n</p>\n\n<h6>HONDA ASIMO ROBOT</h6>\n<p>\n    Need an extra pair of hands around the office? Look no further; this mouth,\n    the Honda Motor Company showcased its second-generation humanoid robot,\n    Asimo. The machine has come a long way since its first incarnation five\n    years ago. The 1.3 metre-tall droid is now capable of performing a variety\n    of office tasks, including reception duties, serving drinks and acting as an\n    information guide, as well as making deliveries. Using multiple sensors,\n    Asimo has the ability to recognise the surrounding environment and interact\n    with people using integrated circuit tags. It can walk and run at a fair\n    pace, and push a cart. Honda plans to start using Asimo’s receptionist\n    functions at its Wako Building in Japan early in 2006, and it is hoped it\n    will become available for leasing afterwards. It could soon be pushing a\n    cart at an office near you.\n</p>\n', NULL, '2025-08-16 06:22:37', '2025-08-16 06:22:37'),
(8, 3, 'Part 1', 'Part 1', NULL, '2025-08-16 06:22:37', '2025-08-16 06:22:37'),
(9, 3, 'Part 2', 'Part 2', NULL, '2025-08-16 06:22:37', '2025-08-16 06:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `row_index` int(11) DEFAULT NULL,
  `col_index` int(11) DEFAULT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `question_id`, `text`, `row_index`, `col_index`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 43, 'she doesn’t have enough information', NULL, NULL, 0, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(2, 43, 'she can’t organise her presentation', NULL, NULL, 0, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(3, 43, 'she doesn’t have enough time', NULL, NULL, 1, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(4, 44, 'solar power in America', NULL, NULL, 0, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(5, 44, 'solar-powered water heaters', NULL, NULL, 1, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(6, 44, 'alternative energy technology', NULL, NULL, 0, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(7, 45, 'Fossil fuels are expensive', NULL, NULL, 0, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(8, 45, 'Fossil fuels have an impact on the environment', NULL, NULL, 0, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(9, 45, 'Fossil fuels are limited', NULL, NULL, 1, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(10, 46, 'it can be harnessed with simple technology', NULL, NULL, 1, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(11, 46, 'it is infinite', NULL, NULL, 0, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(12, 46, 'it can be applied equally well in any country', NULL, NULL, 0, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(13, 47, 'A', NULL, NULL, 0, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(14, 47, 'B', NULL, NULL, 1, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(15, 47, 'C', NULL, NULL, 0, '2025-08-16 10:06:02', '2025-08-16 10:06:02'),
(16, 88, 'from all British universities', NULL, NULL, 0, '2025-08-16 11:49:56', '2025-08-16 11:49:56'),
(17, 88, 'studying a variety of subjects', NULL, NULL, 0, '2025-08-16 11:49:56', '2025-08-16 11:49:56'),
(18, 88, 'who were in their last year of studies only', NULL, NULL, 0, '2025-08-16 11:49:56', '2025-08-16 11:49:56'),
(19, 89, 'was first choice in most categories', NULL, NULL, 0, '2025-08-16 11:49:56', '2025-08-16 11:49:56'),
(20, 89, 'was unpopular with business students', NULL, NULL, 0, '2025-08-16 11:49:56', '2025-08-16 11:49:56'),
(21, 89, 'employs more graduates than most other organisations and companies', NULL, NULL, 0, '2025-08-16 11:49:56', '2025-08-16 11:49:56'),
(22, 91, 'tell you information about the stars', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(23, 91, 'tell you where in the world you are', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(24, 91, 'find objects in the sky that are not normally visible', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(25, 92, 'cannot be bent', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(26, 92, 'can be used for surfing the Internet', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(27, 92, 'is being produced as a limited edition', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(28, 93, 'asks permission before moving from room to room', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(29, 93, 'uses lasers to help it avoid objects', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(30, 93, 'is programmable', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(31, 94, 'has two pairs of hands', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(32, 94, 'uses lasers to help it recognise its surroundings', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01'),
(33, 94, 'can run', NULL, NULL, 0, '2025-08-16 11:59:01', '2025-08-16 11:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `scorers`
--

CREATE TABLE `scorers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `speaking` varchar(255) DEFAULT NULL,
  `listening` varchar(255) DEFAULT NULL,
  `reading` varchar(255) DEFAULT NULL,
  `writing` varchar(255) DEFAULT NULL,
  `speaking_status` tinyint(1) DEFAULT NULL,
  `listening_status` tinyint(1) DEFAULT NULL,
  `reading_status` tinyint(1) DEFAULT NULL,
  `writing_status` tinyint(1) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scorers`
--

INSERT INTO `scorers` (`id`, `name`, `image`, `speaking`, `listening`, `reading`, `writing`, `speaking_status`, `listening_status`, `reading_status`, `writing_status`, `score`, `created_at`, `updated_at`) VALUES
(2, 'Gil Key', 'image1742109796.png', '6', '8.5', '7', '6', 0, 1, 0, 0, '7', '2025-03-03 12:31:51', '2025-04-12 13:53:05'),
(3, 'Randall Nicholson', 'image1742109530.png', '6.5', '6.5', '8.5', '9', 0, 0, 0, 1, '8', '2025-03-03 12:32:27', '2025-04-12 13:52:30'),
(4, 'Lane Vargas', 'image1742109677.png', '5', '6', '7', '8', 0, 0, 0, 1, '6', '2025-03-03 12:32:36', '2025-03-25 11:07:32'),
(5, 'Colin Cardenas', 'image1742033168.png', '8.5', '7', '8.5', '7', 1, 0, 1, 0, '7.5', '2025-03-03 12:32:44', '2025-03-25 11:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mock_test_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `order_no` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `mock_test_id`, `name`, `order_no`, `duration`, `created_at`, `updated_at`) VALUES
(1, 1, 'Listening', 1, 30, '2025-08-16 06:12:44', '2025-08-16 06:12:44'),
(2, 1, 'Reading', 2, 60, '2025-08-16 06:12:44', '2025-08-16 06:12:44'),
(3, 1, 'Writing', 3, 60, '2025-08-16 06:12:44', '2025-08-16 06:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `mobile1` varchar(255) DEFAULT NULL,
  `mobile2` varchar(255) DEFAULT NULL,
  `mobile3` varchar(255) DEFAULT NULL,
  `mobile4` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `ceo_image` varchar(255) DEFAULT NULL,
  `ceo_image_back` varchar(255) DEFAULT NULL,
  `ceo_description` text DEFAULT NULL,
  `who_we_are_image` varchar(255) DEFAULT NULL,
  `who_we_are_description` text DEFAULT NULL,
  `vision_image` varchar(255) DEFAULT NULL,
  `vision_description` text DEFAULT NULL,
  `mission_image` varchar(255) DEFAULT NULL,
  `mission_description` text DEFAULT NULL,
  `contact_image` varchar(255) DEFAULT NULL,
  `blogs_image` varchar(255) DEFAULT NULL,
  `score_image` varchar(255) DEFAULT NULL,
  `event_image` varchar(255) DEFAULT NULL,
  `higher_education_image` varchar(255) DEFAULT NULL,
  `immigration_image` varchar(255) DEFAULT NULL,
  `ielts_reg_image` varchar(255) DEFAULT NULL,
  `placement_image` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `messenger` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `logo`, `favicon`, `email`, `website`, `mobile1`, `mobile2`, `mobile3`, `mobile4`, `address`, `ceo_image`, `ceo_image_back`, `ceo_description`, `who_we_are_image`, `who_we_are_description`, `vision_image`, `vision_description`, `mission_image`, `mission_description`, `contact_image`, `blogs_image`, `score_image`, `event_image`, `higher_education_image`, `immigration_image`, `ielts_reg_image`, `placement_image`, `instagram`, `twitter`, `linkedin`, `youtube`, `facebook`, `whatsapp`, `messenger`, `created_at`, `updated_at`) VALUES
(1, 'Lexicon', NULL, 'logo1751192839.png', 'favicon1747029693.png', 'lexiconeltc@gmail.com', 'https://www.lexiconeltc.com/', '+8801913 919470', '+8801914 919470', '+8801842 919470', '+8801841 919470', '𝐍𝐋𝐈 𝐓𝐎𝐖𝐄𝐑 (𝟕𝐭𝐡 𝐅𝐥𝐨𝐨𝐫), 𝟗𝟕𝟕, 𝐔𝐩𝐩𝐞𝐫 𝐉𝐞𝐬𝐬𝐨𝐫𝐞 𝐑𝐨𝐚𝐝 𝐊𝐃𝐀, 𝐍𝐞𝐰 𝐌𝐚𝐫𝐤𝐞𝐭 𝐀𝐫𝐞𝐚, Khulna, Bangladesh', 'ceo_image1742118627.jpg', 'ceo_image_back1742118017.jpg', '<ol><li>sdfgds</li><li>sdfsdfsd</li><li>sdfsdfsdf</li></ol>', 'who_we_are_image1742022062.jpg', '<p>We are delighted to have this opportunity to address you. With 13 years of experience in English Language and IELTS teaching, I am deeply committed to providing exceptional education and guidance to our students.</p><p>Currently pursuing an International Master of Teaching degree at Saint Mary’s University in Halifax, NS, Canada, I am dedicated to constantly enhancing my knowledge and skills to better serve our students. In 2020, I successfully completed my Cambridge CELTA, and I have received extensive training from reputable institutions such as the British Council, IDP, and experienced trainers from Australia and the local trainers of the British Council.</p><p>At Lexicon, our mission is to offer the highest quality English language education and comprehensive IELTS preparation. We take immense pride in our experienced and certified faculty, who bring a wealth of expertise and international credentials to our institution. Our team of teachers includes professionals who have achieved outstanding scores of 9.0 out of 9.0 in individual sections of the IELTS exam.</p><p>We understand the importance of providing a conducive learning environment and personalized attention to our students. Our goal is to empower each student to excel in their English language skills and achieve their desired results in the IELTS exam. We offer a wide range of courses, including IELTS preparation, mock tests, and registration services, as well as English language courses for adults and young learners.</p><p>I invite you to join Lexicon and experience our commitment to excellence firsthand. Together, we will embark on a transformative educational journey that will help you reach your full potential. We are dedicated to making your future brighter and ensuring that “The Future Begins Here” at Lexicon.</p>', 'vision_image1747031118.jpg', '<p>We are delighted to have this opportunity to address you. With 13 years of experience in English Language and IELTS teaching, I am deeply committed to providing exceptional education and guidance to our students.</p>', 'mission_image1747031118.jpg', '<p>We are delighted to have this opportunity to address you. With 13 years of experience in English language and IELTS teaching, I am deeply committed to providing exceptional education and guidance to our students.</p><p>Currently pursuing an International Master of Teaching degree at Saint Mary’s University in Halifax, NS, Canada, I am dedicated to constantly enhancing my knowledge and skills to better serve our students. In 2020, I successfully completed my Cambridge CELTA, and I have received extensive training from reputable institutions such as the British Council, IDP, and experienced trainers from Australia and the local trainers of the British Council.</p>', 'contact_image1742115280.jpg', 'blogs_image1742029280.jpg', 'score_image1742115011.jpg', 'event_image1742115011.jpg', 'higher_education_image1742115011.jpg', 'immigration_image1742115011.jpg', 'ielts_reg_image1742115011.jpg', 'placement_image1742115011.jpg', 'https://www.instagram.com/lexiconeltc/', 'https://x.com/lexiconeltc', 'https://www.linkedin.com/in/in%2Flexiconeltc%2F', 'https://www.youtube.com/@LexiconELTC', 'https://www.facebook.com/LexiconELTC', '01913919470', 'LexiconELTC', NULL, '2025-06-29 10:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(11, NULL, '6821d33ccb9a9.webp', '2025-05-11 11:39:50', '2025-05-12 14:53:49'),
(12, NULL, '6821cfd18ec69.webp', '2025-05-11 11:40:24', '2025-05-12 14:39:14'),
(13, NULL, '6821cde98fc12.webp', '2025-05-11 11:40:35', '2025-05-12 14:31:05'),
(14, NULL, '6821cf7a77ade.webp', '2025-05-11 12:32:38', '2025-05-12 14:37:47'),
(15, NULL, '6821ce6996698.webp', '2025-05-12 14:29:01', '2025-05-12 14:33:14'),
(16, NULL, '6821ceaeddb71.webp', '2025-05-12 14:34:23', '2025-05-12 14:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `description`, `image`, `name`, `score`, `created_at`, `updated_at`) VALUES
(1, 'Very trustworthy and clearly platform to invest in various kind of category. Safe investment with monthly payout. Highly Recommended.', 'image1741857991.jpg', 'Maggy Bishop', '8.5', '2025-03-11 09:55:55', '2025-03-13 13:26:31'),
(2, 'Very trustworthy and clearly platform to invest in various kind of category. Safe investment with monthly payout. Highly Recommended.', 'image1741856333.jpg', 'Beau Graves', '7.5', '2025-03-11 10:11:15', '2025-03-13 12:58:53'),
(3, 'Very trustworthy and clearly platform to invest in various kind of category. Safe investment with monthly payout. Highly Recommended.', 'image1742119000.png', 'Lilah Harrell', '7', '2025-03-11 10:11:30', '2025-03-16 13:56:40'),
(4, 'Very trustworthy and clearly platform to invest in various kind of category. Safe investment with monthly payout. Highly Recommended.', 'image1742118989.png', 'Brian Chaney', '8', '2025-03-11 10:11:41', '2025-03-16 13:56:29'),
(5, 'Very trustworthy and clearly platform to invest in various kind of category. Safe investment with monthly payout. Highly Recommended.', 'image1742118977.png', 'Jeanette Mueller', '6', '2025-03-11 10:12:04', '2025-03-16 13:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_listenings`
--

CREATE TABLE `test_listenings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam` varchar(255) DEFAULT NULL,
  `user_id` varchar(2) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `test_id` varchar(2) DEFAULT NULL,
  `answer1` varchar(155) DEFAULT NULL,
  `mark1` varchar(2) DEFAULT NULL,
  `answer2` varchar(155) DEFAULT NULL,
  `mark2` varchar(2) DEFAULT NULL,
  `answer3` varchar(155) DEFAULT NULL,
  `mark3` varchar(2) DEFAULT NULL,
  `answer4` varchar(155) DEFAULT NULL,
  `mark4` varchar(2) DEFAULT NULL,
  `answer5` varchar(155) DEFAULT NULL,
  `mark5` varchar(2) DEFAULT NULL,
  `answer6` varchar(155) DEFAULT NULL,
  `mark6` varchar(2) DEFAULT NULL,
  `answer7` varchar(155) DEFAULT NULL,
  `mark7` varchar(2) DEFAULT NULL,
  `answer8` varchar(155) DEFAULT NULL,
  `mark8` varchar(2) DEFAULT NULL,
  `answer9` varchar(155) DEFAULT NULL,
  `mark9` varchar(2) DEFAULT NULL,
  `answer10` varchar(155) DEFAULT NULL,
  `mark10` varchar(2) DEFAULT NULL,
  `answer11` varchar(155) DEFAULT NULL,
  `mark11` varchar(2) DEFAULT NULL,
  `answer12` varchar(155) DEFAULT NULL,
  `mark12` varchar(2) DEFAULT NULL,
  `answer13` varchar(155) DEFAULT NULL,
  `mark13` varchar(2) DEFAULT NULL,
  `answer14` varchar(155) DEFAULT NULL,
  `mark14` varchar(2) DEFAULT NULL,
  `answer15` varchar(155) DEFAULT NULL,
  `mark15` varchar(2) DEFAULT NULL,
  `answer16` varchar(155) DEFAULT NULL,
  `mark16` varchar(2) DEFAULT NULL,
  `answer17` varchar(155) DEFAULT NULL,
  `mark17` varchar(2) DEFAULT NULL,
  `answer18` varchar(155) DEFAULT NULL,
  `mark18` varchar(2) DEFAULT NULL,
  `answer19` varchar(155) DEFAULT NULL,
  `mark19` varchar(2) DEFAULT NULL,
  `answer20` varchar(155) DEFAULT NULL,
  `mark20` varchar(2) DEFAULT NULL,
  `answer21` varchar(155) DEFAULT NULL,
  `mark21` varchar(2) DEFAULT NULL,
  `answer22` varchar(155) DEFAULT NULL,
  `mark22` varchar(2) DEFAULT NULL,
  `answer23` varchar(155) DEFAULT NULL,
  `mark23` varchar(2) DEFAULT NULL,
  `answer24` varchar(155) DEFAULT NULL,
  `mark24` varchar(2) DEFAULT NULL,
  `answer25` varchar(155) DEFAULT NULL,
  `mark25` varchar(2) DEFAULT NULL,
  `answer26` varchar(155) DEFAULT NULL,
  `mark26` varchar(2) DEFAULT NULL,
  `answer27` varchar(155) DEFAULT NULL,
  `mark27` varchar(2) DEFAULT NULL,
  `answer28` varchar(155) DEFAULT NULL,
  `mark28` varchar(2) DEFAULT NULL,
  `answer29` varchar(155) DEFAULT NULL,
  `mark29` varchar(2) DEFAULT NULL,
  `answer30` varchar(155) DEFAULT NULL,
  `mark30` varchar(2) DEFAULT NULL,
  `answer31` varchar(155) DEFAULT NULL,
  `mark31` varchar(2) DEFAULT NULL,
  `answer32` varchar(155) DEFAULT NULL,
  `mark32` varchar(2) DEFAULT NULL,
  `answer33` varchar(155) DEFAULT NULL,
  `mark33` varchar(2) DEFAULT NULL,
  `answer34` varchar(155) DEFAULT NULL,
  `mark34` varchar(2) DEFAULT NULL,
  `answer35` varchar(155) DEFAULT NULL,
  `mark35` varchar(2) DEFAULT NULL,
  `answer36` varchar(155) DEFAULT NULL,
  `mark36` varchar(2) DEFAULT NULL,
  `answer37` varchar(155) DEFAULT NULL,
  `mark37` varchar(2) DEFAULT NULL,
  `answer38` varchar(155) DEFAULT NULL,
  `mark38` varchar(2) DEFAULT NULL,
  `answer39` varchar(155) DEFAULT NULL,
  `mark39` varchar(2) DEFAULT NULL,
  `answer40` varchar(155) DEFAULT NULL,
  `mark40` varchar(2) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `correct` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_listenings`
--

INSERT INTO `test_listenings` (`id`, `exam`, `user_id`, `name`, `email`, `status`, `test_id`, `answer1`, `mark1`, `answer2`, `mark2`, `answer3`, `mark3`, `answer4`, `mark4`, `answer5`, `mark5`, `answer6`, `mark6`, `answer7`, `mark7`, `answer8`, `mark8`, `answer9`, `mark9`, `answer10`, `mark10`, `answer11`, `mark11`, `answer12`, `mark12`, `answer13`, `mark13`, `answer14`, `mark14`, `answer15`, `mark15`, `answer16`, `mark16`, `answer17`, `mark17`, `answer18`, `mark18`, `answer19`, `mark19`, `answer20`, `mark20`, `answer21`, `mark21`, `answer22`, `mark22`, `answer23`, `mark23`, `answer24`, `mark24`, `answer25`, `mark25`, `answer26`, `mark26`, `answer27`, `mark27`, `answer28`, `mark28`, `answer29`, `mark29`, `answer30`, `mark30`, `answer31`, `mark31`, `answer32`, `mark32`, `answer33`, `mark33`, `answer34`, `mark34`, `answer35`, `mark35`, `answer36`, `mark36`, `answer37`, `mark37`, `answer38`, `mark38`, `answer39`, `mark39`, `answer40`, `mark40`, `score`, `correct`, `created_at`, `updated_at`) VALUES
(88, 'Admin2', NULL, 'Nicole Baldwin', 'sizip@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F', '0', '2025-08-14 04:49:05', '2025-08-14 04:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `test_readings`
--

CREATE TABLE `test_readings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam` varchar(255) DEFAULT NULL,
  `user_id` varchar(2) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `test_id` varchar(2) DEFAULT NULL,
  `answer1` varchar(156) DEFAULT NULL,
  `mark1` varchar(2) DEFAULT NULL,
  `answer2` varchar(155) DEFAULT NULL,
  `mark2` varchar(2) DEFAULT NULL,
  `answer3` varchar(155) DEFAULT NULL,
  `mark3` varchar(2) DEFAULT NULL,
  `answer4` varchar(155) DEFAULT NULL,
  `mark4` varchar(2) DEFAULT NULL,
  `answer5` varchar(155) DEFAULT NULL,
  `mark5` varchar(2) DEFAULT NULL,
  `answer6` varchar(155) DEFAULT NULL,
  `mark6` varchar(2) DEFAULT NULL,
  `answer7` varchar(155) DEFAULT NULL,
  `mark7` varchar(2) DEFAULT NULL,
  `answer8` varchar(155) DEFAULT NULL,
  `mark8` varchar(2) DEFAULT NULL,
  `answer9` varchar(155) DEFAULT NULL,
  `mark9` varchar(2) DEFAULT NULL,
  `answer10` varchar(155) DEFAULT NULL,
  `mark10` varchar(2) DEFAULT NULL,
  `answer11` varchar(155) DEFAULT NULL,
  `mark11` varchar(2) DEFAULT NULL,
  `answer12` varchar(155) DEFAULT NULL,
  `mark12` varchar(2) DEFAULT NULL,
  `answer13` varchar(155) DEFAULT NULL,
  `mark13` varchar(2) DEFAULT NULL,
  `answer14` varchar(155) DEFAULT NULL,
  `mark14` varchar(2) DEFAULT NULL,
  `answer15` varchar(155) DEFAULT NULL,
  `mark15` varchar(2) DEFAULT NULL,
  `answer16` varchar(155) DEFAULT NULL,
  `mark16` varchar(2) DEFAULT NULL,
  `answer17` varchar(155) DEFAULT NULL,
  `mark17` varchar(2) DEFAULT NULL,
  `answer18` varchar(155) DEFAULT NULL,
  `mark18` varchar(2) DEFAULT NULL,
  `answer19` varchar(155) DEFAULT NULL,
  `mark19` varchar(2) DEFAULT NULL,
  `answer20` varchar(155) DEFAULT NULL,
  `mark20` varchar(2) DEFAULT NULL,
  `answer21` varchar(155) DEFAULT NULL,
  `mark21` varchar(2) DEFAULT NULL,
  `answer22` varchar(155) DEFAULT NULL,
  `mark22` varchar(2) DEFAULT NULL,
  `answer23` varchar(155) DEFAULT NULL,
  `mark23` varchar(2) DEFAULT NULL,
  `answer24` varchar(155) DEFAULT NULL,
  `mark24` varchar(2) DEFAULT NULL,
  `answer25` varchar(155) DEFAULT NULL,
  `mark25` varchar(2) DEFAULT NULL,
  `answer26` varchar(155) DEFAULT NULL,
  `mark26` varchar(2) DEFAULT NULL,
  `answer27` varchar(155) DEFAULT NULL,
  `mark27` varchar(2) DEFAULT NULL,
  `answer28` varchar(155) DEFAULT NULL,
  `mark28` varchar(2) DEFAULT NULL,
  `answer29` varchar(155) DEFAULT NULL,
  `mark29` varchar(2) DEFAULT NULL,
  `answer30` varchar(155) DEFAULT NULL,
  `mark30` varchar(2) DEFAULT NULL,
  `answer31` varchar(155) DEFAULT NULL,
  `mark31` varchar(2) DEFAULT NULL,
  `answer32` varchar(155) DEFAULT NULL,
  `mark32` varchar(2) DEFAULT NULL,
  `answer33` varchar(155) DEFAULT NULL,
  `mark33` varchar(2) DEFAULT NULL,
  `answer34` varchar(155) DEFAULT NULL,
  `mark34` varchar(2) DEFAULT NULL,
  `answer35` varchar(155) DEFAULT NULL,
  `mark35` varchar(2) DEFAULT NULL,
  `answer36` varchar(155) DEFAULT NULL,
  `mark36` varchar(2) DEFAULT NULL,
  `answer37` varchar(155) DEFAULT NULL,
  `mark37` varchar(2) DEFAULT NULL,
  `answer38` varchar(155) DEFAULT NULL,
  `mark38` varchar(2) DEFAULT NULL,
  `answer39` varchar(155) DEFAULT NULL,
  `mark39` varchar(2) DEFAULT NULL,
  `answer40` varchar(155) DEFAULT NULL,
  `mark40` varchar(2) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `correct` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_readings`
--

INSERT INTO `test_readings` (`id`, `exam`, `user_id`, `name`, `email`, `status`, `test_id`, `answer1`, `mark1`, `answer2`, `mark2`, `answer3`, `mark3`, `answer4`, `mark4`, `answer5`, `mark5`, `answer6`, `mark6`, `answer7`, `mark7`, `answer8`, `mark8`, `answer9`, `mark9`, `answer10`, `mark10`, `answer11`, `mark11`, `answer12`, `mark12`, `answer13`, `mark13`, `answer14`, `mark14`, `answer15`, `mark15`, `answer16`, `mark16`, `answer17`, `mark17`, `answer18`, `mark18`, `answer19`, `mark19`, `answer20`, `mark20`, `answer21`, `mark21`, `answer22`, `mark22`, `answer23`, `mark23`, `answer24`, `mark24`, `answer25`, `mark25`, `answer26`, `mark26`, `answer27`, `mark27`, `answer28`, `mark28`, `answer29`, `mark29`, `answer30`, `mark30`, `answer31`, `mark31`, `answer32`, `mark32`, `answer33`, `mark33`, `answer34`, `mark34`, `answer35`, `mark35`, `answer36`, `mark36`, `answer37`, `mark37`, `answer38`, `mark38`, `answer39`, `mark39`, `answer40`, `mark40`, `score`, `correct`, `created_at`, `updated_at`) VALUES
(52, 'Admin2', NULL, 'Nicole Baldwin', 'sizip@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F', '0', '2025-08-14 04:49:22', '2025-08-14 04:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `test_users`
--

CREATE TABLE `test_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mock_test_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_users`
--

INSERT INTO `test_users` (`id`, `mock_test_id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sybil Aguilar', '+1 (681) 683-4694', 'misuvi@mailinator.com', '2025-08-16 00:07:41', '2025-08-16 00:07:41'),
(2, 1, 'Danielle Fitzgerald', '+1 (813) 636-2194', 'vuzovodoha@mailinator.com', '2025-08-16 04:56:03', '2025-08-16 04:56:03'),
(3, 1, 'Lysandra Gardner', '+1 (154) 213-7276', 'liwetyxuf@mailinator.com', '2025-08-16 04:59:29', '2025-08-16 04:59:29'),
(4, 1, 'Camilla Bender', '+1 (545) 121-5556', 'pore@mailinator.com', '2025-08-17 22:06:51', '2025-08-17 22:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `test_writings`
--

CREATE TABLE `test_writings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `test_id` varchar(255) DEFAULT NULL,
  `answer1` text DEFAULT NULL,
  `mark1` varchar(255) DEFAULT NULL,
  `answer2` text DEFAULT NULL,
  `mark2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_writings`
--

INSERT INTO `test_writings` (`id`, `exam`, `user_id`, `name`, `email`, `status`, `test_id`, `answer1`, `mark1`, `answer2`, `mark2`, `created_at`, `updated_at`) VALUES
(66, 'Admin2', NULL, 'Nicole Baldwin', 'sizip@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-14 04:49:37', '2025-08-14 04:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `image`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Azra Haque', 'image1742110658.png', 'Section Name', '2025-03-03 13:33:18', '2025-03-16 11:37:38'),
(2, 'Casey Tyler', 'image1742110644.png', 'Veritatis adipisicin', '2025-03-03 13:34:58', '2025-03-16 11:37:24'),
(3, 'Kiara Meadows', 'image1742110633.png', 'Consequat Quaerat n', '2025-03-03 13:35:24', '2025-03-16 11:37:13'),
(4, 'Hamish Wiley', 'image1742110624.png', 'Amet harum et volup', '2025-03-03 13:35:43', '2025-03-16 11:37:04'),
(6, 'dfg', 'image1742893753.png', NULL, '2025-03-25 13:09:13', '2025-03-25 13:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'User',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `education`, `institution`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arman', NULL, NULL, NULL, 'arman.p2c@gmail.com', 'Admin', NULL, '$2y$12$mjrwKj/Dn9i6kkCD0GkQ7eubD7DAK7aMbImrVRLz/vsrzlaUH1.Vq', NULL, '2025-01-12 12:07:07', '2025-04-12 09:28:54'),
(2, 'Emon', '01632109022', 'BBA', 'BL College', 'emon@gmail.com', 'User', NULL, '$2y$12$Z0Oq5gHTqoRZCs8.95uWMORlnKXQ6gKv0EuHLAzG9qZQiYEmWk1yS', NULL, '2025-01-20 10:29:44', '2025-01-20 10:29:44'),
(3, 'Test', '01632109022', 'HSC', 'Khulna', 'test@gmail.com', 'User', NULL, '$2y$12$cpkWoD/NcFbh2vAxSuSR3e4nmcH4MCxNo9xGcuqAERA3vc4UV8edC', NULL, '2025-01-22 13:30:29', '2025-01-22 13:30:29'),
(4, 'Rakib', '01677035212', 'Masters', 'Khulna University', 'iamrakibulislam86@gmail.com', 'Admin', NULL, '$2y$12$e1JCDWyCTGFuYvpVJDQXDet1EtiY.4.BAygKV8T1I60KsLtYsPALa', NULL, '2025-01-23 11:48:27', '2025-01-23 11:48:27'),
(6, 'Expert', '01703584483', 'IELTS', 'NSU', 'bdexperthustler@gmail.com', 'User', NULL, '$2y$12$CDPEcuU7Fbr9QwEde3ZaE.RykDsitwXWONgz19Pi2hT6Rh95rm036', NULL, '2025-02-28 11:01:30', '2025-02-28 11:01:30'),
(7, 'Arman', NULL, NULL, NULL, 'a@gmail.com', 'Content Manager', NULL, '$2y$12$HSxkJ7q5C14HXprFBMc2qufVdGo6SMGt9vIZhrh5j3eafN90C2si6', NULL, '2025-03-24 11:05:24', '2025-03-25 12:04:25'),
(8, 'Arman', NULL, NULL, NULL, 'b@gmail.com', 'Front Desk', NULL, '$2y$12$RPqeW/K34vYLgkgoiCir..M02ACYqrVV8w41phRJl9YHroD6VuirO', NULL, '2025-04-05 12:13:35', '2025-04-05 12:14:07'),
(9, 'Arman', NULL, NULL, NULL, 'arman.bae.innovation@gmail.com', 'Admin', NULL, '$2y$12$P1G0NX1nKGCboGQlz65vCurtEu8ExsNyVyTjMFmi9YF1iKGEVAQvq', '0YAt6UCqeYMY5f7uzoihtHtarmJcBjVISa0CStRCqNKuMxgbZ1X8H3BktuHd', '2025-04-20 17:46:48', '2025-08-14 04:19:46'),
(10, 'Rakib', NULL, NULL, NULL, 'islamrakib635@gmail.com', 'Admin', NULL, '$2y$12$7D62BsJfT9oCI5SdU96tc.jpDAOWTTHOITf8Trrx62edKBed2zKS6', NULL, '2025-04-26 08:44:39', '2025-04-26 08:45:32'),
(11, 'Shakib hossain Shovon', NULL, NULL, NULL, 'skbshvn@gmail.com', 'Admin', NULL, '$2y$12$KIQ2patIfQETZXHHrkRRCuXMoM9V8.YmRGQCcRAcPGaCLFjzASP8G', NULL, '2025-07-19 05:31:00', '2025-07-19 05:31:11'),
(12, 'Lexicon Admin', NULL, NULL, NULL, 'lexiconeltc@gmail.com', 'Admin', NULL, '$2y$12$YlL2ia2n.K.DIViM555YPuY8NkObkDEX34455N8UPKO2lxGsSfxWm', NULL, '2025-07-19 06:35:29', '2025-07-19 06:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `moile1` varchar(255) DEFAULT NULL,
  `mobile2` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `who_we_are_image` varchar(255) DEFAULT NULL,
  `who_we_are_description` text DEFAULT NULL,
  `vision_image` varchar(255) DEFAULT NULL,
  `vision_description` text DEFAULT NULL,
  `mission_image` varchar(255) DEFAULT NULL,
  `mission_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `title`, `description`, `logo`, `favicon`, `email`, `website`, `moile1`, `mobile2`, `address`, `who_we_are_image`, `who_we_are_description`, `vision_image`, `vision_description`, `mission_image`, `mission_description`, `created_at`, `updated_at`) VALUES
(1, 'Lexicon2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `writes`
--

CREATE TABLE `writes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writes`
--

INSERT INTO `writes` (`id`, `course_id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(10, '15', NULL, NULL, '2025-03-02 14:36:18', '2025-03-02 14:36:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_trainers`
--
ALTER TABLE `course_trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_dates`
--
ALTER TABLE `exam_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_date_tests`
--
ALTER TABLE `exam_date_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_date_times`
--
ALTER TABLE `exam_date_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ielts_registrations`
--
ALTER TABLE `ielts_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lexiflies`
--
ALTER TABLE `lexiflies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lexifly_countries`
--
ALTER TABLE `lexifly_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lexifly_country_universities`
--
ALTER TABLE `lexifly_country_universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listens`
--
ALTER TABLE `listens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq_students`
--
ALTER TABLE `mcq_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mocktest_students`
--
ALTER TABLE `mocktest_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mock_tests`
--
ALTER TABLE `mock_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `placements`
--
ALTER TABLE `placements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_question_group_id_foreign` (`question_group_id`);

--
-- Indexes for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_answers_option_id_foreign` (`option_id`),
  ADD KEY `question_answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `question_groups`
--
ALTER TABLE `question_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_groups_section_id_foreign` (`section_id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_options_question_id_foreign` (`question_id`);

--
-- Indexes for table `scorers`
--
ALTER TABLE `scorers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_mock_test_id_foreign` (`mock_test_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_listenings`
--
ALTER TABLE `test_listenings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_readings`
--
ALTER TABLE `test_readings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_users`
--
ALTER TABLE `test_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_users_mock_test_id_foreign` (`mock_test_id`);

--
-- Indexes for table `test_writings`
--
ALTER TABLE `test_writings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writes`
--
ALTER TABLE `writes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `course_trainers`
--
ALTER TABLE `course_trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exam_dates`
--
ALTER TABLE `exam_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `exam_date_tests`
--
ALTER TABLE `exam_date_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `exam_date_times`
--
ALTER TABLE `exam_date_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `ielts_registrations`
--
ALTER TABLE `ielts_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lexiflies`
--
ALTER TABLE `lexiflies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `lexifly_countries`
--
ALTER TABLE `lexifly_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lexifly_country_universities`
--
ALTER TABLE `lexifly_country_universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `listens`
--
ALTER TABLE `listens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mcq_students`
--
ALTER TABLE `mcq_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `mocktest_students`
--
ALTER TABLE `mocktest_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `mock_tests`
--
ALTER TABLE `mock_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `placements`
--
ALTER TABLE `placements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `question_answers`
--
ALTER TABLE `question_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_groups`
--
ALTER TABLE `question_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `scorers`
--
ALTER TABLE `scorers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `test_listenings`
--
ALTER TABLE `test_listenings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `test_readings`
--
ALTER TABLE `test_readings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `test_users`
--
ALTER TABLE `test_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test_writings`
--
ALTER TABLE `test_writings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `writes`
--
ALTER TABLE `writes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_question_group_id_foreign` FOREIGN KEY (`question_group_id`) REFERENCES `question_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD CONSTRAINT `question_answers_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `question_options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_groups`
--
ALTER TABLE `question_groups`
  ADD CONSTRAINT `question_groups_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_options`
--
ALTER TABLE `question_options`
  ADD CONSTRAINT `question_options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_mock_test_id_foreign` FOREIGN KEY (`mock_test_id`) REFERENCES `mock_tests` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `test_users`
--
ALTER TABLE `test_users`
  ADD CONSTRAINT `test_users_mock_test_id_foreign` FOREIGN KEY (`mock_test_id`) REFERENCES `mock_tests` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
