-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 04:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
('arif', 'Arif', '9a0d3d91456694dbf2d13b85a56ed5206d43b1f04fe74cce2dc07f9cdd2b942ecd438513216bc08ab27b3a622863db235bcbff461071f2b162f6cf6dbf248f54+/rwRlKOP13GHe6coPWCitpkv677iQFuTPpEpQfixxKdBp9BKg==', '081818972724'),
('febrimaulana', 'Febri Maulana', '5386917db82aa4b9c10598e94f7360cbfc14b4a97a8ea1c5d5af0a96c70fb70a2a1f1629c81329ff96c51a6374ee2018c82e275d99517325cb073717d4e2ee38fbR8oKDrnHKPo4MMAekd70naXWrrJCZqInexwaw/r0WOdZVA', '081818972724');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akses_login`
--

CREATE TABLE `tbl_akses_login` (
  `id_akses_login` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `otp_akses_login` varchar(255) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `aktor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akses_login`
--

INSERT INTO `tbl_akses_login` (`id_akses_login`, `username`, `otp_akses_login`, `jurusan_id`, `aktor_id`) VALUES
(11, 'febrimaulana', '475236', NULL, 1),
(15, '1544390042', '$2y$10$70Bpm/9CyR/gJd6.axvekOpD5tjjlnYuIvl9SsSp7Ltf10pMPZPTK', 2, 2),
(16, 'arif', NULL, NULL, 1);

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
(22, 3, 5),
(23, 2, 4),
(24, 2, 5);

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
  `alamat_dosen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `nama_dosen`, `email_dosen`, `no_telp_dosen`, `alamat_dosen`) VALUES
('1544390042', 'Dwi', '9b2accad831f0bfd17b66b99f01eba3689227d1db269531e820388a3f558a669ed423b114bda512f9f8a8f4ac00671ddc87d2c1ac6573353ab5c28693a182b28uoS8NeUCQhnDJLq1AyhBAcTJNQDcX2pD50PoNUxeN1KYgJI=', '081818972724', 'depok');

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
(8, 4, 'Dosen Pembiming', 'dosen/pembimbing', 'fa fa-users', '1'),
(16, 4, 'Mahasiswa', 'mahasiswa', 'fa fa-users', '1');

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
  MODIFY `id_akses_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_akses_menu`
--
ALTER TABLE `tbl_akses_menu`
  MODIFY `id_akses_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `id_sub_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_title_menu`
--
ALTER TABLE `tbl_title_menu`
  MODIFY `id_title_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
