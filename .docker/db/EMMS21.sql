-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 03, 2021 at 03:26 PM
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
  `eventStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin21`
--

INSERT INTO `admin21` (`id`, `eventStatus`) VALUES
(28, 'during'),
(29, 'during');

-- --------------------------------------------------------

--
-- Table structure for table `registrados`
--

DROP TABLE IF EXISTS `registrados`;
CREATE TABLE `registrados` (
  `id` int NOT NULL,
  `email` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `invito_dos_personas` tinyint DEFAULT NULL,
  `register` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pais` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefono` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `empresa` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `source_utm` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `medium_utm` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `campaign_utm` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content_utm` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `term_utm` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `registrados`
--

INSERT INTO `registrados` (`id`, `email`, `nombre`, `apellido`, `invito_dos_personas`, `register`, `pais`, `telefono`, `empresa`, `source_utm`, `medium_utm`, `campaign_utm`, `content_utm`, `term_utm`) VALUES
(4, 'hernan.f.cardoso@gmail.com', 'Federico', 'Cardoso', 0, '2021-11-01 04:29:19 PM', 'Argentina', '+542494619634', 'Doopler', '', '', '', '', ''),
(5, 'hcardoso@fromdoppler.com', 'Federico', 'Cardoso', 0, '2021-11-01 03:23:14 PM', 'Argentina', '+542494619634', 'Doopler', NULL, NULL, NULL, NULL, NULL),
(6, 'hcardoso+12@makingsense.com', 'Federico', 'Cardoso', 0, '2021-11-01 03:44:23 PM', 'Argentina', '+542494619634', 'Facebook', NULL, NULL, NULL, NULL, NULL),
(7, 'hcardoso+2@makingsense.com', 'Federico', 'Cardoso', 0, '2021-11-01 03:46:09 PM', 'Argentina', '+542494619631', 'Dopplr', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int NOT NULL,
  `youtube` varchar(20) NOT NULL,
  `twitch` varchar(250) NOT NULL,
  `fallas_tecnicas` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `youtube`, `twitch`, `fallas_tecnicas`) VALUES
(2, '7EmboKQH8lM', 'https://mail.google.com/mail/u/0/#inbox', 1),
(3, 'wHn1_QVoXGM', 'https://mail.google.com/mail/u/0/#inbox', 0);

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
  `email_anfitrion` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `register` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellido` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pais` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `empresa` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ip` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pais_ip` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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

INSERT INTO `suscriptions_doppler` (`id`, `email`, `list`, `form_id`, `invito_dos_personas`, `email_anfitrion`, `register`, `nombre`, `apellido`, `pais`, `telefono`, `empresa`, `ip`, `pais_ip`, `politica`, `promociones`, `source_utm`, `medium_utm`, `campaign_utm`, `content_utm`, `term_utm`) VALUES
(3, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-10-29 10:40:07 AM', 'Federico', 'Cardoso', 'Argentina', '+542494619637', 'Liga de la JUsticia', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(4, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 12:35:11 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619637', 'makingsense', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(5, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 12:36:23 PM', 'Federico2494619637', 'Cardoso', 'Argentina', '+542494619637', 'Doopler', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(6, 'hcardoso@fromdoppler.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:23:14 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Doopler', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(7, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:28:08 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619637', 'makingsense', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(8, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:30:08 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619637', 'Dopplr', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(9, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:31:11 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Facebook', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(10, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:36:23 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Liga de la JUsticia', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(11, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:39:20 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Facebook', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(12, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:41:48 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Dooppler', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(13, 'hcardoso+12@makingsense.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:44:23 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Facebook', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(14, 'hcardoso+2@makingsense.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:46:09 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619631', 'Dopplr', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(15, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:47:55 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619637', 'makingsense', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(16, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:50:31 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Liga de la JUsticia', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(17, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 03:58:06 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619637', 'Dopplr', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(18, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:01:24 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Dooppler', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(19, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:05:43 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'makingsense', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(20, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:09:02 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619637', 'Liga de la JUsticia', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(21, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:10:32 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Facebook', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(22, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:12:01 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Dopplr', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(23, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:13:32 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619637', 'Dooppler', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(24, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:15:13 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'makingsense', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(25, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:17:22 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Liga de la JUsticia', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(26, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:20:08 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619633', 'Dopplr', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(27, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:22:45 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Dooppler', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(28, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:26:44 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Facebook', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL),
(29, 'hernan.f.cardoso@gmail.com', '28406164', 'registrado', 0, NULL, '2021-11-01 04:29:19 PM', 'Federico', 'Cardoso', 'Argentina', '+542494619634', 'Doopler', '172.22.0.1', 'none', 1, 0, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin21`
--
ALTER TABLE `admin21`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `registrados`
--
ALTER TABLE `registrados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suscriptions_doppler`
--
ALTER TABLE `suscriptions_doppler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
