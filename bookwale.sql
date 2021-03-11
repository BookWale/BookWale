-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 05:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookwale`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch84`
--

CREATE TABLE `branch84` (
  `bid88` int(10) NOT NULL,
  `bname83` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch84`
--

INSERT INTO `branch84` (`bid88`, `bname83`) VALUES
(1, 'informationtechnolog'),
(2, 'computer'),
(3, 'mechanical'),
(4, 'chemical'),
(5, 'civil'),
(6, 'electrical');

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE `sem8` (
  `sid8` int(5) NOT NULL,
  `semstername88` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem8`
--

INSERT INTO `sem8` (`sid8`, `semstername88`) VALUES
(1, 'first'),
(2, 'second'),
(3, 'third'),
(4, 'fourth'),
(5, 'fifth'),
(6, 'sixth'),
(7, 'seventh'),
(8, 'eighth');

-- --------------------------------------------------------

--
-- Table structure for table `sub84`
--

CREATE TABLE `sub84` (
  `sname83` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject9`
--

CREATE TABLE `subject9` (
  `sbid99` int(5) NOT NULL,
  `subname9` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subname9`
--

CREATE TABLE `subname9` (
  `sbid99` int(5) NOT NULL,
  `subname9` varchar(15) NOT NULL,
  `bid88` int(5) NOT NULL,
  `semid` int(5) NOT NULL COMMENT 'sem id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subname9`
--

INSERT INTO `subname9` (`sbid99`, `subname9`, `bid88`, `semid`) VALUES
(1, 'CNS (Cryptograp', 1, 6),
(2, 'AWP (Advance We', 1, 6),
(3, 'AI (Artificial ', 1, 6),
(4, 'IPDC', 1, 6),
(5, 'MAD (Mobile App', 1, 6),
(6, 'SE (Software En', 1, 6),
(7, 'me sub 1 sem 6', 3, 6),
(8, 'me sub 2 sem 6', 3, 6),
(9, 'me sub 3 sem 6', 3, 6),
(10, 'me sub 4 sem 6', 3, 6),
(11, 'me sub 5 sem 6', 3, 6),
(12, 'me sub 6 sem 6', 3, 6),
(13, 'Networking', 1, 5),
(14, 'Web development', 1, 5),
(15, 'IPDC 1', 1, 5),
(16, 'Cyber Security', 1, 5),
(17, 'Analysis and De', 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch84`
--
ALTER TABLE `branch84`
  ADD PRIMARY KEY (`bid88`);

--
-- Indexes for table `sem8`
--
ALTER TABLE `sem8`
  ADD PRIMARY KEY (`sid8`);

--
-- Indexes for table `subject9`
--
ALTER TABLE `subject9`
  ADD PRIMARY KEY (`sbid99`);

--
-- Indexes for table `subname9`
--
ALTER TABLE `subname9`
  ADD PRIMARY KEY (`sbid99`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch84`
--
ALTER TABLE `branch84`
  MODIFY `bid88` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sem8`
--
ALTER TABLE `sem8`
  MODIFY `sid8` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject9`
--
ALTER TABLE `subject9`
  MODIFY `sbid99` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subname9`
--
ALTER TABLE `subname9`
  MODIFY `sbid99` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
