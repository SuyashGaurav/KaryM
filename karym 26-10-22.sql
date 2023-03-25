-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 06:46 AM
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
-- Database: `karym`
--

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

CREATE TABLE `contractors` (
  `Contractor_Id` int(11) NOT NULL,
  `ContractorName` varchar(60) DEFAULT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Phone_no` char(10) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `City` int(20) DEFAULT NULL,
  `Plumber` tinyint(1) DEFAULT NULL,
  `Electrician` tinyint(1) DEFAULT NULL,
  `Carpenter` tinyint(1) DEFAULT NULL,
  `Driver` tinyint(1) DEFAULT NULL,
  `Babysitter` tinyint(1) DEFAULT NULL,
  `Maid` tinyint(1) DEFAULT NULL,
  `Painter` tinyint(1) DEFAULT NULL,
  `CleaningAndPestcontrol` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`Contractor_Id`, `ContractorName`, `Email`, `Password`, `Phone_no`, `Address`, `City`, `Plumber`, `Electrician`, `Carpenter`, `Driver`, `Babysitter`, `Maid`, `Painter`, `CleaningAndPestcontrol`) VALUES
(1, 'kogami', 'kogami@go', 'kogami', '8343241234', 'Japan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_Id` int(11) NOT NULL,
  `CustomerName` varchar(60) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Phone_no` char(10) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_Id`, `CustomerName`, `Email`, `Phone_no`, `Address`, `Password`, `City`) VALUES
(2000, 'Erwin', 'erwin@erwin', '1231231231', 'Survey Corps, Germany', 'erwin', 'Alaska'),
(2001, 'Levi', 'levi@levi', '1341142212', 'Underground, Germany', 'levi', 'Alabama');

-- --------------------------------------------------------

--
-- Table structure for table `labourers`
--

CREATE TABLE `labourers` (
  `Labourer_Id` int(11) NOT NULL,
  `LabourerName` varchar(60) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Phone_no` int(10) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  `Plumber` tinyint(1) DEFAULT NULL,
  `Electrician` tinyint(1) DEFAULT NULL,
  `Carpenter` tinyint(1) DEFAULT NULL,
  `Maid` tinyint(1) DEFAULT NULL,
  `Babysitter` tinyint(1) DEFAULT NULL,
  `Driver` tinyint(1) DEFAULT NULL,
  `CleaningAndPestcontrol` tinyint(1) DEFAULT NULL,
  `Painter` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labourers`
--

INSERT INTO `labourers` (`Labourer_Id`, `LabourerName`, `Email`, `Phone_no`, `Address`, `City`, `Password`, `Plumber`, `Electrician`, `Carpenter`, `Maid`, `Babysitter`, `Driver`, `CleaningAndPestcontrol`, `Painter`) VALUES
(1000, 'eren', 'eren@eren', 12312, 'germany', 'Alaska', 'eren', 1, 1, 0, 0, 0, 0, 0, 0),
(1001, 'Guts', 'guts@guts', 1654331234, 'Midland, where blind sheep gather and erect a pillar', 'Alabama', 'guts', 0, 1, 0, 1, 1, 0, 0, 1),
(1002, 'Nithin Sabu', 'eren@erenf', 2147483647, NULL, NULL, 'erenfas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1003, 'asdfghj', 'eren@erentt', 2147483647, NULL, NULL, 'qwerty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workrequests`
--

CREATE TABLE `workrequests` (
  `customerid` int(11) NOT NULL,
  `work_request` varchar(500) DEFAULT NULL,
  `Plumber` tinyint(1) DEFAULT NULL,
  `Electrician` tinyint(1) DEFAULT NULL,
  `Carpenter` tinyint(1) DEFAULT NULL,
  `Babysitter` tinyint(1) DEFAULT NULL,
  `Maid` tinyint(1) DEFAULT NULL,
  `CleaningAndPestcontrol` tinyint(1) DEFAULT NULL,
  `Painter` tinyint(1) DEFAULT NULL,
  `Driver` tinyint(1) DEFAULT NULL,
  `Others` varchar(100) DEFAULT NULL,
  `Request_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workrequests`
--

INSERT INTO `workrequests` (`customerid`, `work_request`, `Plumber`, `Electrician`, `Carpenter`, `Babysitter`, `Maid`, `CleaningAndPestcontrol`, `Painter`, `Driver`, `Others`, `Request_no`) VALUES
(2000, 'Fix pipe', 1, 0, 0, 0, 0, 0, 0, 0, NULL, 1),
(2001, 'Clean my house', 1, 0, 0, 0, 0, 1, 0, 0, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contractors`
--
ALTER TABLE `contractors`
  ADD PRIMARY KEY (`Contractor_Id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `labourers`
--
ALTER TABLE `labourers`
  ADD PRIMARY KEY (`Labourer_Id`);

--
-- Indexes for table `workrequests`
--
ALTER TABLE `workrequests`
  ADD PRIMARY KEY (`Request_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
