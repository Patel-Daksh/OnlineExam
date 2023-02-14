-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 05:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(100) NOT NULL,
  `adminPass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(1, 'adani', 'aiie@123'),
(2, 'local', 'local');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT 0,
  `ans` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(98, 2, 0, '987'),
(97, 2, 1, '576'),
(96, 2, 0, '777'),
(95, 1, 0, 'teja'),
(94, 1, 0, 'markup1'),
(93, 1, 0, 'hyper'),
(99, 2, 0, '456'),
(92, 1, 1, 'hyper text markup language'),
(100, 3, 0, '20'),
(101, 3, 0, '26'),
(102, 3, 1, '23'),
(103, 3, 0, '70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans_fill`
--

CREATE TABLE `tbl_ans_fill` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans_tf`
--

CREATE TABLE `tbl_ans_tf` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT 0,
  `ans` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ans_tf`
--

INSERT INTO `tbl_ans_tf` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(76, 1, 0, 'True'),
(75, 1, 1, 'False'),
(89, 2, 0, 'True'),
(90, 2, 1, 'False'),
(91, 3, 1, 'True'),
(92, 3, 0, 'False');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE `tbl_ques` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`id`, `quesNo`, `ques`) VALUES
(27, 1, 'what is full form of html ?'),
(28, 2, 'what is average megapixel of eye?'),
(29, 3, 'What is the passing marks in gtu exam?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques_fill`
--

CREATE TABLE `tbl_ques_fill` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `ques` text NOT NULL,
  `CorrectAns` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ques_fill`
--

INSERT INTO `tbl_ques_fill` (`id`, `quesNo`, `ques`, `CorrectAns`) VALUES
(5, 1, '_________is important,quantity is not.', 'Quality'),
(6, 2, '_____ is best cricket captain. ', 'Dhoni');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques_tf`
--

CREATE TABLE `tbl_ques_tf` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ques_tf`
--

INSERT INTO `tbl_ques_tf` (`id`, `quesNo`, `ques`) VALUES
(22, 1, 'Our group is  really hardworking'),
(31, 2, 'Theory knowledge is more important than practical'),
(32, 3, 'Adani is one of the best engineering college');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rollno` varchar(32) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `name`, `userName`, `password`, `rollno`, `status`) VALUES
(31, 'Mitesh', 'macmitek', '64ae224c53dd1a812279dd73f80d1eac', '171310132017', 0),
(32, 'Malav', 'MalavPatel7', '025f9d0e50e0e2a9da2e36a00c921340', '171310131033', 0),
(33, 'Daksh', 'DK', '202cb962ac59075b964b07152d234b70', '171310132025', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ans_fill`
--
ALTER TABLE `tbl_ans_fill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ans_tf`
--
ALTER TABLE `tbl_ans_tf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques_fill`
--
ALTER TABLE `tbl_ques_fill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques_tf`
--
ALTER TABLE `tbl_ques_tf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tbl_ans_fill`
--
ALTER TABLE `tbl_ans_fill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_ans_tf`
--
ALTER TABLE `tbl_ans_tf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_ques_fill`
--
ALTER TABLE `tbl_ques_fill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_ques_tf`
--
ALTER TABLE `tbl_ques_tf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
