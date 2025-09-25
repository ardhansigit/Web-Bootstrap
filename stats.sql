-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2025 at 03:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stats`
--

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `ID` int(11) NOT NULL,
  `map_name` varchar(15) NOT NULL,
  `win_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`ID`, `map_name`, `win_rate`) VALUES
(1, 'de_mirage', 49),
(2, 'de_inferno', 51),
(3, 'de_ancient', 40),
(4, 'de_anubis', 38),
(5, 'de_vertigo', 58),
(6, 'de_dust2', 47),
(7, 'de_nuke', 50),
(8, 'de_overpass', 72),
(9, 'de_train', 50);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `ID` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`ID`, `nama`, `email`, `pesan`) VALUES
(1, 'dombleh', 'dombleh@gmail.com', 'mancing mania mantap'),
(2, 'dombleh', 'dombleh@gmail.com', 'mancing mania mantap'),
(3, 'dombleh', 'dombleh@gmail.com', 'mancing mania mantap'),
(4, 'dombleh', 'dombleh@gmail.com', 'mancing mania mantap'),
(5, 'dombleh', 'dombleh@gmail.com', 'mancing mania mantap'),
(6, 'dombleh', 'dombleh@gmail.com', 'mancing mania mantap'),
(7, 'dombleh', 'dombleh@gmail.com', 'mancing mania mantap'),
(8, 'dombleh', 'dombleh@gmail.com', 'mancing mania mantap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
