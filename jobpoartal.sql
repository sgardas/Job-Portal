-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2016 at 08:23 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobpoartal`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_m_t`
--

CREATE TABLE IF NOT EXISTS `course_m_t` (
  `courseID` int(11) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDate` date NOT NULL,
  `modifiedBy` int(11) NOT NULL,
  `modifiedDate` date NOT NULL,
  `courseStatus` char(1) NOT NULL DEFAULT 'E'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_m_t`
--

INSERT INTO `course_m_t` (`courseID`, `courseName`, `createdBy`, `createdDate`, `modifiedBy`, `modifiedDate`, `courseStatus`) VALUES
(1, 'B.Tech', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(2, 'M.Tech', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(3, 'MBA', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(4, 'MCA', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(5, 'BA', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(6, 'B.COM', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(7, 'B.SC', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(8, 'BBM', 0, '2016-11-28', 0, '2016-11-28', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_m_t`
--

CREATE TABLE IF NOT EXISTS `jobs_m_t` (
  `jobID` int(15) NOT NULL,
  `jobTitle` varchar(250) NOT NULL,
  `compName` varchar(250) NOT NULL,
  `qualfctn` varchar(200) NOT NULL,
  `experience` varchar(150) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `modifiedBy` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `jobStatus` char(1) NOT NULL DEFAULT 'E'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_m_t`
--

INSERT INTO `jobs_m_t` (`jobID`, `jobTitle`, `compName`, `qualfctn`, `experience`, `createdBy`, `createdDate`, `modifiedBy`, `modifiedDate`, `jobStatus`) VALUES
(1, 'Sales Manager', 'Leading Genreal Insurance Comapany', 'B.com', '2 years of Exp', 1, '2016-11-02 14:10:28', 1, '2016-11-26 12:21:17', 'E'),
(2, ' Manager', 'Leading Genreal Insurance Comapany', 'B.A', '4 years of Exp', 1, '2016-11-02 14:43:44', 1, '2016-11-26 12:21:07', 'E'),
(3, 'Sales Manager', 'Leading Genreal Insurance Comapany', 'MBA', '3 years of Exp', 1, '2016-11-02 14:44:15', 1, '2016-11-26 12:20:43', 'E'),
(4, 'Sales Manager1', 'Leading Genreal Insurance Comapany', 'B.Tech', 'Fresher', 1, '2016-11-02 17:11:23', 1, '2016-11-29 18:01:24', 'E'),
(5, 'dfdf', 'fdfdf', 'ffdfdf', 'fddf', 1, '2016-11-29 18:03:24', 1, '2016-11-29 18:05:35', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `role_m_t`
--

CREATE TABLE IF NOT EXISTS `role_m_t` (
  `roleId` int(11) NOT NULL,
  `roleName` varchar(250) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDate` date NOT NULL,
  `modifiedBy` int(11) NOT NULL,
  `modifiedDt` date NOT NULL,
  `roleStatus` char(1) NOT NULL DEFAULT 'E'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_m_t`
--

INSERT INTO `role_m_t` (`roleId`, `roleName`, `createdBy`, `createdDate`, `modifiedBy`, `modifiedDt`, `roleStatus`) VALUES
(1, 'Administrator', 1, '2014-09-03', 0, '0000-00-00', 'E'),
(2, 'member', 1, '2014-09-03', 0, '0000-00-00', 'E'),
(3, 'users', 1, '2014-09-03', 0, '0000-00-00', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `subcourse_m_t`
--

CREATE TABLE IF NOT EXISTS `subcourse_m_t` (
  `subcourseID` int(11) NOT NULL,
  `courseID` int(11) NOT NULL,
  `subcourseName` varchar(255) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDate` date NOT NULL,
  `modifiedBy` int(11) NOT NULL,
  `modifiedDate` date NOT NULL,
  `subcourseStatus` char(1) NOT NULL DEFAULT 'E'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcourse_m_t`
--

INSERT INTO `subcourse_m_t` (`subcourseID`, `courseID`, `subcourseName`, `createdBy`, `createdDate`, `modifiedBy`, `modifiedDate`, `subcourseStatus`) VALUES
(1, 1, 'ECE', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(2, 1, 'EEE', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(3, 1, 'CSC', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(4, 1, 'CSC', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(5, 2, 'ECE', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(6, 2, 'EEE', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(7, 3, 'HR & MANAGEMENT', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(8, 3, 'HR & MARKETING', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(9, 3, 'HR & FINANCE', 0, '2016-11-28', 0, '0000-00-00', 'E'),
(10, 3, 'INTERNATIONAL BUSINESS MANAGEMENT', 0, '2016-11-28', 0, '0000-00-00', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `uploadjobskrdata_t`
--

CREATE TABLE IF NOT EXISTS `uploadjobskrdata_t` (
  `jobsekr_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_role` int(11) NOT NULL,
  `jobsekr_compName` varchar(255) NOT NULL,
  `jobsekr_fullname` varchar(200) NOT NULL,
  `jobsekr_email` varchar(150) NOT NULL,
  `jobsekr_pwd` varchar(200) NOT NULL,
  `jobsekr_cellphone` varchar(20) NOT NULL,
  `jobsekr_address` varchar(200) NOT NULL,
  `jobsekr_year` varchar(200) NOT NULL,
  `jobsekr_gpa` varchar(150) NOT NULL,
  `courseID` varchar(200) NOT NULL,
  `subcourseName` varchar(200) NOT NULL,
  `jobsekr_branch` varchar(255) NOT NULL,
  `jobsekr_subBranch` varchar(200) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDate` date NOT NULL,
  `modifiedBy` int(11) NOT NULL,
  `modifiedDate` date NOT NULL,
  `jobsekrStatus` char(1) NOT NULL DEFAULT 'E'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload_t`
--

CREATE TABLE IF NOT EXISTS `upload_t` (
  `upload_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jobsekr_id` int(11) NOT NULL,
  `uploadImgPath` varchar(255) NOT NULL,
  `uploadImgStatus` char(1) NOT NULL DEFAULT 'P'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_t`
--

INSERT INTO `upload_t` (`upload_id`, `user_id`, `jobsekr_id`, `uploadImgPath`, `uploadImgStatus`) VALUES
(1, 0, 0, 'uploadpostdocs/1480412707.txt', 'P'),
(2, 2, 1, 'uploadpostdocs/1480421066.txt', 'P'),
(3, 0, 0, 'uploadpostdocs/1480421984.pub', 'P'),
(4, 4, 2, 'uploadpostdocs/1480422012.pub', 'P'),
(5, 5, 3, 'uploadpostdocs/1480426863.pub', 'P'),
(6, 0, 0, 'uploadpostdocs/1480488854.pub', 'P'),
(7, 0, 0, 'uploadpostdocs/1480489002.pub', 'P'),
(8, 0, 0, 'uploadpostdocs/1480489061.pub', 'P'),
(9, 0, 0, 'uploadpostdocs/1480489352.pub', 'P'),
(10, 0, 0, 'uploadpostdocs/1480489846.pub', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `users_m_t`
--

CREATE TABLE IF NOT EXISTS `users_m_t` (
  `user_id` int(11) NOT NULL,
  `user_role` int(11) NOT NULL,
  `userType` int(5) NOT NULL,
  `user_CompName` varchar(255) NOT NULL,
  `user_CompAddress` text NOT NULL,
  `user_year` varchar(255) NOT NULL,
  `user_firstname` varchar(100) NOT NULL,
  `user_lastname` varchar(100) NOT NULL,
  `filepath` varchar(60) NOT NULL,
  `user_address` text NOT NULL,
  `user_cellphone` varchar(20) NOT NULL,
  `user_gpa` varchar(150) NOT NULL,
  `user_branch` varchar(200) NOT NULL,
  `user_subBranch` varchar(200) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_dob` date NOT NULL,
  `user_gender` char(1) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pwd` varchar(40) NOT NULL,
  `createdBy` int(55) NOT NULL,
  `createdDate` date NOT NULL,
  `modifiedBy` int(55) NOT NULL,
  `modifiedDate` date NOT NULL,
  `user_status` int(1) NOT NULL DEFAULT '1',
  `user_authCode` varchar(55) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_m_t`
--

INSERT INTO `users_m_t` (`user_id`, `user_role`, `userType`, `user_CompName`, `user_CompAddress`, `user_year`, `user_firstname`, `user_lastname`, `filepath`, `user_address`, `user_cellphone`, `user_gpa`, `user_branch`, `user_subBranch`, `user_email`, `user_dob`, `user_gender`, `user_name`, `user_pwd`, `createdBy`, `createdDate`, `modifiedBy`, `modifiedDate`, `user_status`, `user_authCode`) VALUES
(1, 1, 0, 'Job Poartal', 'Hyderabad', '', 'Job', 'Poartal', 'uploadusrimgs/userid_1.jpg', 'Hyderabad', '8886388899', '0', '', '', 'jobpoartal@gmail.com', '2010-11-26', 'M', 'jobpoartal@gmail.com', 'w¿(Ìë', 1, '2015-11-13', 1, '2016-11-26', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_m_t`
--
ALTER TABLE `course_m_t`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `jobs_m_t`
--
ALTER TABLE `jobs_m_t`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `role_m_t`
--
ALTER TABLE `role_m_t`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `subcourse_m_t`
--
ALTER TABLE `subcourse_m_t`
  ADD PRIMARY KEY (`subcourseID`);

--
-- Indexes for table `uploadjobskrdata_t`
--
ALTER TABLE `uploadjobskrdata_t`
  ADD PRIMARY KEY (`jobsekr_id`);

--
-- Indexes for table `upload_t`
--
ALTER TABLE `upload_t`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `users_m_t`
--
ALTER TABLE `users_m_t`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_m_t`
--
ALTER TABLE `course_m_t`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jobs_m_t`
--
ALTER TABLE `jobs_m_t`
  MODIFY `jobID` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `role_m_t`
--
ALTER TABLE `role_m_t`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subcourse_m_t`
--
ALTER TABLE `subcourse_m_t`
  MODIFY `subcourseID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `uploadjobskrdata_t`
--
ALTER TABLE `uploadjobskrdata_t`
  MODIFY `jobsekr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `upload_t`
--
ALTER TABLE `upload_t`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users_m_t`
--
ALTER TABLE `users_m_t`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
