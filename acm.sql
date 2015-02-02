-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2015 at 12:29 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `pass`) VALUES
('admin', 'Illinois_Wesleyan_ACM');

-- --------------------------------------------------------

--
-- Table structure for table `join`
--

CREATE TABLE IF NOT EXISTS `join` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `join`
--

INSERT INTO `join` (`id`, `name`, `email`, `password`) VALUES
(1, 'jisan', 'jisanpolara@gmail.com', '123456'),
(2, 'jisan', 't.u.chaudhari@gmail.com', '123'),
(3, 'tejas', 't.u.chaudhari@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `link` varchar(300) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`no`, `id`, `link`) VALUES
(8, 13, 'pictures/1bc5b77f3e50b7fbe12c792ee438da451418306066.jpg'),
(9, 14, 'pictures/070cf6787aa56fbdaa1b2fd98708c34c1418306066.jpg'),
(10, 15, 'pictures/b44a59383b3123a747d139bd0e71d2df1418306066.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projectname`
--

CREATE TABLE IF NOT EXISTS `projectname` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `des` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `projectname`
--

INSERT INTO `projectname` (`id`, `name`, `des`) VALUES
(13, 'Test Project', 'This is a Test Project'),
(14, 'Test Project 2', 'This is another Test Project'),
(15, 'Project 3', 'This is another Test Project');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `worker`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
