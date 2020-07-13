-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 04:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retail database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `user_id` int(11) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `password` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`user_id`, `admin_name`, `password`) VALUES
(1, 'khan', 123);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'faraz', 'khan@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;



CREATE TABLE `trending_section` (
  `item_price` varchar(20) NOT NULL,
  `item_loc` varchar(50) NOT NULL,
  `item_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trending_section`
--

INSERT INTO `trending_section` (`item_price`, `item_loc`, `item_text`) VALUES
('7000', '../html pages/upload/pic1.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'),
('5000', '../html pages/upload/pic3.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'),
('7000', '../html pages/upload/pic2.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.');


CREATE TABLE `new_section` (
  `item_price` varchar(20) NOT NULL,
  `item_loc` varchar(50) NOT NULL,
  `item_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_section`
--

INSERT INTO `new_section` (`item_price`, `item_loc`, `item_text`) VALUES
('7000', '../html pages/upload/pic1.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'),
('5000', '../html pages/upload/pic3.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'),
('7000', '../html pages/upload/pic2.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.');

COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
