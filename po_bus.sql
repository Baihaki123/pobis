-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2022 pada 04.40
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `po_bus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bus`
--

CREATE TABLE `data_bus` (
  `id` int(11) NOT NULL,
  `nama_bus` varchar(128) NOT NULL,
  `tujuan` varchar(128) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penumpang`
--

CREATE TABLE `penumpang` (
  `id` int(11) NOT NULL,
  `nama_penumpang` varchar(128) NOT NULL,
  `nomer_identitas` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nohp` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `po_bus`
--

CREATE TABLE `po_bus` (
  `id` int(11) NOT NULL,
  `nama_bus` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `harga` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama_penumpang` varchar(128) NOT NULL,
  `nomer_identitas` int(20) NOT NULL,
  `nohp` int(20) NOT NULL,
  `po_bus` varchar(128) NOT NULL,
  `tujuan` varchar(128) NOT NULL,
  `penumpang_dewasa` varchar(128) NOT NULL,
  `penumumpang_ank` varchar(128) NOT NULL,
  `harga` int(7) NOT NULL,
  `total` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bus`
--
ALTER TABLE `data_bus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `po_bus`
--
ALTER TABLE `po_bus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_bus`
--
ALTER TABLE `data_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `po_bus`
--
ALTER TABLE `po_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
