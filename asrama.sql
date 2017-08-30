-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Agu 2017 pada 10.25
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asrama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `nomor` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `nomor`) VALUES
(1, '101'),
(4, '106');

-- --------------------------------------------------------

--
-- Stand-in structure for view `kamarmhs`
--
CREATE TABLE `kamarmhs` (
`nim` int(10)
,`nama` varchar(50)
,`jurusan` varchar(50)
,`nohp` int(15)
,`line` varchar(30)
,`id_kamar` int(11)
,`id` int(11)
,`nomor` varchar(3)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nohp` int(15) NOT NULL,
  `line` varchar(30) NOT NULL,
  `id_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `nohp`, `line`, `id_kamar`) VALUES
(123134134, '134134', '134134', 1341, '34134', 1),
(1301154160, 'Ipat Ganteng', 'S1 INPOR', 70888, 'banyak', 1),
(1301154161, '989898', '9898989', 838, '9898', 0),
(1301154567, 'Hoho', 'IF', 2147483647, 'Banyak', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `report`
--
CREATE TABLE `report` (
`id` int(11)
,`nomor` varchar(3)
,`nim` int(11)
,`nama` varchar(50)
,`line` varchar(30)
,`status` enum('masuk','keluar')
,`nohp` int(15)
,`tgl` varchar(90)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `status` enum('masuk','keluar') NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_kamar`, `nim`, `status`, `tgl`) VALUES
(1, 1, 1301154160, 'masuk', '2017-08-30 01:17:38'),
(2, 1, 1301154160, 'masuk', '2017-08-30 01:18:43'),
(3, 1, 1301154160, 'masuk', '2017-08-30 01:19:56'),
(4, 1, 1301154160, 'masuk', '2017-08-30 01:20:24'),
(5, 1, 1301154160, 'masuk', '2017-08-30 01:20:32'),
(6, 1, 1301154160, 'masuk', '2017-08-30 01:21:02'),
(7, 1, 1301154160, 'masuk', '2017-08-30 01:22:06'),
(8, 1, 1301154160, 'masuk', '2017-08-30 01:22:27'),
(9, 1, 1301154160, 'masuk', '2017-08-30 01:23:41'),
(10, 1, 1301154160, 'masuk', '2017-08-30 01:23:53'),
(11, 1, 1301154160, 'masuk', '2017-08-30 01:24:25'),
(12, 1, 1301154160, 'masuk', '2017-08-30 01:24:49'),
(13, 1, 1301154160, 'keluar', '2017-08-30 01:24:54'),
(14, 1, 1301154160, 'masuk', '2017-08-30 08:24:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `no_hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `no_hp`) VALUES
(1, 'admin', 'admin123', 'Admin Ganteng', '0808808');

-- --------------------------------------------------------

--
-- Struktur untuk view `kamarmhs`
--
DROP TABLE IF EXISTS `kamarmhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kamarmhs`  AS  select `m`.`nim` AS `nim`,`m`.`nama` AS `nama`,`m`.`jurusan` AS `jurusan`,`m`.`nohp` AS `nohp`,`m`.`line` AS `line`,`m`.`id_kamar` AS `id_kamar`,`k`.`id` AS `id`,`k`.`nomor` AS `nomor` from (`mahasiswa` `m` join `kamar` `k` on((`m`.`id_kamar` = `k`.`id`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `report`
--
DROP TABLE IF EXISTS `report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report`  AS  select `t`.`id` AS `id`,`k`.`nomor` AS `nomor`,`t`.`nim` AS `nim`,`mahasiswa`.`nama` AS `nama`,`mahasiswa`.`line` AS `line`,`t`.`status` AS `status`,`mahasiswa`.`nohp` AS `nohp`,date_format(`t`.`tgl`,'%W, %d-%c-%Y %H:%i:%s') AS `tgl` from ((`transaksi` `t` join `kamar` `k` on((`t`.`id_kamar` = `k`.`id`))) join `mahasiswa` on((`t`.`nim` = `mahasiswa`.`nim`))) WITH CASCADED CHECK OPTION ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
