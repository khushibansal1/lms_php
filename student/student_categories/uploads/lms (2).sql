-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 06:59 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `cat_id` int(11) NOT NULL,
  `language` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`cat_id`, `language`, `title`) VALUES
(1001, 'English', 'web Development'),
(1008, 'English', 'Graphic Design'),
(1009, 'English', 'Video Editing'),
(1010, 'English', 'Online Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `courses_master`
--

CREATE TABLE `courses_master` (
  `cid` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `thumbnail` blob NOT NULL,
  `description` longtext NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_master`
--

INSERT INTO `courses_master` (`cid`, `title`, `thumbnail`, `description`, `cat_id`) VALUES
(2170, 'HTML/CSS', 0x75706c6f6164732f70726f6772616d6d696e672d333137333435365f313238302e706e67, 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML', 1001);

-- --------------------------------------------------------

--
-- Table structure for table `course_enrollment`
--

CREATE TABLE `course_enrollment` (
  `eid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date and time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_master`
--

CREATE TABLE `lesson_master` (
  `lid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `lessonname` varchar(100) NOT NULL,
  `descripton` longtext NOT NULL,
  `video_link` varchar(250) NOT NULL,
  `text link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE `student_master` (
  `sid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`sid`, `name`, `contactno`, `email`, `password`, `country`, `province`, `city`) VALUES
(2118, 'DHRUTI DESAIii', 7203821596, 'khushi@gmail.com', '01092001', 'India', 'gujarat', 'surat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `courses_master`
--
ALTER TABLE `courses_master`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `course_enrollment`
--
ALTER TABLE `course_enrollment`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `course_enrollment_ibfk_2` (`cid`);

--
-- Indexes for table `lesson_master`
--
ALTER TABLE `lesson_master`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `student_master`
--
ALTER TABLE `student_master`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `courses_master`
--
ALTER TABLE `courses_master`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2196;

--
-- AUTO_INCREMENT for table `course_enrollment`
--
ALTER TABLE `course_enrollment`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson_master`
--
ALTER TABLE `lesson_master`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2119;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_enrollment`
--
ALTER TABLE `course_enrollment`
  ADD CONSTRAINT `course_enrollment_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student_master` (`sid`),
  ADD CONSTRAINT `course_enrollment_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `courses_master` (`cid`);

--
-- Constraints for table `lesson_master`
--
ALTER TABLE `lesson_master`
  ADD CONSTRAINT `lesson_master_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `courses_master` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
