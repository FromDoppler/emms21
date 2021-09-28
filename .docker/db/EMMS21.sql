-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Sep 28, 2021 at 05:03 PM
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
(2, 'postinicial'),
(3, 'negro');

-- --------------------------------------------------------

--
-- Table structure for table `suscriptions_doppler`
--

DROP TABLE IF EXISTS `suscriptions_doppler`;
CREATE TABLE `suscriptions_doppler` (
  `id` int NOT NULL,
  `email` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `list` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `form_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `invito_dos_personas` tinyint(1) NOT NULL,
  `register` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `pais` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `empresa` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ip` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pais_ip` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `politica` tinyint DEFAULT NULL,
  `promociones` tinyint DEFAULT NULL,
  `source_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `medium_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `term_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suscriptions_doppler`
--

INSERT INTO `suscriptions_doppler` (`id`, `email`, `list`, `form_id`, `invito_dos_personas`, `register`, `nombre`, `apellido`, `pais`, `telefono`, `empresa`, `ip`, `pais_ip`, `politica`, `promociones`, `source_utm`, `medium_utm`, `campaign_utm`, `content_utm`, `term_utm`) VALUES
(14, 'hcardoso+99@fromdoppler.com', '28406164', 'registrado', 0, '2021-09-28 01:53:21 PM', 'Indio ', 'Solari', 'Argentina', '+542494619636', 'Redon2', '172.22.0.1', 'pais harcode', 1, 0, NULL, NULL, NULL, NULL, NULL),
(15, 'hcardoso+99@fromdoppler.com', '28406164', 'registrado', 0, '2021-09-28 01:54:15 PM', 'Indio ', 'Solari', 'Argentina', '+542494619636', 'Redon2', '172.22.0.1', 'pais harcode', 1, 0, NULL, NULL, NULL, NULL, NULL),
(16, 'hcardoso+99@fromdoppler.com', '28406164', 'registrado', 0, '2021-09-28 01:55:10 PM', 'Indio ', 'Solari', 'Argentina', '+542494619636', 'Redon2', '172.22.0.1', 'pais harcode', 1, 0, NULL, NULL, NULL, NULL, NULL),
(17, 'hcardoso+99@fromdoppler.com', '28406164', 'registrado', 0, '2021-09-28 01:56:21 PM', 'Indio ', 'Solari', 'Argentina', '+542494619636', 'Redon2', '172.22.0.1', 'pais harcode', 1, 0, NULL, NULL, NULL, NULL, NULL),
(18, 'hcardoso+99@fromdoppler.com', '28406164', 'registrado', 0, '2021-09-28 01:57:11 PM', 'Indio ', 'Solari', 'Argentina', '+542494619636', 'Redon2', '172.22.0.1', 'pais harcode', 1, 0, NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suscriptions_doppler`
--
ALTER TABLE `suscriptions_doppler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
