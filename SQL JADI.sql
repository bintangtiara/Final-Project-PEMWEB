-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 10:18 AM
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
-- Database: `rentalin`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(120) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `NAMA_MOBIL` varchar(100) NOT NULL,
  `MERK` int(100) NOT NULL,
  `NO_PLAT` varchar(100) NOT NULL,
  `TRANSMISI` varchar(100) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `TAHUN` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `NAMA_LENGKAP` varchar(100) DEFAULT NULL,
  `NO_HP` int(20) DEFAULT NULL,
  `Nama_mobil` varchar(50) NOT NULL,
  `TGL_PEMINJAMAN` date DEFAULT NULL,
  `TGL_PENGEMBALIAN` date DEFAULT NULL,
  `total_unit` int(11) NOT NULL,
  `TOTAL_BIAYA_SEWA` int(30) DEFAULT NULL,
  `JENIS_JAMINAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`NAMA_LENGKAP`, `NO_HP`, `Nama_mobil`, `TGL_PEMINJAMAN`, `TGL_PENGEMBALIAN`, `total_unit`, `TOTAL_BIAYA_SEWA`, `JENIS_JAMINAN`) VALUES
('qwert', 821, '', '2023-06-07', '2023-06-08', 0, 12000, 'ktp'),
('', 123, '', '2023-06-08', '2023-06-16', 0, 120000, ''),
('wahyu', 9876, '', '2023-06-14', '2023-06-16', 0, 12000, ''),
('Anugrahan', 12345, '', '2023-06-26', '2023-06-28', 0, 240000, 'background.png'),
('Mosesuk', 1234, '', '2023-06-02', '2023-06-24', 0, 120000, 'ktp'),
('', 123, '', '2023-06-09', '2023-06-15', 0, 120000, 'ktp'),
('raihan', 13, '', '2023-06-29', '2023-07-01', 0, 120000, 'ktp'),
('QWER', 12445, 'qwerty', '2023-06-07', '2023-06-08', 2, 12000, 'ktp'),
('aghjkl', 123, 'Fortuner Vrz GR SPORT', '2023-06-15', '2023-06-16', 2, 240000, 'KK');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(1, 'ardianta', 'ardianta_pargo@yahoo.co.id', '$2y$10$HIEq2w.8Et9RsJmY4TMKye4aVCxOd9xJTOtG4vyOEmo.GIBxaPQHK', 'Ardianta Pargo', 'default.svg'),
(3, 'petanikode', 'info@petanikode.com', '$2y$10$uXa.Hz9rr8gkv4ztaqf6FO84iW64gXHbeyEOy1tIQ5wmqMjTk0yQa', 'Petani Kode', 'default.svg'),
(4, 'wahyu', 'wahyu@gmail.com', 'wahyu123', 'wahyu', 'default.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`NO_PLAT`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
