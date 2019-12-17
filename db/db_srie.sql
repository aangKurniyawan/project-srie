-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 03:24 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_srie`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cuci_satuan`
--

CREATE TABLE `tb_cuci_satuan` (
  `id_satuan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripisi` text NOT NULL,
  `lama_hari` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_feedback`
--

INSERT INTO `tb_feedback` (`id_feedback`, `id_member`, `subject`, `message`, `status`, `created`, `deleted`) VALUES
(1, 9, 'tes sibject', '                                                                              ini tes feedback                                                                        ', 'posting', '2019-11-26 07:02:04', '0'),
(2, 9, 'Pelayanan yang sangat baik', '                          Terimakasih sunrise laundry hasil cuciannya sangat rapih dan harum                         ', 'posting', '2019-11-28 02:25:42', '0'),
(3, 9, 'Pelayan nya ramah', 'di sunrise loundry petugas nya ramah banget jadi nyaman nyuci pakaian disini', 'terkirim', '2019-11-28 02:31:52', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_cuci`
--

CREATE TABLE `tb_jenis_cuci` (
  `id_jenis_cuci` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `lama_hari` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_cuci`
--

INSERT INTO `tb_jenis_cuci` (`id_jenis_cuci`, `nama_jenis`, `harga`, `lama_hari`, `status`, `deskripsi`, `id_user`, `created`, `deleted`) VALUES
(1, 'Paket Kilatww', '100002', 'Paket Kilat', 'Aktif', '                          Paketwwww Kilat                        ', 5, '2019-11-13 10:00:49', '0'),
(2, 'Paket Kilat 2', '10000', '1 Hari', 'Aktif', '                  22222      ', 5, '2019-11-13 10:06:41', '0'),
(3, 'Paket Kilat 3', '10000', 'Paket Kilat 3', 'Aktif', '                          Paket Kilat 3                        wwwwwwwwwwwwww', 5, '2019-11-13 10:35:12', '0'),
(4, 'Paket Kilat', '10000222', 'Paket Kilat', 'Aktif', 'aang', 5, '2019-11-13 10:50:46', '0'),
(5, 'Paket Kilat', '10000', '3 Hari', 'Aktif', '         ssss               ', 5, '2019-11-13 10:51:41', '0'),
(6, 'Paket Kilat 5', '10000', '1 Hari', 'Aktif', '                    tes    ', 5, '2019-11-21 02:42:33', '0'),
(7, 'Paket Kilat 5', '10000', '1 Hari', 'Aktif', '                    tes    ', 5, '2019-11-22 03:02:56', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(255) NOT NULL,
  `moto_outlet` text NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_outlet`
--

INSERT INTO `tb_outlet` (`id_outlet`, `nama_outlet`, `moto_outlet`, `no_telepon`, `email`, `alamat`, `foto1`, `id_user`, `created`, `deleted`) VALUES
(2, 'Sunrise', 'Percayakan Pakaian Kotor Anda Kepada Kami', '089531529435', 'sunrise@gmail.com', 'Jl Raya Parungpanjang No.11,Kecamatan Parungpanjang,Bogor, Jawa Barat.', 'BrockenGigantPremium.png', 5, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `berat_cuci` varchar(50) NOT NULL,
  `jumlah_cucian` varchar(20) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `status_bayar` varchar(255) NOT NULL,
  `status_cucian` varchar(255) NOT NULL,
  `jumlah_pembayaran` varchar(255) NOT NULL,
  `sisa_bayar` varchar(255) NOT NULL,
  `tgl_selesai_cuci` datetime NOT NULL,
  `id_operator` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_member`, `id_jenis`, `berat_cuci`, `jumlah_cucian`, `total_harga`, `status_bayar`, `status_cucian`, `jumlah_pembayaran`, `sisa_bayar`, `tgl_selesai_cuci`, `id_operator`, `created`, `deleted`) VALUES
(0, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 0, '2019-11-28 04:43:13', '0'),
(71, 9, 1, '5', '4', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:47:16', '0'),
(73, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:50:49', '0'),
(74, 9, 1, '2', '1', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:51:16', '0'),
(75, 9, 1, '2', '1', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:52:41', '0'),
(76, 9, 1, '2', '1', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:53:10', '0'),
(77, 9, 1, '2', '1', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:53:44', '0'),
(78, 9, 1, '2', '4', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:54:42', '0'),
(79, 9, 1, '2', '4', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:57:55', '0'),
(80, 9, 1, '2', '4', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:58:11', '0'),
(81, 9, 1, '2', '4', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:58:23', '0'),
(82, 9, 1, '2', '4', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:58:53', '0'),
(83, 9, 1, '2', '4', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 15:59:46', '0'),
(84, 9, 1, '2', '4', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:00:12', '0'),
(85, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:00:45', '0'),
(86, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:01:44', '0'),
(87, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:02:52', '0'),
(88, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:03:35', '0'),
(89, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:05:38', '0'),
(90, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:06:07', '0'),
(91, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:06:44', '0'),
(92, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:07:17', '0'),
(93, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:07:32', '0'),
(94, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:07:52', '0'),
(95, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:14:54', '0'),
(96, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:17:37', '0'),
(97, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:18:55', '0'),
(98, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:33:34', '0'),
(99, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:34:09', '0'),
(100, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:34:40', '0'),
(101, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:35:50', '0'),
(102, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:36:04', '0'),
(103, 9, 1, '6', '2', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:38:41', '0'),
(104, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:39:14', '0'),
(105, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:39:27', '0'),
(106, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:44:24', '0'),
(107, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:44:55', '0'),
(108, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:46:54', '0'),
(109, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:48:23', '0'),
(110, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:48:35', '0'),
(111, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:48:43', '0'),
(112, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:50:51', '0'),
(113, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:51:15', '0'),
(114, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 16:51:27', '0'),
(115, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 17:51:02', '0'),
(116, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 17:51:11', '0'),
(117, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 17:56:18', '0'),
(118, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 17:56:22', '0'),
(119, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 17:56:33', '0'),
(120, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 17:56:37', '0'),
(121, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:04:42', '0'),
(122, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:04:46', '0'),
(123, 9, 1, '4', '3', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:05:07', '0'),
(124, 9, 1, '4', '3', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:05:20', '0'),
(125, 9, 1, '4', '3', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:09:40', '0'),
(126, 9, 1, '2', '2', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:10:48', '0'),
(127, 9, 1, '2', '2', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:11:43', '0'),
(128, 9, 1, '2', '2', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:11:48', '0'),
(129, 9, 1, '2', '2', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:18:13', '0'),
(130, 9, 1, '2', '2', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:18:26', '0'),
(131, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:18:48', '0'),
(132, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:19:02', '0'),
(133, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:19:09', '0'),
(134, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:19:23', '0'),
(135, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:21:47', '0'),
(136, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:23:04', '0'),
(137, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:23:20', '0'),
(138, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:24:10', '0'),
(139, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:24:14', '0'),
(140, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:26:53', '0'),
(141, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:26:57', '0'),
(142, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:31:47', '0'),
(143, 9, 1, '5', '1', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 18:31:56', '0'),
(144, 9, 1, '5', '4', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:02:01', '0'),
(145, 9, 1, '5', '4', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:02:57', '0'),
(146, 9, 1, '2', '1', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:04:05', '0'),
(147, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:06:28', '0'),
(148, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:06:32', '0'),
(149, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:06:37', '0'),
(150, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:06:47', '0'),
(151, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:06:51', '0'),
(152, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:07:03', '0'),
(153, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:07:06', '0'),
(154, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:07:15', '0'),
(155, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:08:41', '0'),
(156, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:08:47', '0'),
(157, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:08:50', '0'),
(158, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:09:03', '0'),
(159, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:09:06', '0'),
(160, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:11:27', '0'),
(161, 9, 1, '6', '4', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:11:30', '0'),
(162, 9, 1, '5', '4', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:25:40', '0'),
(163, 9, 1, '5', '4', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:25:44', '0'),
(164, 9, 1, '5', '4', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:26:47', '0'),
(165, 9, 1, '5', '4', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:26:51', '0'),
(166, 9, 1, '5', '4', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:28:03', '0'),
(167, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:33:04', '0'),
(168, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:39:40', '0'),
(169, 9, 1, '5', '2', '500010', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:40:31', '0'),
(170, 9, 1, '2', '2', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:41:31', '0'),
(171, 9, 1, '2', '2', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:41:57', '0'),
(172, 9, 1, '2', '2', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:42:17', '0'),
(173, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:46:02', '0'),
(174, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:46:20', '0'),
(175, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:46:25', '0'),
(176, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:46:48', '0'),
(177, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:46:59', '0'),
(178, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:47:03', '0'),
(179, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:47:46', '0'),
(180, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:48:25', '0'),
(181, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:48:55', '0'),
(182, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:48:59', '0'),
(183, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 19:49:02', '0'),
(184, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 20:12:28', '0'),
(185, 9, 1, '2', '3', '200004', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 20:12:34', '0'),
(186, 9, 1, '4', '2', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 20:16:26', '0'),
(187, 9, 1, '6', '1', '600012', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 20:30:03', '0'),
(188, 9, 1, '1', '1', '100002', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 20:33:09', '0'),
(189, 9, 1, '1', '2', '100002', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-22 20:33:59', '0'),
(190, 9, 1, '1', '4', '100002', 'Lunas', 'Selesai Pengerjaan', '100002', '0', '0000-00-00 00:00:00', 12, '2019-11-23 03:16:51', '0'),
(191, 9, 2, '2', '2', '20000', 'Belum Lunas', 'Transaksi Batal', '', '', '0000-00-00 00:00:00', 12, '2019-11-23 03:19:46', '0'),
(192, 9, 4, '5', '3', '50001110', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-23 03:23:32', '0'),
(193, 9, 5, '1', '1', '10000', 'Belum Lunas', 'Transaksi Batal', '', '', '0000-00-00 00:00:00', 12, '2019-11-23 03:24:55', '0'),
(194, 9, 1, '2', '2', '200004', 'Belum Lunas', 'Transaksi Batal', '', '', '0000-00-00 00:00:00', 12, '2019-11-23 03:26:10', '0'),
(195, 9, 1, '6', '2', '600012', 'Lunas', 'Selesai Pengerjaan', '600012', '0', '0000-00-00 00:00:00', 12, '2019-11-23 03:26:40', '0'),
(196, 9, 2, '2', '2', '20000', 'Lunas', 'Dalam Pengerjaan', '', '', '0000-00-00 00:00:00', 12, '2019-11-23 03:26:59', '0'),
(197, 9, 4, '2', '3', '20000444', 'Lunas', 'Dalam Pengerjaan', '20000444', '0', '0000-00-00 00:00:00', 12, '2019-11-23 06:39:45', '0'),
(198, 9, 2, '4', '4', '40000', 'Lunas', 'Transaksi Batal', '40000', '0', '0000-00-00 00:00:00', 12, '2019-11-23 07:15:42', '0'),
(199, 9, 4, '5', '1', '50001110', 'Belum Lunas', 'Transaksi Batal', '', '', '0000-00-00 00:00:00', 12, '2019-11-24 14:14:21', '0'),
(200, 9, 5, '6', '3', '60000', 'Lunas', 'Selesai Pengerjaan', '', '', '0000-00-00 00:00:00', 12, '2019-11-25 03:50:40', '0'),
(201, 9, 4, '1', '1', '10000222', 'Lunas', 'Selesai Pengerjaan', '10000222', '0', '0000-00-00 00:00:00', 12, '2019-11-25 03:54:35', '0'),
(202, 9, 1, '1', '2', '100002', 'Lunas', 'Selesai Pengerjaan', '100002', '0', '0000-00-00 00:00:00', 12, '2019-11-25 03:55:55', '0'),
(203, 9, 2, '5', '1', '50000', 'Lunas', 'Selesai Pengerjaan', '50000', '0', '0000-00-00 00:00:00', 12, '2019-11-25 04:08:38', '0'),
(204, 9, 5, '4', '4', '40000', 'Lunas', 'Selesai Pengerjaan', '40000', '0', '0000-00-00 00:00:00', 12, '2019-11-25 04:09:57', '0'),
(205, 9, 1, '5', '1', '500010', 'Lunas', 'Selesai Pengerjaan', '', '', '0000-00-00 00:00:00', 12, '2019-11-27 18:20:39', '0'),
(206, 9, 4, '6', '1', '60001332', 'Lunas', 'Selesai Pengerjaan', '60001332', '0', '0000-00-00 00:00:00', 12, '2019-11-27 18:21:17', '0'),
(208, 9, 1, '4', '4', '400008', 'Lunas', 'Dalam Pengerjaan', '400008', '0', '0000-00-00 00:00:00', 5, '2019-11-28 04:40:31', '0'),
(209, 9, 1, '', '4', '0', '', '', '', '', '0000-00-00 00:00:00', 0, '2019-11-28 04:41:15', '0'),
(211, 9, 1, '4', '4', '400008', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-11-28 05:48:30', '0'),
(212, 9, 1, '2', '4', '200004', 'Lunas', 'Dalam Pengerjaan', '200004', '0', '0000-00-00 00:00:00', 5, '2019-11-28 05:57:42', '0'),
(213, 9, 1, '4', '4', '400008', 'Lunas', 'Selesai Pengerjaan', '400008', '0', '0000-00-00 00:00:00', 5, '2019-11-28 05:57:47', '0'),
(214, 15, 5, '2', '3', '20000', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-12-10 13:35:23', '0'),
(215, 9, 5, '6', '4', '60000', 'Belum Lunas', 'Disimpan', '', '', '0000-00-00 00:00:00', 12, '2019-12-17 15:18:40', '0'),
(216, 7, 4, '5', '1', '50001110', 'Lunas', 'Dalam Pengerjaan', '50001110', '0', '0000-00-00 00:00:00', 12, '2019-12-17 15:19:20', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `gender`, `no_telepon`, `alamat`, `email`, `password`, `level`, `foto`, `created`, `deleted`) VALUES
(5, 'Mahmud', 'laki-laki', '089531529435', '                                                 jalan cinta yang tidak mempunyai nomer dan tempat yang dapat dituju kembali ketika rindu     kamu                                                                                                                                                                                                                 ', 'aangkurniyawan@gmail.com', '123456', 'Operator', 'BrockenGigantPremium.png', '0000-00-00 00:00:00', ''),
(7, 'Juleha', 'perempuan', '089531529436', '                                                                        Jl Raya Salimah Kp Cilangkap Persekon Rt 04/02 Desa Lumpang Kecamatan Parungpanjang Kabupaten Bogor 16360 Indonesia                                                                                                                                                                                                                                                                ', 'aangkurniyawan@rocketmail.com', 'tiwi', 'Pengelola', 'foto-ai-lela.png', '0000-00-00 00:00:00', ''),
(9, 'tiwi sengklek jasa', 'perempuan', '089531529437', 'tes', 'aangkurniyawan@gmail.com2', 'res', 'Member', '.png', '2019-11-13 04:28:30', '0'),
(12, 'Sri Iftahur Rizkiah', 'perempuan', '021531529435', '                        Jl Raya Cilangkap Perdayu, Parungpanjang, Bogor 16360                      ', 'pengelola@email.com', '123456', 'Pengelola', 'foto-ai-lela.png', '0000-00-00 00:00:00', ''),
(13, 'Operator', 'laki-laki', '0895315294371', 'cilangkap', 'operator@email.com', '123456', 'Operator', 'foto-lela.png', '2019-11-28 07:01:52', '0'),
(14, 'Member', 'perempuan', '0895315294375', 'cilangkap', 'member@email.com', '123456', 'Member', 'foto-ai-lela.png', '2019-11-28 07:02:38', '0'),
(15, 'nanda', 'laki-laki', '08581316683', 'jauh', 'nanda@email.com', 'nanda', 'Member', 'BrockenGigantPremium.png', '2019-12-10 13:34:03', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cuci_satuan`
--
ALTER TABLE `tb_cuci_satuan`
  ADD PRIMARY KEY (`id_satuan`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `nama_barang` (`nama_barang`);
ALTER TABLE `tb_cuci_satuan` ADD FULLTEXT KEY `nama_barang_2` (`nama_barang`);

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `tb_jenis_cuci`
--
ALTER TABLE `tb_jenis_cuci`
  ADD PRIMARY KEY (`id_jenis_cuci`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id_outlet`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_operator` (`id_operator`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_user` (`id_member`,`id_jenis`) USING BTREE;

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cuci_satuan`
--
ALTER TABLE `tb_cuci_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jenis_cuci`
--
ALTER TABLE `tb_jenis_cuci`
  MODIFY `id_jenis_cuci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD CONSTRAINT `tb_feedback_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_jenis_cuci`
--
ALTER TABLE `tb_jenis_cuci`
  ADD CONSTRAINT `tb_jenis_cuci_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD CONSTRAINT `tb_outlet_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_5` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis_cuci` (`id_jenis_cuci`),
  ADD CONSTRAINT `tb_transaksi_ibfk_6` FOREIGN KEY (`id_member`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
