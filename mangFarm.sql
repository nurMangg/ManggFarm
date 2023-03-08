-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2023 at 06:22 AM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studywithmang`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `subjectQ` varchar(100) NOT NULL,
  `namaFile` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `email`, `no_hp`, `subjectQ`, `namaFile`, `comment`) VALUES
(1, 'Nur Rohman', 'rohman', '+6285712338', 'pemesanan', '', 'pesan gorengan'),
(2, 'NUr', 'ile', 'telepone', 'subjecte', '', 'commente'),
(3, 'NUr', 'ile', 'telepone', 'subjecte', '', 'commente'),
(4, 'Nur Rohman', 'rohmanuyeoke@gmail.com', '+6285713050749', 'Pembelian', '', 'Saya Mau Beli 50 Karung'),
(5, 'budiman', 'budmian@gmail.com', '+6296871236841', 'Pembelian', '', 'Saya mau Beli karung 60 Bibit'),
(6, 'Nur Rohman', 'rohmanuyeoke@gmail.com', '+6285713050749', 'Konsultasi', '', 'Saya ingin melakukan konsultasi mengenai kenapa tanaman jagung saya belum berbuah sampai sekarang'),
(7, 'Nur Rohman', '', '+6285713050749', 'Pembelian', '', 'Saya ingin membeli benih jagung dalam jumlah banyak'),
(8, 'Sehudin', 'udin@gmail.com', '+6299871982342', 'Pembelian', '', 'Pesan 100 Karung'),
(9, 'sa', '', '+6285713050749', 'Konsultasi', '', 'asdd'),
(10, 'Nur Rohman', 'ew@gmail.com', '+6285713050749', 'Pembelian', '', 'fdsfsfs'),
(11, 'Nur Rohman', 'rohmanuyeoke@gmail.com', '+6285713050749', 'Pembelian', '', 'Konsultasi masalah ini'),
(12, 'Nur Rohman', 'rohmanuyeoke@gmail.com', '+6285713050749', 'Pembelian', '', 'Konsultasi masalah ini'),
(13, 'Nur Rohman', 'rohmanuyeoke@gmail.com', '+6285713050749', 'Konsultasi', '', '233qw'),
(14, 'Nur Rohman', 'rohmanuyeoke@gmail.com', '+6285713050749', 'Pembelian', '', 'aa'),
(15, 'Nur Rohman', 'rohmanuyeoke@gmail.com', '+6285713050749', 'Pembelian', 'Sketsa.jpg', 'pp'),
(16, 'Nur Rohman', 'ew@gmail.com', '+6285713050749', 'Konsultasi', 'Screenshot_2023-01-14-15-15-52_1920x2280.png', 'hello world');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` varchar(10) NOT NULL,
  `firstname` varchar(10) DEFAULT NULL,
  `lastname` varchar(10) DEFAULT NULL,
  `email` varchar(70) NOT NULL,
  `passwd` varchar(70) NOT NULL,
  `user_web` varchar(10) NOT NULL,
  `dibuat_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `firstname`, `lastname`, `email`, `passwd`, `user_web`, `dibuat_tanggal`) VALUES
('2023011301', 'admin', 'ganteng', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2023-01-13'),
('2023011302', 'nur', 'soleh', 'soleh@gmail.com', '202cb962ac59075b964b07152d234b70', 'pengguna', '2023-01-13'),
('2023011401', 'budi', 'tabudi', 'budi@gmail.com', '00dfc53ee86af02e742515cdcf075ed3', 'pengguna', '2023-01-14'),
('2023011402', 'Nur', 'Rohman', 'rohman@gmail.com', '43747518a55499c7c13af6b9e2910dbf', 'Admin', '2023-01-14'),
('2023011403', 'Sehudin', 'Sehu', 'udin@gmail.com', '8e2978fbe805862694279ecf0fe6e564', 'pengguna', '2023-01-14');

--
-- Triggers `pengguna`
--
DELIMITER $$
CREATE TRIGGER `masuk_pengguna` BEFORE INSERT ON `pengguna` FOR EACH ROW BEGIN
DECLARE tahun CHAR(4);
DECLARE bulan CHAR(2);
DECLARE tanggal CHAR(2);
DECLARE sandi VARCHAR(50);
DECLARE idnya VARCHAR(10);
DECLARE urut CHAR(2);
SELECT YEAR(NEW.dibuat_tanggal) INTO tahun;
SELECT RIGHT(MONTH(NEW.dibuat_tanggal)+100, 2) INTO bulan;
SELECT DAY(NEW.dibuat_tanggal) INTO tanggal;
SELECT RIGHT(COUNT(*)+1001, 2) INTO urut FROM pengguna WHERE dibuat_tanggal = NEW.dibuat_tanggal;
SELECT CONCAT(tahun, bulan, tanggal, urut) INTO idnya; 
SELECT MD5(NEW.passwd) INTO sandi;
SET NEW.id = idnya;
SET NEW.passwd = sandi;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
