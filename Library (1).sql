-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2015 at 02:45 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'librarian', 'librarian');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `edition` int(11) NOT NULL,
  `copies` int(11) NOT NULL,
  `numbs` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `author`, `edition`, `copies`, `numbs`) VALUES
(13, 'SE', 'balaguru', 7, 5, ''),
(12, 'php', 'Patel', 1, 5, ''),
(11, 'Java', 'James', 2, 4, ''),
(14, 'css', 'bhagyesh', 10, 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book` int(11) NOT NULL,
  `status` varchar(10) NOT NULL COMMENT 'Taken / Available / Outdates',
  `user_id` int(10) NOT NULL,
  `log` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `book`, `status`, `user_id`, `log`) VALUES
(36, 11, 'Taken', 2, 22),
(35, 11, 'Outdated', 0, 0),
(34, 11, 'Taken', 0, 29),
(33, 11, 'Taken', 2, 23),
(37, 12, 'Taken', 0, 31),
(38, 12, 'Taken', 2, 24),
(39, 12, 'Taken', 0, 30),
(40, 12, 'Available', 0, 0),
(41, 12, 'Available', 0, 0),
(42, 13, 'Taken', 2, 25),
(43, 13, 'Taken', 5, 28),
(44, 13, 'Booked', 5, 0),
(45, 13, 'Available', 0, 0),
(46, 13, 'Available', 0, 0),
(47, 14, 'Available', 0, 0),
(48, 14, 'Available', 0, 0),
(49, 14, 'Available', 0, 0),
(50, 14, 'Available', 0, 0),
(51, 14, 'Available', 0, 0),
(52, 14, 'Available', 0, 0),
(53, 14, 'Booked', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `receive` varchar(20) NOT NULL,
  `realease` varchar(20) NOT NULL,
  `book` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `user_id`, `book_id`, `receive`, `realease`, `book`) VALUES
(25, 2, 42, '07:34:43 Dec 31,2014', '', 13),
(24, 2, 38, '07:34:41 Dec 31,2014', '', 12),
(21, 5, 34, '07:06:42 Dec 30,2014', '05:41:02 Jan 02,2015', 11),
(22, 2, 36, '07:26:18 Dec 31,2014', '', 11),
(23, 2, 33, '07:34:37 Dec 31,2014', '', 11),
(20, 5, 37, '03:30:57 Dec 28,2014', '05:41:04 Jan 02,2015', 12),
(19, 5, 36, '03:30:50 Dec 28,2014', '07:24:53 Dec 30,2014', 11),
(26, 5, 43, '05:23:34 Jan 02,2015', '05:41:08 Jan 02,2015', 13),
(27, 5, 39, '05:24:13 Jan 02,2015', '05:41:06 Jan 02,2015', 12),
(28, 5, 43, '05:45:11 Jan 02,2015', '', 13),
(29, 0, 34, '07:13:27 Jan 09,2015', '', 11),
(30, 0, 39, '08:03:53 Jan 09,2015', '', 12),
(31, 0, 37, '03:29:02 Jan 31,2015', '', 12);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `class` varchar(5) NOT NULL COMMENT 'SE/TE/BE/Staff',
  `numb` int(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `name`, `class`, `numb`, `mobile`) VALUES
(1, 'uzrnem', 'uzrnem', 'Bhagyesh Sunil Patel', 'TE', 26, '9604400880'),
(2, 'patel', 'patel', 'Patel Sir', 'Staff', 7, '9090909090'),
(5, 'user', 'pass', 'Jaykant Shikre', 'BE', 99, '3928938983');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `book_id`) VALUES
(10, 2, 11),
(12, 1, 12),
(9, 2, 12),
(8, 2, 13),
(11, 1, 13),
(13, 1, 11),
(16, 5, 11);
