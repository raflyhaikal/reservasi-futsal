-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 03:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(100) NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_lapangan`, `id_transaksi`) VALUES
(1, 1, 16),
(2, 1, 17),
(3, 1, 18),
(4, 1, 19),
(6, 1, 21),
(7, 1, 22),
(8, 1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nominal` int(25) NOT NULL,
  `foto` varchar(256) DEFAULT NULL,
  `catatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_transaksi`, `nominal`, `foto`, `catatan`) VALUES
(27, 16, 120000, 'mandiri-struk.jpg', 'Lunas'),
(28, 17, 60000, 'mandiri-struk1.jpg', 'Lunas'),
(29, 18, 60000, 'mandiri-struk2.jpg', 'Lunas'),
(30, 19, 60000, 'contoh_(2).jpg', 'Lunas'),
(32, 21, 10000, 'hadits21info-invoice1797799.jpg', 'DP 10k'),
(33, 22, 20000, 'uNewsIMG-115de92ca249d73_1575562402.jpg', 'Kurang 100k'),
(34, 23, 20000, NULL, 'DP 20k'),
(35, 24, 100000, 'mandiri-struk3.jpg', 'Kurang 20rb');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lapangan` int(1) NOT NULL,
  `nama_lapangan` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `nama_lapangan`, `harga`, `foto`) VALUES
(1, 'Lapangan 1', 60000, NULL),
(2, 'Lapangan 2', 60000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `no_telepon`, `username`, `password`) VALUES
(1, 'haikal', 'raflynovendra@gmail.com', '089675615640', 'haikal', 'a847b53f9999fc735ca2b6f1419c93d0'),
(2, 'rafly', 'raflyhaikal@gmail.com', '089675615640', 'rafly', '0cfeca41e1bf14cfae765b2edd2786b0'),
(3, 'arsep', 'arsep@gmail.com', '08562558176', 'arsep', 'a7aa96aa76b29f0a3de1e4665d5ce386'),
(4, 'andre', 'andre@gmail.com', '089675615640', 'andre', '19984dcaea13176bbb694f62ba6b5b35'),
(5, 'christian', 'christian@gmail.com', '089675615640', 'christian', '7ff135854376850e9711bd75ce942e07'),
(6, 'ary', 'ary@gmail.com', '08912345432', 'ary', '8ca1ad9a863255641c7c3ea0d1904be0');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(50) NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `jam` varchar(25) NOT NULL,
  `waktu` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('Belum Lunas','Lunas','Belum Konfirmasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_lapangan`, `id_pelanggan`, `tanggal`, `jam`, `waktu`, `total`, `status`) VALUES
(16, 1, 1, '2020-01-13 00:00:00', '06:00', 2, 120000, 'Lunas'),
(17, 1, 3, '2020-01-14 00:00:00', '10:00', 1, 60000, 'Lunas'),
(18, 1, 4, '2020-01-15 00:00:00', '13:00', 1, 60000, 'Lunas'),
(19, 1, 5, '2020-01-16 00:00:00', '09:00', 1, 60000, 'Lunas'),
(21, 1, 5, '2020-01-17 00:00:00', '06:00', 1, 60000, 'Belum Lunas'),
(22, 1, 6, '2020-01-18 00:00:00', '13:00', 2, 120000, 'Belum Lunas'),
(24, 1, 2, '2020-01-19 00:00:00', '16:00', 2, 120000, 'Belum Lunas'),
(25, 1, 2, '2020-01-20 00:00:00', '21:00', 1, 60000, 'Belum Konfirmasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id_lapangan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
