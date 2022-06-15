-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2018 at 05:00 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freesmszone`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Number` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`,`Number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Email`, `Name`, `Number`) VALUES
(18, 'abc@gmail.com', 'harmeet', '9877990950'),
(20, 'abc@gmail.com', 'rakesh ', '8427077447');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `Email`, `Password`, `City`, `Mobile`) VALUES
('ABC DFG', 'abc@gmail.com', '12345', 'Amristar', '0123456789'),
('harmeet kaur', 'harmeet@gmail.com', '12345', 'Amristar', '0123456789'),
('Komal Preet', 'Komalpreetsk24@gmail.com', '667788', 'Amristar', '986778855'),
('dfjkh lname', 'sdfjkh@gmail.ocm', '12', 'kljkj', 'kljkljkljkl');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`Id`, `email`, `Contact`, `Message`) VALUES
(20, 'abc@gmail.com', 'jatinder,harmeet', 'hello');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
