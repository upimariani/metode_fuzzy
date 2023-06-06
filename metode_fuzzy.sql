-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2023 pada 03.00
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metode_fuzzy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_analisis`
--

CREATE TABLE `hasil_analisis` (
  `id_lap` int(11) NOT NULL,
  `id_pendapatan` int(11) NOT NULL,
  `tgl_periksa` varchar(20) NOT NULL,
  `pakan_bbk` varchar(20) NOT NULL,
  `umur_bbk` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `hasil` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id_pendapatan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pengelola` int(11) NOT NULL,
  `tgl_panen` varchar(20) NOT NULL,
  `jml_panen` int(11) NOT NULL,
  `jml_bbk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendapatan`
--

INSERT INTO `pendapatan` (`id_pendapatan`, `id_user`, `id_pengelola`, `tgl_panen`, `jml_panen`, `jml_bbk`) VALUES
(2, 1, 1, '2023-06-05', 21, 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengelola`
--

CREATE TABLE `pengelola` (
  `id_pengelola` int(11) NOT NULL,
  `nama_pengelola` varchar(125) NOT NULL,
  `alamat_pengelola` text NOT NULL,
  `no_hp_pengelola` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengelola`
--

INSERT INTO `pengelola` (`id_pengelola`, `nama_pengelola`, `alamat_pengelola`, `no_hp_pengelola`) VALUES
(1, 'Dadang', 'regf', '089887565432'),
(3, 'Maman Ahmad', 'brebes rt 05', '089887565432'),
(4, 'Wawan Darmawan', 'Lingk. Harapan Brebes', '089887565432');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'Admin', 'Brebes', '089987676512', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_analisis`
--
ALTER TABLE `hasil_analisis`
  ADD PRIMARY KEY (`id_lap`);

--
-- Indeks untuk tabel `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`);

--
-- Indeks untuk tabel `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id_pengelola`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_analisis`
--
ALTER TABLE `hasil_analisis`
  MODIFY `id_lap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id_pendapatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id_pengelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
