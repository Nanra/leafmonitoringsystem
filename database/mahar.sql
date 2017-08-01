-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2017 at 07:44 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahar`
--

-- --------------------------------------------------------

--
-- Table structure for table `sementara`
--

CREATE TABLE `sementara` (
  `id` int(8) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `luas` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sementara`
--

INSERT INTO `sementara` (`id`, `jumlah`, `luas`) VALUES
(106, 23, 34),
(107, 34, 45),
(108, 34, 23),
(109, 54, 56),
(110, 34, 65),
(111, 67, 78),
(112, 86, 45),
(113, 34, 67),
(114, 86, 45),
(115, 34, 67);

-- --------------------------------------------------------

--
-- Table structure for table `utama`
--

CREATE TABLE `utama` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `totalluas` int(100) NOT NULL,
  `totaljumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utama`
--

INSERT INTO `utama` (`id`, `nama`, `totalluas`, `totaljumlah`) VALUES
(50, 'Daun Manggis', 1143, 1609),
(51, 'Daun Pepaya Super', 1055, 1542),
(52, 'Daun Salam', 1055, 1542),
(53, 'Daun Pinang', 464, 846),
(57, 'Daun Pinang', 398, 360),
(58, 'Daun Kweni', 321, 292),
(59, 'Daun Pinus', 321, 292),
(60, 'Daun Durian', 1758, 325);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sementara`
--
ALTER TABLE `sementara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utama`
--
ALTER TABLE `utama`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sementara`
--
ALTER TABLE `sementara`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `utama`
--
ALTER TABLE `utama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
