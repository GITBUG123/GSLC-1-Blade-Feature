-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 11:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gslc1_dota2`
--

-- --------------------------------------------------------

--
-- Table structure for table `heros`
--

CREATE TABLE `heros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_attribute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attack_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heros`
--

INSERT INTO `heros` (`id`, `hero_name`, `hero_title`, `primary_attribute`, `attack_type`, `image_url`, `roles`, `created_at`, `updated_at`) VALUES
(1, 'ABADDON', 'LORD OF AVERNUS', 'STRENGTH', 'MELEE', 'https://www.dotafire.com/images/hero/icon/abaddon.png', 'LANE-SUPPORT, DURABLE, SEMI-CARRY, SUPPORT', NULL, NULL),
(2, 'ALCHEMIST', 'RAZZIL DARKBREW', 'STRENGTH', 'MELEE', 'https://www.dotafire.com/images/hero/icon/alchemist.png', 'CARRY, DISABLER', NULL, NULL),
(3, 'ARC WARDEN', 'ZET', 'AGILITY', 'RANGED', 'https://www.dotafire.com/images/hero/icon/arc-warden.png', 'RANGED', NULL, NULL),
(4, 'BRISTLEBACK', 'RIGWARL', 'STRENGTH\r\n', 'MELEE', 'https://www.dotafire.com/images/hero/icon/bristleback.png', 'DURABLE, SEMI-CARRY', NULL, NULL),
(5, 'CLINKZ', 'BONE FLETCHER\r\n', 'AGILITY', 'RANGED', 'https://www.dotafire.com/images/hero/icon/clinkz.png', 'CARRY, GANKER, PUSHER, ESCAPE', NULL, NULL),
(6, 'DAWNBREAKER', 'VALORA', 'STRENGTH\r\n', 'MELEE', 'https://www.dotafire.com/images/hero/icon/dawnbreaker.png', 'CARRY, DURABLE', NULL, NULL),
(7, 'EARTH SPIRIT', 'KAOLIN', 'STRENGTH', 'MELEE', 'https://www.dotafire.com/images/hero/icon/earth-spirit.png', 'DISABLER, GANKER, INITIATOR, ESCAPE, SEMI-CARRY, SUPPORT\r\n', NULL, NULL),
(8, 'MARCI', 'MIRANA\'S COMPANION', 'STRENGTH', 'MELEE', 'https://www.dotafire.com/images/hero/icon/marci.png', 'CARRY, DISABLER, INITIATOR', NULL, NULL),
(9, 'MORPHLING', 'MORPHLING', 'AGILITY', 'RANGED', 'https://www.dotafire.com/images/hero/icon/morphling.png', 'CARRY, INITIATOR, ESCAPE', NULL, NULL),
(10, 'PRIMAL BEAST', 'THE AGELESS HUNTER', 'STRENGTH', 'MELEE', 'https://www.dotafire.com/images/hero/icon/primal-beast.png', 'DISABLER, INITIATOR, DURABLE', NULL, NULL),
(11, 'UNDYING', 'DIRGE', 'STRENGTH', 'MELEE', 'https://www.dotafire.com/images/hero/icon/undying.png', 'DISABLER, INITIATOR, PUSHER, DURABLE', NULL, NULL),
(12, 'ZEUS', 'LORD OF OLYMPUS', 'INTELLIGENCE', 'RANGED', 'https://www.dotafire.com/images/hero/icon/zeus.png', 'SEMI-CARRY, SUPPORT', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heros`
--
ALTER TABLE `heros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `heros`
--
ALTER TABLE `heros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
