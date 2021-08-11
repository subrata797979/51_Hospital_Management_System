-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 02, 2021 at 12:05 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--
CREATE DATABASE IF NOT EXISTS `hms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `hms`;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `did` int NOT NULL AUTO_INCREMENT,
  `dname` varchar(25) NOT NULL,
  `addr` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `spl` varchar(30) DEFAULT NULL,
  `ph` varchar(20) DEFAULT NULL,
  `expr` varchar(30) DEFAULT NULL,
  `sal` float DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `addr`, `dob`, `email`, `spl`, `ph`, `expr`, `sal`) VALUES
(1, 'Subrata Halder', 'Naihati', '1997-07-10', 'subrata797979@gmail.com', 'Java', '8777047822', '2 year', 25000),
(3, 'Subrata Halder', 'AMRAPALLY', '1997-10-10', 'subrata797979@gmail.com', 'Python', '+448777047822', '3 year', 200),
(2, 'ABC', 'Kolkata', '2000-01-01', 'abc@gmail.com', 'C', '1234567890', '1 year', 20000),
(4, 'Saurabh Das', 'Bally', '1996-06-30', 'saurabh96official@gmail.com', 'Neurosurgeon', '8961039788', '4 year', 80000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
