-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2022 at 08:32 PM
-- Server version: 10.4.21-MariaDB
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
create database karym;
use karym;
CREATE TABLE `contractors` (
  `Contractor_Id` int(11) NOT NULL,
  `ContractorName` varchar(60) DEFAULT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Phone_no` bigint(10) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Plumber` tinyint(1) DEFAULT 1,
  `Electrician` tinyint(1) DEFAULT 1,
  `Carpenter` tinyint(1) DEFAULT 1,
  `Driver` tinyint(1) DEFAULT 1,
  `Babysitter` tinyint(1) DEFAULT 1,
  `Maid` tinyint(1) DEFAULT 1,
  `Painter` tinyint(1) DEFAULT 1,
  `CleaningAndPestcontrol` tinyint(1) DEFAULT 1,
  `Unskilled` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`Contractor_Id`, `ContractorName`, `Email`, `Password`, `Phone_no`, `Address`, `City`, `Plumber`, `Electrician`, `Carpenter`, `Driver`, `Babysitter`, `Maid`, `Painter`, `CleaningAndPestcontrol`, `Unskilled`) VALUES
(3000, 'David Mukhopadhyay', 'kabeer.sachdev@zacharia.ac.in', 'kabeer.sachdev', 4843245713, '27, Model Town, Lucknow - 520980', 'Lucknow', 1, 1, 1, 0, 0, 0, 0, 0, 1),
(3001, 'Radha Dutt', 'wgill@george.in', 'wgill', 8791671943, '83, Chinchwad, 	Bangalore - 167286', 'Bangalore', 0, 1, 0, 1, 0, 0, 1, 1, 0),
(3002, 'Munni Varghese', 'vdhaliwal@gmail.com', 'vdhaliwal', 9816926947, '48, AvantikaGarh, Jaipur - 489814', 'Jaipur', 0, 0, 0, 1, 1, 1, 0, 0, 1),
(3003, 'Pranab Natarajan', 'ydass@rediffmail.com', 'ydass', 9496954346, '69, Deccan Gymkhana, Patna\r\n - 588262', 'Patna', 0, 0, 1, 1, 0, 1, 1, 0, 0),
(3004, 'Preet Sha', 'hassan.din@yahoo.co.in', 'hassan.din', 2293836496, '35, Radheshyam Society, Hubbali - 568460', 'Hubbali', 1, 0, 0, 0, 1, 1, 1, 1, 0),
(3005, 'Elias Dodiya', 'kabeer.sachdev@zacharia.ac.in', 'kabeer.sachdev', 1046661130, '96, Divya Apartments, Kolkata - 464825', 'Kolkata', 0, 1, 0, 0, 0, 0, 1, 0, 0),
(3006, 'Yasmin Palan', 'khurana.bijoy@yahoo.com', 'khurana.bijoy', 4338052858, '58, Akshay Society, SatishGarh Jammu - 355746', 'Jammu', 0, 1, 0, 0, 1, 0, 0, 0, 0),
(3007, 'Fardeen Mahabir', 'gauransh72@ramakrishnan.org', 'gauransh72', 7641073923, '30, RoseyGarh, Gurgaon - 295450', 'Gurgaon', 0, 0, 0, 1, 0, 0, 1, 1, 0),
(3008, 'Qabeel Raman', 'mbanik@mukherjee.com', 'mbanik', 9816926947, '36, RajGarh, Chandigarh - 469180', 'Chandigarh', 1, 1, 0, 0, 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_Id` int(11) NOT NULL,
  `CustomerName` varchar(60) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Phone_no` bigint(10) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_Id`, `CustomerName`, `Email`, `Phone_no`, `Address`, `Password`, `City`) VALUES
(2000, 'Erwin', 'erwin@erwin', 1231231231, 'marvel villajkl;', 'erwin', 'Pune'),
(2001, 'Levi', 'levi@levi', 1341142212, 'Underground, Germany', 'levi', 'Mumbai'),
(2002, 'eren', 'eren@eren', 7672398098, 'qwertyu Delhi', 'eren', 'Delhi'),
(2003, 'Vishal Gandluri', '210010017@iitdh.ac.in', 164154234, 'kadapa', '210010017', 'Dharwad'),
(2004, 'Himanshu Kumar', '210010019@iitdh.ac.in', 472902137, 'Champaran', '210010019', 'Kota'),
(2005, 'Nithin Sabu', '210010032@iitdh.ac.in', 8436196948, 'Chennai', '210010032', 'Chennai'),
(2006, 'Suyash Gaurav', '210010054@iitdh.ac.in', 7526286882, 'Patna', '210010054', 'Patna'),
(2007, 'Poorvasha', '210010040@iitdh.ac.in', 6319845141, 'Nadiad', '210010040', 'Ahmedabad'),
(2008, 'Kalpit Suri', 'mini24@rediffmail.com', 7526286882, '63, Veena Villas, Kharadi Kolkata - 311125', 'mini24', 'Kolkata'),
(2009, 'Sona Khalsa', 'chokshi.elias@gmail.com', 3632747795, '29, David Villas, GajendraGarh Bangalore - 459703', 'chokshi.elias', 'Bangalore'),
(2010, 'Ghanshyam Sha', 'aadish.bir@hotmail.com', 9046559686, '58, Leelawati Apartments, Surya Chowk Chennai - 477460', 'aadish.bir', 'Chennai'),
(2011, 'Sumit Chakrabarti', 'indrani.biyani@nagy.com', 9352399845, '72, RoseyGunj, Noida - 294043', 'indrani.biyani', 'Noida'),
(2012, 'Mona Nadkarni', 'bumb.jasmin@yahoo.com', 8436196948, '38, Ajay Villas, Amir Nagar Vaishali - 411100', 'bumb.jasmin', 'Vaishali'),
(2013, 'Kamlesh Prashad', 'lodi.fakaruddin@yahoo.com', 7526000882, '63, Veena Villas, Kharadi Chennai - 311125', 'lodi.fakaruddin', 'Chennai'),
(2014, 'Diya Sachar', 'diya77@garg.co.in', 5458839700, '58, Leelawati Apartments, Surya Chowk Chennai - 477460', 'diya77', 'Chennai'),
(2015, 'Maya Saini', 'maya77@garg.co.in', 8681305298, '66, Aundh, Agra - 378409', 'maya77', 'Agra'),
(2016, 'Rupesh Kapadia', 'varty.kim@dalia.com', 8452458301, '87, Chandpole, Chennai - 279078', 'varty.kim', 'Chennai'),
(2017, 'Labeen Nadig', 'tak.aruna@hotmail.com', 8681305298, '66, Aundh, Chandigarh - 378409', 'tak.aruna', 'Chandigarh');

-- --------------------------------------------------------

--
-- Table structure for table `customersrequests`
--

CREATE TABLE `customersrequests` (
  `Labourer_Id` int(11) DEFAULT NULL,
  `Customer_Id` int(11) DEFAULT NULL,
  `Approved` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customersrequests`
--

INSERT INTO `customersrequests` (`Labourer_Id`, `Customer_Id`, `Approved`) VALUES
(1002, 2000, 0),
(1001, 2000, 0),
(1000, 2002, 1),
(1000, 2001, 1),
(1005, 1000, 0),
(2, 2000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `labourers`
--

CREATE TABLE `labourers` (
  `Labourer_Id` int(11) NOT NULL,
  `LabourerName` varchar(60) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Phone_no` bigint(10) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  `Plumber` tinyint(1) DEFAULT 1,
  `Electrician` tinyint(1) DEFAULT 1,
  `Carpenter` tinyint(1) DEFAULT 1,
  `Maid` tinyint(1) DEFAULT 1,
  `Babysitter` tinyint(1) DEFAULT 1,
  `Driver` tinyint(1) DEFAULT 1,
  `CleaningAndPestcontrol` tinyint(1) DEFAULT 1,
  `Painter` tinyint(1) DEFAULT 1,
  `Unskilled` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labourers`
--

INSERT INTO `labourers` (`Labourer_Id`, `LabourerName`, `Email`, `Phone_no`, `Address`, `City`, `Password`, `Plumber`, `Electrician`, `Carpenter`, `Maid`, `Babysitter`, `Driver`, `CleaningAndPestcontrol`, `Painter`, `Unskilled`) VALUES
(1000, 'Ramesh Sharma', 'rameshsharma2@hotmail.com', 514563180, '64, Virar, Mumbai - 317684', 'Mumbai', 'rameshsharma2', 0, 0, 0, 1, 1, 0, 0, 0, 0),
(1001, 'Devika Dewan', 'atul.om@samuel.com', 5241002830, '58, Virar, Jammu - 361358', 'Jammu', 'atul.om', 0, 1, 1, 1, 1, 0, 0, 0, 0),
(1002, 'Yadunandan Bajwa ', 'yadunandanbajwa43@rediffmail.com', 4725500671, '40, John Society, ChhayaGunj Vaishali\r\n - 313676', 'Vaishali', 'yadunandanbajwa43', 0, 0, 0, 0, 0, 1, 0, 0, 0),
(1003, 'Shetty Kalyani', 'shetty.kalyani@gmail.com', 7531698252, '57, AnushaGunj, Lucknow - 358411', 'Lucknow', 'shetty.kalyani', 1, 0, 0, 0, 0, 0, 1, 1, 1),
(1004, 'Pamela Karpe', 'pamelakarpe9@gmail.com', 4725500671, '198 Ambedkar Road Byculla, Kolkata, 400027, India', 'Kolkata', 'pamelakarpe9', 0, 1, 1, 0, 0, 0, 0, 1, 0),
(1005, 'Ganesh Kota', 'ganesh93@rediffmail.com', 8277075642, '37, PeterGunj, Jaipur - 386953', 'Jaipur', 'ganesh93', 0, 0, 0, 1, 1, 0, 0, 0, 1),
(1006, 'Ambika Thaker', 'ambika01@ratta.com', 1286232886, '42, PirzadaGarh, Noida - 541099', 'Noida', 'ambika01', 0, 1, 0, 0, 1, 0, 0, 0, 0),
(1007, 'Kabeer Dodiya', 'anjana.sunder@rediffmail.com', 3054400908, 'Grd Floor Mayur Pankh Agiyary Lane Tembi Naka Thane, Ahmedabad, 830601, India', 'Ahmedabad', 'anjana.sunder', 0, 0, 0, 0, 0, 0, 0, 0, 1),
(1008, 'Nirmal Gopal', 'ramaswamy.siddharth@rediffmail.com', 1286232886, '26 BHAGIRATHI ROAD OPPOSITE SANTOSH HOSPITAL KHANDARI CROSSING Chandigarh', 'Chandigarh', 'ramaswamy.siddharth', 0, 0, 1, 1, 0, 0, 0, 0, 0),
(1009, 'Aishwarya Chada', 'kamdar.binoya@gmail.com', 1286232886, 'Amar Singh College Chowk Gogjibagh (Adjacent to Town Square Mall, Srinagar, Jammu and Kashmir 190010', 'Srinagar', 'kamdar.binoya', 0, 0, 0, 1, 0, 0, 0, 0, 0),
(1010, 'Baber Devan', 'sganguly@yahoo.com', 1286232886, 'opposite zulfiqar school, Soura, Delhi 190020', 'Delhi', 'sganguly', 0, 0, 1, 0, 1, 0, 0, 1, 0),
(1011, 'Abdul Chaudhary', 'dinesh.loke@mehra.net ', 8496068311, '7th Flr Laxmi Palace S V Rd Above Sony Mony Electronic Borivali , Mumbai,Pune,400092,India', 'Pune', 'dinesh.loke', 0, 0, 0, 0, 0, 0, 0, 0, 1),
(1013, 'Alka Sundaram', 'uday89@gole.in', 8277075642, '198 Ambedkar Road Byculla, Patna, 400027, India', 'Patna', 'uday89', 0, 0, 0, 1, 1, 1, 0, 0, 1),
(1014, 'Bijoy Bhandari', 'deshmukh.habib@raghavan.org', 1286232886, 'Amar Singh College Chowk Gogjibagh (Adjacent to Town Square Mall, Noida, 190010', 'Noida', 'deshmukh.habib', 0, 0, 1, 0, 0, 0, 1, 1, 0),
(1015, 'Ram Basak', 'basak.amrita@maraj.co.in', 8173947873, '198 Ambedkar Road Byculla, Hyderabad, 400027, India', 'Hyderabad', 'basak.amrita', 1, 0, 0, 0, 0, 1, 1, 0, 0),
(1016, 'Ghanshyam Choudhury', 'sinha.anand@gmail.com', 9676540968, '7th Flr Laxmi Palace S V Rd Above Sony Mony Electronic Borivali ,Kota ,324001,India', 'Kota', 'sinha.anand', 1, 0, 0, 0, 0, 0, 1, 0, 0),
(1017, 'Sahil Bassi', 'chandra.abbas@batra.com', 8158718094, 'opposite zulfiqar school, Hubbali, 580011', 'Hubbali', 'chandra.abbas', 0, 0, 0, 0, 0, 1, 0, 0, 0),
(1018, 'Ishat Virk', 'mini.iyengar@rao.com', 8052955779, 'Amar Singh College Chowk Gogjibagh (Adjacent to Town Square Mall, Chennai, 190010', 'Chennai', 'mini.iyengar@rao.com', 1, 1, 1, 0, 0, 0, 0, 0, 0),
(1019, 'Uday Sundaram', 'uday8976@gole.in', 8277075642, '198 Ambedkar Road Byculla, Bangalore, 400027, India', 'Bangalore', 'uday8976', 0, 0, 0, 0, 0, 1, 1, 1, 0),
(1020, 'harpreet sharma', 'harpreet.sharma@rediffmail.com', 5583684355, '9th Cross st Main Sampangirama Nagar,Gurgaon,580027,India', 'Gurgaon', 'harpreet.sharma', 1, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `labourersrequests`
--

CREATE TABLE `labourersrequests` (
  `Labourer_Id` int(11) DEFAULT NULL,
  `Customer_Id` int(11) DEFAULT NULL,
  `Approved` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labourersrequests`
--

INSERT INTO `labourersrequests` (`Labourer_Id`, `Customer_Id`, `Approved`) VALUES
(1000, 2005, 1),
(1003, 2000, 1),
(1000, 2000, 1),
(2, 2000, 1),
(1003, 2002, 0);

-- --------------------------------------------------------

--
-- Table structure for table `workrequests`
--

CREATE TABLE `workrequests` (
  `Customer_Id` int(11) NOT NULL,
  `Work_request` varchar(500) DEFAULT NULL,
  `Plumber` tinyint(1) DEFAULT 0,
  `Electrician` tinyint(1) DEFAULT 0,
  `Carpenter` tinyint(1) DEFAULT 0,
  `Babysitter` tinyint(1) DEFAULT 0,
  `Maid` tinyint(1) DEFAULT 0,
  `CleaningAndPestcontrol` tinyint(1) DEFAULT 0,
  `Painter` tinyint(1) DEFAULT 0,
  `Driver` tinyint(1) DEFAULT 0,
  `Others` varchar(100) DEFAULT NULL,
  `Request_no` int(11) NOT NULL,
  `Unskilled` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workrequests`
--

INSERT INTO `workrequests` (`Customer_Id`, `Work_request`, `Plumber`, `Electrician`, `Carpenter`, `Babysitter`, `Maid`, `CleaningAndPestcontrol`, `Painter`, `Driver`, `Others`, `Request_no`, `Unskilled`) VALUES
(2003, 'Fix my broken pipe', 1, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 0),
(2004, 'Need a maid to clean my house', 0, 0, 0, 0, 1, 0, 0, 0, NULL, 2, 0),
(2005, 'Need a Electrician to my geyser repaired.', 0, 1, 0, 0, 0, 0, 0, 0, NULL, 3, 0),
(2006, 'Need a painter to get a room painted', 0, 0, 0, 0, 0, 0, 1, 0, NULL, 4, 0),
(2007, 'Urgently need someone for loading goods on a truck.', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 5, 1),
(2008, 'Need a carpenter to get a door repaired.', 0, 0, 1, 0, 0, 0, 0, 0, NULL, 6, 0),
(2009, 'Need a Babysitter', 0, 0, 0, 1, 0, 0, 0, 0, NULL, 7, 0),
(2010, 'I want to get rid of the pests in my home.', 0, 0, 0, 0, 0, 1, 0, 0, NULL, 8, 0),
(2011, 'Need a construction labourer', 0, 0, 0, 0, 0, 0, 0, 0, NULL, 9, 0),
(2012, 'Need a cook.', 0, 0, 0, 0, 1, 0, 0, 0, NULL, 10, 0),
(2017, 'In need for pest control services.', 0, 0, 0, 0, 0, 1, 0, 0, NULL, 11, 0),
(2016, 'Pipe repairing', 1, 0, 0, 0, 0, 0, 0, 0, NULL, 12, 0),
(2013, 'Need a painter to paint whole house.', 0, 0, 0, 0, 0, 0, 1, 0, NULL, 13, 0),
(2015, 'Need a temporary driver for today.', 0, 0, 0, 0, 0, 0, 0, 1, NULL, 14, 0),
(2014, 'Need someone to repair a water leakage.', 1, 0, 0, 0, 0, 0, 0, 0, NULL, 15, 0);

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
