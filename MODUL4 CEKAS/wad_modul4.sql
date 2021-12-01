-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 06:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `nama_tempat`, `lokasi`, `harga`, `tanggal`) VALUES
(28, 1, 'Tanah Lot', 'Bali', 5000000, '2021-12-11'),
(29, 1, 'Gunung Bromo', 'Malang', 2000000, '2021-12-25'),
(30, 1, 'Tanah Lot', 'Bali', 5000000, '2021-12-04'),
(33, 4, 'Gunung Bromo', 'Malang', 2000000, '2021-12-10'),
(34, 4, 'Tanah Lot', 'Bali', 5000000, '2021-12-05'),
(35, 3, 'Gunung Bromo', 'Malang', 2000000, '2021-12-03'),
(36, 3, 'Tanah Lot', 'Bali', 5000000, '2021-12-05'),
(37, 5, 'Gunung Bromo', 'Malang', 2000000, '2021-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, '', 'cece@gmail.com', '$2y$10$zXna2prKHpa2/SXDrKmhOOJVVRdrSBorqGgm64QqduQ2WgpyqR4mS', ''),
(2, 'cece', 'cekas24@gmail.com', '$2y$10$vaadKj0CHeTrhaZnAvJa4eZnq3FtWkoAdqdYGG2lE/tr966ywDC4K', '083822720524'),
(3, 'Cekas', 'muhammadcekaspermana@student.telkomuniversity.ac.id', '$2y$10$n5MK2xHRbd3a.vIfzxO4DuXr7ZOF1YnquNHO0RIyL8xEVArRgNEt6', '345'),
(4, 'b', 'coba2@gmail.com', '$2y$10$jynaDDOaxi.YxR/I1MKNR.gWuk6HpCM8OoHSVhNGWWKEQ308BQiMW', '678'),
(5, 'bara', 'bara@gmail.com', '$2y$10$L.nJB8cxrxq4CkaWTd9OueOUR2imienMmUFT.FQv0tvQQT0gCqQDG', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
