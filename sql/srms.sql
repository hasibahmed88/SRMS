-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 06:03 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `dp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `bio`, `username`, `pwd`, `dp`) VALUES
(1, 'John Doe', 'PHP Developer', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'user-male-icon.png5e1eb0b323424.jpg5e3c1fb4a8e3a.jpg5e3e75390f1ed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `1st` varchar(50) NOT NULL,
  `2nd` varchar(50) NOT NULL,
  `3rd` varchar(50) NOT NULL,
  `4th` varchar(50) NOT NULL,
  `5th` varchar(50) NOT NULL,
  `6th` varchar(50) NOT NULL,
  `7th` varchar(50) NOT NULL,
  `8th` varchar(50) NOT NULL,
  `final_cgpa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `department`, `session`, `roll`, `1st`, `2nd`, `3rd`, `4th`, `5th`, `6th`, `7th`, `8th`, `final_cgpa`) VALUES
(11, 'Computer', '17-18', 970556, '3.56', '3.25', '3.76', '3.48', '3.85', '3.55', '', '', ''),
(12, 'Computer', '17-18', 970588, '3.45', '3.65', '3.44', '3.86', '3.45', '3.75', '', '', ''),
(13, 'Marine', '18-19', 970147, '3.45', '3.44', '3.65', '', '', '', '', '', ''),
(14, 'RAC', '18-19', 970458, '3.45', '3.45', '3.65', '', '', '', '', '', ''),
(15, 'GDPM', '17-18', 970654, '3.44', '3.26', '3.85', '3.50', '3.10', '3.66', '3.64', '3.74', '3.46'),
(16, 'Mechanical', '17-18', 970358, '3.44', '3.45', '3.85', '2.35', '3.28', '', '', '', ''),
(17, 'GDPM', '17-18', 970550, '3.56', '3.87', '3.65', '3.91', '3.64', '3.22', '3.64', '', ''),
(18, 'Marine', '19-20', 970951, '3.45', '', '', '', '', '', '', '', ''),
(19, 'Mechanical', '18-19', 970369, '3.56', '3.87', '3.76', '', '', '', '', '', ''),
(20, 'Computer', '18-19', 970159, '2.78', '3.87', '3.74', '2.35', '2.65', '', '', '', ''),
(21, 'Mechanical', '18-19', 970559, '3.15', '3.26', '3.85', '3.19', '2.65', '', '', '', ''),
(22, 'Electrical', '18-19', 970589, '3.56', '3.87', '3.85', '', '', '', '', '', ''),
(23, 'Civil', '16-17', 970774, '3.44', '3.29', '3.78', '3.47', '', '', '', '', ''),
(24, 'Computer', '17-18', 970613, '3.11', '3.25', '3.76', '3.47', '3.14', '3.69', '', '', ''),
(25, 'Electrical', '17-18', 971547, '3.56', '3.45', '3.74', '2.35', '3.28', '3.69', '3.78', '', ''),
(26, 'Electrical', '17-18', 971458, '3.15', '3.45', '3.76', '3.50', '3.18', '3.22', '', '', ''),
(27, 'Civil', '17-18', 970115, '3.11', '3.26', '3.65', '3.19', '3.18', '3.55', '', '', ''),
(28, 'Computer', '17-18', 970549, '3.64', '3.29', '3.45', '3.85', '3.77', '3.84', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `st_id` int(50) NOT NULL,
  `roll` int(250) NOT NULL,
  `reg` varchar(250) NOT NULL,
  `department` varchar(255) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `home` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `st_id`, `roll`, `reg`, `department`, `semister`, `session`, `phone`, `email`, `dob`, `blood`, `home`) VALUES
