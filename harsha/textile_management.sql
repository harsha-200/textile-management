-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 01:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textile_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Vignesh', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BID` int(11) NOT NULL,
  `BRNAME` varchar(20) NOT NULL,
  `BRADDRESS` varchar(100) NOT NULL,
  `BRPHONE` double NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BID`, `BRNAME`, `BRADDRESS`, `BRPHONE`, `Status`) VALUES
(17, 'Lakshmi textiles', '#34 puttur street Bagalkot', 9845123566, 'yes'),
(18, 'Bhavani textiles', '#44 kandalgod street Belgaum', 9737475767, 'yes'),
(19, 'Suresh textiles', '#12 kamarattu street Manglore', 9232423245, 'yes'),
(20, 'Badra textiles', '#09 gangavathi street Chitradurga', 9867543210, 'yes'),
(21, 'Hanuman textiles', '#03 palace street Mysore', 8954321088, 'yes'),
(22, 'Ganesh textiles', '#56 durga road Hubbali', 6745907867, 'yes'),
(23, 'Eshwari textiles', '#42 mudhur road Davangere', 8967467523, 'yes'),
(24, 'Parvathi textiles', '#23 shrirampura street Bengaluru', 73123214560, 'yes'),
(25, 'Kamal textiles', '#37 satyanarana street Bellary', 9060686795, 'yes'),
(26, 'Guru textiles', '#27 mg road rampur street Tumkur', 9434215678, 'yes'),
(27, 'Rudra Textiles', '#30 kannapa street Uttarkannada', 8028156745, 'yes'),
(28, 'Devi textiles', '#04 ramaiah street  Chikkaballapura', 9823234545, 'yes'),
(29, 'rakesh textiles', '#135 nelagadaranahalli banglore-34', 7898764565, 'yes'),
(30, 'dika textiles', 'north east ', 9867453212, 'yes'),
(31, 'veena textiles', 'nagarbhavi', 456789321, 'yes'),
(32, 'DIKA 1 TEXTILE', 'MIZORAM NORTH EAST', 123456789, 'yes'),
(33, 'sooraj textiles', 'raipoor', 34567890, 'yes'),
(34, 'kgf textiles', 'kgf', 12345567778, 'yes'),
(35, 'wicky textiles', 'erapura', 1234567890, 'yes'),
(36, 'harsha textiles', 'Kengeri,Bengaluru Urban -560060', 123456780, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `CODID` int(11) NOT NULL,
  `CODNAME` varchar(10) NOT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `WORK_DEPT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`CODID`, `CODNAME`, `GENDER`, `WORK_DEPT`) VALUES
(1227, 'Dinesh', 'M', 'Cotton'),
(1228, 'Roopa', 'F', 'Fabric'),
(1229, 'Suresh', 'M', 'Denim'),
(1230, 'Gopal', 'F', 'Nylon'),
(1231, 'Murthy', 'M', 'Velvet'),
(1232, 'Krithi', 'F', 'SiLk'),
(1233, 'Swapna', 'F', 'Wool'),
(1234, 'Varma', 'M', 'Leather'),
(1235, 'Surya', 'M', 'Linen');

-- --------------------------------------------------------

--
-- Table structure for table `material_department`
--

