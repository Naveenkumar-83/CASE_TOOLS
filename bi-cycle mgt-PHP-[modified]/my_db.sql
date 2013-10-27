-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2013 at 09:56 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `pass`) VALUES
('admin', 'admin123'),
('rent', 'rent123'),
('security', 'security123');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE IF NOT EXISTS `lost` (
  `id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`id`) VALUES
(1),
(2),
(3),
(5),
(7);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `reg_no` int(11) NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  PRIMARY KEY (`reg_no`,`roll_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_no`, `roll_no`, `name`, `model`, `date`, `course`, `department`, `address`, `contact_no`) VALUES
(1, '205112083', 'Naveen Kumar', 'Hercules', '2013-10-20', 'MCA', 'CA', 'Aquamarine-A', '8122685602'),
(2, '205112032', 'Anoop', 'Hercules110', '2013-10-21', 'MCA', 'CA', 'Auamarine-a', '8122684061'),
(4, '205112086', 'Amit', 'Atlas', '2013-10-20', 'MCA', 'CA', 'aqua-A', '8122684061'),
(5, '205112058', 'prashant nag', 'photon+', '2013-10-20', 'MCA', 'CA', 'Aquamarine-A', '8015217468'),
(6, '205112073', 'deepak', 'thriller', '2013-10-20', 'MCA', 'CA', 'Aquamarine-A', '8122684061'),
(7, '2143124', 'naveehfdkjd', 'skadh', '2013-10-20', 'MCA', 'CA', 'Aquamarine-A', '8122684061');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
