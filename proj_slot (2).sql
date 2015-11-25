-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2015 at 04:41 PM
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
  `id` varchar(20) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `duration` varchar(6) NOT NULL,
  `init_name` varchar(20) NOT NULL,
  `init_id` varchar(10) DEFAULT NULL,
  `purpose` varchar(100) NOT NULL,
  `approve` varchar(10) NOT NULL,
  PRIMARY KEY (`time`,`date`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proj_slot`
--

INSERT INTO `proj_slot` (`id`, `time`, `date`, `duration`, `init_name`, `init_id`, `purpose`, `approve`) VALUES
('13-11-201511:30 AM', '11:30 AM', '13-11-2015', '30 Min', 'jgfyfuyj', '24324234', 'AAASAAAA ', 'pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
