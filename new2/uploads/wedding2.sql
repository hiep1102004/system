-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2024 at 07:45 AM
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
-- Database: `wedding2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bill`
--

CREATE TABLE `tb_bill` (
  `id_bill` int NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bill_details`
--

CREATE TABLE `tb_bill_details` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `img` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `total` int NOT NULL,
  `soluong` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci
;

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int NOT NULL,
  `name_category` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci
;

-- --------------------------------------------------------

--
-- Table structure for table `tb_comments`
--

CREATE TABLE `tb_comments` (
  `id_comment` int NOT NULL,
  `content` text NOT NULL,
  `id_product` int NOT NULL,
  `id_user` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci
;

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id_contact` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `contact_date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci
;

-- --------------------------------------------------------

--
-- Table structure for table `tb_images_product`
--

CREATE TABLE `tb_images_product` (
  `id_image` int NOT NULL,
  `id_product` int NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci
;

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int NOT NULL,
  `tittle` text NOT NULL,
  `content` text NOT NULL,
  `date_post` date NOT NULL,
  `image_Url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci
;

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `id_product` int NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `price_product` varchar(255) NOT NULL,
  `description_product` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci
;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int NOT NULL,
  `name_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci
;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int NOT NULL,
  `name_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci
;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `image_user` text,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_unicode_ci
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Indexes for table `tb_bill_details`
--
ALTER TABLE `tb_bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tb_images_product`
--
ALTER TABLE `tb_images_product`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bill`
--
ALTER TABLE `tb_bill`
  MODIFY `id_bill` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_bill_details`
--
ALTER TABLE `tb_bill_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_comments`
--
ALTER TABLE `tb_comments`
  MODIFY `id_comment` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id_contact` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_images_product`
--
ALTER TABLE `tb_images_product`
  MODIFY `id_image` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
