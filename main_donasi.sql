-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2024 pada 17.17
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hutan_wakaf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_donasi`
--

CREATE TABLE `main_donasi` (
  `id` int(11) NOT NULL,
  `nama_donasi` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `jumlah_donasi` varchar(255) NOT NULL,
  `no_telfon` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `ekstensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `main_donasi`
--

INSERT INTO `main_donasi` (`id`, `nama_donasi`, `no_rekening`, `jumlah_donasi`, `no_telfon`, `pesan`, `judul`, `ukuran`, `ekstensi`) VALUES
(4, 'li', '2526w27511', '162126121611', '25642436432', 'vsfdwgfdgsdhsd', '2.jpg', 52630, 'image/jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `main_donasi`
--
ALTER TABLE `main_donasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `main_donasi`
--
ALTER TABLE `main_donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
