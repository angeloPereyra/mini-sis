-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 11:37 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(30) DEFAULT NULL,
  `course_desc` tinytext,
  `dept_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_id` varchar(10) NOT NULL,
  `f_fname` varchar(15) DEFAULT NULL,
  `f_lname` varchar(15) DEFAULT NULL,
  `f_mname` varchar(15) DEFAULT NULL,
  `dept_id` varchar(5) DEFAULT NULL,
  `f_age` varchar(2) DEFAULT NULL,
  `f_dob` date DEFAULT NULL,
  `f_gender` char(1) DEFAULT NULL,
  `f_email` varchar(35) DEFAULT NULL,
  `f_stadd` varchar(30) DEFAULT NULL,
  `f_ctadd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `stud_id` varchar(11) NOT NULL,
  `subj_code` varchar(8) DEFAULT NULL,
  `f_id` varchar(10) DEFAULT NULL,
  `mtgrade` decimal(5,2) DEFAULT NULL,
  `ftgrade` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` varchar(11) NOT NULL,
  `stud_fname` varchar(15) DEFAULT NULL,
  `stud_lname` varchar(15) DEFAULT NULL,
  `stud_mname` varchar(15) DEFAULT NULL,
  `stud_stadd` varchar(25) DEFAULT NULL,
  `stud_ctadd` varchar(25) DEFAULT NULL,
  `stud_age` char(2) DEFAULT NULL,
  `stud_dob` date DEFAULT NULL,
  `stud_gender` char(1) DEFAULT NULL,
  `stud_email_add` varchar(30) DEFAULT NULL,
  `stud_mobno` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subj_code` varchar(8) NOT NULL,
  `subj_name` varchar(30) DEFAULT NULL,
  `subj_desc` tinytext,
  `course_id` varchar(10) DEFAULT NULL,
  `semester` char(1) DEFAULT NULL,
  `schlyr` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`stud_id`),
  ADD KEY `subj_code` (`subj_code`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subj_code`),
  ADD KEY `course_id` (`course_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `student` (`stud_id`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`subj_code`) REFERENCES `subject` (`subj_code`),
  ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
