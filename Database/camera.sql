-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 11:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_sony`
--

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `id_camera` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `tipe` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id_camera`, `nama`, `deskripsi`, `tipe`, `harga`) VALUES
(1, 'E-Mount APS', 'Small and stylish mirrorless cameras. A large APS-C sensor and cutting-edge technology.', 'Interchangeable-lens Cameras', 'Rp. 7.000.000'),
(4, 'E-mount 35-mm Full Frame', 'High-performance mirrorless cameras. 35-mm full-frame image quality in a lightweight body.', 'Interchangeable-lens Cameras', 'Rp. 12.000.000'),
(5, 'E-Mount', 'To match our compact and mirrorless E-mount cameras, this expanding lineup offers different full-frame and APS-C options.', 'Lenses', 'Rp. 2.000.000'),
(6, 'RX Series', 'Power cameras delivering professional-quality results in a pocket-friendly package.', 'Compact Cameras', 'Rp. 7.000.000'),
(7, 'For Compact Cameras', 'Batteries, lens filters, cases and more to enhance your shooting experience', 'Accessories', 'Rp.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id_camera`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id_camera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
