-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2016 at 06:59 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(30) NOT NULL,
  `author` varchar(100) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `bdate` varchar(12) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Id`, `topic`, `author`, `file`, `bdate`) VALUES
(15, '7 Ways To Pass A Job Interview', 'http://www.wikihow.com/Pass-a-Job-Interview', '1.Do some research about the company ahead of time.\r\n2.Anticipate and practice your answers to common interview questions.\r\n3.Come up with a good strength and weakness. \r\n4.Bring some good questions of your own.\r\n5.Avoid clichÃ©s.\r\n6.Complete all necessary documents ahead of time.\r\n7.Dress the part.\r\n\r\n    ', '2016-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE IF NOT EXISTS `blogpost` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Upost` varchar(200) NOT NULL,
  `Udate` varchar(12) NOT NULL,
  `file` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`Id`, `UserId`, `Upost`, `Udate`, `file`) VALUES
(3, 1, 'It is good\r\n    ', '2016-03-28', ''),
(8, 7, 'I appreciate this article.\r\n    ', '2016-03-28', ''),
(9, 14, 'This is not good\r\n    ', '2016-03-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `childpost`
--

CREATE TABLE IF NOT EXISTS `childpost` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `UPost` varchar(500) NOT NULL,
  `Udate` varchar(20) NOT NULL,
  `file` varchar(35) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `childpost`
--

INSERT INTO `childpost` (`Id`, `UserId`, `UPost`, `Udate`, `file`) VALUES
(1, 5, 'Child Care\r\n    ', '2016-03-27', 'uploads/'),
(2, 12, 'Hello I have a child...\r\n    ', '2016-03-27', ''),
(3, 12, 'Lose\r\n    ', '2016-03-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `edupost`
--

CREATE TABLE IF NOT EXISTS `edupost` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `UPost` varchar(500) NOT NULL,
  `Udate` varchar(20) NOT NULL,
  `file` varchar(35) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `edupost`
--

INSERT INTO `edupost` (`Id`, `UserId`, `UPost`, `Udate`, `file`) VALUES
(1, 5, 'This is education\r\n    ', '2016-03-27', 'uploads/70404-final.txt');

-- --------------------------------------------------------

--
-- Table structure for table `eventrecord`
--

CREATE TABLE IF NOT EXISTS `eventrecord` (
  `Eid` int(11) NOT NULL AUTO_INCREMENT,
  `Epost` varchar(500) NOT NULL,
  `Edate` varchar(35) NOT NULL,
  `file` varchar(200) NOT NULL,
  `type` int(20) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`Eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `eventrecord`
--

INSERT INTO `eventrecord` (`Eid`, `Epost`, `Edate`, `file`, `type`, `size`) VALUES
(1, 'Tomorrow we are going to Bagerhat.', '2016-03-24', '', 0, 0),
(2, 'Tour to Sylhet is coming!', '2016-03-24', '', 0, 0),
(3, 'Happy Independence Day!!', '2016-03-25', '', 0, 0),
(4, 'Donate now\r\n    ', '2016-03-25', '', 0, 0),
(6, 'Practice    ', '2016-03-27', '69646-70404-final.txt', 0, 0),
(42, 'Tomorrow we are going to Rajshahi to help the poor. Come and join us!\r\n    ', '2016-03-29', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `medpost`
--

CREATE TABLE IF NOT EXISTS `medpost` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `UPost` varchar(500) NOT NULL,
  `Udate` varchar(20) NOT NULL,
  `file` varchar(35) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `medpost`
--

INSERT INTO `medpost` (`Id`, `UserId`, `UPost`, `Udate`, `file`) VALUES
(1, 5, 'gsdgg\r\n    ', '2016-03-27', 'uploads/31230-medcr.jpg'),
(2, 12, 'I want to donate\r\n    ', '2016-03-27', '48787-apache_pb.gif'),
(3, 12, 'Call\r\n    ', '2016-03-27', ''),
(4, 12, 'I am a doctor.\r\n    ', '2016-03-27', '31230-medcr.jpg'),
(5, 1, 'I am the admin.\r\n    ', '2016-03-28', ''),
(6, 4, 'Hello\r\n    ', '2016-03-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `otherpost`
--

CREATE TABLE IF NOT EXISTS `otherpost` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `UPost` varchar(500) NOT NULL,
  `Udate` varchar(20) NOT NULL,
  `file` varchar(35) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `otherpost`
--

INSERT INTO `otherpost` (`Id`, `UserId`, `UPost`, `Udate`, `file`) VALUES
(1, 5, 'Off topic\r\n    ', '2016-03-27', 'uploads/5078-childcr.jpg'),
(2, 12, 'I have a different issue\r\n    ', '2016-03-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `petpost`
--

CREATE TABLE IF NOT EXISTS `petpost` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `UPost` varchar(500) NOT NULL,
  `Udate` varchar(20) NOT NULL,
  `file` varchar(35) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `petpost`
--

INSERT INTO `petpost` (`Id`, `UserId`, `UPost`, `Udate`, `file`) VALUES
(1, 5, 'Pet Care\r\n    ', '2016-03-27', 'uploads/70310-man1.jpg'),
(2, 12, 'Post\r\n    ', '2016-03-27', ''),
(3, 12, 'I have a pet\r\n    ', '2016-03-27', ''),
(4, 4, 'Adopt a kitty.\r\n    ', '2016-03-27', 'WallpaperImage.Jpg');

-- --------------------------------------------------------

--
-- Table structure for table `postdate`
--

CREATE TABLE IF NOT EXISTS `postdate` (
  `PEid` int(11) NOT NULL AUTO_INCREMENT,
  `Eyear` int(11) NOT NULL,
  `Emonth` int(11) NOT NULL,
  PRIMARY KEY (`PEid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `postdate`
--

INSERT INTO `postdate` (`PEid`, `Eyear`, `Emonth`) VALUES
(1, 2016, 3),
(2, 2016, 3),
(3, 2016, 3),
(4, 2016, 3),
(6, 2016, 3),
(42, 2016, 3);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `approve` int(11) NOT NULL,
  `Upost` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Id`, `UserId`, `approve`, `Upost`) VALUES
(1, 12, 1, 'I have a pet\r\n    '),
(2, 12, 1, 'Hello I have a child...\r\n    '),
(65, 12, 1, 'Lose\r\n    '),
(66, 12, 1, 'I am a doctor.\r\n    '),
(67, 12, 2, 'I have a different issue\r\n    '),
(70, 4, 1, 'Warm Clothes\r\n    '),
(72, 4, 1, 'Adopt a kitty.\r\n    '),
(73, 1, 1, 'I am the admin.\r\n    '),
(74, 0, 0, 'It is a good post\r\n    '),
(76, 1, 1, 'It is good\r\n    '),
(77, 1, 1, 'Not that good\r\n    '),
(78, 1, 1, 'Pic koi\r\n    '),
(79, 4, 1, 'What is this??\r\n    '),
(80, 4, 1, 'What is this??\r\n    '),
(81, 4, 1, 'Jacket\r\n    '),
(82, 1, 1, 'Why do you want a jacket?\r\n    '),
(83, 7, 1, 'I appreciate this article.\r\n    '),
(84, 4, 1, 'Hello\r\n    '),
(85, 4, 1, 'Hello tajul\r\n    '),
(86, 14, 0, 'This is not good\r\n    ');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `block` int(11) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`UserId`, `Fname`, `Lname`, `Email`, `Password`, `block`) VALUES
(1, 'Admin', '', 'Admin', 'php123', 0),
(13, 'Tajul', 'Islam', 'tajul@gmail.com', 'd249c17d75d8e0e94024742d69231baa', 0),
(14, 'Nuhel', 'Ahnaf', 'nuhel@gamil.com', 'c9a9dc0977e1f8f167c0296501e96ac0', 0),
(15, 'Sifat', 'Ashfaque', 'ash@gmail.com', '2852f697a9f8581725c6fc6a5472a2e5', 1),
(16, 'Bradley', 'Cooper', 'brad@gmail.com', '884354eb56db3323cbce63a5e177ecac', 0),
(20, 'Benedict', 'Cumberbatch', 'ben@gmail.com', '7fe4771c008a22eb763df47d19e2c6aa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `volunlogin`
--

CREATE TABLE IF NOT EXISTS `volunlogin` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `volunlogin`
--

INSERT INTO `volunlogin` (`UserId`, `Fname`, `Lname`, `Email`, `Password`) VALUES
(2, 'Fariha', 'Tahsin', 'faria@gmail.com', 'faria'),
(3, 'Tajul', 'Islam', 'tajul@gmail.com', 'taj'),
(4, 'Zarreen Naowal', 'Reza', 'auroraprova@gmail.com', '234'),
(5, 'Nuhel', 'Ahnaf', 'nuhel@gamil.com', 'nuhel');

-- --------------------------------------------------------

--
-- Table structure for table `volunpost`
--

CREATE TABLE IF NOT EXISTS `volunpost` (
  `UserId` int(11) NOT NULL,
  `UPost` varchar(500) NOT NULL,
  `Udate` varchar(20) NOT NULL,
  `file` varchar(35) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `winterpost`
--

CREATE TABLE IF NOT EXISTS `winterpost` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Upost` varchar(500) NOT NULL,
  `Udate` varchar(15) NOT NULL,
  `file` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `winterpost`
--

INSERT INTO `winterpost` (`Id`, `UserId`, `Upost`, `Udate`, `file`) VALUES
(41, 7, 'I am Ben\r\n    ', '2016-03-26', ''),
(42, 10, 'Ami naki\r\n    ', '2016-03-26', ''),
(43, 5, 'Hello\r\n    ', '2016-03-27', ''),
(44, 5, 'Ki holo\r\n    ', '2016-03-27', 'uploads/71008-logo.jpg'),
(45, 5, 'AFGR\r\n    ', '2016-03-27', 'img/apache_pb.gif'),
(46, 5, 'Pic nai\r\n    ', '2016-03-27', ''),
(47, 5, '\r\n    ', '2016-03-27', '5078-childcr.jpg'),
(48, 7, 'I am Ben\r\n    ', '2016-03-27', ''),
(49, 11, 'I am asha\r\n    ', '2016-03-27', '31230-medcr.jpg'),
(51, 4, 'Warm Clothes\r\n    ', '2016-03-27', '10290008_10207489888180027_1870180819271690023_n.jpg'),
(52, 4, 'Warm Clothes\r\n    ', '2016-03-27', '10290008_10207489888180027_1870180819271690023_n.jpg'),
(53, 4, 'fuck!\r\n    ', '2016-03-27', '1.Jpg'),
(54, 4, 'Jacket\r\n    ', '2016-03-28', '230566_422521621139722_1534446245_n.jpg'),
(55, 1, 'Why do you want a jacket?\r\n    ', '2016-03-28', ''),
(56, 4, 'Hello tajul\r\n    ', '2016-03-29', '1.Jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
