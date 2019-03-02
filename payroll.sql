-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2019 at 09:53 PM
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
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(30) NOT NULL,
  `employee_phone` varchar(12) NOT NULL,
  `emp_password` varchar(128) DEFAULT NULL,
  `emp_salt` varchar(60) NOT NULL,
  `employee_email` varchar(128) DEFAULT NULL,
  `balance_1` int(11) NOT NULL,
  `balance_2` int(11) NOT NULL,
  `balance_3` int(11) NOT NULL,
  `basic_salary` int(11) NOT NULL,
  `employee_msme` int(4) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5005 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `employee_name`, `employee_phone`, `emp_password`, `emp_salt`, `employee_email`, `balance_1`, `balance_2`, `balance_3`, `basic_salary`, `employee_msme`) VALUES
(5002, 'Manav Goyal', '8449392445', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$MvPatlvdEKkxbPxp5IW/TOtKnK0u0XGXTCzb0LOxkpIfzNDva5rZ.', '2017138@iiitdmj.ac.in', 0, 0, 0, 2000, 1),
(5003, 'Mohan Pyaare', '1212121212', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$dck0p4n1X1F6uElvRkaFQepia9c1KD1b.adaHcPvLPSZje1NlQJii', 'abc@xyz.com', 0, 0, 0, 0, 1),
(5004, 'Rohan Bin', '1231245', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$BIHMkHfyDgzLVKMlR30LR.jF2CSbTt70HQXLLTquwn7AG9w6K5GT.', 'xyz@gmail.com', 0, 0, 0, 500, 4);

-- --------------------------------------------------------

--
-- Table structure for table `msme`
--

DROP TABLE IF EXISTS `msme`;
CREATE TABLE IF NOT EXISTS `msme` (
  `msme_id` int(11) NOT NULL,
  `msme_name` text NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `msme_salt` varchar(60) NOT NULL,
  PRIMARY KEY (`msme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msme`
--

INSERT INTO `msme` (`msme_id`, `msme_name`, `password`, `msme_salt`) VALUES
(1, 'MSME1', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$PNZM1BgRbNRHQuOhloeYku49Bl1auOuY47y2IOs2sv9UFGUyjgRMC'),
(2, 'MSME2', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$EgX1KfMdkC574CvzhXIyi.K7tyUWQnvypYTsCpxSOEDLqjGtrdmX2'),
(3, 'MSME3', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '$2y$11$VznRZIF.wL4wPeuVGQvRA.U3O2XbU3/IAJgDb/N.sud3Mjx5NYpJW'),
(4, 'MSME4', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '$2y$11$Zl5MwEjsyEjHGFNSn2vCEunoqWcD8k4YAojRzmrMAk.POtSZT85z.'),
(5, 'MSME5', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$UNkGVKILmNjXkacgM/L3be7uEtfK59p1Y7r1rWKRgXutk.d0E.6xy');

-- --------------------------------------------------------

--
-- Table structure for table `msme_emp_transactions`
--

DROP TABLE IF EXISTS `msme_emp_transactions`;
CREATE TABLE IF NOT EXISTS `msme_emp_transactions` (
  `from_msme` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `from_dep` (`from_msme`)
) ENGINE=MyISAM AUTO_INCREMENT=5008 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
