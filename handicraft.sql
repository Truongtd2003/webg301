-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 12:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handicraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `hash_password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `hash_password`, `email`) VALUES
(1, 'John Doe', '0e39e52ed67e8d2d560029aedc856e1c2a446361b204ca33d41bc33843511a46', 'john.doe@gmail.com'),
(2, 'Jane Smith', '483e0fda89c8366a64f69327adab86755e4fe96c8df7ee716d3d66181e7cb2cb', 'jane.smith@gmail.com'),
(3, 'Alice Johnson', 'cd6bb7b4afef171249d94b9e78eb6918ee19953bb74a3c407272a770686c3e0a', 'alice.johnson@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `image_url`) VALUES
(1, 'Khay', 'category1_image_url.png'),
(2, 'Túi xách', 'category2_image_url.png'),
(3, 'Chao đèn', 'category3_image_url.png'),
(4, 'Hộp', 'category4_image_url.png'),
(5, 'Lồng bàn', 'category5_image_url.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `description`, `price`, `material`, `image_url`, `origin`) VALUES
(1, 1, 'Khay trà', NULL, 250000, 'Song guột', 'Khaytra.png', 'Việt Nam'),
(2, 1, 'Khay bánh mỳ', NULL, 80000, 'Tre', 'Khay bánh mỳ.png', 'Việt Nam'),
(3, 1, 'Khay sợi (Quai da)', NULL, 280000, 'Sợi và da thuộc', 'Khay sợi.png', 'Việt Nam'),
(4, 1, 'Khay đựng quần áo guột', NULL, 900000, 'Song guột', 'Khay đựng quần áo guột.png', 'Việt Nam'),
(5, 2, 'Túi xách cói quai da', NULL, 379000, 'Cói kèm quai da', 'quaida.png', 'Việt Nam'),
(6, 2, 'Túi xách tre quai mây', NULL, 199000, 'Tre và mây', 'Túi xách tre quai mây.png', 'Việt Nam'),
(7, 2, 'Túi mây Bé Bự', NULL, 700000, 'Guột', 'Túi mây Bé Bự.png', 'Việt Nam'),
(8, 3, 'Chao đèn Trúc San', NULL, 170000, 'Tre', 'Chao đèn Trúc San.png', 'Việt Nam'),
(9, 3, 'Chao đèn An Nhiên', NULL, 210000, 'Tre', 'Chao đèn An Nhiên.png', 'Việt Nam'),
(10, 3, 'Chao đèn An Nam', NULL, 200000, 'Tre', 'Chao đèn An Nam.png', 'Việt Nam'),
(11, 3, 'Chao đèn Mộc Miên', NULL, 180000, 'Tre', 'Chao đèn Mộc Miên.png', 'Việt Nam'),
(12, 3, 'Chao đèn Túc Mạch', NULL, 210000, 'Tre', 'Chao đèn Túc Mạch.png', 'Việt Nam'),
(13, 4, 'Hộp chè nan bọng', NULL, 80000, 'Tre', 'Hộp chè nan bọng.png', 'Việt Nam'),
(14, 4, 'Hộp giấy ăn tròn', NULL, 280000, 'Guột', 'Hộp giấy ăn tròn.png', 'Việt Nam'),
(15, 4, 'Hộp tre nan bọng', NULL, 70000, 'Tre', 'Hộp tre nan bọng.png', 'Việt Nam'),
(16, 4, 'Hộp giấy ăn chữ nhật', NULL, 320000, 'Guột', 'Hộp giấy ăn chữ nhật.png', 'Việt Nam'),
(17, 4, 'Hộp tre hoa thị tròn', NULL, 220000, 'Tre', 'Hộp tre hoa thị tròn.png', 'Việt Nam'),
(18, 5, 'Lồng bàn nan nghiêng (Kèm mâm)', NULL, 165000, 'Tre', 'Lồng bàn nan nghiêng (Kèm mâm).png', 'Việt Nam'),
(19, 5, 'Lồng bàn có màn che chữ nhật', NULL, 140000, 'Tre', 'Lồng bàn có màn che chữ nhật.png', 'Việt Nam'),
(20, 5, 'Lồng bàn vuông đan hoa thị', NULL, 400000, 'Tre', 'Lồng bàn vuông đan hoa thị.png', 'Việt Nam'),
(21, 5, 'Lồng bàn có màn che tròn', NULL, 140000, 'Tre', 'Lồng bàn có màn che tròn.png', 'Việt Nam'),
(22, 5, 'Lồng bàn tròn đan hoa thị (Kèm mâm)', NULL, 250000, 'Tre', 'Lồng bàn tròn đan hoa thị (Kèm mâm).png', 'Việt Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
