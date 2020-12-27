-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 01:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milanisti`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(6) UNSIGNED ZEROFILL NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `masa_aktif` date NOT NULL,
  `status_anggota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_pendaftaran`, `nama`, `email`, `alamat`, `tgl_pendaftaran`, `masa_aktif`, `status_anggota`) VALUES
(000001, 43, 'Dicky', 'dickyganda@gmail.com', 'Pucuk', '2018-07-24', '2020-07-24', 'Aktif'),
(000002, 44, 'Dimas', 'dimasganda21@gmail.com', 'Pucuk', '2018-07-25', '2020-07-25', 'Aktif'),
(000003, 45, 'Nur Syam Insani', 'ocham@gmail.com', 'Lamongan', '2018-07-25', '2020-07-25', 'Aktif'),
(000005, 46, 'Rizardo Kaka', 'rizard@gmail.com', 'Sukodadi', '2018-07-25', '2020-07-25', 'Aktif'),
(000006, 47, 'Arifin', 'bosnipir@gmail.com', 'Pucuk', '2018-07-25', '2020-07-25', 'Aktif'),
(000007, 48, 'Raden Bajol', 'baja@gmail.com', 'Lamongan', '2018-08-01', '2020-08-01', 'Aktif'),
(000008, 49, 'Mufti Hakim', 'muftihakim@gmail.com', 'Deket', '2018-08-03', '2020-08-03', 'Aktif'),
(000009, 50, 'Dicky', 'dickyganda@gmail.com', 'Pucuk', '2018-08-04', '2020-08-04', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `authKey` varchar(50) NOT NULL,
  `accessToken` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `authKey`, `accessToken`, `role`) VALUES
(1, 'admin', 'milanisti', '', '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pendaftaran` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jumlah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pendaftaran`, `nama`, `tgl_pembayaran`, `jumlah`) VALUES
(8, '43', 'Dicky', '2018-07-25', '50000'),
(9, '44', 'Dimas', '2018-07-25', '50000'),
(10, '45', 'Nur Syam Insani', '2018-07-25', '50000'),
(11, '46', 'Rizardo Kaka', '2018-07-25', '50000'),
(12, '47', 'Arifin', '2018-07-25', '50000'),
(13, '48', 'Raden Bajol', '2018-08-01', '50000'),
(14, '49', 'Mufti Hakim', '2018-08-03', '50000'),
(15, '50', 'Dicky', '2018-08-04', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `status_pendaftaran` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama`, `alamat`, `email`, `tgl_pendaftaran`, `status_pendaftaran`) VALUES
(43, 'Dicky', 'Pucuk', 'dickyganda@gmail.com', '2018-07-24', 'Sudah Melakukan Pembayaran'),
(44, 'Dimas', 'Pucuk', 'dimasganda21@gmail.com', '2018-07-25', 'Sudah Melakukan Pembayaran'),
(45, 'Nur Syam Insani', 'Lamongan', 'ocham@gmail.com', '2018-07-25', 'Sudah Melakukan Pembayaran'),
(46, 'Rizardo Kaka', 'Sukodadi', 'rizard@gmail.com', '2018-07-25', 'Sudah Melakukan Pembayaran'),
(47, 'Arifin', 'Pucuk', 'bosnipir@gmail.com', '2018-07-25', 'Sudah Melakukan Pembayaran'),
(48, 'Raden Bajol', 'Lamongan', 'ocham@gmail.com', '2018-08-01', 'Sudah Melakukan Pembayaran'),
(49, 'Mufti Hakim', 'Deket', 'muftihakim@gmail.com', '2018-08-03', 'Sudah Melakukan Pembayaran'),
(50, 'Dicky', 'Pucuk', 'dickyganda@gmail.com', '2018-08-04', 'Sudah Melakukan Pembayaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
