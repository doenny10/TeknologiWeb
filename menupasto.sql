-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 07:11 PM
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
  `price` int(11) NOT NULL,
  `category` int(5) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menupasto`
--

INSERT INTO `menupasto` (`id`, `item`, `optional`, `price`, `category`, `descript`, `photo`) VALUES
(1, 'Spaghetti', 'Bolognese', 25000, 1, 'Spageti merupakan salah satu jenis pasta yang berbentuk panjang, tipis, silindris, dan padat, yang jika diperhatikan menyerupai mie pada umumnya ', 'menu1.png'),
(2, 'Spaghetti', 'Mushroom', 25000, 1, 'Spageti merupakan salah satu jenis pasta yang berbentuk panjang, tipis, silindris, dan padat, yang jika diperhatikan menyerupai mie pada umumnya ', 'menu1.png'),
(3, 'Spaghetti', 'Korean', 25000, 1, 'Spageti merupakan salah satu jenis pasta yang berbentuk panjang, tipis, silindris, dan padat, yang jika diperhatikan menyerupai mie pada umumnya ', 'menu1.png'),
(4, 'Spaghetti', 'Chesee', 25000, 1, 'Spageti merupakan salah satu jenis pasta yang berbentuk panjang, tipis, silindris, dan padat, yang jika diperhatikan menyerupai mie pada umumnya ', 'menu1.png'),
(5, 'Spaghetti', 'Salted Egg', 25000, 1, 'Spageti merupakan salah satu jenis pasta yang berbentuk panjang, tipis, silindris, dan padat, yang jika diperhatikan menyerupai mie pada umumnya ', 'menu1.png'),
(6, 'Spaghetti', 'Curry', 25000, 1, 'Spageti merupakan salah satu jenis pasta yang berbentuk panjang, tipis, silindris, dan padat, yang jika diperhatikan menyerupai mie pada umumnya ', 'menu1.png'),
(7, 'Penne', 'Bolognese', 25000, 1, 'Penne merupakan salah satu pasta yang bentuknya tabung. Penne biasanya diolah dengan saus krim dan kacang polong. ', 'menu4.png'),
(8, 'Penne', 'Mushroom', 25000, 1, 'Penne merupakan salah satu pasta yang bentuknya tabung. Penne biasanya diolah dengan saus krim dan kacang polong. ', 'menu4.png'),
(9, 'Penne', 'Korean', 25000, 1, 'Penne merupakan salah satu pasta yang bentuknya tabung. Penne biasanya diolah dengan saus krim dan kacang polong. ', 'menu4.png'),
(10, 'Penne', 'Chesee', 25000, 1, 'Penne merupakan salah satu pasta yang bentuknya tabung. Penne biasanya diolah dengan saus krim dan kacang polong. ', 'menu4.png'),
(11, 'Penne', 'Salted Egg', 25000, 1, 'Penne merupakan salah satu pasta yang bentuknya tabung. Penne biasanya diolah dengan saus krim dan kacang polong. ', 'menu4.png'),
(12, 'Penne', 'Curry', 25000, 1, 'Penne merupakan salah satu pasta yang bentuknya tabung. Penne biasanya diolah dengan saus krim dan kacang polong. ', 'menu4.png'),
(13, 'Fusili', 'Bolognese', 25000, 1, 'Fusilli merupakan salah satu pasta yang bentuknya spiral. Fusilli biasanya diolah dengan saus krim dan kacang polong', 'menu5.png'),
(14, 'Fusili', 'Mushroom', 25000, 1, 'Fusilli merupakan salah satu pasta yang bentuknya spiral. Fusilli biasanya diolah dengan saus krim dan kacang polong', 'menu5.png'),
(15, 'Fusili', 'Korean', 25000, 1, 'Fusilli merupakan salah satu pasta yang bentuknya spiral. Fusilli biasanya diolah dengan saus krim dan kacang polong', 'menu5.png'),
(16, 'Fusili', 'Chesee', 25000, 1, 'Fusilli merupakan salah satu pasta yang bentuknya spiral. Fusilli biasanya diolah dengan saus krim dan kacang polong', 'menu5.png'),
(17, 'Fusili', 'Salted Egg', 25000, 1, 'Fusilli merupakan salah satu pasta yang bentuknya spiral. Fusilli biasanya diolah dengan saus krim dan kacang polong', 'menu5.png'),
(18, 'Fusili', 'Curry', 25000, 1, 'Fusilli merupakan salah satu pasta yang bentuknya spiral. Fusilli biasanya diolah dengan saus krim dan kacang polong', 'menu5.png'),
(19, 'Macaroni', 'Bolognese', 25000, 1, 'Makaroni merupakan salah satu pasta yang bentuknya elbow. Makaroni biasanya diolah dengan saus krim dan kacang polong. ', 'menu2.png'),
(20, 'Macaroni', 'Mushroom', 25000, 1, 'Makaroni merupakan salah satu pasta yang bentuknya elbow. Makaroni biasanya diolah dengan saus krim dan kacang polong. ', 'menu2.png'),
(21, 'Macaroni', 'Korean', 25000, 1, 'Makaroni merupakan salah satu pasta yang bentuknya elbow. Makaroni biasanya diolah dengan saus krim dan kacang polong. ', 'menu2.png'),
(22, 'Macaroni', 'Chesee', 25000, 1, 'Makaroni merupakan salah satu pasta yang bentuknya elbow. Makaroni biasanya diolah dengan saus krim dan kacang polong. ', 'menu2.png'),
(23, 'Macaroni', 'Salted Egg', 25000, 1, 'Makaroni merupakan salah satu pasta yang bentuknya elbow. Makaroni biasanya diolah dengan saus krim dan kacang polong. ', 'menu2.png'),
(24, 'Macaroni', 'Curry', 25000, 1, 'Makaroni merupakan salah satu pasta yang bentuknya elbow. Makaroni biasanya diolah dengan saus krim dan kacang polong. ', 'menu2.png'),
(25, 'Chocolate', 'Bubble Drink', 10000, 3, 'Tersedia dengan varian rasa coklat dan cappucino, anda juga dapat menambahkan bubble drink / grass jelly / coffe jelly sesuai selera ', 'drink.png'),
(26, 'Chocolate', 'Grass Jelly', 10000, 3, 'Tersedia dengan varian rasa coklat dan cappucino, anda juga dapat menambahkan bubble drink / grass jelly / coffe jelly sesuai selera ', 'drink.png'),
(27, 'Chocolate', 'Coffee Jelly', 10000, 3, 'Tersedia dengan varian rasa coklat dan cappucino, anda juga dapat menambahkan bubble drink / grass jelly / coffe jelly sesuai selera ', 'drink.png'),
(28, 'Cappucino', 'Bubble Drink', 10000, 3, 'Tersedia dengan varian rasa coklat dan cappucino, anda juga dapat menambahkan bubble drink / grass jelly / coffe jelly sesuai selera ', 'drink.png'),
(29, 'Cappucino', 'Grass Jelly', 10000, 3, 'Tersedia dengan varian rasa coklat dan cappucino, anda juga dapat menambahkan bubble drink / grass jelly / coffe jelly sesuai selera ', 'drink.png'),
(30, 'Cappucino', 'Coffee Jelly', 10000, 3, 'Tersedia dengan varian rasa coklat dan cappucino, anda juga dapat menambahkan bubble drink / grass jelly / coffe jelly sesuai selera ', 'drink.png'),
(31, 'Macaroni Sekotel', 'None', 20000, 3, 'Makaroni yang dipanggang bersama dengan sauce special dangan keju dan daging.', 'cake1.png'),
(32, 'Chocolate Brownies', 'None', 15000, 3, 'Bronies coklat dengan rasa yang khas.', 'cake2.png'),
(33, 'Cup Cakes', 'None', 15000, 3, 'Cup cake dengan toping cream lembut diatasnya dan dilengkapi dengan taburan choco chips yang renyah ', 'cake3.png'),
(34, 'PAKET 1 - PAKET HORE', 'None', 45000, 4, 'Spaghetti Bolognese, Chocolate Bubble Drink, Cup Cakes', 'paket1.png'),
(35, 'PAKET 2 - PAKET MANIA', 'None', 80000, 4, 'Macaroni Chesee, Fusili Korean, Chocolate Coffee Jelly, Cappucino Bubble Drink, Chocolate Brownies', 'paket2.png'),
(36, 'PAKET 3 - PAKET SERU', 'None', 60000, 4, 'Spaghetti Mushroom, Chocolate Bubble Drink, Cappucino Grass Jelly, Macaroni Sekotel', 'paket3.png'),
(37, 'PAKET 4 - PAKET ASIK', 'None', 65000, 4, 'Penne Salted Egg, Macaroni Cheese, Chocolate Grass Jelly, Cappucino Bubble Drink', 'paket4.png'),
(38, 'Chicken Curry', 'None', 50000, 2, 'Rice Box berisi nasi dan ayam yang digoreng dengan balutan tepung dan ditambah siraman saus curry ', 'rice1.png'),
(39, 'Fish Cake Cheese', 'None', 50000, 2, 'Rice Box berisi nasi dan Fish cake yang dpanggang sempurna dan ditambah siraman sauce keju ', 'rice2.png'),
(40, 'Ham', 'None', 50000, 2, 'Rice Box berisi nasi dan daging ham dan ditambah siraman saus special', 'rice3.png'),
(41, 'Chicken Rendang', 'None', 50000, 2, 'Rice Box berisi nasi dan ayam yang digoreng dengan balutan tepung dan ditambah siraman saus rendang yang bikin nendang ', 'rice4.png'),
(42, 'Chicken Cube Salted Egg', 'None', 50000, 2, 'Rice Box berisi nasi dan potongan daging ayam yang dipanggang dan ditambah siraman salted egg ', 'rice5.png'),
(43, 'Conchiglioni', 'Bolognese', 25000, 1, 'Pasta ini berbentuk kerang dan ukurannya kecil.', 'menu3.png'),
(44, 'Conchiglioni', 'Korean', 25000, 1, 'Pasta ini berbentuk kerang dan ukurannya kecil.', 'menu3.png'),
(45, 'Conchiglioni', 'Chesee', 25000, 1, 'Pasta ini berbentuk kerang dan ukurannya kecil. ', 'menu3.png'),
(46, 'Conchiglioni', 'Salted Egg', 25000, 1, 'Pasta ini berbentuk kerang dan ukurannya kecil. ', 'menu3.png'),
(47, 'Conchiglioni', 'Curry', 25000, 1, 'Pasta ini berbentuk kerang dan ukurannya kecil. ', 'menu3.png');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
