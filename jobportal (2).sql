-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 05:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `jobid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `userid`, `jobid`) VALUES
(1, 1, 1241),
(2, 1, 1240),
(3, 1, 1235),
(4, 1, 1237),
(5, 3, 1239),
(6, 3, 1234),
(7, 3, 1240),
(8, 4, 1237);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `category`, `location`, `details`) VALUES
(1234, 'Production Engineer', 'Engineer I', 'Hyderabad', 'Responsible for production ideas and overall development of the products'),
(1235, 'Technical Coordinator', 'Finance', 'Bangalore', 'Analyzing company processes for delays, obstructions, and weaknesses\r\n    '),
(1236, 'Senior Financial Analyst', 'Finance', 'Chennai', 'Analyzing company processes for delays, obstructions, and weaknesses\r\n    '),
(1237, 'Cloud Analyst', 'Engineer I', 'Bangalore', 'Responsible for working with SaaS layer, should have good understanding of Javascript\r\n    '),
(1238, 'Full Stack Developer', 'Engineer I', 'Chennai', 'Responsible for developing front end and connecting it to backend\r\n    '),
(1239, 'Process Associate', 'Finance', 'Chennai', 'Analyzing company processes for delays, obstructions, and weaknesses\r\n    '),
(1240, 'R&D Engineer', 'Engineer I', 'Chennai', 'Responsible for developing and improving a wide range of production processes. The role requires var'),
(1241, 'Financial Analyst', 'Finance', 'Chennai', 'Responsible for settling trades\r\n    ');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `Phoneno` varchar(10) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `create_datetime` datetime(6) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `create_datetime`, `userid`) VALUES
('santosh', '587c57365b54e8283fd6b1ac24acf29d', 'santosh@gmail.com', '2022-07-31 17:16:27.000000', 4),
('Deeksha', 'f7de140da031ca1e6e43adcc3b1e920f', 'deekshargowda2001@gmail.com', '2022-07-31 17:41:35.000000', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
