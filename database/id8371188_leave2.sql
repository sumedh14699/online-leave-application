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
-- Table structure for table `lib1`
--

CREATE TABLE `lib1` (
  `libno` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `roll` int(11) NOT NULL,
  `year` text NOT NULL,
  `branch` text NOT NULL,
  `reason` text NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `id3` int(11) NOT NULL,
  `approve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib1`
--

INSERT INTO `lib1` (`libno`, `email`, `name`, `roll`, `year`, `branch`, `reason`, `date1`, `date2`, `image`, `id3`, `approve`) VALUES
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'amans funeral', '2019-03-09', '2019-03-20', 'Jellyfish.jpg', 1, 3),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'fhgagf;', '2019-03-13', '2019-03-28', 'Penguins.jpg', 2, 2),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'asasdggdafg', '2019-03-15', '2019-03-06', 'img11.jpg', 4, 4),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'nonsensable emotional writeup that no one cares about', '2019-03-22', '2019-03-23', 'img13.jpg', 5, 3),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'asdfsadg', '2019-03-22', '2019-03-20', 'img15.jpg', 6, 2),
('3830', 'amansingh007.aks@gma', 'aman kumar singh', 60, 'se', 'cse', 'approve krr be jaildi', '2019-03-08', '2019-03-22', 'admisionreceipt.jpg', 7, 2),
('3830', 'amansingh007.aks@gma', 'aman kumar singh', 60, 'se', 'cse', 'function', '2019-03-15', '2019-03-21', 'download.jpg', 8, 3),
('3333', '123c@gmail.com', 'sumedh', 65, 'se', 'cse', 'sadf', '2019-03-22', '2019-03-19', 'img13.jpg', 9, 2),
('3610', 'jay_aradhye@rediffmail.com', 'Jaydatta Aradhye', 2, 'se', 'mech', 'Abcd', '2019-03-19', '2019-03-31', '15529301224736106366694884792508.jpg', 10, 2),
('3610', 'jay_aradhye@rediffmail.com', 'Jaydatta Aradhye', 2, 'se', 'mech', 'Gvn', '2019-04-02', '2019-04-18', '15529303892934166628482204174801.jpg', 11, 3),
('3627', 'nishantchavan127@gmail.com', 'Nishan chavan', 6, 'se', 'entc', 'wer', '2019-03-22', '2019-03-20', 'admisionreceipt.jpg', 12, 2),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'fgasfggaslgfl', '2019-03-10', '2019-03-12', 'img11.jpg', 13, 2),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'afsdhgfdsahh', '2019-03-15', '2019-03-16', 'img6.jpg', 14, 2),
('8976', 'skole354@gmail.com', 'Saurabh Sanjay kole', 59, 'be', 'cse', 'Aasch mala bore vatat ahe so please mala ghari basu dya', '2019-03-20', '2019-03-23', 'Screenshot_20190310-232409.png', 15, 2),
('13', 'patilss1610@gmail.com', 'Sourabh Shivaji Patil', 44, 'se', 'cse', 'dsadsadsd', '2019-03-14', '2019-03-21', 'Penguins.jpg', 16, 3),
('3320', 'prakash@gmail.com', 'prakash aamte', 56, 'se', 'mech', 'xdzfvxzcgb', '2019-03-14', '2019-03-21', 'RSA.java', 17, 2),
('2352', 'ajayshete@gmail.com', 'ajay', 58, 'se', 'cse', 'sdfdfgsd', '2019-03-19', '2019-12-20', 'RSA.java', 18, 2),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'avcbdsdfh', '2019-03-08', '2019-03-09', 'img11.jpg', 19, 2),
('3830', 'amansingh007.aks@gmail.com', 'aman kumar singh', 60, 'se', 'cse', 'dgfchv', '2019-03-21', '2019-03-31', 'Screenshot (2).png', 20, 2),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'abc', '2019-03-23', '2019-03-20', 'img13.jpg', 21, 2),
('13', 'patilss1610@gmail.com', 'Sourabh Shivaji Patil', 44, 'se', 'cse', 'sadsadsad', '2019-03-06', '2019-03-07', 'Desert.jpg', 22, 3),
('13', 'patilss1610@gmail.com', 'Sourabh Shivaji Patil', 44, 'se', 'cse', 'sad', '2019-03-05', '2019-03-05', 'Tulips.jpg', 23, 3),
('789', 'adfs@email', 'gas', 1777, 'se', 'cse', 'for', '2019-03-12', '2019-03-13', 'sohamthekomba.png', 24, 3),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'adsfdgfyfgtgggggggg', '2019-03-21', '2019-03-15', 'Untitled.png', 25, 2),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'asach', '2019-03-21', '2019-03-30', 'Untitled.png', 26, 2),
('1113', 'abcd@gmail.com', 'abcd', 80, 'se', 'cse', 'asach', '2019-03-28', '2019-03-30', '15534119188896070666460112124634.jpg', 27, 2),
('1211', 'ananyakulkarni119@gmail.com', 'ananaya kulkarni', 5645, 'se', 'cse', 'jhgyfgfhgghg', '2012-02-05', '2012-10-05', 'Full Assembly (1).SLDASM', 28, 2),
('1234', 'abc@gmail.com', 'hello', 21, 'se', 'cse', 'kljhk', '2019-03-16', '2019-03-26', 'AAA', 29, 3),
('3787', 'pathansahil471@gmail.com', 'sahil pathan', 43, 'se', 'cse', 'asach bore hoty mhanun....', '2019-03-14', '2019-03-18', 'ptTxfI.jpg', 30, 2),
('3787', 'pathansahil471@gmail.com', 'sahil pathan', 43, 'se', 'cse', 'ugach', '2019-03-21', '2019-03-13', 'e73944f514f89b0d29f737c1c0a2aa12.jpg', 31, 2),
('7777', 'admin@ims.com', 'abc', 35, 'se', 'cse', 'jgyjgjg', '2019-03-06', '2019-03-07', 'cl.png', 32, 2),
('3755', 'devakhopade6698@gmail.com', 'deva khopade', 24, 'se', 'mech', 'uagach', '2019-03-14', '2019-03-22', 'BlueStacks_ScreenShot.jpg', 33, 2),
('3755', 'devakhopade6698@gmail.com', 'deva khopade', 24, 'se', 'mech', 'abcd', '2019-03-14', '2019-03-15', 'Desert.jpg', 34, 2),
('3755', 'devakhopade6698@gmail.com', 'deva khopade', 24, 'se', 'mech', 'ascd', '2019-03-07', '2019-03-08', 'Lighthouse.jpg', 35, 0),
('3755', 'devakhopade6698@gmail.com', 'deva khopade', 24, 'se', 'mech', 'ascd', '2019-03-07', '2019-03-08', 'Lighthouse.jpg', 36, 0),
('3626', 'man@gmail.com', 'manali', 8, 'se', 'cse', 'dsfdsegf', '2019-03-14', '2019-03-21', 'admisionreceipt.jpg', 37, 2),
('0909', 'abhangraofamily@gmail.com', 'avi', 23, 'se', 'cse', 'jgjgdfhg', '2019-06-13', '2019-06-14', 'cmder_green.ico', 38, 3),
('9999', 'ab45@gmail.com', 'Hushal', 123, 'se', 'cse', 'Pikachu', '2019-07-02', '2019-07-12', '15642460195495557021675441921709.jpg', 39, 2),
('9999', 'ab45@gmail.com', 'Hushal', 123, 'se', 'cse', 'Masti', '2019-07-10', '2019-07-27', '15642464524952707055914291603847.jpg', 40, 3);

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
-- Indexes for table `lib1`
--
ALTER TABLE `lib1`
  ADD PRIMARY KEY (`id3`),
  ADD UNIQUE KEY `id1` (`id3`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libno` (`libno`);

--
-- Indexes for table `libraryt`
--
ALTER TABLE `libraryt`
  ADD PRIMARY KEY (`id2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lib1`
--
ALTER TABLE `lib1`
  MODIFY `id3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `libraryt`
--
ALTER TABLE `libraryt`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
