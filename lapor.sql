-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Nov 2018 pada 02.25
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_kehilangan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jenis` set('kehilangan','ditemukan') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesifikasi` varchar(100) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `kontak` varchar(13) NOT NULL,
  `id_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_kehilangan`, `tanggal`, `jenis`, `nama`, `spesifikasi`, `lokasi`, `kontak`, `id_user`) VALUES
(1, '2018-11-01 05:17:51', 'kehilangan', 'HP', 'ASSU', 'C', '081273907449', '14116021'),
(2, '2018-11-01 05:18:02', 'ditemukan', 'Botol', 'ada airnya', 'E', '081273907449', '14116021'),
(3, '2018-11-01 16:01:16', 'ditemukan', 'PULPEN', 'isinya penuh', 'e211', '081273907449', '14116021'),
(4, '2018-11-01 16:02:16', 'kehilangan', 'Duit', '500rp', 'labIF', '081273907449', '14116021'),
(5, '2018-11-01 16:04:19', 'kehilangan', 'tas', 'ga ada isinya', 'parkiran', '081273907449', '14116021'),
(6, '2018-11-01 22:11:08', 'ditemukan', 'motor', 'bannya bocor', 'hutan itera', '081273907449', '14116021'),
(15, '2018-11-02 07:18:10', 'ditemukan', 'proyektor', '2 lensa ', 'AULA', '089843824141', '14116006'),
(16, '2018-11-02 08:12:28', 'kehilangan', 'HP', 'samsul', 'E211', '089843824141', '14116006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `kontak` varchar(13) NOT NULL,
  `id_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `tanggal`, `nama`, `keluhan`, `lokasi`, `kontak`, `id_user`) VALUES
(1, '2018-11-01 02:09:22', 'toilet', 'ga ada air', 'E', '089843824141', '14116006'),
(2, '2018-11-01 16:06:05', 'Kelas', 'Jorok', 'E307', '081273907449', '14116021'),
(3, '2018-11-01 16:09:23', 'tangga', 'banyak', 'gd E', '081273907449', '14116021'),
(4, '2018-11-02 05:16:53', 'Kelas E001', 'Panas', 'E', '089843824141', '14116006'),
(5, '2018-11-02 08:13:15', 'Kelas E211', 'Kotor', 'E211', '089843824141', '14116006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(25) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `kontak` varchar(13) NOT NULL,
  `level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `pass`, `kontak`, `level`) VALUES
('14116006', 'Yoga Dwi Septana', '22f24c94c78e54051c3d0c4ac25300ce', '089843824141', 'user'),
('14116021', 'Fadila Eka Noperta', '2826f0a7f78cea043f3f9de94eed642f', '081273907449', 'user'),
('14116032', 'Meidiarni Kurniadewi', '1ba2e1672bce552d618231181aad17aa', '089976897845', 'user'),
('14116048', 'Hendy  Prasetya', '5dc9d2c3150a116314f5f92955fccdc1', '081267879056', 'user'),
('14116061', 'Dewi Fidrianingrum', '2f984d24fc202ec93489a0fd369ff775', '089678675610', 'user'),
('14116147', 'Muhammad Farhan', 'e3c340e0f3aaa0a5d44273a24194b952', '081369067176', 'admin'),
('14116172', 'Muminatul Faizah', '8616cfa88cc08526b095a0141028ce39', '082345678920', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_kehilangan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_kehilangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
