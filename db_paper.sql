-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 10:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_paper`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `scopus` varchar(255) NOT NULL,
  `publikasi_paper` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `scopus`, `publikasi_paper`) VALUES
(1, 'Dr. Rani Megasari, M.T', 'https://www.scopus.com/authid/detail.uri?authorId=57189246291', 11),
(2, 'Eddy Prasetyo N., M.T.', 'https://www.scopus.com/authid/detail.uri?authorId=57193737597', 10),
(3, 'Budi Laksono P., M.T.', 'https://www.scopus.com/authid/detail.uri?authorId=57190936968', 13),
(4, 'Dr. Lala Septem R., M.T.', 'https://www.scopus.com/authid/detail.uri?authorId=55243551900', 58),
(5, 'Rasim, M.T.', 'https://www.scopus.com/authid/detail.uri?authorId=57193141643', 14),
(6, 'Dr. Wahyudin, M.T.', 'https://www.scopus.com/authid/detail.uri?authorId=57203080467', 58),
(7, 'Dr. Yudi Wibisono, M.T.', 'https://www.scopus.com/authid/detail.uri?authorId=56466035300', 9),
(8, 'Jajang Kusnendar, M.T.', 'https://www.scopus.com/authid/detail.uri?authorId=57190941542', 11),
(9, 'Yaya Wihardi, S.Kom., M.Kom.', 'https://www.scopus.com/authid/detail.uri?authorId=57189244462', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '90beb82272395ecf74f48eff20fe7d43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
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
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
