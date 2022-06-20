-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 20. Jun 2022 um 12:13
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `webdb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `Zeitpunkt` date NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `orders`
--

INSERT INTO `orders` (`Id`, `Zeitpunkt`, `UserId`) VALUES
(1, '2022-06-14', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `order_contains_product`
--

CREATE TABLE `order_contains_product` (
  `Id` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `order_contains_product`
--

INSERT INTO `order_contains_product` (`Id`, `OrderId`, `ProductId`, `Amount`) VALUES
(1, 1, 6, 2),
(2, 1, 7, 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
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
-- Daten für Tabelle `products`
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
-- Tabellenstruktur für Tabelle `users`
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
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `notes`, `country`, `city`, `zipcode`, `email`, `password`, `pnumber`) VALUES
(1, 'John', 'Doe', 'City Centre', 'likes pizza', 'Austria', 'Vienna', 1010, 'john@mail.com', '123123123', 663123),
(2, 'Peter', 'Doe', 'U3', 'likes drinking water', 'Austria', 'Vienna', 1021, 'Peter@mail.com', '123', 663123),
(14, 'Seb', 'Doe', 'U3', 'likes Pepsi', 'Austria', 'Vienna', 1021, 'Peter@mail.com', '123', 663123),
(16, 'admin', 'admin', 'admin', 'admin', 'Austria', 'Vienna', 1010, 'admin', '123', 663123),
(17, 'test', 'test', 'test', 'test', 'Austria', 'Vienna', 1010, 'test', '123', 123),
(24, 'reg', 'reg', 'ere', 'ere', 'Austria', 'Vienna', 21312, 'reg@mail.com', '123456', 123);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Indizes für die Tabelle `order_contains_product`
--
ALTER TABLE `order_contains_product`
  ADD PRIMARY KEY (`Id`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `order_contains_product`
--
ALTER TABLE `order_contains_product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
