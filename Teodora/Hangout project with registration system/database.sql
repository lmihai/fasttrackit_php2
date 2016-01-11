
-- Baza de date: `userregistration`
--
CREATE DATABASE `userregistration2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `userregistration2`;

-- --------------------------------------------------------

--
-- Structura tabelului `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(200) NOT NULL,
  `Lname` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `ocupation` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Photo` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structura tabel proposal
--

CREATE TABLE IF NOT EXISTS `proposal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `starts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subject` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `ends` date NOT NULL,  
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Structura tabel files
--

CREATE TABLE IF NOT EXISTS `files` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fileLocation` varchar(200) NOT NULL,    
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Structura tabel choices
--

CREATE TABLE IF NOT EXISTS `choices` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,    
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Structura tabel answers
--

CREATE TABLE IF NOT EXISTS `answers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `proposalID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `choiceID` int(11) NOT NULL,      
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
