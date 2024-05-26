-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 07:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval_by_company`
--

CREATE TABLE `approval_by_company` (
  `id` int(11) NOT NULL,
  `testing_product_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `testing_type` varchar(255) DEFAULT NULL,
  `testing_comp` varchar(255) DEFAULT NULL,
  `p_info` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `approval_by_cpri`
--

CREATE TABLE `approval_by_cpri` (
  `id` int(11) NOT NULL,
  `testing_product_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `testing_type` varchar(255) DEFAULT NULL,
  `testing_comp` varchar(255) DEFAULT NULL,
  `p_info` varchar(255) DEFAULT NULL,
  `company_verify` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_registrations`
--

CREATE TABLE `company_registrations` (
  `id` int(11) NOT NULL,
  `comp_name` varchar(225) DEFAULT NULL,
  `comp_address` varchar(255) DEFAULT NULL,
  `comp_pwd` varchar(255) DEFAULT NULL,
  `comp_city` varchar(255) DEFAULT NULL,
  `comp_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_id` varchar(225) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `comp_name` varchar(255) DEFAULT NULL,
  `p_info` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `published`
--

CREATE TABLE `published` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_info` varchar(255) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rejected_by_company`
--

CREATE TABLE `rejected_by_company` (
  `id` int(11) NOT NULL,
  `testing_product_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `testing_type` varchar(255) DEFAULT NULL,
  `testing_comp` varchar(255) DEFAULT NULL,
  `p_info` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reject_by_cpri`
--

CREATE TABLE `reject_by_cpri` (
  `id` int(11) NOT NULL,
  `testing_product_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `testing_type` varchar(255) DEFAULT NULL,
  `testing_comp` varchar(255) DEFAULT NULL,
  `p_info` varchar(255) DEFAULT NULL,
  `company_verify` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testing_request`
--

CREATE TABLE `testing_request` (
  `id` int(11) NOT NULL,
  `testing_product_id` varchar(225) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `testing_type` varchar(255) DEFAULT NULL,
  `testing_comp` varchar(255) DEFAULT NULL,
  `p_info` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testing_service`
--

CREATE TABLE `testing_service` (
  `id` int(11) NOT NULL,
  `testing_id` varchar(225) DEFAULT NULL,
  `testing_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_row`
--

CREATE TABLE `transfer_row` (
  `id` int(11) NOT NULL,
  `product_id` varchar(225) DEFAULT NULL,
  `testing_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `comp_name` varchar(255) DEFAULT NULL,
  `testing_type` varchar(255) DEFAULT NULL,
  `p_info` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_row_to_cpri`
--

CREATE TABLE `transfer_row_to_cpri` (
  `id` int(11) NOT NULL,
  `testing_product_id` varchar(225) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `testing_type` varchar(255) DEFAULT NULL,
  `testing_comp` varchar(255) DEFAULT NULL,
  `p_info` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval_by_company`
--
ALTER TABLE `approval_by_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approval_by_cpri`
--
ALTER TABLE `approval_by_cpri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_registrations`
--
ALTER TABLE `company_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `published`
--
ALTER TABLE `published`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejected_by_company`
--
ALTER TABLE `rejected_by_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reject_by_cpri`
--
ALTER TABLE `reject_by_cpri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing_request`
--
ALTER TABLE `testing_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing_service`
--
ALTER TABLE `testing_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer_row`
--
ALTER TABLE `transfer_row`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer_row_to_cpri`
--
ALTER TABLE `transfer_row_to_cpri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval_by_company`
--
ALTER TABLE `approval_by_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `approval_by_cpri`
--
ALTER TABLE `approval_by_cpri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_registrations`
--
ALTER TABLE `company_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `published`
--
ALTER TABLE `published`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rejected_by_company`
--
ALTER TABLE `rejected_by_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reject_by_cpri`
--
ALTER TABLE `reject_by_cpri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testing_request`
--
ALTER TABLE `testing_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testing_service`
--
ALTER TABLE `testing_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfer_row`
--
ALTER TABLE `transfer_row`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfer_row_to_cpri`
--
ALTER TABLE `transfer_row_to_cpri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
