-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 11:36 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$23VuFKXVhY0JfwHlkyvYT.QDWyRBatkP8uLEORqM8b/J43zy1DR3.');

-- --------------------------------------------------------

--
-- Table structure for table `food_history`
--

CREATE TABLE `food_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `food_id` int(11) DEFAULT NULL,
  `calories` double DEFAULT 0,
  `type` enum('breakfast','lunch','dinner','') DEFAULT NULL,
  `qty` int(11) DEFAULT 0,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nutrients`
--

CREATE TABLE `nutrients` (
  `id` int(11) NOT NULL,
  `type` varchar(500) DEFAULT NULL,
  `qty` double DEFAULT 0,
  `calories_no` double DEFAULT 0,
  `fats` int(10) NOT NULL,
  `protein` int(10) NOT NULL,
  `carb` int(10) NOT NULL,
  `hint` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nutrients`
--

INSERT INTO `nutrients` (`id`, `type`, `qty`, `calories_no`, `fats`, `protein`, `carb`, `hint`) VALUES
(2, 'eggs', 1, 90, 0, 0, 0, ''),
(3, 'pasta', 100, 300, 5, 10, 5, 'small egg');

-- --------------------------------------------------------

--
-- Table structure for table `nutrients_recom`
--

CREATE TABLE `nutrients_recom` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nutrients_recom`
--

INSERT INTO `nutrients_recom` (`id`, `title`, `text`, `img`) VALUES
(3, 'dss', 'dsds', 'uploads/nutrientsRecommendation/3420046466.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE `workouts` (
  `id` int(11) NOT NULL,
  `type` varchar(500) DEFAULT NULL,
  `time` double DEFAULT 0,
  `burned_calories` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`id`, `type`, `time`, `burned_calories`) VALUES
(0, '41dsxc', 2121, 3232);

-- --------------------------------------------------------

--
-- Table structure for table `workouts_recom`
--

CREATE TABLE `workouts_recom` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workouts_recom`
--

INSERT INTO `workouts_recom` (`id`, `title`, `text`, `img`) VALUES
(3, 'dsds', 'dsds', 'uploads/workoutRecommendation/3420046640.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `workout_history`
--

CREATE TABLE `workout_history` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `workout_id` int(11) DEFAULT NULL,
  `calories` double DEFAULT 0,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_history`
--
ALTER TABLE `food_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_user_id` (`user_id`),
  ADD KEY `history_food_id` (`food_id`);

--
-- Indexes for table `nutrients`
--
ALTER TABLE `nutrients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrients_recom`
--
ALTER TABLE `nutrients_recom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workouts_recom`
--
ALTER TABLE `workouts_recom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout_history`
--
ALTER TABLE `workout_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_history`
--
ALTER TABLE `food_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nutrients`
--
ALTER TABLE `nutrients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nutrients_recom`
--
ALTER TABLE `nutrients_recom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workouts_recom`
--
ALTER TABLE `workouts_recom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workout_history`
--
ALTER TABLE `workout_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_history`
--
ALTER TABLE `food_history`
  ADD CONSTRAINT `history_food_id` FOREIGN KEY (`food_id`) REFERENCES `nutrients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
