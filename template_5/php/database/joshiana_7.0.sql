-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2016 at 05:51 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `joshiana_7.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_registered`
--

CREATE TABLE IF NOT EXISTS `college_registered` (
  `sl_no` int(255) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(2000) NOT NULL,
  `college_address` varchar(2000) NOT NULL,
  `accomodation_request` varchar(2000) NOT NULL,
  `registration_date` varchar(2000) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_slno` int(255) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(2000) NOT NULL,
  `member_username` varchar(2000) NOT NULL,
  `member_password` varchar(2000) NOT NULL,
  PRIMARY KEY (`member_slno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `participant_slno` int(255) NOT NULL AUTO_INCREMENT,
  `participant_name` varchar(2000) NOT NULL,
  `participant_mobile` varchar(2000) NOT NULL,
  `participant_college` varchar(2000) NOT NULL,
  `participant_event` varchar(2000) NOT NULL,
  PRIMARY KEY (`participant_slno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
