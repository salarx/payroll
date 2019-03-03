-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2019 at 11:28 AM
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
  `basic_salary` int(11) DEFAULT NULL,
  `employee_msme` int(4) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5032 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `employee_name`, `employee_phone`, `emp_password`, `emp_salt`, `employee_email`, `balance_1`, `balance_2`, `balance_3`, `basic_salary`, `employee_msme`) VALUES
(5002, 'Manav Goyal', '8449392446', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$MvPatlvdEKkxbPxp5IW/TOtKnK0u0XGXTCzb0LOxkpIfzNDva5rZ.', '2017138@iiitdmj.ac.in', 313, 167, 114, 2000, 1),
(5003, 'Mohan Pyaare', '1212121212', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$dck0p4n1X1F6uElvRkaFQepia9c1KD1b.adaHcPvLPSZje1NlQJii', 'abc@xyz.com', 0, 0, 0, 0, NULL),
(5004, 'Rohan Bin', '1231245', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$BIHMkHfyDgzLVKMlR30LR.jF2CSbTt70HQXLLTquwn7AG9w6K5GT.', 'xyz@gmail.com', 0, 0, 0, 500, 4),
(5006, 'Sahil Kumar', '9694445402', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$GpztmAIVTCg8XR4C1ZNz0./lYRpdaRVsgOEwBp9it9dtJSrO/9Ble', '2017138@iiitdmj.ac.in', 2350, 1250, 860, 3000, NULL),
(5007, 'Kartik', '9897453456', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$Hvj7/3c/kaODc5ZFoRSoIONDcBNtl7t7khLEXPITtQ8BUvh7uxg7y', 'kdj72722@zwoho.com', 2508, 1332, 916, 4000, NULL),
(5025, 'Kartik', '9694445402', '97d66b9851dd8be0ba7237567cdb5cb9abcc4134f8f4c64e6233698ec35d28de5698e62c9a388730a2b507f0f2eaeee925fea5026fb0177949c714b729214003', '$2y$11$tLa5W4Fmwln43l7dkGHr0eeqz7zQTfxAZOVtDkVJZHg/3lQtrh6MK', 'manavgoyal53@gmail.com', 627, 333, 229, 4000, 7),
(5028, 'palak', '9891168789', '8aa781ba2088f6b192c1e4a217903eb74a3c3f65f95baff49b453853e8c03b3a6abc42bb497bd6997908dc384e7ff647211df19fc49445fae8def1792a4b1bde', '$2y$11$w/wRG9nSwsrhTHlN3m1w6OwzRMqbXL0RIXnsIUUfjfGD0dKBb8hN6', 'palak@gmail.com', 1410, 750, 514, 4500, NULL),
(5029, 'Manav', '9999999999', '8aa781ba2088f6b192c1e4a217903eb74a3c3f65f95baff49b453853e8c03b3a6abc42bb497bd6997908dc384e7ff647211df19fc49445fae8def1792a4b1bde', '$2y$11$3z.3fc.XI5Mf.wLDVtHIx.551.a90e8LtmYyRuYe8fkPs95zXrtAW', 'manav@rediff.com', 1880, 1000, 686, 6000, 8),
(5030, 'Aman Singhal', '9068868054', '8aa781ba2088f6b192c1e4a217903eb74a3c3f65f95baff49b453853e8c03b3a6abc42bb497bd6997908dc384e7ff647211df19fc49445fae8def1792a4b1bde', '$2y$11$v4L/sjgAWEaIvisNi6WjMOLHcZD0sVUh7yF5mCSv.NGNur2OZ0z76', 'singhal.aman9@gmail.com', 0, 0, 0, 5000, 9),
(5031, 'Harshit Garg', '9999888888', '8aa781ba2088f6b192c1e4a217903eb74a3c3f65f95baff49b453853e8c03b3a6abc42bb497bd6997908dc384e7ff647211df19fc49445fae8def1792a4b1bde', '$2y$11$LrjjSEf5HPm6qu3/dEHS4OssTIohpbfBOJJ88Vxs9KwvbecTuCnZy', 'harshit@gmail.com', 0, 0, 0, 6500, 9);

-- --------------------------------------------------------

--
-- Table structure for table `msme`
--

DROP TABLE IF EXISTS `msme`;
CREATE TABLE IF NOT EXISTS `msme` (
  `msme_id` int(11) NOT NULL AUTO_INCREMENT,
  `msme_name` text NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `msme_salt` varchar(60) NOT NULL,
  `transaction_pass` varchar(128) NOT NULL,
  `transaction_salt` varchar(60) NOT NULL,
  PRIMARY KEY (`msme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msme`
--

INSERT INTO `msme` (`msme_id`, `msme_name`, `password`, `msme_salt`, `transaction_pass`, `transaction_salt`) VALUES
(1, 'MSME1', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$PNZM1BgRbNRHQuOhloeYku49Bl1auOuY47y2IOs2sv9UFGUyjgRMC', '', ''),
(2, 'MSME2', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$EgX1KfMdkC574CvzhXIyi.K7tyUWQnvypYTsCpxSOEDLqjGtrdmX2', '', ''),
(3, 'MSME3', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '$2y$11$VznRZIF.wL4wPeuVGQvRA.U3O2XbU3/IAJgDb/N.sud3Mjx5NYpJW', '', ''),
(4, 'MSME4', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '$2y$11$Zl5MwEjsyEjHGFNSn2vCEunoqWcD8k4YAojRzmrMAk.POtSZT85z.', '', ''),
(5, 'MSME5', '81fbf929a6196fae3564d34457b0f2f74345786f9fc3a762039f57e8d47f5f8a612e61a96f33ee165414de36e7ab0d2615667a7636ae5d598b5afb25ce87c0b4', '$2y$11$UNkGVKILmNjXkacgM/L3be7uEtfK59p1Y7r1rWKRgXutk.d0E.6xy', '', ''),
(6, 'MSME6', '716d1e95f0a03968054b3cb3043503697db4bc705ee860b4bbbdb9620ff090a875a45766f65e6a4019304e1772e2bf518ed1f741b182da1eeefe0d8839a46a30', '$2y$11$jtZTbB68VkeLVeMDXap1neBd.P/f1tY4skrOR1a.KQ0WV/6hF4uYi', '716d1e95f0a03968054b3cb3043503697db4bc705ee860b4bbbdb9620ff090a875a45766f65e6a4019304e1772e2bf518ed1f741b182da1eeefe0d8839a46a30', '$2y$11$P79Uzt7uzCfqseAAfIfBXuDyQBuOsT0K1QyRODIxlt7ZoaLBGlCwa'),
(7, 'msme10000', '9b9ae8e9114ebc414c33ecec8f3111e38049bf6e6dca6bc69b3fc72a120c33d1d5116303050eb5d5308d78626550fc10f8078ac87a4047a0ccfa29c95c655f7b', '$2y$11$uCGQV4R9p9IBG5znkb0bH.EDEoX9mbQTKI2ljBQd1OrRAX0JKZ1i.', '9b9ae8e9114ebc414c33ecec8f3111e38049bf6e6dca6bc69b3fc72a120c33d1d5116303050eb5d5308d78626550fc10f8078ac87a4047a0ccfa29c95c655f7b', '$2y$11$elH4vm9KKG5Xh.rqWKmBaOEI3hz/4VNk9vNmg961HcrDyfd.AmvIq'),
(8, 'MSME001', '8aa781ba2088f6b192c1e4a217903eb74a3c3f65f95baff49b453853e8c03b3a6abc42bb497bd6997908dc384e7ff647211df19fc49445fae8def1792a4b1bde', '$2y$11$FEbjzH4JEt16v40AkpoMEua22SPYmvZjgwsPFmS86W0UnMjE7IO3.', '2161032a0d3f607b2f30447e0d8a22259677f9b6aa72051bbb2123ba340d71a5f628389d49647e5bc118c1736a65ab8ab9bcd780d1bff91e3102eb6c76a35b52', '$2y$11$jecoOlAXyvQ8BgMkBTgqyuIvAb2giGtqq.dogbbhhgZs90uAv7sMG'),
(9, 'MSME002`', '8aa781ba2088f6b192c1e4a217903eb74a3c3f65f95baff49b453853e8c03b3a6abc42bb497bd6997908dc384e7ff647211df19fc49445fae8def1792a4b1bde', '$2y$11$z951OBFgztTtLTJDuYHx7ObH1QI57DwDuVhtfYEeewT70vFyLJcZC', '9101b9e07a0adcab0d1909100e7e61dcd1bbee97d7e0a59a444fd5e108f623fba71fe8d3ff61688e3f4eeb0c8ea84a290958f1bca4e492d67a8e81fe680fdfb3', '$2y$11$V5qWjBdOjGjNve61t/TAd.kaK9X4vL0F/aZTEzxCa35kn.4/VWlHG');

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
) ENGINE=MyISAM AUTO_INCREMENT=5019 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msme_emp_transactions`
--

INSERT INTO `msme_emp_transactions` (`from_msme`, `amount`, `transaction_id`, `date`) VALUES
(1, 0, 5008, '2019-03-03 03:54:53'),
(1, 0, 5009, '2019-03-03 03:56:01'),
(1, 0, 5010, '2019-03-03 04:02:09'),
(5, 892, 5011, '2019-03-03 04:47:56'),
(5, 2080, 5012, '2019-03-03 05:34:56'),
(5, 3269, 5013, '2019-03-03 08:45:05'),
(5, 3269, 5014, '2019-03-03 08:45:33'),
(5, 4755, 5015, '2019-03-03 08:48:15'),
(7, 1189, 5016, '2019-03-03 10:41:54'),
(8, 3121, 5017, '2019-03-03 10:54:10'),
(8, 3121, 5018, '2019-03-03 10:55:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
