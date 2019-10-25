-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 12:28 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hhtv`
--

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE `designers` (
  `id` int(11) NOT NULL,
  `designer_id` varchar(25) NOT NULL,
  `designer_name` varchar(50) NOT NULL,
  `style` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ig_link` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pc_1` varchar(100) NOT NULL,
  `pc_2` varchar(100) NOT NULL,
  `pc_3` varchar(100) NOT NULL,
  `bio` longtext NOT NULL,
  `store_addr` varchar(100) NOT NULL,
  `state` varchar(25) NOT NULL,
  `bus_phone` varchar(25) NOT NULL,
  `bus_email` varchar(100) NOT NULL,
  `date_joined` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designers`
--

INSERT INTO `designers` (`id`, `designer_id`, `designer_name`, `style`, `gender`, `ig_link`, `email`, `pc_1`, `pc_2`, `pc_3`, `bio`, `store_addr`, `state`, `bus_phone`, `bus_email`, `date_joined`) VALUES
(2, 'GU3JSY9', 'Message Akunna', 'Ready-To-Wear', 'Male', 'https://instagram.com/message', 'message@gmail.com', 'KRZNM4BFEIG1PUD.jpg', '9F46YVW2K75SDQU.jpg', 'D0RP81ZKYHAF7JI.jpg', 'HouseAfrica makes real estate investment accessible to everyone, irrespective of income level, through technology. Real estate remains the most dependable investment known to man -- HouseAfrica simplifies the entry into this trusted domain.', 'Port harcourt', 'Rivers', '0978687367', 'mess@gmail.com', '25-Oct-2019'),
(3, 'R9LCJSV', 'Chuqdennis', 'Haute Couture', 'Plus Size', 'https://instagram.com/chuqdennis', 'chuqdennis@gmail.com', 'AQU3RKHWTLI2ZOF.jpg', 'ISGPFM6XZQ124VW.jpg', '7CI68T5WPQRKHF0.jpg', 'HouseAfrica makes real estate investment accessible to everyone, irrespective of income level, through technology. Real estate remains the most dependable investment known to man -- HouseAfrica simplifies the entry into this trusted domain.', 'No 11 Rumuigbo, portharcourt', 'Akwa Ibom', '0908373535', 'chuqdennis@gmail.com', '26-Oct-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designers`
--
ALTER TABLE `designers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designers`
--
ALTER TABLE `designers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
