-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 01:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `name`, `email`, `city`, `zip`, `password`) VALUES
(1, 'Mohan', 'mohan@gmail.com', 'mysuru', '570012', '7ca4852feead4417ccc5'),
(2, 'tanay', 'tanaysharma1901@gmail.com', 'mysuru', '570012', '9b1043f5a058ed9ab4b1'),
(3, 'puneeth', 'punipuneeth49@gmail.com', 'mysuru', '570012', '4a8b72f228ee2103b53a'),
(11, 'sundar', 'sundarrajn388@gmail.com', 'mysuru', '570012', '3daf6955f1575115e21e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
