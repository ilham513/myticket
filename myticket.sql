-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 05:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_akun` varchar(255) NOT NULL,
  `level` enum('admin','member','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `password`, `nama_akun`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_poli` int(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `tempat_lahir`, `tanggal_lahir`, `id_poli`, `no_telp`) VALUES
(1, 'Dr A', 'Jakarta', '2024-04-20', 1, '087776868'),
(2, 'Dr B', 'Bekasi', '1989-04-10', 1, '0866675656');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(255) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `nik`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`) VALUES
(1, 'Bapak A', '3216053829301', 'Jakarta', '1999-04-18', 'Perunas 3', '089989980000'),
(2, 'Ibu B', '000', 'Bekasi', '2000-04-27', 'Karang Satria', '000'),
(4, 'Bapak I', '2147483647', 'Bengkuli', '1967-04-25', 'Bogor', '089999877565'),
(5, 'Budi', '0001', 'Jakarta', '2024-06-28', 'Bojong Menteng', '000'),
(6, 'Bapak Z', '0909', 'Bekasi', '2024-06-29', 'Jalan B', '0909'),
(7, 'Bapak Y', '0808', 'Bekasi', '1999-11-22', '0808', '0808');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(255) NOT NULL,
  `nama_poli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(1, 'THT'),
(2, 'Paru'),
(3, 'Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(255) NOT NULL,
  `id_pelanggan` int(255) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `waktu_masuk` time DEFAULT NULL,
  `stamp_waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `waktu_keluar` time DEFAULT NULL,
  `id_poli` int(255) NOT NULL,
  `id_dokter` int(255) NOT NULL,
  `nama_guest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `id_pelanggan`, `tanggal_masuk`, `waktu_masuk`, `stamp_waktu`, `waktu_keluar`, `id_poli`, `id_dokter`, `nama_guest`) VALUES
(12, 1, '2024-06-05', '10:00:00', '2024-04-23 09:34:13', '10:30:00', 1, 1, ''),
(13, 2, '2024-05-05', '10:40:00', '2024-04-23 09:34:48', '11:00:00', 2, 1, ''),
(14, 4, '2024-05-05', '11:10:00', '2024-04-23 09:35:31', '11:20:00', 3, 2, ''),
(15, 1, '2024-08-08', '11:00:00', '2024-04-23 10:09:40', '12:00:00', 1, 1, ''),
(16, 1, '2024-05-05', '11:00:00', '2024-04-23 10:20:27', '11:30:00', 1, 1, ''),
(17, 1, '2024-06-28', '09:09:00', '2024-06-27 13:51:50', '10:10:00', 1, 1, ''),
(18, 1, '1999-08-08', '10:10:00', '2024-06-27 13:52:34', '20:10:00', 1, 1, ''),
(19, 1, '2024-06-11', '10:10:00', '2024-06-27 13:55:29', '22:13:00', 1, 1, 'Judi'),
(20, 1, '2024-06-12', '12:12:00', '2024-06-27 14:02:20', '13:13:00', 1, 1, 'Nama Pelanggan Baru'),
(21, 5, '2024-06-13', '11:11:00', '2024-06-27 15:06:35', '11:11:00', 1, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `nama_pelanggan` (`id_pelanggan`),
  ADD KEY `nama_poli` (`id_poli`),
  ADD KEY `nama_dokter` (`id_dokter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
