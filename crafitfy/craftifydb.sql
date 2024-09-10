-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 مايو 2024 الساعة 18:28
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craftifydb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_fname` varchar(50) DEFAULT NULL,
  `customer_lname` varchar(50) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_password`) VALUES
(3, 'Alanoud', 'Binrashoud', '442013968@sm.imamu.edu.sa', '$2y$10$tDyI.sH0dLvlrwT6GXZFkuActKjf3pxLkaVA.HyObMlrbJiKqg7fi'),
(5, 'Shaden', 'Alnajem', '442013618@sm.imamu.edu.sa', '$2y$10$yD0hC/V1dzL79tiNvR2JNemfW/I9EZj.EJmA8JwcuB75MyLUrl.fy'),
(6, 'Shahad', 'Alotaibi', '442014039@sm.imamu.edu.sa', '$2y$10$r3jt7Fjc8ndj5tGjvFnqJOiA/xdraQfuzT6AQ5UxpSy.qMt.erj5.'),
(7, 'Sarah', 'Alsunaidy', '442013032@sm.imamu.edu.sa', '$2y$10$zl3UR.ld8Se99Lkm927q1.vL68O.3ggbbOp7cT5KpBUZy8gQmnfeC'),
(10, 'Reem', 'Binabdulwahid', '442013288@sm.imamu.edu.sa', '$2y$10$iepQdEI6q6xwXry.dnY6g.PuFlUz/efnYtCxZzcJFMVBWyrCg9OIm');

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `customer_id`, `order_date`) VALUES
(1, 3, 3, '2024-05-11 15:54:48'),
(2, 1, 3, '2024-05-11 15:55:14');

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `product_discount` decimal(5,2) DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `product_discount`, `product_img`) VALUES
(1, 'Handmade Necklace', 'A beautiful handmade necklace', 499.00, 0.10, 'assets/imgs/necklace.jpg'),
(2, 'Ceramic Vase', 'A unique handmade ceramic vase', 600.00, 0.20, 'assets/imgs/vase.jpg'),
(3, 'Wooden Cutting Board', 'A high-quality handmade cutting board', 570.00, 0.18, 'assets/imgs/cuttingboard.jpg'),
(4, 'Zinc Anchor Bucket', 'The bucket is quite powerful, which will help you to organize things professionally. It is made of zinc, and the finishing is 100% of high-quality iron', 550.00, 0.25, 'assets/imgs/bucket1.jpg'),
(5, 'Set of 3 Grey and White Ice Buckets', 'Grey And White Iron Buckets.', 850.00, 0.30, 'assets/imgs/bucket2.jpg'),
(6, 'Gold Tea Candle Lights', 'Place this golden-colored brass plated tea light that burns on high-quality wax and prefers candlelight dinner with your dear and loved ones.', 750.00, 0.20, 'assets/imgs/candle1.jpg'),
(7, 'Powder Coated Trunk Box', 'This gorgeous iron trunk box with powder coating will add a lavish look and feel to your room, along with keeping it organized.', 850.00, 0.30, 'assets/imgs/box1.jpg'),
(8, 'Modern Flower Vase', 'The intricate texture of this white-colored soft stone modern flowerpot makes it stand out among other décor items.', 750.00, 0.20, 'assets/imgs/vase2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
