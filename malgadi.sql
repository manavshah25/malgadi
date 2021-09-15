-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 06:25 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malgadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `username`, `password`, `email_id`, `phone_no`, `address`, `date`) VALUES
(1, 'admin', 'admin123', '', '', '', '2021-09-13 02:38:00'),
(8, 'meet_shah', 'TWFuYXZzaGFoMjU=', 'manavshah9890@gmail.com', '9825487322', 'mmmmmmm', '2021-09-13 02:15:00'),
(9, 'jay_shah', 'akF5MTIzNDU=', 'jaykshah2002@gmail.com', '9898934789', 'sfsfs', '2021-09-13 12:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `buy_details`
--

CREATE TABLE `buy_details` (
  `username` varchar(50) NOT NULL,
  `order_status` varchar(15) NOT NULL,
  `order_recevied` varchar(15) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_name` varchar(50) NOT NULL,
  `img_link` varchar(10000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_name`, `img_link`, `description`, `quantity`, `price`) VALUES
('AirPods Max', 'i4.png', 'New Apple AirPods Max - Silver', 180, 59900),
('Apple watch', 'i3.png', 'New Apple Watch Series 6- Blue Aluminum Case ', 200, 43900),
('IPad Pro(12.9inch)', 'i2.png', 'Apple 11-inch iPad Pro (Wi-Fi, 128GB) - Space Gray', 180, 71900),
('Mac Desktop', 'i5.png', 'Apple iMac (24-inch, Apple M1 chip with 8‑core CPU and 7‑core GPU, 8GB RAM, 256GB)- Blue , black , silver', 350, 139900),
('Mac mini', 'i1.png', 'Apple Mac Mini with Apple M1 Chip (8GB RAM)                ', 1000, 42653),
('MI', 'https://m.media-amazon.com/images/I/51m3FxbQ1ZL._AC_SX522_.jpg', 'FLiX (Beetel) 20H\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 4500, 990);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_details`
--
ALTER TABLE `buy_details`
  ADD PRIMARY KEY (`username`),
  ADD KEY `for_product_name_error` (`product_name`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buy_details`
--
ALTER TABLE `buy_details`
  ADD CONSTRAINT `for_product_name_error` FOREIGN KEY (`product_name`) REFERENCES `product_details` (`product_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
