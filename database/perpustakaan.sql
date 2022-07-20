-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 03:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_buku`
--

CREATE TABLE `form_buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_buku`
--

INSERT INTO `form_buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `gambar`, `created_at`, `update_at`) VALUES
(1, 'Hujan', 'Tere Liye', 'Gramedia Pustaka Utama', '62d5496180761.jpg', '2022-07-18 10:32:26', '2022-07-18 11:52:01'),
(2, 'Bibi Gill', 'Tere Liye', 'PENERBIT SABAK GRIP', '62d54958421fb.jpg', '2022-07-18 10:33:25', '2022-07-18 11:51:52'),
(3, 'Bukan Buku Nikah', 'Ria Ricis', 'Loveable', '62d5473b0e0bf.jpg', '2022-07-18 10:33:44', '2022-07-18 11:42:51'),
(4, 'Home Sweet Loan', 'Almira Bastari', 'Gramedia Pustaka Utama', '62d5474686d5f.jpg', '2022-07-18 11:31:44', '2022-07-18 11:43:02'),
(5, 'Layangan Putus', 'Moommy Asf', 'Rdm Publishers', '62d5475481982.jpg', '2022-07-18 11:32:17', '2022-07-18 11:43:16'),
(6, 'Cerita Cerita Bahagia Hampir Seluruhnya', 'Norman Erikson Pasaribu', 'Gramedia Pustaka Utama', '62d54bff56379.jpg', '2022-07-18 12:03:11', '0000-00-00 00:00:00'),
(7, 'Cantik Itu Luka', 'Eka Kurniawan', 'Gramedia Pustaka Utama', '62d54d754e353.jpg', '2022-07-18 12:09:25', '0000-00-00 00:00:00'),
(8, 'Kekasih Musim Gugur', 'Laksmi Pamuntjak', 'Gramedia Pustaka Utama', '62d54e046d804.jpg', '2022-07-18 12:11:48', '0000-00-00 00:00:00'),
(9, 'Heartbreak Motel', 'Ika Natassa', 'Gramedia Pustaka Utama', '62d5520bc9b1b.jpg', '2022-07-18 12:28:59', '0000-00-00 00:00:00'),
(10, 'The Star And I', 'Penulis2', 'Penerbit-2', '62d563aead522.jpg', '2022-07-18 13:44:14', '0000-00-00 00:00:00'),
(11, 'Kita Pergi Hari Ini', 'Ziggy Zezsyazeoviennazabrizkie', 'Gramedia Pustaka Utama', '62d56407c7e20.jpg', '2022-07-18 13:45:43', '2022-07-18 13:46:11'),
(12, 'Perempuan Yang Menangis Kepada Bulan Hitam', 'Penulis1', 'Penerbit-2', '62d6f1054f47b.jpg', '2022-07-19 17:59:33', '0000-00-00 00:00:00'),
(13, 'Laut Bercerita', 'Penulis2', 'Penerbit-2', '62d7af9cbef21.jpg', '2022-07-20 07:32:44', '0000-00-00 00:00:00'),
(14, 'Lebih Senyap Dari Bisikan', 'Penulis2', 'Gramedia Pustaka Utama', '62d7b09a1664d.jpg', '2022-07-20 07:36:58', '2022-07-20 07:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '1234'),
(2, 'user01', '111'),
(4, 'anang', 'an123'),
(5, 'raypra', 'ray123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_buku`
--
ALTER TABLE `form_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_buku`
--
ALTER TABLE `form_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
