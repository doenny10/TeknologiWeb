-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 11:16 AM
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
-- Table structure for table `userpasto`
--

CREATE TABLE `userpasto` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpasto`
--

INSERT INTO `userpasto` (`id`, `name`, `username`, `password`, `email`, `address`, `gender`) VALUES
(1, 'Donny Auddy Lionovan', 'donny10', '123456', 'donny.auddy10@gmail.', 'Jl. Siwalankerto no.108 Sby', 'Laki-Laki'),
(2, 'Daniel', 'admin', 'admin', 'm26416043@john.petra', 'Jl. Soekarno hatta no. 205 Surabaya', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userpasto`
--
ALTER TABLE `userpasto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userpasto`
--
ALTER TABLE `userpasto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
