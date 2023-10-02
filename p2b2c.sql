-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 02, 2023 at 12:47 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p2b2c`
--

-- --------------------------------------------------------

--
-- Table structure for table `productfilter`
--

CREATE TABLE `productfilter` (
  `id` int(100) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `cat_type` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productfilter`
--

INSERT INTO `productfilter` (`id`, `product`, `price`, `cat_type`, `image`) VALUES
(1, 'NeelKamal', '13000', 'cat_three', 'images/chair.jpg'),
(2, 'Versace', '150000', 'cat_two', 'images/clothes.jpg'),
(3, 'Louis Vitton', '100000', 'cat_one', 'images/shoes.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productfilter`
--
ALTER TABLE `productfilter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productfilter`
--
ALTER TABLE `productfilter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
