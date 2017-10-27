-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 10:12 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_m_t`
--

INSERT INTO `jobs_m_t` (`jobID`, `jobTitle`, `compName`, `qualfctn`, `experience`, `createdBy`, `createdDate`, `modifiedBy`, `modifiedDate`, `jobStatus`) VALUES
(1, 'Sales Manager', 'Leading Genreal Insurance Comapany', 'B.com', '2 years of Exp', 1, '2016-11-02 14:10:28', 1, '2016-11-26 12:21:17', 'E'),
(2, ' Manager', 'Leading Genreal Insurance Comapany', 'B.A', '4 years of Exp', 1, '2016-11-02 14:43:44', 1, '2016-11-26 12:21:07', 'E'),
(3, 'Sales Manager', 'Leading Genreal Insurance Comapany', 'MBA', '3 years of Exp', 1, '2016-11-02 14:44:15', 1, '2016-11-26 12:20:43', 'E'),
(4, 'Sales Manager', 'Leading Genreal Insurance Comapany', 'B.Tech', 'Fresher', 1, '2016-11-02 17:11:23', 1, '2016-11-26 12:20:13', 'E');

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
-- Table structure for table `upload_t`
--

CREATE TABLE IF NOT EXISTS `upload_t` (
  `upload_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `uploadImgPath` varchar(255) NOT NULL,
  `uploadImgStatus` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_m_t`
--

INSERT INTO `users_m_t` (`user_id`, `user_role`, `userType`, `user_CompName`, `user_CompAddress`, `user_year`, `user_firstname`, `user_lastname`, `filepath`, `user_address`, `user_cellphone`, `user_gpa`, `user_branch`, `user_subBranch`, `user_email`, `user_dob`, `user_gender`, `user_name`, `user_pwd`, `createdBy`, `createdDate`, `modifiedBy`, `modifiedDate`, `user_status`, `user_authCode`) VALUES
(1, 1, 0, 'Job Poartal', 'Hyderabad', '', 'Job', 'Poartal', 'uploadusrimgs/userid_1.jpg', 'Hyderabad', '8886388899', '0', '', '', 'jobpoartal@gmail.com', '2010-11-26', 'M', 'jobpoartal@gmail.com', 'w¿(Ìë', 1, '2015-11-13', 1, '2016-11-26', 1, ''),
(45, 2, 0, '', '', '2000', 'rajesh', '', '', 'Hyderabad', '9866136651', 'First', 'B.Tech', '', 'rk081988@gmail.com', '0000-00-00', '', 'rk081988@gmail.com', 'w¿(Ìë', 0, '2016-11-26', 0, '0000-00-00', 1, ''),
(47, 2, 0, '', '', 'fd', 'fdf', '', '', 'df', 'fd', 'First', 'df', '1', 'fdf', '0000-00-00', '', 'fdf', 'w¿(Ìë', 0, '2016-11-26', 0, '0000-00-00', 1, ''),
(48, 2, 0, '', '', 'fghj', 'qewehj', '', '', 'fghj', 'fghj', 'fghj', 'hjkl', '2', 'dfghjk', '0000-00-00', '', 'dfghjk', '€Ÿá', 0, '2016-11-26', 0, '0000-00-00', 1, ''),
(49, 2, 0, '', '', 'vb', 'nm', '', '', 'hj', 'bnm', 'vb', 'vb', '2', 'nm', '0000-00-00', '', 'nm', '‰', 0, '2016-11-26', 0, '0000-00-00', 1, ''),
(50, 2, 0, '', '', 'we', 'qwq', '', '', 'rw', 'ew', 'www', 'we', '2', 'ewe', '0000-00-00', '', 'ewe', 'ü¹È', 0, '2016-11-26', 0, '0000-00-00', 1, ''),
(51, 2, 0, '', '', 'dfgh', 'iop', '', '', 'dfgh', 'dfgh', 'dfghj', 'dfgh', '3', 'uio', '0000-00-00', '', 'uio', '+¯', 0, '2016-11-26', 0, '0000-00-00', 1, '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `jobs_m_t`
--
ALTER TABLE `jobs_m_t`
  MODIFY `jobID` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role_m_t`
--
ALTER TABLE `role_m_t`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `upload_t`
--
ALTER TABLE `upload_t`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_m_t`
--
ALTER TABLE `users_m_t`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
