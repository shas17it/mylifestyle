-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 05:35 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mls`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `PID` int(11) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `PRICE` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`PID`, `NAME`, `PRICE`) VALUES
(1, 'Cannon EOS ', 36000),
(2, 'Nikon Coolpix', 42000),
(3, 'Sony IS-20', 40000),
(4, 'Nikon D750', 150000),
(5, 'Pentax ZX-60', 16300),
(6, 'Fujifilms XT10', 84000),
(7, 'Pool pals', 800),
(8, 'Symbol', 1599),
(9, 'Arrow', 2099),
(10, 'X-Calliber', 800),
(11, 'Swisscott', 1250),
(12, 'Laurel\'s Matrix Silver', 1500),
(13, 'Casio Edifive', 6495),
(14, 'Curren Analogue Watch', 8000),
(15, 'Citizen Unisex Watch', 78220),
(16, 'Fedric Constant', 191165);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `CONTACT` int(15) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `GENDER` varchar(8) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `CITY` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `CONTACT`, `PASSWORD`, `GENDER`, `ADDRESS`, `CITY`) VALUES
(101, 'Shantanu', 'Gaur', 'shantanu230199gaur@gmail.com', 2122363978, 'shantanu2301', 'male', 'MD 70 LAFARGE OFFICER\'s COLONY \r\nGOPALNAGAR', 'Jangir-Champa'),
(102, 'Aryan', 'Kashyap', 'aryankashyap3214@gmail.com', 1256987457, 'aryan3214', 'Male', 'Ward 7/8 Bank Colony Street no.3', 'Satna'),
(103, 'Shashwat ', 'Gaur', 'shashwatgaur23@gmail.com', 125478414, 'shashwat23', 'male', 'MIG 112 Bandhavgarh Colony ', 'Satna'),
(104, 'Vivekanad ', 'Sharma', 'vnsharma42@rediffmail.com', 712535412, 'papa123', 'male', 'MIG 112 Bandhavgarh Colony', 'Satna'),
(105, 'Meenakshi ', 'Sharma', 'meena1407sharma@gmail.com', 963097811, 'mummy123', 'female', 'MD 70 LAFARGE OFFICERS COLONY PO:-GOPALNAGAR', 'Janjgir-Champa'),
(106, 'Ram', 'Mehra', 'ram230199@gmail.com', 1457844, 'ram123', 'male', 'mig 113 civil lines near water tank', 'agra'),
(107, 'Ram', 'Lal', 'ramu@gmail.com', 21545645, '123654789', 'male', 'purani jhopdi municipal gutter ke baaju me', 'agra'),
(108, 'om', 'lal', 'omi@gmail.com', 254698745, '12361254877', 'male', 'mig 220 new om colony', 'rewa'),
(109, 'Ram', 'sharma', 'rams@gmail.com', 254784569, '12365478', 'male', 'lig 224 south civil lines', 'jabalpur'),
(110, 'Chris', 'Gayle', 'chrisgayle@yahoo.com', 254786, '', 'male', 'house nu-175 potara street', 'west-indies'),
(111, 'sham', 'idrees', 'shami@gmail.com', 21454784, '1236125487', 'male', 'west city ', 'canada');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

CREATE TABLE `user_items` (
  `ID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `IID` int(11) NOT NULL,
  `STATUS` enum('ADDED TO CART','CONFIRMED') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`ID`, `UID`, `IID`, `STATUS`) VALUES
(1, 0, 1, 'ADDED TO CART'),
(24, 0, 1, 'ADDED TO CART'),
(23, 0, 1, 'ADDED TO CART');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `user_items`
--
ALTER TABLE `user_items`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `user_items`
--
ALTER TABLE `user_items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
