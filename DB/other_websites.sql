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
-- Table structure for table `other_websites`
--

CREATE TABLE IF NOT EXISTS `other_websites` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` text,
  `des` text,
  PRIMARY KEY (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_websites`
--

INSERT INTO `other_websites` (`ID`, `title`, `link`, `des`) VALUES
(8, 'Ancient Encyclopedia', 'http://www.ancient.eu.com/india/', 'India is a country in South Asia whose name comes from the Indus River. The name ''Bharata'' is used as a designation for the country in their constitution referencing the ancient mythological emperor, Bharata, whose story is told, in part, in the Indian epic Mahabharata.'),
(10, 'General Knowledge Of Indian History', 'http://www.gktoday.in/ancient-history-of-india-for-upsc-examinations/', 'Ancient History of Indian for UPSC Examinations.\r\nIndia''s Daily E-magazine of Current Affairs & GK For All Exams.\r\nCurrent-Affairs, Current-Affairs Quiz, G.K for Banking Quizes, IAS Quiz, PCS Quiz, Reference Material for Civil Services'),
(3, 'History Of India', 'http://www.historyindia.org/', 'India is the cradle of human race, the birthplace of human speech, the mother of history, the grandmother of legend, and the great grandmother of tradition. Our most valuable and most astrictive materials in the history of man are treasured up in India only! '),
(1, 'History Tuition', 'http://www.historytuition.com/ancient_india/index.html', 'India can boast of a glorious past and the study of the history of Ancient India is a subject in itself. India has a civilisation as ancient as most ancient civilizations across the world. We have added new articles on all the following Ancient India topics. '),
(6, 'Incredible India', 'http://www.incredibleindia.org/travel-discover-india/discover-india/history', 'India wrested its independence from Britain in 1947 after a long freedom struggle led largely by the Indian National Congress and its visionary leaders, especially, Mahatma Gandhi. From 1920, the freedom movement leaders began highly popular mass campaign against the British Raj using largely peaceful methods'),
(9, 'Internet Indian History Sourcebook', 'http://www.fordham.edu/Halsall/india/indiasbook.asp', 'This page is a subset of texts derived from the three major online Sourcebooks listed below, along with added texts and web site indicators. For more contextual information, for instance about Western imperialism, the Islamic world, or the history of a given period, check out these web sites.'),
(5, 'Lonely Planet', 'http://www.lonelyplanet.com/india/history', 'India’s story is one of the grand epics of world history. Throughout thousands of years of great civilisations, invasions, the birth of religions and countless cataclysms, India has time and again proved itself to be, in the words of its first prime minister, Jawaharlal Nehru, ‘a bundle of contradictions held together by strong but invisible threads’.'),
(2, 'Maps Of India', 'http://www.mapsofindia.com/history/', 'The history of this astonishing sub continent dates back to almost 75000 years ago with the evidence of human activity of Homo sapiens. The Indus Valley Civilization which thrived in the northwestern part of the Indian subcontinent from 3300- 1300 BC was the first major civilization in India.'),
(7, 'Medieval History Of India', 'http://www.bharatadesam.com/history/medieval.php', 'For the moment, most of action shifts to the southern peninsula.\r\nThe most important dynasty to rise out of the southern India was that of the Cholas. Unlike most of the other dynasties (the Chalukyas, the Pallavas, the Pandyas or the Rashtrakutas), their origins are not traced from outside, but very much from the south itself.'),
(0, 'Modern History Of India', 'http://www.culturalindia.net/indian-history/modern-history/', 'During the late 16th and the 17th Centuries, the European trading companies in India competed with each other ferociously. By the last quarter of the 18th Century the English had outdone all others and established themselves as the dominant power in India. The British administered India for a period of about two centuries.'),
(4, 'The Story Of India', 'http://www.pbs.org/thestoryofindia/', 'The first episode looks at identity and the roots of India''s famous "unity in diversity." Wood takes us to places where dramatic new archaeological discoveries are changing our view of the migrations that have helped make up Indian identity.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
