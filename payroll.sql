-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2019 at 01:01 PM
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(128) NOT NULL,
  `admin_salt` varchar(60) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_salt`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '$2y$11$72pLW2ECNjPQOMTGXV1v/.vQ0e8Ln8VgIruW3wn59j81.dHjWQ/T.'),
(2, 'merababy', '05ec7b787a9ec3560b31d701a0b425b86f283983b17da63065284c0bfdca3a84311ca6f14641a693e046d20fe454c92ef3a8edc9e887757399c7347175cdd713', '$2y$11$DEdhgv1NltvvyttHWRWGFu66CW0fe0vi/one2LYDhhY396laZDiS6');

-- --------------------------------------------------------

--
-- Table structure for table `admin_department_transactions`
--

DROP TABLE IF EXISTS `admin_department_transactions`;
CREATE TABLE IF NOT EXISTS `admin_department_transactions` (
  `admin_id` varchar(20) NOT NULL,
  `dep_id` int(20) NOT NULL,
  `amount` int(15) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`dep_id`),
  KEY `employee_id` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dep_id`, `dep_name`, `password`, `dep_salt`, `emp_id`) VALUES
(1, 'Production', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$27yhrM05NDQnO1TdDZcY2OAw7StvLytOOrhh0358wPjEIwHFRfU02', 102),
(2, 'Research and Development', '', '', 103),
(3, 'Marketing', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$RV9/0HKBPky/rWe06zML6efhuBFN/RMr2sza6v8FZ7e7RwwYyo9.W', 104),
(4, 'Purchasing', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '$2y$11$Zl5MwEjsyEjHGFNSn2vCEunoqWcD8k4YAojRzmrMAk.POtSZT85z.', 109),
(5, 'Human Resource Management', NULL, '', NULL);

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
  `employee_salary` tinyint(1) NOT NULL DEFAULT '0',
  `emp_password` varchar(128) DEFAULT NULL,
  `emp_salt` varchar(60) NOT NULL,
  `employee_email` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `status_id` (`status_id`),
  KEY `payment_id` (`payment_id`),
  KEY `employee_department` (`employee_department`),
  KEY `employee_designation` (`employee_designation`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `payment_id`, `status_id`, `employee_name`, `employee_department`, `employee_designation`, `employee_phone`, `employee_address`, `employee_salary`, `emp_password`, `emp_salt`, `employee_email`) VALUES
(102, 1, 1, 'Manav Goyal', 1, 1, '+91-84493924', 'sfb', 1, 'asd123', '', NULL),
(103, 1, 1, 'Sahil Kumar', 2, 1, '+91-94670173', 'PDPM IIITDMJ', 1, 'sahil', '', 'salarx.gm@gmail.com'),
(104, 1, 1, 'Harshit', 3, 1, '9694445402', 'PDPM IIITDMJ', 0, '', '', '2017222@iiitdmj.ac.in'),
(105, 1, 1, 'Aman', 3, 3, '', 'A201', 0, '636fe6e6295255057db44997999fd1c6969b50d05209a6b47134177efe4d1b92630e7075eaf6635a751500733dd517ab3b705b2f0a455e56b1cd0649055ed25d', '$2y$11$7SgpL1MGj6MZ0GYnX3OqjO2jbRacCbIhZ5ghk6FqL.xY5sYma0V9G', 'blabla@gmail.com'),
(109, 3, 1, 'Kartik', 4, 9, '', 'IIITDMJ', 0, '740879064bb7029fb66d7f22533ebf9b73f66b8c5a86e90088b390287ee5e5daa153242eaf5cccf6b9de38eb9f817dfc55321bef8c99134e34f1d3b5485c6faf', '$2y$11$7f1Gc0OUIi89ghx98hESEebsTSZrwg8aUQuVvJAP4Ma30ZZCLYLX6', 'kartik@gmail.com'),
(110, 1, 1, 'Palak', 5, 2, '', 'H1', 0, 'b099440606e82257dcb488378055a012e474e13c638d42e9f1410a66bb7f1cc9219ec63b6e8610aa8d19b115692df265340ba9847182bf965a09e0e9b1504cd8', '$2y$11$r9OEkT7JggsIrH.3y2.Bh..zm5IP2GM8sT31EDb32pY7z4FtvvP7S', 'palak.com');

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
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `salary_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `salary_basic` varchar(10) NOT NULL,
  `salary_overtime` varchar(10) NOT NULL,
  `salary_other` varchar(10) NOT NULL,
  PRIMARY KEY (`salary_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `employee_id`, `salary_basic`, `salary_overtime`, `salary_other`) VALUES
(2, 102, '32132', '65456', '23'),
(3, 103, '.10', '1', 'null');

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
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`employee_id`) ON DELETE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`),
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`employee_department`) REFERENCES `departments` (`dep_id`),
  ADD CONSTRAINT `employee_ibfk_4` FOREIGN KEY (`employee_designation`) REFERENCES `designation` (`id`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
