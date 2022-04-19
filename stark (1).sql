-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 09:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stark`
--
CREATE DATABASE IF NOT EXISTS `stark` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `stark`;

-- --------------------------------------------------------

--
-- Table structure for table `kunder`
--

CREATE TABLE IF NOT EXISTS `kunder` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Navn` varchar(255) NOT NULL,
  `Telefon` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Kortnummer` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kunder`
--

INSERT INTO `kunder` (`ID`, `Navn`, `Telefon`, `Email`, `Kortnummer`) VALUES
(1, 'soren soren', 12345678, 'soren@hej.com', 123123123),
(2, 'soren', 1234, '1234', 12345),
(3, '', 0, '', 0),
(4, 'hej', 1234, '1234', 1234),
(5, 'tho', 1234, 'tho', 1234),
(6, '', 0, '', 0),
(7, '', 0, '', 0),
(8, '', 0, '', 0),
(9, 'hej', 123121, 'hehehe', 1231231),
(10, 'asdasdsada', 1231231231, 'asdasdqwe', 2147483647),
(11, 'asdadasda', 123123131, 'asdasdasdas', 2147483647),
(12, 'asdasda', 2147483647, 'hjhjhjhjhjhjhjhj', 2147483647),
(13, 'lau', 123123213, 'jajsdjasjd', 2147483647),
(14, 'lau lau', 1231231, '1231231', 123123123),
(15, '12312321312', 2147483647, '1231231231', 2147483647),
(16, '131231231', 1231231414, '1414214', 12312312),
(17, 'heejeje', 11231231, '12147147', 127371237),
(18, '12731717', 1273127347, '12731273127', 124612561),
(19, '1231231', 12312313, '123123123', 123123123),
(20, '5555', 555, '5555', 55555),
(21, '11111', 11111, '1111', 11111),
(22, '2', 2, '2', 2),
(23, '333', 333, '333', 333),
(24, '4444', 4444, '4444', 44444),
(25, '1', 1, '1', 1),
(26, '44', 44, '44', 44),
(27, '444', 444, '444', 4444),
(28, '44', 44, '44', 44),
(29, '33', 35, '654', 21),
(30, '777', 666, '888', 9999),
(31, '123124', 5131231, '151t123', 12514213),
(32, '3333', 3333, '333', 33),
(33, '5123', 51231, '5123', 5123);

-- --------------------------------------------------------

--
-- Table structure for table `ordrer`
--

CREATE TABLE IF NOT EXISTS `ordrer` (
  `OrdrerID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `ProduktID` int(11) NOT NULL,
  `Dato` date NOT NULL,
  `DatoSlut` date NOT NULL,
  PRIMARY KEY (`OrdrerID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordrer`
--

INSERT INTO `ordrer` (`OrdrerID`, `ID`, `ProduktID`, `Dato`, `DatoSlut`) VALUES
(3, 32, 3, '2022-04-22', '2022-04-24'),
(4, 33, 2, '2022-04-21', '2022-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `produkter`
--

CREATE TABLE IF NOT EXISTS `produkter` (
  `ProduktID` int(11) NOT NULL AUTO_INCREMENT,
  `ProduktNavn` varchar(25) NOT NULL,
  `Lokation` varchar(25) NOT NULL,
  PRIMARY KEY (`ProduktID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkter`
--

INSERT INTO `produkter` (`ProduktID`, `ProduktNavn`, `Lokation`) VALUES
(1, 'Jordbor', 'Odense'),
(2, 'Jordbor', 'Odense'),
(3, 'Jordbor', 'Odense'),
(4, 'Jordbor', 'Århus'),
(5, 'Jordbor', 'Århus');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
