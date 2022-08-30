-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 04:46 PM
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
  `SL` int(11) NOT NULL,
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

INSERT INTO `customer_bill` (`SL`, `Full_name`, `E_mail`, `Address`, `User_ID`, `Package`, `Month`, `N_card`, `Card_no`, `Exp_month`, `Exp_year`, `CVV_no`) VALUES
(1, 'Dipto', 'david@gmail.com', 'Basundhora RA', 'Pappu121', '15 Mbps - 1499 TK', 'January', 'Dipto Datta pappu', '2147483647', 'April', 2027, 667),
(2, 'Sayam Ahmed', 'siam@gmail.com', 'H-11,R-4,Mirpur-10,Dhaka-1216.', 'Siam512', '10 Mbps - 999 TK', 'May', 'Sayam Ahmed Shanto', '2147483647', 'march', 2026, 887),
(3, 'Jhon', 'pappudutta121@gmail.com', 'Basundhora RA', 'ddp', '15 Mbps - 1499 TK', 'June', 'Towfikul', '6454675756747565', 'April', 2026, 777),
(4, 'Jhon', 'pappudutta121@gmail.com', 'University of Dhaka', 'ddp123', '20 Mbps - 1999 TK', 'August', 'Sayam Ahmed Shanto', '5465447867657567', 'may', 2027, 123),
(5, 'dipto datta', 'rakib@gmail.com', 'Block-D,Basundhora RA', 'zxadr', '15 Mbps - 1499 TK', 'May', 'dipto datta', '525252454855488', 'may', 2027, 554);

-- --------------------------------------------------------

--
-- Table structure for table `customer_complain`
--

CREATE TABLE `customer_complain` (
  `Complain_box` varchar(300) NOT NULL,
  `complaint_id` int(10) UNSIGNED NOT NULL,
  `User_ID` varchar(30) DEFAULT NULL,
  `c_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_complain`
--

INSERT INTO `customer_complain` (`Complain_box`, `complaint_id`, `User_ID`, `c_date`) VALUES
('connection lost from Saturday morning.', 31, 'hp123', '2022-08-28 18:00:00'),
('connection lost from Saturday morning.', 32, 'rk324', '2022-08-29 05:30:28'),
('Internet Slow issue.', 44, 'no123', '2022-08-29 20:45:35');

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
('no123', 'dipto Pappu', 'Dutta', '2001-02-13', 1628953063, 'pappudutta121@gmail.com', 6363537533735835737, 'dhaka-121612', '12345', '100 Mbps'),
('Rk123', 'Rakibul', 'Alam', '2001-02-15', 1753083329, 'rakib@gmail.com', 8976456342545464, 'Block-D,Basundhora RA', '12345', '12 MbpsE');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `Emp_id` varchar(30) NOT NULL,
  `Emp_name` varchar(30) NOT NULL,
  `Join_date` date NOT NULL,
  `NID` varchar(20) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Salary` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`Emp_id`, `Emp_name`, `Join_date`, `NID`, `Phone_no`, `Email`, `Address`, `Password`, `Salary`) VALUES
('David12', 'David Harko', '2022-08-27', '123456789987456123', 1753083320, 'david@gmail.com', 'NewYork City', '123', '100000 BDT'),
('rapa28', 'fahmida akter rapa', '2000-01-01', '74647546456464', 1857895426, 'rapa@gmail.com', 'dhaka,uttara', '1234', '1000000 BDT');

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

-- --------------------------------------------------------

--
-- Table structure for table `pack details`
--

CREATE TABLE `pack details` (
  `Pack_ID` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pack details`
--

INSERT INTO `pack details` (`Pack_ID`, `Price`) VALUES
('10 Mbps - 999 TK', 999),
('100 Mbps - 9499 TK', 9499),
('12 MbpsE - 499 TK', 499),
('15 Mbps - 1499 TK', 1499),
('20 Mbps - 1999 TK', 1999),
('20 MbpsF - 2499 TK', 2499),
('40 Mbps - 3999 TK', 3999),
('5 Mbps - 799 TK', 799);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_bill`
--
ALTER TABLE `customer_bill`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `customer_complain`
--
ALTER TABLE `customer_complain`
  ADD PRIMARY KEY (`complaint_id`);

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
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pack details`
--
ALTER TABLE `pack details`
  ADD PRIMARY KEY (`Pack_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_bill`
--
ALTER TABLE `customer_bill`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_complain`
--
ALTER TABLE `customer_complain`
  MODIFY `complaint_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
