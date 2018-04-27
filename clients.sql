-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2018 at 08:52 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clients`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `password`, `email`, `gender`) VALUES
(11, 'rrr', '3333', 'fdf@gsfg', 'male'),
(9, 'hjjh', '6789', 'ggh@gh', 'male'),
(10, 'Arckmad', '4567', 'hhh@hh', 'male'),
(8, 'hjjh', '0909', 'ggh@gh', 'male'),
(12, 'marcus', 'marcus123', 'george@cgfd', 'male'),
(13, 'fgdgh', '1233', 'sa2@as', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `specs` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `img`, `specs`, `price`) VALUES
(28, 'jeep', 'images/car_suv_front_view_grass_119113_8192x5430.jpg', '2018', 40000),
(26, 'dd', 'images/rover.jpg', '2018', 12000),
(23, '21bb', 'images/464057.jpg', '2017', 1900090),
(24, 'ggg', 'images/dinosaur_skeleton_finding_unusual_92190_2560x1600.jpg', '2018', 12000),
(22, 'weww', 'images/123.jpg', '2017', 32000),
(20, 'mark phillp', 'images/123.jpg', '2017', 12000),
(21, 'rangeee', 'images/123.jpg', '2017', 333333),
(19, '21bb', 'images/123.jpg', '2018', 12000),
(18, 'jhon doe', 'images/464001(1).jpg', '2018', 32000),
(17, 'thor2', 'images/464001.jpg', '2018', 32000),
(16, 'thor', 'images/123.jpg', '2018', 24000),
(15, '21bb', 'C://wamp64/www/csc405/carrental/images/123.jpg', '2017', 12000),
(27, 'gjvhj', 'images/anonymous_blood_mask_vector_splashes_97368_2560x1600.jpg', '2017', 12000),
(29, 'jeep', 'images/cars_style_lamborghini_85227_1920x1080.jpg', '2018', 40000),
(30, 'sdas', 'images/lamborghini_cars_style_pair_83261_1920x1080.jpg', '2018', 56777),
(31, 'suv', 'images/auto_suv_white_side_view_119600_1920x1080.jpg', '2016', 20000),
(32, 'side', 'images/auto_suv_white_side_view_119600_6000x4000.jpg', '2019', 3000),
(33, 'won', 'images/cars_robot_mask_shield_92204_2560x1600.jpg', '213', 20000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
