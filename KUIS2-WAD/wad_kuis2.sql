-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308:3308
-- Generation Time: Dec 18, 2022 at 08:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_kuis2`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `sesi` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `email`, `no_hp`, `sesi`, `member`, `gender`, `status`) VALUES
(1, '444', 'eee', 0, '2eee', 'ee', 'ee', ''),
(2, '0833', 'kris@gmail.com', 0, 'youthglow', 'iya', 'laki', ''),
(3, '678', 'rann@gmail.com', 0, 'youth glow', 'iya', 'laki', ''),
(4, 'rwwer', 'vann@gmail.com', 2147483647, 'fdf', 'rr', 't', ''),
(5, 'rwwer', 'vann@gmail.com', 2147483647, 'fdf', 'rr', 't', ''),
(6, 'irvan', 'tea.axel@yahoo.com', 8965623, 'ku1', 'ya', 'laki', ''),
(7, 'irvan', 'tea.axel@yahoo.com', 8965623, 'ku1', 'ya', 'laki', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_irvan`
--

CREATE TABLE `user_irvan` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_irvan`
--

INSERT INTO `user_irvan` (`id`, `nama`, `email`, `password`, `status_type`) VALUES
(3, 'www', 'vann@quizlet.com', '$2y$10$R9YRe0htPf0fF.ew3YJhmuCavptK3QVmKELZJdEIBjIqPN.hNWI3e', 'user'),
(4, 'van', 'vann2@gmail.com', '$2y$10$XIpGGSUieOaghxBiIZx.7.CVZ9FeZ3urVEaXhMfdTDCQmVg3W.57G', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_irvan`
--
ALTER TABLE `user_irvan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_irvan`
--
ALTER TABLE `user_irvan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
