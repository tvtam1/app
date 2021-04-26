-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--
CREATE DATABASE `shopee`;

USE `shopee`;

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Nike', 'Nike', 152.00, './assets/products/assfoo1.png', '2020-03-28 11:08:57'), -- NOW()
(2, 'Adidas', 'Adidas', 152.00, './assets/products/nikerun2.png', '2020-03-28 11:08:57'),
(3, 'Bitis', 'Bitis', 152.00, './assets/products/nikerun1.png', '2020-03-28 11:08:57'),
(4, 'Puma', 'Puma', 152.00, './assets/products/assrun2.png', '2020-03-28 11:08:57'),
(5, 'Vans', 'Vans', 152.00, './assets/products/assrun3.png', '2020-03-28 11:08:57'),
(5, 'Vans', 'Vans', 152.00, './assets/products/assrun3.png', '2020-03-28 11:08:57')
-- (6, 'Redmi', 'Redmi Note 8', 122.00, './assets/products/6.png', '2020-03-28 11:08:57'),
-- (7, 'Redmi', 'Redmi Note 9', 122.00, './assets/products/8.png', '2020-03-28 11:08:57'),
-- (8, 'Redmi', 'Redmi Note', 122.00, './assets/products/10.png', '2020-03-28 11:08:57'),
-- (9, 'Samsung', 'Samsung Galaxy S6', 152.00, './assets/products/11.png', '2020-03-28 11:08:57'),
-- (10, 'Samsung', 'Samsung Galaxy S7', 152.00, './assets/products/12.png', '2020-03-28 11:08:57'),
-- (11, 'Apple', 'Apple iPhone 5', 152.00, './assets/products/13.png', '2020-03-28 11:08:57'),
-- (12, 'Apple', 'Apple iPhone 6', 152.00, './assets/products/14.png', '2020-03-28 11:08:57'),
-- (13, 'Apple', 'Apple iPhone 7', 152.00, './assets/products/15.png', '2020-03-28 11:08:57')
;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Dumping data for table `user`
--

-- INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
-- (1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
-- (2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `gender`, `password`, `phone`, `address`, `register_date`) VALUES
(1, 'Jenny', 'Keitley', 'jkeitley0@google.cn', 'Female', 'LcIxV08xyTc', '7146191393','82 Summit Place', '2020-03-28 13:07:17'),
(2, 'Giorgio', 'McAlroy', 'gmcalroy2@patch.com', 'Male', 'BBISEbO09ZN', '1081529322','82 Summit Place','2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);
  
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
