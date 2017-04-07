-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 11:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `address` varchar(255) NOT NULL,
  `area_cd` int(11) NOT NULL,
  `phone` int(20) NOT NULL,
  `sign_up_date` datetime NOT NULL,
  `account_perm` enum('a','b','c') NOT NULL DEFAULT 'a',
  `email_verification` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `mail`, `fname`, `lname`, `city`, `lat`, `lng`, `address`, `area_cd`, `phone`, `sign_up_date`, `account_perm`, `email_verification`) VALUES
(1, 'Ozymandias', 'omfg69', 'zorbasalex@hotmail.com', 'ALEXIS', 'ZORMPAS', 'ATHENS', 37.98, 23.8023, 'MACEDONIAS 73', 15669, 2147483647, '0000-00-00 00:00:00', 'c', '0'),
(5, 'Bgates', '1239598nt2000xpvista7810', 'gates@hotmail.com', 'Bill', 'Gates', 'Medina', 0, 0, '1835 73rd Ave', 0, 0, '0000-00-00 00:00:00', 'a', '0'),
(6, 'ascsacs', 'csacsacsa', 'sacsc@ascacas', 'qwdwq', 'dqwdwq', 'wqdwqd', 0, 0, 'wqdwqd', 0, 2147483647, '0000-00-00 00:00:00', 'a', '0'),
(8, 'Putin', '1234', 'putin@gmail.com', 'Vladimir', 'Putin ', 'Athens', 0, 0, 'EDEW 34', 2133, 324343243, '0000-00-00 00:00:00', 'a', '0'),
(10, 'boom', '1234', 'saxsax@sdcds.com', 'ecewce', 'ewcewc', 'ewcewcew', 37.98, 23.8023, 'cewewcew', 1232, 2132321, '0000-00-00 00:00:00', 'a', '0'),
(11, 'rerere', '1234', 'sdcsd@ewew.com', 'cascasc', 'sacsacsa', 'csacsac', 0, 0, 'sacsac', 32432, 3424324, '0000-00-00 00:00:00', 'a', '0'),
(12, 'wewe', '1234', 'sdw@cew.cie', 'wewdw', 'wddwq', 'wqdwqd', 0, 0, 'wqdwq', 2343, 23432423, '0000-00-00 00:00:00', 'a', '0'),
(13, 'eewew', '1234', 'cscsd@ewc.ewe', 'vwe', 'wevwev', 'ewvew', 0, 0, 'vewvew', 3232, 22332, '0000-00-00 00:00:00', 'a', '0'),
(15, '1234', '1234', 'scsc@wd.ew', 'wdwee', 'wedwdewd', 'ewdewde', 0, 0, 'wewwedwe', 232, 23233, '0000-00-00 00:00:00', 'a', '0'),
(34, 'GCloon', '12345', 'cloon@gmail.com', 'George', 'Clooney', 'Preveza', 37.9899, 23.8023, 'Agriniou 43', 1232, 23432432, '0000-00-00 00:00:00', 'a', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
