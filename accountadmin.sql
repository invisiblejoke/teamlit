-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2017 at 09:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminAccount`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountadmin`
--

CREATE TABLE `accountadmin` (
  `loginid` varchar(7) CHARACTER SET utf8 NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `accountadmin`
--

INSERT INTO `accountadmin` (`loginid`, `name`, `password`) VALUES
('100', 'freddy', '100'),
('123', 'deco', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountadmin`
--
ALTER TABLE `accountadmin`
  ADD PRIMARY KEY (`loginid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
