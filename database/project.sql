-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 01:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(256) NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_password` varchar(256) NOT NULL,
  `agent_phone_number` varchar(256) NOT NULL,
  `agent_CNIC` varchar(255) NOT NULL,
  `agent_address` varchar(255) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `agent_joining_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_name`, `agent_email`, `agent_password`, `agent_phone_number`, `agent_CNIC`, `agent_address`, `branch_id`, `agent_joining_date`) VALUES
(34, 'Ali', 'Ali@gmail.com', 'Ali123', '03233730850', 'abcdefj1234', 'Shahrah-Faisal', 14, '2024-07-11 08:19:20'),
(38, 'Owais', 'Owais@gmail.com', 'Owais123', '03128639708', 'abcdefjhi253', 'Malir', 15, '2024-07-11 08:51:18'),
(39, 'Noman', 'Noman@gmail.com', 'Noman123', '03128639709', 'abcdefji789', 'Clifton', 17, '2024-07-11 08:51:50'),
(40, 'Zaid', 'Zaid@gmail.com', 'Zaid123', '03132225689', 'abcdefjhik412', 'DHA', 19, '2024-07-11 08:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `status`) VALUES
(14, 'Shahrah-Faisal', 'open'),
(15, 'malir', 'open'),
(17, 'clifton', 'open'),
(19, 'DHA', 'close');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courier_id` int(11) NOT NULL,
  `sender_name` varchar(256) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `parcel_weight` varchar(256) NOT NULL,
  `courier_type` varchar(255) NOT NULL,
  `courier_rate` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `tracking_no` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courier_id`, `sender_name`, `receiver_name`, `parcel_weight`, `courier_type`, `courier_rate`, `branch_id`, `agent_id`, `tracking_no`, `date`, `status`) VALUES
(15, 'Ali', 'hasan', '500g', 'food', 600, 14, 34, 73479321, '2024-07-11 08:23:23', 'pending'),
(19, 'Owais', 'imran', '700g', 'soft plastic', 1000, 15, 38, 347998256, '2024-07-11 08:57:18', 'process'),
(20, 'Noman', 'shayan', '1500g', 'metalic', 1200, 17, 39, 585425377, '2024-07-11 08:57:24', 'process'),
(21, 'Zaid', 'umar', '1000g', 'wood', 2000, 19, 40, 384197908, '2024-07-11 08:57:34', 'deliverd');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(256) NOT NULL,
  `customer_email` varchar(256) NOT NULL,
  `customer_password` varchar(256) NOT NULL,
  `customer_address` varchar(256) NOT NULL,
  `customer_phone_number` int(11) NOT NULL,
  `customer_CNIC` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_address`, `customer_phone_number`, `customer_CNIC`) VALUES
(6, 'shayan', 'shayan@gmail.com', 'shayan123', 'block 5 ', 2147483647, 'acvnfghfthggg'),
(7, 'hassan', 'hassan@gmail.com', 'hassan123', 'malir', 2147483647, 'abcdefgi568'),
(8, 'imran', 'imran@gmail.com', 'imran123', 'dha', 2147483647, 'avnjtyffcfghhftyt'),
(9, 'umar', 'umar@gmail.com', 'umar123', 'clifton', 2147483647, 'acgdfthji789');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `shipment_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `status` varchar(256) NOT NULL DEFAULT 'pending',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipment_id`, `courier_id`, `status`, `date`) VALUES
(3, 15, 'pending', '2024-07-11 08:27:57'),
(8, 19, 'process', '2024-07-11 08:56:22'),
(9, 20, 'process', '2024-07-11 08:56:50'),
(10, 21, 'deliverd', '2024-07-11 08:56:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD KEY `agent_ibfk_1` (`branch_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courier_id`),
  ADD KEY `courier_ibfk_1` (`branch_id`),
  ADD KEY `courier_ibfk_2` (`agent_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipment_id`),
  ADD KEY `courier_id` (`courier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `shipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `agent_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courier`
--
ALTER TABLE `courier`
  ADD CONSTRAINT `courier_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courier_ibfk_2` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`agent_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_1` FOREIGN KEY (`courier_id`) REFERENCES `courier` (`courier_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
