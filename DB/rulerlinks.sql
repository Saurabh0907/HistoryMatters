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
-- Table structure for table `rulerlinks`
--

CREATE TABLE IF NOT EXISTS `rulerlinks` (
  `ruler` text NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rulerlinks`
--

INSERT INTO `rulerlinks` (`ruler`, `des`) VALUES
('Mahmud of Ghazni', 'www.sscnet.ucla.edu/southasia/History/Mughals/mahmud_mughals.html'),
('Muhammad of Ghor', 'www.jame-ghor.com/english/ghor.../0005_10122012_ghor_info.htm?'),
('Sri Gupta', 'en.wikipedia.org/wiki/Maharaja_?ri_Gupta'),
('Chandragupta ', 'en.wikipedia.org/wiki/Chandragupta_Maurya?'),
('Samudragupta', 'en.wikipedia.org/wiki/Samudragupta?'),
('kumaragupta', 'en.wikipedia.org/wiki/Kumaragupta_I?'),
('Jalal ud din Firuz Khilji', 'en.wikipedia.org/wiki/Jalal_ud_din_Firuz_Khilji'),
('Alauddin Khilji', 'en.wikipedia.org/wiki/Alauddin_Khilji?'),
('Qutb ud din Mubarak Shah', 'en.wikipedia.org/wiki/Qutb_ud_din_Mubarak_Shah'),
('Bahlol Lodi', 'en.wikipedia.org/wiki/Bahlul_Khan_Lodi'),
('Sikander Lodi', 'en.wikipedia.org/wiki/Sikandar_Lodi?'),
('Ibrahim Lodi', 'en.wikipedia.org/wiki/Ibrahim_Lodi?'),
('Chandragupta Maurya', 'en.wikipedia.org/wiki/Chandragupta_Maurya'),
('Bindusara', 'en.wikipedia.org/wiki/Bindusara?'),
('Ashoka the Great', 'en.wikipedia.org/wiki/Ashoka?'),
('dasaratha', 'en.wikipedia.org/wiki/Dasaratha_Maurya?'),
('Babur', 'en.wikipedia.org/wiki/Babur'),
('Humayun', 'en.wikipedia.org/wiki/Humayun'),
('Akbar', 'en.wikipedia.org/wiki/Akbar?'),
('Jahangir', 'en.wikipedia.org/wiki/Jahangir?'),
('Shah Jahan', 'en.wikipedia.org/wiki/Shah_Jahan?'),
('Aurangzeb', 'en.wikipedia.org/wiki/Aurangzeb?'),
('Qutubuddin Aibak', 'en.wikipedia.org/wiki/Qutb-ud-din_Aibak'),
('Aram Shah', 'en.wikipedia.org/wiki/Aram_Shah'),
('Iltutmish', 'en.wikipedia.org/wiki/Iltutmish'),
('Razia Sultana', 'en.wikipedia.org/wiki/Razia_Sultana?'),
('Nasir ud din Mahmud', 'en.wikipedia.org/wiki/Nasir_ud_din_Mahmud?'),
('Sher Shah Suri', 'en.wikipedia.org/wiki/Sher_Shah_Suri'),
('Ibrahim Shah Suri', 'en.wikipedia.org/wiki/Ibrahim_Shah_Suri'),
('Sikandar Shah Suri', 'en.wikipedia.org/wiki/Sikandar_Shah_Suri?'),
('Islam Shah Suri', 'en.wikipedia.org/wiki/Islam_Shah_Suri'),
('Adil Shah Suri', 'en.wikipedia.org/wiki/Adil_Shah_Suri?'),
('Shahji Bhonsle', 'en.wikipedia.org/wiki/Shahaji?'),
('Shivaji', 'en.wikipedia.org/wiki/Shivaji?'),
('Balaji Viswanath', 'en.wikipedia.org/wiki/Balaji_Vishwanath'),
('Baji Rao\r\n', 'en.wikipedia.org/wiki/Baji_Rao_I?'),
('Balaji Baji Rao', 'en.wikipedia.org/wiki/Baji_Rao_I?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
