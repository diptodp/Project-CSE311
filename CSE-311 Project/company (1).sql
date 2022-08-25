-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 06:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_complain`
--

CREATE TABLE `customer_complain` (
  `User_ID` varchar(30) NOT NULL,
  `Complain_box` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_complain`
--

INSERT INTO `customer_complain` (`User_ID`, `Complain_box`) VALUES
('hdydg67', 'i have some problem and its needs to be fixed urgent'),
('me4567', 'can not get access my deshboard'),
('pa121', 'i have some problem and its needs to be fixed urgent'),
('pappu121', 'i have some problem and its needs to be fixed urgent'),
('vx3456', 'i have some problem and its needs to be fixed');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `User_id` varchar(30) NOT NULL,
  `First_Name` varchar(30) DEFAULT NULL,
  `Last_Name` varchar(30) DEFAULT NULL,
  `Active_Date` date DEFAULT NULL,
  `Phone_no` int(11) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `NID` bigint(18) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `choose` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`User_id`, `First_Name`, `Last_Name`, `Active_Date`, `Phone_no`, `Email`, `NID`, `Address`, `Password`, `choose`) VALUES
('no123', 'Pappu', 'Dutta', '2001-02-13', 1628953063, 'pappudutta121@gmail.com', 6363537533735835737, 'H-117,R-40,Dhaka-1216.', '12345', '100 Mbps'),
('Siam512', 'Towfikul', 'Islam', '2000-02-09', 1715895426, 'siam@gmail.com', 9223372036854775807, 'Uttara,sector-04,Dhaka', 'siam121', '20 Mbps');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin1'),
(2, 'dipto', 'dipto1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_complain`
--
ALTER TABLE `customer_complain`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
