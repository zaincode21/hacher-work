-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 17, 2022 at 09:36 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_control`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_own` varchar(200) NOT NULL,
  `car_name` varchar(200) NOT NULL,
  `car_plate` varchar(12) NOT NULL,
  `car_serial` varchar(200) NOT NULL,
  `date` timestamp NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_own`, `car_name`, `car_plate`, `car_serial`, `date`) VALUES
(1, 'KAMANZI Eric', 'toyota v8', 'RAD750F', 'RAD123D', '2022-08-16 07:00:00'),
(2, 'KAMANZI Eric', 'BMW', 'RAD750F', 'RAD123D', '2022-08-30 07:00:00'),
(3, 'serge dukuziyaremye', 'toyota v8', 'RAD750F', 'RAF012D', '2022-08-24 07:00:00'),
(4, 'margot', 'benz', 'RAD750F', 'RAH234B', '2022-08-14 21:46:16'),
(5, 'mugabo eric', 'toyota v8', 'RAD750F', 'RAD123D', '2022-08-16 08:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `mgt_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `password` int(12) NOT NULL,
  PRIMARY KEY (`mgt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mgt_id`, `user_name`, `password`) VALUES
(1, 'manager', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `posters`
--

DROP TABLE IF EXISTS `posters`;
CREATE TABLE IF NOT EXISTS `posters` (
  `ap_id` int(11) NOT NULL AUTO_INCREMENT,
  `seriel_number` varchar(200) NOT NULL,
  `lacation` varchar(200) NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
