-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2016 at 11:53 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `ID` int(11) NOT NULL,
  `proposalID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `choiceID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ID`, `proposalID`, `userID`, `choiceID`) VALUES
(5, 6, 5, 2),
(9, 4, 5, 1),
(11, 1, 5, 3),
(12, 3, 17, 1),
(13, 6, 17, 2),
(14, 6, 18, 2),
(15, 5, 18, 1),
(16, 3, 18, 3),
(17, 5, 5, 1),
(18, 6, 7, 1),
(19, 5, 7, 2),
(20, 2, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE IF NOT EXISTS `choices` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`ID`, `name`) VALUES
(1, 'Great!I''m sure I''ll be there!'),
(2, 'It''s ok. I think if I come!'),
(3, 'Nope! I think it''s a waste of time!');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `ID` int(11) NOT NULL,
  `fileLocation` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`ID`, `fileLocation`) VALUES
(1, 'upload/avatar_1.jpg'),
(2, 'upload/avatar_1.jpg'),
(3, 'upload/avatar_1.jpg'),
(4, 'upload/avatar_1.jpg'),
(5, 'upload/avatar_1.jpg'),
(6, 'upload/avatar_1.jpg'),
(7, 'upload/avatar_1.jpg'),
(8, 'upload/avatar_1.jpg'),
(9, 'upload/avatar_2.jpg'),
(10, 'upload/avatar_4.jpg'),
(11, 'upload/avatar_7.jpg'),
(12, 'upload/avatar_5.jpg'),
(13, 'upload/avatar_8.jpg'),
(14, 'upload/avatar_3.jpg'),
(15, 'upload/avatare_femei_43.jpg'),
(16, 'upload/avatare_5.jpg'),
(17, 'upload/avatare_4.jpg'),
(18, 'upload/avatare_3.jpg'),
(19, 'upload/barbati1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `starts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subject` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `ends` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`ID`, `UserID`, `starts`, `subject`, `location`, `address`, `description`, `ends`) VALUES
(1, 5, '2016-01-06 09:39:26', 'Carrer', 'Deva', '				AJOFM - situat in centrul orasului aproape de Casa de Cultura				', '				Este vorba de un targ 	de joburi la care si-au anuntat participarea mai multi angajatori din domeniul IT.			', '2016-02-02'),
(2, 11, '2016-01-06 10:07:47', 'Coffe', 'Cluj-Napoca', '					Cafeneaua Mocca in incinta Mol Cluj-Napoca			', '	Suntem un grup de 3 web debeloperi din Cluj, vrem sa discutam de noutatile dn domeniu cu accent pe programare PHP si Mysql							', '2016-12-03'),
(3, 12, '2016-01-06 10:30:07', 'Trainning', 'Bucuresti', '					sala de sedinte din incinta Hotel IBis (langa Gara de Nord) etaj 1			', '			firma Bestcoding din Bucurest specializata pe cursuri din domeniul programarii web, sustine un curs intensiv de 8 ore cu subiectul Frameworkuri PHP					', '2016-12-03'),
(4, 18, '2016-01-07 10:07:03', 'Trainning', 'Constanta', '				sala conferinte Hotel Blue din Constanta				', 'seminar sustinut de catre reprezentanti a firmei Ubisoft privind filosirea framework-urilor PHP 								', '2016-02-03'),
(5, 19, '2016-01-09 07:13:46', 'Coffe', 'Cluj-Napoca', '			Cafebar mol Cluj					', '			just coffee...					', '2016-03-04'),
(6, 5, '2016-01-11 06:57:43', 'Freelancing', 'Cluj-Napoca', '				sala de conferinte hotel Belvedere Cluj				', '		Intalnire cu cei mai bine cotati freelaceri din Romania pe platformele freelancer.com si elance.com						', '2016-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL,
  `Fname` varchar(200) NOT NULL,
  `Lname` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ocupation` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Photo` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Fname`, `Lname`, `Email`, `Username`, `Password`, `Timestamp`, `ocupation`, `Company`, `Phone`, `Photo`, `location`) VALUES
