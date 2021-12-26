-- Adminer 4.8.1 MySQL 5.6.38 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `DB_Perpus`;
CREATE DATABASE `DB_Perpus` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `DB_Perpus`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `fullname` varchar(35) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `accounts` (`username`, `password`, `fullname`) VALUES
('20302022',	'2022',	'Oka R. Abdillah');

DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id_anggota` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `anggota` (`id_anggota`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(20302018,	'Fitriana',	'wanita',	'Mandastana'),
(20302022,	'Oka R. Abdillah',	'pria',	'Handil Bakti');

DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id_buku` int(10) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(100) NOT NULL,
  `kategori_buku` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah_buku` int(10) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `buku` (`id_buku`, `judul_buku`, `kategori_buku`, `keterangan`, `jumlah_buku`) VALUES
(1,	'Kalkulus untuk SD kelas 3',	'pelajaran',	'Aman',	10),
(2,	'Belajar PHP',	'Infromatika',	'Tutorial',	10),
(4,	'Ayo memasak',	'novel',	'Kosong',	10);

-- 2021-12-26 12:15:45