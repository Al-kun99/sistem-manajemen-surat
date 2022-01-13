-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 03:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_assetsurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `institusi` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekspedisi_sk`
--

CREATE TABLE `ekspedisi_sk` (
  `id_ekspedisi_sk` int(11) NOT NULL,
  `nomor_surat_keluar` varchar(100) NOT NULL,
  `nomor_berita` varchar(100) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `untuk` varchar(100) NOT NULL,
  `via` varchar(100) NOT NULL,
  `tanggal_surat_keluar` date NOT NULL,
  `jam_surat_keluar` time NOT NULL,
  `jumlah_lembar` int(11) NOT NULL,
  `jumlah_kirim` int(11) NOT NULL,
  `petugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `nomor_surat_keluar` varchar(255) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `untuk` varchar(255) NOT NULL,
  `nomor_berita` varchar(255) NOT NULL,
  `tanggal_surat_keluar` date NOT NULL,
  `jam_surat_keluar` time NOT NULL,
  `jumlah_lembar` int(11) NOT NULL,
  `jumlah_kirim` int(11) NOT NULL,
  `petugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `nomor_surat_masuk` varchar(255) NOT NULL,
  `tanggal_surat_masuk` date NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `kepada` varchar(255) NOT NULL,
  `nomor_berita` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `jumlah_lembar` int(11) NOT NULL,
  `petugas` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `file_surat_masuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `role_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password_user`, `role_user`) VALUES
(1, 'Admin Sandi', 'Admin', 'admin', 'admin'),
(2, 'Aldi', 'Aldi', '123', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indexes for table `ekspedisi_sk`
--
ALTER TABLE `ekspedisi_sk`
  ADD PRIMARY KEY (`id_ekspedisi_sk`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ekspedisi_sk`
--
ALTER TABLE `ekspedisi_sk`
  MODIFY `id_ekspedisi_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