(4, 'Mircea', 'Popescu', 'mircea@gmail.com', '', '$2y$10$CoGEVBxvzNqEZT/DzmnEYu9ltPDdYA1buYwR3shusBptl9vABcjui', '2016-01-03 20:01:51', '', '', '', 14, ''),
(5, 'Teodora', 'Roman', 'teo_romann@yahoo.com', '', '$2y$10$2GU6ovWHjPm.Rch5nh6QTej5lSs9C/4dXE32g.ZhAWWk.U7HESNuu', '2016-01-03 20:14:55', '', '', '', 8, ''),
(6, 'Asley', 'Brown', 'asley@msn.com', '', '$2y$10$vXl9sM60/Do.RafCiMsKKuqnbwe9XWIHNMGqP2S1eiz3T/tSMtiJu', '2016-01-03 20:00:06', '', '', '', 12, ''),
(7, 'John', 'Smith', 'john@gmail.com', '', '$2y$10$nu0IiYofFIALjph3Fom/3.N6Dv4/Gt5QVpJznOJSDJ2UYnMFV2yby', '2016-01-03 20:00:54', '', '', '', 13, ''),
(9, 'Larisa', 'Cojocaru', 'larisa@gmail.com', '', '$2y$10$36z27Z8AlmwFJjajl7m96.Z8QCwAtRC649Nu.zied0eBwz4HnjfeK', '2016-01-03 20:17:22', '', '', '', 15, ''),
(10, 'Sorin', 'Sabau', 'sorin.sabau@gmail.com', '', '$2y$10$VcMaZAAvBbDmyeYBqgCQ1eA.dZaSKcjzEji7wQfy7LVhlQvjgQOTu', '2016-01-03 19:57:04', 'Trainer', 'Ubisoft Company srl Deva', '07880435123', 9, 'Deva'),
(11, 'Cristian', 'Zavastin', 'cristi@yahoo.com', '', '$2y$10$cwzuYBf0Kf0ym9JAL6FyKeJwEYX8wh6ub0KeHo6T.olpvvHQ0HbkG', '2016-01-03 19:58:09', 'Web designer', 'Bestsoft it srl', '0722420001', 10, 'Cluj-Napoca'),
(12, 'Raluca', 'Badea', 'raluca@gmail.com', '', '$2y$10$mKVVKzomyzml0nyft0AkLeA73KbOQTYsb/rXpV/JibbYHoA7Z6Com', '2016-01-03 19:59:03', 'Freelancer', '-', '0744 000 111', 11, 'Constanta'),
(17, 'Marius', 'Potoroaca', 'marius.potoroaca@gmail.ro', '', '$2y$10$ilL8cUs.tVfpGJKLw.To4OtRQYtHmrvZZFe.p3VZ..bxrlGY6Jl1e', '2016-01-03 20:18:58', 'Web developer', 'Maritan SA', '0741 088 012', 16, 'Bucuresti'),
(18, 'Cristian', 'Roman', 'cristi_roman@gmail.com', '', '$2y$10$zKzN2FVmkcYudmAyyUFj4uf7KFmbOx8BnNzNphb1NNImevJf5Qanq', '2016-01-04 16:37:14', 'Programator', 'IBM Company SA', '0721005001', 17, 'Deva'),
(19, 'Razvan', 'Bodea', 'razavan@yahoo.com', '', '$2y$10$ISjqb3CkCqT8tfKGtm60ce8/bjY/9A7hgR6RpB6CyfzUTM8olgg76', '2016-01-09 07:12:11', 'Trainer', 'Fastrackit', '0762115421', 18, 'Cluj-Napoca'),
(20, 'Florin', 'Mihalcea', 'florin@gmail.com', '', '$2y$10$UiRBXhlEtPgMqFsgQmhWF.kG1JcdkXYJyQwpaLC.Du2P7Zdv6amUe', '2016-01-11 15:20:16', 'Programator', 'Omniasig SA Bucuresti', '07420181180', 19, 'Bucuresti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
