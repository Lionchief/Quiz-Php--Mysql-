-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 04:18 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `Id` tinyint(4) NOT NULL,
  `Answer` varchar(170) DEFAULT NULL,
  `Ans_id` tinyint(4) DEFAULT NULL,
  `Alphabet` varchar(4) DEFAULT NULL,
  `Correct` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`Id`, `Answer`, `Ans_id`, `Alphabet`, `Correct`) VALUES
(1, 'after', 1, 'a', 0),
(2, 'in', 1, 'b', 0),
(3, 'at', 1, 'c', 1),
(4, 'before', 1, 'd', 0),
(5, 'until', 2, 'a', 1),
(6, 'between', 2, 'b', 0),
(7, 'about', 2, 'c', 0),
(8, 'over', 2, 'd', 0),
(9, 'over', 3, 'a', 0),
(10, 'in', 3, 'b', 0),
(11, 'at', 3, 'c', 1),
(12, 'by', 3, 'd', 0),
(13, 'in', 4, 'a', 0),
(14, 'on', 4, 'b', 0),
(15, 'at', 4, 'c', 1),
(16, 'by', 4, 'd', 0),
(17, 'at', 5, 'a', 0),
(18, 'on', 5, 'b', 1),
(19, 'in', 5, 'c', 0),
(20, 'behind', 5, 'd', 0),
(21, 'between', 6, 'a', 1),
(22, 'in', 6, 'b', 0),
(23, 'out', 6, 'c', 0),
(24, 'at', 6, 'd', 0),
(25, 'in', 7, 'a', 1),
(26, 'out', 7, 'b', 0),
(27, 'under', 7, 'c', 0),
(28, 'over', 7, 'd', 0),
(29, 'before', 8, 'a', 1),
(30, 'behind', 8, 'b', 0),
(31, 'next', 8, 'c', 0),
(32, 'by', 8, 'd', 0),
(33, 'in', 9, 'a', 0),
(34, 'around', 9, 'b', 1),
(35, 'out', 9, 'c', 0),
(36, 'near', 9, 'd', 0),
(37, 'in', 10, 'a', 0),
(38, 'at', 10, 'b', 0),
(39, 'on', 10, 'c', 1),
(40, 'by', 10, 'd', 0),
(41, 'near', 11, 'a', 0),
(42, 'in', 11, 'b', 0),
(43, 'on', 11, 'c', 0),
(44, 'for', 11, 'd', 1),
(45, 'within', 12, 'a', 0),
(46, 'about', 12, 'b', 1),
(47, 'until', 12, 'c', 0),
(48, 'till', 12, 'd', 0),
(49, 'above', 13, 'a', 0),
(50, 'inside', 13, 'b', 0),
(51, 'through', 13, 'c', 0),
(52, 'over', 13, 'd', 1),
(53, 'behind', 14, 'a', 1),
(54, 'between', 14, 'b', 0),
(55, 'above', 14, 'c', 0),
(56, 'near', 14, 'd', 0),
(57, 'under', 15, 'a', 0),
(58, 'by', 15, 'b', 1),
(59, 'at', 15, 'c', 0),
(60, 'in', 15, 'd', 0),
(61, 'to', 16, 'a', 0),
(62, 'in', 16, 'b', 0),
(63, 'on', 16, 'c', 1),
(64, 'at', 16, 'd', 0),
(65, 'to', 17, 'a', 1),
(66, 'after', 17, 'b', 0),
(67, 'before', 17, 'c', 0),
(68, 'untill', 17, 'd', 0),
(69, 'in', 18, 'a', 0),
(70, 'above', 18, 'b', 0),
(71, 'at', 18, 'c', 0),
(72, 'on', 18, 'd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Id` tinyint(4) NOT NULL,
  `Question` varchar(150) DEFAULT NULL,
  `A_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Id`, `Question`, `A_id`) VALUES
(1, 'I am coming.I will be there _______ 10 minutes', 2),
(2, 'I will be there _______ Thrusday', 5),
(3, 'I don\'t like going out_______night', 11),
(4, 'It\'s difficult to listen if everyone is speaking __________ the same time.', 15),
(5, 'I\'ll be at home ______ Friday morning.', 18),
(6, 'I am sitting ________ my brother and sister.', 21),
(7, 'He got _________ the car and drove off immediately.', 25),
(8, 'I ate lunch _________ I went out.', 29),
(9, 'I usually get to work at ________ 9 o\' clock.', 34),
(10, 'Do you work __________ Wednesdays..?', 39),
(11, 'Tara is looking __________ you.', 44),
(12, 'We arrived at the airport ________ 2 hours before our flight', 46),
(13, 'The plane flew _________ the airport', 52),
(14, 'My father is sitting _________ my brother', 53),
(15, 'I arrived __________ plane', 58),
(16, 'He always____________ time', 63),
(17, 'I will be here from Thrusday ___________ Friday', 65),
(18, 'Your Keys are _______ the table', 72);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` tinyint(4) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Password` varchar(70) DEFAULT NULL,
  `Mobile` varchar(14) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`, `Mobile`, `Gender`, `Country`) VALUES
(1, 'Ganesh Singh Bisht', 'hackgan2@gmail.com', '*#ganesh@123', '8368788356', 'Male', 'India'),
(4, 'Monu Shrivastav', 'mkgrace.277@gmail.com', '12341234', '8851445113', 'Male', 'India'),
(5, 'Chetan Gautam', 'chetangautan58@gmail.com', '12341234', '7678695159', 'Male', 'India'),
(6, 'sheetal', 'sheetalbora67880@gmail.com', 'study@12', '8750437260', 'Female', 'India'),
(7, 'divesh', 'dhammu91827@gmail.com', 'Divesh@123', '9810483053', 'Male', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `Id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
