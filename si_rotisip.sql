-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Des 2017 pada 05.16
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_rotisip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `brg_id` int(11) NOT NULL,
  `brg_jenis` varchar(30) NOT NULL,
  `brg_nama` varchar(30) NOT NULL,
  `brg_harga` int(11) NOT NULL,
  `brg_stok` int(3) NOT NULL,
  `brg_min` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`brg_id`, `brg_jenis`, `brg_nama`, `brg_harga`, `brg_stok`, `brg_min`) VALUES
(105, 'Basah', 'roti pisang2', 30088, 0, 0),
(111, 'Basah', 'DDWDWD', 312323, 0, 0),
(112, 'Basah', 'EWREWRW', 343434, 232323, 0),
(113, 'Basah', 'WEQWEQWE', 232323, 22323, 0),
(114, 'Basah', 'WWEQWEQW', 232323, 4, 0),
(115, 'Basah', 'asdasdasd', 232323, 0, 0),
(116, 'Basah', '34343434', 4545454, 20, 4),
(117, 'Basah', 'edewwer', 232323, 2312321, 0),
(118, 'Basah', 'sdasdsad', 5656565, 2147483647, 0),
(119, 'Basah', 'Roti Kering', 4000, 0, 0),
(120, 'Kering', 'Roti Kering', 32323, 0, 0),
(121, 'Basah', 'dwdwd', 34343, 2323, 0),
(122, 'Basah', 'Roti Kering', 4000, 0, 0),
(123, 'Basah', 'Rotiboy', 70000, 0, 0),
(124, 'Basah', 'Tes2', 7000, 0, 0),
(125, 'Basah', 'Roti Basah', 10000, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `pj_id` int(11) NOT NULL,
  `brg_id` int(11) NOT NULL,
  `dpj_jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `pj_id` int(11) NOT NULL,
  `pj_tgl` date NOT NULL,
  `pj_jam` time NOT NULL,
  `pj_totitem` int(11) NOT NULL,
  `pj_cash` int(11) NOT NULL,
  `pj_kembali` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `usr_id` varchar(11) NOT NULL,
  `usr_pass` varchar(40) NOT NULL,
  `usr_nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`usr_id`, `usr_pass`, `usr_nama`) VALUES
('1', '12345', 'Rini'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`brg_id`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`pj_id`,`brg_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`pj_id`,`usr_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `brg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `pj_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `pj_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
