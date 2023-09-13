-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 07:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `nama_buku`, `created_at`) VALUES
(4, 'Komik Naruto', '2023-09-13 05:13:32'),
(5, 'Komik One Piece', '2023-09-13 05:13:32'),
(7, 'Buku Dasar-Dasar Teknik Informatika', '2023-09-13 05:15:26'),
(8, 'Buku Pengantar Teknologi Informasi – Teknik Informatika', '2023-09-13 05:15:49'),
(9, 'Metode Penelitian Teknik Informatika', '2023-09-13 05:16:03'),
(10, 'Komputer Cerdas Untuk Mahasiswa Teknik Informatika', '2023-09-13 05:16:15'),
(11, 'Teknik Pengolahan Audio & Video Kompetensi Keahlian Multimedia Program Keahlian Teknik Komputer dan Informatika', '2023-09-13 05:16:32'),
(12, ' Buku Pengantar Teknologi Informatika Dan Komunikasi Data', '2023-09-13 05:16:45'),
(13, ' Buku Aplikasi Komputer', '2023-09-13 05:17:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
