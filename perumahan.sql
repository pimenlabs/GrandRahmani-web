-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2015 at 03:40 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perumahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'qwe', 'qwe@qwe', '123', 'qwe'),
(2, 'Muhammad Faris', 'kipray_war@yahoo.com', '087740254580', 'nama saya faris');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
`id` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `tipe`, `gambar`) VALUES
(1, '38', 'tipe36_2.jpg'),
(2, '36', 'tipe36_1.jpg'),
(3, '45', 'tipe45_1.jpg'),
(4, '60', 'tipe45_4.jpg'),
(5, '36', 'tipe45_1.jpg'),
(6, '45', 'tipe45_2.jpg'),
(8, '45', 'tipe70_3.jpg'),
(9, '36', 'tipe60_3.jpg'),
(11, '36', 'tipe45_2.jpg'),
(12, '60', 'tipe60_3.jpg'),
(15, 'Progres', 'stit29des1.jpg'),
(16, 'Progres', 'asd.jpg'),
(21, 'Desain_Khusus', 'tipe45_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
`id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `judul`, `gambar`, `text`) VALUES
(7, 'Testing 1', 'slide1.jpg', 'Testing testing testing testing testing testing testing testing testing testing testing testing testing testing'),
(8, 'Testing 2', 'slide2.jpg', 'Testing testing testing testing testing testing testing testing testing testing testing testing testing testing'),
(9, 'Testing 3', 'slide3.jpg', 'Testing testing testing testing testing testing testing testing testing testing testing testing testing testing'),
(10, 'Testing 4', 'slide4.jpg', 'Testing testing testing testing testing testing testing testing testing testing testing testing testing testing');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
`id` int(11) NOT NULL,
  `informasi` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `informasi`) VALUES
(1, 'informasih berikut adalah untuk marketing pemasaran');

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE IF NOT EXISTS `rumah` (
`id` int(11) NOT NULL,
  `kavling` char(100) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `luas` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`id`, `kavling`, `tipe`, `luas`, `harga`, `status`) VALUES
(18, 'Blok A nomer 1', '36', '3 X 6', '350.000', '1'),
(19, 'Blok A nomer 2', '38', '3 X 8', '450.000', '2'),
(20, 'Blok B nomer 3', '45', '4 X 5', '1.000.000', '3'),
(21, 'Blok B nomer 5', '60', '10 x 10', '25.000.000', '2'),
(22, 'Blok B nomer 9', 'Desain Khusus', '9 x 9', '10.000.000', '2');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `caption` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `caption`) VALUES
(3, 'tipe45_1.jpg', 'Type 45'),
(4, 'tipe45_2.jpg', 'Type 45'),
(7, 'tipe60_1.jpg', 'Type 60'),
(11, 'tipe70_3.jpg', 'Type 70'),
(12, 'Type 60 Kamar Tidur Utama dan Denah.jpg', ''),
(13, 'Type 60 Ruang Keluarga 1.jpg', ''),
(14, 'Type 60 Ruang Keluarga 2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `tlp` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `tlp`) VALUES
(3, 'marketing', 'c769c2bd15500dd906102d9be97fdceb', '123456789'),
(4, 'marketing', 'c769c2bd15500dd906102d9be97fdceb', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
