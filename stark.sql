-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 09:26 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

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
(14, 'lau lau', 1231231, '1231231', 123123123);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
