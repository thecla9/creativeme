-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2017 at 05:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `flighttracker`
--

CREATE TABLE `flighttracker` (
  `sn` int(25) NOT NULL,
  `agent_name` varchar(25) NOT NULL,
  `staff_name` varchar(25) NOT NULL,
  `travel_date` date NOT NULL,
  `destination` varchar(25) NOT NULL,
  `purpose` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `invoice_no` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flighttracker`
--

INSERT INTO `flighttracker` (`sn`, `agent_name`, `staff_name`, `travel_date`, `destination`, `purpose`, `amount`, `invoice_no`) VALUES
(1, 'ARIK AIRWAYS', 'Kenechukwu Amilo', '2017-01-11', 'Dubai', 'Training', '900000', 9),
(2, 'QATAR', 'CHUMA', '2017-01-27', 'LONDON', 'Training', '8000000', 90);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `staff_id` int(11) NOT NULL,
  `department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nipex`
--

CREATE TABLE `nipex` (
  `staff_id` int(11) NOT NULL,
  `department` varchar(25) NOT NULL,
  `user_password` varchar(25) NOT NULL,
  `user_firstname` varchar(25) NOT NULL,
  `user_lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nipex`
--

INSERT INTO `nipex` (`staff_id`, `department`, `user_password`, `user_firstname`, `user_lastname`) VALUES
(300, 'fands', '003', 'precious', 'Ekeh'),
(1874, 'crm', '1111', 'ashogbon', 'kofo'),
(9000, 'njqs', '9090', 'uche', 'obi'),
(19967, 'fands', '0000', 'dimma', 'Ezeh');

-- --------------------------------------------------------

--
-- Table structure for table `nipexgroup`
--

CREATE TABLE `nipexgroup` (
  `staff_id` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nipexgroup`
--

INSERT INTO `nipexgroup` (`staff_id`, `department`) VALUES
('1874', 'fands'),
('300', 'fands');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_firstname` varchar(25) NOT NULL,
  `user_lastname` varchar(25) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_firstname`, `user_lastname`, `user_password`) VALUES
(11, 'prechy@yahoo.com', 'oluchi', 'Ezeh', '11 olive street'),
(12, 'wee@yahoo.com', 'Lizzy', 'Ezemma', 'palmolive 56 street');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flighttracker`
--
ALTER TABLE `flighttracker`
  ADD UNIQUE KEY `s/n` (`sn`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD UNIQUE KEY `department` (`department`);

--
-- Indexes for table `nipex`
--
ALTER TABLE `nipex`
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- Indexes for table `nipexgroup`
--
ALTER TABLE `nipexgroup`
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_id` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
