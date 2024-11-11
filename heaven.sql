-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 08:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(255) NOT NULL,
  `email` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`, `email`) VALUES
('admin', 'admin@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `username`, `password`, `email`, `contactno`, `address`) VALUES
(0, 'imran', 'imran', 'imran@gmail.com', '043881', 'multan pakistan'),
(1, 'muhammad zaman', 'zaman', 'muhammadzamanali@gmail.com', '0343424', 'multan pakistan'),
(2, 'Rashid ansari', 'rashid', 'rashid@gmail.com', '021234456', 'multan paksitan'),
(3, 'salam', 'salam', 'salam@gmail.com', '03743', 'lahore'),
(4, 'shabaz', 'shabaz', 'shabaz@gmail.com', '03136153946', 'multan pakistan'),
(6, 'talha.cric', 'talha.ccricket', 'talha@gmail.com', '87654321', 'multanpakistan'),
(7, 'umair', 'umair', 'umair@gmail.com', '02345678', 'multan pakistan'),
(8, 'zaman', 'zaman', 'zamanali@gmail.com', '03040704310', 'multan pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `insertcategory`
--

CREATE TABLE `insertcategory` (
  `name` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertcategory`
--

INSERT INTO `insertcategory` (`name`, `id`) VALUES
('shevels', 33),
('Lamps', 34),
('Wall clocks', 35),
('Table', 36);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `email`, `firstname`, `lastname`, `address`, `city`, `country`, `contact`) VALUES
(1, 'zamanali@gmail.com', 'zaman', 'ali', 'demo', 'multan', '', 24324),
(2, 'zamanali8000@gmail.com', 'demo', 'demo', 'demo', '', '', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Image` varchar(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `price` varchar(99) NOT NULL,
  `sales` varchar(99) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Image`, `name`, `price`, `sales`, `category`) VALUES
(41, 'NO5.jpg', 'sheveles', '2000', '2500', 'shevels'),
(42, 'NO1.jpg', 'Lamp', '5000', '4500', 'Lamps'),
(44, 'NO2.jpg', 'wall Clock', '5000', '4500', 'Wall clocks'),
(45, 'NO3.jpg', 'wall Clock', '6000', '5500', 'Wall clocks'),
(46, 'NO4.jpg', 'wall Clock', '4500', '4300', 'Wall clocks'),
(47, 'NO5.jpg', 'wall Clock', '5300', '5000', 'Wall clocks'),
(49, 'NO11.jpg', 'Lamps', '5000', '4500', 'Lamps'),
(50, 'NO10.jpg', 'Lamps', '4500', '4300', 'Lamps'),
(51, 'NO9.jpg', 'Lamps', '5300', '5000', 'Lamps'),
(52, 'NO8.jpg', 'Wall Shevels', '5000', '4500', 'shevels'),
(53, 'NO7.jpg', 'Wall Shevels', '6000', '5500', 'shevels'),
(54, 'NO6.jpg', 'Wall Shevels', '4500', '4300', 'shevels');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertcategory`
--
ALTER TABLE `insertcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertcategory`
--
ALTER TABLE `insertcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
