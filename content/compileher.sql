-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2018 at 06:07 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compileher`
--

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

DROP TABLE IF EXISTS `final`;
CREATE TABLE IF NOT EXISTS `final` (
  `lname` char(20) NOT NULL,
  `mname` char(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `marks` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slot1`
--

DROP TABLE IF EXISTS `slot1`;
CREATE TABLE IF NOT EXISTS `slot1` (
  `lname` char(20) NOT NULL,
  `mname` char(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `marks` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slot2`
--

DROP TABLE IF EXISTS `slot2`;
CREATE TABLE IF NOT EXISTS `slot2` (
  `lname` char(20) NOT NULL,
  `mname` char(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `marks` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slot3`
--

DROP TABLE IF EXISTS `slot3`;
CREATE TABLE IF NOT EXISTS `slot3` (
  `lname` char(20) NOT NULL,
  `mname` char(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `marks` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slot4`
--

DROP TABLE IF EXISTS `slot4`;
CREATE TABLE IF NOT EXISTS `slot4` (
  `lname` char(20) NOT NULL,
  `mname` char(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `marks` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot4`
--

INSERT INTO `slot4` (`lname`, `mname`, `mobile`, `marks`) VALUES
('kishoe', 'kdsjfk', 9879874239, 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
