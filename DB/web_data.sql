-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2014 at 06:51 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `historymatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_data`
--

CREATE TABLE IF NOT EXISTS `web_data` (
  `m_id` int(11) DEFAULT NULL,
  `name` text,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_data`
--

INSERT INTO `web_data` (`m_id`, `name`, `id`) VALUES
(1, 'ANCIENT HISTORY INDIAN HISTORY', 23),
(2, 'INDIAN', 23),
(3, 'HISTORY', 23),
(4, 'Login', 23),
(5, 'Profile', 23),
(6, 'Logout', 23),
(7, 'Home', 23),
(8, 'Today In History', 23),
(9, 'Gallery', 10),
(10, 'Images', 11),
(11, 'Videos', 11),
(12, 'Resources', 11),
(13, 'Papers', 11),
(14, 'Other Websites', 11),
(15, 'Login', 11),
(16, 'Register', 11),
(17, 'Discussions', 11),
(18, 'Stay in Touch', 23),
(19, 'To get the information &amp; stuffs going within our website', 23),
(20, 'OR FOLLOW US', 16),
(21, 'ASHISH SHARMA', 17),
(22, 'SAURABH GARG', 18),
(23, 'SHIKHER MISHRA', 19),
(24, 'Share on Facebook', 20),
(NULL, 'Time Line', NULL),
(NULL, 'Search Web', NULL),
(25, 'Time Line', 20),
(26, 'Search Web', 20),
(30, 'Books', 20),
(31, 'Profile', 20),
(32, 'Edit Details', 20),
(33, 'History TV18', 20),
(34, 'Contact US', 20),
(35, 'Today in History', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
