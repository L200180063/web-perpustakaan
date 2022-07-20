-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2022 pada 13.23
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

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
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(45) NOT NULL,
  `penulis_buku` varchar(45) NOT NULL,
  `penerbit_buku` varchar(45) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `persediaan_buku` int(11) NOT NULL,
  `gambar_buku` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `penulis_buku`, `penerbit_buku`, `tahun_terbit`, `persediaan_buku`, `gambar_buku`) VALUES
(1, 'Cantik Itu Luka', 'Eka Kurniawan', 'Gramedia Pustaka Utama', 2018, 23, '62d3bd1bb97b3.jpg'),
(2, 'Hujan', 'Tere Liye', 'Gramedia Pustaka Utama', 2016, 42, '62d3c534e4c8f.jpg'),
(3, 'Home Sweet Loan', 'Almira Bastari', 'Gramedia Pustaka Utama', 2022, 43, '62d3d6f1c93e5.jpg'),
(4, 'Bibi Gill', 'Eka Kurniawan', 'PENERBIT SABAK GRIP', 2018, 14, '62d3d7ddd7f6d.jpg'),
(5, 'Bukan Buku Nikah', 'Ria Ricis', 'Loveable', 2021, 65, '62d3d8564ed0f.jpg'),
(6, 'Heartbreak Motel', 'Ika Natassa', 'Gramedia Pustaka Utama', 2022, 54, '62d3d974ad068.jpg'),
(7, 'Cerita Cerita Bahagia Hampir Seluruhnya', 'Norman Erikson Pasaribu', 'Gramedia Pustaka Utama', 2020, 37, '62d3dd3f755a3.jpg'),
(8, 'Kita Pergi Hari Ini', 'Ziggy Zezsyazeoviennazabrizkie', 'Gramedia Pustaka Utama', 2021, 62, '62d3dd8181691.jpg'),
(9, 'Kekasih Musim Gugur', 'Laksmi Pamuntjak', 'Gramedia Pustaka Utama', 2020, 33, '62d3df776a058.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
