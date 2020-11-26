-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2020 at 08:35 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`name`, `price`, `pid`) VALUES
('Arihant Collection\r\nBlue Shirts', 600, 1),
('Linen White', 800, 2),
('3-Shirts Combo White', 1200, 3),
('White Strip Shirt', 1999, 4),
('Braun Deezen Watch', 599, 5),
('Cruez Watch', 11600, 6),
('Rolex Watch', 111600, 7),
('Coach Watch', 6000, 8),
('CP Plus Camera', 5999, 9),
('Nikon Exclusive', 11600, 10),
('GSM Camera', 26000, 11),
('Hiki CCTV Camera', 16000, 12),
('Louis Philippe', 12000, 13),
('Van Heusen', 1800, 14),
('Allen Solly', 1699, 15),
('Raymonds', 2800, 16),
('John Players', 2199, 17),
('Peter England', 1199, 18),
('Apache Pine', 512, 19),
('Andreas Strehler', 1699, 20),
('Baume et Mercier', 2800, 21),
('Webb C. Ball', 3800, 22),
('BlackBerrys', 1099, 23),
('Park Avenue', 899, 24);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(29, 'Ashish', 'ashishdhinwa8@gmail.com', '8b25775e0b58e63b2f4aa7f7fe1ccfc2', '7777777777', 'jaipur', 'jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(13, 21, 3, 'Added to cart'),
(14, 22, 3, 'Added to cart'),
(11, 10, 1, 'Added to cart'),
(22, 26, 1, 'Added to cart'),
(23, 15, 1, 'Added to cart'),
(24, 15, 4, 'Added to cart'),
(74, 24, 1, 'Added to cart'),
(27, 0, 2, 'Added to cart'),
(28, 27, 1, 'Added to cart'),
(29, 27, 2, 'Added to cart'),
(31, 0, 3, 'Added to cart'),
(32, 23, 14, 'Added to cart'),
(33, 23, 2, 'Added to cart'),
(34, 23, 3, 'Added to cart'),
(35, 0, 1, 'Added to cart'),
(63, 1, 6, 'Added to cart'),
(62, 1, 1, 'Added to cart'),
(64, 1, 2, 'Added to cart'),
(67, 5, 2, 'Added to cart'),
(68, 5, 3, 'Added to cart');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
