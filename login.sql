-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 12:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Mail_id` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`FirstName`, `LastName`, `Mail_id`, `Password`, `Confirm_Password`) VALUES
('hi', 'hnhnj', 'karthi1213@gmail.com', 'karthi', 'karthi'),
('karthikeyan', 'P', 'karthi27042001@gmail.com', 'karthi', 'karthi'),
('Aaron ', 'Thamizh ', 'aaronderossi@gmail.com', 'balaji', 'balaji'),
('durga', 'karthi', 'karthi008@gmail.com', '9790933', '9790933'),
('Rakky', 'Geetha', 'geetharakky@gmail.com', 'rakky', 'rakky'),
('karthi', 'messi', 'messi008@gmail.com', '9097933', '9790933'),
('karthi', 'durga', 'durga@gmail.com', 'karthi', 'karthi'),
('abishek', 'harini', 'abi028@gmail.com', 'abi', 'abi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
