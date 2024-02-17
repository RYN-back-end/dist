-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 01:19 PM
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
-- Database: `dist`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `active_level` varchar(250) DEFAULT NULL,
  `goal` varchar(500) DEFAULT NULL,
  `bmr` varchar(50) DEFAULT NULL,
  `weigh` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `age` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `sex`, `active_level`, `goal`, `bmr`, `weigh`, `height`, `age`) VALUES
(2, 'admin@admin.com', 'admin@admin.com', '$2y$10$/4L3XVNiPPin5HjubvAnFuUI2ACsYyBN3X0mI4YfyXAqV9pZ/Cjg6', 'Male', 'NotVeryActive 1.2', 'loseWeight', '1638', '90', '15', 0),
(3, 'test@test.com', 'test@test.com', '$2y$10$dJneggEl7iE3Piz7rZRyVOsYrdhtxpGH/Wvh5cXfpHXr6g5XqflOq', 'Male', 'LightlyActive 1.375', 'maintainWeight', '41932', '2232', '15', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
