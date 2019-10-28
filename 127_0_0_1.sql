-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 28, 2019 at 04:07 PM
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
-- Database: `hotel`
--
CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hotel`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `email` varchar(60) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `intime` date NOT NULL,
  `outime` date NOT NULL,
  `room1` int(2) NOT NULL,
  `room2` int(2) NOT NULL,
  `room3` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`email`, `destination`, `intime`, `outime`, `room1`, `room2`, `room3`) VALUES
('aniketgupta6387@gmail.com', 'goa', '2019-10-13', '2019-10-19', 0, 0, 0),
('aniketgupta6387@gmail.com', 'goa', '2019-10-19', '2019-10-27', 2, 1, 1),
('aayush@gmail.com', 'Pondi', '2019-10-06', '2019-10-08', 1, 2, 2),
('aniketgupta6387@gmail.com', 'Ladakh', '2019-10-12', '2019-10-19', 2, 3, 4),
('sanjay8188gupta@gmail.com', 'ladakh', '2019-10-12', '2019-10-13', 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `email` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL,
  `comment` varchar(120) NOT NULL,
  `rating` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`email`, `title`, `comment`, `rating`) VALUES
('a@gmail.com', 'Simple Polylines', 'I dint know it bro', 8),
('aayush@gmail.com', 'Rooms', 'I did not like the rooms that much', 60),
('aniketgupta6387@gmail.com', 'Info windows', 'this is another comment', 76),
('aniketgupta6387@gmail.com', 'Info windows', 'this is comment', 76),
('aniketgupta6387@gmail.com', 'this is comment  title', 'this is one more comment', 100),
('aniketgupta6387@gmail.com', 'Map Simple', 'this is another comment', 100);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `email`, `pass`) VALUES
('Aniket', 'Gupta', 'aniketgupta6387@gmail.com', 'asd'),
('Deb', 'Chakrabarti', 'deb@gmail.com', 'asdf'),
('shubham', 'singh', 'a@gmail.com', 'asdf'),
('aayush', 'Sahay', 'aayush@gmail.com', 'asdfg'),
('SANJAY', 'GUPTA', 'sanjay8188gupta@gmail.com', 'dfgh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
