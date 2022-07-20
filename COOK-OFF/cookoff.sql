-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 06:17 AM
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
-- Database: `cookoff`
--

-- --------------------------------------------------------

--
-- Table structure for table `hakim`
--

CREATE TABLE `hakim` (
  `IDHakim` int(11) NOT NULL,
  `NamaHakim` varchar(35) NOT NULL,
  `telHakim` varchar(12) NOT NULL,
  `kataLaluanM` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `IDPenilaian` int(11) NOT NULL,
  `aspek` varchar(15) NOT NULL,
  `markahPenuh` int(11) DEFAULT NULL,
  `IDHakim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `NoKP` varchar(12) DEFAULT NULL,
  `IDPenilaian` int(11) DEFAULT NULL,
  `Tarikh` date DEFAULT NULL,
  `skor` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `IDHakim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `NoKP` varchar(12) NOT NULL,
  `NamaPeserta` varchar(50) NOT NULL,
  `Katalaluan` varchar(8) NOT NULL,
  `NoTelefon` varchar(12) NOT NULL,
  `status` varchar(10) NOT NULL,
  `jantina` varchar(10) NOT NULL,
  `markah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hakim`
--
ALTER TABLE `hakim`
  ADD PRIMARY KEY (`IDHakim`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`IDPenilaian`),
  ADD KEY `IDhakim` (`IDHakim`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD KEY `NOKP` (`NoKP`),
  ADD KEY `IDnilai` (`IDPenilaian`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`NoKP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hakim`
--
ALTER TABLE `hakim`
  MODIFY `IDHakim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `IDPenilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `Penilaian_Hakim` FOREIGN KEY (`IDHakim`) REFERENCES `hakim` (`IDHakim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD CONSTRAINT `penilaian_pertandingan` FOREIGN KEY (`IDPenilaian`) REFERENCES `penilaian` (`IDPenilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peserta_pertandingan` FOREIGN KEY (`NoKP`) REFERENCES `peserta` (`NoKP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
