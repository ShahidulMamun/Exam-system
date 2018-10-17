-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 08:10 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminid` int(11) NOT NULL,
  `adminuser` varchar(50) NOT NULL,
  `adminpass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminid`, `adminuser`, `adminpass`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `quesno` int(11) NOT NULL,
  `rightans` int(11) NOT NULL DEFAULT '0',
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesno`, `rightans`, `ans`) VALUES
(15, 2, 0, '32 bits'),
(16, 2, 0, '128 bytes'),
(17, 2, 0, '64 bits'),
(18, 2, 1, '128 bits'),
(19, 3, 0, 'NAT'),
(20, 3, 1, 'IEEE'),
(21, 3, 0, 'Extended'),
(22, 3, 0, 'Specialized'),
(23, 4, 0, 'tree'),
(24, 4, 0, 'relational'),
(25, 4, 0, 'network'),
(26, 4, 1, 'chain'),
(27, 5, 0, 'hardware failure'),
(28, 5, 1, 'privacy invasion'),
(29, 5, 0, 'fraudulent manipulation of data'),
(30, 5, 0, 'All of the above'),
(31, 6, 1, 'Insert'),
(32, 6, 0, 'Look-up'),
(33, 6, 0, 'Modefy'),
(34, 6, 0, 'All of the above'),
(39, 8, 0, 'Virtual class'),
(40, 8, 0, 'Abstract class'),
(41, 8, 1, 'Singleton class'),
(42, 8, 0, 'Friend class'),
(43, 9, 0, 'Copy constructor'),
(44, 9, 1, 'Friend constructor'),
(45, 9, 0, 'Default constructor'),
(46, 9, 0, 'Parameterized constructor'),
(51, 1, 1, 'Hypertext Preprocessor'),
(52, 1, 0, 'Script'),
(53, 1, 0, 'Markup language'),
(55, 1, 0, 'Database management'),
(68, 7, 0, 'SPARC'),
(69, 7, 0, 'IBM-compatible'),
(70, 7, 0, 'Alpha'),
(71, 7, 1, 'Macintosh'),
(80, 10, 0, '172.16.45.0'),
(81, 10, 1, '172.16.45.12'),
(82, 10, 0, '172.16.45.8'),
(83, 10, 0, '172.16.45.4'),
(84, 11, 0, 'à¦‡à¦¨à¦¸à§à¦²à¦¿à¦¨'),
(85, 11, 1, 'à¦ªà§‡à¦¨à¦¿à¦¸à¦¿à¦²à¦¿à¦¨ '),
(86, 11, 0, 'à¦ªà§‡à¦ªà¦¸à¦¿à¦¨'),
(87, 11, 0, 'à¦‡à¦¥à¦¿à¦²à¦¿à¦¨');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE `tbl_ques` (
  `id` int(11) NOT NULL,
  `quesno` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`id`, `quesno`, `ques`) VALUES
(1, 1, 'What is PHP?'),
(10, 2, 'How long is an IPv6 address?'),
(11, 3, 'What are the two main types of access control lists (ACLs)?'),
(12, 4, 'Which of the following is not a logical data-base structure?'),
(13, 5, 'Data security threats include'),
(14, 6, 'An operation that will increase the length of a list is'),
(15, 7, '	\r\nWhat hardware architectures are not supported by Red Hat?'),
(16, 8, 'Which of the following type of class allows only one object of it to be created?'),
(17, 9, 'Which of the following is not a type of constructor?'),
(24, 10, 'If a host on a network has the address 172.16.45.14/30, what is the subnetwork this host belongs to?'),
(25, 11, 'à¦•à§‹à¦¨à¦Ÿà¦¿ à¦à¦¨à§à¦Ÿà¦¿à¦¬à¦¾à§Ÿà§‹à¦Ÿà¦¿à¦•?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `name`, `username`, `password`, `email`, `status`) VALUES
(26, 'Hasan', 'HasanRaju', '202cb962ac59075b964b07152d234b70', 'raju@gmail.com', 0),
(27, 'Mamun', 'Shahidul', '202cb962ac59075b964b07152d234b70', 'mamunsum51@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
