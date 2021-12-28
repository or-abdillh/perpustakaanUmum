-- Adminer 4.8.1 MySQL 5.6.38 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `DB_Perpus`;
CREATE DATABASE `DB_Perpus` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `DB_Perpus`;

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `fullname` varchar(35) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `accounts` (`username`, `password`, `fullname`) VALUES
('admin',	'admin',	'Fulan bin Fulan');

DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id_anggota` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `anggota` (`id_anggota`, `nama`, `jenis_kelamin`, `alamat`) VALUES
('20302022',	'Oka R. Abdillah',	'pria',	'Handil Bakti'),
('20302018',	'Fitriana',	'wanita',	'Mandastana');

DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id_buku` varchar(15) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `kategori_buku` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah_buku` int(10) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `buku` (`id_buku`, `judul_buku`, `kategori_buku`, `keterangan`, `jumlah_buku`) VALUES
('GH110',	'Ayo memasak',	'imformatika',	'Aman',	5),
('GH123',	'Kalkulus untuk SD kelas 3',	'pelajaran',	'Aman',	5),
('GH111',	'Matrik data',	'novel',	'Aman',	1);

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_transaksi` varchar(15) NOT NULL,
  `tanggal_transaksi` varchar(30) DEFAULT NULL,
  `id_anggota` varchar(15) NOT NULL,
  `id_buku` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `status_pengembalian` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `id_anggota`, `id_buku`, `nama`, `judul_buku`, `status_pengembalian`) VALUES
('TRX003',	'2021-12-27',	'20302018',	'GH110',	'Fitriana',	'Ayo memasak',	0),
('TRX002',	'2021-12-28',	'20302022',	'GH110',	'Oka R. Abdillah',	'Ayo memasak',	0);

-- 2021-12-28 03:27:42
