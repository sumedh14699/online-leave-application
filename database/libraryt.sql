-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2019 at 05:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8371188_leave2`
--

-- --------------------------------------------------------

--
-- Table structure for table `libraryt`
--

CREATE TABLE `libraryt` (
  `userid` text NOT NULL,
  `emailt` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `year` varchar(2) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `password1` text NOT NULL,
  `id2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libraryt`
--

INSERT INTO `libraryt` (`userid`, `emailt`, `name`, `year`, `branch`, `password1`, `id2`) VALUES
('hello123', 'abcdefs@gmail.com', 'hello', 'se', 'cse', '1234', 1),
('csecc', 'cse@gmail.com', 'cse', 'se', 'cse', '1234', 2),
('ccmech', 'helloasdhdga@gmail.com', 'amanmecvh', 'se', 'mech', '1234', 3),
('entc', 'chutiya@gmail.com', 'sumedh', 'se', 'entc', '1234', 4),
('1234', 'patilss1610@gmail.com', 'sourabh', 'se', 'cse', '12345', 5),
('hod', 'hod123@gmail.com', 'SGHAS', 'be', 'cse', '1234', 6),
('abc', 'hello@gmail.com', 'abcd', 'se', 'cse', '1234', 7),
('45678', 'avshd@gmail.com', 'Pikachu123', 'se', 'cse', '1234', 8),
('Chaman', 'Chaman@gmail.com', 'Chaman singh', 'fe', 'cse', '1234', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libraryt`
--
ALTER TABLE `libraryt`
  ADD PRIMARY KEY (`id2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `libraryt`
--
ALTER TABLE `libraryt`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
