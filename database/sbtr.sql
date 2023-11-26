-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2023 at 05:33 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbtr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$dS7Z1cq1lm52fJXpR7EtSuCB5Gk9sbjbQVqH5TH6Sb.SnHoJpN3zC');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int NOT NULL,
  `category` varchar(50) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `category`, `filename`) VALUES
(5, 'hallways', 'couloir100.jpg'),
(6, 'bathrooms', 'toilette100.jpg'),
(7, 'bathrooms', 'toilette101.jpg'),
(8, 'bathrooms', 'toilette102.jpg'),
(9, 'kitchens', 'cuisine102.jpg'),
(10, 'kitchens', 'cuisine103.jpg'),
(11, 'bedrooms', 'chambre.jpg'),
(12, 'bathrooms', 'baignoire100.jpg'),
(13, 'bathrooms', 'baignoire103.jpg'),
(14, 'bathrooms', 'toilette104.jpg'),
(15, 'bathrooms', 'toilettes103.jpg'),
(16, 'bedrooms', 'chambre102.jpg'),
(17, 'bedrooms', 'chambre104.jpg'),
(18, 'kitchens', 'cuisine104.jpg'),
(19, 'kitchens', 'cuisine105.jpg'),
(20, 'hallways', 'couloir101.jpg'),
(21, 'hallways', 'couloir102.jpg'),
(22, 'hallways', 'couloir1021.jpg'),
(23, 'hallways', 'couloir1022.jpg'),
(24, 'hallways', 'cuisine1023.jpg'),
(25, 'kitchens', 'cuisine.jpg'),
(26, 'bathrooms', 'douche100.jpg'),
(27, 'bathrooms', 'douche101.jpg'),
(28, 'bathrooms', 'douche102.jpg'),
(29, 'bathrooms', 'douche103.jpg'),
(30, 'bathrooms', 'douche104.jpg'),
(31, 'bathrooms', 'douche105.jpg'),
(32, 'hallways', 'couloir101.jpg'),
(33, 'hallways', 'couloir102.jpg'),
(34, 'hallways', 'couloir1021.jpg'),
(35, 'hallways', 'couloir1022.jpg'),
(36, 'kitchens', 'cuisine121.jpg'),
(37, 'kitchens', 'cuisine1023.jpg'),
(38, 'bathrooms', 'douche106.jpg'),
(39, 'kitchens', 'cuisine105.jpg'),
(40, 'kitchens', 'cuisine107.jpg'),
(41, 'kitchens', 'cuisine110.jpg'),
(42, 'kitchens', 'cuisine111.jpg'),
(43, 'kitchens', 'cuisine112.jpg'),
(44, 'kitchens', 'cuisine113.jpg'),
(45, 'kitchens', 'cuisine114.jpg'),
(46, 'kitchens', 'cuisine115.jpg'),
(47, 'kitchens', 'cuisine116.jpg'),
(48, 'lighting', 'eclairage101.jpg'),
(49, 'lighting', 'eclairage102.jpg'),
(50, 'lighting', 'eclairage103.jpg'),
(51, 'lighting', 'eclairage104.jpg'),
(52, 'lighting', 'eclairage105.jpg'),
(53, 'carpentries', 'menuiserie.jpg'),
(54, 'carpentries', 'menuiserie100.jpg'),
(55, 'carpentries', 'menuiserie102.jpg'),
(56, 'carpentries', 'menuiserie103.jpg'),
(57, 'carpentries', 'menuiserie104.jpg'),
(58, 'living-rooms', 'salon100.jpg'),
(59, 'living-rooms', 'salon101.jpg'),
(60, 'living-rooms', 'salon102.jpg'),
(61, 'living-rooms', 'salon103.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `quote_id` int NOT NULL,
  `client_id` int DEFAULT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `mail_address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `surface` int DEFAULT NULL,
  `society` varchar(50) DEFAULT NULL,
  `work_type` text,
  `work_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `submission_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `testimony_id` int NOT NULL,
  `client_id` int DEFAULT NULL,
  `comment` text,
  `testimony_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`quote_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`testimony_id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `quote_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `testimony_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quote`
--
ALTER TABLE `quote`
  ADD CONSTRAINT `quote_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `testimony`
--
ALTER TABLE `testimony`
  ADD CONSTRAINT `testimony_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
