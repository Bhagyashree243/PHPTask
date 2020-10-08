-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2020 at 09:44 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

DROP TABLE IF EXISTS `emp`;
CREATE TABLE IF NOT EXISTS `emp` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(40) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `u_name`, `phone_no`) VALUES
(1, 'omthakare@gmail.com  ', 8444489988),
(3, 'rohanpatil@gmail.com   ', 8169041234),
(4, 'bhagys@gamil.com', 9898987898),
(2, 'pratikaute@gmail.com', 98989876544),
(7, 'uytef', 9876545678),
(11, 'Bhagyashree@gmail.com', 8989898989),
(12, 'rashmi@gmail.com', 9898789878),
(13, 'rashmi@gmail.com', 9898789878);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `user_name` varchar(11) NOT NULL,
  `phone_no` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_name`, `phone_no`) VALUES
(1, 'OM', 898987878),
(4, 'sdf', 878776767),
(3, 'ass', 987687658),
(2, 'rds', 999987658),
(2, 'rrs', 999997658),
(6, 'rrs', 888888858);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `psw` varchar(25) NOT NULL,
  `role_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `psw`, `role_type`) VALUES
(1, 'Om', 'Thakare', 'omthakare24@gmail.com', '98987654567', 'admin'),
(2, 'Rohan', 'Thakare', 'rohanthakare08@gmail.com', '8898987878', 'admin'),
(3, 'Bhagya', 'Thakare', 'bhagyathakare24@gmail.com', '9890141121', 'manager'),
(4, 'isha', 'patil', 'ishapatil@yahoo.com', '76768890987', 'task manager'),
(5, 'tejaswini', 'pawar', 'tejupawar22@gmail.com', '8787656767', 'client'),
(6, 'mayuri', 'kale', 'mayurikale@gmail.com', '9989898787', 'project manager'),
(7, 'chetan   ', 'subhe ', 'chetansubhe@gmail.com', '9090987878', 'client'),
(8, 'rupali', 'kalankal', 'rupalikale@gmail.com', '8989876767', 'task manager'),
(9, 'sachin', 'bhamare', 'sachinbhamare@yahoo.com', '7878987898', 'client'),
(10, 'sandesh', 'borse', 'sandeshborse@gmail.com', '8888989898', 'project manager'),
(11, 'hgdgjhscj', 'fghj', 'ishapatil@gmail.com', '90909898989', 'client'),
(13, 'dev   ', 'chavan  ', 'devsubhe@gmail.com', '76768890987  ', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
