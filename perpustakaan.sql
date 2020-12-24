-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 11:11 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(100) NOT NULL,
  `genre_buku` varchar(50) NOT NULL,
  `kode_buku` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penerbit_buku`, `genre_buku`, `kode_buku`) VALUES
(1, 'Matematika Cerdas IC', 'Trigata Media', 'Paket Belajar', 'NST-101'),
(4, 'Pengetahuan Sosial VA', 'Trilangga', 'Paket Belajar', 'NST-102'),
(7, 'Sains SD Lengkap', 'Cepat Gita', 'Penunjang', 'NST-103'),
(8, 'Basis Data', 'Erlangga', 'Modul', 'NST-104'),
(11, 'pemograman Web', 'Netsian Group', 'LKS', 'NST-105');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_peminjaman` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `judul_buku` varchar(255) NOT NULL DEFAULT '',
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id_peminjaman`, `nama_lengkap`, `kelas`, `nisn`, `judul_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
(6, 'ads', 'sds', 'ferew', 'Pintar Matematika Untuk SD', '2020-12-24', '2020-12-31'),
(7, 'wahyu adi n', '12', '3215062306000023', 'pemograman Web', '2020-12-24', '2021-01-09'),
(8, 'Mohammad Wahyu Adi Nugroho', 'IF19D', '19416255201091', 'Basis Data', '2020-12-24', '2020-12-30'),
(9, 'Dafi', 'XIIC', '236778621778', 'Sains SD Lengkap', '2020-12-24', '2020-12-18'),
(10, 'apsdjkkalsdj', 'if28', '903289829', 'Matematika Cerdas IC', '2020-12-24', '2021-01-01'),
(11, 'Rafael', 'Galih', '32150692819389', 'Basis Data', '2020-12-24', '2020-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_depan` varchar(30) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_depan`, `nama_belakang`, `username`, `password`, `level`) VALUES
(12, 'Mohammad Wahyu', 'Adi Nugroho', 'wahyu', 'wahyu', 'admin'),
(13, 'admin', 'admin', 'admin', 'admin', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
