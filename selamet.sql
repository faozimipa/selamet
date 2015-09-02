-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Sep 2015 pada 11.06
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `selamet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `pendidikan` enum('SD','SLTP','SLTA','S1','S2','S3') NOT NULL,
  `sekolah` enum('MTs','MA') NOT NULL,
  `jabatan` enum('0','1','2','3') NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan`, `sekolah`, `jabatan`, `mapel`) VALUES
('1212331800307020001', 'KH. Abu Toyyib', 'Pati', '18071954', 'L', 'SLTA', 'MA', '3', 'Quran Hadis'),
('1234567890', 'faozi', 'Tegal', '08081992', 'L', 'S3', 'MA', '0', 'AL Komputer'),
('131233180007300002', 'KH.M. Ridwan', 'Pati', '31051956', 'L', 'SLTA', 'MA', '3', 'Nahwu Shorof'),
('197106142005011003', 'Abdul Kalim, S.Pd.I., M.M', 'Patifosi', '14061971', 'L', 'S2', 'MA', '3', 'Fikih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_guru`
--

CREATE TABLE IF NOT EXISTS `nilai_guru` (
`id` int(5) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `na` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_guru`
--

INSERT INTO `nilai_guru` (`id`, `nip`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `na`) VALUES
(6, '1212331800307020001', 5, 4, 4, 4, 5, 4, '4.300398713');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_kriteria`
--

CREATE TABLE IF NOT EXISTS `nilai_kriteria` (
`id` int(11) NOT NULL,
  `a11` varchar(11) NOT NULL,
  `a12` varchar(11) NOT NULL,
  `a13` varchar(11) NOT NULL,
  `a14` varchar(11) NOT NULL,
  `a15` varchar(11) NOT NULL,
  `a16` varchar(11) NOT NULL,
  `a21` varchar(11) NOT NULL,
  `a22` varchar(11) NOT NULL,
  `a23` varchar(11) NOT NULL,
  `a24` varchar(11) NOT NULL,
  `a25` varchar(11) NOT NULL,
  `a26` varchar(11) NOT NULL,
  `a31` varchar(11) NOT NULL,
  `a32` varchar(11) NOT NULL,
  `a33` varchar(11) NOT NULL,
  `a34` varchar(11) NOT NULL,
  `a35` varchar(11) NOT NULL,
  `a36` varchar(11) NOT NULL,
  `a41` varchar(11) NOT NULL,
  `a42` varchar(11) NOT NULL,
  `a43` varchar(11) NOT NULL,
  `a44` varchar(11) NOT NULL,
  `a45` varchar(11) NOT NULL,
  `a46` varchar(11) NOT NULL,
  `a51` varchar(11) NOT NULL,
  `a52` varchar(11) NOT NULL,
  `a53` varchar(11) NOT NULL,
  `a54` varchar(11) NOT NULL,
  `a55` varchar(11) NOT NULL,
  `a56` varchar(11) NOT NULL,
  `a61` varchar(11) NOT NULL,
  `a62` varchar(11) NOT NULL,
  `a63` varchar(11) NOT NULL,
  `a64` varchar(11) NOT NULL,
  `a65` varchar(11) NOT NULL,
  `a66` varchar(11) NOT NULL,
  `b11` varchar(11) NOT NULL,
  `b21` varchar(11) NOT NULL,
  `b31` varchar(11) NOT NULL,
  `b41` varchar(11) NOT NULL,
  `b51` varchar(11) NOT NULL,
  `b61` varchar(11) NOT NULL,
  `valid` enum('Y','N') NOT NULL,
  `lihat` enum('Y','N') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_kriteria`
--

INSERT INTO `nilai_kriteria` (`id`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a31`, `a32`, `a33`, `a34`, `a35`, `a36`, `a41`, `a42`, `a43`, `a44`, `a45`, `a46`, `a51`, `a52`, `a53`, `a54`, `a55`, `a56`, `a61`, `a62`, `a63`, `a64`, `a65`, `a66`, `b11`, `b21`, `b31`, `b41`, `b51`, `b61`, `valid`, `lihat`) VALUES
(1, '1', '2', '3', '0.33333', '3', '4', '0.5', '1', '2', '0.2', '2', '1', '0.333333333', '0.5', '1', '0.33333', '1', '1', '3.000030000', '5', '3.000030000', '1', '3', '5', '0.333333333', '0.5', '1', '0.333333333', '1', '2', '0.25', '1', '1', '0.2', '0.5', '1', '0.227942891', '0.119893865', '0.084666919', '0.397683808', '0.096571912', '0.073240602', 'Y', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('1212331800307020001', 'ac43724f16e9241d990427ab7c8f4228'),
('1234567890', 'ac43724f16e9241d990427ab7c8f4228'),
('131233180007300002', 'ac43724f16e9241d990427ab7c8f4228'),
('197106142005011003', 'ac43724f16e9241d990427ab7c8f4228');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `nilai_guru`
--
ALTER TABLE `nilai_guru`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_guru`
--
ALTER TABLE `nilai_guru`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
