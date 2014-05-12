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
-- Table structure for table `mapsofindia`
--

CREATE TABLE IF NOT EXISTS `mapsofindia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` longblob NOT NULL,
  `title` text NOT NULL,
  `href` text NOT NULL,
  `para` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mapsofindia`
--

INSERT INTO `mapsofindia` (`id`, `date`, `title`, `href`, `para`) VALUES
(3, 0x3c696d67207372633d22687474703a2f2f7777772e6d6170736f66696e6469612e636f6d2f6f6e2d746869732d6461792f64657369676e2f626574612f696d616765732f646174652e706e67223e204e6f76656d62657220313720, '17th November 1928: Lala Lajpat Rai, Indian nationalist, passed away', 'http://www.mapsofindia.com/on-this-day/17th-november-1928-lala-lajpat-rai-indian-nationalist-passed-away', '<p>Lala Lajpat Rai, renowned Indian nationalist and writer, who was born in Dhudike, Punjab, on January 28, 1865, died on November 17, 1928, after suffering grievous injuries during a lathi-charge carried out by the police.</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
