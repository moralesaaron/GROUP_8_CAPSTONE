-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 04:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `com2`
--

CREATE TABLE `com2` (
  `id` int(11) NOT NULL,
  `pcnum` varchar(3) NOT NULL,
  `status` varchar(60) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `com3`
--

CREATE TABLE `com3` (
  `id` int(11) NOT NULL,
  `pcnum` varchar(3) NOT NULL,
  `status` varchar(60) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comas`
--

CREATE TABLE `comas` (
  `id` int(11) NOT NULL,
  `pcnum` varchar(5) NOT NULL,
  `status` varchar(60) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `token` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comas`
--

INSERT INTO `comas` (`id`, `pcnum`, `status`, `note`, `token`) VALUES
(1, 'PC1', 'Working', '', 'KumWaTiob1Dt9KMBazX3Jtd3mi7jbocHWZdILAAovPVGcwmSmValHYUU9dtP'),
(5, 'PC2', 'Working', '', 'S8kW97bgoFdO4GgZtgO2As8YmiBGDV8DsMG7Qpou3R4PtrJ6urw2e1aQo1dr'),
(6, 'PC3', 'Working', '', 'oUdm5toGTd6jKdeVXNelhJXQ0qNmYZprUMFIZWwyJIrKynXlpkj0HtkWDaBB'),
(7, 'PC4', 'Working', '', 'xSBkw8FfG6yP59srrlgTh2v2gSH1h2wRdDkRqV5uvhlqPxdaQGZNsHJHBRDg'),
(8, 'PC5', 'Working', '', 'UfBJ9y5kRRkSYVRISzHF8Y3jFDrW7X6JFDGJL3z0Okl2I3V9aMDkBGd7fHJQ'),
(9, 'PC6', 'Working', '', 'jQ4S2xya190uxgUKunEHtHj9GwYolQyTUddslPFQZdbMzn8H84k1ALNHZ8gg'),
(10, 'PC7', 'Working', '', 'NYOcx9uyZfz8n5UaOI9PmxuHc5jzksASkLdY3qdZzfuDtDFpJRXk6KpX2lvK'),
(11, 'PC8', 'Under Maintanance', '', 'kB9xI2jzDAHHt9ISyBMU2KoWI7agryISK7bk16iiFiTKSs1DOAf1cxt7wScs'),
(12, 'PC9', 'Not Working', '', 'FQMl4yVmi74Hj58EpwEBGhGpfwQBrpxp5UewX1ofynuUv1l7nioWBFcPphmF'),
(13, 'PC10', 'Working', '', 'q5La5n8twrXq66SyysJmB7mf8cY62OZkvqLqAjLuzPWFGuojZjLZd6FYHIRh');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `bpc_id` varchar(10) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `year` varchar(1) NOT NULL,
  `section` varchar(1) NOT NULL,
  `clnum` varchar(1) NOT NULL,
  `pcnum` varchar(5) NOT NULL,
  `info` varchar(255) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `token` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `bpc_id`, `firstname`, `lastname`, `year`, `section`, `clnum`, `pcnum`, `info`, `image`, `token`) VALUES
(7, 'MA21012198', 'Aaron', 'Morales', '3', 'F', 'A', 'PC9', 'Power supply', NULL, 'j8yXxtNpwSQjeDj2Ee3q5ipInf8oeDQTTtXfNpABoV9A3RQignVbMvlGMnLZ');

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
  `token` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `image`, `token`) VALUES
(1, 'Aaron', 'Morales', 'aaron@gmail.com', '$2y$10$z8MO3S1/zb3bKLexIPju/.CvIx7SqcMitU88TlAbtVxssc4Skqbt2', 'assets/images/FB_IMG_1645969110914.jpg', 'BSLsJI7LaFwgc3frqlJob87Ow9aSKqe7AL4mip3lK78Eit95mYFscydplrAc'),
(3, 'Kaede', 'Hondo', 'ede@gmail.com', '$2y$10$yfjHSLoVUZB.AtcG3X392eV1/FpBBE.4FfqKZRD5uvKZai/5qL9pO', 'assets/images/20220605_145115.jpg', 'p8DGjUsjemKtvYWlTLKgDpoR4ge6Vux5WawBKR1Xrytgn9084mVGqTMODRWr'),
(4, 'Test', 'Testing', 'test@gmail.com', '$2y$10$2YxjitEGL7t0cwhylLeZ3ufsEH/kXCOHjn.MJiCWIYuz7cSxtlukm', 'assets/images/20230726_194543.jpg', '8Zm8AuefbUBsSEOfj60NUDZ3Su902kYAcjZDWrTo3lY9J4iX6kvgh4e8Xilz'),
(5, 'Hina', 'Youmiya', 'hina@gmail.com', '$2y$10$utL79V.Gs9pnPnwqCIxRIOCjvkXhMIS7umxAtR3wP5zP./Do1SXnK', 'assets/images/FB_IMG_1693822840806.jpg', 'sr5QjgEx4mHViU1R7zLZW2yZa3ezdslMkrlFNVb6QdxI3OkH5PnQsGSWIUa2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com2`
--
ALTER TABLE `com2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com3`
--
ALTER TABLE `com3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comas`
--
ALTER TABLE `comas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `com2`
--
ALTER TABLE `com2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com3`
--
ALTER TABLE `com3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comas`
--
ALTER TABLE `comas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
