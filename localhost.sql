-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2020 at 08:48 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oral`
--
CREATE DATABASE IF NOT EXISTS `oral` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `oral`;

-- --------------------------------------------------------

--
-- Table structure for table `oral_questions`
--

CREATE TABLE `oral_questions` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(10000) NOT NULL,
  `sub_name` varchar(15) NOT NULL,
  `dept` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oral_questions`
--

-- --------------------------------------------------------

--
-- Table structure for table `oral_subjects`
--

CREATE TABLE `oral_subjects` (
  `sub_name` varchar(30) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `sem` varchar(15) NOT NULL,
  `year` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oral_subjects`
--

-- --------------------------------------------------------

--
-- Table structure for table `oral_users`
--

CREATE TABLE `oral_users` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `year` varchar(15) NOT NULL,
  `sem` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oral_users`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oral_questions`
--
ALTER TABLE `oral_questions`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `oral_users`
--
ALTER TABLE `oral_users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oral_questions`
--
ALTER TABLE `oral_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
