-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2019 at 02:37 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

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
CREATE DATABASE IF NOT EXISTS `payroll` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `payroll`;

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
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '$2y$11$.phSWInHPAB17yH6u3kY/eWuhfJQq/9lB1lInx98fnUb6R.2t.U6S'),
(2, 'merababy', '05ec7b787a9ec3560b31d701a0b425b86f283983b17da63065284c0bfdca3a84311ca6f14641a693e046d20fe454c92ef3a8edc9e887757399c7347175cdd713', '$2y$11$DEdhgv1NltvvyttHWRWGFu66CW0fe0vi/one2LYDhhY396laZDiS6');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `dep_id` int(11) NOT NULL,
  `dep_name` text NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`dep_id`),
  KEY `employee_id` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dep_id`, `dep_name`, `password`, `emp_id`) VALUES
(1, 'Production', 'manav', 102),
(2, 'Research and Development', NULL, NULL),
(3, 'Marketing', NULL, NULL),
(4, 'Purchasing', NULL, NULL),
(5, 'Human Resource Management', '123456', 103);

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
(1, 'Trainee Engineer'),
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
  `employee_email` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `status_id` (`status_id`),
  KEY `payment_id` (`payment_id`),
  KEY `employee_department` (`employee_department`),
  KEY `employee_designation` (`employee_designation`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `payment_id`, `status_id`, `employee_name`, `employee_department`, `employee_designation`, `employee_phone`, `employee_address`, `employee_salary`, `emp_password`, `employee_email`) VALUES
(102, 1, 1, 'Manav Goyal', 1, 1, '+91-84493924', 'sfb', 1, 'asd123', NULL),
(103, 1, 1, 'Sahil Kumar', 5, 2, '9467017334', '357-A New Shalimar Bagh', 1, 'asd123', 'salarx.gm@gmail.com'),
(104, 2, 2, 'Mela Baccha', 2, 5, '78787878787', '357-A New Shalimar Bagh', 0, 'asd123', '2017222@iiitdmj.ac.in');

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
(3, 103, '10000', '500', '50');

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
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`employee_id`);

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
