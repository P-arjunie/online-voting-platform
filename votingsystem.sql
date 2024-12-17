-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 06:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `finalist_master`
--

CREATE TABLE `finalist_master` (
  `Id` int(255) NOT NULL,
  `Code` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finalist_master`
--

INSERT INTO `finalist_master` (`Id`, `Code`, `Name`) VALUES
(1, 'No:01', 'Maria Anderson'),
(2, 'No:02', 'Anushka Agrawal'),
(3, 'No:03', 'Peter Gallen'),
(4, 'No:04', 'Nikitha Perera'),
(5, 'No:05', 'Hazeena Ahmed'),
(6, 'No:06', 'Shevin Gomez');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `SecondName` varchar(50) DEFAULT NULL,
  `DOB` datetime DEFAULT NULL,
  `Gender` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Code` int(50) DEFAULT NULL,
  `ContactNo` varchar(10) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL,
  `Province` varchar(100) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `FirstName`, `SecondName`, `DOB`, `Gender`, `Email`, `Code`, `ContactNo`, `Address`, `Province`, `UserName`, `Password`) VALUES
(140, 'shehan', 'chamika', '2023-06-01 00:00:00', 'male', 'gfedgefr@gmail.com', 43, '0761234171', '1 2 3', 'Western', 'shehan', '7788'),
(141, 'tharinda', 'reger', '2023-06-01 00:00:00', 'male', 'trtrt4@gmail.com', 6, '0761234171', 'rtgereh ergtg tergyer', 'Western', 'tharinda', '7788'),
(142, 'hhh', 'fdwedf', '2023-06-01 00:00:00', 'male', '', 0, '', '  ', 'North Central', 'hhh', '7788');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `Id` int(200) NOT NULL,
  `CanidateId` int(200) NOT NULL,
  `VoteBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`Id`, `CanidateId`, `VoteBy`) VALUES
(13, 1, 'shehan'),
(14, 2, 'shehan'),
(15, 3, 'shehan'),
(16, 4, 'shehan'),
(17, 5, 'shehan'),
(18, 6, 'shehan'),
(19, 1, 'hhh'),
(20, 2, 'hhh'),
(21, 1, 'hhh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finalist_master`
--
ALTER TABLE `finalist_master`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finalist_master`
--
ALTER TABLE `finalist_master`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
