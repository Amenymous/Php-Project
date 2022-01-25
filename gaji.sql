-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 02:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `gajii`
--

CREATE TABLE `gajii` (
  `no_resit_gaji` varchar(10) NOT NULL,
  `id_pemain` varchar(225) DEFAULT NULL,
  `id_pasukan` varchar(225) DEFAULT NULL,
  `jum_gaji_ditetapkan` int(10) DEFAULT NULL,
  `cukai_pemain` float DEFAULT NULL,
  `imbuhan_mvp` int(10) DEFAULT NULL,
  `jum_gaji_bersih` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gajii`
--

INSERT INTO `gajii` (`no_resit_gaji`, `id_pemain`, `id_pasukan`, `jum_gaji_ditetapkan`, `cukai_pemain`, `imbuhan_mvp`, `jum_gaji_bersih`) VALUES
('R001', 'A001', 'P001', 10000, 0.08, 1000, 10200),
('R002', 'A002', 'P002', 8000, 0.08, 0, 7360),
('R003', 'A003', 'P003', 9000, 0.08, 1000, 9280),
('R004', 'A004', 'P001', 10000, 0.08, 0, 9200),
('R005', 'A005', 'P002', 7000, 0.08, 0, 6440),
('R006', 'A006', 'P003', 10000, 0.08, 1000, 10200),
('R007', 'A007', 'P002', 15000, 0.08, 0, 13800),
('R008', 'A008', 'P002', 10000, 0.08, 0, 9200),
('R009', 'A009', 'P002', 15000, 0.08, 1000, 14800);

-- --------------------------------------------------------

--
-- Table structure for table `pasukan`
--

CREATE TABLE `pasukan` (
  `id_pasukan` varchar(225) NOT NULL,
  `nama_pasukan` varchar(20) DEFAULT NULL,
  `negeri_pasukan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasukan`
--

INSERT INTO `pasukan` (`id_pasukan`, `nama_pasukan`, `negeri_pasukan`) VALUES
('P001', 'Kuching FA', 'Sarawak'),
('P002', 'Pahang FA', 'Pahang'),
('P003', 'Kelantan United', 'Kelantan');

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `id_pemain` varchar(225) NOT NULL,
  `nama_pemain` varchar(20) DEFAULT NULL,
  `umur` int(5) DEFAULT NULL,
  `no_jersi` int(5) DEFAULT NULL,
  `posisi` varchar(10) DEFAULT NULL,
  `gred_pemain` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id_pemain`, `nama_pemain`, `umur`, `no_jersi`, `posisi`, `gred_pemain`) VALUES
('A001', 'Amri Yahyaa', 29, 9, 'Penyerang', 'A'),
('A002', 'Zainal Abidin', 25, 10, 'Penyerang', 'A'),
('A003', 'Daudsu Jamaludin', 34, 2, 'Pertahanan', 'B'),
('A004', 'Khairil', 23, 7, 'Penyerang', 'A'),
('A005', 'Khairiuddin', 30, 8, 'Penyerang', 'B'),
('A006', 'Azim Roszaki', 22, 23, 'Penyerang', 'A'),
('A007', 'Muzammil', 24, 17, 'Penyerang', 'A'),
('A008', 'Zakir', 29, 16, 'Penyerang', 'A'),
('A009', 'Zamri', 22, 18, 'Penyerang', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'Admin', 'Admin123', '2021-06-21 14:59:55'),
(3, 'Admin2', '$2y$10$acPYrYNHuwR/kTAErqruAOop0gB4UEP32RQoltIA9lBrBsf1ekn66', '2021-06-21 15:03:04'),
(4, 'kimi', '$2y$10$yGoErwfwup3kos.FXwdOUOK.Dslk.FIvdfUYcIsJ85iRGU/jwff8O', '2021-11-18 19:55:25');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_gajii`
-- (See below for the actual view)
--
CREATE TABLE `v_gajii` (
`id_pemain` varchar(225)
,`nama_pemain` varchar(20)
,`id_pasukan` varchar(225)
,`jum_gaji_ditetapkan` int(10)
,`cukai_pemain` float
,`imbuhan_mvp` int(10)
,`jum_gaji_bersih` int(10)
);

-- --------------------------------------------------------

--
-- Structure for view `v_gajii`
--
DROP TABLE IF EXISTS `v_gajii`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_gajii`  AS  select `pemain`.`id_pemain` AS `id_pemain`,`pemain`.`nama_pemain` AS `nama_pemain`,`pasukan`.`id_pasukan` AS `id_pasukan`,`gajii`.`jum_gaji_ditetapkan` AS `jum_gaji_ditetapkan`,`gajii`.`cukai_pemain` AS `cukai_pemain`,`gajii`.`imbuhan_mvp` AS `imbuhan_mvp`,`gajii`.`jum_gaji_bersih` AS `jum_gaji_bersih` from ((`pemain` join `pasukan`) join `gajii`) where ((`pemain`.`id_pemain` = `gajii`.`id_pemain`) and (`gajii`.`id_pasukan` = `pasukan`.`id_pasukan`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gajii`
--
ALTER TABLE `gajii`
  ADD PRIMARY KEY (`no_resit_gaji`),
  ADD KEY `id_pemain` (`id_pemain`),
  ADD KEY `id_pasukan` (`id_pasukan`);

--
-- Indexes for table `pasukan`
--
ALTER TABLE `pasukan`
  ADD PRIMARY KEY (`id_pasukan`);

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`id_pemain`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gajii`
--
ALTER TABLE `gajii`
  ADD CONSTRAINT `gajii_ibfk_1` FOREIGN KEY (`id_pemain`) REFERENCES `pemain` (`id_pemain`),
  ADD CONSTRAINT `gajii_ibfk_2` FOREIGN KEY (`id_pasukan`) REFERENCES `pasukan` (`id_pasukan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
