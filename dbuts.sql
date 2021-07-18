-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 09:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai_mhs`
--

CREATE TABLE `nilai_mhs` (
  `nim` char(14) NOT NULL,
  `nama_mhs` varchar(45) NOT NULL,
  `matakuliah` varchar(40) NOT NULL,
  `nilai_angka` float NOT NULL,
  `nilai_huruf` char(1) NOT NULL,
  `predikat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_mhs`
--

INSERT INTO `nilai_mhs` (`nim`, `nama_mhs`, `matakuliah`, `nilai_angka`, `nilai_huruf`, `predikat`) VALUES
('A11.2019.11652', 'Vincent Nathaniel M', 'PWL', 100, 'A', 'Istimewa'),
('A11.2019.11653', 'Borjonuis', 'PWL', 80, 'B', 'Terpuji'),
('A11.2019.11654', 'Tianto Wijaya', 'PWL', 60, 'C', 'Cukup'),
('A11.2019.11655', 'Tarjo Yahya', 'PWL', 50, 'D', 'Kurang'),
('A11.2019.11656', 'Yaniar Rian', 'PWL', 40, 'E', 'Sangat Kurang');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
