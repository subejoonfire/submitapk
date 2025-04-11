-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2025 at 02:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `submitapk`
--

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` int NOT NULL,
  `iduser` int DEFAULT NULL,
  `nama_pengaju` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `link_drive` text NOT NULL,
  `file_pdf` varchar(255) NOT NULL,
  `file_rar` varchar(255) NOT NULL,
  `status` enum('diajukan','diproses','selesai') DEFAULT 'diajukan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `iduser`, `nama_pengaju`, `no_hp`, `link_drive`, `file_pdf`, `file_rar`, `status`) VALUES
(3, 2, 'Rynawan', '083159305564', 'https://drive.google.com/file/d/1f6wn4su43rFfNvxNGhMGrgH05lySH-C6/view', 'pdf1', 'rar1', 'diajukan'),
(4, 0, 'Bisma', '083159305564', 'https://drive.google.com/file/d/1wgzQMCbPpQfNAErtakL2OTMg_pQXrVNw/view?usp=drive_link', '1737354146_7cfbe4bf47d5a0a6f680.pdf', '1737354146_36c90259e4cedffe591c.rar', 'diproses'),
(10, 2, '1', '2819829182912', 'https://drive.google.com/file/d/1rWYmv86z4S1GqrH63hyREqqGRszwQpYf/view', '1744318571_698904c9feeaa731085b.pdf', '1744318571_4fb9eafcca16d6642fbc.rar', 'diajukan'),
(11, 2, 'user', '0827427188221', 'https://drive.google.com/file/d/1rWYmv86z4S1GqrH63hyREqqGRszwQpYf/view', '1744318618_64ca2d3772ac6d4760d9.pdf', '1744318618_252052dfc548866f635d.rar', 'diajukan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '$2y$10$GrjBDS2BkzPJLHrmoOZ5R.e.GGotmFBfmyLCs8tgfo3FPQqpPnWmO', 1),
(2, 'user', '$2y$10$9qEOMuskWYRkz18QxK0maOEFmwCcSWn//WJGAle3tI6wm0krTET76', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
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
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
