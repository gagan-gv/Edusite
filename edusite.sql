-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 07, 2020 at 05:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edusite`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept_or_reject`
--

CREATE TABLE `accept_or_reject` (
  `Admin_ID` char(5) DEFAULT NULL,
  `Inst_ID` varchar(50) DEFAULT NULL,
  `Course_ID` int(5) DEFAULT NULL,
  `Permit` char(1) DEFAULT NULL
) ;

--
-- Dumping data for table `accept_or_reject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acct`
--

CREATE TABLE `admin_acct` (
  `Admin_ID` char(5) NOT NULL,
  `Admin_Name` varchar(30) NOT NULL,
  `A_Password` varchar(50) NOT NULL,
  `Admin_Email` varchar(30) NOT NULL,
  `Admin_Mobile` decimal(10,0) NOT NULL
) ;

--
-- Dumping data for table `admin_acct`
--

INSERT INTO `admin_acct` (`Admin_ID`, `Admin_Name`, `A_Password`, `Admin_Email`, `Admin_Mobile`) VALUES
('A0001', 'Gagan', 'root_edusite', 'gagan@edusite.com', '9874563210');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `Content_ID` char(7) NOT NULL,
  `Content_Type` varchar(20) NOT NULL
) ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`Content_ID`, `Content_Type`) VALUES
('CON0001', 'Video'),
('CON0002', 'File'),
('CON0003', 'Quiz');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Course_Title` varchar(100) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `C_Image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--
-- --------------------------------------------------------

--
-- Table structure for table `course_content`
--

