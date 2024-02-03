-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 10:51 AM
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
-- Database: `rawat_inap`
--

-- --------------------------------------------------------

--
-- Table structure for table `jualobat`
--

CREATE TABLE `jualobat` (
  `id` int(50) NOT NULL,
  `nofaktur` varchar(50) NOT NULL,
  `tgl_penjualan_obat` date NOT NULL,
  `id_petugas` varchar(100) NOT NULL,
  `kd_obat` varchar(100) NOT NULL,
  `jumlah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jualobat`
--

INSERT INTO `jualobat` (`id`, `nofaktur`, `tgl_penjualan_obat`, `id_petugas`, `kd_obat`, `jumlah`) VALUES
(5, '11', '2024-02-01', '01', '32', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id` int(10) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `rekammedis` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id`, `diagnosa`, `rekammedis`, `foto`) VALUES
(32, 'batuk flu', '', 'coffe 4.jpg'),
(33, 'demam', '', 'coffe.jpg'),
(34, 'tipes', '', 'coffe 4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(10) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `diagnosas` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp` varchar(60) NOT NULL,
  `bpjs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nik`, `nama`, `jk`, `diagnosas`, `alamat`, `hp`, `bpjs`) VALUES
(18, '323232', 'kiko', 'Laki-Laki', 0, 'wih kuning', '02778787', '44444444'),
(19, '141414', 'kiko', 'Laki-Laki', 33, 'wih kuning', '02778787', '44444444'),
(21, '101010', 'andi', 'Laki-Laki', 32, 'banda aceh', '02778787', '44444444');

-- --------------------------------------------------------

--
-- Table structure for table `rawatinap`
--

CREATE TABLE `rawatinap` (
  `id` int(11) NOT NULL,
  `norawatinap` varchar(50) NOT NULL,
  `norekmed` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `progres_tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rawatinap`
--

INSERT INTO `rawatinap` (`id`, `norawatinap`, `norekmed`, `tgl_masuk`, `tgl_keluar`, `progres_tindakan`) VALUES
(8, '20', '09', '2024-02-03', '2024-02-04', 'buruk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `last_log`) VALUES
(1, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '2024-02-03 15:06:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jualobat`
--
ALTER TABLE `jualobat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `rawatinap`
--
ALTER TABLE `rawatinap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jualobat`
--
ALTER TABLE `jualobat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `rawatinap`
--
ALTER TABLE `rawatinap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
