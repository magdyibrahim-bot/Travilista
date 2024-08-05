-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 09:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travilista`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `adver_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `adver_name`, `image`, `description`, `link`) VALUES
(1, 'DIDI', 'images/didi.png', 'Experience the best ride-sharing service. Download the app now and enjoy your first ride for free!', 'https://web.didiglobal.com/eg/');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `quantity`) VALUES
(60, 26, 1),
(61, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `total`, `order_date`) VALUES
(1, 'Magdy', 'abc123@gmail.com', 0.00, '2024-07-30 22:01:56'),
(2, 'MAgd', 'abc123@gmail.com', 0.00, '2024-07-30 23:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `category`, `about`) VALUES
(14, 'The Grand Plaza Hotel ', 'Alexandria', 160, 'images/hotel-1.jpg', 'hotels', 'The hotel is a luxury hotel located in the center of Alexandria. It offers excellent service and a luxurious experience. 24-hour reception service is available. Waiting for late registration for the convenience of reception.'),
(15, 'Baron Palms Resort\r\n', 'Sharm Al-sheikh', 220, 'images/hotel-2.jpg', 'hotels', 'All-inclusive resort with private beach and excellent leisure facilities.'),
(16, 'Hacienda Bay\r\n', 'Marina', 250, 'images/hotel-3.jpg', 'hotels', 'Hacienda Bay, one of the most beautiful villages on the North Coast, the most beautiful and ideal place where azure waters intersect with clear skies, and crystal sandy beaches provide an exceptional environment for escaping reality. Hacienda is the ideal place for the concept of a new coastal life full of entertainment and fun.'),
(17, 'Marassi Beach Resort', 'Marina', 270, 'images/hotel-4.jpg', 'hotels', 'El Alamein Hotel is a wonderful historical haven located on the picturesque beaches of Egypt\'s northern coast. It is considered an outlet of fresh air for everyone looking for relaxation and renewal of vitality and activity'),
(18, 'Albatros Palace Resort', 'Hurghada', 210, 'images/hotel-5.jpg', 'hotels', ' Discover unparalleled luxury at Pikalbatros Palace Resort With its prime waterfront location, private beach and stunning views, this oasis provides the perfect escape. Immerse yourself in the beauty of the Sinai Peninsula, with world-famous diving and snorkeling sites nearby. You can relax and unwind in the pool or lagoon or explore the magnificent coral reefs of the Red Sea.'),
(19, 'Kempinski Hotel Soma Bay', 'Ain-Al-Sokhna', 250, 'images/hotel-5.jpg', 'hotels', ' Kempinski Hotel Soma Bay offers exclusive waterfront accommodation with views of one of Soma Bay\'s most beautiful beaches. It also contains several swimming pools in the middle of lagoons, a quiet river, a fitness center and a spa with a hot tub, sauna and massage facilities.'),
(20, 'Catacombs of kom el shoqaf', 'Alexandria', 100, 'images/trip-1.jpg', 'trips', 'The site includes a series of underground chambers and passages, which were carved into the rock. The tombs are an important example of the cultural and artistic fusion that took place in Alexandria during the Roman era.\r\n'),
(21, 'Rocket Beach', 'Ain-Al_Shokna', 150, 'images/trip-2.jpg', 'trips', 'You can say that Rocket Beach El Nada Ain Sokhna is one of the most beautiful beaches of Ain Sokhna and the most equipped with modern facilities that provide you with all amenities. Rocket Beach is also one of the beaches of Ain Sokhna for the Armed Forces. The beach is divided into several areas to ensure the privacy of everyone inside the beach. There is an area for families, another for water games for adults and children, and another for recreation and sitting directly in front of the Ain So'),
(22, 'Ain Sokhna Recreational Trip', 'Ain-Al-Sokhna', 750, 'images/trip-3.jpg', 'trips', 'Enjoy a full day of recreation and relaxation on the beaches of Ain Sokhna, in addition to water activities such as swimming and snorkeling. The trip includes a sumptuous lunch and an open buffet.'),
(23, 'Chevrolet Lanus', 'Cairo', 600, 'images/car-1.jpg', 'transportations', 'An economical car often used for rental'),
(24, 'Go Bus', 'Egypt', 300, 'images/bus-1.jpg', 'transportations', 'Enjoy a comfortable and safe journey with Go Bus - travel with us to your destination with maximum comfort and security!'),
(26, 'SYM fiddle', 'Hurghada', 1460, 'images/bike-1.jpg', 'transportations', 'Renting motorcycles in Egypt offers a unique way to explore the country\'s diverse landscapes and historical sites.'),
(27, 'Alexista', 'Alexandria', 12000, 'images/trip-1.jpg', 'backage', 'Trip: \r\n-place: Catacombs of kom el shoqaf\r\n-price: 400 EGP\r\nhotel: \r\n-place: The Grand Plaza Hotel\r\n-duration: 2 days\r\n-price: 12200 EGP\r\nTransportation:\r\n- Type: Car\r\n-price: 500 EGP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(269, 'Magdy', 'ibrahim', 'magibra490@gmail.com', '$2y$10$Ci64wEmUfKNz638HeYAuM.RX8uUInK85ervE2OLD5R51wEUJwBiXe'),
(270, 'ahmed', 'Ibrahim', 'ahm123@gmail.com', '$2y$10$h3xWIaDcpMlNOq1MH9bwBe6w./LtlBUrL9dh7olhTagGGEqyJPU3S'),
(271, 'Magdy', 'Ibrahim', 'magibra123@gmail.com', '$2y$10$DnIZE1uzK1a6oEtu/tADk.R4Dqh1VXEDvF7zF5uaE184u4Jb.seIe'),
(272, 'Magdy', 'Afsha', 'afsha123@gmail.com', '$2y$10$22MYFut2Ed77aHovLp1oDumDMY6aIxGwDtRklR3zg8ZN9SqGjAtCu'),
(273, 'nader', 'zakarya', 'nader123@gmail.com', '$2y$10$1jT9uWLPp14ydIiQ3zqqA.RV62jEHHDsNJwXLQ6yZht8It0dM/1yS'),
(274, 'Magdy', 'Ibrahim', 'asd@gmail.com', '$2y$10$zAxdQ5jJhIyxstuKpI6gF.C7Um2wV.GdWvKGH/.LV3a.jUB1zNFcC'),
(275, 'rawan', 'ibrahim', 'magibra456@gmail.com', '$2y$10$gCZ6cPU5tL5jlDNtdwuh5.P3tt7gSjCWbbx1P1CqJ0KSdajQ4Hsfq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Test` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Test_1` (`order_id`),
  ADD KEY `Test_2` (`product_id`);

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
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `Test` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `Test_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Test_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
