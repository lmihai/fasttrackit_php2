-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2016 at 01:18 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `ID` int(11) NOT NULL,
  `CourseName` varchar(32) DEFAULT NULL,
  `Trainer` text
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `CourseName`, `Trainer`) VALUES
(1, 'Introduction in testing', 'Michael Testovici'),
(2, 'Web development with PHP', 'Cristian Buda'),
(3, 'Mobile development', 'Steve Jobs'),
(54, '1', '2'),
(58, '3', '4'),
(59, '5', '6');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `ID` int(11) NOT NULL,
  `Filelocation` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`ID`, `Filelocation`) VALUES
(1, 'uploads/1.jpg'),
(4, 'uploads/1.jpg'),
(5, 'uploads/3.jpg'),
(6, 'uploads/4.jpg'),
(7, 'uploads/3.jpg'),
(8, 'uploads/4.jpg'),
(9, 'uploads/3.jpg'),
(10, 'uploads/4.jpg'),
(11, 'uploads/4.jpg'),
(12, 'uploads/4.jpg'),
(13, 'uploads/3.jpg'),
(14, 'uploads/4.jpg'),
(15, 'uploads/3.jpg'),
(16, 'uploads/4.jpg'),
(17, 'uploads/4.jpg'),
(19, 'uploads/4.jpg'),
(21, 'uploads/c.pdf'),
(22, 'uploads/b.doc'),
(23, 'uploads/a.doc');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(16) DEFAULT NULL,
  `LastName` varchar(16) DEFAULT NULL,
  `Course` int(11) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `Photo` int(11) DEFAULT NULL,
  `CV` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `FirstName`, `LastName`, `Course`, `Score`, `Photo`, `CV`) VALUES
(1, 'John', 'Doe', 1, 7, 4, 21),
(2, 'James', 'Dean', 1, 5, 1, 22),
(3, 'Mary', 'Poppins', 2, 5, 5, 23),
(4, 'Forrest', 'Gump', 3, 9, 17, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
