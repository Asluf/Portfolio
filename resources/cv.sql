-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 10:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `la1` varchar(20) NOT NULL,
  `pe1` varchar(20) NOT NULL,
  `la2` varchar(20) NOT NULL,
  `pe2` varchar(20) NOT NULL,
  `la3` varchar(20) NOT NULL,
  `pe3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `nic`, `la1`, `pe1`, `la2`, `pe2`, `la3`, `pe3`) VALUES
(13, '200100402750', 'English', '87', 'Sinhala', '99', 'Tamil', '100');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `prof` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(25) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `nic`, `fname`, `lname`, `prof`, `city`, `country`, `mail`, `mobile`) VALUES
(13, '200100402750', 'Mohamed', 'Ahamed', 'Developer', 'Colombo', 'Sri lanka', 'moh@gmail.com', '0711191193');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `sk1` varchar(20) NOT NULL,
  `per1` varchar(20) NOT NULL,
  `sk2` varchar(20) NOT NULL,
  `per2` varchar(20) NOT NULL,
  `sk3` varchar(20) NOT NULL,
  `per3` varchar(20) NOT NULL,
  `sk4` varchar(20) NOT NULL,
  `per4` varchar(20) NOT NULL,
  `sk5` varchar(20) NOT NULL,
  `per5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `nic`, `sk1`, `per1`, `sk2`, `per2`, `sk3`, `per3`, `sk4`, `per4`, `sk5`, `per5`) VALUES
(13, '200100402750', 'sk1', '55', 'sk2', '85', 'sk3', '65', 'sk4', '96', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `uni1` varchar(50) NOT NULL,
  `f1` varchar(50) NOT NULL,
  `t1` varchar(50) NOT NULL,
  `de1` varchar(500) NOT NULL,
  `uni2` varchar(50) NOT NULL,
  `f2` varchar(50) NOT NULL,
  `t2` varchar(50) NOT NULL,
  `de2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `nic`, `uni1`, `f1`, `t1`, `de1`, `uni2`, `f2`, `t2`, `de2`) VALUES
(13, '200100402750', 'ITUM', '2023-03-26', '2023-04-01', 'More details11', 'BCAS', '2023-04-09', '2023-04-22', 'More details22');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `wo1` varchar(50) NOT NULL,
  `from1` varchar(50) NOT NULL,
  `to1` varchar(50) NOT NULL,
  `des1` varchar(500) NOT NULL,
  `wo2` varchar(50) NOT NULL,
  `from2` varchar(50) NOT NULL,
  `to2` varchar(50) NOT NULL,
  `des2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `nic`, `wo1`, `from1`, `to1`, `des1`, `wo2`, `from2`, `to2`, `des2`) VALUES
(13, '200100402750', 'Web deleoper', '2023-05-01', '2023-05-06', 'Developer in MSODI', 'Project manager', '2023-05-14', '2023-05-20', 'More details');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`,`nic`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`,`nic`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`,`nic`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`,`nic`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`,`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
