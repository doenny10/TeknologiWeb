-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 07:21 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tekweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartpasto`
--

CREATE TABLE `cartpasto` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartpasto`
--

INSERT INTO `cartpasto` (`id`, `iduser`, `idmenu`, `quantity`, `status`, `time`) VALUES
(1, 2, 47, 1, 0, '2018-07-05 11:38:25'),
(2, 2, 16, 3, 0, '2018-07-05 11:40:50'),
(3, 2, 4, 1, 0, '2018-07-05 02:39:04'),
(5, 2, 9, 2, 0, '2018-07-05 04:28:27'),
(6, 3, 3, 100, 0, '2018-07-05 07:02:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartpasto`
--
ALTER TABLE `cartpasto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartpasto`
--
ALTER TABLE `cartpasto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
