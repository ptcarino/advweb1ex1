-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2015 at 12:35 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ADVWEB_WEBAPP`
--
CREATE DATABASE IF NOT EXISTS `ADVWEB_WEBAPP` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ADVWEB_WEBAPP`;

-- --------------------------------------------------------

--
-- Table structure for table `DEPARTMENT`
--

CREATE TABLE IF NOT EXISTS `DEPARTMENT` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `DEPARTMENT`
--

INSERT INTO `DEPARTMENT` (`dept_id`, `dept_name`) VALUES
(100, 'I.T. Department'),
(101, 'Executive Department');

-- --------------------------------------------------------

--
-- Table structure for table `EMPLOYEE`
--

CREATE TABLE IF NOT EXISTS `EMPLOYEE` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_firstname` varchar(255) DEFAULT NULL,
  `emp_lastname` varchar(255) DEFAULT NULL,
  `emp_middlename` varchar(255) DEFAULT NULL,
  `emp_gender` char(6) DEFAULT NULL,
  `JOB_TITLE_job_id` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100007 ;

--
-- Dumping data for table `EMPLOYEE`
--

INSERT INTO `EMPLOYEE` (`emp_id`, `emp_firstname`, `emp_lastname`, `emp_middlename`, `emp_gender`, `JOB_TITLE_job_id`) VALUES
(100000, 'Patrick', 'Carino', 'Tuason', 'Male', 100),
(100002, 'Soma', 'Yukihira', 'Saiba', 'Male', 101),
(100004, 'Motoko', 'Kusanagi', 'Akira', 'Female', 0),
(100005, 'Erina', 'Nakiri', '', 'Female', 101),
(100006, 'Tony', 'Stark', '', 'Male', 102);

-- --------------------------------------------------------

--
-- Table structure for table `JOB_TITLE`
--

CREATE TABLE IF NOT EXISTS `JOB_TITLE` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(45) DEFAULT NULL,
  `DEPARTMENT_dept_id` int(11) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `JOB_TITLE`
--

INSERT INTO `JOB_TITLE` (`job_id`, `job_title`, `DEPARTMENT_dept_id`) VALUES
(100, 'System Administrator', 100),
(101, 'Web Developer', 100),
(102, 'Chief Executive Officer', 101);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
