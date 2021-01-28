-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 11:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `permanant_address` varchar(250) NOT NULL,
  `temporary_address` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Persons' AUTO_INCREMENT=12 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `mobile`, `email`, `permanant_address`, `temporary_address`, `user_id`) VALUES
(5, 'Johny Deo', 1212121, 'qq@a.c', 'aassa', 'zxcxzc', 4),
(6, 'test2', 70707070, 'test@test.b', 'permanantAddress', 'qwer', 5),
(7, 'Robert Jr', 4521000058, 'iamrobert@gmail.com', 'Yellowstone', 'Dixon', 4),
(8, 'test22', 70707070, 'test@test.b', 'permanantAddress', 'qwer', 5),
(9, 'anthony rached', 9613247084, 'rached_anthony_95@hotmail.com', 'fiyadieh\r\nbaabda', 'fiyadieh\r\nbaabda', 4),
(10, 'anthonyy rached', 9613247084, 'rached_anthony_95@hotmail.com', 'fiyadieh\r\nbaabda', 'fiyadieh\r\nbaabda', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Last_Login` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `First_Name`, `Last_Name`, `Username`, `Password`, `Last_Login`) VALUES
(1, 'Suraj', 'Mundalik', 'suraj2334', '827ccb0eea8a706c4c34a16891f84e7b', '18 Sep 2016 10:29 AM'),
(2, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(3, 'Harry', 'Den', 'harry', '1a1dc91c907325c69271ddf0c944bc72', '10 March 2019 02:38 PM'),
(4, 'a', 'a', '1', '81dc9bdb52d04dc20036dbd8313ed055', '26 January 2021 10:58 PM'),
(5, 'q', 'q', 'q', '7694f4a66316e53c8cdd9d9954bd611d', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
