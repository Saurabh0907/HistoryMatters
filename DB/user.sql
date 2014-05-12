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
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` text,
  `forum_notification` enum('0','1') NOT NULL DEFAULT '1',
  `image_u` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `password`, `forum_notification`, `image_u`) VALUES
(1, 'Saurabh Garg', '9582598734', 'gargsaurabh1993@gmail.com', 'ac654ecec26dd9d456a2d8bf63dfb5395dac59bc8f0ef79dd1276ad3d9029947d6e3031fde86cc15653d8b9cb5d3b8c0b5375ae08d32e36d7ce2ff263c46a745', '1', NULL),
(5, 'Abhinav Sareen', '9582741432', 'abhinav.sareen@gmail.com', '8f9915f7e07c2db2c3cc979333fd143ed6588031691e50e347094fbecd65af503e8dcd031365639d397d19677fee859c3c981807e57f9941a47ae69a77beb287', '1', NULL),
(16, 'Shikher Mishra', '9898989898', 'shikher.mishra@yahoo.com', '097c63f32ed19693ea46e09594255829b5fb375f02df5312008da7b5f4d6c9a4ac9d01f43e339c21bf0bf81efaecccba5e05bcfebfefacd18e77f7726b0c33b9', '1', NULL),
(17, 'Ashish Sharma', '9999460902', '', '9b90d862dc48f2726442689b2dfa2cc4d61ce6010b6b419bf43f08ea1cc1913dcb74206f6dc375b0a270c06a312117ccb215bf2f0899f6bb8ad9e6e4843af599', '1', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
