-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 08:23 PM
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
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `FullName` varchar(50) NOT NULL,
  `MobileNo` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `PinCode` varchar(50) NOT NULL,
  `CardName` varchar(50) NOT NULL,
  `CardNumber` varchar(50) NOT NULL,
  `ExpMonth` varchar(50) NOT NULL,
  `ExpYear` varchar(50) NOT NULL,
  `Cvv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`FullName`, `MobileNo`, `Address`, `City`, `State`, `PinCode`, `CardName`, `CardNumber`, `ExpMonth`, `ExpYear`, `Cvv`) VALUES
('karthick', '9790944400', 'no1,rashmi towers,nungambakkam', 'Chennai', 'Tamil Nadu', '600013', 'Karthick', '6090897654321234', '12', '45', '899');

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
('abishek', 'harini', 'abi028@gmail.com', 'abi', 'abi'),
('pradeep', 'kar', 'kar008@gmail.com', 'kar008', 'kar008'),
('magesh', 'magi', 'magi09@gmail.com', 'magi', 'magi'),
('hi', 'bye', '123@gmail.com', '234', '234'),
('karthikeyan', 'durga', '123@gmail.com', '123', '123'),
('antony', 'prabhakaran', '122@gmail.com', '123', '123'),
('durga', 'durga', 'karthi1213@gmail.com', '1234', '1234'),
('arya', 'stark', 'strak123@gmail.com', 'GOT', 'GOT'),
('TAMIZH', 'SELVAN', '1234@gmail.com', '1234', '1234'),
('ji', 'hi', 'ok', '12345', '12345'),
('ji', 'ji', '12345@gmail.com', '098', '098'),
('rr', 'tt', '098@gmail.com', '098', '098'),
('po', 'hi', '456@gmail.com', '456', '456'),
('karthik', 'durga', 'karthi27042001@gmail.com', '123456', '123456'),
('kajal', 'agarwal', '678@gmail.com', '678', '678'),
('kartrhickc', 'chandru', 'kar1213@gmail.com', 'kar123', 'kar123'),
('karthikeyan', 'prabhakaran', 'bjnjm', '8765', '8765'),
('tony', 'stark', 'stark123@gmail.com', '67890', '67890'),
('durga', 'durga', 'tony', '45678', '45678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
