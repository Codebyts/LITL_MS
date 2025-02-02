-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2025 at 01:00 PM
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
-- Database: `litl_ms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `officer_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `officer_id`, `password`, `name`, `position`) VALUES
(1, '202425-01', '4709cc7a6effca7354d356049e921ade', 'Rheymark', 'President'),
(2, '202425-02', '4297f44b13955235245b2497399d7a93', 'Jaemie', 'Vice President'),
(3, '202425-03', '4297f44b13955235245b2497399d7a93', 'Samantha', 'Secretary');

-- --------------------------------------------------------

--
-- Table structure for table `help_desk`
--

CREATE TABLE `help_desk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `student_number` varchar(50) NOT NULL,
  `concern` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_list`
--

CREATE TABLE `member_list` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `student_number` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `mem_fee_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_list`
--

INSERT INTO `member_list` (`id`, `name`, `student_number`, `section`, `mem_fee_status`) VALUES
(1, 'Alexander Bennett', '2022-310-789', '1-1', 'paid'),
(2, 'Dominic Evans', '2022-555-890', '1-1', 'unpaid'),
(3, 'Frederick Harrison', '2022-150-234', '1-1', 'paid'),
(4, 'Harrison Sinclair', '2021-402-678', '1-2', 'paid'),
(5, 'Eleanor Fitzgerald', '2021-101-001', '1-2', 'paid'),
(6, 'Benjamin Carter', '2021-205-456', '1-2', 'paid'),
(7, 'Daniel Thompson', '2024-123-456', '2-1', 'unpaid'),
(8, 'Sophia Martinez', '2023-234-567', '2-1', 'unpaid'),
(9, 'Olivia Johnson', '2025-456-789', '2-1', 'unpaid'),
(10, 'William Scott', '2022-901-234', '1-1', 'paid'),
(11, 'Ava Lewis', '2023-890-12', '1-2', 'unpaid'),
(12, 'James Carter', '2024-789-012', '2-1', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `name`, `rating`) VALUES
(1, 'Sam', 5),
(2, 'Jaemie', 5),
(3, 'Sam', 3),
(4, 'Jaemie', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_desk`
--
ALTER TABLE `help_desk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_list`
--
ALTER TABLE `member_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `help_desk`
--
ALTER TABLE `help_desk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_list`
--
ALTER TABLE `member_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
