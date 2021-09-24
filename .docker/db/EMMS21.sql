-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Sep 24, 2021 at 02:53 PM
-- Server version: 8.0.25
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EMMS21`
--
CREATE DATABASE IF NOT EXISTS `EMMS21` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `EMMS21`;

-- --------------------------------------------------------

--
-- Table structure for table `admin21`
--

DROP TABLE IF EXISTS `admin21`;
CREATE TABLE `admin21` (
  `id` int NOT NULL,
  `eventStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin21`
--

INSERT INTO `admin21` (`id`, `eventStatus`) VALUES
(1, 'preevento'),
(2, 'postinicial');

-- --------------------------------------------------------

--
-- Table structure for table `suscriptions_doppler`
--

DROP TABLE IF EXISTS `suscriptions_doppler`;
CREATE TABLE `suscriptions_doppler` (
  `id` int NOT NULL,
  `email` varchar(300) NOT NULL,
  `list` varchar(20) NOT NULL,
  `form_id` varchar(20) NOT NULL,
  `invito_dos_personas` tinyint(1) NOT NULL,
  `register` varchar(50) NOT NULL,
  `pais` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telefono` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `empresa` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ip` varchar(150) NOT NULL,
  `pais_ip` int NOT NULL,
  `politica` int DEFAULT NULL,
  `promociones` int DEFAULT NULL,
  `source_utm` varchar(150) DEFAULT NULL,
  `medium_utm` varchar(150) DEFAULT NULL,
  `campaign_utm` varchar(150) DEFAULT NULL,
  `content_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `term_utm` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin21`
--
ALTER TABLE `admin21`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suscriptions_doppler`
--
ALTER TABLE `suscriptions_doppler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin21`
--
ALTER TABLE `admin21`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
