-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 05:44 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gyanbhandar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bhandar_gyan`
--

CREATE TABLE `bhandar_gyan` (
  `Bhandar_id` int(100) NOT NULL,
  `Bhandar_name` varchar(255) NOT NULL,
  `Association_name` varchar(255) NOT NULL,
  `State_id` int(100) NOT NULL,
  `City_id` int(100) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Pincode` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Workdays` varchar(255) NOT NULL,
  `Timing` varchar(255) NOT NULL,
  `Inupashray` varchar(100) NOT NULL,
  `Sqft` varchar(100) NOT NULL,
  `Cupboard` varchar(100) NOT NULL,
  `Founder_name` varchar(255) NOT NULL,
  `Landline_no` varchar(200) NOT NULL,
  `Whatsapp_no` varchar(200) NOT NULL,
  `Mobile_no` varchar(200) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Maharaj_name` varchar(255) NOT NULL,
  `Community` varchar(255) NOT NULL,
  `Iscomupterg` varchar(100) NOT NULL,
  `Iscomuptera` varchar(100) NOT NULL,
  `Isinternet` varchar(100) NOT NULL,
  `Listedbooks` varchar(100) NOT NULL,
  `Unlistedbooks` varchar(100) NOT NULL,
  `Listmade` varchar(200) NOT NULL,
  `Software` varchar(255) NOT NULL,
  `Updatedate` varchar(255) NOT NULL,
  `Issuedbooks` varchar(100) NOT NULL,
  `Chaturmas` varchar(255) NOT NULL,
  `Bookstaken` varchar(100) NOT NULL,
  `Otherbhandar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bhandar_gyan`
--

INSERT INTO `bhandar_gyan` (`Bhandar_id`, `Bhandar_name`, `Association_name`, `State_id`, `City_id`, `District`, `Pincode`, `Address`, `Workdays`, `Timing`, `Inupashray`, `Sqft`, `Cupboard`, `Founder_name`, `Landline_no`, `Whatsapp_no`, `Mobile_no`, `Email`, `Maharaj_name`, `Community`, `Iscomupterg`, `Iscomuptera`, `Isinternet`, `Listedbooks`, `Unlistedbooks`, `Listmade`, `Software`, `Updatedate`, `Issuedbooks`, `Chaturmas`, `Bookstaken`, `Otherbhandar`) VALUES
(2, 'JHBJ', 'hujhu', 5, 6, 'bjhu', '897867', 'hgvgyukhuhnkj..', 'Thur,Fri', '13:00-18:01', 'Yes', '678', '8', 'bhjbj', '8907890987', '8978678909', '7867890987', 'gvg@gmail.com', 'gygbyu', 'huu', 'Yes', 'No', 'No', '89', '78', 'Computer', 'ShrutSangam', '7/04/2017', '9', 'Only-sadhviji', '78', 'hujhnjknjkni');

-- --------------------------------------------------------

--
-- Table structure for table `city_gyan`
--

CREATE TABLE `city_gyan` (
  `City_id` int(100) NOT NULL,
  `City_name` varchar(255) NOT NULL,
  `State_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_gyan`
--

INSERT INTO `city_gyan` (`City_id`, `City_name`, `State_id`) VALUES
(4, 'AHMEDABAD', 4),
(6, 'MUMBAI', 5);

-- --------------------------------------------------------

--
-- Table structure for table `publisher_gyan`
--

CREATE TABLE `publisher_gyan` (
  `Publisher_id` int(100) NOT NULL,
  `Publisher_name` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT 'null',
  `Pincode` varchar(100) DEFAULT 'null',
  `Email` varchar(255) DEFAULT 'null',
  `Landline_no` varchar(200) DEFAULT 'null',
  `Mobile_no` varchar(200) DEFAULT 'null',
  `State_id` int(100) DEFAULT '0',
  `City_id` int(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher_gyan`
--

INSERT INTO `publisher_gyan` (`Publisher_id`, `Publisher_name`, `Address`, `Pincode`, `Email`, `Landline_no`, `Mobile_no`, `State_id`, `City_id`) VALUES
(7, 'HJHUK', 'jhgfrghjkghg', '345679', 'hhh@gmail.com', '8907890989', '9090906790', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `state_gyan`
--

CREATE TABLE `state_gyan` (
  `State_id` int(100) NOT NULL,
  `State_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_gyan`
--

INSERT INTO `state_gyan` (`State_id`, `State_name`) VALUES
(4, 'GUJARAT'),
(5, 'MAHARASTRA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bhandar_gyan`
--
ALTER TABLE `bhandar_gyan`
  ADD PRIMARY KEY (`Bhandar_id`),
  ADD KEY `State_id` (`State_id`),
  ADD KEY `City_id` (`City_id`);

--
-- Indexes for table `city_gyan`
--
ALTER TABLE `city_gyan`
  ADD PRIMARY KEY (`City_id`),
  ADD KEY `State_id` (`State_id`);

--
-- Indexes for table `publisher_gyan`
--
ALTER TABLE `publisher_gyan`
  ADD PRIMARY KEY (`Publisher_id`);

--
-- Indexes for table `state_gyan`
--
ALTER TABLE `state_gyan`
  ADD PRIMARY KEY (`State_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bhandar_gyan`
--
ALTER TABLE `bhandar_gyan`
  MODIFY `Bhandar_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `city_gyan`
--
ALTER TABLE `city_gyan`
  MODIFY `City_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `publisher_gyan`
--
ALTER TABLE `publisher_gyan`
  MODIFY `Publisher_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `state_gyan`
--
ALTER TABLE `state_gyan`
  MODIFY `State_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bhandar_gyan`
--
ALTER TABLE `bhandar_gyan`
  ADD CONSTRAINT `bhandar_gyan_ibfk_1` FOREIGN KEY (`State_id`) REFERENCES `state_gyan` (`State_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bhandar_gyan_ibfk_2` FOREIGN KEY (`City_id`) REFERENCES `city_gyan` (`City_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city_gyan`
--
ALTER TABLE `city_gyan`
  ADD CONSTRAINT `city_gyan_ibfk_1` FOREIGN KEY (`State_id`) REFERENCES `state_gyan` (`State_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
