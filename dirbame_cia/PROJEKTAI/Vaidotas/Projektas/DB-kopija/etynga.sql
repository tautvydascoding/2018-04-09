-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2018 at 06:36 AM
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
-- Database: `etynga`
--

-- --------------------------------------------------------

--
-- Table structure for table `darbai`
--

CREATE TABLE `darbai` (
  `id` int(6) NOT NULL,
  `img_nr` int(6) NOT NULL,
  `img_src` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_cat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `work_hourse_needed` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `darbai`
--

INSERT INTO `darbai` (`id`, `img_nr`, `img_src`, `cat`, `sub_cat`, `description`, `price`, `work_hourse_needed`) VALUES
(1, 1, 'Images/megzta/1.jpg', 'megzta', 'Skraistės', 'Stilinga skraistė', 35, 8),
(2, 2, 'Images/megzta/2.jpg', 'megzta', 'Šlepetės', 'Šlepetės šaltam rudeniui', 7, 3),
(3, 3, 'Images/megzta/3.jpg', 'megzta', 'Tapukai', 'Tapukai mašiniukai mažyliui', 5, 4),
(4, 4, 'Images/megzta/4.jpg', 'megzta', 'Šalikai ir pirštinės', 'Komplektas žiemai 1.', 15, 15),
(5, 5, 'Images/megzta/5.jpg', 'megzta', 'Šalikai ir pirštinės', 'Daugiafunkcinės pirštinės', 12, 12),
(6, 6, 'Images/megzta/6.jpg', 'megzta', 'Šalikai ir pirštinės', 'Komplektas žiemai 2.', 13, 10),
(7, 7, 'Images/megzta/7.jpg', 'megzta', 'liemenės', 'Vardinė liemenė jūsų atžalai', 10, 30),
(8, 8, 'Images/megzta/8.jpg', 'megzta', 'liemenės', 'Liemenė pelėdžiukas', 10, 30),
(9, 9, 'Images/megzta/9.jpg', 'megzta', 'Megztiniai', 'Rudolfas laukia jūsų', 40, 60),
(10, 10, 'Images/megzta/10.jpg', 'megzta', 'Megztiniai', 'Kalėdos porai', 80, 90),
(11, 11, 'Images/megzta/11.jpg', 'megzta', 'Megztiniai', 'Kalėdos mamai ir mažyliui', 65, 80),
(12, 12, 'Images/megzta/12.jpg', 'megzta', 'Megztiniai', 'Rudnosiukas mažyliui', 15, 10),
(13, 13, 'Images/megzta/13.jpg', 'megzta', 'Megztiniai', 'Mažoji Miu papuoš visus', 35, 60),
(14, 14, 'Images/megzta/14.jpg', 'megzta', 'Megztiniai', 'Kai užaugsiu-būtinai auginsiu', 20, 10),
(15, 15, 'Images/megzta/15.jpg', 'megzta', 'Megztiniai', 'Kiekvienam tikram Žalgirio fanui', 35, 60),
(16, 1, 'Images/nerta/1.jpg', 'nerta', 'Kuprinės', 'Drąsi kuprinė - drąsiai Damai', 25, 6),
(17, 2, 'Images/nerta/2.jpg', 'nerta', 'Krepšeliai', 'Krepšeliai', 4, 1),
(18, 3, 'Images/nerta/3.jpg', 'nerta', 'Rankinės', 'Rožinė rankinė', 20, 5),
(19, 4, 'Images/nerta/4.jpg', 'nerta', 'Delninukės', 'Mėlyna delninukė', 10, 2),
(20, 5, 'Images/nerta/5.jpg', 'nerta', 'Šlepetės', 'Spalvotosios šlepetės', 4, 1),
(21, 6, 'Images/nerta/6.jpg', 'nerta', 'Krepšeliai', 'Krepšeliai niekučiams', 6, 1),
(22, 7, 'Images/nerta/7.jpg', 'nerta', 'Delninukės', 'Violetinė delninukė', 10, 4),
(23, 8, 'Images/nerta/8.jpg', 'nerta', 'Aksesuarai', 'Mažajam riteriui', 9, 5),
(24, 9, 'Images/nerta/9.jpg', 'nerta', 'Tapukai', 'Riterio tapukai', 5, 3),
(25, 10, 'Images/nerta/10.jpg', 'nerta', 'Tapukai', 'Tapukai šiltoms vasaros dienoms', 4, 1),
(26, 1, 'Images/siuta/1.jpg', 'siuta', 'Sėdmaišiai', 'Sėdmaišis 1', 30, 12),
(27, 2, 'Images/siuta/2.jpg', 'siuta', 'Sėdmaišiai', 'Sėdmaišis 2', 50, 12),
(28, 3, 'Images/siuta/3.jpg', 'siuta', 'Sėdmaišiai', 'Sėdmaišis 3', 30, 12),
(29, 4, 'Images/siuta/4.jpg', 'siuta', 'Suknelės', 'Vasariškiausios suknelės', 17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `draugai`
--

CREATE TABLE `draugai` (
  `id` int(6) NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `draugai`
--

INSERT INTO `draugai` (`id`, `link`, `name`, `description`) VALUES
(1, 'https://siuludama.lt/', 'Siūlų dama', 'Mėgstamiausias siūlų tiekėjas'),
(2, 'http://www.siulogalas.lt/en/', 'Siūlo galas', 'Pristato ir į namus'),
(3, 'http://audiniai.com', 'Šilko Tekstilė', 'Aukštos kokybės audiniai'),
(11, 'asdasd', 'asddsa', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `karusele`
--

CREATE TABLE `karusele` (
  `id` int(6) NOT NULL,
  `img_nr` int(6) NOT NULL,
  `img_src` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_cat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karusele`
--

INSERT INTO `karusele` (`id`, `img_nr`, `img_src`, `alt_text`, `cat`, `sub_cat`, `description`) VALUES
(1, 1, 'Images/megzta/karusele/1.jpg', 'Slide picture 1', 'megzta', 'Skraistės', 'Megztos skraistės'),
(2, 2, 'Images/megzta/karusele/2.jpg', 'Slide picture 2', 'megzta', 'Šlepetės', 'Šaltoms žiemoms'),
(3, 3, 'Images/megzta/karusele/3.jpg', 'Slide picture 3', 'megzta', 'Megzti tapukai', 'Patiems mažiausiems'),
(4, 4, 'Images/megzta/karusele/4.jpg', 'Slide picture 4', 'megzta', 'Megztos suknelės', 'Šiltos ir stilingos'),
(5, 5, 'Images/megzta/karusele/5.jpg', 'Slide picture 5', 'megzta', 'Megztiniai', 'Kalėdoms ir kitoms progoms'),
(6, 6, 'Images/megzta/karusele/6.jpg', 'Slide picture 6', 'megzta', 'Šalikai ir pirštinės', 'Lietuviškoms žiemoms'),
(7, 1, 'Images/nerta/karusele/1.jpg', 'Slide picture 1', 'nerta', 'Kuprinės', 'Kokių tik nori spalvų!'),
(8, 2, 'Images/nerta/karusele/2.jpg', 'Slide picture 2', 'nerta', 'Krepšeliai', 'Kasdien ir ne tik'),
(9, 3, 'Images/nerta/karusele/3.jpg', 'Slide picture 3', 'nerta', 'Rankinės', 'Platus priedų ir spalvų pasirinkimas'),
(10, 4, 'Images/nerta/karusele/4.jpg', 'Slide picture 4', 'nerta', 'Delninukės', 'Delninukės ar piniginės'),
(11, 5, 'Images/nerta/karusele/5.jpg', 'Slide picture 5', 'nerta', 'Šlepetės', 'Dekoracijos ir priedai pagal jūsų poreikius'),
(12, 1, 'Images/siuta/karusele/1.jpg', 'Slide picture 1', 'siuta', 'Sėdmaišiai', 'Įvairių dydžių ir formų');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `type`) VALUES
(1, 'etynga', 'agnyte123', 'etynga.mezga@gmail.com', 'admin'),
(2, 'admin', 'admin', 'etynga.mezga@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `uzklausa`
--

CREATE TABLE `uzklausa` (
  `id` int(6) NOT NULL,
  `vardas` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pavarde` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elpastas` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_nr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komentaras` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perziureta` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uzklausa`
--

INSERT INTO `uzklausa` (`id`, `vardas`, `pavarde`, `elpastas`, `tel_nr`, `komentaras`, `perziureta`) VALUES
(1, 'Petras', 'Petraitis', 'lol@lol.lt', '864355555', 'Po kiek ridikai?', NULL),
(2, 'a', 'a', 'aaa@a.lt', '86484646', 'po kiek ridikai?', NULL),
(3, 'Petras', 'Petraitis', 'a@a.com', '69', 'Norėčiau užsisakyti megztuką !', NULL),
(4, 'sadasd', 'asdasd', 'a@a.ru', '69', 'leisk pirkt', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `darbai`
--
ALTER TABLE `darbai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `draugai`
--
ALTER TABLE `draugai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karusele`
--
ALTER TABLE `karusele`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzklausa`
--
ALTER TABLE `uzklausa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `darbai`
--
ALTER TABLE `darbai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `draugai`
--
ALTER TABLE `draugai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `karusele`
--
ALTER TABLE `karusele`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `uzklausa`
--
ALTER TABLE `uzklausa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
