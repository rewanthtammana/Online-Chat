-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2015 at 09:48 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinechat`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_sent`
--

CREATE TABLE IF NOT EXISTS `db_sent` (
  `id` int(11) NOT NULL,
  `sent_to` text NOT NULL,
  `sent_from` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_sent`
--

INSERT INTO `db_sent` (`id`, `sent_to`, `sent_from`, `message`) VALUES
(2, 'po', 'kiran', 'hello'),
(3, 'rewanth', 'kiran', 'hello ajfsdl'),
(4, 'rewanth', 'kiran', 'hello ajfsdlajhds'),
(5, 'rewanth', 'kiran', 'hello ajfsdlajhds'),
(6, 'kiran', 'po', 'alsfd'),
(7, 'rewanth', 'mayank', 'hello'),
(8, 'mayank', 'rewanth', 'hello'),
(9, 'rewanth', 'kiran', 'aslkfdajlsd'),
(10, 'rewanth', 'kiran', 'aslkfdajlsd'),
(11, 'rewanth', 'kiran', 'aslkfdajlsd'),
(12, 'mayank', 'kiran', 'aslkfdajlsd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `enroll` text NOT NULL,
  `password` text NOT NULL,
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`enroll`, `password`, `id`, `username`, `status`) VALUES
('123', '123', 1, 'rewanth', 'off'),
('789', '789', 3, 'po', 'off'),
('456', '456', 4, 'kiran', 'off'),
('147', '147', 5, 'mayank', 'off'),
('7894', '7894', 7, 'bghl', 'off');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_sent`
--
ALTER TABLE `db_sent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_sent`
--
ALTER TABLE `db_sent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
