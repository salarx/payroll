-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2019 at 11:38 AM
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

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`type_id`, `type_name`) VALUES
(1, 'PF'),
(2, 'Pension'),
(3, 'Salary');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_salt`, `bank_balance`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '$2y$11$inIkikGsZ.kucjbYtXN5qef4w0CkSfEPHNQ1GXZHhX3qxIwvcC2Ji', 80000),
(2, 'merababy', '05ec7b787a9ec3560b31d701a0b425b86f283983b17da63065284c0bfdca3a84311ca6f14641a693e046d20fe454c92ef3a8edc9e887757399c7347175cdd713', '$2y$11$DEdhgv1NltvvyttHWRWGFu66CW0fe0vi/one2LYDhhY396laZDiS6', 0),
(3, 'kartik.laad', '838ea72b938c20fdf6a7f970d9c22f864ee2621ed4eee7aae66c470b9fb2311f96cce01088ae86267422b776ed1e2bb67904837e703433a18fb21abca52e264e', '$2y$11$ke9A4RB.JInUanMjqumYa.8vYG/QHF2MEUyjAQT7yNZpPCr.gsH6a', -95500),
(4, 'aman', '813db7fa66134df5295d98c5abbf90ff7206d68f3372a25138ee9c2bbb4c96d22f978ffd3da550f8dc38a15e106bec5266f91bc8447241b79e4ae0ce9fb8ff88', '$2y$11$MKD51S2y/AiQ.MNSIqq7Fu27JjnHmRPZb9SvxwnF4BYETTasUH4fK', 100000000),
(5, 'kartik.laad', '740879064bb7029fb66d7f22533ebf9b73f66b8c5a86e90088b390287ee5e5daa153242eaf5cccf6b9de38eb9f817dfc55321bef8c99134e34f1d3b5485c6faf', '$2y$11$ocdgoDLNKu4v9BRzh1dZ2.R8XfTSlJ9Y/0N4fT0DcJFTACGzuvJyS', 500000),
(6, 'kartik.laad', '838ea72b938c20fdf6a7f970d9c22f864ee2621ed4eee7aae66c470b9fb2311f96cce01088ae86267422b776ed1e2bb67904837e703433a18fb21abca52e264e', '$2y$11$sZDzifXtmbNbD2iJJWdxZ..Ihvvlbxgs4GBifaih9yIM7p3HYaM66', 500000),
(7, 'kartik.laad', '740879064bb7029fb66d7f22533ebf9b73f66b8c5a86e90088b390287ee5e5daa153242eaf5cccf6b9de38eb9f817dfc55321bef8c99134e34f1d3b5485c6faf', '$2y$11$3zJohfA6zszc9hYcRBrSl.I.vr44F1SSrGOlJ8MHK35fbkR2oGv9y', 500000);

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
) ENGINE=MyISAM AUTO_INCREMENT=1021 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_department_transactions`
--

INSERT INTO `admin_department_transactions` (`from_admin`, `to_dep`, `amount`, `transaction_id`) VALUES
(1, 1, 5000, 1012),
(1, 3, 5000, 1013),
(1, 1, 10000, 1014),
(3, 3, 500, 1015),
(3, 3, 600000, 1016),
(3, 3, -5000, 1017),
(2, 2, 5000, 1018),
(2, 2, 2000, 1019),
(2, 2, 2000, 1020);

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
(1, 'Production', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$PNZM1BgRbNRHQuOhloeYku49Bl1auOuY47y2IOs2sv9UFGUyjgRMC', 107, 15000),
(2, 'Research and Development', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$EgX1KfMdkC574CvzhXIyi.K7tyUWQnvypYTsCpxSOEDLqjGtrdmX2', NULL, -3000),
(3, 'Marketing', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '$2y$11$VznRZIF.wL4wPeuVGQvRA.U3O2XbU3/IAJgDb/N.sud3Mjx5NYpJW', NULL, 606500),
(4, 'Purchasing', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '$2y$11$Zl5MwEjsyEjHGFNSn2vCEunoqWcD8k4YAojRzmrMAk.POtSZT85z.', NULL, 0),
(5, 'Human Resource', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$UNkGVKILmNjXkacgM/L3be7uEtfK59p1Y7r1rWKRgXutk.d0E.6xy', 109, -2000);

-- --------------------------------------------------------

--
-- Table structure for table `department_employee_transactions`
--

DROP TABLE IF EXISTS `department_employee_transactions`;
CREATE TABLE IF NOT EXISTS `department_employee_transactions` (
  `from_dep` int(11) NOT NULL,
  `to_emp` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `account_type` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`transaction_id`),
  KEY `account_type` (`account_type`),
  KEY `from_dep` (`from_dep`),
  KEY `to_emp` (`to_emp`)
) ENGINE=MyISAM AUTO_INCREMENT=5008 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_employee_transactions`
--

INSERT INTO `department_employee_transactions` (`from_dep`, `to_emp`, `amount`, `account_type`, `transaction_id`) VALUES
(3, 104, 2000, 2, 5004),
(2, 103, 1000, 1, 5005),
(2, 103, 2000, 3, 5006),
(5, 109, 2000, 1, 5007);

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
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `payment_id`, `status_id`, `employee_name`, `employee_department`, `employee_designation`, `employee_phone`, `employee_address`, `emp_password`, `emp_salt`, `employee_email`, `balance_1`, `balance_2`, `balance_3`) VALUES
(107, 1, 1, 'Palak', 1, 1, '9897453456', 'PDPM', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$/blQxXumRInrFxYPiDZf6.7o.29ETJi23wzK/ScrN9R.WDusXf0VW', 'PALAK@gmail.com', 0, 0, 0),
(109, 2, 3, 'Aman Singhal', 5, 8, '9068868054', 'A201', '85908fadb11ce2e59035db5e8eb90d930ad07f0ff86013c6799c862d9638b2ec3434066a19a331b718c7b19927d3f4f71e12a358131864f42ac51936435e474f', '$2y$11$.uLtA1bU/KNCgNA808bwzeXwL5JRDHxisOTX5bO5BHS0pH3fHO3d6', 'singhal.aman9@gmail.com', 2000, 0, 0);

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
