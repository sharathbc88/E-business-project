-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2017 at 08:18 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jc448750`
--

-- --------------------------------------------------------

--
-- Table structure for table `jewery`
--

CREATE TABLE `jewelry` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `categories` char(30) NOT NULL,
  `price` float(4,2) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jewery`
--

INSERT INTO `jewery` (`id`, `name`, `categories`, `price`, `description`) VALUES
(1, 'Sitara Ear Ring', 'EARRINGS', 99.00, 'The Sitara Ear-ring is perfect for perking up an evening ensemble. We are thinking velvet gowns, fusion sarees or a rich silk saree. And you? This piece of jewelry comes with the Voylla assurance of quality and durability.'),
(2, 'Men S Dual Plated Link Bracelet', 'Bracelets', 34.90, '\"From the House of Voylla, India’s largest fashion jewelry brand comes DARE, a line of handcrafted accessories for the modern Indian man. \"'),
(3, 'Pearl Beaded Multi String Bracelet', 'BRACELETS', 44.90, 'Give your style a trendy look by adorning this layered bracelet, which has been fashioned out of brass. This classic piece has been embellished with white pearls and given a yellow gold plating for the maximum brilliance.'),
(4, 'Elegant Earrings With Metallic Drops', 'EARRINGS', 64.90, 'Adorn your ears with this amazing pair of earrings that will lend you a striking look.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jewery`
--
ALTER TABLE `jewery`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
