-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2019 at 05:03 AM
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
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `libno` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `roll` int(11) NOT NULL,
  `year` varchar(2) NOT NULL,
  `branch` text NOT NULL,
  `password1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `libno`, `email`, `name`, `roll`, `year`, `branch`, `password1`) VALUES
(15, '1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', '1234'),
(23, '3830', 'amansingh007.aks@gmail.com', 'aman kumar singh', 60, 'se', 'cse', '1234'),
(24, '3636', 'admin@newsoft.co.in', 'aman', 21, 'se', 'cse', '1234'),
(27, '3610', 'jay_aradhye@rediffmail.com', 'Jaydatta Aradhye', 2, 'se', 'mech', 'Jaydatta@1'),
(28, '3627', 'nishantchavan127@gmail.com', 'Nishan chavan', 6, 'se', 'entc', 'nishant@123'),
(29, '13', 'patilss1610@gmail.com', 'Sourabh Shivaji Patil', 44, 'se', 'cse', '12345'),
(30, '8976', 'skole354@gmail.com', 'Saurabh Sanjay kole', 59, 'be', 'cse', 'qwer1234'),
(31, '2352', 'ajayshete@gmail.com', 'ajay', 58, 'se', 'cse', '2352'),
(32, '3320', 'prakash@gmail.com', 'prakash aamte', 56, 'se', 'mech', 'pk'),
(33, '2455', 'krushna.sontakke6345@gmail.com', 'krishna sontakke', 60, 'be', 'cse', 'qwer@1234'),
(34, '3630', 'vaibhavdada8911@gmail.com', 'vaibhav bholenath chavan', 4, 'se', 'cse', '123'),
(37, '1111', 'abcd@gmail.com', 'hello1234', 13, 'se', 'cse', '1234'),
(38, '33331', 'abcd@gmail.com', 'pqrs', 34, 'se', 'cse', '1234'),
(39, '789', 'adfs@email', 'gas', 1777, 'se', 'cse', '1234'),
(40, '1113', 'abcd@gmail.com', 'abcd', 80, 'se', 'cse', '1234'),
(41, '1211', 'ananyakulkarni119@gmail.com', 'ananaya kulkarni', 5645, 'se', 'cse', 'Ananya@123'),
(42, '3434', 'kdfj@gmail.com', 'krishna', 41, 'se', 'cse', 'pass123'),
(43, '3787', 'pathansahil471@gmail.com', 'sahil pathan', 43, 'se', 'cse', '1234'),
(44, '7777', 'admin@ims.com', 'abc', 35, 'se', 'cse', 'mmm123'),
(45, '3755', 'devakhopade6698@gmail.com', 'deva khopade', 24, 'se', 'mech', '66982118'),
(46, '3626', 'man@gmail.com', 'manali', 8, 'se', 'cse', '1234'),
(47, '0909', 'abhangraofamily@gmail.com', 'avi', 23, 'se', 'cse', '1234'),
(48, '9999', 'ab45@gmail.com', 'Hushal', 123, 'se', 'cse', '9999'),
(49, '00000', 'aaaa@aaa.aaa', 'aaaa aaaa aaaa', 95, 'te', 'cse', 'aaaa'),
(50, '000000', 'zzz@zzz.zzz', 'zzzz', 959, 'fe', 'cse', 'aaaaaa'),
(51, '123456', 'kjsafh@gmail.com', 'ajay vishal shete', 6, 'te', 'cse', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libno` (`libno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
