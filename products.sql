-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2021 at 12:30 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `achellys_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `thumbnail`, `images`) VALUES
(1, 'Kitten Sweater', 85.00, 'Knit', 'This sweater is so colorful and cute.', 'images/kitten_1.jpg', 'images/kitten_1.jpg,images/kitten_2.jpg,images/kitten_3.jpg,'),
(2, 'Queens jacket', 150.00, 'Jacket', 'This jacket is warm to wear in winter.', 'images/queens_1.jpg', 'images/queens_1.jpg,images/queens_2.jpg,images/queens_3.jpg,'),
(3, 'Evergreen jacket', 120.00, 'jacket', 'This jacket will be your everyday jacket.', 'images/evergreen_1.jpg', 'images/evergreen_1.jpg,images/evergreen_2.jpg,images/evergreen_3.jpg'),
(4, 'Bliss jacket', 136.00, 'jacket', 'This jacket is very unique.', 'images/bliss_1.jpg', 'images/bliss_1.jpg,images/bliss_2.jpg,images/bliss_3.jpg'),
(5, 'Paris sweater', 60.00, 'knit', 'This sweater is made of fabric from Paris. ', 'images/paris_1.jpg', 'images/paris_1.jpg,images/paris_2.jpg,images/paris_3.jpg'),
(6, 'love sweater', 45.00, 'knit', 'This sweater is lovely as its name.', 'images/love_1.jpg', 'images/love_1.jpg.images/love_2.jpg,images/love_3.jpg'),
(7, 'Dream skirt', 60.00, 'skirt', 'This is made of leather and will make you look chic.', 'images/dream_1.jpg', 'images/dream_1.jpg,images/dream_2.jpg,images/dream_3.jpg'),
(8, 'Camille skirt', 77.00, 'skirt', 'This skirt will make you look lovely.', 'images/camille_1.jpg', 'images/camille_1.jpg,images/camille_2.jpg,images/camille_3.jpg'),
(9, 'Coco skirt', 55.00, 'skirt', 'This skirt is a slim-fit.', 'images/coco_1.jpg', 'images/coco_1.jpg,images/coco_2.jpg,images/coco_3.jpg'),
(10, 'Nina jogger pants', 79.00, 'Pants', 'This pants will be your favorite pants.', 'images/nina_1.jpg', 'images/nina_1.jpg,images/nina_2.jpg,images/nina_3.jpg'),
(11, 'Sierra jeans', 100.00, 'pants', 'This is high-wasted jeans.', 'images/sierra_1.jpg', 'images/sierra_1.jpg,images/sierra_2.jpg,images/sierra_3.jpg'),
(12, 'Jolly pants', 0.00, 'pants', 'This is a loose-fit.', 'images/jolly_1.jpg', 'images/jolly_1.jpg,images/jolly_2.jpg,images/jolly_3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
