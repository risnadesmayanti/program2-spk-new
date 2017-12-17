-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 03:55 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE IF NOT EXISTS `tb_alternatif` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id`, `nama`, `deskripsi`) VALUES
(0, 'Desa Godog', 'Merupakan desa yang terletak dibagian utara kabupaten Garut'),
(1, 'Desa Situjaya', 'Merupakan desa yang terletak dibagian selatan Kabupaten Garut'),
(2, 'Desa Situsaeur', 'Merupakan Desa yang terletak di samping Desa Wanaraja'),
(3, 'Desa Karangsari', 'Merupakan DEsa yang berada sebelah dari Desa Situsaeur'),
(4, 'Desa Mekarsari', 'Merupakan DEsa yang memiliki komudiatas mekarsari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_eigen`
--

CREATE TABLE IF NOT EXISTS `tb_eigen` (
`id` int(11) NOT NULL,
  `idk` int(11) NOT NULL,
  `ida` int(11) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE IF NOT EXISTS `tb_kriteria` (
`id` int(11) NOT NULL,
  `kriteria` text NOT NULL,
  `deskripsi` text NOT NULL,
  `eigen` double DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id`, `kriteria`, `deskripsi`, `eigen`) VALUES
(1, 'Keberadaan Fasilitas Pendidikan', 'Jumlah keberadaan fasilitas pendidikan dapat mempengaruhi sejauh mana desa tersebut tertinggal atau tidak', 0.23493365442278),
(2, 'Keberadaan Fasilitas Kesehatan', 'Jumlah keberadaan fasilitas kesehatan merupakan hal yang cukup penting, menyangkut kedalam tingkat kesehatan masyarakat suatu desa', 0.26888107356337),
(3, 'Banyaknya Industri Kecil', 'Dengan jumlah industri kecil, dapat merepresentasikan pendapatan dari setiap desa.', 0.15280200013834),
(4, 'Tingkat Kesejahteraan Keluarga', 'Tingkat kesejahteraan keluarga dapat mencerminkan tingkat kebahagiaan masyarakatnya', 0.21431646158712),
(5, 'Jarak Desa ke Pusat Kota', 'Ukuran jarak dekatnya akses desa ke pusat kota', 0.12906681028838);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matriks`
--

CREATE TABLE IF NOT EXISTS `tb_matriks` (
`id` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tb_matriks`
--

INSERT INTO `tb_matriks` (`id`, `x`, `y`, `value`) VALUES
(1, 0, 0, 1),
(2, 0, 1, 0.67),
(3, 0, 2, 3),
(4, 0, 3, 0.67),
(5, 0, 4, 1.5),
(6, 1, 0, 1.5),
(7, 1, 1, 1),
(8, 1, 2, 1.67),
(9, 1, 3, 1.5),
(10, 1, 4, 1.67),
(11, 2, 0, 0.33),
(12, 2, 1, 0.6),
(13, 2, 2, 1),
(14, 2, 3, 0.75),
(15, 2, 4, 2),
(16, 3, 0, 1.5),
(17, 3, 1, 0.67),
(18, 3, 2, 1.33),
(19, 3, 3, 1),
(20, 3, 4, 1.33),
(21, 4, 0, 0.67),
(22, 4, 1, 0.6),
(23, 4, 2, 0.5),
(24, 4, 3, 0.75),
(25, 4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matriks2`
--

CREATE TABLE IF NOT EXISTS `tb_matriks2` (
`id` int(11) NOT NULL,
  `idk` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tb_matriks2`
--

INSERT INTO `tb_matriks2` (`id`, `idk`, `x`, `y`, `value`) VALUES
(1, 1, 0, 0, 1),
(2, 1, 0, 1, 0.25),
(3, 1, 1, 0, 4),
(4, 1, 1, 1, 1),
(5, 1, 0, 0, 1),
(6, 2, 0, 1, 0.5),
(7, 2, 1, 0, 2),
(8, 2, 1, 1, 1),
(9, 3, 0, 0, 1),
(10, 3, 0, 1, 1.33),
(11, 3, 1, 0, 0.75),
(12, 3, 1, 1, 1),
(13, 4, 0, 0, 1),
(14, 4, 0, 1, 0.5),
(15, 4, 1, 0, 2),
(16, 4, 1, 1, 1),
(18, 5, 0, 0, 1),
(19, 5, 0, 1, 0.5),
(20, 5, 1, 1, 1),
(21, 5, 1, 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_eigen`
--
ALTER TABLE `tb_eigen`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_matriks`
--
ALTER TABLE `tb_matriks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_matriks2`
--
ALTER TABLE `tb_matriks2`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_eigen`
--
ALTER TABLE `tb_eigen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_matriks`
--
ALTER TABLE `tb_matriks`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_matriks2`
--
ALTER TABLE `tb_matriks2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
