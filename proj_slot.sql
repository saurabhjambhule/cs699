-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2015 at 03:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `proj_slot`
--

CREATE TABLE IF NOT EXISTS `proj_slot` (
  `time` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `duration` varchar(6) NOT NULL,
  `init_name` varchar(20) NOT NULL,
  `init_id` varchar(10) DEFAULT NULL,
  `purpose` varchar(100) NOT NULL,
  `approve` varchar(10) NOT NULL,
  PRIMARY KEY (`time`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proj_slot`
--

INSERT INTO `proj_slot` (`time`, `date`, `duration`, `init_name`, `init_id`, `purpose`, `approve`) VALUES
('11:30 ', '9-11-2015', '30 Min', 'jgfyfuyj', '24324234', 'AAASAAAA ', 'pending'),
('6:30 A', '18-11-2015', '60 Min', 'asfasf', 'adada', 'jaj ', 'pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