CREATE TABLE `material_department` (
  `DEPT_NAME` varchar(10) NOT NULL,
  `CODID` int(11) NOT NULL,
  `ORDER_PENDING` int(11) NOT NULL,
  `ORDER_DELIVER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_department`
--

INSERT INTO `material_department` (`DEPT_NAME`, `CODID`, `ORDER_PENDING`, `ORDER_DELIVER`) VALUES
('Cotton', 1227, 16, 22),
('Denim', 1229, 20, 23),
('Fabric', 1228, 11, 33),
('Leather', 1234, 14, 10),
('Linen', 1235, 12, 16),
('Nylon', 1230, 24, 32),
('Silk', 1232, 10, 43),
('Velvet', 1231, 23, 54),
('Wool', 1233, 16, 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OID` varchar(10) NOT NULL,
  `BID` int(11) NOT NULL,
  `MTRORDER` varchar(10) NOT NULL,
  `METERS` double DEFAULT NULL,
  `ORDERED_DATE` varchar(100) DEFAULT NULL,
  `ORDERDELIVER_DATE` varchar(100) DEFAULT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OID`, `BID`, `MTRORDER`, `METERS`, `ORDERED_DATE`, `ORDERDELIVER_DATE`, `Status`) VALUES
('1AF12', 26, 'Silk', 3, '21/10/2020', '26/10/2020', 'yes'),
('1AF16', 21, 'Nylon', 3, '22/10/2020', '27/10/2020', 'yes'),
('1AF23', 17, 'Denim', 4, '26/10/2020', '31/10/2020', 'yes'),
('1AF32', 21, 'Nylon', 5, '21/10/2020', '26/10/2020', 'yes'),
('1AF36', 21, 'Denim', 5, '26/10/2020', '31/10/2020', 'yes'),
('1AF45', 21, 'Leather', 6, '24/10/2020', '29/10/2020', 'yes'),
('1PT16', 19, 'Cotton', 1, '24/10/2020', '29/10/2020', 'yes'),
('1PT17', 19, 'Silk', 3, '27/10/2020', '01/11/2020', 'yes'),
('1PT55', 27, 'Velvet', 1, '20/10/2020', '25/10/2020', 'yes'),
('1RT09', 24, 'Fabric', 4, '21/10/2020', '26/10/2020', 'yes'),
('1RT12', 27, 'Leather', 7, '28/10/2020', '02/11/2020', 'yes'),
('1RT23', 27, 'Silk', 5, '24/10/2020', '29/10/2020', 'yes'),
('1RT65', 28, 'Cotton', 3, '20/10/2020', '25/10/2020', 'yes'),
('1RT67', 27, 'Cotton', 7, '25/10/2020', '30/10/2020', 'yes'),
('1RT78', 27, 'Velvet', 2, '27/10/2020', '01/11/2020', 'yes'),
('1RT90', 24, 'Nylon', 2, '20/10/2020', '25/10/2020', 'yes'),
('1WT15', 20, 'Wool', 3, '26/10/2020', '31/10/2020', 'yes'),
('1WT22', 20, 'Fabric', 2, '23/10/2020', '28/10/2020', 'yes'),
('1XY10', 21, 'Leather', 5, '26/06/2021', '25/03/2020', 'yes'),
('1XY11', 23, 'Denim', 5, '11/07/2021', '25/03/2020', 'yes'),
('1XY12', 25, 'Leather', 34, '11/07/2021', '25/03/2020', 'yes'),
('1XY13', 35, 'Cotton', 5, '14/07/2021', '25/03/2020', 'yes'),
('1XY14', 36, 'Denim', 10, '15/07/2021', '25/03/2020', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `SHIPID` char(7) NOT NULL,
  `CODID` int(11) NOT NULL,
  `OID` char(5) NOT NULL,
  `MATR_DELIVER` varchar(10) NOT NULL,
  `VEHNO` varchar(100) NOT NULL,
  `BID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`SHIPID`, `CODID`, `OID`, `MATR_DELIVER`, `VEHNO`, `BID`) VALUES
('2SD2345', 1230, '1AF16', 'Nylon', 'KA 02 H 1234', 17),
('2SD2346', 1228, '1WT22', 'Fabric', 'KA 02 H 1234', 20),
('2SD2347', 1230, '1AF32', 'Nylon', 'KA 02 H 1234', 22),
('2SD2348', 1227, '1PT16', 'Cotton', 'KA 02 H 1234', 25),
('2SD2349', 1232, '1RT23', 'Silk', 'KA 35 U 9067', 23),
('2SD2350', 1234, '1AF45', 'Leather', 'KA 35 U 9067', 21),
('2SD2351', 1227, '1RT65', 'Cotton', 'KA 02 R 2234', 28),
('2SD2352', 1231, '1PT55', 'Velvet', 'KA 03 H 3434', 27),
('2SD2353', 1230, '1RT90', 'Nylon', 'KA 02 R 2234', 24),
('2SD2354', 1232, '1AF12', 'Silk', 'KA 02 R 2234', 26),
('2SD2355', 1230, '1AF32', 'Nylon', 'KA 35 U 9067', 21),
('2SD2356', 1228, '1RT09', 'Fabric', 'KA 02 R 2234', 24),
('2SD3000', 1227, '1XY10', 'Cotton', 'KA 02 SD 3467', 29),
('2SD3001', 1233, '1XY22', 'Wool', 'KA 02 SD 3467', 30),
('2SD3002', 1227, '1XY21', 'Cotton', 'KA 02 SD 3467', 30),
('2SD3003', 1229, '1XY12', 'Denim', 'KA 02 SD 3467', 21),
('2SD3004', 1229, '1XY14', 'Denim', 'KA 02 SD 3467', 36),
('2SD3005', 1227, '1XY13', 'Cotton', 'KA 02 SD 3467', 35);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`username`, `password`) VALUES
('vignesh', '1234'),
('dika', '123456'),
('naman', '1234'),
('harsha', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`CODID`);

--
-- Indexes for table `material_department`
--
ALTER TABLE `material_department`
  ADD PRIMARY KEY (`DEPT_NAME`),
  ADD KEY `CODID` (`CODID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OID`),
  ADD KEY `BID` (`BID`),
  ADD KEY `MTRORDER` (`MTRORDER`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`SHIPID`),
  ADD KEY `CODID` (`CODID`),
  ADD KEY `BID` (`BID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `material_department`
--
ALTER TABLE `material_department`
  ADD CONSTRAINT `material_department_ibfk_1` FOREIGN KEY (`CODID`) REFERENCES `coordinator` (`CODID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `branch` (`BID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`MTRORDER`) REFERENCES `material_department` (`DEPT_NAME`);

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_1` FOREIGN KEY (`CODID`) REFERENCES `coordinator` (`CODID`),
  ADD CONSTRAINT `shipment_ibfk_2` FOREIGN KEY (`BID`) REFERENCES `branch` (`BID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
