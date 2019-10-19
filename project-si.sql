-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 11:34 PM
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
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aktor`
--

CREATE TABLE `tbl_aktor` (
  `id_aktor` int(11) NOT NULL,
  `peran_aktor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aktor`
--

INSERT INTO `tbl_aktor` (`id_aktor`, `peran_aktor`) VALUES
(1, 'Admin'),
(2, 'Dosen Jurusan'),
(3, 'Dosen Pembimbing'),
(4, 'Mahasiswa');

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
(1, 1, 'Title & Akses Menu', 'menu/title', 'icon-grid', '1'),
(2, 1, 'Sub Menu', 'menu/submenu', 'icon-grid', '1');

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
(2, 'test');

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
  MODIFY `id_akses_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_aktor`
--
ALTER TABLE `tbl_aktor`
  MODIFY `id_aktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  MODIFY `id_sub_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_title_menu`
--
ALTER TABLE `tbl_title_menu`
  MODIFY `id_title_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
