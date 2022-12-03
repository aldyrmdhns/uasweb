-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 14.50
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftarpesanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarpesan`
--

CREATE TABLE `daftarpesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomorhp` int(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `barang` varchar(255) NOT NULL,
  `panjang` float NOT NULL,
  `tinggi` float NOT NULL,
  `metode` varchar(10) NOT NULL,
  `gambar` varchar(2555) NOT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftarpesan`
--

INSERT INTO `daftarpesan` (`id`, `nama`, `nomorhp`, `alamat`, `barang`, `panjang`, `tinggi`, `metode`, `gambar`, `waktu`) VALUES
(18, 'daniela', 2147483647, 'jalan pramuka', 'lemari', 54, 85, 'Cash', 'daniela.webp', '2022-10-28 20:33:00'),
(20, 'Aldy Ramadhan Syahputra', 2147483647, 'Jalan Ery Suparjan. Rt. 12, No. 02', 'Ini', 180, 80, 'Cash', 'itu.jpeg', '2022-10-28 20:51:00'),
(21, 'David', 2147483647, 'jalan situ situ aja', 'Meja', 123, 321, 'Transfer', 'Maju.png', '2022-11-02 21:49:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'aldy', '$2y$10$R6XwKj7yLQnzpgO1pyJEj.Th/GZXHW9xOdoi.l19d53HsMwxnOurO'),
(2, 'syamsir', '$2y$10$fHa.Mq4tR8Y0lhUCns5F4uskyu3DAHyfIwvcum5zVvGv6.28cfnjC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarpesan`
--
ALTER TABLE `daftarpesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarpesan`
--
ALTER TABLE `daftarpesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
