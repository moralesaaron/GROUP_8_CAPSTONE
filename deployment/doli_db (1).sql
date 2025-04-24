-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2025 at 09:08 AM
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
-- Database: `doli_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adms`
--

CREATE TABLE `adms` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL,
  `token` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adms`
--

INSERT INTO `adms` (`id`, `firstname`, `lastname`, `email`, `password`, `image`, `token`) VALUES
(1, 'Admin', 'Morales', 'admina@gmail.com', 'adminapass', '', ''),
(2, 'Jo', 'Admin', 'joad@gmail.com', '$2y$10$EfqiqjrU29f4VDOVzn/6K.EDNqw.xIvXBnLsa68I/wOPGiNiilm5S', '', 'MsdjjiEoll4whDOYWtPWxObo5HZ0Ud5hJdwNlDZP4X7BoAKH9OMZMXuVto3v');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `dorm_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `status` enum('pending','paid','declined','expired') DEFAULT 'pending',
  `applied_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expires_at` datetime DEFAULT NULL,
  `paid_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dorms`
--

CREATE TABLE `dorms` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `middlename` varchar(60) DEFAULT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `total_rooms` int(11) DEFAULT NULL,
  `available_rooms` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dorms`
--

INSERT INTO `dorms` (`id`, `user_id`, `firstname`, `middlename`, `lastname`, `name`, `address`, `city`, `province`, `description`, `total_rooms`, `available_rooms`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 18, NULL, NULL, NULL, 'The Test Dorm', '08 Day St.', 'Malolos', 'Bulacan', 'This is the my dorm description.', 7, 4, NULL, 'active', '2025-04-18 14:36:43', '2025-04-18 23:27:55'),
(2, 37, NULL, NULL, NULL, 'Dorm 2 Test', '123', 'MALOLOS', 'Barihan', 'asdfasdfasdf', 1, 1, NULL, 'inactive', '2025-04-18 15:11:30', '2025-04-18 23:11:30'),
(4, 18, NULL, NULL, NULL, 'test 3', '123', 'MALOLOS', 'Bulacan', 'test 3 descriptions', 1, 1, NULL, 'active', '2025-04-20 20:10:06', '2025-04-21 04:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `old_dorms_table`
--

CREATE TABLE `old_dorms_table` (
  `id` int(11) NOT NULL,
  `dormname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `old_dorms_table`
--

INSERT INTO `old_dorms_table` (`id`, `dormname`, `email`, `password`, `token`) VALUES
(1, 'Dormify', 'dormify@gmail.con', 'dormify', ''),
(3, 'Dorm2', 'dorm2@gmail.com', '$2y$10$F8uRJayolr.HcO2rG7vVyuCha68HO.yld5e3JF3YUIJ1AGjmDVVeq', 'Z9a9zL2RBeKTaiVyYjI5QVmXOVUREE9w0Uul34RZFm3ul7uTSZ6t9Knzahxc'),
(12, 'Dormify', 'domi@gmail.com', '$2y$10$CMvW8M.U0l2TtxwbJLnLFuGlMqiPpN5ITNIvBoiZAw/CxhIhR/5R2', 'cuLyZ0OfS5GT5SVAGoaQSpNj2npc3XoxhQ0UAslNNVLKZmPstbG2XrxV8rhm'),
(13, 'Bpc Dorm', 'bpcdorm@gmail.com', '$2y$10$Yi6bzDjgPVllEts0NXOF.u14ylWbVjT5JUATFkUoF0STrEOD0pXnW', 'bVznYRm5kHnltJAJSkViixceoGO52dmZBuw20yERwrjIrzu51QxhNODtkEYj'),
(14, 'DormBB', 'bb@gmail.com', '$2y$10$KifablD3mUNfhQ/4YbIJMeuR85x6Zqejr4XBBmL6kPEcrZZzTcmfO', 'faRkjd2dBrRLmsDAy2Y6kOok0lTHjZPAzBaJkV8WaR7NHAF1sJgSHMZcPPmy');

-- --------------------------------------------------------

--
-- Table structure for table `pendingapps`
--

CREATE TABLE `pendingapps` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `middlename` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `emfullname` varchar(80) NOT NULL,
  `emcontact` varchar(15) NOT NULL,
  `emaddress` varchar(100) NOT NULL,
  `emrelation` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL,
  `token` varchar(60) NOT NULL,
  `currentroom` varchar(255) NOT NULL,
  `topay` varchar(225) NOT NULL,
  `appstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendingapps`
