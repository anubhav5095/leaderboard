-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 06:45 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `email` varchar(20) NOT NULL,
  `points` varchar(10) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`email`, `points`, `name`) VALUES
('a@1.com', '0', 'sshj'),
('a@b.com', '10', 'hero'),
('abc@2.com', '0', 'hero');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('a@1.com', 'abcd'),
('a@b.com', 'aaaa'),
('abc@2.com', 'abcde'),
('abc@d.com', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `about` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `github` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `about`, `email`, `github`, `linkedin`, `password`, `gender`) VALUES
('sshj', 'hjk', 'hjk', 'a@1.com', 'hj', 'hj', 'abcd', 'Male'),
('hero', 'haa', 'hgsavndsd', 'a@b.com', 'theisdhsj.con', 'shed.///dekjc.com', 'aaaa', 'Female'),
('hero', 'jjnbnxb', 'sahvsaitb ajssh hshj', 'abc@2.com', 'hey youu', 'hey heyy hey', 'abcde', 'Female'),
('Anubhav', 'Anand', 'ajkhsj', 'abcd@1.com', 'Ernakulam', 'dsasdsadaddd', 'abcd', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
