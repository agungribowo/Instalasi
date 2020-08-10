-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2019 at 10:45 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_instalasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cs_store`
--

CREATE TABLE `tbl_cs_store` (
  `id_cs_store` int(11) NOT NULL,
  `kode_cs_store` varchar(20) NOT NULL,
  `nama_cs_store` varchar(25) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cs_store`
--

INSERT INTO `tbl_cs_store` (`id_cs_store`, `kode_cs_store`, `nama_cs_store`, `no_hp`, `alamat`, `username`, `password`, `foto`) VALUES
(2, 'CS0002', 'Sahoy', 2147483647, 'Parung Panjang', 'sahoyyy', 'e10adc3949ba59abbe56e057f20f883e', 'Screenshot_from_2019-08-12_22-41-43.png'),
(3, 'CS0003', 'Admin CS Store', 2147483647, 'Pranata Indonesia', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Screenshot_from_2019-08-18_19-17-22.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(11) NOT NULL,
  `kode_customer` varchar(20) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `no_hp` tinyint(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `kode_customer`, `nama_customer`, `no_hp`, `alamat`) VALUES
(4, 'C0001', 'Nama', 127, 'Pranata Indonesia'),
(5, 'C0005', 'asdasdas', 127, 'asfkhasklfhashf'),
(6, 'C0006', 'asdasdas', 127, 'asfkhasklfhashf'),
(7, 'C0007', 'kjkjgjkgkj', 127, 'kjasgfjkgaskj'),
(8, 'C0008', 'Testing', 127, 'Testing'),
(9, 'C0009', 'Testing 1', 127, 'asfkgjkafs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_installer`
--

CREATE TABLE `tbl_installer` (
  `id_installer` int(11) NOT NULL,
  `kode_installer` varchar(20) NOT NULL,
  `nama_installer` varchar(20) NOT NULL,
  `no_hp` tinyint(13) NOT NULL,
  `alamat` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_installer`
--

INSERT INTO `tbl_installer` (`id_installer`, `kode_installer`, `nama_installer`, `no_hp`, `alamat`, `username`, `password`, `foto`) VALUES
(2, 'I0002', 'Suaeb', 127, 'Kafsjagsfhj', 'suaeb', '7e7acd159ff700df1c53501dc41a869a', 'laptop_room_on_the_desk_keyboard_mouse_apple_window_interior_73963_1920x1080.jpg'),
(3, 'I0003', 'Saiful', 127, 'sdgjlbakjgshkjh', 'saiful', '4eeccab0e8c08e16a1d08296265e38fa', 'Screenshot_from_2019-08-12_22-41-42_-_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_instalasi`
--

CREATE TABLE `tbl_jadwal_instalasi` (
  `id_jadwal_instalasi` int(11) NOT NULL,
  `kode_instalasi` varchar(25) NOT NULL,
  `kode_permintaan` varchar(25) NOT NULL,
  `kode_customer` varchar(25) NOT NULL,
  `kode_produk` varchar(25) NOT NULL,
  `kode_installer` varchar(25) NOT NULL,
  `tanggal_instalasi` varchar(25) NOT NULL,
  `hasil_perbaikan` varchar(35) NOT NULL,
  `hasil_kerja` varchar(35) NOT NULL,
  `komentar` text NOT NULL,
  `biaya_service` int(35) NOT NULL,
  `biaya_transport` int(35) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal_instalasi`
--

INSERT INTO `tbl_jadwal_instalasi` (`id_jadwal_instalasi`, `kode_instalasi`, `kode_permintaan`, `kode_customer`, `kode_produk`, `kode_installer`, `tanggal_instalasi`, `hasil_perbaikan`, `hasil_kerja`, `komentar`, `biaya_service`, `biaya_transport`, `status`) VALUES
(1, 'JI0001', 'PM0001', 'C0005', 'P0001', 'I0002', '12/10/2019 13:21', 'a', 'b', 'c', 736742, 758575, 1),
(2, 'JI0002', 'PM0002', 'C0007', 'P0002', 'I0003', '05/11/2019 20:14', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permintaan`
--

CREATE TABLE `tbl_permintaan` (
  `id_permintaan` int(11) NOT NULL,
  `kode_permintaan` varchar(25) NOT NULL,
  `kode_customer` varchar(25) NOT NULL,
  `kode_produk` varchar(25) NOT NULL,
  `tanggal_permintaan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permintaan`
--

INSERT INTO `tbl_permintaan` (`id_permintaan`, `kode_permintaan`, `kode_customer`, `kode_produk`, `tanggal_permintaan`) VALUES
(1, 'PM0001', 'C0006', 'P0001', '11-10-2019'),
(2, 'PM0002', 'C0007', 'P0002', '11-10-2019'),
(3, 'PM0003', 'C0008', 'P0003', '11-10-2019'),
(4, 'PM0004', 'C0009', 'P0004', '11-10-2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(25) NOT NULL,
  `nama_produk` varchar(35) NOT NULL,
  `jenis_produk` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `kode_produk`, `nama_produk`, `jenis_produk`) VALUES
(1, 'P0001', 'asdjgkjasdgjkg', 'kljasfjkgasjk'),
(2, 'P0002', 'kasfkgasgkjf', 'kjgasfjgkjasfg'),
(3, 'P0003', 'Testing', 'Testing'),
(4, 'P0004', 'Testing 1', 'asfhjkhj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cs_store`
--
ALTER TABLE `tbl_cs_store`
  ADD PRIMARY KEY (`id_cs_store`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tbl_installer`
--
ALTER TABLE `tbl_installer`
  ADD PRIMARY KEY (`id_installer`);

--
-- Indexes for table `tbl_jadwal_instalasi`
--
ALTER TABLE `tbl_jadwal_instalasi`
  ADD PRIMARY KEY (`id_jadwal_instalasi`);

--
-- Indexes for table `tbl_permintaan`
--
ALTER TABLE `tbl_permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cs_store`
--
ALTER TABLE `tbl_cs_store`
  MODIFY `id_cs_store` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_installer`
--
ALTER TABLE `tbl_installer`
  MODIFY `id_installer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jadwal_instalasi`
--
ALTER TABLE `tbl_jadwal_instalasi`
  MODIFY `id_jadwal_instalasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_permintaan`
--
ALTER TABLE `tbl_permintaan`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
