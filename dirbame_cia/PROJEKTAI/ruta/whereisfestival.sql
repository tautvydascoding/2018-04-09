-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2018 at 09:30 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whereisfestival`
--

-- --------------------------------------------------------

--
-- Table structure for table `festivals`
--

CREATE TABLE `festivals` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `date_festival_from` date NOT NULL,
  `date_festival_to` date NOT NULL,
  `date_created` date DEFAULT NULL,
  `date_edited` date DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `popularity` int(4) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `festivals`
--

INSERT INTO `festivals` (`id`, `title`, `description`, `date_festival_from`, `date_festival_to`, `date_created`, `date_edited`, `city`, `country`, `category`, `image`, `popularity`, `status`, `author`) VALUES
(1, 'Songkran', 'Songkran, the Thai new year and water festival, is celebrated by throwing buckets of water on friends and strangers in good-natured fun. Many revelers buy big water cannons and fight it out in the streets in wet, wild, dancing mayhem.\r\n\r\nThe streets of Chiang Mai shut down for several days of dancing and water throwing; water is provided by the moat around the Old City. You\'ll probably be drenched within minutes of leaving your hotel, so waterproof your belongings and arm yourself with a bucket; no one is allowed to stay dry!', '2019-04-12', '2019-04-14', '2018-05-04', NULL, 'Chiang Mai', 'Thailand', 'seasons carnivals', 'img/portfolio/02-thumbnail.jpg', NULL, NULL, 'ruta'),
(2, 'Phuket Vegetarian Festival', 'One of the most bizarre festivals in Thailand, don\'t think for a minute that the Phuket Vegetarian Festival is about discussing the finer points of tofu. Participants willingly pierce their faces with daggers or skewers, walk on hot coals, and lie on beds of knives.\r\n\r\nFirecrackers, chanting, and a dancing throng in the streets adds to the chaos as volunteers perform acts of self mutilation. Amazingly, the devotees claim that they feel little pain and even their wounds heal quickly after the festival.', '2018-10-08', '2018-10-18', '2018-05-04', NULL, 'Phuket', 'Thailand', 'religious', 'img/portfolio/05-thumbnail.jpg', NULL, NULL, 'ruta'),
(3, 'Loy Krathong', 'One of the most picturesque festivals in Bangkok is the evening of Loy Krathong, when people gather around lakes, rivers and canals to pay respects to the goddess of water by releasing beautiful lotus shaped rafts, decorated with candles, incense and flowers onto the water. Every year, Loy Krathong falls on the night of the twelfth lunar month (usually in November), at the end of the rainy season when the full-moon lights up the sky. The sight of thousands of Krathongs, their flickering candles sending a thousand pinpoints of light far into the horizon is a truly magical site, and there are plenty of places in Bangkok where you can get involved with the festivities. \r\n', '2018-11-04', '2018-11-04', '2018-05-04', NULL, 'Bangkok', 'Thailand', 'seasons', 'img/portfolio/06-thumbnail.jpg', NULL, NULL, 'ruta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `festivals`
--
ALTER TABLE `festivals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `festivals`
--
ALTER TABLE `festivals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
