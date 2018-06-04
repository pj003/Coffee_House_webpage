-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 06:23 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `description` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`description`, `quantity`, `price`) VALUES
('JavaJam Mugs', 0, 9.95),
('JavaJam Shirts', 0, 14.95);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobsid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `experience` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobsid`, `name`, `email`, `experience`) VALUES
(1, 'pri', 'a@b.c', 'dkfsf'),
(2, 'nikhil', 'nik@b.wdm', 'asdanfmsaf'),
(3, 'aruna', 'a@g.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `musician`
--

CREATE TABLE `musician` (
  `MusicianId` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Musician_Image_URL` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musician`
--

INSERT INTO `musician` (`MusicianId`, `Name`, `Musician_Image_URL`) VALUES
('1', 'Melanie', 'images/melaniethumb.jpg'),
('2', 'Tahoe', 'images/gregthumb.jpg'),
('3', 'John Mayer', 'images/johnmayer.jpg'),
('4', 'Sia', 'images/sia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zip` int(10) NOT NULL,
  `Credit_card` int(25) NOT NULL,
  `Month` int(2) NOT NULL,
  `Year` int(4) NOT NULL,
  `Item1_name` varchar(20) NOT NULL,
  `Item1_Qty` int(5) NOT NULL,
  `Item2_name` varchar(20) NOT NULL,
  `Item2_Qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Name`, `Email`, `Address`, `City`, `State`, `Zip`, `Credit_card`, `Month`, `Year`, `Item1_name`, `Item1_Qty`, `Item2_name`, `Item2_Qty`) VALUES
(0, 'Priyanka', 'p@j.com', 'greekrow', 'arlington', 'tx', 76013, 2147483647, 1, 2022, '', 0, '', 0),
(0, 'Priyanka', 'p@j.com', 'greekrow', 'arlington', 'tx', 76013, 2147483647, 1, 2022, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `PerformanceId` int(10) NOT NULL,
  `MusicianId` int(10) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`PerformanceId`, `MusicianId`, `Month`, `Description`) VALUES
(10, 1, 'January', 'Melanie Morris entertains with her melodic folk style.'),
(11, 2, 'February', 'Tahoe Greg is back from his tour. New songs. New stories.'),
(12, 3, 'March', 'John Mayer the heartthrob will entertain with the most romantic songs ever!'),
(13, 4, 'April', 'Shreya Ghoshal, A flower child. Sings the tune of love.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `Name`, `description`, `image`, `price`) VALUES
(121, 'JavaJam Shirts', 'JavaJam shirts are comfortable to wear to school and around town. 100% cotton, XL only $14.95', 'images/javashirt.jpg', 14.95),
(122, 'JavaJam Mugs', 'JavaJam mugs carry a full load of caffiene (12oz.) to jump start your morning. $9.95\r\n', 'images/javamug.jpg', 9.95),
(123, 'JavaJam Pen', 'For neat, smooth writing use JavaJam Pen! $3.50', 'images/pen.jpg', 3.95),
(124, 'JavaJam Bottle', 'Best container to store water in. $5.95', 'images/bottle.jpg', 6.95);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`description`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobsid`);

--
-- Indexes for table `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`MusicianId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobsid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
