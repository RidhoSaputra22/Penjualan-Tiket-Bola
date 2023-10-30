-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 11:46 PM
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
-- Database: `db_penjualan_tiket_bola`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertandingan`
--

CREATE TABLE `tb_pertandingan` (
  `id_pertandingan` int(15) NOT NULL,
  `nama_pertandingan` varchar(255) NOT NULL,
  `waktu_pertandingan` date NOT NULL,
  `jenis_pertandingan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pertandingan`
--

INSERT INTO `tb_pertandingan` (`id_pertandingan`, `nama_pertandingan`, `waktu_pertandingan`, `jenis_pertandingan`) VALUES
(1, 'Persebaya Vs Makassar', '2023-10-17', '1'),
(2, 'PSM vs PAPUA', '2023-10-19', 'LUAR'),
(23, 'Real Madrid', '2023-11-01', 'LUAR'),
(24, 's', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pertandingan`
--
ALTER TABLE `tb_pertandingan`
  ADD PRIMARY KEY (`id_pertandingan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pertandingan`
--
ALTER TABLE `tb_pertandingan`
  MODIFY `id_pertandingan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
