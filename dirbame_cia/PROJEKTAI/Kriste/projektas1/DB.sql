-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 08, 2018 at 04:13 PM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `zylesdebesy`
--
CREATE DATABASE IF NOT EXISTS `zylesdebesy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `zylesdebesy`;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(6) NOT NULL,
  `category` varchar(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `count` int(6) NOT NULL,
  `dimensions` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category`, `title`, `foto`, `description`, `price`, `count`, `dimensions`, `material`) VALUES
(1, 'rings', 'Pink Pom', '\"images/Prekes/rings/10.jpg\" alt=\"Card image cap\"', 'A ring is a round band, usually of metal, worn as an ornamental piece of jewellery around the finger, or sometimes the toe; it is the most common current meaning of the word \"ring\". Strictly speaking a normal ring is a finger ring (which may be hyphenated); other types of rings worn as ornaments are earrings, bracelets for the wrist, armlets or arm rings, toe rings and torc or neck rings, but except perhaps for toe rings, the plain term \"ring\" is not normally used to refer to these.', 10, 1, 'Various countries have traditional sizing systems that are still used.', 'Rings are most often made of metal but can be of almost any material.'),
(2, 'rings', 'Green Pom', '\"images/Prekes/rings/11.jpg\" alt=\"Card image cap\"', 'A ring is a round band, usually of metal, worn as an ornamental piece of jewellery around the finger, or sometimes the toe; it is the most common current meaning of the word \"ring\". Strictly speaking a normal ring is a finger ring (which may be hyphenated); other types of rings worn as ornaments are earrings, bracelets for the wrist, armlets or arm rings, toe rings and torc or neck rings, but except perhaps for toe rings, the plain term \"ring\" is not normally used to refer to these.', 10, 1, 'Various countries have traditional sizing systems that are still used.', 'Rings are most often made of metal but can be of almost any material.'),
(3, 'rings', 'Black Pom', '\"images/Prekes/rings/12.jpg\" alt=\"Card image cap\"', 'A ring is a round band, usually of metal, worn as an ornamental piece of jewellery around the finger, or sometimes the toe; it is the most common current meaning of the word \"ring\". Strictly speaking a normal ring is a finger ring (which may be hyphenated); other types of rings worn as ornaments are earrings, bracelets for the wrist, armlets or arm rings, toe rings and torc or neck rings, but except perhaps for toe rings, the plain term \"ring\" is not normally used to refer to these.', 10, 1, 'Various countries have traditional sizing systems that are still used.', 'Rings are most often made of metal but can be of almost any material.'),
(4, 'bracelets', 'Black trio set', '\"images/Prekes/bracelets/24.jpg\" alt=\"Card image cap\"', 'A bracelet is an article of jewellery that is worn around the wrist. Bracelets may serve different uses, such as being worn as an ornament. When worn as ornaments, bracelets may have a supportive function to hold other items of decoration, such as charms.', 20, 1, 'If a bracelet is a single, inflexible loop, it is often called a bangle.', 'Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials.'),
(5, 'bracelets', 'Green trio set', '\"images/Prekes/bracelets/23.jpg\" alt=\"Card image cap\"', 'A bracelet is an article of jewellery that is worn around the wrist. Bracelets may serve different uses, such as being worn as an ornament. When worn as ornaments, bracelets may have a supportive function to hold other items of decoration, such as charms.', 20, 1, 'If a bracelet is a single, inflexible loop, it is often called a bangle.', 'Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials.'),
(6, 'bracelets', 'Black fringe', '\"images/Prekes/bracelets/40.jpg\" alt=\"Card image cap\"', 'A bracelet is an article of jewellery that is worn around the wrist. Bracelets may serve different uses, such as being worn as an ornament. When worn as ornaments, bracelets may have a supportive function to hold other items of decoration, such as charms.', 15, 1, 'If a bracelet is a single, inflexible loop, it is often called a bangle.', 'Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials.'),
(7, 'bracelets', 'Green fringe', '\"images/Prekes/bracelets/39.jpg\" alt=\"Card image cap\"', 'A bracelet is an article of jewellery that is worn around the wrist. Bracelets may serve different uses, such as being worn as an ornament. When worn as ornaments, bracelets may have a supportive function to hold other items of decoration, such as charms.', 15, 1, 'If a bracelet is a single, inflexible loop, it is often called a bangle.', 'Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials.'),
(8, 'bracelets', 'Matic fringe', '\"images/Prekes/bracelets/36.jpg\" alt=\"Card image cap\"', 'A bracelet is an article of jewellery that is worn around the wrist. Bracelets may serve different uses, such as being worn as an ornament. When worn as ornaments, bracelets may have a supportive function to hold other items of decoration, such as charms.', 15, 1, 'If a bracelet is a single, inflexible loop, it is often called a bangle.', 'Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials.'),
(9, 'bracelets', 'Fatima', '\"images/Prekes/bracelets/34.jpg\" alt=\"Card image cap\"', 'A bracelet is an article of jewellery that is worn around the wrist. Bracelets may serve different uses, such as being worn as an ornament. When worn as ornaments, bracelets may have a supportive function to hold other items of decoration, such as charms.', 18, 1, 'If a bracelet is a single, inflexible loop, it is often called a bangle.', 'Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials.'),
(10, 'bracelets', 'Scull in colors', '\"images/Prekes/bracelets/32.jpg\" alt=\"Card image cap\"', 'A bracelet is an article of jewellery that is worn around the wrist. Bracelets may serve different uses, such as being worn as an ornament. When worn as ornaments, bracelets may have a supportive function to hold other items of decoration, such as charms.', 18, 1, 'If a bracelet is a single, inflexible loop, it is often called a bangle.', 'Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials.'),
(11, 'bracelets', 'Matic bubble', '\"images/Prekes/bracelets/30.jpg\" alt=\"Card image cap\"', 'A bracelet is an article of jewellery that is worn around the wrist. Bracelets may serve different uses, such as being worn as an ornament. When worn as ornaments, bracelets may have a supportive function to hold other items of decoration, such as charms.', 18, 1, 'If a bracelet is a single, inflexible loop, it is often called a bangle.', 'Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials.'),
(12, 'bracelets', 'Matic scull', '\"images/Prekes/bracelets/28.jpg\" alt=\"Card image cap\"', 'A bracelet is an article of jewellery that is worn around the wrist. Bracelets may serve different uses, such as being worn as an ornament. When worn as ornaments, bracelets may have a supportive function to hold other items of decoration, such as charms.', 18, 1, 'If a bracelet is a single, inflexible loop, it is often called a bangle.', 'Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials.'),
(13, 'bracelets', 'Simple one', '\"images/Prekes/bracelets/26.jpg\" alt=\"Card image cap\"', 'A bracelet is an article of jewellery that is worn around the wrist. Bracelets may serve different uses, such as being worn as an ornament. When worn as ornaments, bracelets may have a supportive function to hold other items of decoration, such as charms.', 10, 1, 'If a bracelet is a single, inflexible loop, it is often called a bangle.', 'Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials.'),
(14, 'keychains', 'Ginger pom-chain', '\"images/Prekes/keychains/19.jpg\" alt=\"Card image cap\"', 'A keychain, or keyring, is a small chain, usually made from metal or plastic, that connects a small item to a keyring. The length of a keychain allows an item to be used more easily than if connected directly to a keyring. Some keychains allow one or both ends the ability to rotate, keeping the keychain from becoming twisted, while the item is being used.', 10, 1, '-', 'A plastic charm keychain on a carabiner.'),
(15, 'keychains', 'Hazel Pom-chain', '\"images/Prekes/keychains/21.jpg\" alt=\"Card image cap\"', 'A keychain, or keyring, is a small chain, usually made from metal or plastic, that connects a small item to a keyring. The length of a keychain allows an item to be used more easily than if connected directly to a keyring. Some keychains allow one or both ends the ability to rotate, keeping the keychain from becoming twisted, while the item is being used.', 10, 1, '-', 'A plastic charm keychain on a carabiner.'),
(16, 'earings', 'Raspberry Pom-Pom', '\"images/Prekes/earings/16.jpg\" alt=\"Card image cap\"', 'An earring is a piece of jewellery attached to the ear via a piercing in the earlobe or another external part of the ear (except in the case of clip earrings, which clip onto the lobe). Earrings are worn by both sexes, although more common among women, and have been used by different civilizations in different times.', 15, 1, '-', 'Earring components may be made of any number of materials.'),
(17, 'earings', 'Strawberry Pom-Pom', '\"images/Prekes/earings/14.jpg\" alt=\"Card image cap\"', 'An earring is a piece of jewellery attached to the ear via a piercing in the earlobe or another external part of the ear (except in the case of clip earrings, which clip onto the lobe). Earrings are worn by both sexes, although more common among women, and have been used by different civilizations in different times.', 15, 1, '-', 'Earring components may be made of any number of materials.');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES
(3, 'JRUHDJASD', 'ssss.lt', 'ADHJKSNDAhh hhhh'),
(4, 'JRUHDJASD', 'ssss.lt', 'ADHJKSNDAhh hhhh'),
(5, 'JRUHDJASD', 'ssss', 'ADHJKSNDAhh hhhh'),
(6, 'JRUHDJASD', 'ssss', 'ADHJKSNDAhh hhhh'),
(7, 'KRsina skaiak', 'hsuah@ai.lr', 'ahkfjahfw jafiewjf kejfklewmf ??'),
(8, 'KRsina skaiak', 'hsuah@ai.lr', 'ahkfjahfw jafiewjf kejfklewmf ??'),
(9, 'KRsina skaiak', 'hsuah@ai.lr', 'ahkfjahfw jafiewjf kejfklewmf ??'),
(10, 'jreg wkfjkewf jewfke', 'jejeje@hhdhd.lt', 'sfhiuahewf efjiewofn jewfewf'),
(11, 'jreg wkfjkewf jewfke', 'jejeje@hhdhd.lt', 'sfhiuahewf efjiewofn jewfewf'),
(12, 'jreg wkfjkewf jewfke', 'jejeje@hhdhd.lt', 'sfhiuahewf efjiewofn jewfewf'),
(13, 'pertas jsjsjsjjss', 'sjsjahue@hdydyd.lt', 'hwaiufjw wfjawr jwefioewfjewoifj !!'),
(14, 'ihuwdfn owejf', 'jfeiwojf@jjdd.eu', 'fhuiehfqqf'),
(15, 'hufhew fhwuehfew', 'saudhd@jhasfjf.eu', 'aihukhefuewhfe nfeufjewf efjewfe.'),
(16, 'Poviliukas', 'jdjfjfj@kdkd.lt', 'afhwe fewnkfjw rrr'),
(17, 'sdjjsjsdjkds', 'sdjsjkdsd@kskkdkd.lt', 'wfojewglmrgtgmwtphjlthtw'),
(18, 'afhkewfdsd', 'nweofjlwef@ksks.lt', ' sddajefhewjlf'),
(19, 'afhkewfdsd', 'nweofjlwef@ksks.lt', ' sddajefhewjlf'),
(20, 'sjfewJFWEKFOWEF', 'EWFE@GMAIL.FF', 'FWJF EFKMFASDKMVKMEWEWEW'),
(21, 'wjfiekljrkwem;f2', 'wekjfkwemf@jdjd.lt', 'fqjolwkf ewfjewijf rjpew'),
(22, 'hfeywhfwy', 'kriste@kriste@gmail.com', 'ihgujeqnfw'),
(23, 'hfeywhfwy', 'kriste@kriste@gmail.com', 'ihgujeqnfw'),
(24, 'feuhfiejFEQ', 'DNOEWIJFEK@fj.lr', 'aofjeoqjnfe'),
(25, 'feuhfiejFEQ', 'DNOEWIJFEK@fj.lr', 'aofjeoqjnfe'),
(26, 'jkadnfjad', 'ssdj@sjs.lt', 'wdwrwdnqwjkrqw');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(6) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(5, 'jjjdjdjdjd@jsjd.eu'),
(6, 'poviliukas@el.eu'),
(7, 'Kolega@kolega.lt'),
(8, 'Jovita@jovita.lt'),
(9, 'Jovita@jovita.lt'),
(10, 'djjdd@jd.lt'),
(11, 'naktinukas@nk.eu'),
(12, 'petras@dd.lt');

-- --------------------------------------------------------

--
-- Table structure for table `partneriai`
--

CREATE TABLE `partneriai` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `product` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partneriai`
--

INSERT INTO `partneriai` (`id`, `name`, `email`, `product`, `price`) VALUES
(5, 'Jolanta Jolantele', 'jolanta@jolanta.lt', 'Nuostabaus grozio melyni ziedai!', 12),
(24, 'Pranas Praniukas', 'pranas@pranas.lt', 'Puikus rankinukai!', 500),
(27, 'Juste Justinele', 'juste@juste.lt', 'Parduodu rankinukus.', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(15) NOT NULL,
  `datein` date NOT NULL,
  `answer` varchar(100) NOT NULL,
  `dateout` date NOT NULL,
  `completed` varchar(30) NOT NULL,
  `datecomp` date NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partneriai`
--
ALTER TABLE `partneriai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partneriai`
--
ALTER TABLE `partneriai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
