-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 01:18 PM
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
  `pe1` varchar(20) DEFAULT NULL,
  `la2` varchar(20) NOT NULL,
  `pe2` varchar(20) DEFAULT NULL,
  `la3` varchar(20) NOT NULL,
  `pe3` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `nic`, `la1`, `pe1`, `la2`, `pe2`, `la3`, `pe3`) VALUES
(19, '200100402755', 'Spanish', NULL, 'English', NULL, 'Chinese', NULL),
(20, '255699745623', 'Sinhala', NULL, 'English', NULL, 'Tamil', NULL),
(23, 'ertydfh', '', NULL, 'yu', NULL, 'tyu', NULL),
(25, '200100402750', 'English', NULL, 'Sinhala', NULL, 'Tamil', NULL),
(26, 'rrbffb', 'ejewhjeh', NULL, 'ejhdfjeh', NULL, 'wkwjekewj', NULL);

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
  `mobile` varchar(15) NOT NULL,
  `about_me` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `nic`, `fname`, `lname`, `prof`, `city`, `country`, `mail`, `mobile`, `about_me`) VALUES
(19, '200100402755', 'John', 'dee', 'Data engineer', 'Newyork', 'USA', 'jhon@gmail.com', '0015896325', 'A highly skilled and results-driven data engineer with 2 years of experience in designing, building, and optimizing data infrastructure and pipelines. Proficient in leveraging cutting-edge technologies and frameworks to extract, transform, and load (ETL) data, and in developing scalable and robust data solutions. Possessing a strong understanding of data modeling, data warehousing, and data integration techniques.'),
(20, '255699745623', 'Abdul', 'Kaiyoom', 'Soft Eng', 'Kalpitiya', 'Srilanka', 'abdul@gmail.com', '071252671666', 'About me.........................................'),
(23, 'ertydfh', 'rtyh', 'rthy', 'tyhu', 'rtyhu', 'rtyhu', 'rtyhuj', 'thyuj', 'tyhujAbout me'),
(25, '200100402750', 'John ', 'Kottalawa', 'CEO ', 'Colombo', 'Srilanka', 'johnkothalawa@gmail.com', '0773365507', 'A highly skilled and results-driven data engineer with 2 years of experience in designing, building, and optimizing data infrastructure and pipelines. Proficient in leveraging cutting-edge technologies and frameworks to extract, transform, and load (ETL) data, and in developing scalable and robust data solutions. Possessing a strong understanding of data modeling, data warehousing, and data integration techniques.'),
(26, 'rrbffb', 'aewhdehw', 'hdehwe', 'kwwjkej', 'jshjdhwej', 'jenfe', 'kdjfkej', 'kejkf', 'About me');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `sk1` varchar(30) NOT NULL,
  `per1` varchar(20) DEFAULT NULL,
  `sk2` varchar(30) NOT NULL,
  `per2` varchar(20) DEFAULT NULL,
  `sk3` varchar(30) NOT NULL,
  `per3` varchar(20) DEFAULT NULL,
  `sk4` varchar(30) NOT NULL,
  `per4` varchar(20) DEFAULT NULL,
  `sk5` varchar(30) NOT NULL,
  `per5` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `nic`, `sk1`, `per1`, `sk2`, `per2`, `sk3`, `per3`, `sk4`, `per4`, `sk5`, `per5`) VALUES
(19, '200100402755', 'Communication', NULL, 'Problem solving', NULL, 'SDLC', NULL, 'OOD', NULL, 'Programming efficiency', NULL),
(20, '255699745623', 'Problem solving', NULL, 'Critical', NULL, 'thinking', NULL, 'teaam', NULL, 'collaboration', NULL),
(23, 'ertydfh', 'hjk', NULL, 'hj', NULL, 'hj', NULL, 'hj', NULL, 'hj', NULL),
(25, '200100402750', 'Time Management', NULL, 'Critical Thinking', NULL, 'Problem Solving', NULL, 'Team Management', NULL, 'Team collaboration', NULL),
(26, 'rrbffb', 'sssj', NULL, 'dsj', NULL, 'kdjfkdj', NULL, 'dfkdn', NULL, 'nf', NULL);

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
(19, '200100402755', 'Hallam, Birmingham', '2016-06-12', '2018-06-07', 'I have completed my Degree in Data engineering(Hons) in 2018.', 'Fordham University', '2018-06-28', '2019-07-25', 'Completed a cyber security diploma. '),
(20, '255699745623', 'ITUM', '2023-06-18', '2023-06-24', 'More details22222222', 'UCSC', '2023-06-25', '2023-07-01', 'More details2222222'),
(23, 'ertydfh', 'hs', '2023-06-06', '2023-06-23', 'More details', 'ed', '2023-06-23', '2023-06-29', 'More details'),
(25, '200100402750', 'University Of Colombo', '2022-09-12', '2023-04-12', 'I have completed BSC Hons in Civil Engineering', 'Cambridge University', '2023-06-25', '2023-07-08', 'I have followed and completed the MSC in QS at cambridge university in UK.'),
(26, 'rrbffb', 'hfjdh', '2023-06-01', '2023-06-15', 'More details', 'jwehajeh', '', '', 'More details');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nic`, `username`, `password`, `role`) VALUES
(1, '200100402750', 'asf', 'asf100', 'user'),
(2, '200018802290', 'jawidh', 'asf100', 'user');

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
(19, '200100402755', 'Assistant Data Enginner', '2019-06-09', '2021-08-10', 'I worked as a Assistant Data Engineer in ALTec solutions in Newyork for 2 years. ', 'Data Engineer', '2021-08-10', '2023-12-05', 'I worked as a data engineer in \"Repub-Tech\" for 2 years. '),
(20, '255699745623', 'Web', '2023-05-28', '2023-06-10', 'More details11111111111', 'Developer', '2023-06-11', '2023-06-17', 'More details...............'),
(23, 'ertydfh', 'yhu', '2023-06-06', '2023-06-30', 'More details', 'wed', '2023-06-19', '2023-06-28', 'More details'),
(25, '200100402750', 'QS Engineer', '2023-02-13', '2023-06-15', 'I have worked as a QS Engineer in Alpha Constructions for 2 years.', 'CEO', '2023-06-18', '2023-06-24', 'I am working as a CEO in KDU from last year.'),
(26, 'rrbffb', 'djdsj', '2023-06-02', '2023-06-23', 'More details', 'jehjfeh', '', '', 'More details');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`) USING BTREE;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
