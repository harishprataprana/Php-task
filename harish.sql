-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2020 at 11:23 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harish`
--

-- --------------------------------------------------------

--
-- Table structure for table `harish`
--

CREATE TABLE `harish` (
  `id` int(11) NOT NULL,
  `topic` varchar(1000) DEFAULT NULL,
  `words` varchar(100) DEFAULT NULL,
  `info` varchar(1000) DEFAULT NULL,
  `arrdate` date DEFAULT NULL,
  `depddate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harish`
--

INSERT INTO `harish` (`id`, `topic`, `words`, `info`, `arrdate`, `depddate`) VALUES
(15, 'SEO', '200', 'Seo', '2020-06-10', '2020-06-11'),
(16, 'first', '100', 'first', '2020-06-10', '2020-06-11'),
(17, 'second', '800', 'second', '2020-06-10', '2020-06-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harish`
--
ALTER TABLE `harish`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harish`
--
ALTER TABLE `harish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
