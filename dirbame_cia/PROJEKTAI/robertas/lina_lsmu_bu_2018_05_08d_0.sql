-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2018 at 11:51 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lina_lsmu`
--
CREATE DATABASE IF NOT EXISTS `lina_lsmu` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `lina_lsmu`;

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

DROP TABLE IF EXISTS `channels`;
CREATE TABLE `channels` (
  `id` int(6) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `name`, `description`) VALUES
(8, 'Pietus', 'Valgyt yra gerai.'),
(9, 'Vakarai', 'Vakaru pasaulio naujienos.'),
(10, 'Siaure', 'Ten salta.'),
(11, 'Rytai', 'Pasaulio gamyklos.'),
(12, 'Kates', 'Pilnas internatas kaciu.'),
(13, 'Sunys', 'Pilnos gatves sunu.'),
(14, 'Lietuviškai', 'Labai lietuviškai... ąčęėįšųūž');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(6) NOT NULL,
  `filename` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `filename`, `title`, `description`) VALUES
(7, 'metalas.jpg', 'Metalas metalinis', 'Žiba kaip reikalas. ąčęėįšųūž 😂'),
(8, 'rankos.jpg', 'Rankos', 'Kazka labai dirba.'),
(9, 'raso.jpg', 'Raso', 'Raso zmogus ant popieriaus su tusinuku.'),
(10, 'stiklainiai.jpg', 'Stiklainiai', 'Pagaminti is stiklo ir kartais su metaliniais dangteliais.'),
(11, 'ziuretojas.jpg', 'Ziuretojas', 'Zmogus labai intensyviai ziuri ir jam puikiai tai sekasi.'),
(12, 'ziuronai.jpg', 'Ziuronai', 'Panasus i ziuronus tik is pirmo neatidaus zvilgsnio.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `fname` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `lname` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `uname` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `uname`, `email`, `password`) VALUES
(50, 'Vardauskas', 'Pavardauskas', 'Usernameris', 'pasto@deze.com', '$2y$10$9yfsQDkGFb3gfh.lUFNSoOiVR/O6Zn1Vz8JuyhoKljoPFkoJIyG82'),
(51, 'Testeris', 'Pavartesteris', 'User24f', '3434@dfdfdf', '$2y$10$Dyq6pv7a3Wvu/5b6cRXolO0u3KQbR.mPkfJKXzH2lsFpGZKMGlvyG'),
(52, 'Testerdfd', 'Lasdfsdfsdf', 'testuser', 'dfdfdfdf@ddfdfdfdf', '$2y$10$UBWIJkDCUJME3CBIQYHqAu7lwdJYM.2YJ9J39Nx.xwuJGjdYYeLWa'),
(53, 'Tomka', 'Pavardausk', 'Tomas12', 'tomka@mail.com', '$2y$10$McQgFCFWUbPPxPv5fQAXc.ST1seIV27XySuhUCdmOWXPO3SzhrVr.'),
(54, 'Vardasmano', 'Pavardasmano', 'suva42', 'suva42@gmail.com', '$2y$10$g07SaNM4wYLFgjLNxiakluscEDTIYdn0zl7WbhxO/PfTSDXEJNhtC');

-- --------------------------------------------------------

--
-- Table structure for table `users_channels`
--

DROP TABLE IF EXISTS `users_channels`;
CREATE TABLE `users_channels` (
  `users_id` int(6) NOT NULL DEFAULT '0',
  `channels_id` int(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users_channels`
--

INSERT INTO `users_channels` (`users_id`, `channels_id`) VALUES
(48, 8),
(49, 10),
(49, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_channels`
--
ALTER TABLE `users_channels`
  ADD PRIMARY KEY (`users_id`,`channels_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
