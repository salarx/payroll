-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2019 at 08:00 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

DROP TABLE IF EXISTS `account_types`;
CREATE TABLE IF NOT EXISTS `account_types` (
  `type_id` int(1) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(128) NOT NULL,
  `admin_salt` varchar(60) NOT NULL,
  `bank_balance` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_salt`, `bank_balance`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '$2y$11$72pLW2ECNjPQOMTGXV1v/.vQ0e8Ln8VgIruW3wn59j81.dHjWQ/T.', 100000),
(2, 'merababy', '05ec7b787a9ec3560b31d701a0b425b86f283983b17da63065284c0bfdca3a84311ca6f14641a693e046d20fe454c92ef3a8edc9e887757399c7347175cdd713', '$2y$11$DEdhgv1NltvvyttHWRWGFu66CW0fe0vi/one2LYDhhY396laZDiS6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_department_transactions`
--

DROP TABLE IF EXISTS `admin_department_transactions`;
CREATE TABLE IF NOT EXISTS `admin_department_transactions` (
  `from_admin` int(10) NOT NULL,
  `to_dep` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`transaction_id`),
  KEY `from_admin` (`from_admin`),
  KEY `to_dep` (`to_dep`)
) ENGINE=MyISAM AUTO_INCREMENT=1007 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_department_transactions`
--

INSERT INTO `admin_department_transactions` (`from_admin`, `to_dep`, `amount`, `transaction_id`) VALUES
(1, 1, 0, 1001),
(1, 1, 0, 1002),
(1, 2, 2000, 1003),
(1, 3, 3000, 1004),
(1, 3, 1000, 1005),
(1, 2, 1000, 1006);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `dep_id` int(11) NOT NULL,
  `dep_name` text NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `dep_salt` varchar(60) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `bank_balance` int(11) NOT NULL,
  PRIMARY KEY (`dep_id`),
  KEY `employee_id` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dep_id`, `dep_name`, `password`, `dep_salt`, `emp_id`, `bank_balance`) VALUES
(1, 'Production', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$27yhrM05NDQnO1TdDZcY2OAw7StvLytOOrhh0358wPjEIwHFRfU02', 102, 0),
(2, 'Research and Development', '', '', 103, 0),
(3, 'Marketing', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$zvDcukZH7pPgME0u0fDmreNJIExSasdMCwmwT2ds2TbUR66/S56Lu', 104, 0),
(4, 'Purchasing', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '$2y$11$Zl5MwEjsyEjHGFNSn2vCEunoqWcD8k4YAojRzmrMAk.POtSZT85z.', NULL, 0),
(5, 'Human Resource Management', NULL, '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `department_employee_transactions`
--

DROP TABLE IF EXISTS `department_employee_transactions`;
CREATE TABLE IF NOT EXISTS `department_employee_transactions` (
  `from_dep` int(11) NOT NULL,
  `to_emp` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_type` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `account_type` (`account_type`),
  KEY `from_dep` (`from_dep`),
  KEY `to_emp` (`to_emp`)
) ENGINE=MyISAM AUTO_INCREMENT=5000 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
CREATE TABLE IF NOT EXISTS `designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `designation`) VALUES
(1, 'Business Analyst'),
(2, 'Software Engineer'),
(3, 'System Analyst'),
(4, 'Programmer Analyst'),
(5, 'Senior Software Engineer'),
(6, 'Project Lead'),
(7, 'Project Manager'),
(8, 'Program Manager'),
(9, 'Architect'),
(10, 'Technical Specialist');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `employee_department` int(30) NOT NULL,
  `employee_designation` int(30) NOT NULL,
  `employee_phone` varchar(12) NOT NULL,
  `employee_address` text NOT NULL,
  `emp_password` varchar(128) DEFAULT NULL,
  `emp_salt` varchar(60) NOT NULL,
  `employee_email` varchar(128) DEFAULT NULL,
  `balance_1` int(11) NOT NULL,
  `balance_2` int(11) NOT NULL,
  `balance_3` int(11) NOT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `status_id` (`status_id`),
  KEY `payment_id` (`payment_id`),
  KEY `employee_department` (`employee_department`),
  KEY `employee_designation` (`employee_designation`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `payment_id`, `status_id`, `employee_name`, `employee_department`, `employee_designation`, `employee_phone`, `employee_address`, `emp_password`, `emp_salt`, `employee_email`, `balance_1`, `balance_2`, `balance_3`) VALUES
(102, 1, 1, 'Manav Goyal', 1, 1, '+91-84493924', 'sfb', 'asd123', '', NULL, 0, 0, 0),
(103, 1, 1, 'Sahil Kumar', 2, 1, '+91-94670173', 'PDPM IIITDMJ', 'sahil', '', 'salarx.gm@gmail.com', 0, 0, 0),
(104, 1, 1, 'Harshit', 3, 1, '9694445402', 'PDPM IIITDMJ', '', '', '2017222@iiitdmj.ac.in', 0, 0, 0),
(105, 2, 1, 'Aman', 5, 8, 'number', 'A201', 'ffe55fac4119143ad22e3f4927211f82b65e7609fc90960ba6ba526723c1b7fd38d2348706cd4f7845e155c59e1184c2cef228afaadd7c9029d0760d14475cde', '$2y$11$M4jVz6qWU45lmPnoVGUIL.gYb8nxeFexQWjXvcxvfIYYwBb2fP17.', 'singhal.com', 0, 0, 0),
(106, 1, 1, 'Kartik', 2, 6, '9897654907', 'PDPM', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$D0whJ0YDUKQ8a3t8hCybKOGgnk7rXsdeu9tdj98zPwPYUWF7Gzxc6', '2017120@iiitdmj.ac.in', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(12) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_type`) VALUES
(1, 'Hourly'),
(2, 'Contractual'),
(3, 'Daily');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(10) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Permanent'),
(2, 'Temporary'),
(3, 'Probation');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`employee_id`) ON DELETE SET NULL;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`),
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`employee_department`) REFERENCES `departments` (`dep_id`),
  ADD CONSTRAINT `employee_ibfk_4` FOREIGN KEY (`employee_designation`) REFERENCES `designation` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
