-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 04:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aster`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengajuananggaran`
--

CREATE TABLE `detail_pengajuananggaran` (
  `id_detailpengajuan` int(11) NOT NULL,
  `nominal_pengajuan2` varchar(255) NOT NULL,
  `nominal_persetujuan2` varchar(255) NOT NULL,
  `deskripsi2` varchar(255) NOT NULL,
  `kegiatan2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `tingkatan_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pagu_anggaran`
--

CREATE TABLE `pagu_anggaran` (
  `id_paguanggaran` int(11) NOT NULL,
  `nominal_pagu` varchar(1024) NOT NULL,
  `nominal_terpakai` varchar(1024) NOT NULL,
  `bulan` varchar(1024) NOT NULL,
  `tahun` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_anggaran`
--

CREATE TABLE `pengajuan_anggaran` (
  `id_pengajuan` int(11) NOT NULL,
  `catatan_dm2` varchar(255) NOT NULL,
  `total_pengajuan2` varchar(255) NOT NULL,
  `minggu2` varchar(255) NOT NULL,
  `bulan2` varchar(255) NOT NULL,
  `catatan_dmpau2` varchar(255) NOT NULL,
  `status2` tinyint(1) NOT NULL,
  `tanggal_mulai2` datetime NOT NULL,
  `tanggal_sampai2` datetime NOT NULL,
  `tgl_pengajuan2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `id_pos` int(11) NOT NULL,
  `nama_pos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_pos`
--

CREATE TABLE `sub_pos` (
  `id_subpos` int(11) NOT NULL,
  `nama_subpos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_pos2`
--

CREATE TABLE `sub_pos2` (
  `id_subpos2` int(11) NOT NULL,
  `nama_subpos2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pengajuananggaran`
--
ALTER TABLE `detail_pengajuananggaran`
  ADD PRIMARY KEY (`id_detailpengajuan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `pagu_anggaran`
--
ALTER TABLE `pagu_anggaran`
  ADD PRIMARY KEY (`id_paguanggaran`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `pengajuan_anggaran`
--
ALTER TABLE `pengajuan_anggaran`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indexes for table `sub_pos`
--
ALTER TABLE `sub_pos`
  ADD PRIMARY KEY (`id_subpos`);

--
-- Indexes for table `sub_pos2`
--
ALTER TABLE `sub_pos2`
  ADD PRIMARY KEY (`id_subpos2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pengajuananggaran`
--
ALTER TABLE `detail_pengajuananggaran`
  MODIFY `id_detailpengajuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagu_anggaran`
--
ALTER TABLE `pagu_anggaran`
  MODIFY `id_paguanggaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengajuan_anggaran`
--
ALTER TABLE `pengajuan_anggaran`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `id_pos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_pos`
--
ALTER TABLE `sub_pos`
  MODIFY `id_subpos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_pos2`
--
ALTER TABLE `sub_pos2`
  MODIFY `id_subpos2` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
