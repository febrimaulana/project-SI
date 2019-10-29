-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 04:06 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-si`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username_admin` varchar(128) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `no_telp_admin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username_admin`, `nama_admin`, `email_admin`, `no_telp_admin`) VALUES
('febrimaulana', 'Febri Maulana', '5386917db82aa4b9c10598e94f7360cbfc14b4a97a8ea1c5d5af0a96c70fb70a2a1f1629c81329ff96c51a6374ee2018c82e275d99517325cb073717d4e2ee38fbR8oKDrnHKPo4MMAekd70naXWrrJCZqInexwaw/r0WOdZVA', '081818972724');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akses_login`
--

CREATE TABLE `tbl_akses_login` (
  `id_akses_login` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `otp_akses_login` varchar(255) DEFAULT NULL,
  `aktor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akses_login`
--

INSERT INTO `tbl_akses_login` (`id_akses_login`, `username`, `otp_akses_login`, `aktor_id`) VALUES
(11, 'febrimaulana', '932108', 1),
(13, '1544390042', '419607', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akses_menu`
--

CREATE TABLE `tbl_akses_menu` (
  `id_akses_menu` int(11) NOT NULL,
  `aktor_id` int(11) NOT NULL,
  `title_menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akses_menu`
--

INSERT INTO `tbl_akses_menu` (`id_akses_menu`, `aktor_id`, `title_menu_id`) VALUES
(11, 1, 1),
(19, 2, 2),
(20, 2, 3),
(21, 1, 4),
(22, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aktor`
--

CREATE TABLE `tbl_aktor` (
  `id_aktor` int(11) NOT NULL,
  `nama_aktor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aktor`
--

INSERT INTO `tbl_aktor` (`id_aktor`, `nama_aktor`) VALUES
(1, 'Admin'),
(2, 'Dosen Jurusan'),
(3, 'Dosen Pembimbing'),
(4, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id_dosen` varchar(128) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `email_dosen` varchar(255) NOT NULL,
  `no_telp_dosen` varchar(128) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `alamat_dosen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `nama_dosen`, `email_dosen`, `no_telp_dosen`, `jurusan_id`, `alamat_dosen`) VALUES
('123456789', 'Febri', 'c0a7cf3ef2c67d842cd8ab02380e481400f2ef675fb6cfb36bc284f93586a8d29f16f338b23cbb07f5206f9c2fc81b32aa3fce84d64362a0c4490ec26688146bgH7Co2dkPCk30T9IO49MIA7kVFStp9TO0SxFpAum', '081818972724', 1, 'JakSel'),
('1544390042', 'Febri', '3b287c9ea52f7e75271b0a63c724c86294a4c964ac091849c1ee062c12fc40e4bebf3e6a91e95510c48f5cad0a191b948fe1bd391c1d5d2deebf7f63ff499959lm9UEqqrPtWwaJHk+5VyM/W4MLjZhPJ+4VILEQlkh6wBOf1i', '081818972724', 2, 'depok');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Sistem Informasi'),
(2, 'Teknik Informatika'),
(3, 'Arsitek');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mahasiswa` varchar(128) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `email_mahasiswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_menu`
--

CREATE TABLE `tbl_sub_menu` (
  `id_sub_menu` int(11) NOT NULL,
  `title_menu_id` int(11) NOT NULL,
  `nama_sub_menu` varchar(255) NOT NULL,
  `url_sub_menu` varchar(255) NOT NULL,
  `icon_sub_menu` varchar(255) NOT NULL,
  `status_sub_menu` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_menu`
--

INSERT INTO `tbl_sub_menu` (`id_sub_menu`, `title_menu_id`, `nama_sub_menu`, `url_sub_menu`, `icon_sub_menu`, `status_sub_menu`) VALUES
(1, 1, 'Admin', 'admin', 'fa fa-user', '1'),
(2, 1, 'Dosen Jurusan', 'dosen/jurusan', 'fa fa-users', '1'),
(3, 1, 'Jurusan', 'jurusan', 'fa fa-users', '1'),
(4, 1, 'Menu Title', 'menu/title', 'fa fa-table', '1'),
(5, 1, 'Sub Menu', 'menu/submenu', 'fa fa-table', '1'),
(6, 1, 'Akses Menu', 'menu/aktor', 'fa fa-user', '1'),
(8, 4, 'Dosen Pembiming', 'dosen/pembimbing', 'fa fa-users', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_title_menu`
--

CREATE TABLE `tbl_title_menu` (
  `id_title_menu` int(11) NOT NULL,
  `nama_title_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_title_menu`
--

INSERT INTO `tbl_title_menu` (`id_title_menu`, `nama_title_menu`) VALUES
(1, 'Sistem Manajemen'),
(4, 'Master Data'),
(5, 'Dosen'),
(6, 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `tbl_akses_login`
--
ALTER TABLE `tbl_akses_login`
  ADD PRIMARY KEY (`id_akses_login`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_akses_menu`
--
ALTER TABLE `tbl_akses_menu`
  ADD PRIMARY KEY (`id_akses_menu`);

--
-- Indexes for table `tbl_aktor`
--
ALTER TABLE `tbl_aktor`
  ADD PRIMARY KEY (`id_aktor`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  ADD PRIMARY KEY (`id_sub_menu`);

--
-- Indexes for table `tbl_title_menu`
--
ALTER TABLE `tbl_title_menu`
  ADD PRIMARY KEY (`id_title_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akses_login`
--
ALTER TABLE `tbl_akses_login`
  MODIFY `id_akses_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_akses_menu`
--
ALTER TABLE `tbl_akses_menu`
  MODIFY `id_akses_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_aktor`
--
ALTER TABLE `tbl_aktor`
  MODIFY `id_aktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  MODIFY `id_sub_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_title_menu`
--
ALTER TABLE `tbl_title_menu`
  MODIFY `id_title_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
