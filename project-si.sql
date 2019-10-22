-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 07:58 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(12, 1, 2),
(13, 1, 3);

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
  `nama_dosen` varchar(128) NOT NULL,
  `aktor_id` int(128) NOT NULL,
  `mahasiswa_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `nama_dosen`, `aktor_id`, `mahasiswa_id`) VALUES
('012019102201', 'Yunita Sari, ST, MMSI', 3, 0),
('012019102302', 'Essy Malays, S.Kom, M.Kom, MMSI', 0, 0);

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
(1, 1, 'Menu Title', 'menu/title', 'fa fa-table', '1'),
(2, 1, 'Sub Menu', 'menu/submenu', 'fa fa-table', '1'),
(4, 1, 'Akses Menu', 'menu/aktor', 'fa fa-user', '1'),
(5, 2, 'Master List Dosen', 'dosen/list', 'fa fa-users', '1'),
(6, 2, 'Dosen Pembimbing', 'dosen/dospem', 'fa fa-users', '1'),
(7, 3, 'Master List Mahasiswa', 'mahasiswa/list', 'fa fa-users', '1');

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
(1, 'Menu Manajemen'),
(2, 'Dosen'),
(3, 'Mahasiswa');

--
-- Indexes for dumped tables
--

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
  ADD UNIQUE KEY `id_dosen` (`id_dosen`);

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
-- AUTO_INCREMENT for table `tbl_akses_menu`
--
ALTER TABLE `tbl_akses_menu`
  MODIFY `id_akses_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_aktor`
--
ALTER TABLE `tbl_aktor`
  MODIFY `id_aktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  MODIFY `id_sub_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_title_menu`
--
ALTER TABLE `tbl_title_menu`
  MODIFY `id_title_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
