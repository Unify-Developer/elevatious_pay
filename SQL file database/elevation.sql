-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 12:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elevation`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`id`, `email`, `token`, `created_at`) VALUES
(1, 'fatokiakolade@gmail.com', '548decda49124ff3466b7b5d87736ec8c4a6127bc2d2bf2c1770690c253cb3f8', '2024-04-11 13:10:41'),
(2, 'fatokiakolade@gmail.com', 'e08805fc514ab4e2f9c0d9ae4a3da5aabb419e6b115bff351550626aecc81519', '2024-04-11 13:19:11'),
(3, 'fatokiakolade@gmail.com', '6577e3542e66927bbf7b7ab02bfabb913f38204f7af74259f16d9926d7313524', '2024-04-11 13:20:21'),
(4, 'fatokiakolade@gmail.com', '2bd1bce25aeb71c96a2bae204a9781a7c8bcf4502a52b4e45cce0999e2d15edd', '2024-04-15 10:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `referral` varchar(15) NOT NULL,
  `phone_number` int(200) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirm_password` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `full_name`, `email_address`, `user_name`, `referral`, `phone_number`, `password`, `confirm_password`, `created_at`) VALUES
(18, 'Fatoki Akolade Abraham', 'fatokiakolade@gmail.com', 'unify', 'nobody', 2147483647, 'password', 'password', '2024-04-29 13:12:05'),
(19, 'Mr nobody', 'ibilojuvic@gmail.com', 'somebody', 'dudu', 2147483647, '$2y$10$V3sG6Sly', '$2y$10$V3sG6Sly', '2024-04-29 13:12:05'),
(20, 'IBILOJU MERCY PHEBE', 'ibilojuphoebe@gmail.com', 'MARVEL Phoebe', 'Somebody', 1234, '$2y$10$fTFnSY9h', '$2y$10$fTFnSY9h', '2024-04-29 13:12:05'),
(21, 'Abdulkareem yekeen tunde', 'kareeemyekeentunde@gmail.com', 'kaytunz', 'unify', 2147483647, '$2y$10$2zpjnlpJ', '$2y$10$2zpjnlpJ', '2024-04-29 13:12:05'),
(22, 'Abdulkareem yekeen tunde', 'kareeemyekeentunde@gmail.com', 'kaytunz', 'unify', 2147483647, '$2y$10$qnjTAh3f', '$2y$10$qnjTAh3f', '2024-04-29 13:12:05'),
(23, 'Fatoki ImoleAyo Jeremiah', 'imolefatoki@gmail.com', 'imole', 'unify', 98182, '$2y$10$V8di72Bl', '$2y$10$V8di72Bl', '2024-04-29 13:13:26'),
(24, 'Fatoki ImoleAyo Jeremiah', 'imolefatoki@gmail.com', 'imole', 'unify', 98182, '$2y$10$9hcsGHpI', '$2y$10$9hcsGHpI', '2024-04-29 13:14:22'),
(25, 'Ibiloju Orinayo Mercy', 'orinayo@gmail.com', 'orinayo', 'somebody', 1234, '$2y$10$LeRk86LP', '$2y$10$LeRk86LP', '2024-04-29 13:17:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
