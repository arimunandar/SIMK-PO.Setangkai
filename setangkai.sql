-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2015 pada 03.03
-- Versi Server: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi-anggi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(150) DEFAULT NULL,
  `nama_pengirim` varchar(50) DEFAULT NULL,
  `telp_pengirim` varchar(50) DEFAULT NULL,
  `nama_penerima` varchar(50) DEFAULT NULL,
  `telp_penerima` varchar(50) DEFAULT NULL,
  `alamat_penerima` text,
  `tanggal` varchar(15) DEFAULT NULL,
  `tarif_rute` varchar(15) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `id_rute` int(11) DEFAULT NULL,
  `id_supir` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_jadwal` (`id_jadwal`,`id_rute`,`id_supir`),
  KEY `id_rute` (`id_rute`),
  KEY `id_supir` (`id_supir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `jadwal` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `jadwal`) VALUES
(33, '07:00'),
(34, '08:00'),
(35, '09:00'),
(36, '10:00'),
(37, '11:00'),
(38, '12:00'),
(39, '13:00'),
(40, '14:00'),
(41, '15:00'),
(42, '16:00'),
(43, '17:00'),
(44, '18:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
  `id_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_mobil` varchar(50) DEFAULT NULL,
  `type_mobil` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_mobil`),
  UNIQUE KEY `nomor_mobil` (`nomor_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nomor_mobil`, `type_mobil`) VALUES
(1, '35345', 'dfdfg'),
(2, '2342', 'asdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penumpang`
--

CREATE TABLE IF NOT EXISTS `penumpang` (
  `id_penumpang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penumpang` varchar(50) DEFAULT NULL,
  `telp_penumpang` varchar(50) DEFAULT NULL,
  `alamat_jemput` text,
  `alamat_tujuan` text,
  `tanggal` varchar(25) DEFAULT NULL,
  `tarif_rute` varchar(15) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `id_rute` int(11) DEFAULT NULL,
  `id_supir` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_penumpang`),
  KEY `id_jadwal` (`id_jadwal`,`id_rute`,`id_supir`),
  KEY `id_rute` (`id_rute`,`id_supir`),
  KEY `id_supir` (`id_supir`),
  KEY `id_rute_2` (`id_rute`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
  `id_rute` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rute` varchar(250) DEFAULT NULL,
  `jenis_rute` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_rute`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id_rute`, `nama_rute`, `jenis_rute`) VALUES
(1, 'Batusangkar - Padang', 'Penumpang'),
(2, 'Batusangkar - Padang', 'Barang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE IF NOT EXISTS `supir` (
  `id_supir` int(11) NOT NULL AUTO_INCREMENT,
  `nama_supir` varchar(50) DEFAULT NULL,
  `alamat_supir` text,
  `telp_supir` varchar(50) DEFAULT NULL,
  `no_sim` varchar(50) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_supir`),
  UNIQUE KEY `no_sim` (`no_sim`),
  KEY `id_mobil` (`id_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`id_supir`, `nama_supir`, `alamat_supir`, `telp_supir`, `no_sim`, `id_mobil`) VALUES
(2, 'Muhamad Iqbal', 'Lintau buo', '081266541250', '1022510144125874', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin'),
(3, 'operator', 'operator', 'Operator', 'operator'),
(6, 'asd', 'asd', 'asd', 'admin'),
(8, 'eeeeeeeeee', 'dasd', 'sddd', 'operator');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_3` FOREIGN KEY (`id_supir`) REFERENCES `supir` (`id_supir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penumpang`
--
ALTER TABLE `penumpang`
  ADD CONSTRAINT `penumpang_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penumpang_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penumpang_ibfk_3` FOREIGN KEY (`id_supir`) REFERENCES `supir` (`id_supir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `supir`
--
ALTER TABLE `supir`
  ADD CONSTRAINT `supir_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
