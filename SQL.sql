
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2015 at 09:41 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u811095077_exp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `BuyItem`
--

CREATE TABLE IF NOT EXISTS `BuyItem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Programe` varchar(100) NOT NULL,
  `Point` int(11) NOT NULL,
  `Day` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `BuyItem`
--

INSERT INTO `BuyItem` (`id`, `Programe`, `Point`, `Day`) VALUES
(1, 'WarZ_Siam', 50, '6');

-- --------------------------------------------------------

--
-- Table structure for table `Download`
--

CREATE TABLE IF NOT EXISTS `Download` (
  `id_download` int(11) NOT NULL AUTO_INCREMENT,
  `Programe` varchar(100) NOT NULL DEFAULT 'Name',
  `link` varchar(100) NOT NULL DEFAULT '#',
  `link2` varchar(100) NOT NULL DEFAULT '#',
  `Status` enum('Online','Offline','Soon') NOT NULL DEFAULT 'Online',
  `Name` varchar(100) NOT NULL DEFAULT 'NamePro',
  `Version` varchar(100) NOT NULL DEFAULT '1',
  `LinkYouTube` varchar(100) NOT NULL,
  `Support` varchar(100) NOT NULL DEFAULT 'Windows XP, 7, 8 ทั้ง 32 บิต และ 64 บิต',
  `Function` varchar(1000) NOT NULL DEFAULT '<br>-<br>-<br>-<br>-',
  `Game` varchar(1000) NOT NULL DEFAULT 'Game',
  `Update` varchar(1000) NOT NULL DEFAULT '00-00-0000',
  `Picture` varchar(1000) NOT NULL DEFAULT '#',
  `Clip` varchar(1000) NOT NULL DEFAULT '#',
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=226 ;

--
-- Dumping data for table `Download`
--

INSERT INTO `Download` (`id_download`, `Programe`, `link`, `link2`, `Status`, `Name`, `Version`, `LinkYouTube`, `Support`, `Function`, `Game`, `Update`, `Picture`, `Clip`) VALUES
(1, 'WarZ_Siam', '#', '#', 'Online', 'WarZ-Siam', '1', '#', 'Windows XP, 7, 8 ทั้ง 32 บิต และ 64 บิต', '-มองใส<br>-มองสี<br>-ไนวิชั่น<br>-ล๊อกเป้า<br>-ระยะล๊อก<br>-กรอบรอบตัวละคร<br>-แสดงไอเทม<br>-ยิงเองเมื่อล๊อก', 'Warz', '18-09-2015', '100.jpg', '#');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `UserID` varchar(50) NOT NULL,
  `List` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `IP` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `header` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mailinfo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `receiver` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=138 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `UserID` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Point` varchar(50) NOT NULL,
  `Status` enum('admin','member') NOT NULL DEFAULT 'member',
  `HWID` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `hwid_time` varchar(50) NOT NULL DEFAULT '0',
  `PBHKTEST` varchar(50) NOT NULL DEFAULT '0',
  `WarZ_Siam` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `TRHACK` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `IP` varchar(500) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=491 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Date`, `Email`, `Point`, `Status`, `HWID`, `hwid_time`, `PBHKTEST`, `WarZ_Siam`, `TRHACK`, `IP`) VALUES
(00487, 'admin', '44541230', '14/10/2015 10:30:27', 'admin@exp-pro.com', '0', 'admin', '0', '0', '0', '14-10-2016 10:22:57', '0', '1.47.99.37');

-- --------------------------------------------------------

--
-- Table structure for table `money_code`
--

CREATE TABLE IF NOT EXISTS `money_code` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Point` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `News` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `Setting`
--

CREATE TABLE IF NOT EXISTS `Setting` (
  `WebName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rehwid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DatePro` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'อัพเดทโปรแกรมล่าสุด 00-00-000'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Setting`
--

INSERT INTO `Setting` (`WebName`, `rehwid`, `DatePro`) VALUES
('EXP-PRO', '0', '11-09-2015');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
