-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2022 at 12:54 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pemasok` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_pemasok` (`id_pemasok`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jumlah`, `created_at`, `id_pemasok`) VALUES
(1, 'kabel feber optik', 5, '2022-07-17 15:27:02', 1),
(15, 'apa', 2, '2022-07-20 03:33:46', 1),
(4, 'kabel LAN FTP Outdor 15 Meter', 2, '2022-07-17 16:31:06', 2),
(5, 'mikrotik Rb750Gr3', 5, '2022-07-17 20:50:05', 1),
(6, 'TP Link CPE 220', 6, '2022-07-17 20:51:27', 1),
(7, 'TP Link CPE 220', 5, '2022-07-17 21:03:03', 1),
(8, 'kabel LAN FTP Outdor 15 Meter', 7, '2022-07-17 21:18:48', 2),
(9, 'kabel feber optik', 5, '2022-07-18 06:25:07', 2),
(10, 'kabel LAN FTP Outdor 10 Meter', 2, '2022-07-18 15:10:38', 1),
(11, 'Mikrotik RB 450 gx2', 8, '2022-07-19 07:08:26', 2),
(12, 'Mikrotik RB 750 Gr3', 7, '2022-07-19 07:09:19', 2),
(13, 'Mikrotik RB 941 2nd', 5, '2022-07-19 07:09:59', 2),
(14, 'modem Network MD2510', 4, '2022-07-19 07:14:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jns_barang`
--

DROP TABLE IF EXISTS `jns_barang`;
CREATE TABLE IF NOT EXISTS `jns_barang` (
  `id_jns_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jns_barang` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jns_barang`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jns_barang`
--

INSERT INTO `jns_barang` (`id_jns_barang`, `nama_jns_barang`) VALUES
(1, 'mikrotik Rb750Gr3'),
(2, 'UTP  20 Meter'),
(3, 'TP Link CPE 220'),
(4, 'Router Tenda O3 Outdor'),
(5, 'kabel LAN FTP Outdor 15 Meter'),
(6, 'UTP LAN 1Meter'),
(10, 'assssssfff'),
(9, '');

-- --------------------------------------------------------

--
-- Table structure for table `pemasangproduk`
--

DROP TABLE IF EXISTS `pemasangproduk`;
CREATE TABLE IF NOT EXISTS `pemasangproduk` (
  `id_pemasang` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembayaran` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  PRIMARY KEY (`id_pemasang`),
  KEY `id_pembayaran` (`id_pembayaran`),
  KEY `id_barang` (`id_barang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemasok`
--

DROP TABLE IF EXISTS `pemasok`;
CREATE TABLE IF NOT EXISTS `pemasok` (
  `id_pemasok` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemasok` varchar(50) NOT NULL,
  `tlp_pemasok` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pemasok`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasok`
--

INSERT INTO `pemasok` (`id_pemasok`, `nama_pemasok`, `tlp_pemasok`) VALUES
(1, 'Telkomsel', '098765432142'),
(2, 'XL Xiata', '081342125678');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembelian` int(11) NOT NULL,
  `total_bayar` decimal(7,0) NOT NULL,
  `tgl_bayar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pembayaran`),
  KEY `id_pembelian` (`id_pembelian`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `total_bayar`, `tgl_bayar`) VALUES
(1, 1, '3535000', '2022-07-19 08:49:52'),
(2, 4, '3535000', '2022-07-19 09:04:13'),
(4, 1, '3535000', '2022-07-20 03:35:12'),
(5, 1, '3535000', '2022-07-20 03:44:12'),
(6, 1, '3535000', '2022-07-20 03:46:46'),
(7, 8, '3535000', '2022-07-20 14:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `pembelianproduk`
--

DROP TABLE IF EXISTS `pembelianproduk`;
CREATE TABLE IF NOT EXISTS `pembelianproduk` (
  `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `id_registrasi` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pembelian`),
  KEY `id_produk` (`id_produk`),
  KEY `id_registrasi` (`id_registrasi`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelianproduk`
--

INSERT INTO `pembelianproduk` (`id_pembelian`, `id_produk`, `id_registrasi`, `status`, `created_at`) VALUES
(6, 5, 1, 0, '2022-07-20 04:05:51'),
(8, 2, 15, 1, '2022-07-20 14:18:48'),
(4, 4, 2, 1, '2022-07-19 09:03:04'),
(5, 2, 1, 1, '2022-07-20 04:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_produk`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `created_at`) VALUES
(6, 'Paket hotspot User 200  ', '3500000', '2022-07-20 03:32:54'),
(2, 'paket usaha WIFI Mini ', '1400000', '2022-07-17 12:05:22'),
(4, 'paket hotspot 200 User', '3500000', '2022-07-18 05:53:06'),
(5, 'Access Point ONLY', '1700000', '2022-07-19 07:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `registerasi`
--

DROP TABLE IF EXISTS `registerasi`;
CREATE TABLE IF NOT EXISTS `registerasi` (
  `id_registrasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tlp` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `jk` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_registrasi`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerasi`
--

INSERT INTO `registerasi` (`id_registrasi`, `nama_lengkap`, `nik`, `tlp`, `alamat`, `username`, `created_at`, `jk`, `password`) VALUES
(1, 'kiki haerani', '2374656902020937444', '086543212345', 'puyung', 'kiki', '2022-07-16 06:04:25', 'perempuan', '0d61130a6dd5eea85c2c5facfe1c15a7'),
(2, 'abdullah', '2374656902020937444', '086543212345', 'puyung', 'coki', '2022-07-16 17:33:17', 'perempuan', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'kiki haerani', '2374656902020937444', '086543212345', 'puyung', 'coki', '2022-07-17 06:37:19', 'perempuan', '3484e3eed2ac0aa9ce7adaec444ed538'),
(18, 'kiki', '12156189009167743101', '085237388961', 'linkung daye', 'ki', '2022-07-17 10:36:08', 'perempuan', 'c14a380b7e01626f26147badd8bea139'),
(8, 'tinting anggriani', '12156189009167743109', '098765432156', 'puyung', 'admin', '2022-07-17 06:43:41', 'laki-laki', 'c3284d0f94606de1fd2af172aba15bf3'),
(20, 'tinting anggriani', '12156189009167743101', '085237388961', 'linkung daye', 'tinting', '2022-07-18 19:59:34', 'perempuan', '743c345be57034ea6663811a658a6228'),
(21, 'indri', '13245678908765422', '098765431234', 'pringgarata', 'indri', '2022-07-19 11:16:59', 'perempuan', 'd0e5ac215676b70d96c569f8d689239e'),
(15, 'ayuni', '12156189009167743101', '085237388961', 'janepria', 'ayu', '2022-07-17 10:21:07', 'Baca Kitab', '29c65f781a1068a41f735e1b092546de'),
(14, 'asiah', '121561890-9167743109', '098765432156', 'puyung', 'tin', '2022-07-17 07:56:47', 'Baca Kitab', '2cb1b780138bc273459232edda0e4b96');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
