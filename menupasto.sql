-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 11:29 AM
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
-- Table structure for table `menupasto`
--

CREATE TABLE `menupasto` (
  `id` int(3) NOT NULL,
  `item` varchar(255) NOT NULL,
  `optional` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menupasto`
--

INSERT INTO `menupasto` (`id`, `item`, `optional`, `price`) VALUES
(1, 'Spaghetti', 'Bolognese', 25000),
(2, 'Spaghetti', 'Mushroom', 25000),
(3, 'Spaghetti', 'Korean', 25000),
(4, 'Spaghetti', 'Chesee', 25000),
(5, 'Spaghetti', 'Salted Egg', 25000),
(6, 'Spaghetti', 'Curry', 25000),
(7, 'Penne', 'Bolognese', 25000),
(8, 'Penne', 'Mushroom', 25000),
(9, 'Penne', 'Korean', 25000),
(10, 'Penne', 'Chesee', 25000),
(11, 'Penne', 'Salted Egg', 25000),
(12, 'Penne', 'Curry', 25000),
(13, 'Fusili', 'Bolognese', 25000),
(14, 'Fusili', 'Mushroom', 25000),
(15, 'Fusili', 'Korean', 25000),
(16, 'Fusili', 'Chesee', 25000),
(17, 'Fusili', 'Salted Egg', 25000),
(18, 'Fusili', 'Curry', 25000),
(19, 'Macaroni', 'Bolognese', 25000),
(20, 'Macaroni', 'Mushroom', 25000),
(21, 'Macaroni', 'Korean', 25000),
(22, 'Macaroni', 'Chesee', 25000),
(23, 'Macaroni', 'Salted Egg', 25000),
(24, 'Macaroni', 'Curry', 25000),
(25, 'Chocolate', 'Bubble Drink', 10000),
(26, 'Chocolate', 'Grass Jelly', 10000),
(27, 'Chocolate', 'Coffee Jelly', 10000),
(28, 'Cappucino', 'Bubble Drink', 10000),
(29, 'Cappucino', 'Grass Jelly', 10000),
(30, 'Cappucino', 'Coffee Jelly', 10000),
(31, 'Macaroni Sekotel', 'None', 20000),
(32, 'Chocolate Brownies', 'None', 15000),
(33, 'Cup Cakes', 'None', 15000),
(34, 'Packages 1', 'Spaghetti Bolognese, Chocolate Bubble Drink, Cup Cakes', 45000),
(35, 'Packages 2', 'Macaroni Chesee, Fusili Korean, Chocolate Coffee Jelly, Cappucino Bubble Drink, Chocolate Brownies', 80000),
(36, 'Packages 3', 'Spaghetti Mushroom, Chocolate Bubble Drink, Cappucino Grass Jelly, Macaroni Sekotel', 60000),
(37, 'Packages 4', 'Penne Salted Egg, Macaroni Cheese, Chocolate Grass Jelly, Cappucino Bubble Drink', 65000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menupasto`
--
ALTER TABLE `menupasto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menupasto`
--
ALTER TABLE `menupasto`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
