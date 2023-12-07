-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 11:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `username`, `pw`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(44, 'rega', 'rega', 'rega@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(22) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `logo` text NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `batas` date NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `jabatan`, `lokasi`, `logo`, `keterangan`, `batas`, `gaji`, `nama`) VALUES
(21, 'Data Analyst', 'Yogyakarta', 'ttkj.png', 'Full Time', '2023-01-07', 'Rp 20.000.000', 'Tokopedia'),
(56, 'UI Designer', 'JakSel', 'spe.png', 'Full Time', '2022-12-15', 'Rp 15.000.000', 'Shopee'),
(89, 'Web Design', 'Surabaya', 'unil2.png', 'Full Time', '2022-12-25', 'Rp 8.000.000', 'Unilever'),
(100, 'web design', 'solo', 'tkppp1.png', '', '2023-01-05', '10', 'PERTAMINA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
