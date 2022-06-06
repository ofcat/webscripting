-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2022 at 05:10 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `img_path` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img_path`, `rating`) VALUES
(6, 'Fish Lunch Box', 'Grilled salmon with rice and steamed borkkolinis.', 18.99, '../img/Fish.JPG', 8),
(7, 'Chicken Lunch Box', 'Grilled chicken breast with avocado and cucumber salad. ', 16.99, '../img/Meat.JPG', 7),
(8, 'Spinach Salad', 'Spinach salad with walnuts, cucumber, radish, blueberries and avocado. ', 10.99, '../img/Vegetarian.JPG', 9),
(9, 'Grilled Vegetables', 'Grilled sweet potato, asparagus, avocado. Fresh berries. ', 11.99, '../img/Vegan.JPG', 9),
(12, 'Test', 'its expensive machine', 106, 'here', 5),
(14, 'new', 'new', 1222212, 'newnew', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `notes` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Austria',
  `city` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Vienna',
  `zipcode` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pnumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `notes`, `country`, `city`, `zipcode`, `email`, `password`, `pnumber`) VALUES
(1, 'John', 'Doe', 'City Centre', 'likes pizza', 'Austria', 'Vienna', 1010, 'john@mail.com', '123123123', 663123),
(2, 'Peter', 'Doe', 'U3', 'likes drinking water', 'Austria', 'Vienna', 1021, 'Peter@mail.com', '123', 663123),
(14, 'Seb', 'Doe', 'U3', 'likes Pepsi', 'Austria', 'Vienna', 1021, 'Peter@mail.com', '123', 663123),
(16, 'admin', 'admin', 'admin', 'admin', 'Austria', 'Vienna', 1010, 'admin', '123', 663123),
(17, 'test', 'test', 'test', 'test', 'Austria', 'Vienna', 1010, 'test', '123', 123),
(24, 'reg', 'reg', 'ere', 'ere', 'Austria', 'Vienna', 21312, 'reg@mail.com', '123456', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
