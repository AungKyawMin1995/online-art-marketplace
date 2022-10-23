-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 08:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akm`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustID` int(4) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `CustEmail` varchar(30) NOT NULL,
  `CustPhno` varchar(30) DEFAULT NULL,
  `CustAddress` varchar(100) DEFAULT NULL,
  `CustPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustID`, `CustName`, `CustEmail`, `CustPhno`, `CustAddress`, `CustPassword`) VALUES
(1, 'james', 'james@gmail.com', '0450603549', 'Zetland, NSW, 2017', '123');

-- --------------------------------------------------------

--
-- Table structure for table `drawing`
--

CREATE TABLE `drawing` (
  `DrawingID` int(4) NOT NULL,
  `DrawingPicture` varchar(50) DEFAULT NULL,
  `DrawingType` varchar(50) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drawing`
--

INSERT INTO `drawing` (`DrawingID`, `DrawingPicture`, `DrawingType`, `Price`) VALUES
(1, '5.png', 'Doodling', '23'),
(2, '6.png', 'Cartoon Style', '38'),
(3, '7.png', 'Photorealism', '216'),
(4, '8.png', 'Architectural Drawing', '114'),
(5, '9.png', 'Geometric Drawing', '82'),
(6, '10.png', 'Tattoo Drawing', '56'),
(7, '11.png', 'Stippling', '79'),
(8, '12.png', 'Hatching', '326'),
(9, '13.png', 'Scumbling', '45'),
(10, '14.png', 'Diagrammatic', '63');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(4) NOT NULL,
  `OrderDate` varchar(30) NOT NULL,
  `Month` varchar(15) NOT NULL,
  `CustName` varchar(30) DEFAULT NULL,
  `TPrice` varchar(50) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderDate`, `Month`, `CustName`, `TPrice`, `Status`) VALUES
(1, '23-10-2022', 'October', 'james', '565', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `order_drawing`
--

CREATE TABLE `order_drawing` (
  `DetailID` int(4) NOT NULL,
  `OrderID` int(4) DEFAULT NULL,
  `DrawingID` int(4) DEFAULT NULL,
  `Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_drawing`
--

INSERT INTO `order_drawing` (`DetailID`, `OrderID`, `DrawingID`, `Qty`) VALUES
(1, 1, 1, 1),
(2, 1, 3, 1),
(3, 1, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(4) NOT NULL,
  `StaffName` varchar(30) NOT NULL,
  `StaffEmail` varchar(30) NOT NULL,
  `StaffDepartment` varchar(30) DEFAULT NULL,
  `StaffPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `StaffEmail`, `StaffDepartment`, `StaffPassword`) VALUES
(1, 'aung', 'aung@gmail.com', 'Department 1', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustID`),
  ADD UNIQUE KEY `CustName` (`CustName`),
  ADD UNIQUE KEY `CustEmail` (`CustEmail`);

--
-- Indexes for table `drawing`
--
ALTER TABLE `drawing`
  ADD PRIMARY KEY (`DrawingID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustName` (`CustName`);

--
-- Indexes for table `order_drawing`
--
ALTER TABLE `order_drawing`
  ADD PRIMARY KEY (`DetailID`),
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `DrawingID` (`DrawingID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`),
  ADD UNIQUE KEY `StaffName` (`StaffName`),
  ADD UNIQUE KEY `StaffEmail` (`StaffEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drawing`
--
ALTER TABLE `drawing`
  MODIFY `DrawingID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_drawing`
--
ALTER TABLE `order_drawing`
  MODIFY `DetailID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustName`) REFERENCES `customer` (`CustName`);

--
-- Constraints for table `order_drawing`
--
ALTER TABLE `order_drawing`
  ADD CONSTRAINT `order_drawing_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `order_drawing_ibfk_2` FOREIGN KEY (`DrawingID`) REFERENCES `drawing` (`DrawingID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
