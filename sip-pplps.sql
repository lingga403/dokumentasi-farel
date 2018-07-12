-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 05:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip-pplps`
--
CREATE DATABASE IF NOT EXISTS `sip-pplps` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sip-pplps`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
('AD00001', 'admin', 'df70d98996977a7b6f8dcf37c3265a38', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `ppk`
--

CREATE TABLE `ppk` (
  `id_ppk` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppk`
--

INSERT INTO `ppk` (`id_ppk`, `nama`, `keterangan`) VALUES
('PPK0001', 'PPK Ir. Hani Mayanas', 'Satker Ir. Hani Mayanas'),
('PPK0002', 'PPK Nuris Wahyudi, SST', 'Satker Nuris Wahyudi, SST');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `id_paket` varchar(7) NOT NULL,
  `id_tahun` varchar(7) NOT NULL,
  `nama_dokumen` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `jenis` enum('utama','pendukung') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokumen`
--

INSERT INTO `tbl_dokumen` (`id_paket`, `id_tahun`, `nama_dokumen`, `file`, `jenis`) VALUES
('PKT0001', 'THN0001', 'Surat Sakti', 'surat.pdf', 'utama'),
('PKT0001', 'THN0001', 'surat2', 'surat2.pdf', 'utama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
--

CREATE TABLE `tbl_paket` (
  `id_paket` varchar(7) NOT NULL,
  `nama_paket` varchar(150) NOT NULL,
  `jenis` enum('kontraktual','suakelola') NOT NULL,
  `deskripsi` text NOT NULL,
  `input_by` varchar(50) NOT NULL,
  `id_tahun` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`id_paket`, `nama_paket`, `jenis`, `deskripsi`, `input_by`, `id_tahun`) VALUES
('PKT0001', 'Konsultan Supervisi Pembangunan Sanitasi Terpadu Kawasan Strategis 3 Kabupaten Bima', 'kontraktual', '', 'Tegar Ferdyla', 'THN0001'),
('PKT0002', 'Konsultan Supervisi Pembangunan Sanitasi Terpadu Kawasan Strategis 3 Kabupaten Bima', 'suakelola', '', 'Tegar Ferdyla', 'THN0001'),
('PKT0003', 'Konsultan Supervisi Pembangunan Sanitasi Terpadu Kawasan Strategis 3 Kabupaten Bima', 'suakelola', '', 'Tegar Ferdyla', 'THN0002'),
('PKT0004', 'Konsultan Supervisi Pembangunan Sanitasi Terpadu Kawasan Strategis 3 Kabupaten Bima', 'kontraktual', '', 'Tegar Ferdyla', 'THN0002');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun`
--

CREATE TABLE `tbl_tahun` (
  `id_tahun` varchar(7) NOT NULL,
  `nama_tahun` varchar(4) NOT NULL,
  `deskripsi` text NOT NULL,
  `input_by` varchar(50) NOT NULL,
  `id_ppk` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tahun`
--

INSERT INTO `tbl_tahun` (`id_tahun`, `nama_tahun`, `deskripsi`, `input_by`, `id_ppk`) VALUES
('THN0001', '2014', 'Tahun 2014', 'Tegar Ferdyla M', 'PPK0001'),
('THN0002', '2015', 'Tahun 2015', 'Tegar Ferdyla M', 'PPK0001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(7) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `NIP`, `nama`, `divisi`, `email`, `alamat`, `foto`) VALUES
('USR0001', 'tegarferdyla', 'df70d98996977a7b6f8dcf37c3265a38', '123456789011', 'Tegar Ferdyla M', 'PPK Ir. Hani Mayanas', 'tegar@gmail.com', 'Jl.Joglo', 'user1.jpg'),
('USR0002', 'hendra', 'df70d98996977a7b6f8dcf37c3265a38', '123456789012', 'Hendra', 'PPK PLP JABODETABEK', 'hendra@gmail.com', 'Jl.Meruya', 'user1.jpg'),
('USR0003', 'asal', 'df70d98996977a7b6f8dcf37c3265a38', '123456789013', 'Asal', 'PPK Jakarta', 'asal@gmail.com', 'Jl.Asal', 'user1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ppk`
--
ALTER TABLE `ppk`
  ADD PRIMARY KEY (`id_ppk`);

--
-- Indexes for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  ADD PRIMARY KEY (`id_tahun`),
  ADD KEY `id_ppk` (`id_ppk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;