-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 10:48 AM
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
-- Database: `mvc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `role` varchar(60) DEFAULT NULL,
  `token` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `image`, `role`, `token`) VALUES
(51, 'Abel', 'Palero', 'abel.palero@gmail.com', '$2y$10$5f3fuqTbJQjaozTV.wgaVewj9zVgl8CbiyKAdlJXPQfSx.RdtgPi.', NULL, 'Admin', NULL),
(88, 'John', 'Doe', 'jd@gmail.com', '$2y$10$iTzWmG9nPERpfJqI./NhQeKubqxB5spSMPWjNGlYGic4y/vTH9dre', 'assets/images/2.png', 'Staff', 'rk8JNrv0zoLb3nV6j06sx7lbkqAXBABYYwPYpvGiUIdnzFWVXPvjMR3XnzJ5'),
(89, 'Allen', 'Cruz', 'allen@gmail.com', '$2y$10$pNxSBzA33CRcv2.LSzqzWuJWon890M8tkJ9hSs8ESs2AFyNFjLOEO', 'assets/images/Damayang Filipino Movement Inc.png', 'Staff', 'Yqzl3qeQZtcJlSwQ4ASlFFzViMhInMk9sKwnpt2aiOekRR9VAWjoDDhqvF2b');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
