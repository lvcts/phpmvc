-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 04:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nrp` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `matakuliah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `kelas`, `matakuliah`) VALUES
(3, 'Zahra', '1', '2021A', 'Agama, Bahasa Indonesia'),
(4, 'Nur Aisyah', '2', '2020A', 'Basis Data 2, Pemrograman Web 2');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_mk` int(11) NOT NULL,
  `nama_matakuliah` varchar(255) NOT NULL,
  `kode_mk` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_mk`, `nama_matakuliah`, `kode_mk`, `semester`, `sks`) VALUES
(3, 'Agama', 'INF123', 1, 2),
(4, 'Bahasa Indonesia', 'INF124', 1, 2),
(5, 'Pendidikan Pancasila', 'INF125', 1, 3),
(6, 'Dasar Dasar Pemrograman', 'INF126', 1, 3),
(7, 'Basis Data 1', 'INF131', 2, 3),
(8, 'Pemrograman Web 1', 'INF132', 2, 3),
(9, 'Aplikasi Komputer', 'INF133', 2, 2),
(10, 'Bahasa Inggris', 'INF141', 3, 2),
(11, 'Algoritma dan Struktur Data', 'INF142', 3, 3),
(12, 'Sistem Operasi', 'INF143', 3, 2),
(13, 'Jaringan Komputer', 'INF151', 4, 3),
(14, 'Basis Data 2', 'INF152', 4, 3),
(15, 'Pemrograman Web 2', 'INF152', 4, 3),
(16, 'Rekayasa Perangkat Lunak', 'INF161', 5, 3),
(17, 'Semantik Web', 'INF162', 5, 2),
(18, 'Sistem Terdistribusi', 'INF163', 5, 2),
(19, 'Pemrograman Visual', 'INF171', 6, 3),
(20, 'Analisis Numerik', 'INF172', 6, 3),
(21, 'Pemrograman Mobile', 'INF173', 6, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