(1, 'Hasib', 'Ahmed', 1720045878, 970556, '0000824285', 'Computer', '6th', '17-18', '01926378541', 'hasibahmed885@gmail.com', '1998-05-04', 'A+', 'Dhaka,Bangladesh'),
(2, 'Jahid', 'Hasan', 1720066654, 970588, '0000824278', 'Computer', '6th', '17-18', '01686327844', 'jahidhasan@gmail.com', '1999-05-04', 'A+', 'Rangpur,Bangladesh'),
(4, 'Imran', 'Miah', 1720066225, 970147, '0000824145', 'Marine', '4th', '16-17', '01945327745', 'imranmiah@gmail.com', '1998-04-05', 'O-', 'Dhaka,Bangladesh'),
(5, 'Hridoy', 'Khan', 1720066116, 970458, '0000824237', 'RAC', '4th', '16-17', '01912328789', 'hridoykhan@gmail.com', '1999-05-06', 'A-', 'Dhaka,Bangladesh'),
(6, 'Mahi', 'Akter', 1720066998, 970654, '0000824233', 'GDPM', '5th', '17-18', '01926328746', 'mahiakter@gmail.com', '2000-04-05', 'B+', 'Dhaka,Bangladesh'),
(7, 'Sajjad', 'Hossain', 1720066875, 970358, '0000824145', 'Mechanical', '5th', '18-19', '01456328785', 'sajjadhossain554@gmail.com', '1997-04-05', 'AB+', 'Chandpur,Dhaka,Bangladesh'),
(8, 'Shakib', 'Miah', 1720066888, 970550, '0000824121', 'GDPM', '7th', '18-19', '01836328478', 'shakibmiah@gmail.com', '1998-05-04', 'O+', 'Rajshahi,Bangladesh'),
(10, 'Rakib', 'Miah', 1720066369, 970951, '0000824987', 'Marine', '1st', '18-19', '01556328963', 'rakibmiah78@gmail.com', '1998-12-31', 'A+', 'Rangpur,Bangladesh'),
(13, 'John', 'Doe', 1720066330, 970369, '0000824236', 'Mechanical', '3rd', '18-19', '01986327745', 'doejohn@gmail.com', '2000-01-15', 'AB-', 'Dhaka,Bangladesh'),
(15, 'Imran', 'Miah', 1720066435, 970159, '0000824784', 'Computer', '5th', '17-18', '01546328148', 'imranmiah@gmail.com', '1998-01-14', 'A+', 'Dhaka,Bangladesh'),
(19, 'Rakib', 'Miah', 1720066124, 970589, '0000824236', 'Electrical', '4th', '16-17', '01756328789', 'hridoykhan@gmail.cm', '2020-01-13', 'AB-', 'Rajshahi,Bangladesh'),
(20, 'Hasan', 'Mahmud', 1720045878, 970774, '0000824211', 'Civil', '6th', '15-16', '01587465878', 'hasanmahmud@gmail.com', '1999-01-07', 'A+', 'Mymensing, Dhaka, Bangladesh'),
(32, 'Amir Hamza', 'Shanto', 1720045878, 970613, '0000824222', 'Computer', '6th', '17-18', '0157698714', 'amirhamzashanto@gmai.com', '1998-05-04', 'B+', 'Dhaka,Bangladesh'),
(33, 'Sajjad', 'Hossain', 1720066149, 971547, '0000457834', 'Electrical', '6th', '17-18', '01574698742', 'sajjadhossain@gmail.com', '1997-05-05', 'AB-', 'Chandpur,Dhaka,Bangladesh'),
(34, 'Mehedi', 'Hasan', 1736425874, 971458, '0000547896', 'Electrical', '6th', '17-18', '01752469874', 'mehedihasan@gmail.com', '1998-02-05', 'A+', 'Mymensing, Dhaka, Bangladesh'),
(35, 'Anik', 'Miah', 176487458, 972365, '0000457854', 'Civil', '6th', '17-18', '0169874578', 'anikmiah23@gmail.com', '1999-02-05', 'B+', 'Rajshahi,Bangladesh'),
(36, 'Nourin', 'Akter', 1730014668, 970549, '0000698745', 'Computer', '6th', '17-18', '01754698745', 'mahiakter44@gmail.com', '2000-05-05', 'A+', 'Dhaka,Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `department`, `roll`, `pwd`) VALUES
(17, 'Computer', '970556', '374c2ee120229f3a12a159ccb7ba7bb994f0958b'),
(18, 'Computer', '970588', '84d07f75c304be2be66a6e60c0c53ece05275980'),
(19, 'Marine', '970147', 'd71d2acddfbdaf6cc548b1ea6557820d9460bd3b'),
(20, 'RAC', '970458', '2d406ceb7832f5616051f8ecd05eddf4c50dac11'),
(21, 'GDPM', '970654', '869213d7fab14fb3740e18eb302b3f46ca4dd5d6'),
(22, 'Mechanical', '970358', '01c9d116cf44b5f7d3fee7849fdcc52e381f1fed'),
(23, 'GDPM', '970550', '420ef7f00965d688f7f686afc96a377d219e473b'),
(24, 'Marine', '970951', '832ae5c48234001da13aae846696c3bd0c3e6812'),
(26, 'Computer', '970159', '76f036c7becadf65a103a4ed57c72cd2ab9f0356'),
(27, 'Mechanical', '970559', 'b5381eb89fe4e7e339f87399eba7c22954dc3649'),
(28, 'Electrical', '970589', '0bae0d7b9950289a693656c56acf1fc1bd0659f0'),
(29, 'Civil', '970774', 'e90a0d4cf918714b2223de7e5ccb39765094a2ed'),
(30, 'Computer', '970613', '6c68c10c13f21a30f663f7a05b3f70c1a8f1eb38'),
(31, 'Electrical', '971547', '0beb663adc7e49d66097ef0eb4f57b3ea4d751a6'),
(32, 'Electrical', '971458', '081f3e591ad0b9943a1ed99ce6d1b3c1c373e2dc'),
(33, 'Civil', '970115', '8ab64838c00aea5d5d74407522d23eef4b1354bd'),
(34, 'Computer', '970549', '6e52114a4d29d10dfe1864d45d8963eaa2f0d6d1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
