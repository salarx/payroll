-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2019 at 07:12 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_salt`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '$2y$11$inIkikGsZ.kucjbYtXN5qef4w0CkSfEPHNQ1GXZHhX3qxIwvcC2Ji');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `type_id` int(1) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`type_id`, `type_name`) VALUES
(1, 'PF'),
(2, 'Pension'),
(3, 'Salary');

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
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `msme`
--

DROP TABLE IF EXISTS `msme`;
CREATE TABLE IF NOT EXISTS `msme` (
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
-- Dumping data for table `msme`
--

INSERT INTO `msme` (`dep_id`, `dep_name`, `password`, `dep_salt`, `emp_id`, `bank_balance`) VALUES
(1, 'Production', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$PNZM1BgRbNRHQuOhloeYku49Bl1auOuY47y2IOs2sv9UFGUyjgRMC', NULL, 1000),
(2, 'Research and Development', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$EgX1KfMdkC574CvzhXIyi.K7tyUWQnvypYTsCpxSOEDLqjGtrdmX2', NULL, 0),
(3, 'Marketing', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '$2y$11$VznRZIF.wL4wPeuVGQvRA.U3O2XbU3/IAJgDb/N.sud3Mjx5NYpJW', NULL, 0),
(4, 'Purchasing', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '$2y$11$Zl5MwEjsyEjHGFNSn2vCEunoqWcD8k4YAojRzmrMAk.POtSZT85z.', NULL, 0),
(5, 'Human Resource', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$UNkGVKILmNjXkacgM/L3be7uEtfK59p1Y7r1rWKRgXutk.d0E.6xy', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `msme_emp_transactions`
--

DROP TABLE IF EXISTS `msme_emp_transactions`;
CREATE TABLE IF NOT EXISTS `msme_emp_transactions` (
  `from_dep` int(11) NOT NULL,
  `to_emp` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `account_type` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `account_type` (`account_type`),
  KEY `from_dep` (`from_dep`),
  KEY `to_emp` (`to_emp`)
) ENGINE=MyISAM AUTO_INCREMENT=5008 DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`employee_department`) REFERENCES `msme` (`dep_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
