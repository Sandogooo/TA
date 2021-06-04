-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2017 at 03:06 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `username` varchar(10) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `jam_main` varchar(5) NOT NULL,
  `selesai` varchar(5) NOT NULL,
  `lapangan` varchar(3) NOT NULL,
  `Namatim` varchar(15) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`username`, `tanggal`, `jam_main`, `selesai`, `lapangan`, `Namatim`, `harga`, `Status`, `gambar`) VALUES
('wahyu', '07/14/2017', '09:00', '10:00', '001', 'wahyuFC', '110000', 'lunas', 'mmmmm.jpg'),
('polinas', '07/15/2017', '08:00', '10:00', '002', 'fc123', 'Member', 'Member', 'index.jpg'),
('wahyu', '07/21/2017', '11:00', '12:00', '001', '123', '110000', 'Booked', 'index.jpg'),
('wahyu', '07/31/2017', '11:00', '12:00', '001', 'ljlkjlkjlkjlkj', '110000', 'Booked', 'index.jpg'),
('wahyu', '08/12/2017', '10:00', '13:00', '001', 'kskljda', '330000', 'Booked', 'index.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE IF NOT EXISTS `lapangan` (
  `kd_lapangan` varchar(10) NOT NULL,
  `hrg_lapangan` varchar(10) NOT NULL,
  `malam` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_lapangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`kd_lapangan`, `hrg_lapangan`, `malam`) VALUES
('001', '110000', '140000'),
('002', '110000', '140000');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `no_telp` varchar(12) NOT NULL,
  `daftar` varchar(10) NOT NULL,
  `habis` varchar(10) NOT NULL,
  `sisa` varchar(2) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`no_telp`, `daftar`, `habis`, `sisa`, `harga`, `username`, `password`, `status`, `gambar`) VALUES
('admin', 'admin', 'admin', 'ad', 'admin', 'admin', 'admin', 'admin', ''),
('086566565666', '14/07/2017', '13/08/2017', '2', '400000', 'polinas', '123', 'lunas', 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no_ktp` varchar(16) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(5) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no_ktp`, `nama_lengkap`, `alamat`, `no_telepon`, `username`, `password`, `level`) VALUES
('admin', 'admin', 'amin', 'admin', 'admin', 'admin', 'admin'),
('mmmm', 'mmmm', 'mmm', 'mmm', 'mmm', 'mm', 'user'),
('089778', 'wahyu ramadhan', 'biring romang', '089608682335', 'wahyu', '123', 'user'),
('1402', 'wahyu', 'ukip', '87798', '1402', '1402', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