--

INSERT INTO `pendingapps` (`id`, `firstname`, `middlename`, `lastname`, `address`, `contact`, `gender`, `emfullname`, `emcontact`, `emaddress`, `emrelation`, `email`, `password`, `image`, `token`, `currentroom`, `topay`, `appstatus`) VALUES
(10, 'Kuze', 'N/A', 'Masachika', 'Malolos, Bulacan', '09168061234', 'Male', 'Yuki Masachika', '09273136543', 'Malolos, Bulacan', 'Sister', 'kuze@gmail.com', '$2y$10$HkoGYfT4epzGBkMGWMUMtevfnWvJ0GGOsHxQ0qnv1wsIOr55gvkge', '', 'mkLYI41JhQ8EWVV46yoAWGfowtlPLTXV3LdhmKbQJRcHgG95yqZ0pkc42Ulx', '', '', ''),
(11, 'Kuze', 'N/A', 'Masachika', 'Malolos, Bulacan', '09168061234', 'Male', 'Yuki Masachika', '09273136543', 'Malolos, Bulacan', 'Sister', 'kuze@gmail.com', '$2y$10$uo8Jnu3/dvtqCz2Yt56p0uFtvoGpdhn5N.WmunbeNkHbOVSdbjj.y', '', 'tQIWxccKHIB4zXvTt9xySbSJjDJmz7lhaRvjTidhWMZT63du5FozcVHjKcVG', '', '', ''),
(12, 'test', 'tes', 'tes', 'Malolos, Bulacan', '09168061234', 'Male', 'adsasd', '09273136523', 'asdas', 'asdasd', 'bpc@gmail.com', '$2y$10$0L5iBxHe1CmHHfUaL9cOf.GzqQ3hMmHcCiWdlwzOCvFF/Rilw.7zS', '', '4bgVtKt8iuYsVq5uY1dwfXfr3sJfpmL6Zsa6QMeKknbSSoanS0Z7jJKah7mI', '', '', ''),
(13, 'Kuze', 'N/A', 'Masachika', 'Malolos, Bulacan', '09168061234', 'Male', 'Yuki Masachika', '09273136543', 'Malolos, Bulacan', 'Sister', 'kuze@gmail.com', '$2y$10$Lzvd5qLjtE/7RPcSPDYUn.JiPHGLGpSmZ1IRdrbDlJa.DHiLLKFY2', '', 'Vkxj7wU6Vj6M1z43EtARG3eMo9WFmpn1V0geIeJgpkaFtVUNX7GL16GpvlW1', '', '', 'Approved'),
(14, 'Juan', 'Dela', 'Cruz', 'Malolos, Bulacan', '09168061234', 'Male', 'Test', '09273136543', 'Malolos, Bulacan', 'Sister', 'juan@gmail.com', '$2y$10$pxwKNhEYkp9b1LUuw89jZOeAY96pnfPzRrW8QWgPO7RMpM7RKoBg2', '', 'TWJ95SjNgLsbuDTvPypdAVc6uvkYAqEGQd4Ochao7MBczgsADzl6eqSGzygf', '', '', 'Approved'),
(15, 'Kuze', 'N/A', 'Masachika', 'Malolos, Bulacan', '09168061234', 'Male', 'Yuki Masachika', '09273136543', 'Malolos, Bulacan', 'Sister', 'kuze@gmail.com', '$2y$10$vCejr6nbydlT/q2YbJ54muamkmxIZGxMuYngETbV2OrxBByf/EehK', '', 'frYJjKnGUznRDt1p6wrrbVJUheaBLQqYOOOBxGNxxpnlQgHTSDZzsLYzUkl7', '', '', 'Approved'),
(16, 'Kuze', 'N/A', 'Masachika', 'Malolos, Bulacan', '09168061234', 'Male', 'Yuki Masachika', '09273136543', 'Malolos, Bulacan', 'Sister', 'kuze@gmail.com', '$2y$10$0EVXD8jQiJTn61rxiW4mdOndZilov.JA3zWWblsLtS5jP6CFzbLoC', '', 'GI5YDNaPwL3LUw9S0v3ZhTnYPHn6xidDNx8iglef9ZrFoTU3jOdbXTfo87SV', '', '', 'Approved'),
(17, 'Kuze', 'N/A', 'Masachika', 'Malolos, Bulacan', '09168061234', 'Male', 'Yuki Masachika', '09273136543', 'Malolos, Bulacan', 'Sister', 'kuze@gmail.com', '$2y$10$2CPcn3q6DJFuTA/sFiF2e.qTB3qYuYjjagKrR6LG3GPAqLP8SihLC', '', 'mzhriMeqwStyeG5xsl8cPXxjV2pMujNHUy6LmVRkSK8hIPwRIoQSfO5GGWPT', '', '', ''),
(18, 'Kuze', 'N/A', 'Masachika', 'Malolos, Bulacan', '09168061234', 'Male', 'Yuki Masachika', '09273136543', 'Malolos, Bulacan', 'Sister', 'kuze@gmail.com', '$2y$10$7Vihln2qgJpSJoPU8/GFcO9.NZ3hgY8foYuDkw/ZQjZTM1Y.SOtT2', '', 'BXHZDiO0VxRtWIndFOBgsXGZVp5uAQHr5qzEn0f3DYfKi1Nso0ysrRs5hIeA', '', '', ''),
(19, 'Kuze', 'N/A', 'Masachika', 'Malolos, Bulacan', '09168061234', 'Male', 'Yuki Masachika', '09273136543', 'Malolos, Bulacan', 'Sister', 'kuze@gmail.com', '$2y$10$2mKYOii1xsKJmZmvq/duL.6jj/BH4DZm1IZA58as/17aWw92KqYj2', '', 'NJsj8141PJ5DZqXawh30i0Do9jpKEc7dl8oZder8opSNef6fBTUArFa4YrY5', '', '', ''),
(20, 'Kuze', 'N/A', 'Masachika', 'Malolos, Bulacan', '09168061234', 'Male', 'Yuki Masachika', '09273136543', 'Malolos, Bulacan', 'Sister', 'kuze@gmail.com', '$2y$10$k0DrM.v7oydL4ezDiyeobOtMDxcTuIuuOtTjJeUES6qVHgqSIdeFO', '', '7sn6DYavlEKjH9Qnc6MDVKwrA2i3uZKBK3mw6Fse8I758hsaSQjPrd2TFUQi', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `postings`
--

CREATE TABLE `postings` (
  `id` int(11) NOT NULL,
  `details` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `dorm` varchar(225) NOT NULL,
  `cost` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `placeholder` varchar(225) NOT NULL,
  `placeholder1` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roomposts`
--

CREATE TABLE `roomposts` (
  `id` int(11) NOT NULL,
  `details` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `dorm` varchar(225) NOT NULL,
  `cost` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(225) NOT NULL,
  `image` varchar(60) NOT NULL,
  `token` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomposts`
--

INSERT INTO `roomposts` (`id`, `details`, `location`, `dorm`, `cost`, `date`, `status`, `image`, `token`) VALUES
(16, '2LDK', 'Malolos', 'Dormify', '₱ 1700', '2024-12-16 00:04:40', 'Available', '', 'JumYTV3cctDjoK0yRI8o8Se3xoFY4GaPm3B96PA6AMwS4XSm3bTmTqNb5k6V'),
(17, '2LDK', 'Tokyo', 'Dormify', '₱ 123', '2024-12-16 00:08:14', 'Available', '', 'o8xJ7mKrgmkrUGqdjVMttHjXLINT1AZYBA0O4SFqnsHemg5qTadlt72oycDy'),
(19, 'Men Only', 'Bulacan', 'Bpc Dorm', '₱ 1700', '2024-12-16 08:31:27', 'Available', '', 'jup5udZ5wGgmTA70NBE4UvIxkEpnAGX8RbpWX3hxNDb4s6zuiFrBODVHyUlo');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `dorm_id` int(11) NOT NULL,
  `room_number` varchar(50) DEFAULT NULL,
  `room_name` varchar(100) DEFAULT NULL,
  `room_type` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `amenities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`amenities`)),
  `image` text DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `visibility` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `dorm_id`, `room_number`, `room_name`, `room_type`, `price`, `description`, `capacity`, `amenities`, `image`, `status`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'Room1', 'Single', 1234.00, 'descccc', 1, '[\"wifi\",\"pool\",\"aircon\",\"tv\",\"kitchen\"]', '', 'available', 'public', '2025-04-21 15:44:04', '2025-04-21 15:52:14'),
(2, 1, '2', 'Room 2', 'Single', 1400.32, 'test descrip', 1, '[\"wifi\",\"aircon\",\"tv\",\"kitchen\"]', '', 'available', 'public', '2025-04-21 15:56:25', '2025-04-21 15:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_old`
--

CREATE TABLE `rooms_old` (
  `id` int(11) NOT NULL,
  `dorm_id` int(11) DEFAULT NULL,
  `room_number` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `room_type` varchar(50) DEFAULT NULL,
  `features` text DEFAULT NULL,
  `is_booked` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `middlename` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `emfullname` varchar(80) NOT NULL,
  `emcontact` varchar(15) NOT NULL,
  `emaddress` varchar(100) NOT NULL,
  `emrelation` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `image` text DEFAULT NULL,
  `token` varchar(60) NOT NULL,
  `currentroom` varchar(255) NOT NULL,
  `topay` varchar(225) NOT NULL,
  `appstatus` varchar(255) NOT NULL,
  `role` enum('user','dorm','admin') NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `address`, `contact`, `gender`, `emfullname`, `emcontact`, `emaddress`, `emrelation`, `email`, `password`, `image`, `token`, `currentroom`, `topay`, `appstatus`, `role`, `date`) VALUES
(8, 'Kuze', 'N/A', 'Masachika', 'Malolos, Bulacan', '09168061234', 'Male', 'Yuki Masachika', '09273136543', 'Malolos, Bulacan', 'Sister', 'kuze@gmail.com', '$2y$10$K13uTtpYmmc7BprFFr01IOmEqmoUmCRvetuCm/8Jwv77uRKJY/DIi', 'assets/images/582e867ca37d208fcf4fa62910c679c9.jpg', 'zE9yPlAqKzQA5Vgdh8Js1tuJfurcVSOOrrYsru9fVi1729OVWA1aFrqNDQxs', '', '', '', 'user', '2025-04-11 06:45:54'),
(9, 'Kano', 'Chinatsu', 'Inomata', 'Plaridel, Bulacan', '09168063214', 'Female', 'Taiki', '09273136523', 'Malolos, Bulacan', 'Husband', 'kano@gmail.com', '$2y$10$.D1PsCBN1viZCmBIavQMg.81mB06SYRWTfuVf2rbO.J7Hp1yFJRu.', 'assets/images/chinatsu-kano-659c16d23d26cp.jpg', 'ajuJ2hJAv1JHm0uq2OkyJ1wOjyw64LNInS0lH3VW8OmW0hVNHDD1awVSuXZv', '', '', '', 'user', '2025-04-11 06:45:54'),
(15, 'Kaori', '', 'Miyazono', '', '', '', '', '', '', '', 'Kao@gmail.com', '$2y$10$JcC.NSRfWlyIfxKa9qAJbeUdrZNo87wDYF6CCx8DEofnS9K81fkKq', 'assets/images/cfebb5d7963e670d8d2b69c1dc38052d.jpg', 'PaKVkTzVzVpnKAns1myVpVIdOd8bpGbj5Uw33XhSv1FfANOsD8WexUziZIKl', '', '', '', 'user', '2025-04-11 06:45:54'),
(16, 'Test A', '', 'Admin', '', '', '', '', '', '', '', 'testa@gmail.com', '$2y$10$EwP5MCBBasUujezsdVXW3O3VqVAKG1D7QZhLpUyYtLRUpZtLoyJXm', '', 'z6MbdPoaVJT5PmhrzisXVRBgNXebT5cNGpzqa6g6lMlyn7SNhDi5MWxsk1QZ', '', '', '', 'admin', '2025-04-11 06:45:54'),
(18, 'owner', '', 'one', '', '', '', '', '', '', '', 'own1@gmail.com', '$2y$10$jY27jC0iyJB3M/demVxg4OeuiDVEVFCRVhsEO4DEZP3VCiqqecVAK', '560261.png', 'iEbKKyEG85Qt32IAKg7SVrBOYGsbf7VGvEg7Y1QA1cdIaOXvsB1kaT0f1yl7', '', '', '', 'dorm', '2025-04-11 06:45:54'),
(24, 'zzasda', '', 'zz', '', '', '', '', '', '', '', 'zz@gmail.com', '$2y$10$dEky1pOYg5.R07F8UM9a9.QQj.Qjv37Kb8IXeaQsaNV1JEIKxLVOy', '', 'GDJMZmLVP3N5zhSBBTGTKaPjTLdM5Q9DDtVNKPJZM22jMgy9buFbRgqQIAAc', '', '', '', 'user', '2025-04-11 06:45:54'),
(25, 'qq', '', 'qq', '', '', '', '', '', '', '', 'qq@gmail.com', '$2y$10$LNg6jBPQdWWSWy/rIkh4wO5D19HLfbMDMPfScrHqq/WCOof0IJWRq', 'public/assets/images/images (7).jpg', 'IzAoyLAp8RqAVNGJUYWwgit614xQ8IfMQ5akbPSEQz9fqXJ9Ln3YVryJh3pK', '', '', '', 'user', '2025-04-11 06:45:54'),
(26, 'Aaron', '', 'Morales', '', '', '', '', '', '', '', 'own@gmail.com', '$2y$10$p7XS30wUi6VNeNVxHvcJoOlh9S65yiNYYelDAXknPKkF2KEyEqK3q', '560261.png', 'jo1IcT2EuQZwsLsB9rxdZ7itV92VPIYJhkVU6r0JBZZs0wfAzpqaFNaiYPYV', '', '', '', 'dorm', '2025-04-11 07:03:31'),
(27, 'ss', '', 'ss', '', '', '', '', '', '', '', 'ss@gmail.com', '$2y$10$q7Bofw457hCPbswj5Zf8qu1dLHdnrInYHW4YtUij1X.SUTJJH4qCe', 'public/assets/images/560261.png', 'LiqMqu39ypesT50Sz44MoYyslK3s4RqH6EbydBKHN2gYgP4OnHj4LI5XhcuM', '', '', '', 'user', '2025-04-11 07:08:34'),
(29, 'ww', '', 'ww', '', '', '', '', '', '', '', 'ww@gmail.com', '$2y$10$4OcA0wzCMIck1IkfuZDg9ezO5qxWRH1ZJbUAPb42rfXLfKBW5OEu2', 'images (7).jpg', 'KY7xSzOtGEIugJHMYRdLmDDY3mVrGAOcKzegbmdn3i8ZVfAthoVMBe97nUTd', '', '', '', 'dorm', '2025-04-11 07:17:32'),
(30, 'dd', '', 'dd', '', '', '', '', '', '', '', 'dd@gmail.com', '$2y$10$ZY4C8gt8qu/44kJURDIyI.ZyNqRcZT0F/rOfqMIxlBTlVEGwg5H0K', 'assets/images/67f857509c2db_tumblr_084d45e428c0869ce9f918495', 'tWAzzrhzjwsL2TVWnJRImxsVkfMVtHskSnMed53xseObs6v6vieB30iPgfgX', '', '', '', 'user', '2025-04-11 07:42:09'),
(31, 'vv', '', 'vv', '', '', '', '', '', '', '', 'vv@gmail.com', '$2y$10$YOzxUsVFCcuRf/oPtzus1.hPN6Kg55lKgOKPT54udQ4Bzd3oFvRzq', 'assets/images/67f85c5996c4c_tumblr_084d45e428c0869ce9f91849556bc6ef_def68d7f_1280.jpg', 'AhDVxVdUJrDnvYwRMR1Vu7AaZ7HKzFnW6AAa5cdTVoTrV36AKbwHE6jKJISP', '', '', '', 'user', '2025-04-11 08:03:37'),
(32, 'a', '', 'a', '', '', '', '', '', '', '', 'reg@gmail.com', '$2y$10$BRXvJJLxy.MoFtgg.tVpD.HQZvKKn1Uo8u8QlQww6fEm7DSoHWCiS', 'image_2025-04-11_080539547.png', 'A2LLJ0OJIwDKJkniQsLfW6VlQP6qyZi8dv9LYVOrQgDOVT7yaQ0wk9img9KM', '', '', '', 'dorm', '2025-04-11 08:05:44'),
(33, '11', '', '11', '', '', '', '', '', '', '', '11@gmail.com', '$2y$10$rK05JAqi9.WS/AkQZSmsAOlHeRuOCIN2XGC4lyjTwNZOptqkgxfDi', 'image_2025-04-11_081159764.png', 'o7stN1SBqIrj5c7hAzhVfTZWlllFdR5SZyafbrUPVhVeYmOB2BQO6FOyLDZQ', '', '', '', 'dorm', '2025-04-11 08:12:01'),
(34, '22', '', '22', '', '', '', '', '', '', '', '22@gmail.com', '$2y$10$EvS1.fa1sCLeKMe/f2oXkOsyhCxO3qXsM8jdWeplCrRuhoXDqCiYS', 'images (1).png', 's4bUOb0SmJxHba0EamJXQc2VoqUtcbDeVbBIZsKG2AUbBL4pRFxIXpKbYhUc', '', '', '', 'dorm', '2025-04-11 08:14:19'),
(35, '33', '', '33', '', '', '', '', '', '', '', '33@gmail.com', '$2y$10$JBQzIFvLMLtxnU/FTJgJ7uQjLwv7ayAOwht5C0TFJgKosbjUy5lZS', 'assets/images/67f85f2934ced_image_2025-04-11_081534939.png', 'Fx4eVNBmyMkavihYUGloEzrb5IKoS0t60lxn6VntTPbur8mdD9a17ok7Kwb0', '', '', '', 'user', '2025-04-11 08:15:37'),
(37, 'owner2', '', '2', '', '', '', '', '', '', '', 'own2@gmail.com', '$2y$10$V.2jKx2NHpmegy/PbOwPZO2j.I75oLF4sclKfwiq1KHj5c.YnXOae', '', '6jvnnv3O10ErNNuS9zYZ3PgEmBmqZmyBdTy89JeTgYmU02EgvH9DL9bAtDVL', '', '', '', 'dorm', '2025-04-18 23:10:37'),
(38, 'asd', '', 'das', '', '', '', '', '', '', '', 'testa@gmail.com', '$2y$10$2FsWBzLg3jN.Y/hYKCwEVON96jAYXmXXa97cZtCPJtj1eWj2fILtG', NULL, 'ucA407eVxhtYlvaVnPTnhkGoiXqRBHvroA4PuvyJVocwlnV4739ShhDx0qgc', '', '', '', 'user', '2025-04-21 05:00:16'),
(39, 'qwer', '', 'qwerrr', '', '', '', '', '', '', '', 'testa@gmail.com', '$2y$10$93GYCjmWocVLa129423/O.dDRPAElLAsbDNPNTAB7fs9uo4N3AYzS', NULL, 'GD7dss9LyPFcBcxnzsBBplDIOVNxZxUN2Oavvs0UR5KabXpWKJeFkcqfxGDI', '', '', '', 'user', '2025-04-21 05:04:51'),
(40, 'ok ok', '', 'okay', '', '', '', '', '', '', '', 'testa@gmail.com', '$2y$10$Q5nkxoleofOP19Ct91JPC.QWCFqqBHCQ5ot3GeVF/FabSFOuttbKO', NULL, 'XVpcHzEPxqXI0ctMnSWPS0VPBz39Y38Q3pSnVTrM8JuEge7tSPYtmMfzn4Fk', '', '', '', 'dorm', '2025-04-21 05:10:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adms`
--
ALTER TABLE `adms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `dorm_id` (`dorm_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `dorms`
--
ALTER TABLE `dorms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `old_dorms_table`
--
ALTER TABLE `old_dorms_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendingapps`
--
ALTER TABLE `pendingapps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postings`
--
ALTER TABLE `postings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomposts`
--
ALTER TABLE `roomposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dorm_id` (`dorm_id`);

--
-- Indexes for table `rooms_old`
--
ALTER TABLE `rooms_old`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dorm_id` (`dorm_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adms`
--
ALTER TABLE `adms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dorms`
--
ALTER TABLE `dorms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `old_dorms_table`
--
ALTER TABLE `old_dorms_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pendingapps`
--
ALTER TABLE `pendingapps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `postings`
--
ALTER TABLE `postings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomposts`
--
ALTER TABLE `roomposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms_old`
--
ALTER TABLE `rooms_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`),
  ADD CONSTRAINT `applications_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `rooms_old` (`id`);

--
-- Constraints for table `dorms`
--
ALTER TABLE `dorms`
  ADD CONSTRAINT `dorms_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`);

--
-- Constraints for table `rooms_old`
--
ALTER TABLE `rooms_old`
  ADD CONSTRAINT `rooms_old_ibfk_1` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
