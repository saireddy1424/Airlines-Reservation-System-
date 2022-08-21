-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 03:49 PM
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
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` varchar(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Pswd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Name`, `Pswd`) VALUES
('1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aircraft`
--

CREATE TABLE `aircraft` (
  `Flight_ID` varchar(20) NOT NULL,
  `Dep_Time` datetime NOT NULL,
  `Arr_Time` datetime DEFAULT NULL,
  `Plane_Name` varchar(20) DEFAULT NULL,
  `Src` varchar(20) DEFAULT NULL,
  `Dstn` varchar(20) DEFAULT NULL,
  `Fare` int(11) DEFAULT NULL,
  `Dep_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aircraft`
--

INSERT INTO `aircraft` (`Flight_ID`, `Dep_Time`, `Arr_Time`, `Plane_Name`, `Src`, `Dstn`, `Fare`, `Dep_Date`) VALUES
('1000', '2022-03-24 06:10:00', '2022-03-24 08:00:00', 'AirIndia', 'Bangalore', 'Mumbai', 3000, '2022-03-24'),
('1001', '2022-03-24 22:30:00', '2022-03-25 00:00:00', 'AirIndia', 'Mumbai', 'Bangalore', 3000, '2022-03-24'),
('1003', '2022-03-24 22:30:00', '2022-03-25 01:30:00', 'AirIndia', 'Bangalore', 'Delhi', 4000, '2022-03-24'),
('1004', '2022-03-25 04:30:00', '2022-03-25 07:15:00', 'AirIndia', 'Delhi', 'Bangalore', 4000, '2022-03-25'),
('2000', '2022-03-24 12:30:00', '2022-03-24 15:00:00', 'emirates', 'Bangalore', 'Mumbai', 3250, '2022-03-24'),
('2001', '2022-03-24 16:00:00', '2022-03-24 16:30:00', 'emirates', 'Mumbai', 'Bangalore', 3250, '2022-03-24'),
('2002', '2022-03-24 12:30:00', '2022-03-24 15:45:00', 'emirates', 'Bangalore', 'Delhi', 4500, '2022-03-24'),
('2003', '2022-03-24 08:30:00', '2022-03-24 12:00:00', 'emirates', 'Delhi', 'Bangalore', 4500, '2022-03-24'),
('3000', '2022-03-24 16:30:00', '2022-03-24 19:00:00', 'indigo', 'Bangalore', 'Mumbai', 2750, '2022-03-24'),
('3001', '2022-03-24 22:30:00', '2022-03-25 01:20:00', 'indigo', 'Delhi', 'Bangalore', 3500, '2022-03-24'),
('4000', '2022-03-24 09:00:00', '2022-03-24 11:00:00', 'SpiceJet', 'Mumbai', 'Bangalore', 3100, '2022-03-24'),
('4001', '2022-03-24 10:30:00', '2022-03-24 14:00:00', 'SpiceJet', 'Bangalore', 'Delhi', 3600, '2022-03-24'),
('5000', '2022-03-24 16:00:00', '2022-03-24 18:00:00', 'Kingfisher', 'Bangalore', 'Mumbai', 3200, '2022-03-24'),
('5001', '2022-03-24 12:00:00', '2022-03-24 14:30:00', 'Kingfisher', 'Mumbai', 'Bangalore', 3200, '2022-03-24'),
('5002', '2022-03-24 05:00:00', '2022-03-24 08:00:00', 'Kingfisher', 'Bangalore', 'Delhi', 4200, '2022-03-24'),
('5003', '2022-03-24 22:00:00', '2022-03-25 01:00:00', 'Kingfisher', 'Delhi', 'Bangalore', 4100, '2022-03-24');

--
-- Triggers `aircraft`
--
DELIMITER $$
CREATE TRIGGER `UPDATE_RECORDS` AFTER UPDATE ON `aircraft` FOR EACH ROW BEGIN
UPDATE RECORDS SET Dep_Time=new.Dep_Time WHERE Flight_ID = new.Flight_ID AND Dep_Time=old.Dep_Time ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `User_Name` varchar(20) NOT NULL,
  `Pswd` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Phone` varchar(13) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`User_Name`, `Pswd`, `Email`, `Phone`, `Age`) VALUES
('abc', 'abc', 'abc@gmail.com', '1234567890', 23),
('darshan', 'darshan', 'darshan@gmail.com', '9353832052', 20),
('pqr', '6122001', 'pqr@gmail.com', '8147946458', 20),
('sai', 'sai', 'sai@gmail.com', '3456789012', 20);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Type`) VALUES
('card'),
('Credit Card'),
('Paytm'),
('Upi'),
('Wallet');

-- --------------------------------------------------------

--
-- Table structure for table `planes`
--

CREATE TABLE `planes` (
  `Plane_Name` varchar(20) NOT NULL,
  `Class` varchar(10) DEFAULT NULL,
  `Seats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planes`
--

INSERT INTO `planes` (`Plane_Name`, `Class`, `Seats`) VALUES
('AirIndia', 'Bussiness', 30),
('emirates', 'General', 10),
('indigo', 'bussiness', 3),
('Kingfisher', 'Bussiness', 20),
('SpiceJet', 'Bussiness', 5);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `Book_ID` int(11) NOT NULL,
  `Flight_ID` varchar(20) DEFAULT NULL,
  `Book_Time` datetime DEFAULT NULL,
  `User_Name` varchar(20) DEFAULT NULL,
  `Payment_Type` varchar(20) DEFAULT NULL,
  `Dep_Time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`Book_ID`, `Flight_ID`, `Book_Time`, `User_Name`, `Payment_Type`, `Dep_Time`) VALUES
(19, '1000', '2022-03-21 17:26:43', 'pqr', 'Paytm', '2022-03-24 06:10:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `aircraft`
--
ALTER TABLE `aircraft`
  ADD PRIMARY KEY (`Flight_ID`,`Dep_Time`),
  ADD KEY `Plane_Name` (`Plane_Name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`User_Name`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Type`);

--
-- Indexes for table `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`Plane_Name`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`Book_ID`),
  ADD KEY `User_Name` (`User_Name`),
  ADD KEY `Payment_Type` (`Payment_Type`),
  ADD KEY `records_ibfk_1` (`Flight_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aircraft`
--
ALTER TABLE `aircraft`
  ADD CONSTRAINT `aircraft_ibfk_1` FOREIGN KEY (`Plane_Name`) REFERENCES `planes` (`Plane_Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`Flight_ID`) REFERENCES `aircraft` (`Flight_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `records_ibfk_2` FOREIGN KEY (`User_Name`) REFERENCES `customer` (`User_Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `records_ibfk_3` FOREIGN KEY (`Payment_Type`) REFERENCES `payment` (`Type`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
