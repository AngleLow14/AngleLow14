-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 07:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department` varchar(254) NOT NULL,
  `course_unit` int(254) NOT NULL,
  `major` varchar(254) NOT NULL,
  `ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `graduate_year`
--

CREATE TABLE `graduate_year` (
  `month` int(50) NOT NULL,
  `day` int(50) NOT NULL,
  `year` int(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `first_name` varchar(254) NOT NULL,
  `middle_name` varchar(254) NOT NULL,
  `last_name` varchar(254) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(254) NOT NULL,
  `contact_no.` int(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(50) NOT NULL,
  `name` varchar(254) NOT NULL,
  `department` varchar(254) NOT NULL,
  `school_year` int(50) NOT NULL,
  `Course` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department`),
  ADD UNIQUE KEY `department` (`department`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `graduate_year`
--
ALTER TABLE `graduate_year`
  ADD UNIQUE KEY `year` (`year`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`last_name`),
  ADD UNIQUE KEY `last_name` (`last_name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `department` (`department`,`school_year`,`Course`),
  ADD KEY `school_year` (`school_year`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `person` (`id`);

--
-- Constraints for table `graduate_year`
--
ALTER TABLE `graduate_year`
  ADD CONSTRAINT `graduate_year_ibfk_1` FOREIGN KEY (`id`) REFERENCES `student` (`ID`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`id`) REFERENCES `student` (`ID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`department`) REFERENCES `department` (`department`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `department` (`ID`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`name`) REFERENCES `person` (`last_name`),
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`school_year`) REFERENCES `graduate_year` (`year`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
