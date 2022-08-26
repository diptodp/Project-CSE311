-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 06:10 PM
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
-- Table structure for table `customer_bill`
--

CREATE TABLE `customer_bill` (
  `Full_name` varchar(100) NOT NULL,
  `E_mail` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `User_ID` varchar(30) NOT NULL,
  `Package` varchar(100) NOT NULL,
  `Month` varchar(30) NOT NULL,
  `N_card` varchar(100) NOT NULL,
  `Card_no` varchar(200) NOT NULL,
  `Exp_month` varchar(30) NOT NULL,
  `Exp_year` int(10) NOT NULL,
  `CVV_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_bill`
--

INSERT INTO `customer_bill` (`Full_name`, `E_mail`, `Address`, `User_ID`, `Package`, `Month`, `N_card`, `Card_no`, `Exp_month`, `Exp_year`, `CVV_no`) VALUES
('Dipto', 'david@gmail.com', 'Basundhora RA', 'Pappu121', '15 Mbps - 1499 TK', 'August', 'Dipto Datta pappu', '2147483647', 'April', 2027, 667),
('Sayam Ahmed', 'siam@gmail.com', 'H-11,R-4,Mirpur-10,Dhaka-1216.', 'Siam512', '10 Mbps - 999 TK', 'February', 'Sayam Ahmed Shanto', '2147483647', 'march', 2026, 887),
('Jhon', 'pappudutta121@gmail.com', 'Basundhora RA', 'ddp', '15 Mbps - 1499 TK', 'March', 'Towfikul', '6454675756747565', 'April', 2026, 777),
('Jhon', 'pappudutta121@gmail.com', 'University of Dhaka', 'ddp123', '20 Mbps - 1999 TK', 'May', 'Sayam Ahmed Shanto', '5465447867657567', 'may', 2027, 123);

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
('no123', 'dipto Pappu', 'Dutta', '2001-02-13', 1628953063, 'pappudutta121@gmail.com', 6363537533735835737, 'Basundhora RA', '12345', '20 Mbps'),
('Siam512', 'Towfikul', 'Islam', '2000-02-09', 1715895426, 'siam@gmail.com', 9223372036854775807, 'Uttara,sector-04,Dhaka', 'siam121', '20 Mbps');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `Emp_id` varchar(30) NOT NULL,
  `Emp_name` varchar(30) NOT NULL,
  `Join_date` date NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Salary` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`Emp_id`, `Emp_name`, `Join_date`, `Phone_no`, `Email`, `Address`, `Password`, `Salary`) VALUES
('pappu121', 'Dipto Datta Pappu', '2001-02-13', 1628953065, 'pappudutta121@gmail.com', 'H-11,R-4,Mirpur-10,Dhaka-1216.', 'pappu121121', '120000'),
('rapa28', 'fahmida akter rapa', '2000-01-01', 1857895426, 'rapa@gmail.com', 'dhaka,uttara', '1234', '1000000'),
('Rapa_288', 'Fahmida Akter ', '2022-08-08', 1857895426, 'rapa@gmail.com', 'Dahaka uttara', '123', '50,000'),
('siam20', 'towfik siam em', '2022-08-02', 1857895426, 'rapa@gmail.com', 'Mirpur Dhaka', '123', '50,000 BDT');

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
-- Indexes for table `customer_bill`
--
ALTER TABLE `customer_bill`
  ADD PRIMARY KEY (`Month`);

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
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