CREATE TABLE `course_content` (
  `Course_ID` int(5) NOT NULL,
  `Content_ID` char(7) NOT NULL,
  `Content_Title` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_content`
--


-- --------------------------------------------------------

--
-- Table structure for table `course_create`
--

CREATE TABLE `course_create` (
  `Inst_ID` varchar(50) NOT NULL,
  `Course_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_create`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_enroll`
--

CREATE TABLE `course_enroll` (
  `Learner_ID` varchar(50) NOT NULL,
  `Course_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_enroll`
--


-- --------------------------------------------------------

--
-- Table structure for table `grant_certificate`
--

CREATE TABLE `grant_certificate` (
  `Certificate_ID` char(10) NOT NULL,
  `Learner_ID` varchar(50) DEFAULT NULL,
  `Course_ID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inst_acct`
--

CREATE TABLE `inst_acct` (
  `Inst_ID` varchar(50) NOT NULL,
  `I_Password` varchar(50) NOT NULL,
  `Inst_Name` varchar(30) NOT NULL,
  `Inst_Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inst_acct`
--


-- --------------------------------------------------------

--
-- Table structure for table `learner_acct`
--

CREATE TABLE `learner_acct` (
  `Learner_ID` varchar(50) NOT NULL,
  `L_Password` varchar(50) NOT NULL,
  `Learner_Name` varchar(30) NOT NULL,
  `Learner_Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learner_acct`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_create`
--

CREATE TABLE `quiz_create` (
  `Quiz_ID` char(5) NOT NULL,
  `Inst_ID` varchar(50) DEFAULT NULL,
  `Quiz_No` decimal(10,0) NOT NULL,
  `Max_Marks` decimal(3,0) NOT NULL,
  `Pass_Marks` decimal(3,0) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_feedback`
--

CREATE TABLE `quiz_feedback` (
  `Quiz_No` decimal(10,0) DEFAULT NULL,
  `Quiz_ID` char(5) DEFAULT NULL,
  `Inst_ID` varchar(50) DEFAULT NULL,
  `Learner_ID` varchar(50) DEFAULT NULL,
  `Feedback_Description` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_take`
--

CREATE TABLE `quiz_take` (
  `Quiz_ID` char(5) NOT NULL,
  `Quiz_No` decimal(10,0) NOT NULL,
  `Learner_ID` varchar(50) NOT NULL,
  `Quiz_Marks_Scored` decimal(3,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `Admin_ID` char(5) NOT NULL,
  `Support_No` char(5) NOT NULL,
  `Support_Content` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept_or_reject`
--
ALTER TABLE `accept_or_reject`
  ADD KEY `Inst_ID` (`Inst_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `admin_acct`
--
ALTER TABLE `admin_acct`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD UNIQUE KEY `Admin_Email` (`Admin_Email`),
  ADD UNIQUE KEY `Admin_Mobile` (`Admin_Mobile`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`Content_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_ID`);

--
-- Indexes for table `course_content`
--
ALTER TABLE `course_content`
  ADD PRIMARY KEY (`Course_ID`,`Content_ID`),
  ADD KEY `Content_ID` (`Content_ID`);

--
-- Indexes for table `course_create`
--
ALTER TABLE `course_create`
  ADD PRIMARY KEY (`Inst_ID`,`Course_ID`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `course_enroll`
--
ALTER TABLE `course_enroll`
  ADD PRIMARY KEY (`Learner_ID`,`Course_ID`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `grant_certificate`
--
ALTER TABLE `grant_certificate`
  ADD PRIMARY KEY (`Certificate_ID`),
  ADD KEY `Course_ID` (`Course_ID`),
  ADD KEY `Learner_ID` (`Learner_ID`);

--
-- Indexes for table `inst_acct`
--
ALTER TABLE `inst_acct`
  ADD PRIMARY KEY (`Inst_ID`),
  ADD UNIQUE KEY `Inst_Email` (`Inst_Email`);

--
-- Indexes for table `learner_acct`
--
ALTER TABLE `learner_acct`
  ADD PRIMARY KEY (`Learner_ID`),
  ADD UNIQUE KEY `Learner_Email` (`Learner_Email`);

--
-- Indexes for table `quiz_create`
--
ALTER TABLE `quiz_create`
  ADD PRIMARY KEY (`Quiz_ID`),
  ADD KEY `Inst_ID` (`Inst_ID`);

--
-- Indexes for table `quiz_feedback`
--
ALTER TABLE `quiz_feedback`
  ADD KEY `Quiz_ID` (`Quiz_ID`),
  ADD KEY `Learner_ID` (`Learner_ID`),
  ADD KEY `Inst_ID` (`Inst_ID`);

--
-- Indexes for table `quiz_take`
--
ALTER TABLE `quiz_take`
  ADD PRIMARY KEY (`Quiz_ID`,`Learner_ID`),
  ADD KEY `Learner_ID` (`Learner_ID`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`Admin_ID`,`Support_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Course_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accept_or_reject`
--
ALTER TABLE `accept_or_reject`
  ADD CONSTRAINT `accept_or_reject_ibfk_1` FOREIGN KEY (`Inst_ID`) REFERENCES `inst_acct` (`Inst_ID`),
  ADD CONSTRAINT `accept_or_reject_ibfk_2` FOREIGN KEY (`Admin_ID`) REFERENCES `admin_acct` (`Admin_ID`),
  ADD CONSTRAINT `accept_or_reject_ibfk_3` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_ID`);

--
-- Constraints for table `course_content`
--
ALTER TABLE `course_content`
  ADD CONSTRAINT `course_content_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_ID`),
  ADD CONSTRAINT `course_content_ibfk_2` FOREIGN KEY (`Content_ID`) REFERENCES `content` (`Content_ID`);

--
-- Constraints for table `course_create`
--
ALTER TABLE `course_create`
  ADD CONSTRAINT `course_create_ibfk_1` FOREIGN KEY (`Inst_ID`) REFERENCES `inst_acct` (`Inst_ID`),
  ADD CONSTRAINT `course_create_ibfk_2` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_ID`);

--
-- Constraints for table `course_enroll`
--
ALTER TABLE `course_enroll`
  ADD CONSTRAINT `course_enroll_ibfk_1` FOREIGN KEY (`Learner_ID`) REFERENCES `learner_acct` (`Learner_ID`),
  ADD CONSTRAINT `course_enroll_ibfk_2` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_ID`);

--
-- Constraints for table `grant_certificate`
--
ALTER TABLE `grant_certificate`
  ADD CONSTRAINT `grant_certificate_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_ID`),
  ADD CONSTRAINT `grant_certificate_ibfk_2` FOREIGN KEY (`Learner_ID`) REFERENCES `learner_acct` (`Learner_ID`);

--
-- Constraints for table `quiz_create`
--
ALTER TABLE `quiz_create`
  ADD CONSTRAINT `quiz_create_ibfk_1` FOREIGN KEY (`Inst_ID`) REFERENCES `inst_acct` (`Inst_ID`);

--
-- Constraints for table `quiz_feedback`
--
ALTER TABLE `quiz_feedback`
  ADD CONSTRAINT `quiz_feedback_ibfk_1` FOREIGN KEY (`Quiz_ID`) REFERENCES `quiz_create` (`Quiz_ID`),
  ADD CONSTRAINT `quiz_feedback_ibfk_2` FOREIGN KEY (`Learner_ID`) REFERENCES `learner_acct` (`Learner_ID`),
  ADD CONSTRAINT `quiz_feedback_ibfk_3` FOREIGN KEY (`Inst_ID`) REFERENCES `inst_acct` (`Inst_ID`);

--
-- Constraints for table `quiz_take`
--
ALTER TABLE `quiz_take`
  ADD CONSTRAINT `quiz_take_ibfk_1` FOREIGN KEY (`Quiz_ID`) REFERENCES `quiz_create` (`Quiz_ID`),
  ADD CONSTRAINT `quiz_take_ibfk_2` FOREIGN KEY (`Learner_ID`) REFERENCES `learner_acct` (`Learner_ID`);

--
-- Constraints for table `support`
--
ALTER TABLE `support`
  ADD CONSTRAINT `support_ibfk_1` FOREIGN KEY (`Admin_ID`) REFERENCES `admin_acct` (`Admin_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
